<?php

namespace App\Package\Tutorial\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Access\RoleAccess;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Step extends Model
{
    use RoleAccess, Filterable, AsSource, Chartable, HasFactory,Attachable;

    protected $fillable = [
        "id_tutorial",
        "title",
        "description",
        "video",
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $allowedFilters = [
        "id_tutorial",
        "title",
        "description",
        "video",
    ];

    protected $allowedSorts = [
        'id',
        "id_tutorial",
        "title",
        "description",
        "video",
        'created_at',
        'updated_at'
    ];

    public function tutorial(){

        return $this->belongsTo(Tutorial::class,"id_tutorial");
    }
}
