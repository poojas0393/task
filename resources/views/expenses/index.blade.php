@extends('layouts.app')

@section('content')
<div class="">
<div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <a class="btn btn-primary" href="{{ route('expenses.create') }}" role="button">Add new expense</a>
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
          @foreach ($expenses as $expense)
          <tr>
            <th scope="row">1</th>
            <td>{{ $expense->title }}</td>
            <td>{{ $expense->created_at }}</td>
            <td>{{ $expense->amount }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
