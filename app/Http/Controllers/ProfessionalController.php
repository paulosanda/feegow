<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Actions\GetProfessionals;

class ProfessionalController extends Controller
{
    /**
     * Carrega profissionais por especialidade
     * @OA\Get(
     *  path="/api/professional/list/{especialidade_id}",
     *  tags={"Profissionais"},
     *  summary="Carrega profissionais por especialidade",
     *  description="Carrega profissionais por especialidade",
     *
     *      @OA\Parameter(
     *          name="especialidade_id",
     *          in="path",
     *          required=true,
     *          description="inserir especialidade_id",
     *          example=263,
     *      ),
     *      @OA\Response(
     *      response=200,
     *      description="OK",
     *     )
     * )
     *
     * getlist
     *
     * @param  mixed $especialidade_id
     * @return void
     */
    public function getlist($especialidade_id)
    {
        $professionals = app(GetProfessionals::class)->execute($especialidade_id);
        return response()->json(array('specialists' => $professionals));
    }
}
