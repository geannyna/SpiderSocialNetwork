<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PersonController extends Controller
{
    public function index()
    {
        $people = User::orderBy('name')->get();
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

}
