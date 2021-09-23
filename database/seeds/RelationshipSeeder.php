<?php

use Illuminate\Database\Seeder;
use App\ModelsGraduationPhotos\Relationship;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relationships = [
            'ABUELO(A)',
            'CUÑADO(A)',
            'ESPOSO(A)',
            'FAMILIAR LEJANO',
            'HERMANO(A)',
            'HIJO(A)',
            'NIETO(A)',
            'NUERA/YERNO',
            'PAPA/MAMA',
            'PRIMO(A)',
            'SOBRINO(A)',
            'SUEGRO(A)',
            'TIO(A)',
            'VECINO(A)/CONOCIDO(A)/AMIGO(A)',
            'NOVIO(A)'
        ];
        foreach ($relationships as $key => $relationship) {
            Relationship::create([ 'name' => $relationship ]);
        }
    }
}
