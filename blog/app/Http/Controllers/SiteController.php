<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\User;

class SiteController extends Controller
{

    /**
     * Returns the string contents of the view
     *
     * @var string
     */
    protected $content = false;

    /**
     * This model
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model = false;


    /**
     * This authors_articles - list users
     *
     * @var array
     */
    protected $authors_articles = false;

    /**
     * Returns the string title of the view
     *
     * @var string
     */
    protected $title;

    /**
     * Returns the string name template
     *
     * @var string
     */
    protected $template;

    /**
     * Returns vars
     *
     * @var array
     */
    protected $vars = array();

    /**
     * Returns the service classes
     *
     */
    protected $articleService;

    /**
     * Returns the service classes
     *
     * @var string
     */
    protected $userService;

    /**
     * Display a view.
     *
     * @return \Illuminate\Http\Response
     */
    protected function renderOutput()
    {
        $this->vars = array_add($this->vars, 'title', $this->title);

        if ($this->content) {
            $this->vars = array_add($this->vars, 'content', $this->content);
        }

        $authors_articles = User::select()->get();

        $archives = Article::archives();

        $this->right_sidebar = view('right_sidebar', compact('authors_articles', 'archives'))->render();

        if ($this->right_sidebar) {
            $this->vars = array_add($this->vars, 'right_sidebar', $this->right_sidebar);
        }

        return view($this->template)->with($this->vars);
    }
}
