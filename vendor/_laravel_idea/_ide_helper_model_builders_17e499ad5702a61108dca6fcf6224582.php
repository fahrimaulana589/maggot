<?php //be758a0ca485cd6975276091574321e7
/** @noinspection all */

namespace LaravelIdea\Helper\App\Package\Slide\Model {

    use App\Package\Slide\Model\Slide;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Orchid\Filters\HttpFilter;
    use Orchid\Screen\Layouts\Selection;

    /**
     * @method Slide|null getOrPut($key, $value)
     * @method Slide|$this shift(int $count = 1)
     * @method Slide|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Slide|$this pop(int $count = 1)
     * @method Slide|null pull($key, $default = null)
     * @method Slide|null last(callable $callback = null, $default = null)
     * @method Slide|$this random(int|null $number = null)
     * @method Slide|null sole($key = null, $operator = null, $value = null)
     * @method Slide|null get($key, $default = null)
     * @method Slide|null first(callable $callback = null, $default = null)
     * @method Slide|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Slide|null find($key, $default = null)
     * @method Slide[] all()
     */
    class _IH_Slide_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Slide[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Slide_QB whereId($value)
     * @method _IH_Slide_QB whereUrl($value)
     * @method _IH_Slide_QB whereImage($value)
     * @method _IH_Slide_QB whereCreatedAt($value)
     * @method _IH_Slide_QB whereUpdatedAt($value)
     * @method Slide baseSole(array|string $columns = ['*'])
     * @method Slide create(array $attributes = [])
     * @method _IH_Slide_C|Slide[] cursor()
     * @method Slide|null|_IH_Slide_C|Slide[] find($id, array|string $columns = ['*'])
     * @method _IH_Slide_C|Slide[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Slide|_IH_Slide_C|Slide[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Slide|_IH_Slide_C|Slide[] findOrFail($id, array|string $columns = ['*'])
     * @method Slide|_IH_Slide_C|Slide[] findOrNew($id, array|string $columns = ['*'])
     * @method Slide first(array|string $columns = ['*'])
     * @method Slide firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Slide firstOrCreate(array $attributes = [], array $values = [])
     * @method Slide firstOrFail(array|string $columns = ['*'])
     * @method Slide firstOrNew(array $attributes = [], array $values = [])
     * @method Slide firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Slide forceCreate(array $attributes)
     * @method _IH_Slide_C|Slide[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Slide_C|Slide[] get(array|string $columns = ['*'])
     * @method Slide getModel()
     * @method Slide[] getModels(array|string $columns = ['*'])
     * @method _IH_Slide_C|Slide[] hydrate(array $items)
     * @method Slide make(array $attributes = [])
     * @method Slide newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Slide[]|_IH_Slide_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Slide[]|_IH_Slide_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Slide sole(array|string $columns = ['*'])
     * @method Slide updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Slide_QB averageByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Slide_QB countByDays(\DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Slide_QB countForGroup(string $groupColumn)
     * @method _IH_Slide_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_Slide_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_Slide_QB filtersApply(iterable $filters = [])
     * @method _IH_Slide_QB filtersApplySelection(Selection|string $selection)
     * @method _IH_Slide_QB maxByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Slide_QB minByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Slide_QB sumByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Slide_QB valuesByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = 'created_at')
     */
    class _IH_Slide_QB extends _BaseBuilder {}
}
