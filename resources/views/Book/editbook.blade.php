@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">Books is Below</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                    <div class="my-3">
<a href="{{ route('all.book') }}" class="text-denger btn btn-outline-danger ">All Book</a>

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
                        <form action="{{ URL::to('update/book/'.$bo->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $bo->name }}"/>
                      </div>

                      <div class="mb-3">
                         <label  class="form-label">Subject</label>
                         <input class="form-control" name="subject" value="{{ $bo->subject }}"/>
                    </div>
                        <div class="mb-3">
                          <label  class="form-label">Description</label>
                          <textarea class="form-control" name="details" >{{ $bo->details }}</textarea>
                     </div>
                     
                      <div class="col-12">
    <button class="btn btn-outline-primary" name="submit" type="submit">Update</button>
  </div>
                        </form>
                    </div>
                </div>
             </div>
@endsection
