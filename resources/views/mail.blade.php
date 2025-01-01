<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otp valid</title>
    <style>
    h3{
        color: blue;
    }
    p{
        font-size: 20px;
        color: rgb(72, 37, 107);
    }
    .information{
background:rgb(60, 25, 36);
border-radius: 15px;
    }
</style>
</head>
<body>
                 <div class="information">
  <h1>Your information:</h1>
                  <p> Your name is: {{$name}}</p>
                   <p>  Mobile number: {{$number}}</p>
                    <h3> your otp code is:{{$otp}}</h3>
                 </div>
</body>

</html>