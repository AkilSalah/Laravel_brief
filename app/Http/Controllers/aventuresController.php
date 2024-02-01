<?php

namespace App\Http\Controllers;

use App\Models\Aventure;
use App\Models\AventureImages;
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
        'images' => 'required|array', 
        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'description' => 'required',
        'conseils' => 'required',
    ]);

    $userId = Auth::id();

    $newAventure = Aventure::create([
        'id_users' => $userId,
        'ville' => $data['ville'],
        'paye' => $data['paye'],
        'continent' => $data['continent'],
        'description' => $data['description'],
        'conseils' => $data['conseils'],
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/images', $filename);

            $newAventureImage = AventureImages::create([
                'image' => $filename, 
                'id_aventure' => $newAventure->id
            ]);
        }

        return redirect()->route('utilisateur')->with('success', 'Aventure ajoutée avec succès!');
    } else {
        return back()->with('error', 'Aucune image téléchargée!');
    }
}

}





	