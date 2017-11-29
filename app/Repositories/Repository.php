<?php
/**
 * Created by PhpStorm.
 * User: 104
 * Date: 29.11.2017
 * Time: 9:52
 */

namespace Corp\Repositories;

use Config;

abstract class Repository {


    protected $model = FALSE;

    public function get()
    {
        $builder = $this->model->select('*');

        return $builder->get();
    }
}