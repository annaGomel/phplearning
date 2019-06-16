<div class="main-content">
  <article>
  <h2 class="page-title">{{ $article->title }}</h2>
  <p>
    <a href="{{ route('home') }}" class="btn btn-default btn-sm btn-back" type="button">{{ __('site.but_return_main') }}</a>
  </p>
    @if ($article)
      <div class="post-meta">
        @foreach ($article->users as $user)
          <span><a href="{{ route('authors.articles',$user->id) }}"><i class="fa fa-user post-meta-icon"></i> {{ $user->nickname }}</a></span>
        @endforeach
        <span><i class="fa fa-calendar-check-o post-meta-icon"></i> {{ $article->created_at->format('F d, Y') }} </span>
      </div>
      <div class="post-content">
        <p class="post">{{ $article->text }}</p>
        @if ($auth_user && $article->isAuthor($auth_user))
          <ul class="list-inline">
            <li>
              <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-default btn-sm btn-category">{{ __('site.but_edit') }}</a>
            </li>
            <li>
              {{ Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'form-inline']) }}
                {{ csrf_field() }}
                {{ Form::submit(__('site.but_delete'), ['class' => 'btn btn-default btn-sm btn-back']) }}
              {{ Form::close() }}
            </li>
          </ul>
        @endif
      </div>
    @else
      <div class="post-content">
        <p>{{ __('site.no_articles') }}</p>
      </div>
    @endif
  </article>
</div><!-- main-content -->