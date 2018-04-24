<!--Breadcrump start-->
<section class="breadcrumbSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="breadCont">
                    <h3 class="brTitle">Contato</h3>
                    <div class="bredCrumb">
                        <a href="#">Home</a>
                        <span>/</span>
                        <a href="#">Contato</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrump End-->
<!--Blog start-->
<section class="contactSec2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="ContToppera">
                    <p>
                        Donec eget justo lectus tristique facilisis. Mauris ornare enim ut dui pellentesque,
                        id volutpat elementum. Mauris nec commodo diam. In auctor mi in ante porttitor,
                        ut semper metus lacinia. Suspendisse maximus condimentum ipsum nec aliquet. Phasellus
                        maximus turpis euismod euismod tristique. In sagittis faucibus pulvinar.
                    </p>
                </div>
                <h2 class="commentTitle cont">Contato</h2>
                <div class="commentForm">
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Form->create('Contacts', ["url" => ["Controller" => "Contacts", "action" => "sendmail"]]);?>
                        <div class="row">
                            <div class="col-lg-12 formmargin2">
                                <?php echo $this->Form->input('name', array("label" => false, "placeholder" => "Nome", "class" => "form-control", "required" => true)); ?>
                                <?php echo $this->Form->input('email', array("label" => false, "placeholder" => "Email", "class" => "form-control", "required" => true)); ?>
                                <?php echo $this->Form->input('sub', array("label" => false, "placeholder" => "Assunto", "class" => "form-control", "required" => true)); ?>
                                <?php echo $this->Form->input('message', array("label" => false, "placeholder" => "Mensagem", "class" => "form-control", "type" => "textarea")); ?>                        
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="blogReadmore" id="con_submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="contactInfo">
                    <div class="mapArea">
                        <div id="map" style="width:100%; height: 400px;"></div>
                    </div>
                    <h2 class="commentTitle">Contato</h2>
                    <div class="contAddress">
                        <div class="singleContadds">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Av. Pres. Humberto de Alencar Castelo branco, 72<br>
                                Vila Augusta - Guarulhos - SP - Cep 07040-039
                            </p>
                        </div>
                        <div class="singleContadds phone">
                            <i class="fa fa-phone"></i>
                            <p>
                                <a href="tel:(11) 2408-1035">(11) 2408-1035</a>
                            </p>
                            <p>
                                <a href="tel:(11) 94300-0777">(11) 94300-0777</a>
                            </p>
                        </div>
                        <div class="singleContadds">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:contato@unimetalestruturas.com.br">contato@unimetalestruturas.com.br</a>
                        </div>
                        <div class="contactSocial">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog End-->