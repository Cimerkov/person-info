<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('index', compact('people'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
    
        $person = new Person;
        $person->name = $validatedData['name'];
        $person->last_name = $validatedData['last_name'];
        $person->phone = $validatedData['phone'];
        $person->email = $validatedData['email'];
        $person->save();
    
        return redirect('/')->with('success', 'Person added successfully.');
    }
    
    public function show(Person $person)
    {
        return view('people.show', compact('person'));
    }

    public function edit(Person $person)
    {
        return view('people.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $person->name = $request->input('name');
        $person->last_name = $request->input('last_name');
        $person->phone = $request->input('phone');
        $person->email = $request->input('email');
        $person->save();

        return redirect('/people/' . $person->id);
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return redirect('/');
    }
}

