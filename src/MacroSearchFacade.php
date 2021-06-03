<?php

namespace Mawuekom\MacroSearch;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\MacroSearch\Skeleton\SkeletonClass
 */
class MacroSearchFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-macro-search';
    }
}
