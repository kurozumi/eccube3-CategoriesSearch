<?php

/*
 * This file is part of the CategoriesSearch
 *
 * Copyright (C) 2017 複数カテゴリ検索プラグイン
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategoriesSearch\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class CategoriesSearchController
{

    /**
     * CategoriesSearch画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        // add code...

        return $app->render('CategoriesSearch/Resource/template/index.twig', array(
            // add parameter...
        ));
    }

}
