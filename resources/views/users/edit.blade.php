@extends('templates.structure2')

@section('content')
<h3 class="text-center">Edit User</h3>
    <form class="mx-auto w-75 my-2" action="/"  method="POST">
    @csrf
        @method("POST")
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="form-group">
          <label>Birthday</label>
          <input type="date" class="form-control mx-sm-3">
        </div>
        <div class="form-group">
          <label>Website</label>
          <input type="text" class="form-control mx-sm-3">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control mx-sm-3">
        </div>

        <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control mx-sm-3">
        </div>

        <div class="form-group">
          <label>Age</label>
          <input type="text" class="form-control mx-sm-3">
        </div>
        <div class="form-group">
          <label>Degree</label>
          <input type="text" class="form-control mx-sm-3">
        </div>
        <div class="form-group">
          <label>Freelance</label>
          <input type="text" class="form-control mx-sm-3">
        </div>
        <div class="form-group mx-auto">
          <div class="mx-auto">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </div>
    </form>
@endsection