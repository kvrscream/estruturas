<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $description ?> Unimetal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#00475B">

    <meta name="description" content="A Unimetal é pioneira em construções metálicas. Trazendo alta qualidade em produtos como Estruturas Metálicas, Escadas, Escadas de Emergência, Guarda-Corpos, Mezaninos, Coberturas e Telhados." />

    <meta name="keywords" content="Estruturas Metálicas, Estruturas em Aço, Escadas, Escadas de Emergência, Guarda-Corpos, Mezaninos, Mezaninos Metálicos, Coberturas, Telhados, Guarulhos" />

    <meta name="author" content="Felipe Botelho && Gilmar" />
    <meta name="robots" content="index, follow" />
    
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="Copyright" content="" />
    <meta name="Publisher" content="" />
    <meta name="city" content="Guarulhos" />
    <meta name="country" content="Brazil" />
    <meta name="distribution" content="Global" />
    <!-- Include All CSS -->
    <?php
    echo $this->Html->css("bootstrap.min");
    echo $this->Html->css("font-awesome.min");
    echo $this->Html->css("animate");
    echo $this->Html->css("settings");
    echo $this->Html->css("owl.carousel");
    echo $this->Html->css("owl.theme");
    echo $this->Html->css("magnific-popup");    
    echo $this->Html->css("select2");
    echo $this->Html->css("preset");
    echo $this->Html->css("style");
    echo $this->Html->css("responsive");
    ?>

    <link rel="icon" type="image/png" href="<?php echo $this->base ?>/favicon.ico">

</head>
<body>
    <!--Fundo do Header do menu com theme do telhados manter as imagens de links para site
    revestimentos em ACM -- mais os demais
    -->
    <!--Header middle start-->
    <section class="headerMiddle bg-topo">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <div class="logo">
                        <a href="<?php echo $this->base ?>/Home/index">
                            <img src="<?php echo $this->base ?>/img/logo.png" alt="logo unimetal estruturas" width="125">
                        </a>
                    </div>
                </div>
                <div class="col-sm-9 col-xs-12 text-right hidden-xs">
                    <div class="headerMRightinfo">
                        <div class="singlehmib">
                            <i class="fa fa-mobile-phone"></i>
                            <h2>Contatos</h2>
                            <h4>
                                <a href="tel:(11) 2408-1035">(11) 2408-1035</a>
                            </h4>
                            <!-- <h4>
                                2408-1035 | 2229-6985<br/>
                                (11) 9 4300-0777
                            </h4>  -->
                        </div>
                        <div class="singlehmib">
                            <i class="fa fa-envelope-o"></i>
                            <h2>Email</h2>
                            <a href="mailto:contato@unimetalestruturas.com.br">contato@unimetalestruturas.com.br</a>
                        </div>
                        <div class="singlehmib">
                            <i class="fa fa-clock-o"></i>
                            <h2>
                                Horário de Trabalho
                            </h2>
                            <h4>8:00 - 18:00 </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Header Start-->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-sm-12">
                    <nav class="mainnav">
                        <div class="logoMobile hidden-lg hidden-sm hidden-md">
                            <a href="#">
                                <img alt="" src="<?php echo $this->base ?>/img/logo.png" alt="unimetal projetos estruturas" width="75">
                            </a>
                        </div>
                        <div class="mobileMenu hidden-lg hidden-sm hidden-md">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li><a href="<?php echo $this->base?>/Home/index">Home</a></li>
                            <li class="has-menu-items">
                                <a href="#">Serviços</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo $this->base?>/Estruturas/index">Estruturas Metálicas</a></li>
                                    <li> <a href="<?php echo $this->base?>/Escadas/index">Escadas e Guarda-Copos</a> </li>
                                    <li><a href="<?php echo $this->base?>/Mezaninos/index">Mezaninos</a></li>
                                    <li><a href="<?php echo $this->base?>/Portoes/index">Portões</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo $this->base?>/Home/galeria">Obras</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->base?>/Orcamentos/index">Orçamento</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->base?>/Contacts/index">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <div class="socialmedia">
                        <a href="https://www.facebook.com/Unimetal-Estruturas-Met%C3%A1licas-184954381874979/?fref=ts" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/Unimetaloficial" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://plus.google.com/114072746702090898634" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->
    <!--Header middle End-->
    <?php echo $this->Flash->render(); ?>

    <?php echo $this->fetch('content'); ?>
    <!--Client End-->
    <!--Footer Start-->
    <!--MEsmo esquema do telhados-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget">
                        <h3 class="fotterTitle">SOBRE</h3>
                        <p class="fotinfo">
                            A Unimetal é pioneira em construções metálicas.
                            Trazendo alta qualidade em produtos como: Estruturas Metálicas, Escadas, Guarda-Copos, Mezaninos, Coberturas e Telhados. 
                        </p>
                        <div class="footerLogo">
                            <a href="#">
                                <img src="<?php echo $this->base ?>/img/logo2.png" alt="logo unimetal estruturas footer" width="100">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-lg hidden-xs"></div>
                <div class="col-lg-4 col-sm-4">
                    <div class="widget">
                        <h3 class="fotterTitle">NAVEGAÇÃO</h3>
                        <ul class="navigation">
                            <li><a href="<?php echo $this->base?>/Home/index">Home</a></li>
                            <li><a href="<?php echo $this->base?>/Estruturas/index">Estruturas Metálicas</a></li>
                            <li><a href="<?php echo $this->base?>/Escadas/index">Escadas e Guarda-Copos</a></li>
                            <li><a href="<?php echo $this->base?>/Mezaninos/index">Mezaninos</a></li>
                            <li><a href="<?php echo $this->base?>/Portoes/index">Portões</a></li>
                            <li><a href="<?php echo $this->base?>/Home/galeria">Obras</a></li>
                            <li><a href="<?php echo $this->base?>/Orcamentos/index">Orçamento</a></li>
                            <li><a href="<?php echo $this->base?>/Contacts/index">Fale Conosco</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="widget">
                        <h3 class="fotterTitle">CONTATO</h3>
                        <p class="contactText">
                            Entre em contato
                        </p>
                        <div class="address">
                            <div class="singleAdds">
                                <i class="fa fa-map-marker"></i>
                                <p>Av. Pres. Humberto de Alencar Castelo branco, 72</p>
                            </div>
                            <div class="singleAdds">
                                <p>Vila Augusta - Guarulhos - SP - Cep 07040-039</p>
                            </div>
                            <div class="singleAdds">
                                <i class="fa fa-phone"></i>                                
                                <a href="tel:(11) 2408-1035">(11) 2408-1035</a>
                            </div>
                            <div class="singleAdds">
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:contato@unimetalestruturas.com.br">contato@unimetalestruturas.com.br</a>
                            </div>
                        </div>
                        <div class="footerSocial">
                            <a href="https://www.facebook.com/Unimetal-Estruturas-Met%C3%A1licas-184954381874979/?fref=ts" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/Unimetaloficial" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://plus.google.com/114072746702090898634" target="_blank">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->
    <!--Copy Right start-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <p><a href="https://emntec.com.br/" target="_blank">EMNTEC</a></p>
                </div>
                <div class="col-sm-6 col-xs-12 text-right">
                    <p><?php echo date("Y") ?> <a href="#"> Unimetal Estruturas</a> Todos os direitos Reservados.</p>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!--Copy Right End-->
    <a href="#" id="backToTop"><i class="fa fa-angle-up"></i></a>
    <!-- Include All JS -->
    <?php
    echo $this->Html->script("jquery");
    echo $this->Html->script("bootstrap");
    echo $this->Html->script("jquery.themepunch.revolution.min");
    echo $this->Html->script("jquery.themepunch.tools.min");     
    echo $this->Html->script("owl.carousel");
    echo $this->Html->script("https://maps.googleapis.com/maps/api/js?key=AIzaSyAEjz6baqLSKCVeQMayzZOK-n8Qo7C1byM");
    echo $this->Html->script("gmaps");
    echo $this->Html->script("jquery.magnific-popup");   
    echo $this->Html->script("wow.min");
    echo $this->Html->script("mixer");
    echo $this->Html->script("select2.full");
    echo $this->Html->script("theme");
    ?>
</body>
</html>
