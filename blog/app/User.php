<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Article;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'nickname', 'surname', 'avatar', 'phone', 'sex', 'show_phone', 'experience'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles()
    {
        return $this->belongsToMany('App\Article', 'article_user')->withTimestamps();
    }

    public function getAllUsersExcept($user_id)
    {
        $builder = $this->select('*')->where('id', '<>', $user_id);

        return $builder->get();
    }

    public function getArticlesTrash()
    {
        $builder = $this->articles()->onlyTrashed();

        return $builder->get();
    }

    public function createPivotArticle($newArticleReq)
    {
        if (!$newArticle = $this->createArticle($newArticleReq)) {
            return false;
        }

        if (!empty($newArticleReq['authors']) && !$newArticle->appendPivotUsersArticle($newArticleReq['authors'])) {
            return false;
        }

        return true;
    }

    public function createArticle($newArticleReq)
    {
        return $this->articles()->create($newArticleReq);
    }
}
