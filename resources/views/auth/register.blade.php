@extends('layouts.app')
@section('custom_css')
<style>
body>#app{
    
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
    <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12">
        <div class="card rounded-0 shadow text-reset">
            <div class="card-header">
                <div class="card-title h3 fw bolder my-2 text-center">User Register</div>
            </div>

            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>

                        <div class="">
                            <input id="name" type="text" class="form-control rounded-0" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email Address</label>

                        <div class="">
                            <input id="email" type="email" class="form-control rounded-0" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="customerId" class="control-label">Connection Id</label>

                        <div class="">
                            <input id="customerId" type="text" class="form-control rounded-0" name="customerId" required>
                            @if ($errors->has('customerId'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('customerId') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="control-label">Address</label>

                        <div class="">
                            <input id="address" type="text" class="form-control rounded-0" name="address" required>
                        </div>
                    </div>
                    <div class="mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
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

                    <div class="mb-3">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <div class="">
                            <input id="password-confirm" type="password" class="form-control rounded-0" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary bg-gradient rounded-0">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
