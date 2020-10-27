<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::latest()->paginate(6);
        return view('livewire.posts.post-index', compact('posts'));
    }
}
