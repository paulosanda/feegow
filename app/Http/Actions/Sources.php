<?php

namespace App\Http\Actions;

use App\Models\Source;
use Illuminate\Database\QueryException;

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
        } catch (QueryException $exception) {

            return $exception->errorInfo;
        }
    }
}
