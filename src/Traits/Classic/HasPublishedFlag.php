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

use Cog\Flag\Scopes\Classic\PublishedFlagScope;

/**
 * Class HasPublishedFlag.
 *
 * @package Cog\Flag\Traits\Classic
 */
trait HasPublishedFlag
{
    /**
     * Boot the HasPublishedFlag trait for a model.
     *
     * @return void
     */
    public static function bootHasPublishedFlag()
    {
        static::addGlobalScope(new PublishedFlagScope);
    }
}
