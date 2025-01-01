<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5 ">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                   <h3 class="text-center text-primary"> Otp Send</h3>
                        @if (session('status'))
            <div class="alert alert-success" role="alert">
{{session('status')}}
            </div>
        @endif
           @if (session('error'))
            <div class="alert alert-danger" role="alert">
{{session('error')}}
            </div>
        @endif
                </div>
                <div class="card-body">
                    <form action="{{route('Otp')}}" method="post">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Otp Here</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="otp">
    <div id="emailHelp" class="form-text">We'll never share your otp with anyone else.</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                </div>
            </div>
        </div>
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>