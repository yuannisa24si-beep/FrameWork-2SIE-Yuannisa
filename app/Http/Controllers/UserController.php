<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['dataUser'] = User::all();
        return view('user.admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['password']= Hash::make($request->password);

        user::create($data);

        return redirect()->route('user.admin.index')->with('success', 'Penambahan Data Berhasil!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data['dataUser'] = User::findOrFail($id);
        return view('user.admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $id;
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email  = $request->email;
        $user->password   = $request->password;

        $user->save();
        return redirect()->route('user.admin.index')->with('success', 'Perubahan Data Berhasil!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.admin.index')->with('success', 'Hapus Data Berhasil!');
    }
}
