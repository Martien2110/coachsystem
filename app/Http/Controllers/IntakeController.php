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

class IntakeController extends Controller
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
        if(Auth::user()->role < 2)
        {
            $questions = Question::where('specification', 'Intake')->get();
            $specs = Questions_specification::all();
            return view('back-end.intake.index', compact('questions', 'specs'));
        }
        else
        {
            $intake = Intake::where('customer_id', Auth::user()->customer_id)->first();
            $questions = Question::where('specification', 'intake')->get();
            $intakequestions = Intake_has_question::where('intakes_id', $intake->id)->get();
            return view('back-end.customer.intake', compact('intake', 'questions', 'intakequestions'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $specs = Questions_specification::all();
        return view('back-end.intake.create', compact('specs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $input = Request::all();
        $answers = $input['answers'];
        $questionids = $input['questions'];    
        $qias = Intake_has_question::where('intakes_id', $input['intakes_id'])->get();
        $countanswers = 0;
        for($i = 0; $i < count($questionids); $i++)
        {
            $q = Intake_has_question::where('intakes_id', $input['intakes_id'])->where('questions_id', $questionids[$i])->first();
            $q->answer = $answers[$i];
            $q->save();
            $countanswers++;
        }
        if($countanswers == count($answers))
        {
            $intake = Intake::findOrFail($input['intakes_id']);
            $intake->visible = 2;
            $intake->save();
        }
        $customer = Customer::where('intakes_id', $input['intakes_id'])->first();
        $customer->status = 11;
        $customer->save();

        return redirect('/dashboard')->with('Status', 'Intake succesvol afgenomen');
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

    public function process($id)
    {
        $customer = Customer::findOrFail($id);
        $intake = Intake::findOrFail($customer->intakes_id);
        if($intake->visible != 2)
        {
            return redirect('/customer/'.$id)->with('status', 'Klant heeft intake nog niet gehad, er gaat iets fout. Neem contact op met de systeembeheerder.');
        }

        $questions = Questions::where('specification', 'intake')->get();
        $answers = Intake_has_question::where('intakes_id', $intake->id)->get();

        return view('back-end.intake.process', compact('customer', 'intake', 'questions', 'answers'));
    }
}
