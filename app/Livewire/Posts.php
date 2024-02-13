<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $title,$body;

    public $posts;
    public $edit_mode=false;
    public function store(){
       $validated_data = $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create($validated_data);

        session()->flash('message','Post Created Successfully');
        $this->resetInputFields();
    }

    private function resetInputFields(){
        $this->title = '';
        $this->body = '';
    }
     public function edit ($id){
        $this->edit_mode = true;
    }
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }
}
