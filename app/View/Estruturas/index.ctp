<!--Breadcrump start-->
<section class="breadcrumbSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="breadCont">
                    <h3 class="brTitle">Estruturas Metálicas</h3>
                    <div class="bredCrumb">
                        <a href="<?php echo $this->base?>/Home/index">Home</a>
                            <span>/</span>
                        <a href="#">Estruturas Metálicas</a>
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
                    <h2>Estruturas Metálicas</h2>
                </div>
                <div class="abCont">
                    <div class="peragroup">
                        <p>
                          Estruturas metálicas sãocomo o próprio nome diz uma estrutura feita em algum tipo de
                          metal. Ela é usada para suportes internos e externos como telhados de galpões, quadras 
                          garagens, lojas, supermercados e etc.
                          <br />
                          <label>Precisão:</label>
                            Calculada em milímetros, a estrutura metálica possui maior exatidão, alinhamento e prumo, otimizando a montagem e facilitando o desenvolvimento com trabalhos de esquadrias e elevadores, reduzindo o custo com revestimentos.
                          <br /> 
                          <label>Liberdade para o Arquiteto:</label>
                            A flexibilidade do aço permite infinitas formas e conceitos arquitetônicos.
                          <br />
                          <label>  Flexibilidade no Projeto: </label>
                            Em caso de ampliações, reformas ou mudanças, a estrutura metálica permite rápida adaptação do edifício.
                          <br />
                          <label>Menor Prazo de Obra:</label>
                            As estruturas são fabricadas em paralelo com as fundações, que através de uma montagem planejada, rápida e limpa, resulta em uma redução de até 40% no tempo de execução da obra.
                          <br />
                          <label>Resistência: </label>

                            O aço supera qualquer outro material de construção na relação resistência/peso, resultando em menores cargas nas fundações.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="abgroupImg">
                    <div class="compaabImg">
                        <img alt="estruturas metálicas unimetal" class="img-responsive" src="<?php echo $this->base ?>/img/gallery/estrutura.jpg">
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
                <h2>Obras Realizadas</h2>
            </div>
            <div class="col-md-12">
                <?php if(!empty($works)) { ?>
                    <?php foreach($works as $value) { ?>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="singleGall">
                            <div class="singGallImg">
                                <img alt="unimetal mezaninos <?php echo $value["Work"]["title"]?>" src="<?php echo $this->base.'/img/uploads/'.$value["Work"]["image"] ?>" class="img-responsive" >
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


