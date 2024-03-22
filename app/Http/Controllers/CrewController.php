<?php

namespace App\Http\Controllers;
use App\Models\CrewMember;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function show($id)
    {
        $query = CrewMember::query();
        if ($id) {
            $query->where('id', $id);
        }
        $crewMembers = $query->with('documents')->get();
        return response()->json($crewMembers[0]);
    }
    public function index(Request $request)
    {
        return CrewMember::all();
    }
    public function store(Request $request)
    {   
        // return 123;
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'nullable|string|max:255',
            'birthdate' => 'required|date',
            'age' => 'required|integer',
            'rank' => 'required|string|max:255',
            'height' => 'required|numeric|max:255',
            'weight' => 'required|numeric|max:255',
        ]);
        // Create new crew member
        $crewMember = new CrewMember();
        $crewMember->first_name = $request->first_name;
        $crewMember->middle_name = $request->middle_name;
        $crewMember->last_name = $request->last_name;
        $crewMember->email = $request->email;
        $crewMember->address = $request->address;
        $crewMember->birthdate = $request->birthdate;
        $crewMember->age = $request->age;
        $crewMember->rank = $request->rank;
        $crewMember->height = $request->height;
        $crewMember->weight = $request->weight;
        // Set other fields as needed
        $crewMember->save();

        return response()->json($crewMember, 201);
    }
}
