@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">Personal Finances</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('income.index') }}" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="{{ route('income.index') }}"></use></svg>
                        Income
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('expenses.index') }}" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="{{ route('expenses.index') }}"></use></svg>
                        Expenses
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('investment.index') }}" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="{{ route('investment.index') }}"></use></svg>
                        Investment
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <span class="fs-4">{{ __('Dashboard') }}</span></div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="row mt-5" >
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Income </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">₹ {{ $total_income }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Income (Monthly)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">₹ {{ $total_monthly_income }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Expenses
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">₹ {{ $total_expenses }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Investments</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">₹ {{ $total_investment }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
