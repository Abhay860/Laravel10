<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
      <form action="{{url('/')}}/register" method="POST">
        @csrf
        <div class="container">
        <h1 class="text-center">Resistration Form</h1>
    
        <div class="mb-1">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="username" aria-describedby="emailHelp" value="{{old('username')}}">
       </div>
       <span class="text-danger">
        @error('username')
            {{$message}}
        @enderror
       </span>
        <div class="mb-1">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" >
        </div>
        <span class="text-danger">
          @error('email')
             {{$message}} 
          @enderror
        </span>
        <div class="mb-1">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" >
        </div>
        <span class="text-danger">
          @error('password')
             {{$message}} 
          @enderror
        </span>
        <div class="mb-2">
          <label for="cpassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" value="{{old('cpassword')}}" >
        </div>
        <span class="text-danger">
          @error('cpassword')
              {{$message}}
          @enderror
        </span>
        <div class="mb-2">
             <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
     </div> 
     
     {{-- <div class="container">
      <x-input type="text" name="username" lable="Enter the user name" />
      <x-input type="email" name="email" lable="Enter the Email"/>
      <x-input type="password" name="password" lable="Enter the password"/>
      <x-input type="cpassword" name="cpassword" lable="Enter the user name"/>
     </div> --}}
    </form>  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>