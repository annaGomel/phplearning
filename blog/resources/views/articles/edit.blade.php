<div class="main-content">
  <article>
    <h2 class="page-title">{{ $title }}</h2>
    <p>
      <a href="{{ route('home') }}" class="btn btn-default btn-sm btn-back" type="button">{{ __('site.but_return_main') }}</a>
    </p>
    <div class="form-body">

      {{ Form::open(['method' => 'PATCH','route' => ['articles.update', $article->id],'style'=>'form-horizontal']) }}
        {{ csrf_field() }}

        <div class="form-group">
          <label for="title">{{ __('site.inp_article_title') }}</label>
          {{ Form::text('title', $article->title, ['class'=>'form-control', 'placeholder'=>__('site.inp_article_title_placeholder') ]) }}
        </div>

        <div class="form-group">
          <label for="text">{{ __('site.inp_article_text') }}</label>
          {{ Form::textarea('text', $article->text, ['class'=>'form-control', 'placeholder'=> __('site.inp_article_text_placeholder') ]) }}
        </div>

        <div class="form-group">
          <label for="sel1">{{ __('site.inp_article_authors') }}</label>
          <select class="selectpicker form-control" id="authors" name="authors[]" data-live-search="true" title="{{ __('site.inp_article_authors_placeholder') }}" data-hide-disabled="true" data-actions-box="true" multiple>
            @if($authors)
              @foreach ($authors as $author)
                <option value="{{ $author->id }}" 
                  @if($authors_sel && in_array($author->id, $authors_sel))
                    selected="selected"
                  @endif
                >{{ $author->nickname }}</option>
              @endforeach
            @endif
          </select>
        </div>

        <p>{{ __('site.p_article_authors') }}
          @foreach ($article->users as $user)
            <span><i class="fa fa-user post-meta-icon"></i><a href="{{ route('authors.articles',$user->id) }}"> {{ $user->nickname }}</a></span>
          @endforeach
        </p> 
        
        {{ Form::submit(__('site.but_submit'), ['class' => 'btn btn-success form-btn']) }}
      {{ Form::close() }}

    </div>
  </article>
</div><!-- main-content -->

