<?php

namespace App\Package\Slide\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Access\RoleAccess;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Slide extends Model
{
    use RoleAccess, Filterable, AsSource, Chartable, HasFactory,Attachable;

    protected $fillable = [
        "url",
        "image",
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $allowedFilters = [
        "url",
        "image",
    ];

    protected $allowedSorts = [
        'id',
        "url",
        "image",
        'created_at',
        'updated_at'
    ];
}
