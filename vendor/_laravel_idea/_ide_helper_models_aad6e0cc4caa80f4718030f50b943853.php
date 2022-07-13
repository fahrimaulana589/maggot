<?php //70213e1f1a977b12ed7290719e2ae284
/** @noinspection all */

namespace App\Package\Page\Model {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Package\Page\Model\_IH_Page_C;
    use LaravelIdea\Helper\App\Package\Page\Model\_IH_Page_QB;

    /**
     * @property int $id
     * @property string $title
     * @property string $content
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $image
     * @property string $slug
     * @method static _IH_Page_QB onWriteConnection()
     * @method _IH_Page_QB newQuery()
     * @method static _IH_Page_QB on(null|string $connection = null)
     * @method static _IH_Page_QB query()
     * @method static _IH_Page_QB with(array|string $relations)
     * @method _IH_Page_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Page_C|Page[] all()
     * @mixin _IH_Page_QB
     */
    class Page extends Model {}
}
