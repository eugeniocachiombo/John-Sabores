<?php

namespace App\Livewire\User;

use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\User;
use App\Services\FeedbackService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminRecipes extends Component
{
    use WithPagination, WithFileUploads;

    public $category_id, $title, $description, $photo, $id = null,
        $searchCategory, $searchUser, $search = '';
    public $recipeFound;
    public $listeners = ["confirmDelete" => "confirmDelete"];

    protected $rules = [
        'title' => 'required|unique:recipe_categories,description',
        'description' => 'required',
        'category_id' => 'required',
        'photo' => 'nullable',
    ];

    protected $messages = [
        'title.required' => 'Obrigatório',
        'title.unique' => 'Já existe',
        'description.required' => 'Obrigatório',
        'category_id.required' => 'Obrigatório',
    ];

    public function render()
    {
        return view('livewire.user.admin-recipes', [
            'recipes' => $this->getRecipes(),
            'categories' => RecipeCategory::orderBy("description", "asc")->get(),
            'users' => User::orderBy("name", "asc")->get(),
        ])
            ->layout("components.layouts.admin.app");
    }

    public function getRecipes()
    {
        try {
            $query =  Recipe::orderBy("title", "asc");

            if ($this->search) {
                $query->where("title", "like", "%" . $this->search . "%");
            }

            if ($this->searchCategory) {
                $query->where("category_id", $this->searchCategory);
            }

            if ($this->searchUser) {
                $query->where("user_id", $this->searchUser);
            }

            return $query->paginate(5);
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function store()
    {
        $this->validate();
        try {

            $path = null;
            if ($this->photo) {
                $path = $this->photo->store("recipes", "public");
            }

            Recipe::create([
                'category_id' => $this->category_id,
                'title' => $this->title,
                'description' => $this->description,
                'user_id' => Auth::user()->id,
                'photo' => $path
            ]);
            $this->dispatch("sweetalert", FeedbackService::success());
            $this->clear();
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function edit($id)
    {
        try {
            $recipe =  Recipe::find($id);
            $this->recipeFound = $recipe;
            $this->id = $recipe->id;
            $this->category_id = $recipe->category_id;
            $this->title = $recipe->title;
            $this->description = $recipe->description;
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function update()
    {
        $this->validate([
            'description' => 'required|unique:recipe_categories,description,' . $this->id,
        ], $this->messages);

        try {

            $path = null;
            if ($this->photo) {
                $path = $this->photo->store("recipes", "public");
            }

            Recipe::where("id", $this->id)->update([
                'category_id' => $this->category_id,
                'title' => $this->title,
                'description' => $this->description,
                'user_id' => Auth::user()->id,
                'photo' => $path
            ]);
            $this->dispatch("sweetalert", FeedbackService::success());
            $this->clear();
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function delete($id)
    {
        $this->id = $id;
        $this->dispatch("sweetalert", FeedbackService::confirm(
            "warning",
            "Tens a Certeza?",
            'Após eliminar, será impossível reverter esta acção',
            "Confirmar",
            "Cancelar",
            "confirmDelete",
        ));
    }

    public function confirmDelete()
    {
        try {
            Recipe::findOrFail($this->id)->delete();
            $this->dispatch("sweetalert", FeedbackService::success());
            $this->clear();
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function clear()
    {
        $this->reset(
            'category_id',
            'title',
            'description',
            'photo',
            'recipeFound',
            'id'
        );
    }
}
