<div class="right-sidebar">
  <div class="righ-sidebar-body">

    <div class="item">
      <h4 class="post-title slide-title">{{ __('site.title_right_sidebar') }}</h4>
      <div class="post-meta">
        @if($authors_articles)
          @foreach ($authors_articles as $author)
            <a href="{{ route('authors.articles',$author->id) }}" class="btn btn-default tag" role="button">{{ $author->nickname }}</a>
          @endforeach
        @endif
      </div>
    </div>
    <br>

    <div class="item">
      <ul class="carousel-caption">
        @if($archives)
          @foreach ($archives as $stats)
            <li class="post-meta">
              <span>
                <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }} ">
                  <i class="fa fa-calendar-check-o post-meta-icon"></i> {{ $stats['month'] }}, {{ $stats['year'] }} 
                </a>
              </span>
            </li>
          @endforeach
        @endif
      </ul>
    </div>

  </div><!-- Righ-sidebar-body -->
</div><!-- Right-Sidebar -->