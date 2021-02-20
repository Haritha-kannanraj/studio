<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Auth;


class CreateEventController extends Controller
{
    //
    function CreateEvent(){
      return view("/CreateEvent");
    }

    public function store(Request $request)
    {


        $this->validate($request,[
                'ename'=>'required',
                'dis'=>'required',
                'stime'=>'required',
                'etime'=>'required',
                'cat'=>'required',
                'filenames' => 'required',
                'filenames.*' => 'image'
        ]);

        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);
                $files[] = $name;
            }
         }

         $user= new File();
        $user->ename=$request->ename;
      $user->dis=$request->dis;
      $user->stime=$request->stime;
      $user->etime=$request->etime;
        $user->cat=$request->cat;
        $user->filenames = $files;
        $user->save();
         //return redirect('/');
        return back()->with('success', 'Your images has been successfully added');
    }
}
