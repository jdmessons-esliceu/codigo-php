<?php
$pageTitle = "Galeria";
require __DIR__ . "/includes/header.php";
$dir = __DIR__ . "/images";
$files = scandir($dir);
?>

<h1>Galeria WEB</h1>

<div class="galeria">
    <?php
    foreach($files as $file){
        if($file=="." || $file==".."){
            continue;
        }
        $cadena=strpos($file,"thumb");
        if($cadena){
            ?>
            <img src="images/<?=$file?>" alt="">
        <?php
        }
    }
?>
</div>

<?php
require __DIR__ . "/includes/footer.php";