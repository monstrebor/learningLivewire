<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePosts extends Component
{
    #[Rule('required|min:6')]
    public $title;

    #[Rule('required|min:15')]
    public $description;

    public function render()
    {
        return view('livewire.create-posts');
    }

    public function save()
    {
        $this->validate();

        //this is my approach of creating data in the model
        // Post::create([
        //     'title'=>$this->title,
        //     'description'=>$this->description,
        // ]);

        $post = new Post;
        $post->title = $this->title;
        $post->description = $this->description;
        $post->save();

        session()->flash('success', 'Save Succesfully.');
        $this->reset();
    }

    public function close()
    {
        $this->reset();
        return redirect()->route('all-post');
    }
}
