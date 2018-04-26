<!--Breadcrump start-->
<section class="breadcrumbSec commonSection">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-left">
            <div class="breadCont">
               <h3 class="brTitle">Galeria - Obras Realizadas</h3>
               <div class="bredCrumb">
                  <a href="#">Home</a>
                  <span>/</span>
                  <a href="#">Galeria</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Breadcrump End-->
<!--gallary start-->
<section class="gallarySec">
   <div class="container">
        <?php if(!empty($works)) { ?>
            <?php foreach($works as $value) { ?>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <img src="<?php echo $this->base.'/img/uploads/'.$value["Work"]["image"]; ?>" class="img-responsive" alt="unimetal obras <?php echo $value["Work"]["title"]; ?>" />
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="abCont">
                        <div class="peragroup">
                            <?php echo $value["Work"]["text"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <?php } ?>
        <?php } ?>      
   </div>
</section>
<!--gallary End-->