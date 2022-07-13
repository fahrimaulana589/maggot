<?php //53bb82ea5e1dd22d9060897964d78a47
/** @noinspection all */

namespace LaravelIdea\Helper\App\Package\Tutorial\Model {

    use App\Package\Tutorial\Model\Step;
    use App\Package\Tutorial\Model\Tutorial;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Orchid\Filters\HttpFilter;
    use Orchid\Screen\Layouts\Selection;

    /**
     * @method Step|null getOrPut($key, $value)
     * @method Step|$this shift(int $count = 1)
     * @method Step|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Step|$this pop(int $count = 1)
     * @method Step|null pull($key, $default = null)
     * @method Step|null last(callable $callback = null, $default = null)
     * @method Step|$this random(int|null $number = null)
     * @method Step|null sole($key = null, $operator = null, $value = null)
     * @method Step|null get($key, $default = null)
     * @method Step|null first(callable $callback = null, $default = null)
     * @method Step|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Step|null find($key, $default = null)
     * @method Step[] all()
     */
    class _IH_Step_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Step[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Step_QB whereId($value)
     * @method _IH_Step_QB whereIdTutorial($value)
     * @method _IH_Step_QB whereTitle($value)
     * @method _IH_Step_QB whereDescription($value)
     * @method _IH_Step_QB whereVideo($value)
     * @method _IH_Step_QB whereCreatedAt($value)
     * @method _IH_Step_QB whereUpdatedAt($value)
     * @method Step baseSole(array|string $columns = ['*'])
     * @method Step create(array $attributes = [])
     * @method _IH_Step_C|Step[] cursor()
     * @method Step|null|_IH_Step_C|Step[] find($id, array|string $columns = ['*'])
     * @method _IH_Step_C|Step[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Step|_IH_Step_C|Step[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Step|_IH_Step_C|Step[] findOrFail($id, array|string $columns = ['*'])
     * @method Step|_IH_Step_C|Step[] findOrNew($id, array|string $columns = ['*'])
     * @method Step first(array|string $columns = ['*'])
     * @method Step firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Step firstOrCreate(array $attributes = [], array $values = [])
     * @method Step firstOrFail(array|string $columns = ['*'])
     * @method Step firstOrNew(array $attributes = [], array $values = [])
     * @method Step firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Step forceCreate(array $attributes)
     * @method _IH_Step_C|Step[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Step_C|Step[] get(array|string $columns = ['*'])
     * @method Step getModel()
     * @method Step[] getModels(array|string $columns = ['*'])
     * @method _IH_Step_C|Step[] hydrate(array $items)
     * @method Step make(array $attributes = [])
     * @method Step newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Step[]|_IH_Step_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Step[]|_IH_Step_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Step sole(array|string $columns = ['*'])
     * @method Step updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Step_QB averageByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Step_QB countByDays(\DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Step_QB countForGroup(string $groupColumn)
     * @method _IH_Step_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_Step_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_Step_QB filtersApply(iterable $filters = [])
     * @method _IH_Step_QB filtersApplySelection(Selection|string $selection)
     * @method _IH_Step_QB maxByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Step_QB minByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Step_QB sumByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Step_QB valuesByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = 'created_at')
     */
    class _IH_Step_QB extends _BaseBuilder {}

    /**
     * @method Tutorial|null getOrPut($key, $value)
     * @method Tutorial|$this shift(int $count = 1)
     * @method Tutorial|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Tutorial|$this pop(int $count = 1)
     * @method Tutorial|null pull($key, $default = null)
     * @method Tutorial|null last(callable $callback = null, $default = null)
     * @method Tutorial|$this random(int|null $number = null)
     * @method Tutorial|null sole($key = null, $operator = null, $value = null)
     * @method Tutorial|null get($key, $default = null)
     * @method Tutorial|null first(callable $callback = null, $default = null)
     * @method Tutorial|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Tutorial|null find($key, $default = null)
     * @method Tutorial[] all()
     */
    class _IH_Tutorial_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tutorial[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tutorial_QB whereId($value)
     * @method _IH_Tutorial_QB whereTitle($value)
     * @method _IH_Tutorial_QB whereDescription($value)
     * @method _IH_Tutorial_QB whereImage($value)
     * @method _IH_Tutorial_QB whereCreatedAt($value)
     * @method _IH_Tutorial_QB whereUpdatedAt($value)
     * @method Tutorial baseSole(array|string $columns = ['*'])
     * @method Tutorial create(array $attributes = [])
     * @method _IH_Tutorial_C|Tutorial[] cursor()
     * @method Tutorial|null|_IH_Tutorial_C|Tutorial[] find($id, array|string $columns = ['*'])
     * @method _IH_Tutorial_C|Tutorial[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Tutorial|_IH_Tutorial_C|Tutorial[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tutorial|_IH_Tutorial_C|Tutorial[] findOrFail($id, array|string $columns = ['*'])
     * @method Tutorial|_IH_Tutorial_C|Tutorial[] findOrNew($id, array|string $columns = ['*'])
     * @method Tutorial first(array|string $columns = ['*'])
     * @method Tutorial firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tutorial firstOrCreate(array $attributes = [], array $values = [])
     * @method Tutorial firstOrFail(array|string $columns = ['*'])
     * @method Tutorial firstOrNew(array $attributes = [], array $values = [])
     * @method Tutorial firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tutorial forceCreate(array $attributes)
     * @method _IH_Tutorial_C|Tutorial[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tutorial_C|Tutorial[] get(array|string $columns = ['*'])
     * @method Tutorial getModel()
     * @method Tutorial[] getModels(array|string $columns = ['*'])
     * @method _IH_Tutorial_C|Tutorial[] hydrate(array $items)
     * @method Tutorial make(array $attributes = [])
     * @method Tutorial newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tutorial[]|_IH_Tutorial_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tutorial[]|_IH_Tutorial_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tutorial sole(array|string $columns = ['*'])
     * @method Tutorial updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Tutorial_QB averageByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Tutorial_QB countByDays(\DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Tutorial_QB countForGroup(string $groupColumn)
     * @method _IH_Tutorial_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_Tutorial_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_Tutorial_QB filtersApply(iterable $filters = [])
     * @method _IH_Tutorial_QB filtersApplySelection(Selection|string $selection)
     * @method _IH_Tutorial_QB maxByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Tutorial_QB minByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Tutorial_QB sumByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Tutorial_QB valuesByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = 'created_at')
     */
    class _IH_Tutorial_QB extends _BaseBuilder {}
}
