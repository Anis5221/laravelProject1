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
            <div class="">
                 <table class="table table-responsive">
                      <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Slag Name</th>
                          <th>Created at</th>
                      </tr>
                        @foreach($category as $raw)
                      <tr>
                          <td>{{$raw->id}}</td>
                          <td>{{$raw->name}}</td>
                          <td>{{$raw->slag}}</td>
                          <td>{{ $raw->created_at }}</td>
                          <td>
                            <a class="btn btn-outline-info btn-sm" href="{{ URL::to('edit/category/'.$raw->id) }}">Edit</a>
                          <button class="btn btn-outline-danger btn-sm" onclick="deleteConfirmation({{$raw->id}})" >Delete</button>
                            <a class="btn btn-outline-success btn-sm" href="{{ URL::to('view/category/'.$raw->id) }}">View</a>
                          </td>
                      </tr>
                      @endforeach
                 </table>
            </div>

                    </div>
                </div>
             </div>
@endsection
