<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="./src/css/intlTelInput.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

  <link crossorigin="anonymous" rel="stylesheet" id="font-awesome-official-css" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css" media="all" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk">
  <link crossorigin="anonymous" rel="stylesheet" id="font-awesome-official-v4shim-css" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css" type="text/css" media="all" integrity="sha384-C2B+KlPW+WkR0Ld9loR1x3cXp7asA0iGVodhCoJ4hwrWm/d9qKS59BGisq+2Y0/D">

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./src/css/main.css" />

  <title>Apartamentos de alto padrão em Osasco | Ekko Group</title>
  <meta name="description" content="Apartamentos de 2 a 4 suítes de alto padrão em uma localização privilegiada e estratégica de Osasco - São Paulo" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="https://imovel.ekkogroup.com.br/osasco/" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Apartamentos de alto padrão em Osasco | Ekko Group" />
  <meta property="og:description" content="Apartamentos de 2 a 4 suítes de alto padrão em uma localização privilegiada e estratégica de Osasco - São Paulo." />
  <meta property="og:url" content="https://imovel.ekkogroup.com.br/osasco/" />
  <meta property="og:site_name" content="Apartamentos de alto padrão em Osasco | Ekko Group" />

  <!-- icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="./src/img/favicon.ico" />
  <link rel="icon" type="image/png" sizes="32x32" href="./src/img/favicon.ico" />
  <link rel="icon" type="image/png" sizes="16x16" href="./src/img/favicon.ico" />

  <link rel="shortcut icon" href="./src/img/favicon.ico" />

  <style>
    .iti{
      width: 100%;
    }
  </style>
  <!-- Style -->
  <!--      <link rel="stylesheet" href="./assets/dist/css/template-globals.css">-->

  <!-- Jquery -->

  <script src="./assets/dist/js/libary/jquery/jquery-3.6.0.min.js"></script>

  <!-- INTEGRAÇÃO HEADER -->
  <?php require_once 'integracao/integracaoHead.php'; ?>
</head>

<body style="background-color:lightgray">
  <section class="banner mb-5">
    <img src="./src/img/banner.webp" style="width:100%;height:60vh;object-fit:cover" alt="">
    <div class="banner__content container">
      <div class="d-flex justify-content-lg-between justify-content-center">
        <img src="./src/img/logo.svg" alt="Logo da Ekko Group" title="Logo da Ekko Group" />
      </div>
      <div class="d-flex flex-column justify-content-center text-center text-lg-left h-75">
        <h2 class="banner__content-title">
          Apartamentos de alto padrão com estilo e qualidade de vida
        </h2>
        <span class="banner__content-subtitle">Nas melhores localizações de Osasco</span>
      </div>
    </div>
    <img class="banner__border" src="./src/img/Borda_banner.png" alt="Borda do Banner" title="Borda do Banner" />
    <a onclick="scrollToContent()" class="banner__arrow"><i class='fas fa-angle-down' style="position:relative;top:20px;color:#00B955;font-size:48px"></i></a>
  </section>
  <section class="container pt-5 business" id="content">
    <div class="business-card">
      <div class="row">
        <div class="col-md-7 col-12">
          <div class="business-card__content">
            <img class="logo_container" src="./src/img/logo/Color_Blend.png" title="Logo do Blend" alt="Logo do Blend" />
            <p class="business-card__content__text-variant-1 mt-3">
              Localização privilegiada no Bairro do Bela Vista
            </p>
            <div class="d-flex align-items-center flex-md-row flex-column px-3 px-md-0 custom-border">

              <div class="d-flex align-items-center">
                <span class="business-card__content__text-variant-2 ml-3">Apartamentos de</span>
                <span class="business-card__content__text-variant-3 ml-2 mr-3">61m<sup>2</sup>-83m<sup>2</sup></span>
                <!--<span class="business-card__content__text-variant-2"
                      >churrasqueira <br>na varanda</span
                    >-->
              </div>
            </div>
            <br>
            <p class="mt-2">
              <i class='fas fa-map-marker-alt'></i> Rua Antônia Bizarro, 385
            </p>
            <div class="d-flex justify-content-between w-100 mt-3 display-desktop">
              <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/blend/" target="_blank">
                Veja o book
              </a>
              <a class="business-card__content__button" onclick="scrollToForm('blend')">
                saiba mais
              </a>
              <a class="business-card__content__button diferenciais-link" data-state="false">
                diferenciais
              </a>
            </div>
            <div class="display-mobile" style='width:110%'>
              <div class='d-flex justify-content-between'>
                <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/blend/" target="_blank">
                  Veja o book
                </a>
                &nbsp;
                <a class="business-card__content__button" onclick="scrollToForm('blend')">
                  saiba mais
                </a>
              </div>
              <br>
              <div class='d-flex justify-content-center align-items-start'>
                <a class="business-card__content__button diferenciais-link" data-state="false">
                  diferenciais
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="business-card__image">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a data-fslightbox="blend" href="./src/img/Blend/Fachada-blend.webp">
                    <img src="./src/img/Blend/Fachada-blend.webp" title="Fachada do Blend" alt="Fachada do Blend" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="blend" href="./src/img/Blend/Living-blend.jpg">
                    <img src="./src/img/Blend/Living-blend.webp" title="Living do Blend" alt="Living do Blend" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="blend" href="./src/img/Blend/Piscina-blend.jpg">
                    <img src="./src/img/Blend/Piscina-blend.webp" title="Piscina do Blend" alt="Piscina do Blend" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="blend" href="./src/img/Blend/Vip-Space-blend.jpg">
                    <img src="./src/img/Blend/Vip-Space-blend.webp" title="Espaço VIP do Blend" alt="Espaço VIP do Blend" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="blend" href="./src/img/Blend/Sky-Lounge-blend.jpg">
                    <img src="./src/img/Blend/Sky-Lounge-blend.webp" title="Sky Lounge do Blend" alt="Sky Lounge do Blend" />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#00B955"></div>
              <div class="swiper-button-next" style="color:#00B955"></div>
            </div>
            <div class="expand">
              <img src="./src/img/expand.png" title="Ícone de expandir" alt="Ícone de expandir" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="diferenciais">
      <ul class='row'>
        <div class='col-4'>
          <li>VIP SPACE</li>
          <li>BEACH TENNIS</li>
          <li>CONVIVÊNCIA</li>
          <li>FIRE PIT</li>
        </div>
        <div class='col-4'>
          <li>PLAYGROUND</li>
          <li>SPORT BAR</li>
          <li>SALÃO DE FESTAS</li>
          <li>SALA DE GAMES</li>
        </div>
        <div class='col-4'>
          <li>BRINQUEDOTECA</li>
          <li>PET SPACE</li>
          <li>PISCINA EXTERNA</li>
          <li>PISCINA INFANTIL</li>
        </div>
      </ul>
    </div>
    <div class="business-card">
      <div class="row">
        <div class="col-md-5 col-12 order-sm-2 order-md-1">
          <div class="business-card__image">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a data-fslightbox="aurum" href="./src/img/Aurum/Fachada-aurum-ekko.jpg">
                    <img src="./src/img/Aurum/Fachada-aurum-ekko.webp" title="fachada do Aurum" alt="fachada do Aurum" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="aurum" href="./src/img/Aurum/Living-min.png">
                    <img src="./src/img/Aurum/Living-min.webp" title="living do aurum" alt="living do aurum" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="aurum" href="./src/img/Aurum/Piscina-aurum-ekko.png">
                    <img src="./src/img/Aurum/Piscina-aurum-ekko.webp" title="piscina do aurum" alt="piscina do aurum" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="aurum" href="./src/img/Aurum/Varanda-Cobertura-Duplex-arum-ekko.png">
                    <img src="./src/img/Aurum/Varanda-Cobertura-Duplex-arum-ekko.webp" title="varanda duplex do aurum" alt="varanda duplex do aurum" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="aurum" href="./src/img/Aurum/Living-Duplex-aurum-ekko.png">
                    <img src="./src/img/Aurum/Living-Duplex-aurum-ekko.webp" title="living duplex do aurum" alt="living duplex do aurum" />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#00B955"></div>
              <div class="swiper-button-next" style="color:#00B955"></div>
            </div>
            <div class="expand">
              <img src="./src/img/expand.png" title="Ícone de expandir" alt="Ícone de expandir" />
            </div>
          </div>
        </div>
        <div class="col-md-7 col-12 order-first order-xs-1 order-sm-1 order-md-2">
          <div class="business-card__content">
            <img class="logo_container" src="./src/img/logo/aurum-logo.png" title="logo do Aurum" alt="logo do Aurum" />
            <p class="business-card__content__text-variant-1 mt-3">
              Apartamentos com 3 suítes e 2 vagas <br> no centro de Osasco
            </p>
            <div class="d-flex align-items-center flex-md-row flex-column px-3 px-md-0 custom-border">
              <h1>
                <div class="d-flex align-items-center">
                  <span class="business-card__content__text-variant-2 ml-3">Apartamentos de</span>
                  <span class="business-card__content__text-variant-3 ml-2 mr-3 after-content">90M<sup>2</sup></span>
                </div>
              </h1>
            </div>
            <br>
            <p class="mt-2">
              <i class='fas fa-map-marker-alt'></i> Rua Paulo Licio Rizzo, 161
            </p>
            <div class="d-flex justify-content-between w-100 mt-3 display-desktop">

              <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/aurum/" target="_blank">
                Veja o book
              </a>
              <a class="business-card__content__button" onclick="scrollToForm('aurum')">
                saiba mais
              </a>
              <a class="business-card__content__button diferenciais-link" data-state="false">
                diferenciais
              </a>
            </div>
            <div class="display-mobile" style='width:110%'>
              <div class='d-flex justify-content-between'>
                <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/aurum/" target="_blank">
                  Veja o book
                </a>
                &nbsp;
                <a class="business-card__content__button" onclick="scrollToForm('aurum')">
                  saiba mais
                </a>
              </div>
              <br>
              <div class='d-flex justify-content-center align-items-start'>
                <a class="business-card__content__button diferenciais-link" data-state="false">
                  diferenciais
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="diferenciais">
      <ul class='row'>
        <div class='col-4'>
          <li>BRINQUEDOTECA</li>
          <li>BICICLETÁRIO</li>
          <li>COWORKING</li>
          <li>CONVIVÊNCIA</li>
        </div>
        <div class='col-4'>
          <li>ESPAÇO GOURMET</li>
          <li>FITNESS IN/OUTDOOR</li>
          <li>PILATES</li>
          <li>PLAYGROUND</li>
        </div>
        <div class='col-4'>
          <li>PISCINAS</li>
          <li>REDÁRIO</li>
          <li>SALA DE GAMES</li>
          <li>SALÃO DE FESTAS</li>
        </div>
      </ul>
    </div>
    <div class="business-card">

      <div class="row">
        <div class="col-md-7 col-12">
          <div class="business-card__content">
            <img src="./src/img/logo/garden-logo.png" title="Logo do Garden" alt="Logo do Garden" class="logo_container" />
            <p class="business-card__content__text-variant-1 mt-3">
              Vista para o São Francisco Golf Club
            </p>
            <div class="d-flex align-items-center flex-md-row flex-column px-3 px-md-0 custom-border">

              <div class="d-flex align-items-center">
                <span class="business-card__content__text-variant-2 ml-3">Apartamentos de</span>
                <span class="business-card__content__text-variant-3 ml-2 mr-3">112m<sup>2</sup>-183m<sup>2</sup></span>
              </div>
            </div>
            <br>
            <p class="mt-2">
              <i class='fas fa-map-marker-alt'></i> Rua Dr. Paulo Ferraz da C. Aguiar, 40
            </p>
            <div class="d-flex justify-content-between w-100 mt-3 display-desktop">

              <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/garden/" target="_blank">
                Veja o book
              </a>
              <a class="business-card__content__button" onclick="scrollToForm('garden')">
                saiba mais
              </a>
              <a class="business-card__content__button diferenciais-link" data-state="false">
                diferenciais
              </a>
            </div>
            <div class="display-mobile" style='width:110%'>
              <div class='d-flex justify-content-between'>
                <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/garden/" target="_blank">
                  Veja o book
                </a>
                &nbsp;
                <a class="business-card__content__button" onclick="scrollToForm('garden')">
                  saiba mais
                </a>
              </div>
              <br>
              <div class='d-flex justify-content-center align-items-start'>
                <a class="business-card__content__button diferenciais-link" data-state="false">
                  diferenciais
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="business-card__image">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a data-fslightbox="garden" href="./src/img/Garden/Fachada-garden.jpg">
                    <img src="./src/img/Garden/Fachada-garden.webp" title="fachada do garden" alt="fachada do garden" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="garden" href="./src/img/Garden/Living-garden.jpg">
                    <img src="./src/img/Garden/Living-garden.webp" title="living do garden" alt="living do garden" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="garden" href="./src/img/Garden/Piscina-garden.jpg">
                    <img src="./src/img/Garden/Piscina-garden.webp" title="piscina do garden" alt="piscina do garden" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="garden" href="./src/img/Garden/varanda_duplex_garden.jpg">
                    <img src="./src/img/Garden/varanda_duplex_garden.webp" title="varanda do garden" alt="varanda do garden" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="garden" href="./src/img/Garden/Dog-Wash-garden.jpg">
                    <img src="./src/img/Garden/Dog-Wash-garden.webp" title="dog wash do garden" alt="dog wash do garden" />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#00B955"></div>
              <div class="swiper-button-next" style="color:#00B955"></div>
            </div>
            <div class="expand">
              <img src="./src/img/expand.png" title="Ícone de expandir" alt="Ícone de expandir" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="diferenciais">
      <ul class='row'>
        <div class='col-4'>
          <li>ACESSO DE VEÍCULOS</li>
          <li>ACESSO SOCIAL COM BIOMETRIA</li>
          <li>ACESSO DE SERVIÇO</li>
          <li>PRAÇA CENTRAL</li>
        </div>
        <div class='col-4'>
          <li>LOUNGE EXTERNO</li>
          <li>QUADRA</li>
          <li>VIP SPACE</li>
          <li>PIZZA PLACE</li>
        </div>
        <div class='col-4'>
          <li>QUADRA DE TÊNIS</li>
          <li>BICICLETÁRIO</li>
          <li>QUADRA POLIESPORTIVA</li>
          <li>SPA</li>
        </div>
      </ul>
    </div>
    <div class="business-card">
      <div class="row">
        <div class="col-md-5 col-12 order-sm-2 order-md-1">
          <div class="business-card__image">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a data-fslightbox="reserva" href="./src/img/reserva_golf_residence/Fachada-reserva.jpg">
                    <img src="./src/img/reserva_golf_residence/Fachada-reserva.webp" title="fachada do reserva" alt="fachada do reserva" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="reserva" href="./src/img/reserva_golf_residence/sport-bar-reserva.jpg">
                    <img src="./src/img/reserva_golf_residence/sport-bar-reserva.webp" title="sport bar do reserva" alt="sport bar do reserva" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="reserva" href="./src/img/reserva_golf_residence/Suíte-reserva.jpg">
                    <img src="./src/img/reserva_golf_residence/Suíte-reserva.webp" title="suíte do reserva" alt="suíte do reserva" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="reserva" href="./src/img/reserva_golf_residence/Piscina-reserva.jpg">
                    <img src="./src/img/reserva_golf_residence/Piscina-reserva.webp" title="piscina do reserva" alt="piscina do reserva" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="reserva" href="./src/img/reserva_golf_residence/Terraco-reserva.jpg">
                    <img src="./src/img/reserva_golf_residence/Terraco-reserva.webp" title="terraço do reserva" alt="terraço do reserva" />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#00B955"></div>
              <div class="swiper-button-next" style="color:#00B955"></div>
            </div>
            <div class="expand">
              <img src="./src/img/expand.png" title="Ícone de expandir" alt="Ícone de expandir" />
            </div>
          </div>
        </div>
        <div class="col-md-7 col-12 order-first order-xs-1 order-sm-1 order-md-2">
          <div class="business-card__content">
            <img class="logo_container" src="./src/img/logo/reserva-golf.png" title="logo do Reserva Golf" alt="logo do Reserva Golf" />
            <p class="business-card__content__text-variant-1 mt-3">
              Residencial com Shopping e vista para a natureza.
            </p>
            <div class="d-flex align-items-center flex-md-row flex-column px-3 px-md-0 custom-border">
              <h1>
                <div class="d-flex align-items-center">
                  <span class="business-card__content__text-variant-2 ml-3">Apartamentos de</span>
                  <span class="business-card__content__text-variant-3 ml-2 mr-3 after-content">95-208 m<sup>2</sup></span>
                </div>
              </h1>
            </div>
            <br>
            <p class="mt-2">
              <i class='fas fa-map-marker-alt'></i> Av. Dr. Martin Luther King, 1499
            </p>
            <div class="d-flex justify-content-between w-100 mt-3 display-desktop">

              <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/reservagolf/" target="_blank">
                Veja o book
              </a>
              <a class="business-card__content__button" onclick="scrollToForm('reserva_golf')">
                saiba mais
              </a>
              <a class="business-card__content__button diferenciais-link" data-state="false">
                diferenciais
              </a>
            </div>
            <div class="display-mobile" style='width:110%'>
              <div class='d-flex justify-content-between'>
                <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/reservagolf/" target="_blank">
                  Veja o book
                </a>
                &nbsp;
                <a class="business-card__content__button" onclick="scrollToForm('reserva_golf')">
                  saiba mais
                </a>
              </div>
              <br>
              <div class='d-flex justify-content-center align-items-start'>
                <a class="business-card__content__button diferenciais-link" data-state="false">
                  diferenciais
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="diferenciais">
      <ul class='row'>
        <div class='col-4'>
          <li>PISCINA DESCOBERTA</li>
          <li>POOL HOUSE</li>
          <li>LOUNGE EXTERNO</li>
          <li>ESPAÇO FAMÍLIA</li>
        </div>
        <div class='col-4'>
          <li>BEACH TENNIS</li>
          <li>QUADRA DE TÊNIS</li>
          <li>SKY BAR</li>
          <li>ACADEMIA</li>
        </div>
        <div class='col-4'>
          <li>PILATES</li>
          <li>SAUNA ÚMIDA</li>
          <li>SAUNA SECA</li>
          <li>GOURMET SPORT BAR</li>
        </div>
      </ul>
    </div>
    <div class="business-card">

      <div class="row">
        <div class="col-md-7 col-12">
          <div class="business-card__content">
            <img src="./src/img/logo/alto_da_mata.png" title="Logo Alto da Mata" alt="Logo Alto da Mata" class="logo_container" />
            <p class="business-card__content__text-variant-1 mt-3">
              Viva em meio a natureza na Vila São Francisco
            </p>
            <div class="d-flex align-items-center flex-md-row flex-column px-3 px-md-0 custom-border">

              <div class="d-flex align-items-center">
                <span class="business-card__content__text-variant-2 ml-3">Apartamentos de</span>
                <span class="business-card__content__text-variant-3 ml-2 mr-3">144m<sup>2</sup></span>
              </div>
            </div>
            <br>
            <p class="mt-2">
              <i class='fas fa-map-marker-alt'></i> Rua Conde Luiz Eduardo Matarazzo, 271
            </p>
            <div class="d-flex justify-content-between w-100 mt-3 display-desktop">

              <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/altodamata/" target="_blank">
                Veja o book
              </a>
              <a class="business-card__content__button" onclick="scrollToForm('alto_da_mata')">
                saiba mais
              </a>
              <a class="business-card__content__button diferenciais-link" data-state="false">
                diferenciais
              </a>
            </div>
            <div class="display-mobile" style='width:110%'>
              <div class='d-flex justify-content-between'>
                <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/altodamata/" target="_blank">
                  Veja o book
                </a>
                &nbsp;
                <a class="business-card__content__button" onclick="scrollToForm('alto_da_mata')">
                  saiba mais
                </a>
              </div>
              <br>
              <div class='d-flex justify-content-center align-items-start'>
                <a class="business-card__content__button diferenciais-link" data-state="false">
                  diferenciais
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="business-card__image">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a data-fslightbox="alto" href="./src/img/Alto da Mata/Fachada-alto.jpg">
                    <img src="./src/img/Alto da Mata/Fachada-alto.webp" title="Fachada do alto" alt="Fachada do alto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="alto" href="./src/img/Alto da Mata/Suíte-alto.jpg">
                    <img src="./src/img/Alto da Mata/Suíte-alto.webp" title="suíte do alto" alt="suíte do alto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="alto" href="./src/img/Alto da Mata/Living-alto.jpg">
                    <img src="./src/img/Alto da Mata/Living-alto.webp" title="living do alto" alt="living do alto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="alto" href="./src/img/Alto da Mata/Piscina-alto.jpg">
                    <img src="./src/img/Alto da Mata/Piscina-alto.webp" title="piscina do alto" alt="piscina do alto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="alto" href="./src/img/Alto da Mata/Churrasqueira-alto.jpg">
                    <img src="./src/img/Alto da Mata/Churrasqueira-alto.webp" title="churrasqueira do alto" alt="churrasqueira do alto" />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#00B955"></div>
              <div class="swiper-button-next" style="color:#00B955"></div>
            </div>
            <div class="expand">
              <img src="./src/img/expand.png" title="Ícone de expandir" alt="Ícone de expandir" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="diferenciais">
      <ul class='row'>
        <div class='col-4'>
          <li>PISCINA COBERTA</li>
          <li>PISCINA DESCOBERTA</li>
          <li>BICICLETÁRIO</li>
          <li>DOG WASH</li>
        </div>
        <div class='col-4'>
          <li>PRAÇA DE CHEGADA</li>
          <li>CHURRASQUEIRA</li>
          <li>BRINQUEDOTECA</li>
          <li>PLAYGROUND</li>
        </div>
        <div class='col-4'>
          <li>ÁREA GOURMET</li>
          <li>SALÃO DE FESTAS</li>
          <li>ESPAÇO TEEN</li>
          <li>SALA DE MASSAGEM</li>
        </div>
      </ul>
    </div>
    <div class="business-card">
      <div class="row">
        <div class="col-md-5 col-12 order-sm-2 order-md-1">
          <div class="business-card__image">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a data-fslightbox="canto" href="./src/img/Canto da Mata/Fachada-canto-da-mata.jpg">
                    <img src="./src/img/Canto da Mata/Fachada-canto-da-mata.webp" title="fachada do canto" alt="fachada do canto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="canto" href="./src/img/Canto da Mata/Suíte-canto-da-mata.jpg">
                    <img src="./src/img/Canto da Mata/Suíte-canto-da-mata.webp" title="suíte do canto" alt="suíte do canto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="canto" href="./src/img/Canto da Mata/Living-canto-da-mata.jpg">
                    <img src="./src/img/Canto da Mata/Living-canto-da-mata.webp" title="living do canto" alt="living do canto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="canto" href="./src/img/Canto da Mata/Piscina-canto-da-mata.jpg">
                    <img src="./src/img/Canto da Mata/Piscina-canto-da-mata.webp" title="piscina do canto" alt="piscina do canto" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="canto" href="./src/img/Canto da Mata/Churrasqueira-canto-da-mata.jpg">
                    <img src="./src/img/Canto da Mata/Churrasqueira-canto-da-mata.webp" title="churrasqueira do canto" alt="churrasqueira do canto" />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#00B955"></div>
              <div class="swiper-button-next" style="color:#00B955"></div>
            </div>
            <div class="expand">
              <img src="./src/img/expand.png" title="Ícone de expandir" alt="Ícone de expandir" />
            </div>
          </div>
        </div>
        <div class="col-md-7 col-12 order-first order-xs-1 order-sm-1 order-md-2">
          <div class="business-card__content">
            <img class="logo_container" src="./src/img/logo/logo_02.png" title="logo Canto da Mata" alt="logo Canto da Mata" />
            <p class="business-card__content__text-variant-1 mt-3">
              Conheça o melhor da Vila São Francisco
            </p>
            <div class="d-flex align-items-center flex-md-row flex-column px-3 px-md-0 custom-border">
              <h1>
                <div class="d-flex align-items-center">
                  <span class="business-card__content__text-variant-2 ml-3">Apartamentos de</span>
                  <span class="business-card__content__text-variant-3 ml-2 mr-3 after-content">105M<sup>2</sup></span>
                </div>
              </h1>
            </div>
            <br>
            <p class="mt-2">
              <i class='fas fa-map-marker-alt'></i> Rua Conde Luiz Eduardo Matarazzo, 261
            </p>
            <div class="d-flex justify-content-between w-100 mt-3 display-desktop">

              <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/cantodamata/" target="_blank">
                Veja o book
              </a>
              <a class="business-card__content__button" onclick="scrollToForm('canto_da_mata')">
                saiba mais
              </a>
              <a class="business-card__content__button diferenciais-link" data-state="false">
                diferenciais
              </a>
            </div>
            <div class="display-mobile" style='width:110%'>
              <div class='d-flex justify-content-between'>
                <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/cantodamata/" target="_blank">
                  Veja o book
                </a>
                &nbsp;
                <a class="business-card__content__button" onclick="scrollToForm('canto_da_mata')">
                  saiba mais
                </a>
              </div>
              <br>
              <div class='d-flex justify-content-center align-items-start'>
                <a class="business-card__content__button diferenciais-link" data-state="false">
                  diferenciais
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="diferenciais">
      <ul class='row'>
        <div class='col-4'>
          <li>FITNESS</li>
          <li>WIFI NAS ÁREAS COMUNS</li>
          <li>DEPOSITO PRIVATIVO</li>
          <li>TORRE ÚNICA</li>
        </div>
        <div class='col-4'>
          <li>SALÃO DE FESTAS</li>
          <li>ESPAÇO TEEN</li>
          <li>SALA DE MASSAGEM</li>
          <li>SAUNA</li>
        </div>
        <div class='col-4'>
          <li>COWORKING</li>
          <li>CHURRASQUEIRA</li>
          <li>TOMADA PARA CARRO ELÉTRICO</li>
          <li>DOG WASH</li>
        </div>
      </ul>
    </div>
    <div class="business-card">

      <div class="row">
        <div class="col-md-7 col-12">
          <div class="business-card__content">
            <img src="./src/img/logo/Logo_Terraco_Chumbo.png" title="Logo do Terraço Golf" alt="Logo do Terraço Golf" class="logo_container" />
            <p class="business-card__content__text-variant-1 mt-3">
              Acorde todos os dias com uma vista para o campo de Golf São Francisco.
            </p>
            <div class="d-flex align-items-center flex-md-row flex-column px-3 px-md-0 custom-border">

              <div class="d-flex align-items-center">
                <span class="business-card__content__text-variant-2 ml-3">Apartamentos de</span>
                <span class="business-card__content__text-variant-3 ml-2 mr-3">57m<sup>2</sup>-75m<sup>2</sup></span>
              </div>
            </div>
            <br>
            <p class="mt-2">
              <i class='fas fa-map-marker-alt'></i> &nbsp;Rua João Oxisque, 351
            </p>
            <div class="d-flex justify-content-between w-100 mt-3 display-desktop">

              <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/terracogolf/" target="_blank">
                Veja o book
              </a>
              <a class="business-card__content__button" onclick="scrollToForm('terraco_golf')">
                saiba mais
              </a>
              <a class="business-card__content__button diferenciais-link" data-state="false">
                diferenciais
              </a>
            </div>
            <div class="display-mobile" style='width:110%'>
              <div class='d-flex justify-content-between'>
                <a class="business-card__content__button" href="https://imovel.ekkogroup.com.br/book/terracogolf/" target="_blank">
                  Veja o book
                </a>
                &nbsp;
                <a class="business-card__content__button" onclick="scrollToForm('terraco_golf')">
                  saiba mais
                </a>
              </div>
              <br>
              <div class='d-flex justify-content-center align-items-start'>
                <a class="business-card__content__button diferenciais-link" data-state="false">
                  diferenciais
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="business-card__image">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a data-fslightbox="terraco" href="./src/img/Terraço Golf/Fachada-terraco.webp">
                    <img src="./src/img/Terraço Golf/Fachada-terraco.webp" title="Fachada do terraço golf" alt="Fachada do terraço golf" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="terraco" href="./src/img/Terraço Golf/Living-terraco.jpg">
                    <img src="./src/img/Terraço Golf/Living-terraco.webp" title="living do terraço golf" alt="living do terraço golf" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="terraco" href="./src/img/Terraço Golf/Piscina-terraco.jpg">
                    <img src="./src/img/Terraço Golf/Piscina-terraco.webp" title="piscina do terraço golf" alt="piscina do terraço golf" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="terraco" href="./src/img/Terraço Golf/Voo-Fire-Pit-terraco.jpg">
                    <img src="./src/img/Terraço Golf/Voo-Fire-Pit-terraco.webp" title="Fireplace do terraço golf" alt="fireplace do terraço golf" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a data-fslightbox="terraco" href="./src/img/Terraço Golf/Garden-terraco.jpg">
                    <img src="./src/img/Terraço Golf/Garden-terraco.webp" title="garden do terraço golf" alt="garden do terraço golf" />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#00B955"></div>
              <div class="swiper-button-next" style="color:#00B955"></div>
            </div>
            <div class="expand">
              <img src="./src/img/expand.png" title="Ícone de expandir" alt="Ícone de expandir" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="diferenciais">
      <ul class='row'>
        <div class='col-4'>
          <li>PET PLACE</li>
          <li>PISCINA DESCOBERTA</li>
          <li>PISCINA INFANTIL</li>
          <li>VIP SPACE</li>
        </div>
        <div class='col-4'>
          <li>PRAÇA DO LUAU</li>
          <li>SALÃO DE FESTAS</li>
          <li>FESTAS E GOURMET</li>
          <li>BEAUTY PLACE</li>
        </div>
        <div class='col-4'>
          <li>FITNESS</li>
          <li>CINEMA COM ARQUIBANCADA</li>
          <li>COWORKING</li>
          <li>PLAYGROUND</li>
        </div>
      </ul>
    </div>
  </section>
  <p class="business__text-footer pt-5 pb-4">
    <br>Studios e apartamentos inteligentes,<br> com ambientes integrados em uma localização privilegiada.
  </p>
  <section class="map">
    <img class="w-100" src="./src/img/mapa.png" title="Mapa de Osasco SP" alt="Mapa de Osasco SP" />
  </section>
  <section class="contact-form" id="contact">
    <h3 class="contact-form__title">
      Preencha os dados abaixo e fale com um consultor
    </h3>

    <?php ############################################################################################################# 
    ?>
    <?php $formName = 'principal'; ?>
    <form action="" name="<?= $formName ?>" id="form-<?= $formName ?>">

      <div class="row">
        <div class="col-lg-3">
          <!-- input nome -->
          <input name="Nome" type="text" class="w-100" placeholder="Nome*" required />
        </div>
        <div class="col-lg-3 mt-sm-3 mt-lg-0">
          <!-- input telefone -->
          <input id="tel" name="Telefone" type="tel" class="phone js-input-celular w-100" placeholder="Telefone*" required />
        </div>
        <div class="col-lg-3 mt-sm-3 mt-lg-0">
          <!-- input email -->
          <input name="Email" type="email" class="w-100" placeholder="E-mail*" required />
        </div>
        <div class="col-lg-3 mt-sm-3 mt-lg-0">
          <select id="select" name="Empreendimento" class="select-empreendimento w-100" required>
            <option disabled selected value="">Empreendimento</option>
            <!--<option value="dom">Dom</option>-->
            <option value="blend">Blend</option>
            <option value="aurum">Aurum</option>
            <option value="garden">Garden</option>
            <option value="reserva_golf">Reserva Golf</option>
            <option value="alto_da_mata">Alto da Mata</option>
            <option value="canto_da_mata">Canto da Mata</option>
            <option value="terraco_golf">Terraço Golf</option>
          </select>
        </div>
      </div>
      <!-- input checkbox -->

      <div class="custom-control custom-checkbox mr-sm-2 checkbox-terms-wrapper text-center">
        <input name="Termos" type="checkbox" value="aceito" required class="custom-control-input" id="checkbox-terms" />
        <label class="custom-control-label" for="checkbox-terms" style="font-weight:500">
          Eu li e aceito os termos e
          <a href="./politica-de-privacidade.html" target="_blank">
            Política de Privacidade </a>.
        </label>
      </div>

      <div class="custom-control custom-checkbox mr-sm-2 checkbox-terms-wrapper text-center">
        <!--                <a class="contact-form__button text-center" data-toggle="modal"  data-target="#whatsappModalSuccess" >Enviar</a >-->
        <button class="contact-form__button text-center" id="form-botao-<?= $formName ?>" type="submit">
          Enviar
        </button>
      </div>
    </form>
    <?php unset($formName); ?>
    <?php ############################################################################################################# 
    ?>
  </section>

  <footer class="container d-flex">
    <div>
      <a href="https://www.ekkogroup.com.br/" target="_blank"><img src="./src/img/logo/logo_ekko_green_white.png" title="Logo da Ekko Group" alt="Logo da Ekko Group" style="margin-bottom:10px" /></a>
    </div>
    <div class="d-flex flex-column align-items-md-end align-items-center align-self-end">
      <span class="pb-5 copyright">
        Direitos reservados a Ekko. Acesse a nossa
        <a href="./politica-de-privacidade.html" target="_blank">
          Política de Privacidade.
        </a>
      </span>
      <div class="pb-3 pt-2">
        <a href="https://internit.com.br/" target="_blank"><img class="mr-4" src="./src/img/logo/logointernit.png" title="Logo da Internit" alt="Logo da Internit" width="60px" /></a>
      </div>
    </div>
  </footer>

  <div class="float-icon">
    <a href="javascript:void(0)" onclick="javascript:window.open('https:\/\/ekkogroup.hypnobox.com.br/?controle=Atendimento&acao=index&produto=20', 'janela', 'width=660, height=510, top=100, left=699, scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no')" class="mb-1"><img src="./src/img/corretor 1.png" title="Ícone do Corretor Online" alt="Ícone do Corretor Online" /></a>
    <a href="javascript:void(0)" onclick="javascript:window.open('https:\/\/ekkogroup.hypnobox.com.br/?controle=Atendimento&acao=index&tipo_atendente=whatsapp&canal=whatsapp&subcanal=whatsapp&pre_chat=0&midia=organico&produto=20', 'janela', 'width=660, height=510, top=100, left=699, scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no')"><img src="./src/img/whats 1.png" title="Ícone do WhatsApp" alt="Ícone do WhatsApp" /></a>
  </div>

  <div class="modal fade show" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="whatsappModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <h5 class="modal-title text-uppercase text-center" id="whatsappModalTitle">
          Contato pelo whatsapp
        </h5>
        <!--<div class="modal-body">
            <?php ############################################################################################################# 
            ?>
            <?php $formName = 'whatsapp'; ?>
            <form action="" name="<?= $formName ?>" id="form-<?= $formName ?>">
      
              <input
                name="Nome"
                type="text"
                class=""
                placeholder="Nome*"
                required
              />


              <input
                id="tel"
                name="Telefone"
                type="tel"
                class="phone js-input-celular"
                placeholder="Telefone*"
                required
              />

        
              <input
                name="Email"
                type="email"
                class=""
                placeholder="E-mail*"
                required
              />

              <select
                id="select"
                name="Empreendimento"
                class="select-empreendimento"
                required
              >
                <option value="Smart 18">Smart 18</option>
                <option value="Smart Golf">Smart Golf</option>
                <option value="Smart Flow">Smart Flow</option>
                <option value="Smart Connect">Smart Connect</option>
              </select>

              <div
                class="custom-control custom-checkbox mr-sm-2 checkbox-terms-wrapper"
              >
                <input
                  name="Termos"
                  type="checkbox"
                  value="aceito"
                  required
                  class="custom-control-input"
                  id="checkbox-terms-modal"
                />
                <label class="custom-control-label" for="checkbox-terms-modal">
                  Eu li e aceito os termos e
                  <a href="./politica-de-privacidade.html" target="_blank">
                    Política de Privacidade </a
                  >.</label
                >
              </div>

              <button
                class="form__button"
                id="form-botao-<?= $formName ?>"
                type="submit"
              >
                Enviar
              </button>
            </form> -->
        <?php unset($formName); ?>
        <?php ############################################################################################################# 
        ?>
      </div>
    </div>
  </div>
  </div>

  <div class="modal fade show" id="whatsappModalSuccess" tabindex="-1" role="dialog" aria-labelledby="whatsappModalSuccessTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="d-block mx-auto mb-5" src="./src/img/success.png" title="Ícone de Sucesso" alt="Ícone de Sucesso" />
          <h5 class="modal-title mb-5 text-uppercase text-center" id="whatsappModalSuccessTitle">
            Formulario enviado com sucesso
          </h5>
          <a href="#" data-dismiss="modal" class="form__button">OK</a>
        </div>
      </div>
    </div>
  </div>

  <!--  <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="./src/js/fslightbox.js"></script>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="./src/js/mask/jquery.mask.min.js"></script>
  <script src="./src/js/tellinput/intlTelInput.min.js"></script>
  <script src="./src/js/main.js"></script>

  <!-- LIBARY's -->
  <!--    <script src="./assets/dist/js/libary/bootstrap/bootstrap.min.js"></script>-->
  <script src="./assets/dist/js/libary/animations/web-animations.js"></script>
  <!-- <script src="./assets/dist/js/libary/lightbox/fslightbox.min.js"></script> -->
  <!--    <script src="./assets/dist/js/libary/mask/jquery.mask.min.js"></script>-->
  <!--    <script src="./assets/dist/js/libary/tellinput/intlTelInput.min.js"></script>-->
  <!--    <script src="./assets/dist/js/libary/swiper/swiper-bundle.min.js"></script>-->
  <script src="./assets/dist/js/libary/storage/storage.js"></script>

  <!-- SCRIPTS -->
  <!--        <script type="module" src="./assets/dist/js/template-globals.js"></script>-->
  <script src="./assets/dist/js/main/form/_form.js"></script>

  <script>
    $(".phone").mask("(00) 00000-0000");
  </script>

  <!-- INTEGRAÇÃO FOOTER -->
  <?php require_once 'integracao/integracao.php'; ?>
</body>

</html>