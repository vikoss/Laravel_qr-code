<?php

use Illuminate\Database\Seeder;
use App\ModelsFuelStation\Dependency;

class DependencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dependencies = [
            
            
            
            
            ['SEGURIDAD PÚBLICA'],
            ['PROTECCIÓN CIVIL'],
            ['OBRAS PÚBLICAS'],
            ['SERVICIOS PÚBLICOS','BACHEO Y BALIZAMIENTO'],
            ['SERVICIOS PÚBLICOS','ALUMBRADO PÚBLICO'],
            ['SERVICIOS PÚBLICOS','PANTEONES, PARQUES Y JARDINES'],
            ['SERVICIOS PÚBLICOS','LIMPIA'],
            ['VARIOS',''],
            ['VARIOS','1er. REGIDOR'],
            ['VARIOS','2o. REGIDOR'],
            ['VARIOS','3er.  REGIDOR'],
            ['VARIOS','4o. REGIDOR'],
            ['VARIOS','5o.  REGIDOR'],
            ['VARIOS','6o.  REGIDOR'],
            ['VARIOS','7o. REGIDOR'],
            ['VARIOS','8o. REGIDOR'],
            ['VARIOS','9o. REGIDOR'],
            ['VARIOS','10o. REGIDOR'],
            ['VARIOS','11er. REGIDOR'],
            ['VARIOS','13er. REGIDOR'],
            ['VARIOS','CONTRALORÍA'],
            ['VARIOS','SINDICATURA'],
            ['VARIOS','JURÍDICO'],
            ['VARIOS','COMUNICACIÓN SOCIAL'],
            ['VARIOS','TESORERÍA'],
            ['VARIOS','DESARROLLO URBANO'],
            ['VARIOS','EDUCACIÓN'],
            ['VARIOS','PRESIDENCIA'],
            ['VARIOS','FOMENTO AGROPECUARIO'],
            ['VARIOS','MEDIO AMBIENTE'],
            ['VARIOS','GOBERNACIÓN'],
            ['VARIOS','DERECHOS HUMANOS'],
            ['VARIOS','PLANEACIÓN'],
            ['VARIOS','SERVICIOS GENERALES'],
            ['VARIOS','DESARROLLO SOCIAL'],
            ['VARIOS','BIENESTAR SOCIAL'],
            ['VARIOS','TURISMO'],
            ['VARIOS','RECURSOS MATERIALES'],
            ['VARIOS','TENENCIA DE LA TIERRA'],
            ['VARIOS','GIRAS, EVENTOS Y DIFUSIÓN'],
            ['VARIOS','CATASTRO'],
            ['VARIOS','MOVILIDAD'],
            ['VARIOS','SINDICATO'],
            ['VARIOS','CULTURA'],
            ['VARIOS','INSTITUTO MUNICIPAL DE LA MUJER'],
            ['VARIOS','OFICIALIA CONCILIADORA Y CALIFICADORA'],
        ];

        foreach ($dependencies as $key => $dependency) {
            Dependency::create([
                'name'      => $dependency[0],
                'section'   => $dependency[1],
            ]);
        }
    }
}
