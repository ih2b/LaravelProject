<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Evaluation;
class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        
        $evaluations = Evaluation::all();
        return view('evaluations',compact('evaluations')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formations = Formation::all();
        return view('evaluation',compact('formations')); 
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
            'formation' => 'required',
            'qun' => 'required',
            'qdeux' => 'required',
            'qtrois' => 'required',
            'qquatre' => 'required',
            'qcinq' => 'required',
        ]);
  
        $evaluation = new Evaluation;
        $evaluation->formation = $request->formation ;
        $evaluation->qun = $request->qun ;
        $evaluation->qdeux = $request->qdeux ;
        $evaluation->qtrois = $request->qtrois ;
        $evaluation->qquatre = $request->qquatre ;
        $evaluation->qcinq = $request->qcinq ;
        $evaluation->save();
        return redirect()->route('admin')
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
        //
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
