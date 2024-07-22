<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expenses;

class ExpensesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $expenses = Expenses::all();
        return view('expenses.index', compact('expenses'));
    }

    public function create(){
        return view('expenses/create');
    }

    public function store(Request $request){
        
        $request->validate([
            'title' => 'required|max:255',
            'amount' => 'required',
        ]);
        Expenses::create($request->all());
        return redirect()->route('expenses.index')->with('success', 'Expenses added successfully.');
    }
}
