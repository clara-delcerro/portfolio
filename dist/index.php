<?php include('header.php') ?>

<div class="main">
  <div class="hero">
    <div class="hero__wrapper">
      <div class="hero__table">
        <div class="hero__cell">
          <div class="hero__content">
            <div class="hero__img">
              <img src="assets/img/hero-img.png" srcset="assets/img/hero-img@2x.png 2x,
                           assets/img/hero-img@3x.png 3x" alt="" class="hero__img__img">
            </div>
            <!--end of hero__img-->

            <h1 class="hero__title">Clara del Cerro López</h1>
            <h3 class="hero__subtitle">UX/UI / Maquetación / Front-end designer</h3>
          </div>
          <!--end of hero__content-->
        </div>
        <!--end of hero__cell-->
      </div>
      <!--end of hero__table-->
    </div>
    <!--end of wrapper-->

    <a href="#" class="hero__btn-scroll anim" data-scroll-to="aboutme"><i class="hero__btn-scroll__icon ion ion-android-arrow-down"></i></a>

    <div class="hero__bg">
      <div class="hero__bg__img" style="background-image: url(assets/img/hero-bg.png);"></div>
    </div>
    <!--end of hero__bg-->
  </div>

  <section class="section" id="aboutme">
    <div class="section__wrapper">
      <div class="aboutme">
        <div class="aboutme__col">
          <div class="aboutme__img">
            <img src="assets/img/aboutme-img.png" srcset="assets/img/aboutme-img@2x.png 2x,
                             assets/img/aboutme-img@3x.png 3x" alt="" class="aboutme__img__img">
          </div>
          <!--end of aboutme__img-->
        </div>
        <!--end of aboutme__col-->

        <div class="aboutme__col">
          <h2 class="aboutme__title title">Conóceme</h2>
          <h3 class="aboutme__subtitle subtitle">Resolutiva y creativa</h3>

          <p class="aboutme__text text">Soy una persona dispuesta a ayudar y a trabajar en equipo; si me preguntan o necesitan mi ayuda soy muy accesible y me encanta trabajar en común para llegar a una solución. Intento siempre hacer más fácil la convivencia en el trabajo.</p>

          <p class="text aboutme__text">Organizo todos mis proyectos de manera exhaustiva, agrupando de manera limpia en árboles de carpetas, tanto el código como los diseños.</p>

          <p class="aboutme__text text">Cuando un proyecto me apasiona, no puedo evitar implicarme al 100%.</p>
        </div>
      </div>
      <!--end of aboutme-->
    </div>
    <!--end of section__wrapper-->
  </section><!--end of section-->  

  <section class="section is-bg-grey" id="skills">
    <div class="section__wrapper">
      <div class="progress">
        <div class="progress__header">
          <h2 class="progress__title title">Mis habilidades</h2>
        </div>

        <div class="progress__row">
          <div class="progress-radial progress-85 setsize">
            <div class="overlay setsize">
              <p class="text">Maquetación</p>
            </div>
          </div>

          <div class="progress-radial progress-80 setsize">
            <div class="overlay setsize">
              <p class="text">UX/UI</p>
            </div>
          </div>

          <div class="progress-radial progress-85 setsize">
            <div class="overlay setsize">
              <p class="text">Creatividad</p>
            </div>
          </div>
        </div>
        <!--end of progress__row-->

        <div class="skills">
          <ul class="lines">
            <li class="line l--25">
            </li>
            <li class="line l--50">
            </li>
            <li class="line l--75">
            </li>
            <li class="line l--100">
            </li>
          </ul>

          <div class="charts">
            <div class="chart chart--dev">
              <ul class="chart--horiz">
                <li class="chart__bar" style="width: 98%;">
                  <span class="chart__label">
                    HTML5
                  </span>
                </li>
                <li class="chart__bar" style="width: 98%;">
                  <span class="chart__label">
                    CSS3 & SCSS 
                  </span>
                </li>
                <li class="chart__bar" style="width: 85%;">
                  <span class="chart__label">
                    Sketch
                  </span>
                </li>
                <li class="chart__bar" style="width: 65%;">
                  <span class="chart__label">
                    Jquery
                  </span>
                </li>
                <li class="chart__bar" style="width: 80%;">
                  <span class="chart__label">
                    Adobe Photoshop
                  </span>
                </li>
                <li class="chart__bar" style="width: 80%;">
                  <span class="chart__label">
                    Adobe Illustrator
                  </span>
                </li>
                <li class="chart__bar" style="width: 60%;">
                  <span class="chart__label">
                    Git / Gulp / NodeJS
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!--end of progress-->
    </div><!--end of section__wrapper-->
  </section><!--end of section-->

  <section class="section" id="portfolio">
    <div class="section__wrapper">
      <div class="project">
        <h3 class="title is-align-center">Mis proyectos</h3>

        <div class="project__row">
          <div class="project__col">
            <div class="card">
              <a href="https://www.graficaslongares.com/" class="card__figure" target="_blank">
                <img class="card__figure__img" src="assets/img/project-01.jpg" alt="Proyecto">
              </a><!--end of card__img-->
  
              <div class="card__content">
                <a href="https://www.graficaslongares.com/" class="card__title" target="_blank">Gráficas Longares</a>

                <p class="text card__text">Diseño y maquetación de la página web responsive para Gráficas Longares.</p>
  
                <p class="text"><small>Proyecto realizado para Solcom SL.</small></p>
  
                <a href="https://www.graficaslongares.com/" class="btn btn--bg" target="_blank">Ir a la web</a>
              </div><!--end of card__content-->
            </div>
          </div>
  
          <div class="project__col">
            <div class="card">
              <a href="https://webinars.dolor.com/" class="card__figure" target="_blank">
                <img class="card__figure__img" src="assets/img/project-02.jpg" alt="Proyecto">
              </a><!--end of card__img-->
  
              <div class="card__content">
                <a href="https://webinars.dolor.com/" class="card__title" target="_blank">Webinars Dolor.com</a>
  
                <p class="text card__text">Diseño y maquetación de la página web responsive para la página de webinars de dolor.com</p>
  
                <p class="text"><small>Proyecto realizado para Solcom SL.</small></p>
  
                <a href="https://webinars.dolor.com/" class="btn btn--bg" target="_blank">Ir a la web</a>
              </div><!--end of card__content-->
            </div>
          </div>
  
          <div class="project__col">
            <div class="card">
              <a href="#" class="card__figure" target="_blank">
                <img class="card__figure__img" src="assets/img/project-03.jpg" alt="Proyecto">
              </a><!--end of card__img-->
  
              <div class="card__content">
                <a href="https://www.gourmets.net/club-vinos-gourmets" class="card__title" target="_blank">Club de Vinos Gourmet</a>
  
                <p class="text card__text">Maquetación realizada para gourmets.net de la nueva página de su club de vinos.</p>
  
                <p class="text"><small>Proyecto realizado para Solcom SL.</small></p>
  
                <a href="https://www.gourmets.net/club-vinos-gourmets" class="btn btn--bg" target="_blank">Ir a la web</a>
              </div><!--end of card__content-->
            </div>
          </div>
  
          <div class="project__col">
            <div class="card">
              <a href="https://www.hyundai.es/guiaposventa/" class="card__figure" target="_blank">
                <img class="card__figure__img" src="assets/img/project-04.jpg" alt="Proyecto">
              </a><!--end of card__img-->
  
              <div class="card__content">
                <a href="https://www.hyundai.es/guiaposventa/" class="card__title" target="_blank">Guía posventa - Hyundai</a>
  
                <p class="text card__text">Maquetación realizada para Hyundai de la digitalización de su guía posventa</p>
  
                <p class="text"><small>Proyecto realizado para Solcom SL.</small></p>
  
                <a href="https://www.hyundai.es/guiaposventa/" class="btn btn--bg" target="_blank">Ir a la web</a>
              </div><!--end of card__content-->
            </div>
          </div>
        </div>
      </div><!--end of project-->
    </div><!--end of section__wrapper-->
  </section><!--end of section-->

  <section class="section is-bg-grey" id="contact">
    <div class="section__wrapper">
      <div class="contact">
        <div class="contact__content">
          <div class="contact__data">
            <h3 href="#" class="contact__title title title--small">¡Contáctame!</h3>
  
            <p class="contact__paragraph text">Puedes ponerte en contacto conmigo en este <a href="mailto:claradcl89@gmail.com" class="contact__link">e-mail</a> o bien...</p>
  
            <a href="tel:677644272" class="btn">¡Llámame!</a>
          </div>
        </div><!--end of contact__content-->
      </div>
    </div><!--end of section__wrapper-->
  </section><!--end of section-->
</div><!--end of main-->


<?php include('footer.php') ?>