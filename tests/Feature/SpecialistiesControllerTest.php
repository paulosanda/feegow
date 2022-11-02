<?php

namespace Tests\Feature;

use Tests\TestCase;

class SpecialistiesControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_specialisties_controller()
    {
        $this->get(route('specialisties.list'))
            ->assertJsonStructure([
                "specialists" => [
                    "success",
                    "content" => [
                        [
                            "especialidade_id",
                            "nome",
                            "consulta_id",
                            "consulta_online_id",
                            "exibir_agendamento_online",
                            "codigo_tiss",
                        ]
                    ]
                ]
            ]);
    }
}
