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

          <form class="form-horizontal" method="POST" action="{{ route('login') }}" >

            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email</label>
              <div class="col-md-6">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email..." required autofocus>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" id="password" name="password" required>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>


            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox details-page">
                  <input id="option" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="option"><span><span></span></span>Keep me singed in</label>
                  <a href="{{ route('password.request') }}" class="pull-right">Forgot?</a>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success form-btn btn-block">Sign in</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
