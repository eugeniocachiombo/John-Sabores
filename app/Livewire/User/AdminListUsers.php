<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Services\FeedbackService;
use Livewire\Component;
use Livewire\WithPagination;

class AdminListUsers extends Component
{
    use WithPagination;

    public $id = null, $search = '';
    public $listeners = ["confirmDelete" => "confirmDelete"];

    public function render()
    {
        return view('livewire.user.admin-list-users', [
            'users' => $this->getUsers(),
        ])
            ->layout("components.layouts.admin.app");
    }

    public function getUsers()
    {
        try {
            $query =  User::orderBy("name", "asc");

            if ($this->search) {
                $query->where("name", "like", "%" . $this->search . "%");
            }

            return $query->paginate(5);
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
            User::findOrFail($this->id)->delete();
            $this->dispatch("sweetalert", FeedbackService::success());
            $this->clear();
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }

    public function clear()
    {
        $this->reset('id');
    }
}
