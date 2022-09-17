<?php

namespace App\Http\Controllers;

use App\Http\Actions\GetSpecialists;

class SpecialistsController extends Controller
{
    /**
     * Carrega especialidades
     * @OA\Get(
     *  tags={"Especialidades"},
     *  description="Carrega especialidades",
     *  path="/api/specialists/list",
     *  summary="Carrega especialidades",
     *
     *     @OA\Response(
     *      response=200,
     *      description="OK",
     *     )
     * )
     *
     * getlist
     *
     * @return mixed
     */
    public function getlist()
    {
        $specialists = app(GetSpecialists::class)->execute();
        return response()->json(array('specialists' => $specialists));
    }
}
