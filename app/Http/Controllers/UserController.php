<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile(){
    	return view('users.profile');
    }

    public function index()
    {
        $this->authorize('listUsers', User::class);
        $users = User::all();
        return view('users.index', compact('users'));
    }
       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $this->authorize('create', User::class);
    	return view('users.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'rental_agency_id' => 'integer',
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'CPF' => 'required|string|size:11|unique:users',
            'CEP' => 'required|string|size:8',
            'CNH' => 'unique:users',
            'status_id' => 'required|integer',
            'password' => 'required'
        ]);
        $request['password'] = Hash::make($request->password);
        $request['profile_id'] = 3;
        User::create($request->all());
   
        return redirect()->route('users.index')
                         ->with('success','User created successfully.');
    }


    public function edit(User $user)
    {
        $this->authorize('create', User::class);
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'profile_id' => 'required|integer',
            'rental_agency_id' => 'integer',
            'name' => 'required|string',
            'email' => 'required|string',
            'CPF' => 'required|string|size:11',
            'CEP' => 'required|string|size:8',
            'CNH' => 'required|string|size:11',
            'status_id' => 'required|integer',
            'password' => 'required'
        ]);
        $request['password'] = Hash::make($request->password);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Usuário atualizado com sucesso');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('success', 'Usuário deletado com sucesso');
    }
}
