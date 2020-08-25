@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">Write a Post</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto">
                    <div class="my-3">
<a href="{{ route('add.category') }}" class="text-denger btn btn-outline-danger ">Add Category</a>
<a href="{{ route('all.category') }}" class="text-denger btn btn-outline-info ">All Category</a>
<a href="{{ route('all.post') }}" class="text-denger btn btn-outline-success ">all Post</a>

</div>
            <div class="">
                 <table class="table table-responsive">
                      <tr class="align-items-center">
                          <th class="text-center">No.</th>
                          <th class="text-center">Post Title</th>
                          <th class="text-center">Category Id</th>
                          <th class="text-center">Category Image</th>
                          <th style="width: 400px:" class="text-center">Description</th>
                          <th class="text-center">Action</th>
                      </tr>
                      @foreach ($post as $item)
                       <tr>
                           
                           <td class="text-center">{{ $item->id }}</td>
                           <td class="text-center">{{ $item->title }}</td>
                           <td class="text-center">{{ $item->name }}</td>
                           <td class="text-center"><img src="{{ URL::to($item->image) }}" style="height: 100px; width:150px"></td>
                           <td style="width: 400px" class="text-center">{{ $item->details }}</td>
                           <td class="text-center">
                               <a href="{{ URL::to('edit/post/'.$item->id) }}" class="btn btn-info btn-sm">Edit</a>
                               <a href="{{ URL::to('delete/post/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                               <a href="{{ URL::to('view/post/'.$item->id) }}" class="btn btn-success btn-sm">View</a>
                           </td>
                       
                       </tr>
                       @endforeach
                 </table>
            </div>

                    </div>
                </div>
             </div>
@endsection
