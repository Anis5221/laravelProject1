@extends('pages.home')
@section('container')
<div class="my-3">
    <h1 class="text-center text-primary">Write a Post</h1>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                    <a href="{{ route('hasOne') }}" class="btn btn-dark btn-lg">HasOne</a>
<a href="{{ route('belonto') }}" class="btn btn-success btn-lg">BelongsTo</a>
<a href="{{route('belongstomany')}}" class="btn btn-info btn-lg">Many_to_many</a>            

                        <div class="links">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categorie</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pot as $item)
                    
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->caaat->category}}</td>
                                        <td>{{$item->aooo->name}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->decription}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
@endsection
