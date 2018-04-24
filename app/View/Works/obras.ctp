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
<section class="gallarySec">
   <div class="container">
      <div class="row">
         <?php if(!empty($works)) { ?>
            <?php foreach ($works as $work) { ?>
               <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="singleGall">
                     <div class="singGallImg">
                        <img alt="" src="<?php echo $this->base.'/img/uploads'.$work["Work"]["image"]; ?>" class="img-responsive" alt='<?php echo $work["Work"]["image"]; ?>'>
                     </div>
                     <div class="gallHover">
                        <a class="popUp" href="<?php echo $this->base.'/img/uploads'.$work["Work"]["image"]; ?>"><i class="fa fa-search"></i></a>
                        <span><?php echo $work["Work"]["text"]; ?></span>
                     </div>
                  </div>
               </div>
            <?php } ?>
         <?php } ?>
      </div>
   </div>
</section>