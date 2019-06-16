<div class="main-content">
  <article>
    <h2 class="page-title">{{ $title }}</h2>
    <p>
      <a href="{{ route('users.profile') }}" class="btn btn-default btn-sm btn-back" type="button">Return profile</a>
    </p>
    <div class="post-content no-border contact">
      <form class="form-horizontal" method="POST" action="{{ route('users.update_password') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">

          <div class="col-md-12">

            <div class="form-group">
              <label for="current-password">Current password</label>
              <input type="password" class="form-control" name="current-password" placeholder="Current password">
            </div>

            <div class="form-group">
              <label for="password">New password</label>
              <input type="password" class="form-control" name="password" placeholder="New password"">
            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirmation password</label>
              <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmation password">
            </div>

          </div>

        </div>
        <br>
        <button type="submit" class="btn btn-success form-btn pull-right">Submit</button>
      </form>
    </div>
  </article>
</div><!-- main-content -->
