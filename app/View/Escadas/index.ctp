<!--Breadcrump start-->
<section class="breadcrumbSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="breadCont">
                    <h3 class="brTitle">Escadas e Guarda-Copos</h3>
                    <div class="bredCrumb">
                        <a href="<?php echo $this->base?>/Home/index">Home</a>
                            <span>/</span>
                        <a href="#">Escadas e Guarda-Copos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrump End-->
<section class="compAboutSecAbPage">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 aboutConWrap noPaddingRight">
                <div class="commonSectionTitleIn">
                    <h2>Escadas e Guarda-Copos</h2>
                </div>
                <div class="abCont">
                    <div class="peragroup">
                        <p>
                        Escadas de incêndio são itens obrigatórios em edifícios e devem seguir todas as normas de instalação, uso e acessibilidade. Assim, quando se fizer necessário a utilização da escada de incêndio, o uso das escadas de incêndio ocorrerá de forma satisfatória e sem demais problemas.
                        </p>
                        <p>
                        Trabalhamos com produção e instalação das escadas de incêndio.
                        As escadas metálicas de emergência, são peças fundamentais para a segurança das edificações. A utilização destas implica na proteção em áreas externas às edificações. Nestes casos, o revestimento intumescente, quando protegido por um top coat, é a alternativa mais recomendada para se proteger a parte estrutural da mesma.
                        Utilizando sempre o melhor material para a produção das escadas de incêndio, elas são escadas usinada e parafusada, degraus com chapa xadrez antiderrapante, guarda corpo feito com tubos redondos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="abgroupImg">
                    <div class="compaabImg">
                        <img alt="unimetal escadas e guarda-copos metálicos" src="<?php echo $this->base ?>/img/slider/mezanino.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="compAboutSecAbPage">
    <div class="container">
        <div class="row"> 
            <div class="commonSectionTitleIn">
                <h2>Obras Realizadas com Escadas e Guarda-Copos</h2>
            </div>
            <div class="col-md-12">
                <?php if(!empty($works)) { ?>
                    <?php foreach($works as $value) { ?>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="singleGall">
                            <div class="singGallImg">
                                <img alt="unimetal escadas e guarda-copos <?php echo $value["Work"]["title"]?>" src="<?php echo $this->base.'/img/uploads/'.$value["Work"]["image"] ?>" class="img-responsive" >
                            </div>
                            <div class="gallHover">
                                <a class="popUp" href="<?php echo $this->base.'/img/uploads/'.$value["Work"]["image"] ?>"><i class="fa fa-search"></i></a>
                            </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


