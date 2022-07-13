<?php //ffaac562d96acf3c4c45de98064438d0
/** @noinspection all */

namespace LaravelIdea\Helper\Orchid\Attachment\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Orchid\Attachment\Models\Attachment;
    use Orchid\Attachment\Models\Attachmentable;
    use Orchid\Filters\HttpFilter;
    use Orchid\Screen\Layouts\Selection;

    /**
     * @method Attachment|null getOrPut($key, $value)
     * @method Attachment|$this shift(int $count = 1)
     * @method Attachment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Attachment|$this pop(int $count = 1)
     * @method Attachment|null pull($key, $default = null)
     * @method Attachment|null last(callable $callback = null, $default = null)
     * @method Attachment|$this random(int|null $number = null)
     * @method Attachment|null sole($key = null, $operator = null, $value = null)
     * @method Attachment|null get($key, $default = null)
     * @method Attachment|null first(callable $callback = null, $default = null)
     * @method Attachment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Attachment|null find($key, $default = null)
     * @method Attachment[] all()
     */
    class _IH_Attachment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Attachment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Attachment_QB whereId($value)
     * @method _IH_Attachment_QB whereName($value)
     * @method _IH_Attachment_QB whereOriginalName($value)
     * @method _IH_Attachment_QB whereMime($value)
     * @method _IH_Attachment_QB whereExtension($value)
     * @method _IH_Attachment_QB whereSize($value)
     * @method _IH_Attachment_QB whereSort($value)
     * @method _IH_Attachment_QB wherePath($value)
     * @method _IH_Attachment_QB whereDescription($value)
     * @method _IH_Attachment_QB whereAlt($value)
     * @method _IH_Attachment_QB whereHash($value)
     * @method _IH_Attachment_QB whereDisk($value)
     * @method _IH_Attachment_QB whereUserId($value)
     * @method _IH_Attachment_QB whereGroup($value)
     * @method _IH_Attachment_QB whereCreatedAt($value)
     * @method _IH_Attachment_QB whereUpdatedAt($value)
     * @method Attachment baseSole(array|string $columns = ['*'])
     * @method Attachment create(array $attributes = [])
     * @method _IH_Attachment_C|Attachment[] cursor()
     * @method Attachment|null|_IH_Attachment_C|Attachment[] find($id, array|string $columns = ['*'])
     * @method _IH_Attachment_C|Attachment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Attachment|_IH_Attachment_C|Attachment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Attachment|_IH_Attachment_C|Attachment[] findOrFail($id, array|string $columns = ['*'])
     * @method Attachment|_IH_Attachment_C|Attachment[] findOrNew($id, array|string $columns = ['*'])
     * @method Attachment first(array|string $columns = ['*'])
     * @method Attachment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Attachment firstOrCreate(array $attributes = [], array $values = [])
     * @method Attachment firstOrFail(array|string $columns = ['*'])
     * @method Attachment firstOrNew(array $attributes = [], array $values = [])
     * @method Attachment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Attachment forceCreate(array $attributes)
     * @method _IH_Attachment_C|Attachment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Attachment_C|Attachment[] get(array|string $columns = ['*'])
     * @method Attachment getModel()
     * @method Attachment[] getModels(array|string $columns = ['*'])
     * @method _IH_Attachment_C|Attachment[] hydrate(array $items)
     * @method Attachment make(array $attributes = [])
     * @method Attachment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Attachment[]|_IH_Attachment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Attachment[]|_IH_Attachment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Attachment sole(array|string $columns = ['*'])
     * @method Attachment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Attachment_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_Attachment_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_Attachment_QB filtersApply(iterable $filters = [])
     * @method _IH_Attachment_QB filtersApplySelection(Selection|string $selection)
     */
    class _IH_Attachment_QB extends _BaseBuilder {}

    /**
     * @method Attachmentable|null getOrPut($key, $value)
     * @method Attachmentable|$this shift(int $count = 1)
     * @method Attachmentable|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Attachmentable|$this pop(int $count = 1)
     * @method Attachmentable|null pull($key, $default = null)
     * @method Attachmentable|null last(callable $callback = null, $default = null)
     * @method Attachmentable|$this random(int|null $number = null)
     * @method Attachmentable|null sole($key = null, $operator = null, $value = null)
     * @method Attachmentable|null get($key, $default = null)
     * @method Attachmentable|null first(callable $callback = null, $default = null)
     * @method Attachmentable|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Attachmentable|null find($key, $default = null)
     * @method Attachmentable[] all()
     */
    class _IH_Attachmentable_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Attachmentable[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Attachmentable_QB whereId($value)
     * @method _IH_Attachmentable_QB whereAttachmentableType($value)
     * @method _IH_Attachmentable_QB whereAttachmentableId($value)
     * @method _IH_Attachmentable_QB whereAttachmentId($value)
     * @method Attachmentable baseSole(array|string $columns = ['*'])
     * @method Attachmentable create(array $attributes = [])
     * @method _IH_Attachmentable_C|Attachmentable[] cursor()
     * @method Attachmentable|null|_IH_Attachmentable_C|Attachmentable[] find($id, array|string $columns = ['*'])
     * @method _IH_Attachmentable_C|Attachmentable[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Attachmentable|_IH_Attachmentable_C|Attachmentable[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Attachmentable|_IH_Attachmentable_C|Attachmentable[] findOrFail($id, array|string $columns = ['*'])
     * @method Attachmentable|_IH_Attachmentable_C|Attachmentable[] findOrNew($id, array|string $columns = ['*'])
     * @method Attachmentable first(array|string $columns = ['*'])
     * @method Attachmentable firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Attachmentable firstOrCreate(array $attributes = [], array $values = [])
     * @method Attachmentable firstOrFail(array|string $columns = ['*'])
     * @method Attachmentable firstOrNew(array $attributes = [], array $values = [])
     * @method Attachmentable firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Attachmentable forceCreate(array $attributes)
     * @method _IH_Attachmentable_C|Attachmentable[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Attachmentable_C|Attachmentable[] get(array|string $columns = ['*'])
     * @method Attachmentable getModel()
     * @method Attachmentable[] getModels(array|string $columns = ['*'])
     * @method _IH_Attachmentable_C|Attachmentable[] hydrate(array $items)
     * @method Attachmentable make(array $attributes = [])
     * @method Attachmentable newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Attachmentable[]|_IH_Attachmentable_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Attachmentable[]|_IH_Attachmentable_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Attachmentable sole(array|string $columns = ['*'])
     * @method Attachmentable updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Attachmentable_QB extends _BaseBuilder {}
}
