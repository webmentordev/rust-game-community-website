<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;

class Post extends Component
{
    public $title, $command, $post;

    public function render()
    {
        return view('livewire.components.post', [
            'posts'=> Posts::latest()->paginate(10),
        ]);
    }

    public  function storePost(){
        $this->validate([
            'title'=>'required',
            'command'=>'nullable',
            'post'=>'required',
        ]);
        Posts::create([
            'title' => $this->title,
            'commands' => $this->command,
            'post' => $this->post,
        ]);
        session()->flash('postSuccess', 'Server Configration Saved Successfully');
        $this->reset();
    }
    public  function deletePost($post_id){
        $post = Posts::find($post_id);
        $post->delete();
        session()->flash('postSuccess', 'Post Successfully Deleted!');
    }
}
