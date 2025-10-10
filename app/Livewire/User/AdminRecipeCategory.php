<?php

namespace App\Livewire\User;

use App\Models\RecipeCategory;
use App\Services\FeedbackService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminRecipeCategory extends Component
{
    public $description;

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
            'categories' => RecipeCategory::latest()->get(),
        ])
            ->layout("components.layouts.admin.app");
    }



    public function store()
    {
        $this->validate();

        try {

            RecipeCategory::create([
                'description' => $this->description,
                'user_id' => Auth::user()->id,
            ]);

            $this->reset('description');
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function delete($id)
    {
        try {
            RecipeCategory::findOrFail($id)->delete();
            $this->reset('description');
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }
}
