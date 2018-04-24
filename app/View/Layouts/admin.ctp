<!DOCTYPE html>
<html>
<head>
    <title> Painel Unimetal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#00475B">

    <meta name="description" content="A Unimetal é pioneira em construções metálicas. Trazendo alta qualidade em produtos como Estruturas Metálicas, Escadas, Guarda-Copos, Mezaninos, Coberturas e Telhados." />

    <meta name="keywords" content="Estruturas Metálicas, Estruturas em Aço, Escadas, Guarda-Copos, Mezaninos, Mezaninos Metálicos, Coberturas, Telhados, Guarulhos" />

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
    echo $this->Html->css("sb-admin");
    echo $this->Html->css("font-awesome.min");
    echo $this->Html->css("select2");
    ?>

    <link rel="icon" type="image/png" href="<?php echo $this->base ?>/favicon.ico">

</head>
<body>
    <div id="wrapper">
        <!--Header middle start-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Unimetal</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Cakesession::read("Auth.User.username"); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo $this->base ?>/users/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo $this->base ?>/Dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->base ?>/Categories"><i class="fa fa-fw fa-globe"></i> Categorias</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->base ?>/Products"><i class="fa fa-fw fa-industry"></i> Produtos</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->base ?>/works"><i class="fa fa-fw fa-briefcase"></i> Obras</a>
                    </li>
                    <!-- <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!--Header middle End-->
        <?php echo $this->Flash->render(); ?>
        <div id="page-wrapper">
         <div class="container-fluid"> 
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <!--Copy Right start-->
    <section class="copyright">
        <div class="container-fluid">
            <div class="row">              
                <div class="col-sm-6 col-xs-12">      
                    &nbsp;              
                </div>
                <div class="col-sm-6 col-xs-12 text-right">
                    <p><?php echo date("Y") ?> <a href="#"> Unimetal Estruturas</a> Todos os direitos Reservados.</p>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<!--Copy Right End-->
<a href="#" id="backToTop"><i class="fa fa-angle-up"></i></a>
<!-- Include All JS -->
<?php
echo $this->Html->script("jquery");
echo $this->Html->script("bootstrap");
echo $this->Html->script("select2.full");
?>
</body>
</html>
