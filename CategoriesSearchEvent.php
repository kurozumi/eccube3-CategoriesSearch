<?php

/*
 * This file is part of the CategoriesSearch
 *
 * Copyright (C) 2017 複数カテゴリ検索プラグイン
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategoriesSearch;

use Eccube\Application;
use Eccube\Event\EventArgs;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;

class CategoriesSearchEvent
{

    /** @var  \Eccube\Application $app */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function onFrontProductIndexSearch(EventArgs $event)
    {
    }

}
