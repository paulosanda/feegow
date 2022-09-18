<?php

namespace App\Http\Actions;

use App\Models\Source;

class Sources extends BaseAction
{
    /**
     * rules
     *
     * @return
     */
    public function rules()
    {
        return [
            'source' => 'required|string',
        ];
    }

    public function execute($data)
    {
        $this->validate($data);

        $newSource = new Source();

        try {
            $newSource->create($data);
            return response()->json(['Source cadastrado com sucesso.']);
        } catch (\Illuminate\Database\QueryException $exception) {

            return $exception->errorInfo;
        }
    }
}
