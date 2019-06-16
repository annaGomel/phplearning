@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <div class="panel-body">

          <div class="col-md-11 col-md-offset-1">
            <h2 class="page-title">{{ $title }}</h2>
          </div>

          <br><br><br>

          <form  class="form-horizontal"  method="POST" action="{{ route('register') }}">

            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
              <label for="nickname" class="col-md-4 control-label">Nickname</label>

              <div class="col-md-6">
                <input type="text" class="form-control" id="nickname" value="{{ old('nickname') }}" name="nickname" placeholder="Nickname..." required autofocus>
                @if ($errors->has('nickname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('nickname') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email</label>

              <div class="col-md-6">
                <input type="email" class="form-control" id="email"  name="email" value="{{ old('email') }}" placeholder="Email..." required>
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
                <input type="password" class="form-control" id="password" name="password" placeholder="Password..." required>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>


            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Comfirm Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Comfirm Password..." required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success btn-block">Sign up</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
