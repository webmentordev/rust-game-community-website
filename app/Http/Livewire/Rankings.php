<?php

namespace App\Http\Livewire;

use App\Models\Ranking;
use Livewire\Component;

class Rankings extends Component
{
    public $name, $command, $default, $elite;

    public function render()
    {
        return view('livewire.components.rankings', [
            'commands'=> Ranking::latest()->paginate(10),
        ]);
    }
    
    public function storeRanking(){
        $this->validate([
            'name'=>'required|string',
            'command'=>'nullable',
            'default'=>'required|string',
            'elite'=>'required|string',
        ]);
        Ranking::create([
            'name' => $this->name,
            'command' => $this->command,
            'default' => $this->default,
            'elite' => $this->elite,
        ]);
        session()->flash('rankSuccess', 'Rank Saved Successfully');
    }
    public  function deleteRanking($rank_id){
        Ranking::find($rank_id)->delete();
        session()->flash('rankSuccess', 'Rank Deleted Successfully');
    }
}