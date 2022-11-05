<?php

namespace App\Http\Livewire;

use App\Models\Rules;
use Livewire\Component;

class Rule extends Component
{
    public $reason, $period;

    public function render()
    {
        return view('livewire.components.rule', [
            'rules'=> Rules::latest()->paginate(10)
        ]);
    }

    public  function storeRule(){
        $this->validate([
            'reason'=>'required|string',
            'period'=>'required|string'
        ]);
        Rules::create([
            'reason' => $this->reason,
            'period' => $this->period,
        ]);
        session()->flash('ruleSuccess', 'Rules Saved Successfully');
        $this->reset();
    }
    public  function deleteRule($rule_id){
        Rules::find($rule_id)->delete();
        session()->flash('ruleSuccess', 'Rule Deleted Successfully');
    }
}
