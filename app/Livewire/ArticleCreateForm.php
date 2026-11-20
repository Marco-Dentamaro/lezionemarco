<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title;
    public $subtitle;
    public $body;


    public function store(){
        Article::create([
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'body'=>$this->body

        ]);

        session()->flash('articleCreated', 'Articolo creato con successo!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
