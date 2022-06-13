<?php

namespace App\Package\Tutorial\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Access\RoleAccess;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Tutorial extends Model
{
    use RoleAccess, Filterable, AsSource, Chartable, HasFactory,Attachable;

    protected $fillable = [
        "title",
        "description",
        "image",
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $allowedFilters = [
        "title",
        "description",
        "image",
    ];

    protected $allowedSorts = [
        'id',
        "title",
        "description",
        "image",
        'created_at',
        'updated_at'
    ];

    public function steps(){

        return $this->hasMany(Step::class,"id_tutorial");
    }
}
