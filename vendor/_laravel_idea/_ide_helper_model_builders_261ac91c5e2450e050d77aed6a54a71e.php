<?php //8f00f8ce26029f0b2f614acf1858bc79
/** @noinspection all */

namespace LaravelIdea\Helper\App\Package\Profile\Model {

    use App\Package\Profile\Model\Profile;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Orchid\Filters\HttpFilter;
    use Orchid\Screen\Layouts\Selection;

    /**
     * @method Profile|null getOrPut($key, $value)
     * @method Profile|$this shift(int $count = 1)
     * @method Profile|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Profile|$this pop(int $count = 1)
     * @method Profile|null pull($key, $default = null)
     * @method Profile|null last(callable $callback = null, $default = null)
     * @method Profile|$this random(int|null $number = null)
     * @method Profile|null sole($key = null, $operator = null, $value = null)
     * @method Profile|null get($key, $default = null)
     * @method Profile|null first(callable $callback = null, $default = null)
     * @method Profile|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Profile|null find($key, $default = null)
     * @method Profile[] all()
     */
    class _IH_Profile_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Profile[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Profile_QB whereId($value)
     * @method _IH_Profile_QB whereNamaAplikasi($value)
     * @method _IH_Profile_QB whereIcon($value)
     * @method _IH_Profile_QB whereFavicon($value)
     * @method _IH_Profile_QB wherePhone($value)
     * @method _IH_Profile_QB whereSlogan($value)
     * @method _IH_Profile_QB whereAlamat($value)
     * @method _IH_Profile_QB whereCreatedAt($value)
     * @method _IH_Profile_QB whereUpdatedAt($value)
     * @method _IH_Profile_QB whereMap($value)
     * @method Profile baseSole(array|string $columns = ['*'])
     * @method Profile create(array $attributes = [])
     * @method _IH_Profile_C|Profile[] cursor()
     * @method Profile|null|_IH_Profile_C|Profile[] find($id, array|string $columns = ['*'])
     * @method _IH_Profile_C|Profile[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Profile|_IH_Profile_C|Profile[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Profile|_IH_Profile_C|Profile[] findOrFail($id, array|string $columns = ['*'])
     * @method Profile|_IH_Profile_C|Profile[] findOrNew($id, array|string $columns = ['*'])
     * @method Profile first(array|string $columns = ['*'])
     * @method Profile firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Profile firstOrCreate(array $attributes = [], array $values = [])
     * @method Profile firstOrFail(array|string $columns = ['*'])
     * @method Profile firstOrNew(array $attributes = [], array $values = [])
     * @method Profile firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Profile forceCreate(array $attributes)
     * @method _IH_Profile_C|Profile[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Profile_C|Profile[] get(array|string $columns = ['*'])
     * @method Profile getModel()
     * @method Profile[] getModels(array|string $columns = ['*'])
     * @method _IH_Profile_C|Profile[] hydrate(array $items)
     * @method Profile make(array $attributes = [])
     * @method Profile newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Profile[]|_IH_Profile_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Profile[]|_IH_Profile_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Profile sole(array|string $columns = ['*'])
     * @method Profile updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Profile_QB averageByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Profile_QB countByDays(\DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Profile_QB countForGroup(string $groupColumn)
     * @method _IH_Profile_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_Profile_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_Profile_QB filtersApply(iterable $filters = [])
     * @method _IH_Profile_QB filtersApplySelection(Selection|string $selection)
     * @method _IH_Profile_QB maxByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Profile_QB minByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Profile_QB sumByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Profile_QB valuesByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = 'created_at')
     */
    class _IH_Profile_QB extends _BaseBuilder {}
}
