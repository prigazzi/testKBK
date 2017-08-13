<?php
/**
 * Created by Alan.
 * Date: 13/08/17
 */

namespace App\Repositories;


use App\States;

class StatesRepository {

    private $model;

    public function __construct(States $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create(array $attributes)
    {
        //print_r('metodo create');
        return $this->model->create([
            'id'        => $attributes[0],
            'code'      => $attributes[1],
            'name'      => $attributes[2],
            'createdAt' => $attributes[3],
            'updatedAt' => $attributes[4]
        ]);

    }

} 