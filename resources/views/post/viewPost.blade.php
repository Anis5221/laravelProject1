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
<a href="{{ route('all.post') }}" class="text-denger btn btn-outline-success ">all Post</a>

</div>
              <ul>
                 
                 <h1>Post Title: {{ $cat->title }}</h1>
                 <h2> {{ $cat->name }}</h2>
                 <div> <img src="{{ URL::to($cat->image) }}" alt="" style="height: 300px; width:400px"></div>
              <p>{{ $cat->details }}</p>
                 <h3>Create at: {{ $cat->created_at }}</h3>
             

                    </div>
                </div>
             </div>
@endsection
