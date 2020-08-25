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
                 <li>Category Name: {{ $cat->name }}</li>
                 <li>Category Slag: {{ $cat->slag }}</li>
                 <li>Created At: {{ $cat->created_at }}</li>
              </ul>

                    </div>
                </div>
             </div>
@endsection
