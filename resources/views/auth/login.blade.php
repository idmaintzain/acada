<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
 

 @include('includes.head')
   <body>

    <div class="container">

     @include('includes.nav')
     
<!--<div class="container">
    <div class="row" style="margin-top: 120px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
<a href="http://acada.starrfield.com.ng/public/login/google/callback">G+</a><br>

<a href="http://acada.starrfield.com.ng/public/login/facebook">G+</a>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->




<div class="container">
	<div class="row">
		<form class="form-signin mg-btm" method="POST" action="{{ route('login') }}" style="margin-left: 340px;">
		     {{ csrf_field() }}
    	<h3 class="heading-desc">
		<button type="button" class="close pull-right" aria-hidden="true">×</button>
		Login to ACADA</h3>
		<div class="social-box">
			<div class="row mg-btm">
             <div class="col-md-12">
               <a href="http://acada.starrfield.com.ng/public/login/facebook" class="btn btn-primary btn-block ">
                  <i class="icon-facebook"></i>    Login with Facebook
                </a>
			</div>
			</div>
		<!--	<div class="row">
			<div class="col-md-12">
                <a href="http://acada.starrfield.com.ng/public/login/google/callback" class="btn btn-danger btn-block" >
                  <i class="icon-google"></i>    Login with Google
                </a>
            </div>
          </div>
          <a href="{{ url('login/google') }}" class="btn btn-lg btn-danger btn-block">
                                <strong>Login With Google</strong>
                            </a>-->
		</div>
		
		
		  
		
		
		
		
		<div class="main">	
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
		 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        <input type="password" class="form-control" placeholder="Password" name="password" required>
		    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        Not registered? <a href=""> Sign up</a>
		<span class="clearfix"></span>	
        </div>
		<div class="login-footer">
		<div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="left-section">
							
								<a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a><br>
								<a href=""></a>
							</div>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-right">
                            <button type="submit" class="btn btn-large btn-danger pull-right">Login</button>
                        </div>
                    </div>
		
		</div>
      </form>
	</div>
</div>
 @include('includes.footer')
  </body>
</html>
