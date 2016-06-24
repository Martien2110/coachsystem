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
use App\Comment;

class CommentController extends Controller
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
    public function store()
    {
        //
        $input = Request::all();
        Comment::create($input);

        $customer = Customer::findOrFail($input['customers_id']);
        $customer->statuses_id = 13;
        $customer->save();

        $intake= Intake::findOrFail($input['intakes_id']);
        $intake->visible = 3;
        $intake->save();

        return redirect('/customer/'.$input['customers_id'])->with('status', 'Intake succesvol verwerkt.');

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
        $customer = Customer::findOrFail($id);
        $intake = Intake::where('customer_id', $customer->id)->first();
        if($intake->visible < 2)
        {
            return redirect('/customer/'.$id)->with('status', 'Klant heeft intake nog niet gehad, er gaat iets fout. Neem contact op met de systeembeheerder.');
        }

        $questions = Question::where('specification', 'intake')->get();
        $answers = Intake_has_question::where('intakes_id', $intake->id)->get();

        $comment = Comment::where('customers_id', $customer->id)->where('intakes_id', $intake->id)->first();

        return view('back-end.intake.edit', compact('customer', 'intake', 'questions', 'answers', 'comment'));
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
        $comment = Comment::where('intakes_id', $input['intakes_id'])->where('customers_id', $input['customers_id'])->first();
        $comment->fill($input)->save();
        return redirect('/customer/'.$input['customers_id'])->with('status', 'Aantekening succesvol aangepast.'); 
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
        
    }
}
