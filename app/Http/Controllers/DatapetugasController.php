<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatapetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all()->where('level','petugas');
        return view('admin.datapetugas',[
            'title'=>'DataPetugas',
            'active'=>'DataPetugas',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datapetugas.create',[
            'title'=> 'Add Petugas'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'username'=>['required','unique:users'],
            'email'=>'required|email:dns|unique:users',
            'password'=>'required',
            'level'=>'required'
            ]);
    
           $validatedData['password'] = Hash::make($validatedData['password']);
    
           User::create($validatedData);
    
           return redirect('/datapetugas')->with('berhasil', 'Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.datapetugas.edit',[
            'title'=> 'Update Petugas',
            'user'=> $user

        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param int $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'username' => 'required',
            'email'=>'required|email:dns',
            'level'=>'required',
        ]);
        $user = User::find($id);
        $user->fill($request->all());
        $user->update();
        return redirect('/datapetugas')->with('success', 'Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
        $user=User::find($id);
        $user->delete();
       return redirect('/datapetugas')->with('gagah', 'Deleted Successfully');
    }
}
