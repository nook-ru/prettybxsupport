<?php

declare(strict_types=1);

namespace PrettyBx\Support\Facades;

use PrettyBx\Support\Base\AbstractFacade;

class CMain extends AbstractFacade
{
    /**
     * @inheritDoc
     */
    protected static function getFacadeAccessor()
    {
        return 'CMain';
    }
}
