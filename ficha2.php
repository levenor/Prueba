<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos Personales</title>
    <link rel="stylesheet" href="css/ficha_registro.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
                <input name="nomres1" type="text" placeholder="Nombre Responsable 1" required/>
                <input name="fonres1" type="text" placeholder="912345678" required/>
                <input name="mailres1" type="text" placeholder="e-Mail Responsable 1" required/>
                <hr style="background:white solid">
                <br>
                <input name="nomres2" type="text" placeholder="Nombre Responsable 2" />
                <input name="fonres2" type="text" placeholder="912345678" />
                <input name="mailres2" type="text" placeholder="e-Mail Responsable 2" />
                <h2 style="float:left;color:#686868;">Con quién vive?</h2>
                <input name="vive" type="text" placeholder="Papá, Mamá, Hermanos, Tios, Abuelos, etc" />
                <h2 style="float:left;color:#686868;">Escolaridad</h2>
                <input name="curso" type="text" placeholder="En qué curso está actualmente" />
                <input name="colegio" type="text" placeholder="Colegio"/>
                <input name="repitiente" type="text" placeholder="REPITIENTE? SI/NO. AÑO y CURSO" />
                <input name="camcole" type="text" placeholder="CAMBIO COLEGIO? SI/NO. AÑO y CURSO" />
                
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                <!-- //////////////                  HISTORIA MEDICA GENERAL               //////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                <h2 style="float:left;color:#686868;">Historia médica general</h2>
                <input name="previcion" type="text" placeholder="FONASA O ISAPRE. QUE ISAPRE?" required/>
                <h2 style="float:left;color:#686868;">Otras enfermedades</h2>
                <input name="hipertension" type="text" placeholder="HIPERTENSIÓN (Presión alta)" />
                <input name="falla_renal" type="text" placeholder="FALLA RENAL" />
                <input name="celiaco" type="text" placeholder="ENFERMEDAD CELÍACA" />
                <input name="int_lactosa" type="text" placeholder="INTOLERANCIA A LA LACTOSA" />
                <input name="epilepsia" type="text" placeholder="EPILEPSIA" />
                <input name="asma" type="text" placeholder="ASMA" />
                <input name="cirugias" type="text" placeholder="CIRUGÍAS RECIENTES(en el ultimo año)" />
                <input name="cirugiasANT" type="text" placeholder="CIRUGIAS ANTIGUAS" />
                <input name="hipotiroidismo" type="text" placeholder="HIPOTIROIDISMO (usa eutirox, levotiroxina, etc.)" />
                <input name="otras" type="text" placeholder="OTRAS" />
                <h2 style="float:left;color:#686868;">Remedios</h2>
                
                <!-- PRIMERA DOSIS -->
                
                <input name="medicamento1" type="text" placeholder="MEDICAMENTO #1(Eutirox 100mcg)" />
                <div class="col-md-6 col-xs-6">
                    <input name="primeraDosis1" type="text" placeholder="Pimero Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="horaPriDosis1" type="text" placeholder="Hora Dosis" />
                </div>
                <br>
                <div class="col-md-6 col-xs-6">
                    <input name="segundaDosis1" type="text" placeholder="segunda Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="hora2PriDosis1" type="text" placeholder="Hora Dosis" />
                </div>
                <br>
                <div class="col-md-6 col-xs-6">
                    <input name="terceraDosis1" type="text" placeholder="Tercera Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="hora3PriDosis1" type="text" placeholder="Hora Dosis" />
                </div>
                <input name="observaciones1" typer="text" placeholder="Observaciones" />
                
                <!-- FIN -->
                <!-- SEGUNDA DOSIS -->
                
                <input name="medicamento2" type="text" placeholder="MEDICAMENTO #2(Eutirox 100mcg)" />
                <div class="col-md-6 col-xs-6">
                    <input name="primeraDosis2" type="text" placeholder="Pimero Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="horaPriDosis2" type="text" placeholder="Hora Dosis" />
                </div>
                <br>
                <div class="col-md-6 col-xs-6">
                    <input name="segundaDosis2" type="text" placeholder="segunda Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="hora2PriDosis2" type="text" placeholder="Hora Dosis" />
                </div>
                <br>
                <div class="col-md-6 col-xs-6">
                    <input name="terceraDosis2" type="text" placeholder="Tercera Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="hora3PriDosis2" type="text" placeholder="Hora Dosis" />
                </div>
                <input name="observaciones2" typer="text" placeholder="Observaciones" />
                
                <!-- FIN -->
                <!-- TERCERA DOSIS -->
                
                <input name="medicamento3" type="text" placeholder="MEDICAMENTO #3(Eutirox 100mcg)" />
                <div class="col-md-6 col-xs-6">
                    <input name="primeraDosis3" type="text" placeholder="Pimero Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="horaPriDosis3" type="text" placeholder="Hora Dosis" />
                </div>
                <br>
                <div class="col-md-6 col-xs-6">
                    <input name="segundaDosis3" type="text" placeholder="segunda Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="hora2PriDosis3" type="text" placeholder="Hora Dosis" />
                </div>
                <br>
                <div class="col-md-6 col-xs-6">
                    <input name="terceraDosis3" type="text" placeholder="Tercera Dosis" />
                </div>
                <div class="col-md-6 col-xs-6">
                    <input name="hora3PriDosis3" type="text" placeholder="Hora Dosis" />
                </div>
                <input name="observaciones3" typer="text" placeholder="Observaciones" />
                
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                <!-- ////////////// ////////                 SALUD MENTAL            ////////////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                
                <h2 style="float:left;color:#686868;">Salud mental.</h2>
                <br>
                <P style="float:left;color:#686868;">HA RECIBIDO ATENCIÓN PSICOLÓGICA EN ALGÚN MOMENTO DE SU VIDA:</P>
                <input name="atencionPsicologica" type="text" placeholder="SI/NO AÑO y MOTIVO" />
                <P style="float:left;color:#686868;">HA RECIBIDO ATENCIÓN PSIQUIATRICA EN ALGÚN MOMENTO DE SU VIDA:</P>
                <input name="atencionPsiquiatrica" type="text" placeholder="SI/NO AÑO y MOTIVO" />
                <P style="float:left;color:#686868;">HA CONSUMIDO MEDICAMENTOS RECETADOS POR UN PSIQUIATRA:</P>
                <input name="consumidoMedicamentos" type="text" placeholder="SI/NO AÑO y MOTIVO" />
                <P style="float:left;color:#686868;">HA PRESENTADO ALGUNOS DE ESTOS DIAGNÓSTICOS:</P>
                <br><br><br>               
                <div class="col-md-6">
                    <input name="depresion" type="text" placeholder="DESPRESIÓN" />
                </div>
                <div class="col-md-6">
                    <input name="trastornoBipolar" type="text" placeholder="TRASTORNO BIPOLAR" />
                </div>
                <div class="col-md-6">
                    <input name="trastornoAnsioso" type="text" placeholder="TRASTORNO ANSIOSO" />
                </div>
                <div class="col-md-6">
                    <input name="deficitAtencional" type="text" placeholder="DEFICIT ATENCIONAL" />
                </div>
                <div class="col-md-6">
                    <input name="otrosTrastornos" type="text" placeholder="OTROS:" />
                </div>
                <br><br><br><br><br><br><br><br><br><br>
                <P style="float:left;color:#686868;">HA RECIBIDO ATENCIÓN PSICOLÓGICA DENTRO DEL ÚLTIMO AÑO:</P>
                <input name="atencionPsicologicaUltimoAno" type="text" placeholder="SI/NO AÑO y MOTIVO" />
                <h2 style="float:left;color:#686868;">Ejercicio</h2>
                <input name="ejercicio" type="text" placeholder="SI/NO // NÚMERO DE VECES POR SEMANA: // CUÁNTAS HORAS:" />
                <h2 style="float:left;color:#686868;">Autocontrol</h2>
                <input name="seInyectaSolo" type="text" placeholder="SE INYECTA SOLO: SI/NO" />
                <div class="col-md-6">
                    <input name="brazo" type="text" placeholder="BRAZOS SI/NO" />
                </div>
                <div class="col-md-6">
                    <input name="piernas" type="text" placeholder="PIERNAS SI/NO" />
                </div>
                <div class="col-md-6">
                    <input name="abdomen" type="text" placeholder="ABDOMEN SI/NO" />
                </div>
                <div class="col-md-6">
                    <input name="gluteos" type="text" placeholder="GLUTEOS SI/NO" />
                </div>
                <input name="rota" type="text" placeholder="ROTA SITIO INYECCIÓN: SI/NO" />
                <input name="hipoglicemiasSeveras" type="text" placeholder="HIPOGLICEMIAS SEVERAS: SI/NO" />
                <input name="hospitalizacionCetona" type="text" placeholder="HOSPITALIZACIÓN POR CETOACIDOSIS: SI/NO" />
                <input name="complicaciones" type="text" placeholder="COMPLICACIONES: (NEUROPATÍA, NEFROPATÍA, PERIODONTITIS, RETINOPATÍA)" />
                
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                <!-- ///////////////////                 FICHA MÉDICA DIABETES            ///////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                
                <h2 style="float:left;color:#686868;">FICHA MÉDICA DIABETES</h2>
                <br><br><br><br><br>
                <div class="col-xs-6"> 
                    <input name="peso" type="text" placeholder="PESO: Kg" />
                </div>
                <div class="col-xs-6">
                    <input name="altura" type="text" placeholder="ALTURA: cm" />
                </div>
                <input name="tiempoDiabetes" type="text" placeholder="TIEMPO CON DIABETES (año o meses):" />
                <input name="nomMedico" type="text" placeholder="NOMBRE MÉDICO DIABETES AUGE:" />
                <input name="telefMedico" type="text" placeholder="TELÉFONO: " />
                <input name="lugarAtencion" type="text" placeholder="LUGAR: " />
                <hr>
                <input name="nomMedicoPart" type="text" placeholder="NOMBRE MÉDICO PARTICULAR:" />
                <input name="telefMedicoPart" type="text" placeholder="TELÉFONO: " />
                <input name="lugarAtencionPart" type="text" placeholder="LUGAR: " />
                <input name="controlMedico" type="text" placeholder="FECHA ÚLTIMO CONTROL MÉDICO: (mes y año)" />
                <h3 style="float:left;color:#686868;">VALOR ÚLTIMA HEMOGLOBINA</h3>
                <br><br><br><br><br>
                <div class="col-xs-6">
                    <input name="hemoglobina" type="text" placeholder="8,0" />
                </div>
                <div class="col-xs-6">
                    <input name="fechaHemoglobina" type="text" placeholder="FECHA HEMOGLOBINA (mes/año)" />
                </div>
                <input name="realizada" type="text" placeholder="REALIZADA: FDJ / HOSPITAL O CLÍNICA / PARTICULAR (LABORATORIO)" />
                <h3 style="float:left;color:#686868;">TRATAMIENTO DIABETES</h3>
                <div class="col-xs-12">
                    <input name="esquema" type="text" placeholder="ESQUEMA: FIJO/VARIABLE/MIXTO/BOMBA DE INSULINA" />
                    <input name="tiempoEsquema" type="text" placeholder="TIEMPO ESQUEMA: (mes/año)" />
                </div>
                <div class="col-xs-6">
                    <input name="sensor" type="text" placeholder="USO DEL SENSOR: CUAL?" />
                </div>
                <div class="col-xs-6">
                    <input name="freeStyleLibre" type="text" placeholder="Free syle libre: SI/NO" />
                </div>
                <h3 style="float:left;color:#686868;">HIDRATOS DE CARBONO POR COMIDA </h3>
                <table border="1" width="650" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><input name="desayuno" type="text" placeholder="DESAYUNO"></td>
                        <td><input name="colacion" type="text" placeholder="COLACION"></td>
                        <td><input name="almuerzo" type="text" placeholder="ALMUERZO"></td>
                        <td><input name="once" type="text" placeholder="ONCE"></td>
                        <td><input name="comida" type="text" placeholder="COMIDA"></td>
                        <td><input name="noche" type="text" placeholder="NOCHE"></td>
                    </tr>
                </table>
                <br>
                
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                <!-- //////////////                  HISTORIA MEDICA GENERAL               //////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                
                <h2 style="float:left;color:#686868;">ESQUEMA INSULINA FIJO</h2>
                <input name="ibolos" type="text" placeholder="TIPO DE BOLOS (NOVORRAPID, APIDRA, HUMALOG, RAPIDA)" />
                <table border="1" width="650" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>DESAYUNO</td>
                        <td>COLACION</td>
                        <td>ALMUERZO</td>
                        <td>ONCE</td>
                        <td>COMIDA</td>
                        <td>NOCHE</td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="FijoBoloDesayunoRango" style="width: 110px;height: 150px;min-height: 100px;max-height: 150px;max-width: 110px;" placeholder="> 90 = 0"></textarea>
                        </td>
                        <td>
                            <textarea name="FijoBoloColacionRango" style="width: 110px;height: 150px;min-height: 100px;max-height: 150px;max-width: 110px;" placeholder="> 90 = 0"></textarea>
                        </td>
                        <td>
                            <textarea name="FijoBoloAlmuerzoRango" style="width: 110px;height: 150px;min-height: 100px;max-height: 150px;max-width: 110px;" placeholder="> 90 = 0"></textarea>
                        </td>
                        <td>
                            <textarea name="FijoBoloOnceRango" style="width: 110px;height: 150px;min-height: 100px;max-height: 150px;max-width: 110px;" placeholder="> 90 = 0"></textarea>
                        </td>
                        <td>
                            <textarea name="FijoBoloComidaRango" style="width: 110px;height: 150px;min-height: 100px;max-height: 150px;max-width: 110px;" placeholder="> 90 = 0"></textarea>
                        </td>
                        <td>
                            <textarea name="FijoBoloNocheRango" style="width: 110px;height: 150px;min-height: 100px;max-height: 150px;max-width: 110px;" placeholder="> 90 = 0"></textarea>
                        </td>
                    </tr>
                </table>
                <br>
                <input name="ibasal" type="text" placeholder="TIPO DE BASAL (NPH, LEVEMIR, LANTUS, TRESIBA)" />    
                <table border="1" width="650" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>DESAYUNO</td>
                        <td>ALMUERZO</td>
                        <td>ONCE</td>
                        <td>COMIDA</td>
                        <td>NOCHE</td>
                        <td>EXTRA</td>
                    </tr>
                    <tr>
                        <td>
                            <input name="DocisBasalDesayuno" type="text" placeholder="DOCIS">
                            <input name="HorarioBasalDesayuno" type="text" placeholder="HORARIO">
                        </td>
                        <td>
                            <input name="DocisBasalAlmuerzo" type="text" placeholder="DOCIS">
                            <input name="HorarioBasalAlmuerzo" type="text" placeholder="HORARIO">
                        </td>
                        <td>
                            <input name="DocisBasalOnce" type="text" placeholder="DOCIS">
                            <input name="HorarioBasalOnce" type="text" placeholder="HORARIO">
                        </td>
                        <td>
                            <input name="DocisBasalComida" type="text" placeholder="DOCIS">
                            <input name="HorarioBasalComida" type="text" placeholder="HORARIO">
                        </td>
                        <td>
                            <input name="DocisBasalNoche" type="text" placeholder="DOCIS">
                            <input name="HorarioBasalNoche" type="text" placeholder="HORARIO">
                        </td>
                        <td>
                            <input name="DocisBasalExtra" type="text" placeholder="DOCIS">
                            <input name="HorarioBasalExtra" type="text" placeholder="HORARIO">
                        </td>
                    </tr>
                </table>
                <br>
                
                <h2 style="float:left;color:#686868;">ESQUEMA VARIABLE</h2>
                <input name="ibolos" type="text" placeholder="TIPO DE BOLOS (NOVORRAPID, APIDRA, HUMALOG, RAPIDA)" />
                <input name="ibasal" type="text" placeholder="TIPO DE BASAL (NPH, LEVEMIR, LANTUS, TRESIBA)" />
                <br>
                <table border="1" width="650" cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="padding:15px;">DOSIS SEGÚN RATIO DE H. de C. (Horario)</td>
                        <td style="padding:15px;">CORRECCIONES DE GLICEMIA (Horario)</td>
                        <td style="padding:15px;">BASALES (Horario)</td>
                    </tr>
                    <tr>
                        <td style="padding:15px;">
                            <textarea name="VariableBolosHdeC" style="width: 250px;height: 150px;min-height: 100px;max-height: 150px;max-width: 250px;" type="text" placeholder="Colocar Horario (Ej: 1x7)" ></textarea>
                        </td>
                        <td style="padding:15px;">
                            <textarea name="VariableBolosGlicemia" style="width: 250px;height: 150px;min-height: 100px;max-height: 150px;max-width: 250px;" type="text" placeholder="Colocar Formula (Ej: 1x30 Ideal=100)"></textarea>
                        </td>
                        <td style="padding:15px;">
                            <textarea name="VariableBasal" style="width: 250px;height: 150px;min-height: 100px;max-height: 150px;max-width: 250px;" type="text" placeholder="Colocar cantidad"></textarea>
                        </td>
                    </tr>
                </table>
                <br>
                <h2 style="float:left;color:#686868;">ESQUEMA BOMBA INSULINA</h2>
                <input name="ibolos" type="text" placeholder="TIPO DE BOLOS (NOVORRAPID, HUMALOG)" />
                <input name="ibasal" type="text" placeholder="TIPO DE BASAL (NPH, LEVEMIR, LANTUS, TRESIBA)" />
                <input name="duracionInsulinaActiva" type="text" placeholder="DURACION INSULINA ACTIVA (HORAS)" />
                <div class="col-xs-6 col-sm-4" >
                    <input name="basalesTemporales" type="text" placeholder="UTILIZA BASALES TEMPORALES ? (SI / NO)" />
                </div>
                <div class="col-xs-6 col-sm-4" >
                    <input name="bolosDuales" type="text" placeholder="UTILIZA BOLOS DUALES ? (SI / NO)" />
                </div>
                <div class="col-xs-6 col-sm-4" >
                    <input name="bolosCuadrados" type="text" placeholder="UTILIZA BOLOS CUADRADOS ? (SI / NO)" />
                </div>
                <input name="sensorContinuo" type="text" placeholder="UTILIZA  SENSOR CONTINUO DE GLICEMIA ? (SI / NO / VECES AL DIA)" />
                <br>
                <table border="1" width="650" cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="padding:15px;">FACTOR CORRECCIÓN O SENSIBILIDAD</td>
                        <td style="padding:15px;">RATIO DE CARBOHIDRATOS</td>
                        <td style="padding:15px;">BASALES</td>
                    </tr>
                    <tr>
                        <td style="padding:15px;">
                            <textarea name="factorSensibilidadBombaHorario" style="width: 150px;height: 110px;min-height: 110px;max-height: 150px;max-width: 250px;" type="text" placeholder="HORARIO"></textarea>
                            <textarea name="factorSensibilidadBombaRelacion" style="width: 150px;height: 110px;min-height: 110px;max-height: 150px;max-width: 250px;" type="text" placeholder="RELACIÓN"></textarea>
                        </td>
                        <td style="padding:15px;">
                            <textarea name="ratioHdeCBombaHorario" style="width: 150px;height: 110px;min-height: 110px;max-height: 150px;max-width: 250px;" type="text" placeholder="HORARIO"></textarea>
                            <textarea name="ratioHdeCBombaRelacion" style="width: 150px;height: 110px;min-height: 110px;max-height: 150px;max-width: 250px;" type="text" placeholder="RELACIÓN"></textarea>
                        </td>
                        <td style="padding:15px;">
                            <textarea name="basalesBombaHorario" style="width: 150px;height: 110px;min-height: 110px;max-height: 150px;max-width: 250px;" type="text" placeholder="HORARIO"></textarea>
                            <textarea name="basalesBombaRelacion" style="width: 150px;height: 110px;min-height: 110px;max-height: 150px;max-width: 250px;" type="text" placeholder="RELACIÓN"></textarea>
                        </td>
                    </tr>
                </table>
                <br>
                <button name="submit" type="submit" value="registro">REGISTRO</button>
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
                            $curso = $_POST['curso'];
                            $colegio = $_POST['colegio'];
                            $repitiente = $_POST['repitiente'];
                            $cambio_colegio = $_POST['camcole'];
                            $previcion = $_POST['previcion'];
                            $hipertension = $_POST['hipertension'];
                            $falla_renal = $_POST['falla_renal'];
                            $celiaco = $_POST['celiaco'];
                            $int_lactosa = $_POST['int_lactosa'];
                            $epilepsia = $_POST['epilepsia'];
                            $asma = $_POST['asma'];
                            $cirugias = $_POST['cirugias'];
                            $cirugiasANT = $_POST['cirugiasANT'];
                            $hipotiroidismo = $_POST['hipotiroidismo'];
                            $otras = $_POST['otras'];
                            $medicamento1 = $_POST['medicamento1'];
                            $primeraDosis1 = $_POST['primeraDosis1'];
                            $horaPriDosis1 = $_POST['horaPriDosis1'];
                            $segundaDosis1 = $_POST['segundaDosis1'];
                            $hora2PriDosis1 = $_POST['hora2PriDosis1'];
                            $terceraDosis1 = $_POST['terceraDosis1'];
                            $hora3PriDosis1 = $_POST['hora3PriDosis1'];
                            $observaciones1 = $_POST['observaciones1'];
                            $medicamento2 = $_POST['medicamento2'];
                            $primeraDosis2 = $_POST['primeraDosis2'];
                            $horaPriDosis2 = $_POST['horaPriDosis2'];
                            $segundaDosis2 = $_POST['segundaDosis2'];
                            $hora2PriDosis2 = $_POST['hora2PriDosis2'];
                            $terceraDosis2 = $_POST['terceraDosis2'];
                            $hora3PriDosis2 = $_POST['hora3PriDosis2'];
                            $observaciones2 = $_POST['observaciones2'];
                            $medicamento3 = $_POST['medicamento3'];
                            $primeraDosis3 = $_POST['primeraDosis3'];
                            $horaPriDosis3 = $_POST['horaPriDosis3'];
                            $segundaDosis3 = $_POST['segundaDosis3'];
                            $hora2PriDosis3 = $_POST['hora2PriDosis3'];
                            $terceraDosis3 = $_POST['terceraDosis3'];
                            $hora3PriDosis3 = $_POST['hora3PriDosis3'];
                            $observaciones3 = $_POST['observaciones3'];
                            $atencionPsicologica = $_POST['atencionPsicologica'];
                            $atencionPsiquiatrica = $_POST['atencionPsiquiatrica'];
                            $consumidoMedicamentos = $_POST['consumidoMedicamentos'];
                            $depresion = $_POST['depresion'];
                            $trastornoBipolar = $_POST['trastornoBipolar'];
                            $trastornoAnsioso = $_POST['trastornoAnsioso'];
                            $deficitAtencional = $_POST['deficitAtencional'];
                            $otrosTrastornos = $_POST['otrosTrastornos'];
                            $atencionPsicologicaUltimoAno = $_POST['atencionPsicologicaUltimoAno'];
                            $ejercicio = $_POST['ejercicio'];
                            $seInyectaSolo = $_POST['seInyectaSolo'];
                            $brazo = $_POST['brazo'];
                            $piernas = $_POST['piernas'];
                            $abdomen = $_POST['abdomen'];
                            $gluteos = $_POST['gluteos'];
                            $rota = $_POST['rota'];
                            $hipoglicemiasSeveras = $_POST['hipoglicemiasSeveras'];
                            $hospitalizacionCetona = $_POST['hospitalizacionCetona'];
                            $complicaciones = $_POST['complicaciones'];
                            $peso = $_POST['peso'];
                            $altura = $_POST['altura'];
                            $tiempoDiabetes = $_POST['tiempoDiabetes'];
                            $nomMedico = $_POST['nomMedico'];
                            $telefMedico = $_POST['telefMedico'];
                            $lugarAtencion = $_POST['lugarAtencion'];
                            $nomMedicoPart = $_POST['nomMedicoPart'];
                            $telefMedicoPart = $_POST['telefMedicoPart'];
                            $lugarAtencionPart = $_POST['lugarAtencionPart'];
                            $controlMedico = $_POST['controlMedico'];
                            $hemoglobina = $_POST['hemoglobina'];
                            $fechaHemoglobina = $_POST['fechaHemoglobina'];
                            $realizada = $_POST['realizada'];
                            $esquema = $_POST['esquema'];
                            $tiempoEsquema = $_POST['tiempoEsquema'];
                            $sensor = $_POST['sensor'];
                            $freeStyleLibre = $_POST['freeStyleLibre'];
                            $desayuno = $_POST['desayuno'];
                            $colacion = $_POST['colacion'];
                            $almuerzo = $_POST['almuerzo'];
                            $once = $_POST['once'];
                            $comida = $_POST['comida'];
                            $noche = $_POST['noche'];
                            $ibolo = $_POST['ibolos'];
                            $ibasal = $_POST['ibasal'];
                            $fijoBoloDesayunoRango = $_POST['FijoBoloDesayunoRango'];
                            $FijoBoloColacionRango = $_POST['FijoBoloColacionRango'];
                            $fijoBoloAlmuerzoRango = $_POST['FijoBoloAlmuerzoRango'];
                            $fijoBoloOnceRango = $_POST['FijoBoloOnceRango'];
                            $fijoBoloComidaRango = $_POST['FijoBoloComidaRango'];
                            $fijoBoloNocheRango = $_POST['FijoBoloNocheRango'];
                            $DocisBasalDesayuno = $_POST['DocisBasalDesayuno'];
                            $HorarioBasalDesayuno = $_POST['HorarioBasalDesayuno'];
                            $DocisBasalAlmuerzo = $_POST['DocisBasalAlmuerzo'];
                            $HorarioBasalAlmuerzo = $_POST['HorarioBasalAlmuerzo'];
                            $DocisBasalOnce = $_POST['DocisBasalOnce'];
                            $HorarioBasalOnce = $_POST['HorarioBasalOnce'];
                            $DocisBasalComida = $_POST['DocisBasalComida'];
                            $HorarioBasalComida = $_POST['HorarioBasalComida'];
                            $DocisBasalNoche = $_POST['DocisBasalNoche'];
                            $HorarioBasalNoche = $_POST['HorarioBasalNoche'];
                            $DocisBasalExtra = $_POST['DocisBasalExtra'];
                            $HorarioBasalExtra = $_POST['HorarioBasalExtra'];
                            $variableBolosHdeC = $_POST['VariableBolosHdeC'];
                            $variableBolosGlicemia = $_POST['VariableBolosGlicemia'];
                            $variableBasal = $_POST['VariableBasal'];
                            $duracionInsulinaActiva = $_POST['duracionInsulinaActiva'];
                            $basalesTemporables = $_POST['basalesTemporables'];
                            $bolosDuales = $_POST['bolosDuales'];
                            $bolosCuadrados = $_POST['bolosCuadrados'];
                            $sensorContinuo = $_POST['sensorContinuo'];
                            $factorSensibilidadBombaHorario = $_POST['factorSensibilidadBombaHorario'];
                            $factorSensibilidadBombaRelacion = $_POST['factorSensibilidadBombaRelacion'];
                            $ratioHdeCBombaHorario = $_POST['ratioHdeCBombaHorario'];
                            $ratioHdeCBombaRelacion = $_POST['ratioHdeCBombaRelacion'];
                            $basalesBombaHorario = $_POST['basalesBombaHorario'];
                            $basalesBombaRelacion =$_POST['basalesBombaRelacion'];
                            $conexion->query("INSERT INTO camp (nombre,apaterno,amaterno,rut,fechanacimiento,sexo,direccion,comuna,region,nomres1,fonres1,mailres1,nomres2,fonres2,mailres2,vive,curso,colegio,repitiente,camcole,previcion,hipertension,falla_renal,celiaco,int_lactosa,epilepsia,asma,cirugias,cirugiasANT,hipotiroidismo,otras,medicamento1,primeraDosis1,horaPriDosis1,segundaDosis1,hora2PriDosis1,terceraDosis1,hora3PriDosis1,observaciones1,medicamento2,primeraDosis2,horaPriDosis2,segundaDosis2,hora2PriDosis2,terceraDosis2,hora3PriDosis2,observaciones2,medicamento3,primeraDosis3,horaPriDosis3,segundaDosis3,hora2PriDosis3,terceraDosis3,hora3PriDosis3,observaciones3,atencionPsicologica,atencionPsiquiatrica,consumidoMedicamentos,depresion,trastornoBipolar,trastornoAnsioso,deficitAtencional,otrosTrastornos,atencionPsicologicaUltimoAno,ejercicio,seInyectaSolo,brazo,piernas,abdomen,gluteos,rota,hipoglicemiasSeveras,hospitalizacionCetona,complicaciones,peso,altura,tiempoDiabetes,nomMedico,telefMedico,lugarAtencion,nomMedicoPart,telefMedicoPart,lugarAtencionPart,controlMedico,hemoglobina,fechaHemoglobina,realizada,esquema,tiempoEsquema,sensor,freeStyleLibre,desayuno,colacion,almuerzo,once,comida,noche,ibolos,ibasal,FijoBoloDesayunoRango,FijoBoloColacionRango,FijoBoloAlmuerzoRango,FijoBoloOnceRango,FijoBoloComidaRango,FijoBoloNocheRango,DocisBasalDesayuno,HorarioBasalDesayuno,DocisBasalAlmuerzo,HorarioBasalAlmuerzo,DocisBasalOnce,HorarioBasalOnce,DocisBasalComida,HorarioBasalComida,DocisBasalNoche,HorarioBasalNoche,DocisBasalExtra,HorarioBasalExtra,VariableBolosHdeC,VariableBolosGlicemia,VariableBasal,duracionInsulinaActiva,basalesTemporables,bolosDuales,bolosCuadrados,sensorContinuo,factorSensibilidadBombaHorario,factorSensibilidadBombaRelacion,ratioHdeCBombaHorario,ratioHdeCBombaRelacion,basalesBombaHorario,basalesBombaRelacion) VALUES ('$nom','$apaterno','$amaterno','$rut','$fechanacimiento','$sexo','$direccion','$comuna','$region','$nombre_responsable1','$fono_responsable1','$mail_responsable1','$nombre_responsable2','$fono_responsable2','$mail_responsable2','$con_quien_vive','$curso','$colegio','$repitiente','$cambio_colegio','$previcion','$hipertension','$falla_renal','$celiaco','$int_lactosa','$epilepsia','$asma','$cirugias','$cirugiasANT','$hipotiroidismo','$otras','$medicamento1','$primeraDosis1','$horaPriDosis1','$segundaDosis1','$hora2PriDosis1','$terceraDosis1','$hora3PriDosis1','$observaciones1','$medicamento3','$primeraDosis3','$horaPriDosis3','$segundaDosis3','$hora2PriDosis3','$terceraDosis3','$hora3PriDosis3','$observaciones3','$medicamento3','$primeraDosis3','$horaPriDosis3','$segundaDosis3','$hora2PriDosis3','$terceraDosis3','$hora3PriDosis3','$observaciones3','$atencionPsicologica','$atencionPsiquiatrica','$consumidoMedicamentos','$depresion','$trastornoBipolar','$trastornoAnsioso','$deficitAtencional','$otrosTrastornos','$atencionPsicologicaUltimoAno','$ejercicio','$seInyectaSolo','$brazo','$piernas','$abdomen','$gluteos','$rota','$hipoglicemiasSeveras','$hospitalizacionCetona','$complicaciones','$peso','$altura','$tiempoDiabetes','$nomMedico','$telefMedico','$lugarAtencion','$nomMedicoPart','$telefMedicoPart','$lugarAtencionPart','$controlMedico','$hemoglobina','$fechaHemoglobina','$realizada','$esquema','$tiempoEsquema','$sensor','$freeStyleLibre','$desayuno','$colacion','$almuerzo','$once','$comida','$noche','$ibolo','$ibasal','$fijoBoloDesayunoRango','$FijoBoloColacionRango','$fijoBoloAlmuerzoRango','$fijoBoloOnceRango','$fijoBoloComidaRango','$fijoBoloNocheRango','$DocisBasalDesayuno','$HorarioBasalDesayuno','$DocisBasalAlmuerzo','$HorarioBasalAlmuerzo','$DocisBasalOnce','$HorarioBasalOnce','$DocisBasalExtra','$HorarioBasalExtra','$variableBolosHdeC','$variableBolosGlicemia','$variableBasal','$duracionInsulinaActiva','$basalesTemporables','$bolosDuales','$bolosCuadrados','$sensorContinuo','$factorSensibilidadBombaHorario','$factorSensibilidadBombaRelacion','$ratioHdeCBombaHorario','$ratioHdeCBombaRelacion','$basalesBombaHorario','$basalesBombaRelacion')");
                            mysqli_query($conexion,$sql); 
                            //echo ' <script language="javascript">alert("Campista registrado con exito");</script> ';
                            echo "<script>location.href='portal.php'</script>";
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
