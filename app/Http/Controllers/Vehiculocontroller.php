<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\vehiculos;

class Vehiculocontroller extends Controller
{
    //
    public function index(){
        //select * from users
        $users=vehiculos::all();
        return view('vehiculos.index',compact('users'));

    }
    public function create(){
        return view('vehiculos.create');

    }

    public function store(Request $request){

        // return $request->all();
        $user=vehiculos::create($request->all());
        return redirect(route('Vehiculo.index'));

    }
    public function show($id){
        $user=vehiculos::find($id);
        return view('vehiculos.show',compact('user'));
        //return $user;


    }

    public function  destroy($id){
        $user=vehiculos::find($id)->delete();
        return redirect(route('Vehiculo.index'));

    }

    public function edit($id){
        $user=vehiculos::find($id);
        return view('vehiculos.edit',compact('user'));

    }

    public function update(request $request,$id ){
        $user=vehiculos::find($id)->update($request->all());
        return redirect(route('Vehiculo.show',$id));

    }



}
