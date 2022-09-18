<?php

namespace App\Http\Controllers;

use App\Http\Actions\Professionals;

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
     * @return mixed
     */
    public function list($especialidade_id)
    {
        $professionals = app(Professionals::class)->execute($especialidade_id);
        return response()->json(array('specialists' => $professionals));
    }
}
