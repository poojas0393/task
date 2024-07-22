@extends('layouts.app')

@section('content')
<div class="">
<div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <a class="btn btn-primary" href="{{ route('investment.create') }}" role="button">Add new investment</a>
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
          @foreach ($investments as $investment)
          <tr>
            <th scope="row">1</th>
            <td>{{ $investment->title }}</td>
            <td>{{ $investment->created_at }}</td>
            <td>{{ $investment->amount }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
