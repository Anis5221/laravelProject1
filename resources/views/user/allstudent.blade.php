@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">All Student</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto">
                    <a href="{{ route('student.create') }}" class="text-denger btn btn-outline-info ">Add User</a>
<div class="my-3">

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
                      @foreach ($st as $item)
                       <tr>
                           
                           <td class="text-center">{{ $item->id }}</td>
                           <td class="text-center">{{ $item->name }}</td>
                           <td class="text-center">{{ $item->email }}</td>
                           <td class="text-center"><img src="{{ URL::to($item->image) }}" style="height: 100px; width:150px"></td>
                           <td style="width: 400px" class="text-center">{{ $item->phone }}</td>
                           <td class="text-center">
                               <a href="{{ URL::to('student/'.$item->id).'/edit' }}" class="btn btn-info btn-sm">Edit</a>
                               <form action="{{ URL::to('student/'.$item->id) }}" method="post">
                               
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">Delete</button>
                               </form>
                               
                               <a href="{{ URL::to('student/'.$item->id) }}" class="btn btn-success btn-sm">View</a>
                           </td>
                       
                       </tr>
                       @endforeach
                 </table>
            </div>

                    </div>
                </div>
             </div>
@endsection
