<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Escursionismo</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            body {
              font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;
              background: url(images/background.jpg);
              background-repeat: no-repeat;
              background-size: cover;
            }
        
            h1, h2, h3 {
                font-weight: bold;
            }
        
            .container {
              max-width: 960px;
              margin: 0 auto;
              padding: 20px;
            }
        
            .titolo {
                font-family: Arial, sans-serif;
            }
        
            .content {
              display: flex;
              flex-direction: row;
            }
        
            .caption {
              flex: 1;
              padding-right: 20px;
            }
        
            .image {
              flex: 1;
            }
        
            img {
              max-width: 90%;
              height: auto;
            }
        
            hr.dashed {
                border-top: 3px dashed #bbb;
              }
        </style>
    </head>

    <body>
        <div class="container">
            <h1 style="color: #604d53">Percorsi Escursionismo</h1>
            <h2 style="color: #604d53">Veneto</h2>
            <div class="content">
                <div class="caption">
                    <h3>Strada delle 52 gallerie</h3>
                    <ul>
                        <li>Durata: 3h</li>
                        <li>Distanza: 15km</li>
                        <li>Altitudine: 880m</li>
                    </ul>
                </div>
                <div class="image">
                    <img src="images/strada_52_gallerie.jpg">
                </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Sentiero del Monte Cecilia - Colli Euganei</h3>
                    <ul>
                        <li>Durata: 2h</li>
                        <li>Distanza: 6km</li>
                        <li>Altitudine: 180m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/sentiero_monte_cecilia.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Tre Cime di Lavaredo</h3>
                    <ul>
                        <li>Durata: 3h</li>
                        <li>Distanza: 10km</li>
                        <li>Altitudine: 350m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/tre_cime_lavaredo.jpg">
            </div>
            </div>
            <br><br>
            <hr class="dashed">
            <h2 style="color: #604d53">Emilia-Romagna</h2>
            <div class="content">
                <div class="caption">
                    <h3>Valle Panaro</h3>
                    <ul>
                        <li>Durata: 2h</li>
                        <li>Distanza: 7km</li>
                        <li>Altitudine: 240m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/valle_panaro.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Acquedotto romano - Itinerario da Sasso Marconi</h3>
                    <ul>
                        <li>Durata: 4h</li>
                        <li>Distanza: 12km</li>
                        <li>Altitudine: 440m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/acquedotto_romano.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Parco dei Gessi Bolognesi</h3>
                    <ul>
                        <li>Durata: 5h</li>
                        <li>Distanza: 18km</li>
                        <li>Altitudine: 570m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/gessi_bolognesi.jpg">
            </div>
            </div>
            <br><br>
            <hr class="dashed">
            <h2 style="color: #201b1c">Trentino Alto-Adige</h2>
            <div class="content">
                <div class="caption">
                    <h3>Merano</h3>
                    <ul>
                        <li>Durata: 5h</li>
                        <li>Distanza: 17km</li>
                        <li>Altitudine: 380m</li>
                  </ul>
                </div>
            <div class="image">
                <img src="images/merano.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Giro ad anello da Dorf Tirol</h3>
                    <ul>
                        <li>Durata: 2h</li>
                        <li>Distanza: 6km</li>
                        <li>Altitudine: 250m</li>
                  </ul>
                </div>
            <div class="image">
                <img src="images/tirolo.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Lago di Carezza</h3>
                    <ul>
                        <li>Durata: 5h</li>
                        <li>Distanza: 15km</li>
                        <li>Altitudine: 640m</li>
                  </ul>
                </div>
            <div class="image">
                <img src="images/lago_di_carezza.jpg">
            </div>
            </div>
        </div>
        
        <p><button class="w3-button w3-indigo"><a href="/escursionismo">Torna all'inizio</a></button></p>
        <p><button class="w3-button w3-indigo"><a href="/">Torna alla homepage</a></button></p>
    </body>
        
</html>
