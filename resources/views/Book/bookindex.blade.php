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
                        <form action="{{ route('store.book') }}" method="post">
                        @csrf
                        <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name"/>
                      </div>

                      <div class="mb-3">
                         <label  class="form-label">Subject</label>
                         <input class="form-control" name="subject" placeholder="Subject"/>
                    </div>
                        <div class="mb-3">
                          <label  class="form-label">Description</label>
                          <textarea class="form-control" name="details" placeholder=""></textarea>
                     </div>
                     
                      <div class="col-12">
    <button class="btn btn-outline-primary" name="submit" type="submit">Submit</button>
  </div>
                        </form>
                    </div>
                </div>
             </div>
@endsection
