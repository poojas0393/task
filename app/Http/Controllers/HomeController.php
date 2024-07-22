<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenses;
use App\Models\Investment;
use App\Models\Income;
use Carbon\Carbon;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $income = Income::select('*')
        ->whereMonth('created_at', Carbon::now()->month)
        ->get();
        $total_monthly_income= $income->sum('amount');
        $tincome = Income::all();
        $total_income= $tincome->sum('amount');

        $expenses = Expenses::all();
        $total_expenses= $expenses->sum('amount');
        $investment = Investment::all();
        $total_investment   = $investment->sum('amount');
        return view('home',['total_income'=> $total_income,'total_expenses'=> $total_expenses ,'total_investment'=> $total_investment,'total_monthly_income'=>$total_monthly_income]);
    }
}
