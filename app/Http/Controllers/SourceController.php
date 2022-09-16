<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Source;

class SourceController extends Controller
{
    /**
     * Carrega sources
     * @OA\Get(
     *  path="/api/source/index",
     *  tags={"Sources"},
     *  summary="Carrega sources",
     *  description="Carrega sources",
     *
     *      @OA\Response(
     *      response=200,
     *      description="OK",
     *     )
     * )
     *
     * index
     *
     * @return void
     */
    public function index()
    {
        $sources = Source::all();
        $sources = empty($sources[0]->id) ? ["Não há sources cadastrado"] : $sources;
        // dd(count($sources));
        return response()->json([$sources], 200);
    }

    /**
     * @OA\Post(
     * path="/api/source/new",
     * summary="Cadastra source",
     * description="Cadastra source",
     * operationId="Cadastra source",
     * tags={"Sources"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Cadastra source",
     *    @OA\JsonContent(
     *       required={"source"},
     *       @OA\Property(property="source", type="string", example="Internet"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Source cadastrado com sucesso",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Source cadastrado com sucesso")
     *        )
     *     )
     * )
     *
     *
     *
     *
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $newSource = new Source();
        try {
            $newSource->create([
                'source' => $request->source,
            ]);
            return response()->json(['Source cadastrado com sucesso.'], 200);
        } catch (\Illuminate\Database\QueryException $exception) {

            return $exception->errorInfo;
        }
    }
}
