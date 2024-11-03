<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movies;

class MoviesSeeder extends Seeder
{
    /*
     Se crean 10 registros de peliculas
     */
    public function run(): void
    {
        Movies::create([
            'title' => 'Ghost Rider',
            'synopsis' => 'Vendió su alma para salvar a un ser querido, ahora el temerario Johnny sufre las
            consecuencias: volverse una calavera en llamas y trabajar para Mefistófeles',
            'year' => 2007,
            'cover' => 'https://www.mubis.es/media/covers/2564/5737/ghost-rider-el-motorista-fantasma-portada-l_cover.jpg'
        ]);

        Movies::create([
            'title' => 'El Pico de Dante',
            'synopsis' => 'Cuando un volcán inactivo muestra signos de actividad,
            un científico corre contra reloj para salvar a los residentes de un pintoresco pueblo',
            'year' => 1997,
            'cover' => 'https://static.wikia.nocookie.net/doblaje/images/f/f3/ElPicodeDante.png/revision/latest?cb=20140922092331&path-prefix=es'
        ]);

        Movies::create([
            'title' => 'Indiana Jones',
            'synopsis' => 'Cuando el gobierno lo contrata para localizar la legendaria
            arca de la alianza, Indiana Jones se enfrenta al más temible enemigo: todo
            el régimen nazi',
            'year' => 1981,
            'cover' => 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2022/12/indiana-jones-dial-destino-2891248.jpg?tf=3840x'
        ]);

        Movies::create([
            'title' => 'Volver al Futuro',
            'synopsis' => 'El adolescente Marty McFly es amigo de Doc, un científico que ha construido una máquina del tiempo. Cuando los dos prueban el artefacto, un error fortuito hace que Marty llegue a 1955, año en el que sus padres iban al instituto y todavía no se habían conocido. Después de impedir su primer encuentro, Marty deberá conseguir que se conozcan y se enamoren, de lo contrario su existencia no sería posible.',
            'year' => 1985,
            'cover' => 'https://pics.filmaffinity.com/Regreso_al_futuro-139415628-large.jpg'
        ]);

        Movies::create([
            'title' => 'Cody Banks',
            'synopsis' => 'De cara a su familia y amigos, Cody Banks es el típico adolescente. Le encanta montar en monopatín y se siente como un estúpido delante de las chicas. Sin embargo, Cody guarda un gran secreto y es que, en realidad, es un agente de la CIA. Su misión es espiar a su compañera Natalie Connors para conseguir información sobre su padre, un científico que ha inventado unos nanorobots capaces de destruir el país.',
            'year' => 2003,
            'cover' => 'https://pics.filmaffinity.com/Superagente_Cody_Banks-722865134-large.jpg'
        ]);

        Movies::create([
            'title' => 'Tornado',
            'synopsis' => 'Dos grupos de científicos persiguen a las tormentas para estudiar los comportamientos de los tornados. Ambos compiten por ser los primeros en analizar estos fenómenos meteorológicos desde dentro de un tornado.',
            'year' => 1996,
            'cover' => 'https://pics.filmaffinity.com/Twister-707246974-large.jpg'
        ]);

        Movies::create([
            'title' => 'La Tormenta Perfecta',
            'synopsis' => 'Tyne y su tripulación salen a alta mar esperando poder recuperarse de la mala racha que están teniendo. Para ello, y a pesar de los partes meteorológicos, el capitán convence a sus hombres para adentrarse más en el Atlántico.',
            'year' => 2000,
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStM3Kd4h8Bh0yVl25sqE1Ln3C7Rrx5wC0pqw&s'
        ]);

        Movies::create([
            'title' => 'Los Juegos del Hambre',
            'synopsis' => 'Para demostrar su poder, el régimen del estado totalitario de Panem organiza cada año "Los juegos del hambre". En ellos, 24 jóvenes compiten el uno contra el otro en una batalla en la que solo puede haber un superviviente. La joven Katniss se ofrece voluntaria para participar en los juegos para salvar a su hermana. Junto a ella participará Peeta, un joven al que ha conocido desde la infancia y que está enamorado de ella. Sin embargo, el Capitolio quiere convertirlos en contrincantes.',
            'year' => 2012,
            'cover' => 'https://pics.filmaffinity.com/Los_juegos_del_hambre-634460284-large.jpg'
        ]);

        Movies::create([
            'title' => 'El Señor de los Anillos',
            'synopsis' => 'En la Tierra Media, el Señor Oscuro Sauron forjó los Grandes Anillos del Poder y creó uno con el poder de esclavizar a toda la Tierra Media. Frodo Bolsón es un hobbit al que su tío Bilbo hace portador del poderoso Anillo Único con la misión de destruirlo. Acompañado de sus amigos, Frodo emprende un viaje hacia Mordor, el único lugar donde el anillo puede ser destruido. Sin embargo, Sauron ordena la persecución del grupo para recuperar el anillo y acabar con la Tierra Media.',
            'year' => 2001,
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVKgKemtNYpNTqlCMkl3DgptGwhulkT8U1Jg&s'
        ]);

        Movies::create([
            'title' => 'Avatar',
            'synopsis' => 'Entramos en el mundo Avatar de la mano de Jake Sully, un ex-Marine en silla de ruedas, que ha sido reclutado para viajar a Pandora, donde existe un mineral raro y muy preciado que puede solucionar la crisis energética existente en la Tierra.',
            'year' => 2009,
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH92fwdvPZx6H-g8bx305-Q3qFaH5XoqxYCQ&s'
        ]);
    }
}
