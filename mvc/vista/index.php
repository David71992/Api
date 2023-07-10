<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table>
    <tr>
        <td>CODIGO</td>
        <td>TIPO SERVICIO</td>
        <td>PRECIO</td>  
        <td>BENEFICIOS</td>
        <td>ACCION</td>   
    </tr>
    <tbody>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['codigo'] ?> </td>
                        <td><?php echo $v['tipo servicio'] ?> </td>
                        <td><?php echo $v['precio'] ?> </td>
                        <td><?php echo $v['beneficios'] ?> </td>
                        <td>
                            <a class="btn" href="index.php?m=editar&codigo=<?php echo $v['codigo']?>">EDITAR</a>
                            <a class="btn" href="index.php?m=eliminar&codigo=<?php echo $v['codigo']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">SIN INFORMACION REGISTRADA</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");