<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">EDITAR</h1>
<form action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <input type="text" value="<?php echo $v['tiposervicio'] ?>" name="tiposervicio"> <br>
        <input type="text" value="<?php echo $v['precio'] ?>" name="precio"> <br>
        <input type="text" value="<?php echo $v['beneficios'] ?>" name="beneficios"> <br>
        <input type="hidden" value="<?php echo $v['codigo'] ?>" name="codigo"> <br>
        <input type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");