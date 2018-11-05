<?php

use Illuminate\Database\Seeder;

class OfertasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ofertas')->insert([
        	[
				'titulo'  => 'Desarrollador Frontend',
				'oferta' => 'Breve descripción del trabajo a realizar: Desarrollar el frontend de pantallas ya diseñadas para un proyecto de una familia de sitios web (aproximadamente 40 secciones. Conocimientos técnicos: HTML 5. CSS 3. JS. Bootstrap 4. Se valora conocimientos en WordPress. Tipo de contratación: Freelance (contratación por proyecto). Lugar de trabajo y disponibilidad horaria: Teletrabajo, part time. Interesados: Enviar CV y trabajos realizados a rrhh@amplifica.com.ar. Encargado de la búsqueda: Ignacio Guebara).',
				'fkusuario' => 2,
				'fkarea' => 3,
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
	     	],
	        [
	        	'titulo'  => 'Programadores web y mobile',
				'oferta' => 'Requisitos: Programadores web y mobile para agencia de desarrollo de software. De 18 a 25años. Conocimientos técnicos: Fuertes Conocimientos/Experiencia en PHP, Javascript, jquery, Html5, CSS3, Bootstrap, webservices, React Native Mobile. Análisis y diseño y programación estructurado y orientado a objetos. Frameworks PHP: Laravel. Diseño, programación, implementación y mantenimiento de aplicaciones Web Front-end y Back-End. Integration: API, JSON, REST Services. Tipo de contratación: Pasantia 20hs por semana (el alumno para acceder a una pasantía debe estar cursando en forma regular). Lugar de trabajo y disponibilidad horaria: La Lucila, Buenos Aires; Horario Flexible. Interesados: Enviar CV a juan.dalvit@bits0.com. Encargado de la búsqueda: Juan Dalvit.',
				'fkusuario' => 3,
				'fkarea' => 3,
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')				
	        ],
	        [
	        	'titulo'  => 'Diseñadores Multimediales',
				'oferta' => 'Requisitos: Experiencia previa de 2 años en posiciones similares. Conocimientos técnicos: Conocimientos de herramientas de edición de video y animación, fotografia y retoque digital. Conocimientos en diseño multimedia, Affter Efects, Premier, Motion Graphics, Photoshop, Illustrator, In Design. Breve descripción del trabajo a realizar: Diseñar y armar presentaciones interactivas. Producir videos para promoción de actividades y/o beneficios para clientes externos. Producir cortos para cine con la promoción de material interno. Desarrollar banners con action script para publicidades en sitios de terceros. Desarrollar contenido multimedia para cartelería digital y tecnologías móviles. Tipo de contratación: Efectivo. Lugar de trabajo y disponibilidad horaria: Capital Federal / full time. Interesados: Mandar CV a victoria.fernandez@swissmedical.com.ar',
				'fkusuario' => 3,
				'fkarea' => 9,
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
				
	        ]

    	]);
    }
}
