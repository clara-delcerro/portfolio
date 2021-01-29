<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <title>Clara del Cerro López</title>

    <!--Favicons-->
    <link rel="shortcut icon" href="assets/icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Clara del Cerro López">
    <link rel="icon" sizes="192x192" href="assets/icons/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Clara del Cerro López">
    <link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/icons/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#">

    <!-- Manifest -->
    <link rel="manifest" href="./manifest.json">

    <link rel="stylesheet" href="css/main.min.css">
  </head>

  <body>
    <header class="header">

    </header><!--end of header-->

    <div class="main">
      <section class="section">
        <div class="section__wrapper">
          <h1 class="title">Título</h1>
          <h3 class="subtitle">Subtítulo</h3>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
          <a href="#" class="btn">Prueba</a>
          <a href="#" class="btn btn--bg">Prueba</a>
        </div>
      </section>

      <div class="form">
        <fieldset class="form__fieldset">
          <label class="form__label required">Nombre</label>
          <input class="form__input required" type="text">
        </fieldset><!--end of form__fieldset-->

        <fieldset class="form__fieldset">
          <label class="form__label">Población</label>
          <div class="form__select-container">
            <select class="form__select">
              <option>Población 1</option>
              <option>Población 2</option>
              <option>Población 3</option>
            </select>
          </div><!--end of select-->
        </fieldset><!--end of form__fieldset-->

        <fieldset class="form__fieldset">
          <label class="form__label">Texto</label>
          <textarea class="form__textarea"></textarea>
        </fieldset><!--end of form__fieldset-->

        <fieldset class="form__fieldset">
          <input type="radio" class="form__radio" id="radio2-2" name="radio2">
          <label for="radio2-2" class="form__label">Usar nueva dirección</label>
        </fieldset><!--end of form__fieldset-->

        <fieldset class="form__fieldset">
          <input type="radio" class="form__radio" id="radio1-1" name="radio1">
          <label for="radio1-1" class="form__label">Registrar una Cuenta Nueva</label>

          <input type="radio" class="form__radio" id="radio1-2" name="radio1">
          <label for="radio1-2" class="form__label">Comprar como invitado</label>
        </fieldset><!--end of form__fieldset-->

        <fieldset class="form__fieldset">
          <input class="form__checkbox" type="checkbox" id="checkNewsletter">
          <label class="form__label" for="checkNewsletter">Deseo suscribirme al boletín de Grupo Gourmets.</label>

          <input class="form__checkbox" type="checkbox" id="checkSameAddress">
          <label class="form__label" for="checkSameAddress">Mi dirección de entrega es la misma.</label>
        </fieldset><!--end of form__fieldset-->

        <fieldset class="form__fieldset">
          <input class="btn btn--block" type="submit" value="Enviar">
        </fieldset><!--end of form__fieldset-->
      </div><!--end of form-->
    </div><!--end of main-->

    <footer class="footer">

    </footer><!--end of footer-->

    <?php if (!isset($_COOKIE['aceptaWebCookie'])) {?>
      <div class="cookies">
        <p class="cookies__paragraph">Esta web utiliza cookies propias y de terceros para mejorar la experiencia de navegación, ofrecer contenidos personalizados y mejorar sus servicios. El hecho de continuar navegando en esta web implica la aceptación de la <a href="politica-privacidad.php" target="_blank">política de privacidad</a> y de las <a href="condiciones-uso.php" target="_blank">condiciones de uso</a>.</p>

        <a href="#" class="btn cookies__btn">Aceptar</a>
      </div><!--end of cookies-->
    <?php } ?>

    <script src="js/main.min.js"></script>
  </body>
</html>
