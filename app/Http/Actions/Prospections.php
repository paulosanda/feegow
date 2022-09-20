<?php

namespace App\Http\Actions;

use App\Models\Prospection;
use Illuminate\Database\QueryException;

class Prospections extends BaseAction
{
    /**
     * rules
     *
     * @return
     */
    public function rules()
    {
        return [
            'specialty_id' => 'required|integer',
            'professional_id' => 'required|integer',
            'name' => 'required|string',
            'cpf' => 'required|string',
            'source_id' => 'required|integer',
            'birthdate' => 'required|string'
        ];
    }

    public function execute($data)
    {
        $this->validate($data);

        $newProspect = new Prospection();

        try {
            $newProspect->create($data);
            return response()->json(['Prospect cadastrado com sucesso.']);
        } catch (QueryException $exception) {

            return $exception->errorInfo;
        }
    }
}
