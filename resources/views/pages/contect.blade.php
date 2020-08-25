@extends('pages.home')
@section('container')
<div class="my-5">
                <h1 class="text-center"> Contect Us</h1>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-10 mx-auto">
                        <form action="get.post" method="post">
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name"/>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Phone Number"/>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"/>
                      </div>

                      <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" name="texarea" id="exampleFormControlTextarea1" rows="3"></textarea>
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