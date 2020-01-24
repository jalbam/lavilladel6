<?php
    //Se configura el BBClone:
    define("_BBC_PAGE_NAME", "catalan online");
    define("_BBCLONE_DIR", "../bbclone/");
    define("COUNTER", _BBCLONE_DIR."mark_page.php");
    if (is_readable(COUNTER)) include_once(COUNTER);

/*
    Error:
           * A veces el codigo de javascript no deja escribir el "A" de "DAR" con segun que objetos (al poner DAR, objeto, A... el A no se esribe).
    Falta: 
           * Accion HABLAR y DECIR (poder decir la frase exacta o bien DECIR x donde x es una letra o numero de frase expuesta).
           * Acciones ABRIR, CERRAR.
           * Propiedades en los objetos: "activar_al_moverse", "activar_al_abrirse", "activar_al_cerrarse", "activar_al_usarse", etc. (proxima version)
           * Que haya objetos que puedan usarse/moverse, etc. infinitamente y otros solo una vez (como ahora)
           * En mover y usar y usar con: calcular si los objetos y salidas que activa el objeto al usarse estan o no activados, y si no lo estan activarlos y mostrarlos con un echo.
           * Cambiar la frase "Otra vez no, gracias." por "No hace falta" o algo parecido al USARSE. 
           * Poner links de javascript solo si soporta javascript = enabled, si no no.
           * Usar css para links y ponerlo todo mas bonito en general.
           * Activar/desactivar salidas, objetos, etc. al mirar, abrir, cerrar, usar, etc... y no solo al usarse o moverse (y diferente para cada accion).
           * Que para utilizar algo, deba estar en el inventario! no vay a ser que utilicen una llave del paisaje con una puerta (o mejor si??? pensarlo bien).
           * Poner todo en "no puedo" o todo en "no puedes", decidirse por primera o segunda persona.
           * Poner el inventario en tablas.
           * Poner variable $lugar_para_acabar_el_juego, y cuando llega ahi no mostrar objetos ni salidas. Solo la descripcion y la frase "Fin de juego" (o similar) o bien $usar_objeto_para_acabar_juego = "OBJETO" (o las dos cosas) (al final de la funcion komprobar si el objeto esta aktivado y si es asi se akabe el juego).
           * Usar la propiedad "IR" de los objetos, para poder activarlos y poder ir a ellos (o mejor quitar esto?).
           * Al usar un objeto, poder activar/desactivar la propiedad COGER de otro.
           * Algunas frases (como al activar salidas y objetos) mejor guardarlas en variables y representarlas despues de "$usar_texto" y no antes.
           * Usar un fondo (bg) en una tabla dentro del TD, donde los paisajes, con una imagen. Y poner las imagenes de los objetos encima. El problema esta en las coordenadas de posicionamiento de estos en el paisaje...
           * Usar imagenes en el inventario (de inventario/x.jpg y inventario/x_a.jpg para los activados).
           * Poner las salidas con flechas o algo asi igual que los objetos (en lugares.php poner la posicion x e y del este, del oeste, etc. de cada salida).
           * Pôder hacer que objetos activados usen su_id.jpg o su_id.gif sin el _a detras del nombre.
           * Pasar los .jpg a .gif para que ocupen menos (en paisajes mas que nada). Calcular si han ocupado menos o mas y decidirse.
           * Calcular SID para los navegadores que no reconocen o no aceptan las cookies y ponerlo en los <a href>
           * Opcion de ver mapa, con una X donde ponga: tu estas aqui. (Y si apretas click en otro lugar, que vaya alli(?))
           * Crear directorio inventario y poner imagenes
           * Doctype en index.php, ayuda.php, etc. (los ke lo precisen solo)
           * Usar meta-tags
           * Focalizar input text despues de darle a "ver mapa"
           * Cambiar include por require si asi es mas conveniente.
           * Un <HR> entre "HAS ELEGIDO blablabla" y lo que viene luego (coger la blabla, o "no puedo coger eso", etc. calcular si no va a haber frase no hacer HR)

           * Corregir faltas ortigraficas (hacha es femenino, aunque se diga el hacha, etc.). 
           * Un index "frase" en cada objeto para que al estar disponible muestre una frase. Ejemplo: "Puedes ver una llave al fondo del pasillo".
           * Al poner CON o A si no hay nada escrito o lo que hay escrito al principio no es una ACCION, decir: NO SE HA SELECCIONADO UNA ACCION TODAVIA.
           * Posicionar las imagenes de posicon absoluta de los objetos debajo del nombre de estos o encima, asi se vera korrektamente en navegadores k no soporten CSS.

    Parece ya estar:
           //* Coordenadas distintas para los objetos activados ($HTTP_SESSION_VARS["objetos"][1]["left_position_activado"] y $HTTP_SESSION_VARS["objetos"][1]["top_position_activado"])
           //* Poder poner nombres de mas de una palabra a los objetos: llave diminuta, perro hambriento, etc.
           //* Function activar (para activar objetos o salidas).
           //* Un objeto desactivado no puede utilizarse. No se puede coger si no esta activado.
           //* el poder usarse debe ser reciproco: perro puede usarse con hueso, y hueso con perro. pero no puede usarse hueso con perro ni perro con hueso si el perro ya no esta rabioso (calcular reciprocidad mutua y comprobar nombres).
           //* Distinguir entre DAR A y USAR CON. Calcular si esta animado (tiene vida) el objeto o no.
           //* Crear una $HTTP_SESSION_VARS["objetos"][x]["alternar_estado_al_activar"], para cuando se use un objeto este desaparezca si queremos del paisaje (ejemplo: gato ahuyentado al usar silbato).
           //* Usar unas variables en objetos que en lugar de activar objetos o lugares, los desactiven (desactivar_lugar_al_usar, etc. por ejemplo).
           //* Usar frase_inicial y frase_final en funcion describir_lugar
           //* Desactivar algunos objetos al utilizarse!!! como por ejemplo al dar dinero al vendedor... el dinero debe desaparecer (y hueso con perro) (probar a poner el hueso en el mismo habitakulo ke el vendedor y usarlo... tambien deberia desaparecer) -> el problema esta en ke no debe desaparecer tumba al usarse si no hueso (ke es el mismo objeto) -> ("desactivar_objeto" = "ponerse a si mismo", kuando este en el inventario borrarlo (poner a FALSE))
*/       

/*
    Programa realizado por Yasmina Llaveria del Castillo (yas@granvino.com) y Joan Alba Maldonado (granvino@granvino.com)
*/


//Se otorga a la sesion el nombre "lavilladelseis":
session_name("lavilladelseis");
//Se abre la sesion:
session_start(); //session_start("lavilladelseis"); //For PHP5 compatibility (Added on 26 SEP 2018).

//For PHP5 compatibility (Added on 26 SEP 2018):
if (!isset($HTTP_GET_VARS) || isset($_GET)) { $HTTP_GET_VARS = &$_GET; }
if (!isset($HTTP_SESSION_VARS) || isset($_SESSION)) { $HTTP_SESSION_VARS = &$_SESSION; }

//Variable para indicar cual es este archivo:
$this_file = "index.php";

//Variable para añadir si hay SID:
//if (SID) { $sesion = SID; }
//else { $sesion = "cookies=ok"; }
$sesion = (SID) ? SID : "cookies=ok";

//Se incluye el archivo que contiene la funcion "realizar_accion":
include "procesar.php";

//Se incluye el archivo que contiene los objetos:
include "objetos.php";

//Se incluye el archivo que contiene los lugares:
include "lugares.php";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

    <head>
        <title>La vila del sis</title>

        <!--     Programa por Yasmina Llaveria del Castillo y Joan Alba Maldonado      -->
        <!--                  yas@granvino.com y granvino@granvino.com                 -->

        <meta http-equiv="imagetoolbar" content="no">
        <link rel="SHORTCUT ICON" href="favicon.ico">


        <?php
//            if (!isset($HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]) && !isset($HTTP_GET_VARS["javascript_soportado"]))
            if (!isset($HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]))
             {
                $HTTP_SESSION_VARS["javascript_soportado_invisibilidad"] = "visible";
                
                echo "<script language=\"JavaScript1.2\" type=\"text/javascript\">\n";
                echo "<!--\n";

                ?>
                if (document.getElementsByTagName) {
                <?php

                if (SID) { echo "  location.href=\"".$this_file."?javascript_soportado=si&" . session_name() . "=". session_id() ."\";\n"; }
                else { echo "  location.href=\"".$this_file."?javascript_soportado=si\n"; }
                ?>
                }
                <?php

                echo "//-->\n";
                echo "</script>\n";
             }
//            else if (isset($HTTP_GET_VARS["javascript_soportado"])) { $HTTP_SESSION_VARS["javascript_soportado_invisibilidad"] = (urldecode(trim($HTTP_GET_VARS["javascript_soportado"])) == "si" || isset($HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]) && $HTTP_SESSION_VARS["javascript_soportado_invisibilidad"] == "si") ? "hidden": "visible"; }
            else if (isset($HTTP_GET_VARS["javascript_soportado"])) { $HTTP_SESSION_VARS["javascript_soportado_invisibilidad"] = (urldecode(trim($HTTP_GET_VARS["javascript_soportado"])) == "si") ? "hidden": "visible"; }
        ?>



        <script language="JavaScript" type="text/javascript">
        <!--

            //if (document.getElementById) { var formulario; }
            var formulario;

            function abrir_ayuda()
             {
                ventana_ayuda = window.open( 'ayuda.php<?php if (SID) { echo "?".SID; } ?>','ayudayq','scrollbars=yes,menubar=no,height=400,width=450,resizable=yes,toolbar=no,location=no,status=no');
                //formulario.comando.focus();
                document.formulario.comando.focus();
                ventana_ayuda.focus();
             }

            function abrir_mapa(estancia, n, s, e, o)
             {
                ventana_mapa = window.open( 'mapa.php?estancia='+estancia+'&n='+n+'&s='+s+'&e='+e+'&o='+o+'<?php if (SID) { echo "&".SID; } else { echo "&cookies=ok"; } ?>','ayudayq','scrollbars=yes,menubar=no,height=640,width=640,resizable=yes,toolbar=no,location=no,status=no');
                //formulario.comando.focus();
                document.formulario.comando.focus();
                ventana_mapa.focus();
             }

            function poner_texto(palabra)
             {
                //Si el juego se ha acabado, sale de la funcion:
                <?php if ($HTTP_SESSION_VARS["estancia"] == $lugar_para_acabar_el_juego) { echo "document.formulario.comando.disabled = false; document.formulario.comando.focus(); document.formulario.comando.style.background=\"#333333\"; document.formulario.comando.disabled = true; return;"; } else { echo "document.formulario.comando.disabled = false; document.formulario.comando.style.background=\"#dddddd\";"; } ?>

                //var formulario = document.getElementById("formulario");
                
                palabra = palabra.toUpperCase();
                accion = document.formulario.comando.value.toUpperCase();
                document.formulario.comando.value = accion;
    
                longitud = accion.length;
                for (x=0;x<=longitud;x++)
                 {
                    if (accion.substring(accion.length - 1, accion.length) == ' ') { accion = accion.substring(0, accion.length - 1); document.formulario.comando.value = document.formulario.comando.value.substring(0, document.formulario.comando.value.length - 1); }
                    if (accion.substring(0, 1) == ' ') { accion = accion.substring(1, accion.length); document.formulario.comando.value = document.formulario.comando.value.substring(1, document.formulario.comando.value.length); }
                 }
                
                if (palabra != 'BORRAR')
                 {
                    if (palabra == 'AGAFAR' || palabra == 'USAR' || palabra == 'DONAR' || palabra == 'ANAR' || palabra == 'MIRAR' || palabra == 'MOURE')
                     {
                        if (accion.substring(0,6) == 'COGER ') { document.formulario.comando.value = palabra + accion.substring(5,accion.length); }
                        else if (accion.substring(0,5) == 'USAR ') { document.formulario.comando.value = palabra + accion.substring(4,accion.length); }
                        else if (accion.substring(0,4) == 'DAR ') { document.formulario.comando.value = palabra + accion.substring(3,accion.length); }
                        else if (accion.substring(0,3) == 'IR ') { document.formulario.comando.value = palabra + accion.substring(2,accion.length); }
                        else if (accion.substring(0,6) == 'MIRAR ') { document.formulario.comando.value = palabra + accion.substring(5,accion.length); }
                        else if (accion.substring(0,6) == 'MOVER ') { document.formulario.comando.value = palabra + accion.substring(5,accion.length); }
                        else
                         {
                            if (accion == "AGAFAR" || accion == "USAR" || accion == "DONAR" || accion == "ANAR" || accion == "MIRAR" || accion == "MOURE") { document.formulario.comando.value = palabra; }
                            else { document.formulario.comando.value = palabra + ' ' + document.formulario.comando.value; }
                         }
                        
                        if (palabra != 'USAR' && document.formulario.comando.value.indexOf(' AMB ', 0) > 0) { document.formulario.comando.value = document.formulario.comando.value.replace(document.formulario.comando.value, document.formulario.comando.value.substring(0, document.formulario.comando.value.indexOf(' AMB ', 0))) + ' '; }
                        if (palabra != 'USAR' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 4, document.formulario.comando.value.length) == ' AMB') { document.formulario.comando.value = document.formulario.comando.value.substring(0, document.formulario.comando.value.length - 4) + ' '; }
                        if (palabra != 'DONAR' && document.formulario.comando.value.indexOf(' A ', 0) > 0) { document.formulario.comando.value = document.formulario.comando.value.replace(document.formulario.comando.value, document.formulario.comando.value.substring(0, document.formulario.comando.value.indexOf(' A ', 0))) + ' '; }
                        if (palabra != 'DONAR' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 2, document.formulario.comando.value.length) == ' A') { document.formulario.comando.value = document.formulario.comando.value.substring(0, document.formulario.comando.value.length - 2) + ' '; }
                     }
                    else
                     {
                        if(palabra == 'AMB' && document.formulario.comando.value != 'AGAFAR' && document.formulario.comando.value != 'USAR' && document.formulario.comando.value != 'DONAR' && document.formulario.comando.value != 'ANAR' && document.formulario.comando.value != 'MIRAR' && document.formulario.comando.value != 'MOURE' && document.formulario.comando.value.substring(0,5) != 'USAR ' && document.formulario.comando.value.substring(0,6) != 'AGAFAR ' && document.formulario.comando.value.substring(0,4) != 'DONAR ' && document.formulario.comando.value.substring(0,3) != 'ANAR ' && document.formulario.comando.value.substring(0,6) != 'MIRAR ' && document.formulario.comando.value.substring(0,6) != 'MOURE ' || palabra == 'A' && document.formulario.comando.value != 'AGAFAR' && document.formulario.comando.value != 'USAR' && document.formulario.comando.value != 'DONAR' && document.formulario.comando.value != 'ANAR' && document.formulario.comando.value != 'MIRAR' && document.formulario.comando.value != 'MOURE' && document.formulario.comando.value.substring(0,5) != 'USAR ' && document.formulario.comando.value.substring(0,6) != 'AGAFAR ' && document.formulario.comando.value.substring(0,4) != 'DONAR ' && document.formulario.comando.value.substring(0,3) != 'ANAR ' && document.formulario.comando.value.substring(0,6) != 'MIRAR ' && document.formulario.comando.value.substring(0,6) != 'MOURE ') { alert('Primer tens que escollir una accio'); }
                        else if (palabra == 'AMB' && document.formulario.comando.value.substring(0,4) != 'USAR' && document.formulario.comando.value != 'USAR' && formulario.comando.value != '' || palabra == 'A' && document.formulario.comando.value.substring(0,3) != 'DONAR' && document.formulario.comando.value != 'DONAR' && formulario.comando.value != '') { document.formulario.comando.value = document.formulario.comando.value; alert('No pots utilizar \"' + palabra + '\" amb aquesta accio'); }
                        else if(palabra == 'AMB' && formulario.comando.value == '' || palabra == 'A' && formulario.comando.value == '') { alert('Primer has de escollir una accio'); }
                        else if(palabra == 'AMB' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 4, document.formulario.comando.value.length) == ' AMB' || palabra == 'AMB' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 5, document.formulario.comando.value.length) == ' AMB ') { document.formulario.comando.value = document.formulario.comando.value; }
                        else if(palabra == 'A' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 2, document.formulario.comando.value.length) == ' A' || palabra == 'A' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 3, document.formulario.comando.value.length) == ' A ') { document.formulario.comando.value = document.formulario.comando.value; }
                        else if(palabra == 'AMB' && document.formulario.comando.value == 'USAR' || palabra == 'A' && document.formulario.comando.value == 'DONAR' || palabra == 'AMB' && document.formulario.comando.value == 'USAR ' || palabra == 'A' && document.formulario.comando.value == 'DONAR ')
                         {
                            alert('Primer tens que indicar un objecte');
                         }
                        else
                         {
                            if (document.formulario.comando.value.substring(document.formulario.comando.value.length - palabra.length, document.formulario.comando.value.length) == palabra || document.formulario.comando.value.substring(document.formulario.comando.value.length - palabra.length - 1, document.formulario.comando.value.length) == palabra + ' ') { document.formulario.comando.value = document.formulario.comando.value; }
                            else if (document.formulario.comando.value == '') { document.formulario.comando.value = palabra; }
                            else { document.formulario.comando.value = document.formulario.comando.value + ' ' + palabra + ' '; }
                         }
                     }
                 }
                else { document.formulario.comando.value = ''; }
                
                //formulario.comando.focus();
                formulario.comando.focus();
             
             }
            
            //Funcion que hace visibles los tags <IMG> que estan con "visibility:hidden;":
            function hacer_visible_todo()
             {
                 if (!document.getElementsByTagName) { return; }
                 
                 for (x=0; x<document.getElementsByTagName("img").length; x++)
                  {
                     if (document.getElementsByTagName("img").item(x).className == "invisible")
                      {
                         document.getElementsByTagName("img").item(x).style.visibility = "visible";
                      }
                  }
                 for (x=0; x<document.getElementsByTagName("div").length; x++)
                  {
                     if (document.getElementsByTagName("div").item(x).className == "invisible")
                      {
                         document.getElementsByTagName("div").item(x).style.visibility = "visible";
                      }
                  }
             }

            //Funcion que pone los enlaces para abrir el mapa y la ayuda en una ventana de javascript en lugar de en una _blank:
            function mapa_y_ayuda()
            {
                if (document.getElementById) { document.getElementById('mapa_y_ayuda').innerHTML = '<font size="2"><a href="javascript:abrir_mapa(<?php if (isset($HTTP_SESSION_VARS["estancia"])) { echo $HTTP_SESSION_VARS["estancia"]; } else { echo "0"; } ?>);" title="Obrir finestra amb el mapa">Veure mapa</a> - <a href="javascript:abrir_ayuda();" title="Obrir finestra d\'ajuda">Ajuda</a></font>'; }
            }

        // -->
        </script>

        <style type="text/css">
        <!--
            A { text-decoration:none; }
            A:active { color:#ffbb00; }
            A:hover { color:#ffdd00; }
        -->
        </style>

    </head>

 <!--   <body bgcolor="#000000" text="#ffffff" link="#bb7600" alink="#ff7600" vlink="#bb7600" onLoad="document.getElementById('formulario').comando.focus(); hacer_visible_todo(); mapa_y_ayuda(); <?php if ($HTTP_SESSION_VARS["estancia"] == $lugar_para_acabar_el_juego) { echo "document.getElementById('formulario').comando.style.background='#333333'; document.getElementById('formulario').comando.disabled = true;"; } else { echo "document.getElementById('formulario').comando.disabled = false; document.getElementById('formulario').comando.style.background='#dddddd';"; } ?>"> -->
    <body bgcolor="#000000" text="#ffffff" link="#bb7600" alink="#ff7600" vlink="#bb7600" onLoad="if (document.getElementById) { formulario = document.getElementById('formulario'); } else { formulario = document.formulario; }<?php if (!isset($HTTP_GET_VARS["javascript_soportado"])) { echo " formulario.comando.focus();"; } ?> hacer_visible_todo(); <?php if ($HTTP_SESSION_VARS["estancia"] == $lugar_para_acabar_el_juego) { echo "formulario.comando.style.background='#333333'; formulario.comando.disabled = true;"; } else { echo "formulario.comando.disabled = false; formulario.comando.style.background='#dddddd';"; } ?>" leftmargin="0" topmargin="10" marginwidth="0" marginheight="10">

        <center>

        <!--<h1>La villa del seis</h1>-->
        <img src="title.gif" width="400" height="43" alt="La vila del sis" title="La vila del sis" hspace="0" vscpace="0">
        <br>
        <br>

        <!-- Recordar: poner background ademas de bgcolor -->
        <table width="580" border="0" bgcolor="#ffffff" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" bgcolor="#333333">
                    <!-- <table width="580" height="10" border="0" bgcolor="#ff2233" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                    <center>
                    <img src="paisajes/<?php echo $HTTP_SESSION_VARS["estancia"]; ?>.jpg" width="540" height="240" align="center">
                    </center> -->
                    <table width="580" height="10" border="0" bgcolor="#333333" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                    <table width="540" border="1" bgcolor="#000000" cellspacing="0" cellpadding="10" style="border:1px solid #222222;">
                        <tr>
                            <td style="font-family:arial; font-size:12px; color:#ffffff; border:1px solid #222222;">
                                <?php
                                    //Se incluye el archivo que valida lo que se envia (si se ha enviado algo):
                                    include "validar.php";

                                    //Se describe el lugar:
                                    describir_lugar($HTTP_SESSION_VARS["estancia"]);
                                ?>
                            </td>
                        </tr>
                    </table>
                    <table width="580" height="10" border="0" bgcolor="#333333" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#111111" style="font-family:arial; font-size:12px; color:#bbbbbb;">
                    <table width="580" height="10" border="0" bgcolor="#111111" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                    <center>
                    <form method="get" action="<?php echo $this_file; ?>" style="display:inline;" name="formulario" id="formulario" onSubmit="if (document.formulario.comando.value == '') { return false; }">
                        <?php if (SID) { echo '<input type="hidden" name="'.session_name().'" value="'.session_id().'">'; } ?>
                        [<a href="javascript:poner_texto('BORRAR');" alt="Esborrar text escrit" title="Esborrar text escrit">Esborrar</a>] <input type="text" name="comando" value="" size="50" style="background-color:#dddddd; font-family:verdana; font-size:14px; line-height:18px; height:24px; border:1px solid #000000; padding-left:4px;" tabindex="1" accesskey="t" title="Ordre a executar (tecla d'acc&eacute;s r&agrave;pid: t)"> <input type="submit" name="boton" value="Ok" style="font-family:arial; font-weight:bold; cursor:pointer; cursor:hand; font-size:12px; line-height:12px; height:24px;" tabindex="2" accesskey="k" title="Executar ordre (tecla d'acc&eacute;s r&agrave;pid: k)">
                        <?php if (isset($HTTP_GET_VARS["comando"]) && trim($HTTP_GET_VARS["comando"]) != "" && isset($HTTP_SESSION_VARS["primera_vez_comando"]) ) { echo "<br>Comando anterior: <b>".htmlentities(stripslashes(strtoupper(trim(urldecode($HTTP_GET_VARS["comando"])))))."</b>"; } else { $HTTP_SESSION_VARS["primera_vez_comando"] = TRUE; }?>
                    </form>
                    </center>
                    <table width="580" height="10" border="0" bgcolor="#111111" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>                    
                </td>
            </tr>
            <tr>
                <td align="left" bgcolor="#333333">
                    <table width="580" height="10" border="0" bgcolor="#333333" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>                    
                    <center>
                    <table width="540" border="0" bgcolor="#333333" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                            <td width="540" align="center" bgcolor="#333333">
                            
                                <center>    
                                <table border="1" width="530" style="border:1px solid #000000;">
                                    <tr>
                                        <td valign="top" align="center" style="border:1px solid #000000;">
                                            <center>
                                            <table bgcolor="#111111" border="1" width="330" align="center" style="font-family:arial; font-size:14px; font-weight:bold; color:#bbbbbb; border:1px solid #000000;">
                                                <tr>
                                                    <td align="center" style="border:1px solid #555555;" width="110"><b><a href="javascript:poner_texto('AGAFAR');" alt="AGAFAR" title="AGAFAR">AGAFAR</a></b></td>
                                                    <td align="center" style="border:1px solid #555555;" width="110"><b><a href="javascript:poner_texto('USAR');" alt="USAR" title="USAR">USAR</a></b> (<a href="javascript:poner_texto('AMB');" alt="AMB" title="AMB">AMB</a>)</td>
                                                    <td align="center" style="border:1px solid #555555;" width="110"><b><a href="javascript:poner_texto('DONAR');" alt="DONAR" title="DONAR">DONAR</a></b> (<a href="javascript:poner_texto('A');" alt="A" title="A">A</a>)</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="border:1px solid #555555;" width="110"><b><a href="javascript:poner_texto('ANAR');" alt="ANAR" title="ANAR">ANAR</a></b></td>
                                                    <td align="center" style="border:1px solid #555555;" width="110"><b><a href="javascript:poner_texto('MIRAR');" alt="MIRAR" title="MIRAR">MIRAR</a></b></td>
                                                    <td align="center" style="border:1px solid #555555;" width="110"><b><a href="javascript:poner_texto('MOURE');" alt="MOURE" title="MOURE">MOURE</a></b></td>
                                                </tr>
                                            </table>
                                            <?php
                                                $n = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] && $HTTP_SESSION_VARS["lugares"][$lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"]]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] : "\'no\'";
                                                $s = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] && $HTTP_SESSION_VARS["lugares"][$lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"]]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] : "\'no\'";
                                                $e = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["EST"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] && $HTTP_SESSION_VARS["lugares"][$lugar[$HTTP_SESSION_VARS["estancia"]]["EST"]]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] : "\'no\'";
                                                $o = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] && $HTTP_SESSION_VARS["lugares"][$lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"]]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] : "\'no\'";
                                            ?>
                                            <div id="mapa_y_ayuda" style="font-family:arial; font-size:12px; color:#ffffff; background:transparent;"><font size="2"><a href="mapa.php?estancia=<?php if (isset($HTTP_SESSION_VARS["estancia"])) { echo $HTTP_SESSION_VARS["estancia"]; } else { echo "0"; } echo "&n=".$n."&s=".$s."&e=".$e."&o=".$o; if (SID) { echo "&".SID; } else { echo "&cookies=ok"; } ?>" target="_blank" title="Obrir finestra amb el mapa">Veure mapa</a> - <a href="ayuda.php?<?php echo $sesion; ?>" target="_blank" title="Obrir finestra d'ajuda">Ajuda</a></font></div>
                                            <script language="JavaScript">
                                                <!--
                                                if (document.getElementById) { document.getElementById('mapa_y_ayuda').innerHTML = '<font size="2"><a href="javascript:abrir_mapa(<?php if (isset($HTTP_SESSION_VARS["estancia"])) { echo $HTTP_SESSION_VARS["estancia"]; } else { echo "0"; } echo ", ".$n.", ".$s.", ".$e.", ".$o; ?>);" title="Obrir finestra del mapa">Veure mapa</a> - <a href="javascript:abrir_ayuda();" title="Obrir finestra d\'ajuda">Ajuda</a></font>'; }
                                                // -->
                                            </script>
                                            </center>
                                        </td>
                                        <td width="200" valign="top" align="center" style="font-family:courier; font-size:14px; color:#bbbbbb; border:1px solid #000000;">
                                            <center>
                                            Inventari:
                                            <?php
                                                $lista_inventario_vacia = TRUE;
                                                if (isset($HTTP_SESSION_VARS["inventario"]))
                                                 {
                                                    $x_inv = 0;
                                                    echo "<center><table bgcolor=\"#111111\" border=\"1\" width=\"170\" align=\"center\" style=\"border:1px solid #000000;\">";
                                                    $cerrado_tr = TRUE;
                                                    foreach ($HTTP_SESSION_VARS["inventario"] as $indice => $valor)
                                                     {
                                                        if ($HTTP_SESSION_VARS["inventario"][$indice])
                                                         {
                                                            if ($x_inv % 2 == 0) { echo "<tr><td align=\"center\" width=\"85\" style=\"border:1px solid #555555;\">"; $cerrado_tr = FALSE; }
                                                            else { echo "<td align=\"center\" width=\"85\" style=\"border:1px solid #555555;\">"; $cerrado_tr = FALSE; }
                                                            echo "<center>";
                                                            
                                                            $hay_imagen = FALSE;
                                                            if (file_exists("inventario/".$indice."_a.jpg") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice."_a.jpg\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            elseif (file_exists("inventario/".$indice."_a.gif") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice."_a.gif\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            elseif (file_exists("inventario/".$indice.".jpg")) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice.".jpg\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            elseif (file_exists("inventario/".$indice.".gif")) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice.".gif\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            elseif (file_exists("objetos/".$indice."_a.jpg") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice."_a.jpg\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            elseif (file_exists("objetos/".$indice."_a.gif") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice."_a.gif\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            elseif (file_exists("objetos/".$indice.".jpg")) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice.".jpg\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            elseif (file_exists("objetos/".$indice.".gif")) { $hay_imagen = TRUE; echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice.".gif\" width=\"50\" height=\"50\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"><br>"; }
                                                            
                                                            echo "<font size=\"2\">";
//                                                            echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" style=\"font-size:9px; font-family:arial;\">".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."</a>";
                                                            if (!$hay_imagen) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"[".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."]\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" style=\"font-size:9px; font-family:arial;\">".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."</a>"; }
                                                            else { echo "<div style=\"font-size:9px; font-family:arial;\">".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."</div></a>"; }
                                                            echo "</font>";
                                                            
                                                            echo "</center>";
                                                            $lista_inventario_vacia = FALSE;
                                                            if ($x_inv % 2 == 0) { echo "</td>"; }
                                                            else { echo "</td></tr>"; $cerrado_tr = TRUE; }
                                                            $x_inv++;
                                                         }
                                                     }
                                                 }

                                                if (!$cerrado_tr) { echo "</tr>"; }
                                                if (isset($lista_inventario_vacia) && $lista_inventario_vacia) { echo "<tr><td><center><i>buit</i></center></td></tr>"; }
                                                echo "</table>";
                                            ?>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                                </center>
                            </td>
                        </tr>
                    </table>
                    </center>
                    <table width="580" height="10" border="0" bgcolor="#333333" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>                    
                </td>
            </tr>
        </table>
<!--        <table width="580" height="10" border="0" bgcolor="#000000" cellspacing="0" cellpadding="0"><tr><td align="right" bgcolor="#000000" width="580"><table cellspacing="0" cellpadding="0" align="right" bgcolor="#aaaabb" width="300"><tr><td bgcolor="#aaaabb" align="center"><center><i>dedicado a</i> Yasmina Llaveria del Castillo</center></td></tr></table></td></tr></table> -->

        <font size="1" color="#bbbbbb" face="arial" style="font-family:verdana; font-size:9px; font-weight:bold;">
            <b>Programa per Yasmina Llaveria del Castillo (<a href="mailto:yas@granvino.com">yas@granvino.com</a>) i Joan Alba Maldonado (<a href="mailto:granvino@granvino.com">granvino@granvino.com</a>)</b>
        </font>
        <br>
        <font size="1" color="#888888" face="arial" style="font-family:arial; font-size:9px; font-weight:normal;">
            Fotograf&iacute;es 18.jpg, 23.jpg, 34.jpg, 40.jpg, 41.jpg per Esteban Villegas Gallego (<a href="mailto:esteban_hiv@hotmail.com">esteban_hiv@hotmail.com</a>)
        </font>
        
        </center>

    </body>

</html>
