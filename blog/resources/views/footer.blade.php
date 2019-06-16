<footer>
  <div class="footer-menu">
    <div class="container">
      <div class="col-md-12 col-sm-12 center-block">
        <h3 class="footer-head">This is a test blog for Examen from  Anna</h3>

        <p>Created by prototype anoter test task. More detailed <a href="https://laravel.ru/posts/1056">here</a>.</p>
        <div class="social">
          <li><a href="https://vk.com/test_profile"><i class="fa fa-vk vk"></i></a></li>
        </div>
      </div>
    </div>
  </div><!-- Footer-menu -->
  <div class="footer-nav">
    <div class="container">
      <div class="col-md-6 col-sm-5">
        <p>&copy; 2019 Author: Anna Shydlouskaya</p>
      </div>
      <div class="col-md-6 col-sm-7">
        <ul>
          <li><a href="{{ route('home') }}">{{ __('site.menu_item_home') }}</a></li>
          <li><a href="{{ route('about') }}">{{ __('site.menu_item_about') }}</a></li>
        </ul>
      </div>
    </div>
    <!-- Go TO TOP -->
    <div id="toTop" class="btn btn-info" style="display: block;">
      <span class="fa fa-angle-up"></span>
    </div><!-- /Go-to-top -->
  </div>
</footer>