<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Categorie;
use App\Commentaire;
use App\Inscription;
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        return view('formationsmaster',compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('formationmaster', compact('categorie'));
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
            'titre' => 'required',
            'prix' => 'required',
            'stars' => 'required',
            'langue' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'image' => 'required'
        ]);

        $img =request()->file('image');
        $imgname=time().'.'.$img->getClientOriginalExtension();
        $imgpath=public_path('/images/');
        $img->move($imgpath,$imgname);

  
        $formation = new Formation;
        $formation->titre = $request->titre ;
        $formation->prix = $request->prix ;
        $formation->stars = $request->stars ;
        $formation->langue = $request->langue ;
        $formation->description = $request->description ;
        $formation->detail = $request->detail ;
        $formation->image = '/images/'. $imgname ;
        $formation->save();
        return redirect()->route('admin')
                        ->with('success','formation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscriptions = Inscription::all();
        $commentaires = Commentaire::all();
        $formation = Formation::find($id);
        $categories = Categorie::all();
        return view('forshow',compact('formation','categories','commentaires','inscriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $formation = Formation::find($id);
        return view('editformation',compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'prix' => 'required',
            'stars' => 'required',
            'langue' => 'required',
            'description' => 'required',
            'detail' => 'required'
        ]);
  
        $formation = Formation::find($id);
        $formation->prix = $request->prix ;
        $formation->stars = $request->stars ;
        $formation->langue = $request->langue ;
        $formation->description = $request->description ;
        $formation->detail = $request->detail ;
        $formation->save();
        return redirect()->route('admin')
                        ->with('success','formation update successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Formation::find($id)->delete();
        return redirect()->route('admin')
                        ->with('success','formation deleted successfully.');
    }
}
