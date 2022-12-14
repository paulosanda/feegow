<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Actions\Prospections;

class ProspectionController extends Controller
{
    /**
     * @OA\Post(
     * path="/api/prospection/new",
     * summary="Cadastra prospect",
     * description="Cadastra prospect  - IMPORTANTE tenha certeza que cadastrou ao menos uma categoria de source",
     * operationId="Cadastra prospect",
     * tags={"Prospect"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Cadastra prospecrt",
     *    @OA\JsonContent(
     *       required={"specialty_id","professional_id","name","cpf","source_id","birthdate"},
     *       @OA\Property(property="specialty_id", type="integer", example=263),
     *       @OA\Property(property="professional_id", type="integer", example=263),
     *       @OA\Property(property="name", type="string", example="Marcos Silva"),
     *       @OA\Property(property="cpf", type="string", example="548.584.551-89"),
     *       @OA\Property(property="source_id", type="integer", example=1),
     *       @OA\Property(property="birthdate", type="string", example="2001-05-20"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Source cadastrado com sucesso",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Prospect cadastrado com sucesso")
     *        )
     *     )
     * )
     *
     * store
     *
     * @param  mixed $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $prospect = app(Prospections::class)->execute([
            'specialty_id' => $request->specialty_id,
            'professional_id' => $request->professional_id,
            'name' => $request->name,
            'cpf' => $request->cpf,
            'source_id' => $request->source_id,
            'birthdate' => $request->birthdate
        ]);

        return response()->json([$prospect], 200);
    }
}
