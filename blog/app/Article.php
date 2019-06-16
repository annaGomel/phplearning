<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;
use Carbon\Carbon;

class Article extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $dates=['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'text', 'title', 'created_at'
    ];


    protected $dates = ['created_at', 'deleted_at'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'article_user')->withTimestamps();
    }

    public function scopeFilter($query, $getReqParam)
    {
        if (!empty($getReqParam['search']) && $search = $getReqParam['search']) {
            $query->where('title', 'LIKE', '%' . $search . '%')->orWhere('text', 'LIKE', '%' . $search . '%');
        }

        if (!empty($getReqParam['month']) && $month = $getReqParam['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if (!empty($getReqParam['year']) && $year = $getReqParam['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public function getList($select = '*', $getReqParam = false)
    {
        $builder = $this->select($select)->latest()->filter($getReqParam);

        return $builder->get();
    }

    public function isAuthor($user)
    {
        if (!$user) {
            return Config::get('constants.mismatch');
        }

        if ($this->trashed()) {
            return null;
        }

        if ($this->users()->find($user->id)) {
            return true;
        } else {
            return false;
        }
    }

    public function getListIdAuthors()
    {
        $list_id = array();

        foreach ($this->users as $author) {
            array_push($list_id, $author->id);
        }

        return $list_id;
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at)')
            ->get()
            ->toArray();
    }


    public function appendPivotUsersArticle($usersList)
    {
        return $this->users()->sync($usersList, false);
    }

    public function syncPivotUserArticle($user_id)
    {
        return $this->users()->sync($user_id);
    }


    public function updatePivotArticle($newArticleReq, $updateUser)
    {
        if (!$updateArticle = $this->updateArticle($newArticleReq)) {
            return false;
        }

        if (!$this->syncPivotUserArticle($updateUser->id)) {
            return false;
        }

        if (!empty($newArticleReq['authors']) && !$this->appendPivotUsersArticle($newArticleReq['authors'])) {
            return false;
        }


        return true;
    }


    public function updateArticle($newArticleReq)
    {
        return $this->update($newArticleReq);
    }
}
