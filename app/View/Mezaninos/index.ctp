<!--Breadcrump start-->
<section class="breadcrumbSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="breadCont">
                    <h3 class="brTitle">Mezaninos</h3>
                    <div class="bredCrumb">
                        <a href="<?php echo $this->base?>/Home/index">Home</a>
                            <span>/</span>
                        <a href="#">Mezaninos</a>
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
                    <h2>Mezaninos</h2>
                </div>
                <div class="abCont">
                    <div class="peragroup">
                        <p>
                        O mezanino sob medida é uma estrutura metálica que pode ser planejada e montada em 
                        qualquer ambiente sem interferir no espaço já existente. É utilizado quando há uma 
                        necessidade de melhor aproveitamento do espaço disponível e é frequentemente utilizado 
                        em diversos segmentos para aproveitamento de espaço de forma prática e com baixo custo. 
                        Nestas estruturas podemos montar escritórios, estoques e áreas reservadas em residências, 
                        empresas, casas noturnas, comércios e indústrias.
                        O mezanino metálico tem sido bastante utilizado em diversos locais, pois traz praticidade e em 
                        locais pequenos é possível realizar ampliações sem ser preciso realizar a quebra de paredes e
                        outras obras. Isso faz com que os custos sejam reduzidos, já que não há desperdício de material. 
                        Com o mezanino é possível montar uma estrutura forte, prática e funcional. 

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="abgroupImg">
                    <div class="compaabImg">
                        <img alt="" src="<?php echo $this->base ?>/img/slider/mezanino.jpg">
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
                <h2>Obras Realizadas com Mezaninos</h2>
            </div>
            <div class="col-md-12">
                <?php if(!empty($works)) { ?>
                    <?php foreach($works as $value) { ?>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="singleGall">
                            <div class="singGallImg">
                                <img alt="unimetal mezaninos <?php echo $value["Work"]["title"]?>" src="<?php echo $this->base.'/img/uploads/'.$value["Work"]["image"] ?>" >
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


