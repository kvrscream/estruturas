<!DOCTYPE html>
<html>
<head>
    <title>Painel Unimetal</title>
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
    ?>

    <link rel="icon" type="image/png" href="<?php echo $this->base ?>/favicon.ico">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
    <?php echo $this->fetch('content'); ?>      
    </div>
  </div>

<?php
echo $this->Html->script("jquery");
echo $this->Html->script("bootstrap");
?>
</body>
</html>
