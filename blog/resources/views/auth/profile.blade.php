<div class="main-content">
  <article>
    <h2 class="page-title">{{ $title }}</h2>
    <p>
      <a href="{{ route('home') }}" class="btn btn-default btn-sm btn-back" type="button">Return main</a>
    </p>
    <div class="post-content no-border contact">
      <div class="row">
        <div class="col-md-4">
           <img class="img-rounded" src="{!! $auth_user->avatar?asset('images/portfolio/'.$auth_user->avatar):asset('images/portfolio/default/default.png') !!}" alt="Avatar" style="width:150px" />
        </div>
        <div class="col-md-8">
          <ul class="list-group">
            <li class="list-group-item"><strong>{{ $auth_user->nickname }}</strong></li>
            <li class="list-group-item">{{ $auth_user->name }} {{ $auth_user->surname }}</li>
            <li class="list-group-item">Gender: {{ $auth_user->sex=='female'?'Female':'Male' }}</li>
            @if ($auth_user->show_phone)
              <li class="list-group-item">{{ $auth_user->phone }}</li>
            @endif
          </ul>

          <ul class="list-group">
            <li class="list-group-item">
              Experience: <span id="experience">{{ $auth_user->experience }}</span>
              <input id="user_id" type="hidden" value="{{ $auth_user->id }}">
            </li>
            <li class="list-group-item">
              <button type="button" id="start_experience" class="btn btn-default btn-category">Start method</button>
              <button type="button" id="stop_experience" class="btn btn-default btn-back">Stop method</button>
            </li>
          </ul>

        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <a class="btn btn-default btn-category" href="{{ route('users.edit') }}" role="button">Edit profile</a>
          <a class="btn btn-default btn-category" href="{{ route('users.edit_password') }}" role="button">Change password</a>
        </div>
      </div>
    </div>
  </article>
</div><!-- main-content -->