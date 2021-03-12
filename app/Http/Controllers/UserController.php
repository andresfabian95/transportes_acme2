<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;

class
UserController extends Controller
{
    //
    public function index(){
        //select * from users
        $users=personal::all();
        return view('users.index',compact('users'));

    }
    public function create(){
        return view('users.create');

    }

    public function store(Request $request){

        // return $request->all();
        $user=personal::create($request->all());
        return redirect(route('User.index'));

    }
    public function show($id){
        $user=personal::find($id);
        return view('users.show',compact('user'));
        //return $user;


    }

    public function  destroy($id){
        $user=personal::find($id)->delete();
        return redirect(route('User.index'));

    }

    public function edit($id){
        $user=personal::find($id);
        return view('users.edit',compact('user'));

    }

    public function update(request $request,$id ){
        $user=personal::find($id)->update($request->all());
        return redirect(route('User.show',$id));

    }

}
