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


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('postthecategory') }}" enctype="multipart/form-data" method="post" >
                          @csrf
                        <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="title" class="form-control" placeholder="Title"/>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-control" >
                           @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                           @endforeach
 
                        </select>
                      </div>

                      <div class="mb-3">
                        <label  class="Import an Image">Image</label>
                        <input type="file" name="image" class="form-control" />
                      </div>

                      <div class="mb-3">
  <label  class="form-label">Details</label>
  <textarea class="form-control" name="details"></textarea>
</div>
                     
                      <div class="col-12">
    <button class="btn btn-outline-primary" name="submit" type="submit">Submit</button>
  </div>
                        </form>
                    </div>
                </div>
             </div>
@endsection
@section('foot')
<div class="bg-light py-3">
           <p class="text-center"> @Copywrite by Genarel Technice 2020</p>
        </div>
@endsection