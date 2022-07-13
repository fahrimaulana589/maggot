<?php //d4f48ee77fa1705266bb5652c485a75a
/** @noinspection all */

namespace App\Package\Tutorial\Model {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Package\Tutorial\Model\_IH_Step_C;
    use LaravelIdea\Helper\App\Package\Tutorial\Model\_IH_Step_QB;
    use LaravelIdea\Helper\App\Package\Tutorial\Model\_IH_Tutorial_C;
    use LaravelIdea\Helper\App\Package\Tutorial\Model\_IH_Tutorial_QB;

    /**
     * @property int $id
     * @property int $id_tutorial
     * @property string $title
     * @property string $description
     * @property string $video
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Tutorial $tutorial
     * @method BelongsTo|_IH_Tutorial_QB tutorial()
     * @method static _IH_Step_QB onWriteConnection()
     * @method _IH_Step_QB newQuery()
     * @method static _IH_Step_QB on(null|string $connection = null)
     * @method static _IH_Step_QB query()
     * @method static _IH_Step_QB with(array|string $relations)
     * @method _IH_Step_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Step_C|Step[] all()
     * @mixin _IH_Step_QB
     */
    class Step extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $description
     * @property string $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Step_C|Step[] $steps
     * @property-read int $steps_count
     * @method HasMany|_IH_Step_QB steps()
     * @method static _IH_Tutorial_QB onWriteConnection()
     * @method _IH_Tutorial_QB newQuery()
     * @method static _IH_Tutorial_QB on(null|string $connection = null)
     * @method static _IH_Tutorial_QB query()
     * @method static _IH_Tutorial_QB with(array|string $relations)
     * @method _IH_Tutorial_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tutorial_C|Tutorial[] all()
     * @mixin _IH_Tutorial_QB
     */
    class Tutorial extends Model {}
}
