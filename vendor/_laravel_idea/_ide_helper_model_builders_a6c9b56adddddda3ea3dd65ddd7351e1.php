<?php //ea360f2bf204fd4914cc90f44fd9464f
/** @noinspection all */

namespace LaravelIdea\Helper\Orchid\Platform\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Orchid\Filters\HttpFilter;
    use Orchid\Platform\Models\Role;
    use Orchid\Platform\Models\User;
    use Orchid\Screen\Layouts\Selection;

    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, $default = null)
     * @method Role|null last(callable $callback = null, $default = null)
     * @method Role|$this random(int|null $number = null)
     * @method Role|null sole($key = null, $operator = null, $value = null)
     * @method Role|null get($key, $default = null)
     * @method Role|null first(callable $callback = null, $default = null)
     * @method Role|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereSlug($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB wherePermissions($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array|string $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array|string $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Role_QB averageByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Role_QB countByDays(\DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Role_QB countForGroup(string $groupColumn)
     * @method _IH_Role_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_Role_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_Role_QB filtersApply(iterable $filters = [])
     * @method _IH_Role_QB filtersApplySelection(Selection|string $selection)
     * @method _IH_Role_QB maxByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Role_QB minByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Role_QB sumByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_Role_QB valuesByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = 'created_at')
     */
    class _IH_Role_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB wherePermissions($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _IH_User_QB averageByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_User_QB byAccess(string $permitWithoutWildcard)
     * @method _IH_User_QB byAnyAccess(iterable|string $permitsWithoutWildcard)
     * @method _IH_User_QB countByDays(\DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_User_QB countForGroup(string $groupColumn)
     * @method _IH_User_QB defaultSort(string $column, string $direction = 'asc')
     * @method _IH_User_QB filters(HttpFilter $httpFilter = null)
     * @method _IH_User_QB filtersApply(iterable $filters = [])
     * @method _IH_User_QB filtersApplySelection(Selection|string $selection)
     * @method _IH_User_QB maxByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_User_QB minByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_User_QB sumByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = null)
     * @method _IH_User_QB valuesByDays(string $value, \DateTimeInterface|null|string $startDate = null, \DateTimeInterface|null|string $stopDate = null, string $dateColumn = 'created_at')
     */
    class _IH_User_QB extends _BaseBuilder {}
}
