<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/Style.css')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <!-- sweetalert2---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>


       
    <script src="Script.js"></script>
    <title>Genarel Technic</title>
  </head>
  <body>
  <div class="header ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Genarel Technic</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item pl-2">
                <a activeclass="menu_active" class="nav-link " href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item pl-2">
                <a activeclass="menu_active"class="nav-link" href="{{ route('service') }}">Service</a>
              </li>
              <li class="nav-item pl-2">
                <a activeclass="menu_active"class="nav-link" href="/blog">Blog</a>
              </li>
              <li class="nav-item pl-2">
                <a activeclass="menu_active"class="nav-link" href="{{ route('write.post') }}">Write Post</a>
              </li>
              <li class="nav-item pl-2">
                <a activeclass="menu_active"class="nav-link" href="{{ route('contect') }}">Contect</a>
              </li>
              <li class="nav-item pl-2">
                <a activeclass="menu_active"class="nav-link" href="{{ route('about') }}">About</a>
              </li>

              <li class="nav-item pl-2">
                <a activeclass="menu_active"class="nav-link" href="{{ route('book') }}">Book</a>
              </li>

              <li class="nav-item pl-2">
                <a activeclass="menu_active"class="nav-link" href="{{ route('eloquent') }}">Eloquent</a>
              </li>
              
             
            </ul>
            <form class="d-flex">
            <button class="btn btn-outline-success" type="submit">Log In</button>
              <a class="btn btn-outline-success" href="{{ route('student.index') }}" type="submit">Sign Up</a>
            </form>
          </div>
        </div>
      </nav>
      </div>
      <div class="containerclass">
           @yield('container')
           @yield('postpublish')
      </div>
        
  <div class="footer">
      @yield('foot')
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
  <script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });


<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
  </body>
</html>