<?php
/**
 * Created by PhpStorm.
 * User: 104
 * Date: 29.11.2017
 * Time: 9:51
 */

namespace Corp\Repositories;

use Corp\Menu;

class MenusRepository extends Repository {

    public function __construct(Menu $menu){
        $this->model = $menu;
    }


}