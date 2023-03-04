<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PersonController extends Controller
{
    public function index()
    {
        // $people = User::orderBy('name')->get(); -- ordenado por nombre, por id aparece el ultimo
        $people = User::orderByDesc('id')->get();
        return view('people.index',compact('people'));
       }
       public function show(User $person)
       {
           return view('people.show',compact('person'));
       }

       public function create()
       {
           return view('people.create');
       }
   
       public function store(Request $request)
       {
           $person = User::create($request->all());
           $person->saveOrFail();
           return redirect()->route('people.index');
       }
       public function edit(User $person)
       {
           return view('people.edit',compact('person'));
       }
       public function destroy(User $person)
       {
         return view('people.show',compact('person'));
       }
}
