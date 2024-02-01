<?php

namespace App\Http\Controllers;

use App\Models\Aventure;
use App\Models\aventures;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class aventuresController extends Controller
{
    public function addAventure(Request $request)
{
    $data = $request->validate([
        'ville' => 'required',
        'paye' => 'required',
        'continent' => 'required',
        'images' => 'required|file',
        'description' => 'required',
        'conseils' => 'required',
    ]);

    if ($request->hasFile('images')) {
        $file = $request->file('images');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/images', $filename);

        $userId = Auth::id();

        $newAventure = Aventure::create([
            'id_users' => $userId,
            'ville' => $data['ville'],
            'paye' => $data['paye'],
            'continent' => $data['continent'],
            'description' => $data['description'],
            'conseils' => $data['conseils'],
        ]);

        $newImageAventure = $newAventure->images()->create([
            'images' => $filename,
        ]);

        return redirect()->route('utilisateur')->with('success', 'Aventure ajoutée avec succès!');
    } else {
        return back()->with('error', 'Aucune image téléchargée!');
    }
}


    
}
