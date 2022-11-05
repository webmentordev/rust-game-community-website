<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use App\Models\Rules;
use App\Models\Wipes;
use App\Models\Ranking;
use App\Models\WipeTimer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function index(){
        return view('admin.admin',[
            'singleDate'=> WipeTimer::latest()->limit(1)->get(),
            'commands'=> Ranking::latest()->get(),
            'users'=> User::latest()->paginate(20),
            'posts'=> Posts::latest()->paginate(20),
            'wipes'=> Wipes::latest()->paginate(20),
            'rules'=> Rules::latest()->paginate(20)
        ]);
    }

    /*------------------------------
    | Post Function
    |-------------------------------
    */
    public  function storePost(Request $request){
        $this->validate($request, [
            'title'=>'required',
            'command'=>'nullable',
            'post'=>'required',
        ]);

        Posts::create([
            'title' => $request->title,
            'command' => $request->command,
            'post' => $request->post,
        ]);

        return back()->with('postSuccess', 'Server Configration Saved Successfully');
    }

    /*------------------------------
    | Wipe Data Function
    |-------------------------------
    */
    public  function storeWipes(Request $request){
        $this->validate($request, [
            'day'=>'required|numeric',
            'month'=>'required|string',
            'p_day'=>'required|numeric',
            'p_month'=>'required|string',
            'bp_wipe'=>'required|string',
            'rp_wipe'=>'required|string',
            'year'=>'required|numeric',
        ]);
        Wipes::create([
            'day'=>$request->day,
            'month'=>$request->month,
            'p_day'=>$request->p_day,
            'p_month'=>$request->p_month,
            'bp_wipe'=>$request->bp_wipe,
            'rp_wipe'=>$request->rp_wipe,
            'year'=>$request->year,
        ]);
        return back()->with('wipeSuccess', 'Wipe Day Saved Successfully');
    }
    public  function wipeDelete($id){
        Wipes::where('id', '=', $id)->delete();
        return back()->with('wipeDeleteSuccess', 'Wipe Day Deleted Successfully');
    }

    public  function wipeStatus($id, Request $request){
        Wipes::where('id', $id)->update(['status' => $request->status]);
        return back()->with('wipeStatusSuccess', 'Wipe Status Updated Successfully');
    }

    /*------------------------------
    | Rules Function
    |-------------------------------
    */
    public  function storeRule(Request $request){
        $this->validate($request, [
            'reason'=>'required|string',
            'period'=>'required|string',
        ]);
        Rules::create([
            'reason' => $request->reason,
            'period' => $request->period,
        ]);
        return back()->with('ruleSuccess', 'Rules Saved Successfully');
    }

    public  function deleteRule($id){
        Rules::where('id', '=', $id)->delete();
        return back()->with('deleteRuleSuccess', 'Rule Deleted Successfully');
    }

    /*------------------------------
    | Ranking Function
    |-------------------------------
    */
    public  function storeRanking(Request $request){
        $this->validate($request, [
            'name'=>'required|string',
            'command'=>'nullable',
            'default'=>'required|string',
            'elite'=>'required|string',
        ]);
        Ranking::create([
            'name' => $request->name,
            'command' => $request->command,
            'default' => $request->default,
            'elite' => $request->elite,
        ]);
        return back()->with('rankSuccess', 'Rank Saved Successfully');
    }

    public  function deleteRanking($id){
        Ranking::where('id', '=', $id)->delete();
        return back()->with('rankDeleteSuccess', 'Rank Deleted Successfully');
    }

    
    /*------------------------------
    | Ranking Function
    |-------------------------------
    */
}
