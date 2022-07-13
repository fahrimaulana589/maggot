<?php //88948c3f938950c21cc5e6598163c7cc
/** @noinspection all */

namespace App\Package\Profile\Model {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Package\Profile\Model\_IH_Profile_C;
    use LaravelIdea\Helper\App\Package\Profile\Model\_IH_Profile_QB;

    /**
     * @property int $id
     * @property string $nama_aplikasi
     * @property string $icon
     * @property string $favicon
     * @property string $phone
     * @property string $slogan
     * @property string $alamat
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $map
     * @method static _IH_Profile_QB onWriteConnection()
     * @method _IH_Profile_QB newQuery()
     * @method static _IH_Profile_QB on(null|string $connection = null)
     * @method static _IH_Profile_QB query()
     * @method static _IH_Profile_QB with(array|string $relations)
     * @method _IH_Profile_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Profile_C|Profile[] all()
     * @mixin _IH_Profile_QB
     */
    class Profile extends Model {}
}
