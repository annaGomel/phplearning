<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class IndexController extends SiteController
{

    /**
    * Instantiate a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->template = 'index';
    }

    /**
     * Display author articles of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function authorArticles(User $user)
    {
        $this->title = __('articles.title_author_articles');

        $title = $this->title;
        $auth_user = Auth::user();

        $this->content = view('user_articles', compact('title', 'user', 'auth_user'))->render();

        return $this->renderOutput();
    }

    /**
     * Display trash of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $this->title = __('articles.title_trash');

        $title = $this->title;
        $articles =  Auth::user()->getArticlesTrash();
        $auth_user = Auth::user();

        $this->content = view('trash', compact('title', 'articles', 'auth_user'))->render();

        return $this->renderOutput();
    }


    /**
     * Display about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $this->title = __('site.title_about');

        $title = $this->title;

        $this->content = view('about', compact('title'))->render();

        return $this->renderOutput();
    }
}
