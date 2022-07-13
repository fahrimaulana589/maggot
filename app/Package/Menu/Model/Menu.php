<?php

namespace App\Package\Menu\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Access\RoleAccess;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Menu extends Model
{
    use RoleAccess, Filterable, AsSource, Chartable, HasFactory,Attachable;

    protected $fillable = [
        "title",
        'parent',
        "is_parent",
        "posision",
        "url",
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $allowedFilters = [
        "title",
        'parent',
        "is_parent",
        "posision",
        "url",
    ];

    protected $allowedSorts = [
        'id',
        "title",
        'parent',
        "is_parent",
        "posision",
        "url",
        'created_at',
        'updated_at'
    ];

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActive($query)
    {
        return $query->where('is_parent', "=",1);
    }

    public function subMenu(){

        return $this->belongsTo(Menu::class,"parent");
    }

    public function childs(){

        return $this->hasMany(Menu::class,"parent")->orderBy("posision","asc");
    }

}
