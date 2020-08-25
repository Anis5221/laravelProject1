@extends('pages.home')
@section('container')
<div class="container">

<div class="leftcontainer">
          <h1 >Graw your business with <strong class="logoname">Genarel Technice</strong></h1>
          <h2 >We are telented team for you to making Web Aplication</h2>
          <div class="btnsevice">
            <a href="#" class="getbtn">Get Started</a>
          </div>
        </div>
        <div class="rightcontainer">
          <img class="ritimg"src="{{asset('frontend/assete/images.jpg')}}" alt="">
        </div>

        </div>
@endsection

@section('postpublish')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-6 col-lg-8 col-10 mx-auto"> 
         @foreach($pos as $p)
         <div class="post-preview">
          <a style="text-decoration: none" class="" href="#">
            <img src="{{ $p->image }}" style="height: 80px: width:200px">
            <h2>{{ $p->title }}</h2>
            <h3>Categorie is: {{ $p->category_id }}</h3>
            <h4>Upload at {{ $p->created_at }}</h4>
            <p>{{ $p->details }}</p>
            </a>
         </div>

          
          @endforeach
          {{ $pos->links() }}
       </div>
    </div>
</div>
@endsection

@section('foot')
<div class="bg-light py-3">
           <p class="text-center"> @Copywrite by Genarel Technice 2020</p>
        </div>
@endsection
