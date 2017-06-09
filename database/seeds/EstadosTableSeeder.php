<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$estados = [
					[
						'nombre' => 'Aguascalientes' 	,
						'nombreCorto' => 'Aguascalientes' 	
					],

					[
						'nombre' => 'Baja California'	,
						'nombreCorto' => 'Baja California'	
					],

					[
						'nombre' => 'Baja California Sur'	,
						'nombreCorto' => 'Baja California Sur'	
					],

					[
						'nombre' => 'Campeche' 	,
						'nombreCorto' => 'Campeche' 	
					],

					[
						'nombre' => 'Coahuila de Zaragoza' 	,
						'nombreCorto' => 'Coahuila de Zaragoza' 	
					],

					[
						'nombre' => 'Colima' 	,
						'nombreCorto' => 'Colima' 	
					],

					[
						'nombre' => 'Chiapas' 	,
						'nombreCorto' => 'Chiapas' 	
					],

					[
						'nombre' => 'Chihuahua' 	,
						'nombreCorto' => 'Chihuahua' 	
					],

					[
						'nombre' => 'Distrito Federal'	,
						'nombreCorto' => 'Distrito Federal'	
					],

					[
						'nombre' => 'Durango' 	,
						'nombreCorto' => 'Durango' 	
					],

					[
						'nombre' => 'Guanajuato' 	,
						'nombreCorto' => 'Guanajuato' 	
					],

					[
						'nombre' => 'Guerrero' 	,
						'nombreCorto' => 'Guerrero' 	
					],

					[
						'nombre' => 'Hidalgo' 	,
						'nombreCorto' => 'Hidalgo' 	
					],

					[
						'nombre' => 'Jalisco' 	,
						'nombreCorto' => 'Jalisco' 	
					],

					[
						'nombre' => 'México' 	,
						'nombreCorto' => 'México' 	
					],

					[
						'nombre' => 'Michoacán de Ocampo' 	,
						'nombreCorto' => 'Michoacán de Ocampo' 	
					],

					[
						'nombre' => 'Morelos' 	,
						'nombreCorto' => 'Morelos' 	
					],

					[
						'nombre' => 'Nayarit' 	,
						'nombreCorto' => 'Nayarit' 	
					],

					[
						'nombre' => 'Nuevo León',
						'nombreCorto' => 'Nuevo León'
					],

					[
						'nombre' => 'Oaxaca' 	,
						'nombreCorto' => 'Oaxaca' 	
					],

					[
						'nombre' => 'Puebla' 	,
						'nombreCorto' => 'Puebla' 	
					],

					[
						'nombre' => 'Querétaro' 	,
						'nombreCorto' => 'Querétaro' 	
					],

					[
						'nombre' => 'Quintana Roo',
						'nombreCorto' => 'Quintana Roo'
					],

					[
						'nombre' => 'San Luis Potosí'	,
						'nombreCorto' => 'San Luis Potosí'	
					],

					[
						'nombre' => 'Sinaloa' 	,
						'nombreCorto' => 'Sinaloa' 	
					],

					[
						'nombre' => 'Sonora' 	,
						'nombreCorto' => 'Sonora' 	
					],

					[
						'nombre' => 'Tabasco' 	,
						'nombreCorto' => 'Tabasco' 	
					],

					[
						'nombre' => 'Tamaulipas' 	,
						'nombreCorto' => 'Tamaulipas' 	
					],

					[
						'nombre' => 'Tlaxcala' 	,
						'nombreCorto' => 'Tlaxcala' 	
					],

					[
						'nombre' => 'Veracruz de Ignacio de la Llave' 	,
						'nombreCorto' => 'Veracruz de Ignacio de la Llave' 	
					],

					[
						'nombre' => 'Yucatán' 	,
						'nombreCorto' => 'Yucatán' 	
					],

					[
						'nombre' => 'Zacatecas' 	,
						'nombreCorto' => 'Zacatecas' 	
					],


		];

		foreach ($estados as $key => $value) {

			Estado::create($value);

		}
    }
}
