<?php

namespace App\Http\Controllers;

use Request;
use App\Message;
use App\Status;
use App\Customer;
use App\Question;
use App\Questions_specification;
use Auth;
use App\Intake;
use App\Intake_has_question;
use App\Treatment;

class TreatmentController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $treatments = Treatment::where('active', 1)->get();
        
        return view('back-end.treatment.index', compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back-end.treatment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = Request::all();
        Treatment::create($input);

        return redirect('/treatment')->with('status', 'Sessie type aangemaakt.');
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
        $treatment = Treatment::findOrFail($id);
        return view('back-end.treatment.edit', compact('treatment'));

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
        $input = Request::all();
        $treatment = Treatment::findOrFail($id);
        $treatment->fill($input)->save();

        return redirect('/treatment')->with('status', 'Sessie type succesvol gewijzigd.');
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
        $treatment = Treatment::findOrFail($id);
        $treatment->active=0;
        $treatment->save();

        return redirect('/treatment')->with('status', 'Sessie type succesvol verwijderd.');
    }
}
