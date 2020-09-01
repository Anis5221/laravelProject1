@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">Write a Post</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                    <div class="my-3">

</div>
              <ul>
                 
                 <h1>Post Title: {{ $st->name }}</h1>
                 <h2> {{ $st->email }}</h2>
                 <h2> {{ $st->phone }}</h2>
                 <div> <img src="{{ URL::to($st->image) }}" alt="" style="height: 300px; width:400px"></div>
              <p>{{ $st->details }}</p>
                 <h3>password: {{ $st->password }}</h3>
             

                    </div>
                </div>
             </div>
@endsection
