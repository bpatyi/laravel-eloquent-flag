<?php

/*
 * This file is part of Laravel Eloquent Flag.
 *
 * (c) CyberCog <support@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\Flag\Traits\Classic;

use Cog\Flag\Scopes\Classic\ActiveFlagScope;

/**
 * Class HasActiveFlag.
 *
 * @package Cog\Flag\Traits\Classic
 */
trait HasActiveFlag
{
    /**
     * Boot the HasKeptFlag trait for a model.
     *
     * @return void
     */
    public static function bootHasActiveFlag()
    {
        static::addGlobalScope(new ActiveFlagScope);
    }
}
