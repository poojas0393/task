@extends('layouts.app')

@section('content')
<div class="">
<div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <a class="btn btn-primary" href="{{ route('income.create') }}" role="button">Add new income</a>
      </div>
    </div>
    <br>
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($incomes as $income)
          <tr>
            <th scope="row">1</th>
            <td>{{ $income->title }}</td>
            <td>{{ $income->created_at }}</td>
            <td>{{ $income->amount }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
