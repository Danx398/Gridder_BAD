<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Imagenes Bestias</title>
    <?php
        require_once "dependencias.php";
    ?>
    <?php
        require_once "contenido.php";
        $datos= contenido();
    ?>
</head>
<body style="background-color: #343a40; color: white;">
    <div class="container">
        <h1>Las mejores Bestias de la mítologia</h1>
        <h2>Bestias mitologicas 7u7</h2>
        <!-- Esto se comento por que se va a hacer mas dinamico -->
        <!-- <ul class="gridder">
            <li class="gridder-list" data-griddercontent="#gridder-content-0">
                <img src="img/manticora.jpg">
            </li>
        </ul>
        <div id="gridder-content-0" class="gridder-content">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/manticora.jpg" class="img-responsive"/>
                </div>
                <div class="col-sm-6">
                    <h2>Maticora</h2>
                    <p>La mantícora es una legendaria criatura persa similar a la esfinge egipcia. Tiene el cuerpo de un león, una cabeza humana con tres filas de dientes afilados y a veces alas de murcielago. Otros aspectos de la criatura varían de una historia a otra.</p>
                </div>
            </div>

        </div> -->
        <ul class="gridder">
            <?php
                for ($i=0; $i < count($datos); $i++):
                $d=explode("||", $datos[$i]);
            ?>
            <li class="gridder-list" 
            data-griddercontent = "<?php echo '#gridder-content-'.$i ?>">
                    <img src="<?php echo $d[0]?>">
            </li>
            
            
            
            <?php
                endfor;
            ?>
        </ul>

        <?php
            for ($i=0; $i <count($datos) ; $i++):
            $d=explode("||", $datos[$i]);
        ?>
            <div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                    <img src="<?php echo $d[0]; ?>" class="img-responsive" />
                    </div>
                    <div class="col-sm-6">
                        <h2><?php echo $d[1];?></h2>
                        <p><?php echo $d[2];?></p>
                    </div>
                </div>
            </div>
        <?php
            endfor;
        ?>
    </div>
    
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $(".gridder").gridderExpander({
            scroll: true,
            scrollOffset: 60,
            scrollTo: "listitem",
            animationSpeed: 100,
            animationEasing: "easeInOutExpo",
            showNav: true,
            nextText : "<i class=\"fa fa-arrow-right\"></i>",
            prevText : "<i class = \"fa fa-arrow-left\"></i>",
            closeText: "<i class = \"fa fa-times\"></i>",    
            onStart : function(){
                console.log("Gridder Initialized");
            },
            onConten : function(){
                console.log("Gridder content loaded");
                $(".carousel").carousel();
            },
            onClosed: function(){
                console.log("Gridder Closed");
            }
        });
    });
</script>
