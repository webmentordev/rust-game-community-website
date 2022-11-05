<?php

namespace App\Http\Livewire;

use App\Models\Wipes;
use Livewire\Component;

class Wipe extends Component
{
    public $day, $month, $p_day, $p_month, $bp_wipe, $rp_wipe, $year;

    public function render()
    {
        return view('livewire.components.wipe', [
            'wipes'=> Wipes::latest()->paginate(10)
        ]);
    }
    
    public  function storeWipes(){
        $this->validate([
            'day'=>'required|numeric',
            'month'=>'required|string',
            'p_day'=>'required|numeric',
            'p_month'=>'required|string',
            'bp_wipe'=>'required|string',
            'rp_wipe'=>'required|string',
            'year'=>'required|numeric',
        ]);
        Wipes::create([
            'day'=>$this->day,
            'month'=>$this->month,
            'p_day'=>$this->p_day,
            'p_month'=>$this->p_month,
            'bp_wipe'=>$this->bp_wipe,
            'rp_wipe'=>$this->rp_wipe,
            'year'=>$this->year,
        ]);
        session()->flash('wipeSuccess', 'Wipe Day Saved Successfully');
        $this->reset();
    }
    public  function wipeDelete($wipe_id){
        Wipes::find($wipe_id)->delete();
        session()->flash('wipeDeleteSuccess', 'Wipe Day Deleted Successfully');
    }
}
