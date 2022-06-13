<?php

namespace App\Package\Page\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Access\RoleAccess;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Page extends Model
{
    use RoleAccess, Filterable, AsSource, Chartable, HasFactory,Attachable;

    protected $fillable = [
        "title",
        'content',
        "image",
        "slug",
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $allowedFilters = [
        "title",
        'content',
        "image",
        "slug"
    ];

    protected $allowedSorts = [
        'id',
        "title",
        'content',
        "image",
        "slug",
        'created_at',
        'updated_at'
    ];

}
