<?php

namespace App\Package\pengunjung\Model;

use App\Package\saluran\Model\Saluran;
use GetStream\Stream\Client;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Orchid\Access\RoleAccess;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Pengunjung extends Model implements Authenticatable
{
    use Notifiable, UserAccess, AsSource, Filterable, Chartable, HasFactory, HasApiTokens;

    /**
     * @var array
     */
    protected $fillable = [
        "name",
        "password",
        "email",
        "level",
        "id_chat",
        "token",
    ];

    /**
     * @var array
     */
    protected $allowedFilters = [
        'id',
        "name",
        "password",
        "email",
        "level",
        'updated_at',
        'created_at',
    ];

    /**
     * @var array
     */
    protected $allowedSorts = [
        'id',
        "name",
        "password",
        "email",
        "level",
        'updated_at',
        'created_at',
    ];

    public function password(): Attribute
    {

        return Attribute::make(
            set: function ($value) {
                return Hash::make($value);
            },
            get: function ($value) {
                return "";
            }
        );

    }

    public function passwordHash(): Attribute
    {

        return Attribute::make(
            get: function ($value, $attribute) {
                return $attribute["password"];
            }
        );

    }

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
