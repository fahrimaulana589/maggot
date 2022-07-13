<?php //f692d2d736e562ee20ed3fa63853dcbf
/** @noinspection all */

namespace LaravelIdea\Helper\App\Package\Menu\Model {

    use App\Package\Menu\Model\Menu;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Orchid\Filters\HttpFilter;
    use Orchid\Screen\Layouts\Selection;

    /**
     * @method Menu|null getOrPut($key, $value)
     * @method Menu|$this shift(int $count = 1)
     * @method Menu|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Menu|$this pop(int $count = 1)
     * @method Menu|null pull($key, $default = null)
     * @method Menu|null last(callable $callback = null, $default = null)
     * @method Menu|$this random(int|null $number = null)
     * @method Menu|null sole($key = null, $operator = null, $value = null)
     * @method Menu|null get($key, $default = null)
     * @method Menu|null first(callable $callback = null, $default = null)
     * @method Menu|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Menu|null find($key, $default = null)
     * @method Menu[] all()
     */
    class _IH_Menu_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Menu[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Menu_QB whereId($value)
     * @method _IH_Menu_QB whereParent($value)
     * @method _IH_Menu_QB whereTitle($value)
     * @method _IH_Menu_QB wherePosision($value)
     * @method _IH_Menu_QB whereUrl($value)
     * @method _IH_Menu_QB whereCreatedAt($value)
     * @method _IH_Menu_QB whereUpdatedAt($value)
     * @method _IH_Menu_QB whereIsParent($value)
     * @method Menu baseSole(array|string $columns = ['*'])
     * @method Menu create(array $attributes = [])
     * @method _IH_Menu_C|Menu[] cursor()
     * @method Menu|null|_IH_Menu_C|Menu[] find($id, array|string $columns = ['*'])
     * @method _IH_Menu_C|Menu[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Menu|_IH_Menu_C|Menu[] findOrFail($id, array|string $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOrNew($id, array|string $columns = ['*'])
     * @method Menu first(array|string $columns = ['*'])
     * @method Menu firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Menu firstOrCreate(array $attributes = [], array $values = [])
     * @method Menu firstOrFail(array|string $columns = ['*'])
     * @method Menu firstOrNew(array $attributes = [], array $values = [])
     * @method Menu firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Menu forceCreate(array $attributes)
     * @method _IH_Menu_C|Menu[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Menu_C|Menu[] get(array|string $columns = ['*'])
     * @method Menu getModel()
     * @method Menu[] getModels(array|string $columns = ['*'])
     * @method _IH_Menu_C|Menu[] hydrate(array $items)
     * @method Menu make(array $attributes = [])
     * @method Menu newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Menu[]|_IH_Menu_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Menu[]|_IH_Menu_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Menu sole(array|string $columns = ['*'])
     * @method Menu updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Menu_QB active()
     * @method _IH_Menu_QB averageByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Menu_QB countByDays(\DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Menu_QB countForGroup(string $groupColumn)
     * @method _IH_Menu_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_Menu_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_Menu_QB filtersApply(iterable $filters = [])
     * @method _IH_Menu_QB filtersApplySelection(Selection|string $selection)
     * @method _IH_Menu_QB maxByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Menu_QB minByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Menu_QB sumByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Menu_QB valuesByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = 'created_at')
     */
    class _IH_Menu_QB extends _BaseBuilder {}
}
