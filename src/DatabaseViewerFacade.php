<?php

namespace LoicOberle\DatabaseViewer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LoicOberle\DatabaseViewer\Skeleton\SkeletonClass
 */
class DatabaseViewerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'database-viewer';
    }
}
