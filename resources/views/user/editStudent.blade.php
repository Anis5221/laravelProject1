@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">Add an User</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                    <div class="my-3">
<a href="{{ route('student.index') }}" class="text-denger btn btn-outline-danger ">all User</a>
<a href="{{ route('student.create') }}" class="text-denger btn btn-outline-info ">Add User</a>

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

<form action="{{ URL::to('student/'.$st->id) }}" enctype="multipart/form-data" method="post" >
                        @method('put')  
                        @csrf
                        <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="name" class="form-control" value="{{$st->name}}"/>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$st->email}}">
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Phone number</label>
                        <input type="number" name="phone" class="form-control" value="{{$st->phone}}">
                        </select>
                      </div>
                      <div class="mb-3">
                        <label  class="Import an Image">Image</label>
                        <input type="file" name="image" class="form-control"  />
                      <img src="{{ URL::to($st->image)}}" style="height: 40px; width: 80px" alt="">
                        <input type="hidden" value="{{$st->image}}" name="oldimage">
                    </div>

                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="{{$st->password}}">
                        </select>
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