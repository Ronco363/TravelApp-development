<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trips = [
            [
                'nome' => 'Strada delle 52 gallerie',
                'tipologia' => 'Escursionismo',
                'durata' => 3,
                'distanza' => 15,
                'altitudine'=> 880,
                'guida' => 0,
                'immagine' => 'strada_52_gallerie.jpg'
            ],
            [
                'nome' => 'Sentiero del Monte Cecilia - Colli Euganei',
                'tipologia' => 'Escursionismo',
                'durata' => 2,
                'distanza' => 6,
                'altitudine'=> 180,
                'guida' => 0,
                'immagine' => 'sentiero_monte_cecilia.jpg'
            ],
            [
                'nome' => 'Tre Cime di Lavaredo',
                'tipologia' => 'Escursionismo',
                'durata' => 3,
                'distanza' => 10,
                'altitudine'=> 350,
                'guida' => 0,
                'immagine' => 'tre_cime_lavaredo.jpg'
            ],
            [
                'nome' => 'Valle Panaro',
                'tipologia' => 'Escursionismo',
                'durata' => 2,
                'distanza' => 7,
                'altitudine'=> 240,
                'guida' => 0,
                'immagine' => 'valle_panaro.jpg'
            ],
            [
                'nome' => 'Acquedotto romano - Itinerario da Sasso Marconi',
                'tipologia' => 'Escursionismo',
                'durata' => 4,
                'distanza' => 12,
                'altitudine'=> 440,
                'guida' => 0,
                'immagine' => 'acquedotto_romano.jpg'
            ],
            [
                'nome' => 'Parco dei Gessi Bolognesi',
                'tipologia' => 'Escursionismo',
                'durata' => 5,
                'distanza' => 18,
                'altitudine'=> 570,
                'guida' => 0,
                'immagine' => 'gessi_bolognesi.jpg'
            ],
            [
                'nome' => 'Merano',
                'tipologia' => 'Escursionismo',
                'durata' => 5,
                'distanza' => 17,
                'altitudine'=> 380,
                'guida' => 0,
                'immagine' => 'merano.jpg'
            ],
            [
                'nome' => 'Giro ad anello da Dorf Tirol',
                'tipologia' => 'Escursionismo',
                'durata' => 2,
                'distanza' => 6,
                'altitudine'=> 250,
                'guida' => 0,
                'immagine' => 'tirolo.jpg'
            ],
            [
                'nome' => 'Lago di Carezza',
                'tipologia' => 'Escursionismo',
                'durata' => 5,
                'distanza' => 15,
                'altitudine'=> 640,
                'guida' => 0,
                'immagine' => 'lago_di_carezza.jpg'
            ],
            [
                'nome' => 'Anello Fluviale Padova',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 47,
                'altitudine'=> 80,
                'guida' => 0,
                'immagine' => 'anello_fluviale_padova.jpg'
            ],
            [
                'nome' => 'Da Venezia-Mestre a Mirano',
                'tipologia' => 'Ciclismo',
                'durata' => 2,
                'distanza' => 30,
                'altitudine'=> 50,
                'guida' => 0,
                'immagine' => 'mestre-mirano.jpg'
            ],
            [
                'nome' => 'Parco Regionale Colli Euganei',
                'tipologia' => 'Ciclismo',
                'durata' => 4,
                'distanza' => 67,
                'altitudine'=> 330,
                'guida' => 0,
                'immagine' => 'parco_colli_euganei.jpg'
            ],
            [
                'nome' => 'Giro ad anello da Bologna a Minerbio',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 47,
                'altitudine'=> 80,
                'guida' => 0,
                'immagine' => 'bologna-minerbio.jpg'
            ],
            [ 
                'nome' => 'Riserva Naturale delle Salse di Nirano',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 40,
                'altitudine'=> 450,
                'guida' => 0,
                'immagine' => 'riserva_salse_nirano.jpg'
            ],
            [
                'nome' => 'Giro ad anello a Sassuolo',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 40,
                'altitudine'=> 450,
                'guida' => 0,
                'immagine' => 'sassuolo.jpg'
            ],
            [
                'nome' => 'Giro ad anello a Sassuolo',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 40,
                'altitudine'=> 450,
                'guida' => 0,
                'immagine' => 'sassuolo.jpg'
            ],
            [
                'nome' => 'Tour dell" Alto Garda',
                'tipologia' => 'Ciclismo',
                'durata' => 4,
                'distanza' => 64,
                'altitudine'=> 970,
                'guida' => 0,
                'immagine' => 'tour_alto_garda.jpg'
            ],
            [
                'nome' => 'Trento e la Valle dell"Adige',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 44,
                'altitudine'=> 360,
                'guida' => 0,
                'immagine' => 'tour trento - valle adige.jpg'
            ],
            [
                'nome' => 'Itinerario ad anello a Monselice',
                'tipologia' => 'Passeggiata',
                'durata' => 2,
                'distanza' => 17,
                'altitudine'=> 500,
                'guida' => 0,
                'immagine' => 'monselice.jpg'
            ],
            [
                'nome' => 'Itinerario a Treviso',
                'tipologia' => 'Passeggiata',
                'durata' => 2,
                'distanza' => 20,
                'altitudine'=> 60,
                'guida' => 0,
                'immagine' => 'treviso.jpg'
            ],
            [
                'nome' => 'Verona e la vista da Castel San Pietro',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 50,
                'guida' => 0,
                'immagine' => 'verona.jpg'
            ],
            [
                'nome' => 'Verona e la vista da Castel San Pietro',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 50,
                'guida' => 0,
                'immagine' => 'verona.jpg'
            ],
            [
                'nome' => 'Giardini Margherita - Bologna',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 50,
                'guida' => 0,
                'immagine' => 'giardini_margherita.jpg'
            ],
            [
                'nome' => 'Giardino di Porta Saragozza',
                'tipologia' => 'Passeggiata',
                'durata' => 2,
                'distanza' => 20,
                'altitudine'=> 330,
                'guida' => 0,
                'immagine' => 'itinerario_anello_saragozza.jpg'
            ],
            [
                'nome' => 'Tour a Modena',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 20,
                'guida' => 0,
                'immagine' => 'modena.jpg'
            ],
            [
                'nome' => 'Tour a Bolzano',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 9,
                'altitudine'=> 130,
                'guida' => 0,
                'immagine' => 'bolzano.jpg'
            ],
            [
                'nome' => 'Lago di Zoccolo',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 9,
                'altitudine'=> 180,
                'guida' => 0,
                'immagine' => 'lago_zoccolo.jpg'
            ],

            [
                'nome' => 'Strada delle 52 gallerie',
                'tipologia' => 'Escursionismo',
                'durata' => 3,
                'distanza' => 15,
                'altitudine'=> 880,
                'guida' => 1,
                'immagine' => 'strada_52_gallerie.jpg'
            ],
            [
                'nome' => 'Sentiero del Monte Cecilia - Colli Euganei',
                'tipologia' => 'Escursionismo',
                'durata' => 2,
                'distanza' => 6,
                'altitudine'=> 180,
                'guida' => 1,
                'immagine' => 'sentiero_monte_cecilia.jpg'
            ],
            [
                'nome' => 'Tre Cime di Lavaredo',
                'tipologia' => 'Escursionismo',
                'durata' => 3,
                'distanza' => 10,
                'altitudine'=> 350,
                'guida' => 1,
                'immagine' => 'tre_cime_lavaredo.jpg'
            ],
            [
                'nome' => 'Valle Panaro',
                'tipologia' => 'Escursionismo',
                'durata' => 2,
                'distanza' => 7,
                'altitudine'=> 240,
                'guida' => 1,
                'immagine' => 'valle_panaro.jpg'
            ],
            [
                'nome' => 'Acquedotto romano - Itinerario da Sasso Marconi',
                'tipologia' => 'Escursionismo',
                'durata' => 4,
                'distanza' => 12,
                'altitudine'=> 440,
                'guida' => 1,
                'immagine' => 'acquedotto_romano.jpg'
            ],
            [
                'nome' => 'Parco dei Gessi Bolognesi',
                'tipologia' => 'Escursionismo',
                'durata' => 5,
                'distanza' => 18,
                'altitudine'=> 570,
                'guida' => 1,
                'immagine' => 'gessi_bolognesi.jpg'
            ],
            [
                'nome' => 'Merano',
                'tipologia' => 'Escursionismo',
                'durata' => 5,
                'distanza' => 17,
                'altitudine'=> 380,
                'guida' => 1,
                'immagine' => 'merano.jpg'
            ],
            [
                'nome' => 'Giro ad anello da Dorf Tirol',
                'tipologia' => 'Escursionismo',
                'durata' => 2,
                'distanza' => 6,
                'altitudine'=> 250,
                'guida' => 1,
                'immagine' => 'tirolo.jpg'
            ],
            [
                'nome' => 'Lago di Carezza',
                'tipologia' => 'Escursionismo',
                'durata' => 5,
                'distanza' => 15,
                'altitudine'=> 640,
                'guida' => 1,
                'immagine' => 'lago_di_carezza.jpg'
            ],
            [
                'nome' => 'Anello Fluviale Padova',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 47,
                'altitudine'=> 80,
                'guida' => 1,
                'immagine' => 'anello_fluviale_padova.jpg'
            ],
            [
                'nome' => 'Da Venezia-Mestre a Mirano',
                'tipologia' => 'Ciclismo',
                'durata' => 2,
                'distanza' => 30,
                'altitudine'=> 50,
                'guida' => 1,
                'immagine' => 'mestre-mirano.jpg'
            ],
            [
                'nome' => 'Parco Regionale Colli Euganei',
                'tipologia' => 'Ciclismo',
                'durata' => 4,
                'distanza' => 67,
                'altitudine'=> 330,
                'guida' => 1,
                'immagine' => 'parco_colli_euganei.jpg'
            ],
            [
                'nome' => 'Giro ad anello da Bologna a Minerbio',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 47,
                'altitudine'=> 80,
                'guida' => 1,
                'immagine' => 'bologna-minerbio.jpg'
            ],
            [ 
                'nome' => 'Riserva Naturale delle Salse di Nirano',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 40,
                'altitudine'=> 450,
                'guida' => 1,
                'immagine' => 'riserva_salse_nirano.jpg'
            ],
            [
                'nome' => 'Giro ad anello a Sassuolo',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 40,
                'altitudine'=> 450,
                'guida' => 1,
                'immagine' => 'sassuolo.jpg'
            ],
            [
                'nome' => 'Giro ad anello a Sassuolo',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 40,
                'altitudine'=> 450,
                'guida' => 1,
                'immagine' => 'sassuolo.jpg'
            ],
            [
                'nome' => 'Tour dell" Alto Garda',
                'tipologia' => 'Ciclismo',
                'durata' => 4,
                'distanza' => 64,
                'altitudine'=> 970,
                'guida' => 1,
                'immagine' => 'tour_alto_garda.jpg'
            ],
            [
                'nome' => 'Trento e la Valle dell"Adige',
                'tipologia' => 'Ciclismo',
                'durata' => 3,
                'distanza' => 44,
                'altitudine'=> 360,
                'guida' => 1,
                'immagine' => 'tour trento - valle adige.jpg'
            ],
            [
                'nome' => 'Itinerario ad anello a Monselice',
                'tipologia' => 'Passeggiata',
                'durata' => 2,
                'distanza' => 17,
                'altitudine'=> 500,
                'guida' => 1,
                'immagine' => 'monselice.jpg'
            ],
            [
                'nome' => 'Itinerario a Treviso',
                'tipologia' => 'Passeggiata',
                'durata' => 2,
                'distanza' => 20,
                'altitudine'=> 60,
                'guida' => 1,
                'immagine' => 'treviso.jpg'
            ],
            [
                'nome' => 'Verona e la vista da Castel San Pietro',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 50,
                'guida' => 1,
                'immagine' => 'verona.jpg'
            ],
            [
                'nome' => 'Verona e la vista da Castel San Pietro',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 50,
                'guida' => 1,
                'immagine' => 'verona.jpg'
            ],
            [
                'nome' => 'Giardini Margherita - Bologna',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 50,
                'guida' => 1,
                'immagine' => 'giardini_margherita.jpg'
            ],
            [
                'nome' => 'Giardino di Porta Saragozza',
                'tipologia' => 'Passeggiata',
                'durata' => 2,
                'distanza' => 20,
                'altitudine'=> 330,
                'guida' => 1,
                'immagine' => 'itinerario_anello_saragozza.jpg'
            ],
            [
                'nome' => 'Tour a Modena',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 10,
                'altitudine'=> 20,
                'guida' => 1,
                'immagine' => 'modena.jpg'
            ],
            [
                'nome' => 'Tour a Bolzano',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 9,
                'altitudine'=> 130,
                'guida' => 1,
                'immagine' => 'bolzano.jpg'
            ],
            [
                'nome' => 'Lago di Zoccolo',
                'tipologia' => 'Passeggiata',
                'durata' => 1,
                'distanza' => 9,
                'altitudine'=> 180,
                'guida' => 1,
                'immagine' => 'lago_zoccolo.jpg'
            ]
        ];

        foreach ($trips as $trip){
            Trip::create($trip);
        }
    }
}