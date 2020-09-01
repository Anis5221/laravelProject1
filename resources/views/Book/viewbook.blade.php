@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">Write a Post</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                    <div class="my-3">
<a href="{{ route('book') }}" class="text-denger btn btn-outline-danger ">Add Book</a>
<a href="{{ route('all.book') }}" class="text-denger btn btn-outline-info ">All Book</a>

</div>

<h1>{{ $bo->name }}</h1>

<h2>{{ $bo->subject }}</h2>
<p>{{ $bo->details }}</p>
                    </div>
                </div>
             </div>
@endsection
