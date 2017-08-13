<?php

namespace App\Http\Controllers;

use App\Repositories\StatesRepository;
use App\Repositories\SuscripcionesRepository;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    /**
     * @var
     */
    private $suscripcionesRepository;
    /**
     * @var
     */
    private $statesRepository;

    public function __construct(SuscripcionesRepository $suscripcionesRepository, StatesRepository $statesRepository)
    {
        $this->suscripcionesRepository = $suscripcionesRepository;
        $this->statesRepository = $statesRepository;
    }

    public function showForm()
    {
        $states = $this->statesRepository->getAll()->toArray();
        return view('suscripcion', ['states'=> $states]);
    }
}
