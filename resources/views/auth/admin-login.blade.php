@extends('layouts.app')

@section('custom_css')
<style>
body>#app{
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
body>#app>nav{
    width: 100%;
    border-radius: 0px;
}
body>#app>.container{
   flex-shrink: 1;
   flex-grow: 1;
   display: flex;
   align-items: center;
   justify-content: center
}
</style>
@endsection
@section('content')

<div class="container">
    <div class="col-lg-5 col-md-6 col-sm-10 col-xs-12">
        <div class="card rounded-0 shadow text-reset">
            <div class="card-header">
                <div class="card-title h3 fw-bold text-center my-2">Admin Login</div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Email Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control rounded-0" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control rounded-0" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary rounded-0 bg-gradient">
                                Login
                            </button>
                        </div>
                        <div class="">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
