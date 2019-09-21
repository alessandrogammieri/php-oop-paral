<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <title>Parallelepipedi</title>
  </head>
  <body>
    <h1>Il tuo Parallelepipedo</h1>
    <p class="add">Calcola Area e Volume</p>
    <div class="container">
      <div class="box">
        <p>Figura 1</p>
        <div class="figura-one">
          <!-- Template -->
        </div>
      </div>
      <div class="box">
        <p>Figura 2</p>
        <div class="figura-two">
          <!-- Template -->
        </div>
      </div>
      <div class="box">
        <p>Figura 3</p>
        <div class="figura-three">
          <!-- Template -->
        </div>
      </div>
    </div>
    
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
      <div class="calc">
        <p>{{one}} x {{two}} x {{three}}</p>
        <p>Area: {{area}}</p>
        <p>Volume: {{volume}}</p>
      </div>
    </script>

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
