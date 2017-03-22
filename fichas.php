<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/fichas.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <section>
                <?php
                    $cn = mysqli_connect('mysql.hostinger.com.ar','u106770093_camp','hola123','u106770093_camp');
                    $rs = mysqli_query($cn, 'SELECT * FROM camp');
                    $n = mysqli_num_rows($rs);             
                ?>
                <table cellspacing="0" cellpadding="0" border="1">
                        <tr>
                            <td>CODIGO</td>
                            <td>CAMPISTA</td>
                            <td>RUT</td>
                            <td>FECHA NACIMIENTO</td>
                            <td>APODERADO RESPONSABLE</td>
                            <td>TELEFONO RESPONSABLE</td>
                            <td>MAIL</td>
                            <td>DIRECCIÓN</td>
                            <td>COMUNA</td>
                            <td>REGIÓN</td>
                            <td>HEMOGLOBINA</td>
                            <td>MEDICAMENTOS</td>
                            <td>PESO</td>
                        </tr>
                        <?php for($i=0;$i<$n;$i++){ ?>
                        <tr>
                            <td><?php echo mysql_result($rs, $i, 'codigo') ?></td>
                            <td>
                                <?php echo mysql_result($rs,$i,'nombre').' '.mysql_result($rs,$i,'apaterno').' '.mysql_result($rs,$i,'amaterno'); ?>
                            </td>
                            <td><?php echo mysql_result($rs,$i,'rut'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'fechanacimiento'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'nomres1'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'fonres1'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'mailres1'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'direccion'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'comuna'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'region'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'hemoglobina'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'medicamento1').' '.mysql_result($rs,$i,'medicamento2').' '.mysql_result($rs,$i,'medicamento3'); ?></td>
                            <td><?php echo mysql_result($rs,$i,'peso'); ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="6" id="texto">
                                <?php echo 'Total de Registrados es de: '.$n; ?>
                            </td>
                        </tr>
                    </table>
            </section>
            <form action="portal.php" style="margin-top:20px;">
                <button name="submit" type="submit" value="volver">VOLVER</button>
            </form>
        </div>
    </div>
</body>
</html>
