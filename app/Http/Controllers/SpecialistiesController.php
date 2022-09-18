<?php

namespace App\Http\Controllers;

use App\Http\Actions\Specialisties;

class SpecialistiesController extends Controller
{
    /**
     * Carrega especialidades
     * @OA\Get(
     *  tags={"Especialidades"},
     *  description="Carrega especialidades",
     *  path="/api/specialisties/list",
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
    public function list()
    {
        $specialists = app(Specialisties::class)->execute();
        return response()->json(array('specialists' => $specialists));
    }
}
