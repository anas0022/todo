<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
</head>

<body>

<div class="allbody" style="width:100%; height:100% display:grid; justify-content:center; align-items:center;">
<div class="all">
    <div>
        @if($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            </div>
        @endif
        @if(Session()->has('error'))
            <div class="alert alert-danger">
                {{Session('error')}}
            </div>
        @endif
        @if(Session()->has('success'))
            <div class="alert alert-danger">
                {{Session('success')}}
            </div>
        @endif
    </div>
    <form action="{{route('login.post')}}" method="post" class="login">
        @csrf
        <div class="mb-1" >
            <label class="form-label" >Email address</label>
            <input type="email" class="form-control" name="email"  >
        </div>
        <div class="mb-1" >
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <button type="submit" class="  btn btn-primary"  >Submit</button>
    </form>
   
</div>
<div class="login-head" style="" >
<p style="text-align:center;"> Login</p> 
      
</div>
<div class="login-bottom"   >
 
<form action="register" style="">

<input type="submit" name="" id="lop" value="dont have a account? signup" style="">
</form>

      
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
