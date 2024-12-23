<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} - @yield('title')</title>

   
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600,900%7CRoboto:400,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>


<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>
    <!-- Page-->
    <div class="page"><a class="d-none d-xl-block" href="" target="blank"><img class="d-block w-100" src="" alt=""></a>
      <!-- Page Header-->
      <header class="section page-header rd-navbar-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel-inner container">
                <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-left">
                  <!-- Owl Carousel-->
                  <div class="owl-carousel-navbar owl-carousel-inline-outer">
                    <div class="owl-inline-nav">
                      <button class="owl-arrow owl-arrow-prev"></button>
                      <button class="owl-arrow owl-arrow-next"></button>
                    </div>
                    <div class="owl-carousel-inline-wrap">
                      <div class="owl-carousel owl-carousel-inline" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="3200" data-stage-padding="0" data-loop="true" data-margin="10" data-mouse-drag="false" data-touch-drag="false" data-nav-custom=".owl-carousel-navbar">
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">Dezembro 10, 2024</time>
                          <p class="post-inline-title">Girona FC vs Liverpool FC</p>
                        </article>
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">Dezembro 10, 2024</time>
                          <p class="post-inline-title">Atalanta BC vs Real Madrid</p>
                        </article>
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">Dezembro 11, 2024</time>
                          <p class="post-inline-title">Borussia Dortmund vs Barcelona</p>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rd-navbar-panel-item rd-navbar-panel-item-right">
                  <ul class="list-inline list-inline-bordered">
                    <li>

                    </li>
                    <li>
                      <div class="cart-inline-toggled-outer">
                        <!-- Link Cart-->
                        
                        <!-- Cart Inline-->
                        <article class="cart-inline cart-inline-toggled" id="cart-inline">
                          <div class="cart-inline-inner">
                            <div class="cart-inline-header">
                              <h5 class="cart-inline-title"></h5>
                              <p class="cart-inline-subtitle"></p>
                            </div>
                            <div class="cart-inline-main">
                                    <!-- Product inline-->
                                    <article class="product-inline">
                                      <div class="product-inline-aside"><a class="product-inline-figure" href="#"><img class="product-inline-image" src="images/product-Nike-Air-Zoom-Pegasus-67x30.png" alt="" width="67" height="30"/></a></div>
                                      <div class="product-inline-main">
                                        <p class="heading-7 product-inline-title"><a href="#">Nike Air Zoom Pegasus</a></p>
                                        <ul class="product-inline-meta">
                                          <li>
                                            <input class="form-input" type="number" data-zeros="true" value="2" min="1" max="100">
                                          </li>
                                          <li>
                                            <p class="product-inline-price">$500.00</p>
                                          </li>
                                        </ul>
                                      </div>
                                    </article>
                                    <!-- Product inline-->
                                    <article class="product-inline">
                                      <div class="product-inline-aside"><a class="product-inline-figure" href="#"><img class="product-inline-image" src="images/product-Nike-Baseball-Hat-55x38.png" alt="" width="55" height="38"/></a></div>
                                      <div class="product-inline-main">
                                        <p class="heading-7 product-inline-title"><a href="#">Nike Baseball Hat</a></p>
                                        <ul class="product-inline-meta">
                                          <li>
                                            <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                          </li>
                                          <li>
                                            <p class="product-inline-price">$250.00</p>
                                          </li>
                                        </ul>
                                      </div>
                                    </article>
                            </div>
                            <div class="cart-inline-footer"><a class="button button-md button-default-outline" href="#">Go to Cart</a><a class="button button-md button-primary" href="#">Checkout</a></div>
                          </div>
                        </article>
                      </div>
                    </li>
                    <li><a class="link link-icon link-icon-left link-classic" href="/login"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Acessar Conta</span></a></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-main">
              <div class="rd-navbar-main-top">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="./"><img class="brand-logo " src="images/logo-soccer-default-95x126.png" alt="" width="95" height="126"/></a>
                  </div>
                  <!-- RD Navbar List-->
                  <ul class="rd-navbar-list">
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="images/partners-1-inverse-75x42.png" alt="" width="75" height="42"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="images/partners-2-inverse-88x45.png" alt="" width="88" height="45"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="images/partners-3-inverse-79x52.png" alt="" width="79" height="52"/></a></li>
                  </ul>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="#" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Enter your search request here...</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-main-bottom rd-navbar-darker">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Inicio</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html">Contato</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html"></a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html"></a>
                                      </li>
                                    </ul>
                  <div class="rd-navbar-main-element">
                    <ul class="list-inline list-inline-sm">
                      <li><a class="icon icon-xs icon-light fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-classic bg-white-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <div class="swiper-slide text-center" data-slide-bg="images/slider-1-slide-1-1920x671.jpg">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-6">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">O declínio de uma potência</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">Manchesyer City enfrenta crise que paira sobre o elenco</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="https://www.cnnbrasil.com.br/esportes/futebol/futebol-internacional/futebol-ingles/precisamos-dos-torcedores-diz-pep-guardiola-sobre-ma-fase-do-manchester-city/">LER MAIS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1920x671.jpg">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-xl-5">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Super Barça</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">A Força Imparável do Futebol Catalão</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="https://tntsports.com.br/melhorfuteboldomundo/Raphinha-do-Barcelona-e-eleito-o-melhor-jogador-de-agosto-de-LaLiga-20240913-0014.html">LER MAIS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-3-1920x671.jpg">
            <div class="container">
              <div class="row">
                <div class="col-xl-5">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Rumo ao Topo com um Novo Capítulo na Temporada!</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">Liverpool Inicia Temporada com Força e Expectativas Altas<br class="d-none d-xl-block"> and game results</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="https://www.premierleague.com/clubs/10/Liverpool/overview">LER MAIS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </section>

      <!-- Latest News-->
      <section class="section section-md bg-gray-100">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="main-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Destaques
                    </h5><a class="button button-xs button-gray-outline" href="#">Todas as noticias</a>
                  </div>
                </article>
                <div class="row row-30">
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-1-368x287.jpg" alt="" width="368" height="287"/></a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="#">Mbappé e Real Madrid: A Adaptação Difícil</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-secondary">Real Madrid
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">27 Novembro, 2024</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>A temporada turbulenta do atacante e sua integração desafiadora no time merengue.</p>
                        </div>
                        <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">Ler Mais</a>
                          <div class="post-future-share">
                            <div class="inline-toggle-parent">
                              <div class="inline-toggle icon material-icons-share"></div>
                              <div class="inline-toggle-element">
                                <ul class="list-inline">
                                  <li>Compartilhar</li>
                                  <li><a class="icon fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-2-368x287.jpg" alt="" width="368" height="287"/></a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="#">A SAF da Portuguesa: Um Novo Capítulo para o Futuro do Clube</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-secondary">Brasil
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">10 Novembro, 2024</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>A Sociedade Anônima do Futebol promete trazer mais profissionalismo e investimentos para a Lusa.</p>
                        </div>
                        <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">LER MAIS</a>
                          <div class="post-future-share">
                            <div class="inline-toggle-parent">
                              <div class="inline-toggle icon material-icons-share"></div>
                              <div class="inline-toggle-element">
                                <ul class="list-inline">
                                  <li>Share</li>
                                  <li><a class="icon fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-3-368x287.jpg" alt="" width="368" height="287"/></a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="#">Raphinha Brilha em 2024 e Surge como Candidato ao Prêmio da Bola de Ouro</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-secondary">Europa
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">02 Novembro, 2024</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>Com atuações decisivas pelo Barcelona e pela seleção brasileira, o atacante se destaca como um dos melhores do mundo nesta temporada.</p>
                        </div>
                        <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">LER MAIS</a>
                          <div class="post-future-share">
                            <div class="inline-toggle-parent">
                              <div class="inline-toggle icon material-icons-share"></div>
                              <div class="inline-toggle-element">
                                <ul class="list-inline">
                                  <li>Share</li>
                                  <li><a class="icon fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-4-368x287.jpg" alt="" width="368" height="287"/></a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="#">Gol de Estevão Garante Vitória Crucial para o Palmeiras Contra o Cruzeiro</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-secondary">Brasileirão
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">04 Dezembro, 2024</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>Com um gol decisivo, o jovem atacante salva o time e mantém o Verdão vivo na disputa do Campeonato Brasileiro</p>
                        </div>
                        <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">Ler Mais</a>
                          <div class="post-future-share">
                            <div class="inline-toggle-parent">
                              <div class="inline-toggle icon material-icons-share"></div>
                              <div class="inline-toggle-element">
                                <ul class="list-inline">
                                  <li>Share</li>
                                  <li><a class="icon fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-12">
                    <!-- Post Gloria-->
                    <article class="post-gloria"><img src="images/post-gloria-1-769x429.jpg" alt="" width="769" height="429"/>
                      <div class="post-gloria-main">
                        <h3 class="post-gloria-title"><a href="#">Copa São Paulo de 2025 Promete Emoções e Novos Talentos no Futebol Brasileiro</a></h3>
                        <div class="post-gloria-meta">
                          <!-- Badge-->
                          <div class="badge badge-primary">Brasil
                          </div>
                          <div class="post-gloria-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">05 Novembro, 2024</time>
                          </div>
                        </div>
                        <div class="post-gloria-text">
                          <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                            <path d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                          </svg>
                          <p>During this year’s premier league, we are glad to announce that there are new players who are...</p>
                        </div><a class="button" href="#">LER MAIS</a>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                    <article class="post-future post-future-horizontal"><a class="post-future-figure" href="#"><img src="images/news-3-1-370x3255.jpg" alt="" width="370" height="325"/></a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="#">Botafogo Conquista a Libertadores pela Primeira Vez e Faz História no Futebol Brasileiro</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-red">Mais Visto<span class="icon mdi mdi-fire"></span>
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">30 Novembro, 2024</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>Com uma campanha histórica, o Glorioso surpreende o continente e levanta o tão sonhado título da competição sul-americana.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                    <article class="post-future post-future-horizontal"><a class="post-future-figure" href="#"><img src="images/news-3-2-370x325.jpg" alt="" width="370" height="325"/></a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="#">Disputa Acirrada pelo Título Brasileiro: Botafogo e Palmeiras Prometem Emoções Até o Fim</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-primary">Decisão
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">05 Dezembro, 2024</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>Com campanhas impecáveis, as duas equipes brigam ponto a ponto pelo campeonato, criando uma rivalidade intensa na reta final.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-12">
                    <!-- Swiper-->
                    <div class="swiper-container swiper-slider post-slider" data-loop="false" data-autoplay="false" data-simulate-touch="false">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="swiper-slide-caption">
                                                <!-- Post Alice-->
                                                <article class="post-alice"><img src="images/post-slide-1-769x397.jpg" alt="" width="769" height="397"/>
                                                  <div class="post-alice-main">
                                                    <!-- Badge-->
                                                    <div class="badge badge-secondary">Mundo
                                                    </div>
                                                    <h3 class="post-alice-title"><a href="#">Ronaldo Vai dar Golpe????
Veja a tragedia que pode acontecer</a></h3>
                                                    <div class="divider"></div>
                                                    <div class="post-alice-time"><span class="icon mdi mdi-clock"></span>
                                                      <time datetime="2020">Novembro 30, 2024</time>
                                                    </div>
                                                  </div>
                                                </article>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="swiper-slide-caption">
                                                <!-- Post Alice-->
                                                <article class="post-alice"><img src="images/post-slide-2-769x397.jpg" alt="" width="769" height="397"/>
                                                  <div class="post-alice-main">
                                                    <!-- Badge-->
                                                    <div class="badge badge-primary">Mundo
                                                    </div>
                                                    <h3 class="post-alice-title"><a href="#">Definidos os Grupos do Super Mundial</a></h3>
                                                    <div class="divider"></div>
                                                    <div class="post-alice-time"><span class="icon mdi mdi-clock"></span>
                                                      <time datetime="2020">Dezembro 5 , 2024</time>
                                                    </div>
                                                  </div>
                                                </article>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="swiper-slide-caption">
                                                <!-- Post Alice-->
                                                <article class="post-alice"><img src="images/post-slide-3-769x397.jpg" alt="" width="769" height="397"/>
                                                  <div class="post-alice-main">
                                                    
                                                    <h3 class="post-alice-title"><a href="#">Troféu do Super Mundial Chama Atenção da Mídia </a></h3>
                                                    <div class="divider"></div>
                                                    <div class="post-alice-time"><span class="icon mdi mdi-clock"></span>
                                                      <time datetime="2020">Dezembro  7, 2024</time>
                                                    </div>
                                                  </div>
                                                </article>
                          </div>
                        </div>
                      </div>
                      <!-- Swiper Pagination-->
                      <div class="swiper-pagination"></div>
                      <!-- Swiper Navigation-->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                    <article class="post-future post-future-horizontal"><a class="post-future-figure" href="#"><img src="images/news-3-3-370x325.jpg" alt="" width="370" height="325"/></a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="#">Veja o Novo Acordo do Brasil com a Nike</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-red">hot<span class="icon mdi mdi-fire"></span>
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">20 Novembro, 2024</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>A CBF anunciou na 6ª feira (6.dez.2024) a renovação de contrato com a Nike até 2038. Os valores do acordo não foram revelados, mas informações do ge indicam que a fornecedora de materiais esportivos pagará US$ 100 milhões.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="main-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Jogo de Destaque 
                    </h5><a class="button button-xs button-gray-outline" href="#">Calendario</a>
                  </div>
                </article>
                <!-- Game Result Bug-->
                <article class="game-result">
                  <div class="game-info game-info-creative">
                    <p class="game-info-subtitle">Estadio Olimpico de Montjuic - 
                      <time datetime="08:30"> 17:00 PM</time>
                    </p>
                    <h3 class="game-info-title">Liga dos Campeões Rodada 6</h3>
                    <div class="game-info-main">
                      <div class="game-info-team game-info-team-first">
                        <figure><img src="images/team-sportland-75x99.png" alt="" width="75" height="99"/>
                        </figure>
                        <div class="game-result-team-name">Barcelona</div>
                        <div class="game-result-team-country">Espanha</div>
                      </div>
                      <div class="game-info-middle game-info-middle-vertical">
                        <time class="time-big" datetime="2020-04-17"><span class="heading-3">Champions League</span> 11 Dezembro 2024
                        </time>
                        <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                        <div class="group-sm">
                          <div class="button button-sm button-share-outline">Compartilhar
                            <ul class="game-info-share">
                              <li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                              <li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                              <li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                              <li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                            </ul>
                          </div><a class="button button-sm button-primary" href="#"></a>
                        </div>
                      </div>
                      <div class="game-info-team game-info-team-second">
                        <figure><img src="images/team-dream-team-91x91.png" alt="" width="91" height="91"/>
                        </figure>
                        <div class="game-result-team-name">Dream Team</div>
                        <div class="game-result-team-country">Spain</div>
                      </div>
                    </div>
                  </div>
                  <div class="game-info-countdown">
                    <div class="countdown countdown-bordered" data-type="until" data-time="31 Dec 2020 16:00" data-format="dhms" data-style="short"></div>
                  </div>
                </article>
              </div>
            </div>
            <!-- Aside Block-->
            <div class="col-lg-4">
              <aside class="aside-components">
                <div class="aside-component">
                  <div class="owl-carousel-outer-navigation-1">
                    <!-- Heading Component-->
                    <article class="heading-component">
                      <div class="heading-component-inner">Ultimos Resultados
                        <h5 class="heading-component-title">
                        </h5>
                        <div class="owl-carousel-arrows-outline">
                          <div class="owl-nav">
                            <button class="owl-arrow owl-arrow-prev"></button>
                            <button class="owl-arrow owl-arrow-next"></button>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-nav-custom=".owl-carousel-outer-navigation-1">
                      <!-- Game Result Creative-->
                      <article class="game-result game-result-creative">
                        <div class="game-result-main-vertical">
                          <div class="game-result-team game-result-team-horizontal game-result-team-first">
                            <figure class="game-result-team-figure"><img src="images/team-sportland-31x41.png" alt="" width="31" height="41"/>
                            </figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">Liverpool</div>
                              <div class="game-result-team-country">Inglaterra</div>
                            </div>
                            <div class="game-result-score game-result-score-big game-result-team-win">2<span class="game-result-team-label game-result-team-label-right">Win</span>
                            </div>
                          </div><span class="game-result-team-divider">VS</span>
                          <div class="game-result-team game-result-team-horizontal game-result-team-second">
                            <figure class="game-result-team-figure"><img src="images/team-fenix-40x32.png" alt="" width="40" height="32"/>
                            </figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">Real madrid</div>
                              <div class="game-result-team-country">Espanha</div>
                            </div>
                            <div class="game-result-score game-result-score-big">1
                            </div>
                          </div>
                        </div>
                        <div class="game-result-footer">
                          <ul class="game-result-details">
                            <li></li>
                            <li></li>
                            <li>
                              <time datetime="2020-04-14"></time>
                            </li>
                          </ul>
                        </div>
                      </article>
                      <!-- Game Result Creative-->
                      <article class="game-result game-result-creative">
                        <div class="game-result-main-vertical">
                          <div class="game-result-team game-result-team-horizontal game-result-team-first">
                            <figure class="game-result-team-figure"><img src="images/team-bavaria-fc-26x34.png" alt="" width="26" height="34"/>
                            </figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">Bayer 04 Leverkusen</div>
                              <div class="game-result-team-country">Alemanha</div>
                            </div>
                            <div class="game-result-score game-result-score-big">2
                            </div>
                          </div><span class="game-result-team-divider">VS</span>
                          <div class="game-result-team game-result-team-horizontal game-result-team-second">
                            <figure class="game-result-team-figure"><img src="images/team-athletic-33x30.png" alt="" width="33" height="30"/>
                            </figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">Inter de Milão</div>
                              <div class="game-result-team-country">Itália</div>
                            </div>
                            <div class="game-result-score game-result-score-big game-result-team-win">3<span class="game-result-team-label game-result-team-label-right">Win</span>
                            </div>
                          </div>
                        </div>
                        <div class="game-result-footer">
                          <ul class="game-result-details">
                            <li></li>
                            <li></li>
                            <li>
                              <time datetime="2020-04-14"></time>
                            </li>
                          </ul>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Útimas Notícias
                      </h5><a class="button button-xs button-gray-outline" href="#">Todas as Notícias</a>
                    </div>
                  </article>
                  <!-- List Post Classic-->
                  <div class="list-post-classic">
                                      <!-- Post Classic-->
                                      <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/blog-element-1-94x94.jpg" alt="" width="94" height="94"/></a></div>
                                        <div class="post-classic-main">
                                          <p class="post-classic-title"><a href="#">Messi é eleito o melhor jogador da MLS de 2024</a></p>
                                          <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2020">Dezembro 12, 2024</time>
                                          </div>
                                        </div>
                                      </article>
                                      <!-- Post Classic-->
                                      <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/blog-element-2-94x94.jpg" alt="" width="94" height="94"/></a></div>
                                        <div class="post-classic-main">
                                          <p class="post-classic-title"><a href="#">Titular do Botafogo tem lesão no joelho e está fora do Intercontinental 2024</a></p>
                                          <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2020">Dezembro 12, 2024</time>
                                          </div>
                                        </div>
                                      </article>
                                      <!-- Post Classic-->
                                      <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/blog-element-3-94x94.jpg" alt="" width="94" height="94"/></a></div>
                                        <div class="post-classic-main">
                                          <p class="post-classic-title"><a href="#">Brasileirão Betano: o que precisa acontecer para Botafogo ou Palmeiras serem campeões?</a></p>
                                          <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2020">Dezembro 12, 2024</time>
                                          </div>
                                        </div>
                                      </article>
                                      <!-- Post Classic-->
                                      <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/blog-element-4-94x94.jpg" alt="" width="94" height="94"/></a></div>
                                        <div class="post-classic-main">
                                          <p class="post-classic-title"><a href="#">Promessa de R$ 1,2 bilhões do Bahia vai participar de intercâmbio no Manchester City</a></p>
                                          <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2020">Dezembro 12, 2024</time>
                                          </div>
                                        </div>
                                      </article>
                  </div>
                </div>
                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Classificação 
                      </h5><a class="button button-xs button-gray-outline" href="#">Estatísticas</a>
                    </div>
                  </article>
                  <!-- Table team-->
                  <div class="table-custom-responsive">
                    <table class="table-custom table-standings table-classic">
                      <thead>
                        <tr>
                          <th colspan="2">Classificação</th>
                          <th>V</th>
                          <th>D</th>
                          <th>PTS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span>1</span></td>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/team-sportland-31x41.png" alt="" width="30" height="35"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">Liverpool</div>
                              <div class="team-country">Inglaterra</div>
                            </div>
                          </td>
                          <td>5</td>
                          <td>0</td>
                          <td>15</td>
                        </tr>
                        <tr>
                          <td><span>2</span></td>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/team-dream-team-34x34.png" alt="" width="30" height="35"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">	
                              Internazionale</div>
                              <div class="team-country">Italia</div>
                            </div>
                          </td>
                          <td>4</td>
                          <td>0</td>
                          <td>13</td>
                        </tr>
                        <tr>
                          <td><span>3</span></td>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/team-real-madrid-28x37.png" alt="" width="30" height="35"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">Barcelona</div>
                              <div class="team-country">Espanha</div>
                            </div>
                          </td>
                          <td>4</td>
                          <td>1</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td><span>4</span></td>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/team-celta-vigo-35x39.png" alt="" width="35" height="39"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">Borussia Dortmund</div>
                              <div class="team-country">Alemanha</div>
                            </div>
                          </td>
                          <td>4</td>
                          <td>1</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td><span>5</span></td>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/team-barcelona-30x35.png" alt="" width="30" height="35"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">Atalanta</div>
                              <div class="team-country">Italia</div>
                            </div>
                          </td>
                          <td>3</td>
                          <td>2</td>
                          <td>11</td>
                        </tr>
                        <tr>
                          <td><span>6</span></td>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/team-bavaria-fc-26x34.png" alt="" width="30" height="35"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">Bayern Leverkusen</div>
                              <div class="team-country">Alemanha</div>
                            </div>
                          </td>
                          <td>3</td>
                          <td>1</td>
                          <td>10</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Nos Siga
                      </h5>
                    </div>
                  </article>
                  <!-- Buttons Media-->
                  <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="#">
                      <h4 class="button-media-title">50k</h4>
                      <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="#">
                      <h4 class="button-media-title">120k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="#">
                      <h4 class="button-media-title">15k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="#">
                      <h4 class="button-media-title">85k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
                </div>
                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Premiações
                      </h5>
                    </div>
                  </article>
                  <!-- Owl Carousel-->
                  <div class="owl-carousel owl-carousel-dots-modern awards-carousel" data-items="1" data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                                      <!-- Awards Item-->
                                      <div class="awards-item"> 
                                        <div class="awards-item-main">
                                          <h4 class="awards-item-title"><span class="text-accent">Best</span>Time
                                          </h4>
                                          <div class="divider"></div>
                                          <h5 class="awards-item-time">Dezembro 2024</h5>
                                        </div>
                                        <div class="awards-item-aside"> <img src="images/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147"/>
                                        </div>
                                      </div>
                                      <!-- Awards Item-->
                                      <div class="awards-item"> 
                                        <div class="awards-item-main">
                                          <h4 class="awards-item-title"><span class="text-accent">Best</span>Jogador
                                          </h4>
                                          <div class="divider"></div>
                                          <h5 class="awards-item-time">Dezembro 2024</h5>
                                        </div>
                                        <div class="awards-item-aside"> <img src="images/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126"/>
                                        </div>
                                      </div>
                                      <!-- Awards Item-->
                                      <div class="awards-item"> 
                                        <div class="awards-item-main">
                                          <h4 class="awards-item-title"><span class="text-accent">Best</span>Treinador
                                          </h4>
                                          <div class="divider"></div>
                                          <h5 class="awards-item-time">Dezembro 2024</h5>
                                        </div>
                                        <div class="awards-item-aside"> <img src="images/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135"/>
                                        </div>
                                      </div>
                  </div>
                </div>
                <div class="aside-component">
                 
                  
                    <!-- Heading Component-->
                    <article class="heading-component">
                      <div class="heading-component-inner">
                        <h5 class="heading-component-title">Loja
                        </h5>
                        <div class="owl-carousel-arrows-outline">
                          <div class="owl-nav">
                            <button class="owl-arrow owl-arrow-prev"></button>
                            <button class="owl-arrow owl-arrow-next"></button>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
                      <article class="product">
                        <header class="product-header">
                          <!-- Badge-->
                          <div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
                          </div>
                          <div class="product-figure"><img src="images/shop/product-1.png" alt=""/></div>
                          <div class="product-buttons">
                            <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                              <ul class="product-share">
                                <li class="product-share-item"><span>Share</span></li>
                                <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                              </ul>
                            </div><a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-1-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
                          </div>
                        </header>
                        <footer class="product-content">
                          <h6 class="product-title"><a href="#">Chuteira Campo Nike Zoom Mercurial Superfly 9 Elite FG Peak Ready Pack</a></h6>
                          <div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
                          </div>
                          <ul class="product-rating">
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star_half"></span></li>
                          </ul>
                        </footer>
                      </article>
                      <article class="product">
                        <header class="product-header">
                          <!-- Badge-->
                          <div class="badge badge-shop">new
                          </div>
                          <div class="product-figure"><img src="images/shop/product-2.png" alt=""/></div>
                          <div class="product-buttons">
                            <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                              <ul class="product-share">
                                <li class="product-share-item"><span>Share</span></li>
                                <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                              </ul>
                            </div><a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-2-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
                          </div>
                        </header>
                        <footer class="product-content">
                          <h6 class="product-title"><a href="#">Nike Air Zoom Pegasus</a></h6>
                          <div class="product-price"><span class="heading-6 product-price-new">$290</span>
                          </div>
                          <ul class="product-rating">
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star_half"></span></li>
                          </ul>
                        </footer>
                      </article>
                      <article class="product">
                        <header class="product-header">
                          <!-- Badge-->
                          <div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
                          </div>
                          <div class="product-figure"><img src="images/shop/product-3.png" alt=""/></div>
                          <div class="product-buttons">
                            <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                              <ul class="product-share">
                                <li class="product-share-item"><span>Share</span></li>
                                <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                              </ul>
                            </div><a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-3-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
                          </div>
                        </header>
                        <footer class="product-content">
                          <h6 class="product-title"><a href="#">Nike distressed baseball hat</a></h6>
                          <div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
                          </div>
                          <ul class="product-rating">
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star"></span></li>
                            <li><span class="material-icons-star_half"></span></li>
                          </ul>
                        </footer>
                      </article>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
      
      <footer class="section footer-classic footer-classic-dark context-dark">
        <div class="footer-classic-main">
          <div class="container">
            <p class="heading-7">Se inscreva no Nosso Site</p>
            <!-- RD Mailform-->
            <form class="rd-mailform rd-form rd-inline-form-creative" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
              <div class="form-wrap">
                <div class="form-input-wrap">
                  <input class="form-input" id="footer-form-email" type="email" name="email" data-constraints="">
                  <label class="form-label" for="footer-form-email">Entre Com o seu Email</label>
                </div>
              </div>
              <div class="form-button">
                <button class="button button-primary-outline" type="submit" aria-label="Send"><span class="icon fl-budicons-launch-right164"></span></button>
              </div>
            </form>
            <div class="row row-50">
              <div class="col-lg-5 text-center text-sm-left">
                <article class="unit unit-sm-horizontal unit-middle justify-content-center justify-content-sm-start footer-classic-info">
                  <div class="unit-left"><a class="brand brand-md" href="./"><img class="brand-logo " src="images/logo-soccer-default-95x126.png" alt="" width="95" height="126"/></a>
                  </div>
                  <div class="unit-body">
                    <p>Nosso site oferece as últimas notícias sobre nossa equipe, bem como atualizações sobre nossos jogos e outros eventos.</p>
                  </div>
                </article>
                <ul class="list-inline list-inline-bordered list-inline-bordered-lg">
                  <li>
                    <div class="unit unit-horizontal unit-middle">
                      <div class="unit-left">
                        <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px" width="27px" height="27px" viewbox="0 0 27 27" preserveAspectRatio="none">
                          <path d="M2,26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-8.185c-0.373-0.132-0.711-0.335-1-0.595V19 H6v-1v-1v-1H5v1v2H3v-9H2v1H1V9V8c0-0.552,0.449-1,1-1h1h1h3h0.184c0.078-0.218,0.173-0.426,0.297-0.617C8.397,5.751,9,4.696,9,3.5 C9,1.567,7.434,0,5.5,0S2,1.567,2,3.5C2,4.48,2.406,5.364,3.056,6H3H2C0.895,6,0,6.895,0,8v7c0,1.104,0.895,2,2,2V26z M8,26H6v-6h2 V26z M5,26H3v-6h2V26z M3,3.5C3,2.121,4.121,1,5.5,1S8,2.121,8,3.5S6.879,6,5.5,6S3,4.879,3,3.5 M1,15v-3h1v4 C1.449,16,1,15.552,1,15"></path>
                          <path d="M11.056,6H11h-1C8.895,6,8,6.895,8,8v7c0,1.104,0.895,2,2,2v9c0,0.553,0.447,1,1,1h5 c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2V8c0-1.105-0.896-2-2-2h-1h-0.056C16.594,5.364,17,4.48,17,3.5 C17,1.567,15.434,0,13.5,0S10,1.567,10,3.5C10,4.48,10.406,5.364,11.056,6 M10,15v1c-0.551,0-1-0.448-1-1v-3h1V15z M11,20h2v6h-2 V20z M16,26h-2v-6h2V26z M17,16v-1v-3h1v3C18,15.552,17.551,16,17,16 M17,7c0.551,0,1,0.448,1,1v1v1v1h-1v-1h-1v5v4h-2v-1v-1v-1h-1 v1v1v1h-2v-4v-5h-1v1H9v-1V9V8c0-0.552,0.449-1,1-1h1h1h3h1H17z M13.5,1C14.879,1,16,2.121,16,3.5C16,4.879,14.879,6,13.5,6 S11,4.879,11,3.5C11,2.121,12.121,1,13.5,1"></path>
                          <polygon points="15,13 14,13 14,9 13,9 12,9 12,10 13,10 13,13 12,13 12,14 13,14 14,14 15,14 	"></polygon>
                          <polygon points="7,14 7,13 5,13 5,12 6,12 7,12 7,10 7,9 6,9 4,9 4,10 6,10 6,11 5,11 4,11 4,12 4,13 4,14 5,14"></polygon>
                          <polygon points="20,10 22,10 22,11 21,11 21,12 22,12 22,13 20,13 20,14 22,14 23,14 23,13 23,12 23,11 23,10 23,9 22,9 20,9 	"></polygon>
                          <path d="M19.519,6.383C19.643,6.574,19.738,6.782,19.816,7H20h3h1h1c0.551,0,1,0.448,1,1v3h-1v-1h-1v9 h-2v-2v-1h-1v1v2h-2v-1.78c-0.289,0.26-0.627,0.463-1,0.595V26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2 V8c0-1.105-0.896-2-2-2h-1h-0.056C24.594,5.364,25,4.48,25,3.5C25,1.567,23.434,0,21.5,0S18,1.567,18,3.5 c0,0.736,0.229,1.418,0.617,1.981C18.861,5.834,19.166,6.14,19.519,6.383 M19,20h2v6h-2V20z M24,26h-2v-6h2V26z M26,15 c0,0.552-0.449,1-1,1v-4h1V15z M21.5,1C22.879,1,24,2.121,24,3.5C24,4.879,22.879,6,21.5,6C20.121,6,19,4.879,19,3.5 C19,2.121,20.121,1,21.5,1"></path>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h6>Entre no time</h6><a class="link" href="mailto:#">futebolisticostime@gmail.com</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-middle">
                      <div class="unit-left">
                        <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px" width="72px" height="72px" viewbox="0 0 72 72">
                          <path d="M36.002,0c-0.41,0-0.701,0.184-0.931,0.332c-0.23,0.149-0.4,0.303-0.4,0.303l-9.251,8.18H11.58 c-1.236,0-1.99,0.702-2.318,1.358c-0.329,0.658-0.326,1.3-0.326,1.3v11.928l-8.962,7.936V66c0,0.015-0.038,1.479,0.694,2.972 C1.402,70.471,3.006,72,5.973,72h30.03h30.022c2.967,0,4.571-1.53,5.306-3.028c0.736-1.499,0.702-2.985,0.702-2.985V31.338 l-8.964-7.936V11.475c0,0,0.004-0.643-0.324-1.3c-0.329-0.658-1.092-1.358-2.328-1.358H46.575l-9.251-8.18 c0,0-0.161-0.154-0.391-0.303C36.703,0.184,36.412,0,36.002,0z M36.002,3.325c0.49,0,0.665,0.184,0.665,0.184l6,5.306h-6.665 h-6.665l6-5.306C35.337,3.51,35.512,3.325,36.002,3.325z M12.081,11.977h23.92H59.92v9.754v2.121v14.816L48.511,48.762 l-10.078-8.911c0,0-0.307-0.279-0.747-0.548s-1.022-0.562-1.684-0.562c-0.662,0-1.245,0.292-1.686,0.562 c-0.439,0.268-0.747,0.548-0.747,0.548l-10.078,8.911L12.082,38.668V23.852v-2.121v-9.754H12.081z M8.934,26.867v9.015 l-5.091-4.507L8.934,26.867z M63.068,26.867l5.091,4.509l-5.091,4.507V26.867z M69.031,34.44v31.559 c0,0.328-0.103,0.52-0.162,0.771L50.685,50.684L69.031,34.44z M2.971,34.448l18.348,16.235L3.133,66.77 c-0.059-0.251-0.162-0.439-0.162-0.769C2.971,66.001,2.971,34.448,2.971,34.448z M36.002,41.956c0.264,0,0.437,0.057,0.546,0.104 c0.108,0.047,0.119,0.059,0.119,0.059l30.147,26.675c-0.3,0.054-0.79,0.207-0.79,0.207H36.002H5.98H5.972 c-0.003,0-0.488-0.154-0.784-0.207l30.149-26.675c0,0,0.002-0.011,0.109-0.059C35.555,42.013,35.738,41.956,36.002,41.956z"></path>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h6>Entre em contato</h6><a class="link" href="mailto:#">futebolisticossuporte@gmail.com</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="group-md group-middle">
                  <div class="group-item">
                    <ul class="list-inline list-inline-xs">
                      <li><a class="icon icon-corporate fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-corporate fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-corporate fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-corporate fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div><a class="button button-sm button-gray-outline" href="contact-us.html">Não aperte aqui</a>
                </div>
              </div>
              <div class="col-lg-7">
                <h5>Popular News</h5>
                <div class="divider-small divider-secondary"></div>
                <div class="row row-20">
                  <div class="col-sm-6">
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/footer-soccer-post-1-93x87.jpg" alt="" width="93" height="87"/></a></div>
                            <div class="post-classic-main">
                              <!-- Badge-->
                              <div class="badge badge-secondary">Corinthians
                              </div>
                              <p class="post-classic-title"><a href="https://www.espn.com.br/futebol/artigo/_/id/14548279/yuri-alberto-garante-permanencia-no-corinthians-em-2025">Artilheiro do Brasil, Yuri Alberto garante permanência no Corinthians em 2025
                              </a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2020">10 Janeiro, 2025</time>
                              </div>
                            </div>
                          </article>
                  </div>
                  <div class="col-sm-6">
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/footer-soccer-post-2-93x87.jpg" alt="" width="93" height="87"/></a></div>
                            <div class="post-classic-main">
                              <!-- Badge-->
                              <div class="badge badge-red">Hot<span class="icon material-icons-whatshot"></span>
                              </div>
                              <p class="post-classic-title"><a href="https://www.espn.com.br/futebol/santos/artigo/_/id/14548213/marcelo-teixeira-explica-desistencia-do-santos-acordo-com-luis-castro-nao-podia-esperar">'Santos não podia esperar': Marcelo Teixeira explica desistência de acordo com Luis Castro</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2020">11 Novembro, 2024</time>
                              </div>
                            </div>
                          </article>
                  </div>
                  <div class="col-sm-6">
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/footer-soccer-post-3-93x87.jpg" alt="" width="93" height="87"/></a></div>
                            <div class="post-classic-main">
                              <!-- Badge-->
                              <div class="badge badge-primary">The League
                              </div>
                              <p class="post-classic-title"><a href="#">Ancelotti descarta saída de Endrick do Real Madrid e explica falta de espaço a jovem no clube</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2020">26 Novembro, 2024</time>
                              </div>
                            </div>
                          </article>
                  </div>
                  <div class="col-sm-6">
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="#"><img src="images/footer-soccer-post-4-93x87.jpg" alt="" width="93" height="87"/></a></div>
                            <div class="post-classic-main">
                              <!-- Badge-->
                              <div class="badge badge-primary">The League
                              </div>
                              <p class="post-classic-title"><a href="#">Árbitro da Premier League que xingou Liverpool e Klopp é demitido e tem contrato de trabalho rescindido</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2020">05 Dezembro, 2024</time>
                              </div>
                            </div>
                          </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-classic-aside footer-classic-darken">
          <div class="container">
            <div class="layout-justify">
              <!-- Rights-->
              <p class="rights"><span>Futebolisticos</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><span>Direitos Reservados a <a href="https://www.templatemonster.com/products/author/zemez/">Márcio de Orobó</a></span></p>
              <nav class="nav-minimal">
                <ul class="nav-minimal-list">
                  <li class="active"><a href="index.html">Inicio</a></li>
                  <li><a href="#">Noticias</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </footer>
      <!-- Modal Video-->
      <div class="modal modal-video fade" id="modal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="560" height="315" data-src="https://www.youtube.com/embed/uSzNA2_y46c"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>



<div class="container-fluid">
    @yield('content')
</div>


@livewireScripts
</body>
</html>