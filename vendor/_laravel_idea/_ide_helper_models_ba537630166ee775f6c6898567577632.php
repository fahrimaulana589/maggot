<?php //dff7f5d5cf7793bf7d46a4792bb99560
/** @noinspection all */

namespace Orchid\Attachment\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Orchid\Attachment\Models\_IH_Attachmentable_C;
    use LaravelIdea\Helper\Orchid\Attachment\Models\_IH_Attachmentable_QB;
    use LaravelIdea\Helper\Orchid\Attachment\Models\_IH_Attachment_C;
    use LaravelIdea\Helper\Orchid\Attachment\Models\_IH_Attachment_QB;
    use Orchid\Platform\Database\Factories\AttachmentFactory;

    /**
     * @property int $id
     * @property string $name
     * @property string $original_name
     * @property string $mime
     * @property string|null $extension
     * @property int $size
     * @property int $sort
     * @property string $path
     * @property string|null $description
     * @property string|null $alt
     * @property string|null $hash
     * @property string $disk
     * @property int|null $user_id
     * @property string|null $group
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read null|string $relative_url
     * @property-read null|string $title
     * @property-read null|string $url
     * @method static _IH_Attachment_QB onWriteConnection()
     * @method _IH_Attachment_QB newQuery()
     * @method static _IH_Attachment_QB on(null|string $connection = null)
     * @method static _IH_Attachment_QB query()
     * @method static _IH_Attachment_QB with(array|string $relations)
     * @method _IH_Attachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Attachment_C|Attachment[] all()
     * @mixin _IH_Attachment_QB
     * @method static AttachmentFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Attachment extends Model {}

    /**
     * @property int $id
     * @property string $attachmentable_type
     * @property int $attachmentable_id
     * @property int $attachment_id
     * @method static _IH_Attachmentable_QB onWriteConnection()
     * @method _IH_Attachmentable_QB newQuery()
     * @method static _IH_Attachmentable_QB on(null|string $connection = null)
     * @method static _IH_Attachmentable_QB query()
     * @method static _IH_Attachmentable_QB with(array|string $relations)
     * @method _IH_Attachmentable_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Attachmentable_C|Attachmentable[] all()
     * @mixin _IH_Attachmentable_QB
     */
    class Attachmentable extends Model {}
}
