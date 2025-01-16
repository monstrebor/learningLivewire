<?php

namespace App\Livewire\Study;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class AllPosts extends Component
{
    use WithPagination;

    public $posts_per_page = 5;

    public function render()
    {
        $posts = Post::simplePaginate($this->posts_per_page);

        return view('livewire.study.all-posts',[
            'posts'=>$posts
        ]);
    }

    public function loadMore()
    {
        $this->posts_per_page += 5;
    }
}
