<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleList extends Component
{

    use WithPagination;

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updatingSearch($search)
    {
        $this->search = $search;
    }

    #[Computed]
    public function articles()
    {
        return Article::orderBy('created_at', 'desc')
            ->status()
            ->where('title', 'like', "%{$this->search}%")
            ->paginate(7);
    }

    public function render()
    {
        return view('livewire.article-list');
    }
}
