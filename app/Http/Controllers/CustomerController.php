<?php

namespace App\Http\Controllers;

use Request;
use App\Customer;
use App\Status;
use App\User;
use Auth;


class CustomerController extends Controller
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
        $customers = Customer::where('active', 0)->get();
        $statuses = Status::where('category', 'customers')->get();
        return view('back-end.customer.index', compact('customers', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back-end.customer.create');
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
        $input['birthday'] = date('Y/m/d', strtotime($input['birthday']));
        Customer::create($input);
        $cust = Customer::where('birthday', $input['birthday'])->where('lastname', $input['lastname'])->first();
        return redirect('/customer/'.$cust->id)->with('status', 'Cliënt succesvol toegevoegd');

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
        $customer = Customer::where('id', $id)->first();
        $status = Status::where('id', $customer->statuses_id)->first();
        $user = User::where('customer_id', $customer->id)->first();
        if($user == null)
        {
            $user = 'Cliënt heeft nog geen account';
        }
        return view('back-end.customer.show', compact('customer', 'status', 'user'));

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
        $customer = Customer::where('id', $id)->first();
        return view('back-end.customer.edit', compact('customer'));

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
        $customer = Customer::findOrFail($id);
        $customer->fill($input)->save();
        return redirect('/customer/'.$customer->id)->with('status', 'Klant is succesvol aangepast.'); 
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
        $customer = Customer::findOrFail($id);
        $customer->active = 1;
        $customer->save();
        return redirect('/customer')->with('status', 'Cliënt succesvol verwijderd');
    }

    public function register($id)
    {
        $customer = Customer::findOrFail($id);
        Auth::logout();
        return redirect('/register', compact('customer'));
    }

    public function storecustuser(Request $request, $id)
    {
        $input = Request::all();
        User::create($input);
        return redirect('/customer/'.$input['customer_id'])->with('status', 'Account voor Cliënt aangemaakt.');
    }

    public function deleteuser($id)
    {
        $customer = Customer::findOrFail($id);
        $user = Auth::where('customer_id', $customer->id);
        $user->delete();
        return redirect('/customer/'.$customer->id)->with('status', 'Account van Cliënt verwijderd');
    }
}
