@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">Write a Post</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                    <div class="my-3">
<a href="{{ route('add.category') }}" class="text-denger btn btn-outline-danger ">Add Category</a>
<a href="{{ route('all.category') }}" class="text-denger btn btn-outline-info ">All Category</a>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <form action="{{ URL::to('update/category/'.$editcat->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $editcat->name }}"/>
                      </div>

                      <div class="mb-3">
  <label  class="form-label">Slag name</label>
  <input class="form-control" name="slag" value="{{ $editcat->slag }}"></input>
</div>
                     
                      <div class="col-12">
    <button class="btn btn-outline-primary" name="submit" type="submit">Update</button>
  </div>
                        </form>
                    </div>
                </div>
             </div>
@endsection
