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
                    <a href="{{route('belongstomany')}}" class="btn btn-info btn-lg">BelongstoMany</a>            
                    <a href="{{route('hasmany')}}" class="btn btn-primary btn-lg">Has-Many</a>            

                        <div class="my-3">

                            <ul class="order-list"> 
                                @php
                                $user = App\Aooo::all();
                            @endphp
                            @foreach ($user as $item)
                            <ol>{{ $item->name }}</ol>
                           <ol>
                           <a href="{{ URL::to('gouser/'.$item->id) }}" class="btn btn-sm btn-light">Go</a>
                           </ol>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
             </div>
@endsection
