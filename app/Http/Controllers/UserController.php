<?php

namespace App\Http\Controllers;

use Request;
use App\Customer;
use App\Status;
use App\User;
use Auth;


class UserController extends Controller
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
        $users = User::where('role', 2)->get();
        return view('back-end.user.index', compact('users'));
        
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
        $user = User::where('id', $id)->first();
        $customers = Customer::where('statuses_id', 9)->get();
        return view('back-end.user.show', compact('user', 'customers'));
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
        $input = Request::all();
        $user = User::where('id', $id)->first();
        $user->customer_id = $input['customer_id']; //set user to customer
        $user->assigned = 1;
        $user->save();

        $customer = Customer::where('id', $user->customer_id)->first();
        $customer->statuses_id = $input['status_id'];//set customer status to assigned to user
        $customer->save();

        return redirect('/user')->with('status', 'Gebruiker succesvol toegewezen aan Cliënt.');

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
