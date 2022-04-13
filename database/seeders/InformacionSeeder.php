<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Headertron;
use App\Models\Horario;
use App\Models\Informacion;
use App\Models\Producto;
use App\Models\RedesSocial;
use App\Models\Subcategoria;
use App\Models\Testimonio;
use Illuminate\Database\Seeder;

class InformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Categoria::create([
            'nombre' => 'Drinks'
        ]);


        Subcategoria::create([
            'nombre' => 'waters',
            'categoria_id' => 1

        ]);

        Producto::create([
            'producto_nombre' => 'water',
            'categoria_id' => 1,
            'subcategoria_id' => 1,
            'descripcion' => 'Agua embotellada',
            'precio' => 2.66,
            'imagen' => 'img/water.jpg',
        ]);

        Informacion::create([
            'empresa_nombre' => 'Store Textas',
            'telefono' => '2323123123',
            'telefono2' => '23123123',
            'whatapp' => '23123123',
            'empresa_descripcion' => 'Empresa que vende cosas',
            'email' => 'store@mail.fire.com',
            'email2' => 'store@mail.fire.com',
            'logo' => 'logo_empresa.jpg',
        ]);



        Headertron::create([
            'imagen' => 'img/header1.jpg',
            'title' => 'Titulo Princiap',
            'descripcion' => 'lorem imputs',
            'link_to' => '#!',
        ]);


        Testimonio::create([
            'imagen' => 'img/cliente.jpg',
            'title' => 'Andrys Salazar',
            'descripcion' => 'Me gusta trabajar con esta empresa',
        ]);

        Cliente::create([
            'imagen' => 'img/cliente2.jpg',
            'title' => 'Adolfo Gabazutt',
            'descripcion' => 'me gusta trabajar con esta empresa',
        ]);

        $horarios = [
            [
                'dia' => 'Lunes',
                'apertura' => '7:00 am',
                'cierre' => '8:00 pm',
            ],
            [
                'dia' => 'Martes',
                'apertura' => '7:00 am',
                'cierre' => '8:00 pm',
            ],
            [
                'dia' => 'Miercoles',
                'apertura' => '7:00 am',
                'cierre' => '8:00 pm',
            ],
            [
                'dia' => 'Jueves',
                'apertura' => '7:00 am',
                'cierre' => '8:00 pm',
            ],
            [
                'dia' => 'Viernes',
                'apertura' => '7:00 am',
                'cierre' => '8:00 pm',
            ],
            [
                'dia' => 'Sabado',
                'apertura' => '7:00 am',
                'cierre' => '8:00 pm',
            ],

            [
                'dia' => 'Domingo',
                'apertura' => 'Cerrado',
                'cierre' => '',
            ],
        ];


        for ($i = 0; $i < count($horarios); $i++) {
            Horario::create($horarios[$i]);
        }


        RedesSocial::create([
            'imagen' => 'img/facebook.png',
            'nombre' => 'Facebook',
            'url' => 'fb.com/adolfo.gbztt'
        ]);
    }
}
