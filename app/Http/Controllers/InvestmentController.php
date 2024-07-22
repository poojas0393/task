<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;

class InvestmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $investments = Investment::all();
        return view('investment.index', compact('investments'));
    }

    public function create(){
        return view('investment/create');
    }

    public function store(Request $request){
        
        $request->validate([
            'title' => 'required|max:255',
            'amount' => 'required',
        ]);
        Investment::create($request->all());
        return redirect()->route('investment.index')->with('success', 'Investment added successfully.');
    }
}
