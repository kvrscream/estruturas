<!--Breadcrump start-->
<section class="breadcrumbSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="breadCont">
                    <h3 class="brTitle">Portões</h3>
                    <div class="bredCrumb">
                        <a href="<?php echo $this->base?>/Home/index">Home</a>
                            <span>/</span>
                        <a href="#">Portões</a>
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
                    <h2>Portões</h2>
                </div>
                <div class="abCont">
                    <div class="peragroup">
                        <p>
                        O portão automático é muito usado em prédios e condomínios por questão de segurança. 
                        Mas em casas de rua o uso também é muito recomendado, pois além de reforçar a segurança do seu patrimônio, 
                        poupa o tempo gasto para abrir um portão manual que muitas vezes é pesado.
                        </p>
                        <p>
                        O portão comum requer que a pessoa saia do carro para poder abri-lo e durante esse tempo, está sujeito à tentativas de invasão e assaltos. Já o portão automático é aberto ao acionar um controle remoto, assim, não há a necessidade de sair do carro para abrir ou fechar, dando praticidade ao usuário.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="abgroupImg">
                    <div class="compaabImg">
                        <img alt="unimetal portões metálicos" src="<?php echo $this->base ?>/img/slider/mezanino.jpg" class="img-responsive">
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
                <h2>Obras Realizadas com Portões</h2>
            </div>
            <div class="col-md-12">
                <?php if(!empty($works)) { ?>
                    <?php foreach($works as $value) { ?>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="singleGall">
                            <div class="singGallImg">
                                <img alt="unimetal portões <?php echo $value["Work"]["title"]?>" src="<?php echo $this->base.'/img/uploads/'.$value["Work"]["image"] ?>" class="img-responsive" >
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


