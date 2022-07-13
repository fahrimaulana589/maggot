<?php //36174c2145f4f798acfeb9cb5b1f089b
/** @noinspection all */

namespace App\Package\Slide\Model {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Package\Slide\Model\_IH_Slide_C;
    use LaravelIdea\Helper\App\Package\Slide\Model\_IH_Slide_QB;

    /**
     * @property int $id
     * @property string $url
     * @property string $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Slide_QB onWriteConnection()
     * @method _IH_Slide_QB newQuery()
     * @method static _IH_Slide_QB on(null|string $connection = null)
     * @method static _IH_Slide_QB query()
     * @method static _IH_Slide_QB with(array|string $relations)
     * @method _IH_Slide_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Slide_C|Slide[] all()
     * @mixin _IH_Slide_QB
     */
    class Slide extends Model {}
}
