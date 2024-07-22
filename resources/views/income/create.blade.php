@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
      <div class='col-md-6'>
            <form action="{{ route('income.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Income Source" name="title">
              </div><br>
              <div class="form-group">
                <label for="exampleFormControlInput1">Total Amount</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Total Amount" name="amount">
              </div><br>
                <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
