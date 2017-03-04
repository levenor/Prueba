<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/ficha_registro.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form action="" method="POST">
                <h2 style="float:left;color:#686868;">Datos Personales</h2>
                <input name="nombre" type="text" placeholder="Nombre" required/>
                <input name="apaterno" type="text" placeholder="Apellido Paterno" required/>
                <input name="amaterno" type="text" placeholder="Apellido Materno" required/>
                <input name="rut" type="text" placeholder="RUT (10123321k)" required/>
                <input name="fechanacimiento" type="date" placeholder="Fecha de Nacimiento" required/>
                <input name="sexo" type="text" placeholder="SEXO" required/>
                <input name="direccion" type="text" placeholder="Direccion" required/>
                <input name="comuna" type="text" placeholder="Comuna" required/>
                <input name="region" type="text" placeholder="Region" required/>
                <h2 style="float:left;color:#686868;">Caso de emergencia</h2>
                <input name="nomres1" type="text" placeholder="Nombre Responsable 1" />
                <input name="fonres1" type="text" placeholder="Telefono Responsable 1" />
                <input name="mailres1" type="text" placeholder="e-Mail Responsable 1" />
                <hr style="background:white solid">
                <br>
                <input name="nomres2" type="text" placeholder="Nombre Responsable 2" />
                <input name="fonres2" type="text" placeholder="Telefono Responsable 2" />
                <input name="mailres2" type="text" placeholder="e-Mail Responsable 2" />
                <h2 style="float:left;color:#686868;">Con quien vive?</h2>
                <input name="vive" type="text" placeholder="Papá, Mamá, Hermanos, Tios, Abuelos, etc" />
                <h2 style="float:left;color:#686868;">Tipo Insulina</h2>
                <input name="ibolos" type="text" placeholder="BOLOS" required/>
                <input name="ibasal" type="text" placeholder="BASAL" required/>
                
                <button name="submit" type="submit" value="Registrar">registrar</button>
                <p><input type="submit" /></p>
            </form>
            <?php
                include("connection.php");
                if(isset($_POST['submit']))
                {
                    if($_POST['nombre'] == '' or $_POST['apaterno'] == '' or $_POST['amaterno'] == '' or $_POST['rut'] == '' or $_POST['fechanacimiento'] == '' or $_POST['sexo'] == '' or $_POST['direccion'] == '' or $_POST['comuna'] == '' or $_POST['region'] == '')
                    {
                        echo "Debe llenar todo los datos por favor.";
                    }else{
                        $sql = 'SELECT * FROM camp';
                        $rec = mysqli_query($conexion, $sql);
                        $verificar = 0;
                        
                        while($resultado = mysqli_fetch_object($rec))
                        {
                            if($resultado->rut == $_POST['rut'])
                            {
                                $verificar = 1;
                                echo ' <script language="javascript">alert("Campista ya esta registrado");</script> ';
                            }
                        }
                        if($verificar == 0)
                        {
                            $nom = $_POST['nombre'];
                            $apaterno = $_POST['apaterno'];
                            $amaterno = $_POST['amaterno'];
                            $rut = $_POST['rut'];
                            $fechanacimiento = $_POST['fechanacimiento'];
                            $sexo = $_POST['sexo'];
                            $direccion = $_POST['direccion'];
                            $comuna = $_POST['comuna'];
                            $region = $_POST['region'];
                            $nombre_responsable1  = $_POST['nomres1'];
                            $fono_responsable1  = $_POST['fonres1'];
                            $mail_responsable1  = $_POST['mailres1'];
                            $nombre_responsable2  = $_POST['nomres2'];
                            $fono_responsable2  = $_POST['fonres2'];
                            $mail_responsable2  = $_POST['mailres2'];
                            $con_quien_vive  = $_POST['vive'];
                            $ibolo = $_POST['ibolos'];
                            $ibasal = $_POST['ibasal'];
                            $conexion->query("INSERT INTO camp (nombre,apaterno,amaterno,rut,fechanacimiento,sexo,direccion,comuna,region,nomres1,fonres1,mailres,1nomres2,fonres2,mailres2,vive,ibolos,ibasal) VALUES ('$nom','$apaterno','$amaterno','$rut','$fechanacimiento','$sexo','$direccion','$comuna','$region','$nombre_responsable1,'$fono_responsable1,'$mail_responsable1,'$nombre_responsable2,'$fono_responsable2,'$mail_responsable2,'$con_quien_vive','$ibolo','$ibasal')");
                            mysqli_query($conexion,$sql); 
                            //echo ' <script language="javascript">alert("Campista registrado con exito");</script> ';
                                                       
                        }
                    }
                }
            ?>
        </div>
    </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
