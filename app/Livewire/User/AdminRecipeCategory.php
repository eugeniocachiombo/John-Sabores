<?php

namespace App\Livewire\User;

use App\Models\RecipeCategory;
use App\Services\FeedbackService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AdminRecipeCategory extends Component
{
    use WithPagination;

    public $description, $id = null, $search = '';
    public $listeners = ["confirmDelete" => "confirmDelete"];

    protected $rules = [
        'description' => 'required|unique:recipe_categories,description',
    ];

    protected $messages = [
        'description.required' => 'Obrigatório',
        'description.unique' => 'Já existe',
    ];

    public function render()
    {
        return view('livewire.user.admin-recipe-category', [
            'categories' => $this->getCategories(),
        ])
            ->layout("components.layouts.admin.app");
    }

    public function getCategories()
    {
        try {
            $query =  RecipeCategory::orderBy("description", "asc");

            if ($this->search) {
                $query->where("description", "like", "%" . $this->search . "%");
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
            RecipeCategory::create([
                'description' => $this->description,
                'user_id' => Auth::user()->id,
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
            $category =  RecipeCategory::find($id);
            $this->id = $category->id;
            $this->description = $category->description;
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
            RecipeCategory::where("id", $this->id)->update([
                'description' => $this->description,
                'user_id' => Auth::user()->id,
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
            "Tens a Certeza Que Deseja Eliminar?",
            'Após eliminar, será impossível reverter esta acção',
            "Confirmar",
            "Cancelar",
            "confirmDelete",
        ));
    }

    public function confirmDelete()
    {
        try {
            RecipeCategory::findOrFail($this->id)->delete();
            $this->dispatch("sweetalert", FeedbackService::success());
            $this->clear();
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function clear()
    {
        $this->reset('description', 'id');
    }
}
