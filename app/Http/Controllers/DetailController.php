<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DetailController extends Controller
{
  function index(){
  $users['users']=DB::table('files')->get();
  if(count($users)>0){
    return view('details',$users);
  }
  else {
    return view('details');
  }
}
 function edit($id){
       $users=DB::select('select * from files where id = ?',[$id]);
      return view('Events',['users'=>$users]);
}
function accept($ename){
    $users=DB::select('select * from files where ename = ?',[$ename]);
     return view('accept',['users'=>$users]);
}
function store(Request $request){
  $this->validate($request,[
          'name'=>'required',
          'ppl'=>'required',
          'event'=>'required'
  ]);

   $user= new ppl();

   $user->name=$request->name;
   $user->ppl=$request->ppl;
   $user->event=$request->event;
   $user->save();
      dd($user);
    return back()->with('success', 'Your images has been successfully added');
}

}
