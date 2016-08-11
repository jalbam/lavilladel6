<?php
    //Se otorga a la sesion el nombre "lavilladelseis":
    session_name("lavilladelseis");
    //Se abre la sesion:
    session_start("lavilladelseis");

    //Variable para indicar cual es este archivo:
    $this_file = "mapa.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Mapa de La villa del seis</title>
</head>
<body bgcolor="#000000" text="#ffffff" leftmargin="0" topmargin="10" marginwidth="0" marginheight="10">
<center>
<h1>Mapa de La villa del seis</h1>
Te encuentras en: <b><?php echo $HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]]; ?></b><br>
<?php if (isset($HTTP_GET_VARS["n"]) && $HTTP_GET_VARS["n"] && is_numeric($HTTP_GET_VARS["n"])) { echo "Al <b>Norte</b> hay: <b>".$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["n"]]."</b><br>"; } ?>
<?php if (isset($HTTP_GET_VARS["s"]) && $HTTP_GET_VARS["s"] && is_numeric($HTTP_GET_VARS["s"])) { echo "Al <b>Sur</b> hay: <b>".$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["s"]]."</b><br>"; } ?>
<?php if (isset($HTTP_GET_VARS["e"]) && $HTTP_GET_VARS["e"] && is_numeric($HTTP_GET_VARS["e"])) { echo "Al <b>Este</b> hay: <b>".$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["e"]]."</b><br>"; } ?>
<?php if (isset($HTTP_GET_VARS["o"]) && $HTTP_GET_VARS["o"] && is_numeric($HTTP_GET_VARS["o"])) { echo "Al <b>Oeste</b> hay: <b>".$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["o"]]."</b><br>"; } ?>
<br>
<table width="486" height="624" border="0" cellspacing="0" cellpadding="0" background="mapa/mapa.jpg" align="center" style="cursor:help;">
    <tr>
        <td width="54" height="78"  title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][36])) { echo $HTTP_SESSION_VARS["lugar_nombre"][36]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 36) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>                                
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;    
        </td>
        <td width="54" height="78"  title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][43])) { echo $HTTP_SESSION_VARS["lugar_nombre"][43]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 43) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                        
        <td width="54" height="78">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][35])) { echo $HTTP_SESSION_VARS["lugar_nombre"][35]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 35) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][34])) { echo $HTTP_SESSION_VARS["lugar_nombre"][34]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 34) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][33])) { echo $HTTP_SESSION_VARS["lugar_nombre"][33]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 33) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][25])) { echo $HTTP_SESSION_VARS["lugar_nombre"][25]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 25) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][23])) { echo $HTTP_SESSION_VARS["lugar_nombre"][23]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 23) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                                
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][24])) { echo $HTTP_SESSION_VARS["lugar_nombre"][24]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 24) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][42])) { echo $HTTP_SESSION_VARS["lugar_nombre"][42]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 42) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                        
        <td width="54" height="78">
            &nbsp;            
        </td>
    </tr>
    <tr>
        <td width="54" height="78">
            &nbsp;            
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][32])) { echo $HTTP_SESSION_VARS["lugar_nombre"][32]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 32) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][30])) { echo $HTTP_SESSION_VARS["lugar_nombre"][30]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 30) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][22])) { echo $HTTP_SESSION_VARS["lugar_nombre"][22]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 22) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>           
        </td>                                
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][26])) { echo $HTTP_SESSION_VARS["lugar_nombre"][26]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 26) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][27])) { echo $HTTP_SESSION_VARS["lugar_nombre"][27]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 27) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][28])) { echo $HTTP_SESSION_VARS["lugar_nombre"][28]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 28) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                        
        <td width="54" height="78">
            &nbsp; 
        </td>
    </tr>
    <tr>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][31])) { echo $HTTP_SESSION_VARS["lugar_nombre"][31]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 31) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][20])) { echo $HTTP_SESSION_VARS["lugar_nombre"][20]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 20) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][21])) { echo $HTTP_SESSION_VARS["lugar_nombre"][21]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 21) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                                
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][29])) { echo $HTTP_SESSION_VARS["lugar_nombre"][29]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 29) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>                        
        <td width="54" height="78">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][14])) { echo $HTTP_SESSION_VARS["lugar_nombre"][14]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 14) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][13])) { echo $HTTP_SESSION_VARS["lugar_nombre"][13]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 13) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][6])) { echo $HTTP_SESSION_VARS["lugar_nombre"][6]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 6) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                                
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][7])) { echo $HTTP_SESSION_VARS["lugar_nombre"][7]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 7) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][9])) { echo $HTTP_SESSION_VARS["lugar_nombre"][9]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 9) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][40])) { echo $HTTP_SESSION_VARS["lugar_nombre"][40]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 40) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                        
        <td width="54" height="78">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][11])) { echo $HTTP_SESSION_VARS["lugar_nombre"][11]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 11) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][15])) { echo $HTTP_SESSION_VARS["lugar_nombre"][15]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 15) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][12])) { echo $HTTP_SESSION_VARS["lugar_nombre"][12]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 12) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][5])) { echo $HTTP_SESSION_VARS["lugar_nombre"][5]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 5) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                                
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][8])) { echo $HTTP_SESSION_VARS["lugar_nombre"][8]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 8) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][41])) { echo $HTTP_SESSION_VARS["lugar_nombre"][41]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 41) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][37])) { echo $HTTP_SESSION_VARS["lugar_nombre"][37]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 37) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                        
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][39])) { echo $HTTP_SESSION_VARS["lugar_nombre"][39]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 39) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
    </tr>
    <tr>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][10])) { echo $HTTP_SESSION_VARS["lugar_nombre"][10]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 10) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][3])) { echo $HTTP_SESSION_VARS["lugar_nombre"][3]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 3) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78"  title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][1])) { echo $HTTP_SESSION_VARS["lugar_nombre"][1]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 1) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][4])) { echo $HTTP_SESSION_VARS["lugar_nombre"][4]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 4) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                                
        <td width="54" height="78"  title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][16])) { echo $HTTP_SESSION_VARS["lugar_nombre"][16]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 16) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][17])) { echo $HTTP_SESSION_VARS["lugar_nombre"][17]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 17) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][38])) { echo $HTTP_SESSION_VARS["lugar_nombre"][38]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 38) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                        
        <td width="54" height="78">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][2])) { echo $HTTP_SESSION_VARS["lugar_nombre"][2]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 2) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][18])) { echo $HTTP_SESSION_VARS["lugar_nombre"][18]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 18) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>                                
        <td width="54" height="78" title="<?php if (isset($HTTP_SESSION_VARS["lugar_nombre"][19])) { echo $HTTP_SESSION_VARS["lugar_nombre"][19]; } ?>">
            <?php if (isset($HTTP_GET_VARS["estancia"]) && trim(urldecode($HTTP_GET_VARS["estancia"])) == 19) { echo '<img src="mapa/x.gif" alt="X" title="T&uacute; est&aacute;s aqu&iacute; ('.$HTTP_SESSION_VARS["lugar_nombre"][$HTTP_GET_VARS["estancia"]].')" hspace="0" vspace="0">'; } else { echo "&nbsp;"; }?>
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>
        <td width="54" height="78">
            &nbsp;
        </td>                        
        <td width="54" height="78">
            &nbsp;
        </td>
    </tr>
</table>
</center>
<br>
</body>
</html>
