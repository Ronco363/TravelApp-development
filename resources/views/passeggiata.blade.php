<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Passeggiata</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        
            .container {
              max-width: 960px;
              margin: 0 auto;
              padding: 20px;
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
            <h1 style="color: #604d53">Percorsi Passeggiata</h1>
            <h2 style="color: #604d53">Veneto</h2>
            <div class="content">
                <div class="caption">
                    <h3>Itinerario ad anello a Monselice</h3>
                    <ul>
                        <li>Durata: 2h</li>
                        <li>Distanza: 17km</li>
                        <li>Altitudine: 500m</li>
                    </ul>
                </div>
                <div class="image">
                    <img src="images/monselice.jpg">
                </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Itinerario a Treviso</h3>
                    <ul>
                        <li>Durata: 2h</li>
                        <li>Distanza: 20km</li>
                        <li>Altitudine: 60m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/treviso.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Verona e la vista da Castel San Pietro</h3>
                    <ul>
                        <li>Durata: 1h</li>
                        <li>Distanza: 10km</li>
                        <li>Altitudine: 50m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/verona.jpg">
            </div>
            </div>
            <br><br>
            <hr class="dashed">
            <h2 style="color: #604d53">Emilia-Romagna</h2>
            <div class="content">
                <div class="caption">
                    <h3>Giardini Margherita - Bologna</h3>
                    <ul>
                        <li>Durata: 1h</li>
                        <li>Distanza: 10km</li>
                        <li>Altitudine: 50m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/giardini_margherita.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Giardino di Porta Saragozza</h3>
                    <ul>
                        <li>Durata: 2h</li>
                        <li>Distanza: 20km</li>
                        <li>Altitudine: 330m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/itinerario_anello_saragozza.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Modena</h3>
                    <ul>
                        <li>Durata: 1h</li>
                        <li>Distanza: 10km</li>
                        <li>Altitudine: 20m</li>
                    </ul>
                </div>
            <div class="image">
                <img src="images/modena.jpg">
            </div>
            </div>
            <br><br>
            <hr class="dashed">
            <h2 style="color: #201b1c">Trentino Alto-Adige</h2>
            <div class="content">
                <div class="caption">
                    <h3>Bolzano</h3>
                    <ul>
                        <li>Durata: 1h</li>
                        <li>Distanza: 9km</li>
                        <li>Altitudine: 130m</li>
                  </ul>
                </div>
            <div class="image">
                <img src="images/bolzano.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Giro ad anello - Lago di Levico</h3>
                    <ul>
                        <li>Durata: 1h</li>
                        <li>Distanza: 9km</li>
                        <li>Altitudine: 90m</li>
                  </ul>
                </div>
            <div class="image">
                <img src="images/lago_levico.jpg">
            </div>
            </div>
            <br><br>
            <div class="content">
                <div class="caption">
                    <h3>Lago di Zoccolo</h3>
                    <ul>
                        <li>Durata: 1h</li>
                        <li>Distanza: 9km</li>
                        <li>Altitudine: 180m</li>
                  </ul>
                </div>
            <div class="image">
                <img src="images/lago_zoccolo.jpg">
            </div>
            </div>
        </div>
        <p><button class="w3-button w3-indigo"><a href="/passeggiata">Torna all'inizio</a></button></p>
        <p><button class="w3-button w3-indigo"><a href="/">Torna alla homepage</a></button></p>
    </body>
</html>
