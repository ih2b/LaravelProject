<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposition;
use App\Categorie;
class PropositionController extends Controller
{
	    
		public function index(){
            $propositions = Proposition::all();
        return view('propositionmaster',compact('propositions'));
		}
		public function create(){
            $categories = Categorie::all();
			return view('proposition',compact('categories'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required',
            'domaine' => 'required',
            'formation' => 'required',
            'commentaire' => 'required'
        ]);
  
        $proposition = new Proposition;
        $proposition->nom = $request->nom ;
        $proposition->prenom = $request->prenom ;
        $proposition->mail = $request->mail ;
        $proposition->domaine = $request->domaine ;
        $proposition->formation = $request->formation ;
        $proposition->commentaire = $request->commentaire ;
        $proposition->save();
        return redirect()->route('index')
                        ->with('success','proposition created successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proposition::find($id)->delete();
        return redirect()->route('admin')
                        ->with('success','formation deleted successfully.');
    }

}
