<?php

namespace App\Http\Controllers;

use App\Models\Aventure;
use App\Models\AventureImages;
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
    public function afficherAventuresUser(){
        $userId = Auth::id();
        $aventures = Aventure::where('id_users',$userId)->with('images')->get();
        return view ('utilisateur', compact('aventures'));
    } 

    public function afficherAll(){
        $aventures = Aventure::with('images')->get();
        $userCount = User::count();
        $aventureCount = Aventure::count();
        $DestinationsCount = Aventure::distinct('continent')->count();
        return view ('welcome',compact('aventures','userCount','aventureCount','DestinationsCount'));
    }

    public function filterDesc(){
        $aventures = Aventure::with('images')->orderBy('id', 'desc')->get();
        return view ('welcome', compact('aventures'));
    }
    
    public function filterAsc(){
        $aventures = Aventure::with('images')->orderBy('id', 'asc')->get();
        return view ('welcome', compact('aventures'));
    }

    public function filterDestination(Request $request){
        $destination = $request->input('destination');
        if($destination==='Tout'){
        $aventures = Aventure::with('images')->get();
        }else{
        $aventures = Aventure::where('continent',$destination)->with('images')->get();
        }
        return view ('welcome', compact('aventures'));
    }

    public function singleAventure(Request $request){
        $id = $request->query('id');
        $singleAventure = Aventure::where('id',$id)->with('images','user')->get();
        return view ('singleAventure',compact('singleAventure'));
    }

    
}





	