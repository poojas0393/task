<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $incomes = Income::all();
        return view('income.index', compact('incomes'));
    }

    public function create(){
        return view('income/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'amount' => 'required',
        ]);
        Income::create($request->all());
        return redirect()->route('income.index')->with('success', 'Income added successfully.');
    }
}
