<?php

namespace App\Package\Profile\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Access\RoleAccess;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Profile extends Model
{

    use RoleAccess, Filterable, AsSource, Chartable, HasFactory,Attachable;

    protected $fillable = [
        "nama_aplikasi",
        'favicon',
        "icon",
        "phone",
        "slogan",
        "alamat",
        "map",
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $allowedFilters = [
        "nama_aplikasi",
        'favicon',
        "icon",
        "phone",
        "slogan",
        "alamat",
        "map",
    ];

    protected $allowedSorts = [
        'id',
        "nama_aplikasi",
        'favicon',
        "icon",
        "phone",
        "slogan",
        "alamat",
        "map",
        'created_at',
        'updated_at'
    ];
}
