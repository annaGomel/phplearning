<div class="main-content">
  <article>
    <h2 class="page-title">{{ $title }}</h2>
    <p>
      <a href="{{ route('users.profile') }}" class="btn btn-default btn-sm btn-back" type="button">Return profile</a>
    </p>
    <div class="post-content no-border contact">
      <form class="form-horizontal" method="POST" action="{{ route('users.update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">

          <div class="col-md-5">

            <div class="form-group">
              <label for="nickname">Nickname</label>
              <input type="text" class="form-control" name="nickname"  placeholder="Nickname" value="{{ $auth_user->nickname }}">
            </div>

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"  placeholder="Name" value="{{ $auth_user->name }}">
            </div>

            <div class="form-group">
              <label for="surname">Surname</label>
              <input type="text" class="form-control" name="surname" placeholder="Surname" value="{{ $auth_user->surname }}">
            </div>

            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="phone"  placeholder="Phone" value="{{ $auth_user->phone }}">
            </div>

            <div class="form-group form-inline">
              <label for="sex">Gender</label><br>

              <div class="radio details-page">
                <input id="male" type="radio" name="sex" value="male" {!! $auth_user->sex=='male'?'checked':'' !!}>
                <label for="male"><span><span></span></span>Male</label>
              </div>

              <div class="radio details-page">
                <input id="female" type="radio" name="sex" value="female" {!! $auth_user->sex=='female'?'checked':'' !!}>
                <label for="female"><span><span></span></span>Female</label>
              </div>

            </div>

            <div class="checkbox details-page">
              <input id="show_phone" type="checkbox" name="show_phone" {!! $auth_user->show_phone?'checked':'' !!}>
              <label for="show_phone"><span><span></span></span>Show phone</label>
            </div>
          </div>

          <div class="col-md-6 col-md-offset-1">
              <img class="img-rounded" src="{!! $auth_user->avatar?asset('images/portfolio/'.$auth_user->avatar):asset('images/portfolio/default/default.png') !!}" alt="Avatar" style="width:150px" />

              <br><br>

              <div class="form-group">
                <input type="file" name="filename" class="form-control">
              </div>

              <div class="checkbox details-page">
                <input id="clear_avatar" type="checkbox" name="clear_avatar">
                <label for="clear_avatar"><span><span></span></span>Clear</label>
              </div>
          </div>

        </div>
        <br>
        <button type="submit" class="btn btn-success form-btn pull-right">Submit</button>
      </form>
    </div>
  </article>
</div><!-- main-content -->