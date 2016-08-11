<?php


//Si es la primera vez que entra, se setea como que ya se ha entrado e ignora los comandos:
if (!isset($HTTP_SESSION_VARS["primera_vez"])) { $HTTP_SESSION_VARS["primera_vez"] = TRUE; }
//...pero si no, si ha acabado el juego lo notificamos:
else if ($HTTP_SESSION_VARS["estancia"] == $lugar_para_acabar_el_juego) { echo "<center><table border=\"1\" bordercolor=\"#333333\" cellspacing=\"0\" cellpadding=\"5\" width=\"400\" align=\"center\" style=\"border:1px solid #333333;\"><tr><td width=\"400\" align=\"center\" style=\"font-family:courier; font-size:14px; color:#ffffff; border:1px solid #333333;\"><center>El juego ha terminado.</center></td></tr></table></center><br>"; }
//...pero si no, calculamos si se enviado el comando (y si no son solo espacios):
elseif (isset($HTTP_GET_VARS["comando"]) && trim(urldecode($HTTP_GET_VARS["comando"])) != "")
 {

    echo "<center><table border=\"1\" bordercolor=\"#333333\" cellspacing=\"0\" cellpadding=\"5\" width=\"400\" align=\"center\" style=\"border:1px solid #333333;\"><tr><td width=\"400\" align=\"center\" style=\"font-family:courier; font-size:14px; color:#ffffff; border:1px solid #333333;\"><center>";

//    echo "Comando enviado: <b>".urldecode($HTTP_GET_VARS["comando"])."</b><br>";

    //Se crea la matriz "$comando_matriz" con tantos elementos como palabras se hayan enviado:
    $comando_matriz = explode(" ", htmlentities(stripslashes(strtoupper(trim(urldecode($HTTP_GET_VARS["comando"]))))));

    
//    print_r($comando_matriz);

    //Quitamos los espacios en blanco que rodean a cada palabra enviada:
    $comando_matriz_temp = "";
    foreach($comando_matriz as $indice => $valor)
     {
        if (trim($valor) != "") { $comando_matriz_temp[] = trim($valor); }
     }

//      $comando_matriz = array();
//      unset($comando_matriz);
      $comando_matriz = $comando_matriz_temp;
//      print_r($comando_matriz);

//    $comando_matriz = $comando_matriz_temp;

//    print_r($comando_matriz);

//    if (isset($comando_matriz[5])) { $comando_matriz[4] .= " ".$comando_matriz[5]; }
//    if (isset($comando_matriz[2]) && $comando_matriz[2] != "A" && $comando_matriz[2] != "CON") { $comando_matriz[1] .= " ".$comando_matriz[2]; }
//    if (isset($comando_matriz[2]) && $comando_matriz[2] == "CON" && isset($comando_matriz[4]) || $comando_matriz[2] && $comando_matriz[2] == "DAR" && isset($comando_matriz[4])) { $comando_matriz[3] .= $comando_matriz[4]; }

//    print_r($comando_matriz);

    //Si se ha enviado una sola palabra:
    if (sizeof($comando_matriz) == 1)
     {
        if ($comando_matriz[0] == "SUR" || $comando_matriz[0] == "S" || $comando_matriz[0] == "SUD") { realizar_accion("IR", "SUR"); } //Se ejecuta IR SUR.
        elseif ($comando_matriz[0] == "NORTE" || $comando_matriz[0] == "N") { realizar_accion("IR", "NORTE"); } //Se ejecuta IR NORTE.
        elseif ($comando_matriz[0] == "ESTE" || $comando_matriz[0] == "E") { realizar_accion("IR", "ESTE"); } //Se ejecuta IR ESTE.
        elseif ($comando_matriz[0] == "OESTE" || $comando_matriz[0] == "O") { realizar_accion("IR", "OESTE"); } //Se ejecuta IR OESTE.
        else { echo "<center><b>Debes escribir m&aacute;s.</b></center>"; }
     }

    //Si se han enviado dos palabras:
    elseif (sizeof($comando_matriz) == 2)
     {
        realizar_accion($comando_matriz[0], $comando_matriz[1]);
     }

    //Si se han enviado tres palabras:
    elseif (sizeof($comando_matriz) == 3)
     {
        realizar_accion($comando_matriz[0], $comando_matriz[1], $comando_matriz[2]);
     }

    //Si se han enviado cuatro palabras:
    elseif (sizeof($comando_matriz) == 4) {
        realizar_accion($comando_matriz[0], $comando_matriz[1], $comando_matriz[2], $comando_matriz[3]);
    }

    //Si se han enviado cinco palabras:
    elseif (sizeof($comando_matriz) == 5) {
        realizar_accion($comando_matriz[0], $comando_matriz[1], $comando_matriz[3], $comando_matriz[4], $comando_matriz[2]);
    }

    //Si se han enviado seis o mas palabras:
    elseif (sizeof($comando_matriz) == 6) {
//        if ($comando_matriz[2] != "CON" && $comando_matriz[2] != "A" && $comando_matriz[2] != "EN" && $comando_matriz[2] != "AL" && $comando_matriz[2] != "HA" && $comando_matriz[2] != "AH" && $comando_matriz[2] != "KON") {
        if ($comando_matriz[2] != "CON" && $comando_matriz[2] != "A" && $comando_matriz[2] != "EN" && $comando_matriz[2] != "AL" && $comando_matriz[2] != "HA" && $comando_matriz[2] != "AH" && $comando_matriz[2] != "KON" && $comando_matriz[4] != "CON" && $comando_matriz[4] != "A" && $comando_matriz[4] != "EN" && $comando_matriz[4] != "AL" && $comando_matriz[4] != "HA" && $comando_matriz[4] != "AH" && $comando_matriz[4] != "KON") {
        realizar_accion($comando_matriz[0], $comando_matriz[1], $comando_matriz[3], $comando_matriz[4], $comando_matriz[2], $comando_matriz[5]);
        } else { echo "Demasiados par&aacute;metros."; }
    }

    elseif (sizeof($comando_matriz > 6)) { echo "Demasiados par&aacute;metros."; }


//    else { echo "<center><b>Debes escribir algo.</b></center>"; }

    echo "</center></td></tr></table></center><br>";

 } //Fin del if que calcula si se ha enviado el comando.


?>

<!--
<table width="540" height="240" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="540" height="240">
            <span style="position:relative;">
            <img src="paisajes/<?php echo $HTTP_SESSION_VARS["estancia"]; ?>.jpg" width="540" height="240" align="center">
            <img src="kk.gif" style="position:absolute; left:50; top:50;">
            </span>
        </td>
    </tr>
</table>
-->
