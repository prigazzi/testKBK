<?php
/**
 * Created by Alan.
 * Date: 13/08/17
 */

namespace App\Repositories;


use App\Suscripcion;

class SuscripcionesRepository {

    private $model;

    public function __construct(Suscripcion $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes)
    {

    }

} 