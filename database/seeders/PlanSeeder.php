<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder # php artisan db:seed --class=PlanSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [ 
            [
                'nome' => 'Strada delle 52 gallerie', 
                'tipologia' => 'Escursionismo',
                'immagine' => 'strada_52_gallerie.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante percorso escursionistico sulla Strada delle 52 Gallerie (Veneto),
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici del Veneto",
                il prezzo è a persona.'
                ,
                'durata' => 3, #ore
                'distanza' => 15, #km
                'altitudine' => 880, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Sentiero del Monte Cecilia - Colli Euganei', 
                'tipologia' => 'Escursionismo',
                'immagine' => 'sentiero_monte_cecilia.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante percorso 
                escursionistico nei Colli Euganei, 
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici del Veneto", 
                il prezzo a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 6, #km
                'altitudine' => 180, #metri
                'guida' => 0,
                
            ],
            [
                'nome' => 'Tre Cime di Lavaredo', 
                'tipologia' => 'Escursionismo',
                'immagine' => 'tre_cime_lavaredo.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante percorso escursionistico 
                alle Tre Cime di Lavaredo,
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici del Veneto", 
                il prezzo a persona.'
                ,
                'durata' => 3, #ore
                'distanza' => 10, #km
                'altitudine' => 350, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Valle Panaro', 
                'tipologia' => 'Escursionismo',
                'immagine' => 'valle_panaro.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante percorso escursionismo per la Valle del Panaro (Emilia-Romagna),
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici dell"Emilia-Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 7, #km
                'altitudine' => 240, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Acquedotto Romano',
                'tipologia' => 'Escursionismo',
                'immagine' => 'acquedotto_romano.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante itinerario escursionistico 
                alla scoperta dell"acquedotto romano di Sasso Marconi (Emilia Romagna),
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici dell"Emilia Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 4, #ore
                'distanza' => 12, #km
                'altitudine' => 440, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Parco dei Gessi Bolognesi',
                'tipologia' => 'Escursionismo',
                'immagine' => 'gessi_bolognesi.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante itinerario escursionistico all"interno
                del parco dei Gessi Bolognesi (Emilia Romagna),
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici dell"Emilia Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 7, #km
                'altitudine' => 240, #metri
                'guida' => 0,
            ], 
            [
                'nome' => 'Merano',
                'tipologia' => 'Escursionismo',
                'immagine' => 'merano.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante itinerario escursionistico nella città di
                Merano (Trentino-Alto Adige),
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 5, #ore
                'distanza' => 17, #km
                'altitudine' => 380, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Giro da Dorf Tirol',
                'tipologia' => 'Escursionismo',
                'immagine' => 'tirolo.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante itinerario escursionistico ad anello
                da Dorf Tirol (Trentino-Alto Adige),
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 6, #km
                'altitudine' => 250, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Lago di Carezza',
                'tipologia' => 'Escursionismo',
                'immagine' => 'lago_di_carezza.jpg',
                'prezzo' => '80', # a persona 
                'descrizione' => 
                'Affascinante itinerario escursionistico lunog il
                lago di Carezza (Trentino-Alto Adige),
                possibilità di essere seguiti da una guida del gruppo 
                escursionistico "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 5, #ore
                'distanza' => 15, #km
                'altitudine' => 640, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Anello Fluviale Padova',
                'tipologia' => 'Ciclismo',
                'immagine' => 'anello_fluviale_padova.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico lungo l" 
                anello fluviale di Padova (Veneto)
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici del Veneto",
                il prezzo è a persona.'
                ,
                'durata' => 3, #ore
                'distanza' => 47, #km
                'altitudine' => 80, #metri
                'guida' => 0,
            ],
            [
                'nome' => 'Da Venezia-Mestre a Mirano in bici',
                'tipologia' => 'Ciclismo',
                'immagine' => 'mestre-mirano.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico per 
                Venezia-Mestre a Mirano (Veneto)
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici del Veneto",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 30, #km
                'altitudine' => 50, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Parco Regionale Colli Euganei',
                'tipologia' => 'Ciclismo',
                'immagine' => 'parco_colli_euganei.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico 
                all"interno del parco regionale dei Colli Eugenei (Veneto),
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici del Veneto",
                il prezzo è a persona.'
                ,
                'durata' => 4, #ore
                'distanza' => 67, #km
                'altitudine' => 330, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Riserva Naturale delle Salse di Nirano',
                'tipologia' => 'Ciclismo',
                'immagine' => 'riserva_salse_nirano.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico 
                all"interno della riserva naturale delle Salse di Nirano (Emilia-Romagna),
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici dell" Emilia-Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 3, #ore
                'distanza' => 40, #km
                'altitudine' => 450, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Giro ad anello da Bologna a Minerbio',
                'tipologia' => 'Ciclismo',
                'immagine' => 'bologna-minerbio.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico ad anello
                da Bologna a Minerbio (Emilia-Romagna),
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici dell" Emilia-Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 3, #ore
                'distanza' => 47, #km
                'altitudine' => 80, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Giro ad anello a Sassuolo',
                'tipologia' => 'Ciclismo',
                'immagine' => 'sassuolo.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico ad anello per la città di
                Sassuolo (Emilia Romagna),
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici dell" Emilia-Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 3, #ore
                'distanza' => 40, #km
                'altitudine' => 450, #metr
                'guida' => 0,
            ],

            [
                'nome' => 'Tour del" Alto Garda',
                'tipologia' => 'Ciclismo',
                'immagine' => 'tour alto garda.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico nella zona
                del lago di Garda (Trentino-Alto Adige),
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 4, #ore
                'distanza' => 64, #km
                'altitudine' => 970, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'I laghi di Levico e Caldonazzo',
                'tipologia' => 'Ciclismo',
                'immagine' => 'tour levico caldonazzo.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico attorno ai laghi
                di Levico e Caldonazzo (Trentino-Alto Adige),
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 29, #km
                'altitudine' => 310, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Trento e la Valle dell"Adige',
                'tipologia' => 'Ciclismo',
                'immagine' => 'tour trento - valle adige.jpg',
                'prezzo' => '90', # a persona 
                'descrizione' => 
                'Affascinante itinerario ciclistico nella città
                di Trento e nella Valle dell"Adige (Trentino-Alto Adige),
                possibilità di noleggio e di essere seguiti da 
                una guida del gruppo ciclismo "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 3, #ore
                'distanza' => 44, #km
                'altitudine' => 360, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Itinerario ad anello a Monselice',
                'tipologia' => 'Passeggiata',
                'immagine' => 'monselice.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante percorso per passeggiate 
                nella città di Monselice (Veneto),
                possibilità di essere seguiti da 
                una guida del gruppo passeggiata
                "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 17, #km
                'altitudine' => 500, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Itinerario a Treviso',
                'tipologia' => 'Passeggiata',
                'immagine' => 'treviso.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate nella  
                città di Treviso (Veneto)
                possibilità di essere seguiti da 
                una guida del gruppo passeggiata
                "Amici del Veneto",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 20, #km
                'altitudine' => 60, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Verona e la visita da Castel San Pietro',
                'tipologia' => 'Passeggiata',
                'immagine' => 'verona.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate 
                nella città di Verona e compresa visita al Castel San Pietro (Veneto)
                possibilità di essere seguiti da una guida del gruppo 
                passeggiata "Amici del Veneto",
                il prezzo è a persona.'
                ,
                'durata' => 1, #ore
                'distanza' => 10, #km
                'altitudine' => 50, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Giardini Margherita - Bologna',
                'tipologia' => 'Passeggiata',
                'immagine' => 'giardini_margherita.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate attraverso
                i Giardini Margherita di Bologna (Emilia-Romagna),
                possibilità di essere seguiti da una guida del gruppo 
                passeggiata "Amici dell"Emilia-Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 1, #ore
                'distanza' => 10, #km
                'altitudine' => 50, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Giardino di Porta Saragozza',
                'tipologia' => 'Passeggiata',
                'immagine' => 'itinerario_anello_saragozza.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate attraverso
                il giardino di Porta Saragozza di Bologna (Emilia-Romagna),
                possibilità di essere seguiti da una guida del gruppo 
                passeggiata "Amici dell"Emilia-Romagna",
                il prezzo è a persona.
                '
                ,
                'durata' => 1, #ore
                'distanza' => 10, #km
                'altitudine' => 310, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Tour a Modena',
                'tipologia' => 'Passeggiata',
                'immagine' => 'modena.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate 
                attraverso la città di Modena (Emilia-Romagna),
                possibilità di essere seguiti da una guida del gruppo 
                passeggiata "Amici dell"Emilia-Romagna",
                il prezzo è a persona.'
                ,
                'durata' => 2, #ore
                'distanza' => 29, #km
                'altitudine' => 310, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Tour Bolzano',
                'tipologia' => 'Passeggiata',
                'immagine' => 'bolzano.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate 
                attraverso la città di Bolzano (Trentino-Alto Adige),
                possibilità di essere seguiti da una guida del gruppo 
                passeggiata "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 1, #ore
                'distanza' => 9, #km
                'altitudine' => 130, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Lago di Levico',
                'tipologia' => 'Passeggiata',
                'immagine' => 'lago_levico.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate 
                attraverso il lago di Levico (Trentino-Alto Adige),
                possibilità di essere seguiti da una guida del gruppo 
                passeggiata "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 1, #ore
                'distanza' => 9, #km
                'altitudine' => 130, #metr
                'guida' => 0,
            ],
            [
                'nome' => 'Lago di Zoccolo',
                'tipologia' => 'Passeggiata',
                'immagine' => 'lago_zoccolo.jpg',
                'prezzo' => '70', # a persona 
                'descrizione' => 
                'Affascinante itinerario per passeggiate 
                attraverso il lago di Zoccolo (Trentino-Alto Adige),
                possibilità di essere seguiti da una guida del gruppo 
                passeggiata "Amici del Trentino",
                il prezzo è a persona.'
                ,
                'durata' => 1, #ore
                'distanza' => 9, #km
                'altitudine' => 180, #metr
                'guida' => 0,
            ]

        ];
        
        foreach ($plans as $plan){
            Plan::create($plan);
        }
         
    }
}
