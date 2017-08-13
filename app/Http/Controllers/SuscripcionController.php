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

    public function saveSubscription(Request $request)
    {
        $email = $request->input('email');
        $estado = $request->input('state');
        if(empty($email) || empty($estado)){
            return view('error');
        }
        $this->suscripcionesRepository->create(['email' => $email, 'estado' => $estado]);
        return view('gracias');
    }
}
