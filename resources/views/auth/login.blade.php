<html lang="en">

<head>
  <link rel="stylesheet" href="{{url('/css/style.css')}}">
  <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
  <script src="{{url('/js/bootstrap.min.js')}}" defer></script>
  <title>Pole-IT Register</title>
</head>

<body class="d-flex flex-column justify-content-center align-content-center align-items-center p-5 bg-light">


  <section class="signup">
    <div class="container">
      <div class="signup-content">
        <div class="signup-form">
          <h2 class="form-title">Sign in</h2>
          <form action="{{route('authentificate')}}" class="register-form" id="register-form" method="POST" >
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="email"><i class="zmdi zmdi-email"></i></label>
              <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" />
            </div>
            <div class="form-group">
              <label for="pass"><i class="zmdi zmdi-lock"></i></label>
              <input type="password" name="password" id="pass" placeholder="Password" value="{{old('pass')}}" />
            </div>
            <div class="form-group form-button">
              <input type="submit" name="signup" id="signup" class="form-submit" value="Log in" />
            </div>
            <div class="form-group form-button">
              @foreach ($errors->all() as $error)
                <span><strong class="text-danger">{{$error}}</strong><br></span>
              @endforeach
              @if (session('error'))
                {{session('error')}}
              @endif
            </div>
            
          </form>
        </div>
        <div class="signup-image">
          <figure><img src="{{url('images/signup-image.jpg')}}" alt="sing up image"></figure>
          <a href="{{route('register')}}" class="signup-image-link">I am a new member</a>
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>