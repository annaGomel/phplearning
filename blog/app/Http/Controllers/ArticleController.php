<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

use App\Article;
use App\User;

use Auth;

class ArticleController extends SiteController
{
    /**
    * Instantiate a new controller instance.
    *
    * @param  \App\Article  $article
    * @param  \App\Http\Services\ArticleService  $articleService
    * @return void
    */
    public function __construct(Article $article)
    {
        $this->template = 'index';
        $this->model = $article;
    }

    /**
     * Display a list articles of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->title = __('articles.title_main');

        $title = $this->title;
        $articles = $this->model->getList("*", request(['search','month','year']));
        $auth_user = Auth::user();

        $this->content = view('articles.index', compact('title', 'articles', 'auth_user'))->render();

        return $this->renderOutput();
    }

    /**
     * Display show article details.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $this->title = __('articles.title_show');

        $title = $this->title;
        $auth_user = Auth::user();

        $this->content = view('articles.show', compact('title', 'article', 'auth_user'))->render();

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new article.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $this->title = __('articles.title_create');

        $title = $this->title;
        $authors = $user->getAllUsersExcept(Auth::user()->id);

        $this->content = view('articles.create', compact('title', 'authors'))->render();

        return $this->renderOutput();
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \App\Http\Requests\ArticleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        if ($request->user()->createPivotArticle($request->except('_token'))) {
            return redirect()->route('home')->with([
                'status' => __('articles.add_success')
            ]);
        }

        return back()->withInput()->with([
            'status' => __('articles.warning')
        ]);
    }

    /**
     * Show the form for editing the article.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, User $user)
    {
        if (!Auth::user() || !$article->isAuthor(Auth::user())) {
            return abort('404');
        }

        $this->title = __('articles.title_edit');

        $title = $this->title;
        $authors = $user->getAllUsersExcept(Auth::user()->id);
        $authors_sel = $article->getListIdAuthors();

        $this->content = view('articles.edit', compact('title', 'article', 'authors', 'authors_sel'))->render();

        return $this->renderOutput();
    }

    /**
     * Update the article in storage.
     *
     * @param  \App\Http\Requests\ArticleRequest $request
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        if ($article->updatePivotArticle($request->except('_token', '_method'), Auth::user())) {
            return redirect()->route('home')->with('status', __('articles.change_success'));
        }

        return back()->withInput()->with('status', __('articles.warning'));
    }

    /**
     * Soft delete the article from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if (!Auth::user() || !$article->isAuthor(Auth::user())) {
            return abort('404');
        }

        if ($article->delete()) {
            return redirect()->route('home')->with('status', __('articles.delete_success'));
        }
        
        return back()->withInput()->with([
            'status' => __('articles.warning')
        ]);
    }

    /**
     * Delete end the article from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  id  $article_id
     * @return \Illuminate\Http\Response
     */
    public function erase(Request $request, $article_id)
    {
        if (!Auth::user()) {
            return abort('404');
        }

        $article_for_delete = Article::withTrashed()->find($article_id);
        $article_for_delete->users()->detach();

        if ($article_for_delete->forceDelete()) {
            return redirect()->route('home')->with('status', __('articles.delete_end_success'));
        }
        
        return back()->withInput()->with('status', __('articles.warning'));
    }

    /**
     * Restore the article from trasch.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $article_id
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request, $article_id)
    {
        if (!Auth::user()) {
            return abort('404');
        }

        $article_for_restore = Article::withTrashed()->find($article_id);

        if ($article_for_restore->restore()) {
            return redirect()->route('home')->with('status', __('articles.restore_success'));
        }
        
        return back()->withInput()->with('status', __('articles.warning'));
    }
}
