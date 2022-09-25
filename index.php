 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIXICON ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>IRON FITNESS</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/index.php" class="nav__logo">
                    <img src="assets/img/logo-nav.png" alt="logo"> IRON FITNESS
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                          <a href="/index.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="/aboutus.php" class="nav__link">About Us</a>
                          </li>
                          <li class="nav__item">
                            <a href="/contactus.php" class="nav__link">Contact Us</a>
                          </li>
                          


                          <div class="nav__link" >
                            <a href="/index.php" class="button nav__button">
                              Register Now
                            </a>
                          </div>
                    </ul>
                    <!--Close button-->
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
            
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
              <div class="home__container container grid">
                <div class="home__data">
                  <h2 class="home__subtitle">MAKE YOUR</h2>
                  <h1 class="home__title">BODY SHAPE</h1>
                  <p class="home__description">
                    In here we will help you to shape and build your ideal
                    body and live your life to the fullest.
                  </p>
                  <a href="/responsive-gym-website-main/aboutus.php" class="gs__btn">
                    Get Started 
                  </a>
                </div>

                <div class="home__images">
                  <img src="assets/img/home-img.png" alt="home image" class="home__img">

                  <div class="home__triangle home__triangle-3"></div>
                  <div class="home__triangle home__triangle-2"></div>
                  <div class="home__triangle home__triangle-1"></div>
                </div>
              </div>
            </section>

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container  container grid">
                  <img src="assets/img/logo1.png" alt="logo image" class="logos__img">
                  <img src="assets/img/logo2.png" alt="logo image" class="logos__img">
                  <img src="assets/img/logo3.png" alt="logo image" class="logos__img">
                  <img src="assets/img/logo4.png" alt="logo image" class="logos__img">
                </div>
            </section>

            <!--==================== PROGRAM ====================-->
            <section class="program section" id="program">
                <div class="container">
                  <div class="setion__data">
                    <h2 class="section__subtitle2">Our Program</h2>
                    <div class="section__titles">
                      <h1 class="section__title-border">BUILD YOUR</h1>
                      <h1 class="section__title">BEST BODY</h1>
                    </div>
                  </div>

                  <div class="program__container grid">
                    <article class="program__card">
                      <div class="program__shape">
                        <img src="assets/img/program1.png" alt="program image" class="program__img">
                      </div>

                      <h3 class="program__title">Flex Muscle</h3>

                      <p class="program__description">
                        Creating tension that's temporarily making the muscle
                        fibers smaller or contracted.
                      </p>

                      
                    </article>

                    <article class="program__card">
                      <div class="program__shape">
                        <img src="assets/img/program2.png" alt="program image" class="program__img">
                      </div>

                      <h3 class="program__title">Cardio Exercise</h3>

                      <p class="program__description">
                        Exercise your heart rate up and keeps it
                        up for a prolonged period of time.
                      </p>
                      
                      
                    </article>

                    <article class="program__card">
                      <div class="program__shape">
                        <img src="assets/img/program3.png" alt="program image" class="program__img">
                      </div>

                      <h3 class="program__title">Basic Yoga</h3>

                      <p class="program__description">
                        Diaphragmatic this is the most common breathing 
                        technique you will find in yoga.
                      </p>

                      
                    </article>

                    <article class="program__card">
                      <div class="program__shape">
                        <img src="assets/img/program4.png" alt="program image" class="program__img">
                      </div>

                      <h3 class="program__title">Weight Lifting</h3>

                      <p class="program__description">
                        Attempts a maximum weight single lift of a
                        barbell loaded with weight plates.
                      </p>

                      
                    </article>
                  </div>
                </div>
            </section>

            

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
          <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== EMAIL JS ===============-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>