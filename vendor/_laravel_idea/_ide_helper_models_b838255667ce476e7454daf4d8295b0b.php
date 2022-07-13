<?php //f13974e8c3853e1c55632b95b9bb1110
/** @noinspection all */

namespace App\Package\Menu\Model {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Package\Menu\Model\_IH_Menu_C;
    use LaravelIdea\Helper\App\Package\Menu\Model\_IH_Menu_QB;

    /**
     * @property int $id
     * @property int|null $parent
     * @property string $title
     * @property string $posision
     * @property string $url
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property bool $is_parent
     * @property _IH_Menu_C|Menu[] $childs
     * @property-read int $childs_count
     * @method HasMany|_IH_Menu_QB childs()
     * @property Menu|null $subMenu
     * @method BelongsTo|_IH_Menu_QB subMenu()
     * @method static _IH_Menu_QB onWriteConnection()
     * @method _IH_Menu_QB newQuery()
     * @method static _IH_Menu_QB on(null|string $connection = null)
     * @method static _IH_Menu_QB query()
     * @method static _IH_Menu_QB with(array|string $relations)
     * @method _IH_Menu_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Menu_C|Menu[] all()
     * @mixin _IH_Menu_QB
     */
    class Menu extends Model {}
}
