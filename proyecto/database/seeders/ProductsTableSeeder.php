<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Harry Potter y La Piedra Filosofal',
            'details' => 'Tapa blanda, 245 págs.',
            'price' => 34.99,
            'description' => 'La 1ª entrega de la saga Harry Potter, donde Harry decubrirá su magia y estudiará en la academia Hogwarts, donde vivirá numerosas aventuras.',
            'image_path' => 'piedra.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter y La Cámara de los secretos',
            'details' => 'Tapa gruesa, 567 págs.',
            'price' => 28.15,
            'description' => '2ª entrega de la saga Harry Potter, donde Harry y sus amigos deberán resolver el misterio que esconde una cámara oculta en Hogwarts.',
            'image_path' => 'camara.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter y El Prisionero de Azkaban',
            'details' => 'Tapa blanda, 100 págs.',
            'price' => 49.99,
            'description' => '3ª entrega de la saga Harry Potter, donde Harry y sus amigos tendrán que enfrentarse a enemigos oscuros y lidiar con el pasado de sus padres.',
            'image_path' => 'azka.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter y El Cáliz de Fuego',
            'details' => 'Tapa blanda, 150 págs.',
            'price' => 81.99,
            'description' => '4ª entrega de la saga Harry Potter, donde Harry deberá enfrentarse al Torneo de los Tres Magos.',
            'image_path' => 'caliz.jpg'
        ]);

        Product::create([
            'name' => 'El Camino de los Reyes',
            'details' => 'Tapa blanda, 276 págs.',
            'price' => 41.99,
            'description' => 'Diez ejércitos luchan por separado contra un solo enemigo. Mientras tanto, al otro lado del océano, la joven Shallan, investiga los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.',
            'image_path' => 'camino.jpg'
        ]);

        Product::create([
            'name' => 'Palabras Radiantes',
            'details' => 'Tapa gruesa 489 págs.',
            'price' => 144.99,
            'description' => 'Kaladin está al mando de los guardaespaldas reales, un puesto controvertido por su baja condición, y debe proteger al rey y a Dalinar, y al mismo tiempo, dominar los poderes vinculados a sus honorspren.',
            'image_path' => 'palabras.jpg'
        ]);

        Product::create([
            'name' => 'No Cosas',
            'details' => 'Tapa blanda, 250 págs.',
            'price' => 18.99,
            'description' => 'El nuevo ensayo de Byung-Chul Han gira en torno a las cosas y las no-cosas. Desarrolla tanto una filosofía del smartphone como una crítica a la inteligencia artificial desde una nueva perspectiva. Al mismo tiempo, recupera la magia de lo sólido y lo tangible y reflexiona sobre el silencio que se pierde en el ruido de la información.',
            'image_path' => 'nocosas.jpg'
        ]);

    }
}
