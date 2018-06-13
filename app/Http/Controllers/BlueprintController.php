<?php

namespace App\Http\Controllers;

use App\Models\Blueprint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlueprintController extends Controller
{
    public function showAll() // Show view of all blueprints.
    {
        $blueprints = Blueprint::with('user')->paginate(15);
        return view('blueprints.all', compact(['blueprints']));
    }

    public function userBlueprints(User $user) // Show view of users blueprints.
    {
        $blueprints = Blueprint::where('user_id', $user->id)->paginate();
    }

    public function savedBlueprints(User $user) // Show view of users saved blueprints
    {
        return 'Page being built. Please go back.';
    }

    public function show(Blueprint $blueprint) // Show view of selected blueprint.
    {
        return view('blueprints.view', compact(['blueprint']));
    }

    public function add() // Show view to create blueprint.
    {
        return view('blueprints.add');
    }

    public function edit(Blueprint $blueprint) // SHow view to edit blueprint.
    {

    }

    public function create(Request $request) // Store blueprint in DB.
    {
        // Process file and insert user ID;
        $request->merge(['user_id' => Auth::user()->id]);
        $request->merge(['image' => isset($request->file) && $request->file != null ? Storage::putFile('public/blueprint_images', $request->file) : null]);

        Blueprint::create($request->except(['file']));

        return redirect()->route('all-blueprints');
    }

    public function update(Blueprint $blueprint, Request $request) // Update blueprint data in DB.
    {

    }

    public function delete($id) // Delete the blueprint from the database.
    {
        Blueprint::where('id', $id)->first()->delete();
        return redirect()->route('all-blueprints');
    }
}
