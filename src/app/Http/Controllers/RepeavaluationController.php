<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluation;
use App\Formation;
use App\Categorie;
use App\Repevaluation;
class RepeavaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repevaluations = Repevaluation::all();
        return view('evaluationback',compact('repevaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required',
            'formation' => 'required',
            'rqun' => 'required',
            'rqdeux' => 'required',
            'rqtrois' => 'required',
            'rqquatre' => 'required',
            'rqcinq' => 'required',
        ]);
  
        $repevaluation = new Repevaluation;
        $repevaluation->email = $request->email ;
        $repevaluation->formation = $request->formation ;
        $repevaluation->rqun = $request->rqun ;
        $repevaluation->rqdeux = $request->rqdeux ;
        $repevaluation->rqtrois = $request->rqtrois ;
        $repevaluation->rqquatre = $request->rqquatre ;
        $repevaluation->rqcinq = $request->rqcinq ;
        $repevaluation->save();
        return redirect()->route('index')
                        ->with('success',' successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categorie::all();
        $evaluations = Evaluation::all();
        $format = Formation::find($id);
        return view('repeva',compact('evaluations','format','categories')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
