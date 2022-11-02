<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfessionalControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_professional_list()
    {
        $this->get(route('professional.list', [263]))
            ->assertJsonStructure([
                "specialists" => [
                    [
                        "profissional_id",
                        "nome",
                        "tratamento",
                        "ativo",
                        "rqe",
                        "conselho",
                        "documento_conselho",
                        "uf_conselho",
                        "foto",
                        "sexo",
                        "especialidades" => [
                            [
                                "especialidade_id",
                                "nome_especialidade",
                                "CBOS"
                            ]
                        ]
                    ]
                ]
            ]);
    }
}
