@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">All Books are here</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                    <div class="my-3">
</div>
            <div class="">
                 <table class="table table-responsive">
                      <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Slag Name</th>
                          <th>Created at</th>
                      </tr>
                        @foreach($book as $raw)
                      <tr>
                          <td>{{$raw->id}}</td>
                          <td>{{$raw->name}}</td>
                          <td>{{$raw->subject}}</td>
                          <td><p>{{ $raw->details }}</p></td>
                          <td>
                            <a class="btn btn-outline-info btn-sm" href="{{ URL::to('edit/book/'.$raw->id) }}">Edit</a>
                          <a class="btn btn-outline-danger btn-sm" href="{{ URL::to('delete/book/'.$raw->id) }}" >Delete</a>
                            <a class="btn btn-outline-success btn-sm" href="{{ URL::to('view/book/'.$raw->id) }}">View</a>
                          </td>
                      </tr>
                      @endforeach
                 </table>
            </div>

                    </div>
                </div>
             </div>
@endsection
