<?php

namespace App\Http\Controllers;

use Request;
use App\Message;
use App\Status;
use DB;

class DashboardController extends Controller
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
        // First block contains messages per day, and totals this month and this day
        $messagesthismonth = DB::table('messages')
                            ->select(DB::raw('id'))
                            ->where(DB::raw('month(date)'),'=', date('n'))
                            ->where(DB::raw('year(date)'), '=', date('Y'))
                            ->get();    // all messages from this month
        $messagesperday = DB::table('messages')
                            ->select(DB::raw('date, count(date) as amount_messages, day(date) as day'))
                            ->where(DB::raw('month(date)'),'=', date('n'))
                            ->where(DB::raw('year(date)'), '=', date('Y'))
                            ->groupBy('date')
                            ->get();
        $messagesperday1 = DB::table('messages')
                            ->select(DB::raw('date, count(date) as amount_messages'))
                            ->where(DB::raw('month(date)'),'=', date('n'))
                            ->where(DB::raw('year(date)'), '=', date('Y'))
                            ->groupBy('date')
                            ->get();
        


        return view('back-end.dashboard', compact('messagesthismonth', 'messagesperday', 'messagesperday1'));
    }
}
