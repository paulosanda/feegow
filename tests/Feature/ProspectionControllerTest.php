<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Source;

class ProspectionControllerTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route_new_prospection()
    {
        $source = new Source;
        $source->create(['source' => 'Source teste']);

        $this->post(route('prospection.new'), [
            'specialty_id' => 263,
            'professional_id' => 144,
            'name' => 'Marcos Silva',
            'cpf' => '25458922578',
            'source_id' => 1,
            'birthdate' => '1985-05-23'
        ])->assertStatus(200);
    }

    public function test_route_new_prospection_error_without_valid_source()
    {
        $this->post(route('prospection.new'), [
            'specialty_id' => 263,
            'professional_id' => 144,
            'name' => 'Marcos Silva',
            'cpf' => '25458922578',
            'birthdate' => '1985-05-23'
        ])->$this->assertStatus(500);
    }
}
