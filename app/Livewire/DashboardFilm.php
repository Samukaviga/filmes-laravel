<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Film;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardFilm extends Component
{
    use WithPagination; // Adiciona o trait de paginação

    public $categories = [];
    public $selectedCategories = [];
    public $search = '';


    public function mount()
    {
        $this->categories = Category::orderBy('name')->get();
    }

    // Reseta a página quando muda o filtro
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedSelectedCategories()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Film::query()->orderBy('name');

        // Filtro por nome
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Filtro por categoria
        if (!empty($this->selectedCategories)) {
            $query->whereIn('categories_id', $this->selectedCategories);
        }

        // Paginação
        $films = $query->paginate(10);

        return view('livewire.dashboard-film', [
            'films' => $films
        ]);
    }
}
