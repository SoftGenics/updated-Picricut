@extends ('layouts.app')

<style>
	@import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');
   .register-photo {
	 background:#f1f7fc;
	 padding:80px 0;
	 margin-top: 92px;
   }
   
   .register-photo .image-holder {
	 display:table-cell;
	 width:auto;
	 background:url(https://www.betterteam.com/images/job-orientation-5472%C3%973648-20201210.jpg?crop=21:16,smart&width=420&dpr=2);
	 background-size:cover;
   }
   
   .register-photo .form-container {
	 display:table;
	 max-width:900px;
	 width:90%;
	 margin:0 auto;
	 box-shadow:1px 1px 5px rgba(0,0,0,0.1);
   }
   
   .register-photo form {
	 display:table-cell;
	 width:400px;
	 background-color:#ffffff;
	 padding:40px 60px;
	 color:#505e6c;
   }
   
   @media (max-width:991px) {
	 .register-photo form {
	   padding:40px;
	 }
   }
   
   .register-photo form h2 {
	 font-size:24px;
	 line-height:1.5;
	 margin-bottom:30px;
   }
   
   .register-photo form .form-control {
	 background:#f7f9fc;
	 border:none;
	 border-bottom:1px solid #dfe7f1;
	 border-radius:0;
	 box-shadow:none;
	 outline:none;
	 color:inherit;
	 text-indent:6px;
	 height:40px;
   }
   
   .register-photo form .form-check {
	 font-size:13px;
	 line-height:20px;
   }
   
   .register-photo form .btn-primary {
	 background:#f4476b;
	 border:none;
	 border-radius:4px;
	 padding:11px;
	 box-shadow:none;
	 margin-top:35px;
	 text-shadow:none;
	 outline:none !important;
   }
   
   .register-photo form .btn-primary:hover, .register-photo form .btn-primary:active {
	 background:#eb3b60;
   }
   
   .register-photo form .btn-primary:active {
	 transform:translateY(1px);
   }
   
   .register-photo form .already {
	 display:block;
	 text-align:center;
	 font-size:12px;
	 color:#6f7a85;
	 opacity:0.9;
	 text-decoration:none;
   }
   .or-seperator {
		   margin: 50px 0 15px;
		   text-align: center;
		   border-top: 1px solid #e0e0e0;
	   }
	   .or-seperator b {
		   padding: 0 10px;
		   width: 40px;
		   height: 40px;
		   font-size: 16px;
		   text-align: center;
		   line-height: 40px;
		   background: #fff;
		   display: inline-block;
		   border: 1px solid #e0e0e0;
		   border-radius: 50%;
		   position: relative;
		   top: -22px;
		   z-index: 1;
	   }
   </style>
    <script>  
		@if(Session::has('success'))  
			  alert("{{ Session::get('success') }}");  
		@endif  
		@if(Session::has('info'))  
		alert("{{ Session::get('info') }}");  
		@endif  
		@if(Session::has('warning'))  
		alert("{{ Session::get('warning') }}");  
		@endif  
		@if(Session::has('error'))  
		alert("{{ Session::get('error') }}");  
		@endif  
	  </script> 
	 

@section('content')
<div class="register-photo">
	<div class="form-container">
		<div class="image-holder"></div>
		

    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
		

      
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
		<div class="text-center social-btn">
<a href="#" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Sign up with <b>Facebook</b></a>
<a href="#" class="btn btn-info btn-lg btn-block"><i class="fa fa-instagram"></i> Sign in with <b>Instagram</b></a>
<a href="{{route('google.login')}}" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google"></i> Sign up with <b>Google</b></a>
</div>
<div class="or-seperator"><b>or</b></div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
          
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
          
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
           
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
          
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
		<div class="form-group">
			<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
		</div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a href="#" class="already">You already have an account? Login here.</a>
        
       
		 
    </form>
</div>
</div>


@endsection
