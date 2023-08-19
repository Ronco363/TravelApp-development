<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ciclismo</title>
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

<div class="container">
    <h1 style="color: #604d53">Percorsi Ciclismo</h1>
    <h2 style="color: #604d53">Veneto</h2>
    <div class="content">
        <div class="caption">
            <h3>Anello Fluviale Padova</h3>
            <ul>
                <li>Durata: 3h</li>
                <li>Distanza: 47km</li>
                <li>Altitudine: 80m</li>
            </ul>
        </div>
        <div class="image">
            <img src="images/anello_fluviale_padova.jpg">
        </div>
    </div>
    <br><br>
    <div class="content">
        <div class="caption">
            <h3>Da Venezia-Mestre a Mirano</h3>
            <ul>
                <li>Durata: 2h</li>
                <li>Distanza: 30km</li>
                <li>Altitudine: 50m</li>
            </ul>
        </div>
    <div class="image">
        <img src="images/mestre-mirano.jpg">
    </div>
    </div>
    <br><br>
    <div class="content">
        <div class="caption">
            <h3>Parco Regionale Colli Euganei</h3>
            <ul>
                <li>Durata: 4h</li>
                <li>Distanza: 67km</li>
                <li>Altitudine: 330m</li>
            </ul>
        </div>
    <div class="image">
        <img src="images/parco_colli_euganei.jpg">
    </div>
    </div>
    <br><br>
    <hr class="dashed">
    <h2 style="color: #604d53">Emilia-Romagna</h2>
    <div class="content">
        <div class="caption">
            <h3>Giro ad anello da Bologna a Minerbio</h3>
            <ul>
                <li>Durata: 3h</li>
                <li>Distanza: 47km</li>
                <li>Altitudine: 80m</li>
            </ul>
        </div>
    <div class="image">
        <img src="images/bologna-minerbio.jpg">
    </div>
    </div>
    <br><br>
    <div class="content">
        <div class="caption">
            <h3>Riserva Naturale delle Salse di Nirano</h3>
            <ul>
                <li>Durata: 3h</li>
                <li>Distanza: 40km</li>
                <li>Altitudine: 450m</li>
            </ul>
        </div>
    <div class="image">
        <img src="images/riserva_salse_nirano.jpg">
    </div>
    </div>
    <br><br>
    <div class="content">
        <div class="caption">
            <h3>Giro ad anello a Sassuolo</h3>
            <ul>
                <li>Durata: 3h</li>
                <li>Distanza: 40km</li>
                <li>Altitudine: 450m</li>
            </ul>
        </div>
    <div class="image">
        <img src="images/sassuolo.jpg">
    </div>
    </div>
    <br><br>
    <hr class="dashed">
    <h2 style="color: #201b1c">Trentino Alto-Adige</h2>
    <div class="content">
        <div class="caption">
            <h3>Tour dell'Alto Garda</h3>
            <ul>
                <li>Durata: 4h</li>
                <li>Distanza: 64km</li>
                <li>Altitudine: 970m</li>
          </ul>
        </div>
    <div class="image">
        <img src="images/tour alto garda.jpg">
    </div>
    </div>
    <br><br>
    <div class="content">
        <div class="caption">
            <h3>I laghi di Levico e Caldonazzo</h3>
            <ul>
                <li>Durata: 2h</li>
                <li>Distanza: 29km</li>
                <li>Altitudine: 310m</li>
          </ul>
        </div>
    <div class="image">
        <img src="images/tour levico caldonazzo.jpg">
    </div>
    </div>
    <br><br>
    <div class="content">
        <div class="caption">
            <h3>Trento e la Valle dell'Adige</h3>
            <ul>
                <li>Durata: 3h</li>
                <li>Distanza: 44km</li>
                <li>Altitudine: 360m</li>
          </ul>
        </div>
    <div class="image">
        <img src="images/tour trento - valle adige.jpg">
    </div>
    </div>
</div>
<p><button class="w3-button w3-indigo"><a href="/ciclismo">Torna all'inizio</a></button></p>
<p><button class="w3-button w3-indigo"><a href="/">Torna alla homepage</a></button></p>
</body>
</html>
