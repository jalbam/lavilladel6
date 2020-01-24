<?php
    //Se otorga a la sesion el nombre "lavilladelseis":
    session_name("lavilladelseis");
    //Se abre la sesion:
    session_start(); //session_start("lavilladelseis"); //For PHP5 compatibility (Added on 26 SEP 2018).

	//For PHP5 compatibility (Added on 26 SEP 2018):
	if (!isset($HTTP_GET_VARS) || isset($_GET)) { $HTTP_GET_VARS = &$_GET; }
	if (!isset($HTTP_SESSION_VARS) || isset($_SESSION)) { $HTTP_SESSION_VARS = &$_SESSION; }

    //Variable para indicar cual es este archivo:
    $this_file = "ayuda.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Ajuda de La vila del sis</title>
    </head>
    <body bgcolor="#dddddd">

        <center>
            <h1>Ajuda</h1>
            <h4>La vila del sis</h4>
        </center>
        
        <br>
        
        <h3>Objectiu</h3>
        <p>
         L'objectiu del joc és investigar el lloc on has vist aterrar una llum.
        </p>

        <br>
       
        <h3>M&egrave;tode</h3>
        <p>
         Per a aconseguir el teu objectiu has d'agafar tot el que puguis, usar tot amb tot sempre que es pugui,
         entrar en tots els llocs que et sigui possible... recorda que tot el que facis est&agrave; ben fet i que mai pots morir o fer una acci&oacute; equivocada. <br>
         De vegades, mirar els objectes ajuda molt.
        </p>
        
        <br>
        
        <h3>Sistema de joc</h3>
        <p>
         Per a manejar el joc has de triar l'acci&oacute; que vols realitzar estrenyent clic en ella o escrivint-la. Despr&eacute;s, si &eacute;s necessari, donar clic damunt de l'objecte amb el vols realitzar l'acci&oacute;
         (o escriure el seu nom).
         <br><br>
         Recorda que l'acci&oacute; "USAR", a m&eacute;s d'amb un objecte, poden utilitzar-se amb dos alhora utilitzant la conjunció "AMB" ("USAR CLAU AMB PORTA")
         <br><br>
         L'acci&oacute; "DONAR" sempre ha de tenir a dos objectes i la conjunci&oacute; "A", de la forma "DONAR
         CARAMEL A PERSONA".
         <br><br>
         Finalment, donar-li al bot&oacute; "OK" i esperar la resposta en la part superior de la pantalla.
        </p>
        
        <br>
        
        <h3>Perdre's</h3>
        <p>
         Si b&eacute; existeix un mapa ja fet per al joc i que pots veure donant-li a l'opci&oacute; "Veure mapa", para m&eacute;s diversi&oacute; aconsellem no utilitzar-lo i seguir el següent m&egrave;tode:
         <br><br>
         L'ideal per a no perdre's &eacute;s agafar un paper en blanc i un llapis nom&eacute;s començar el joc.
         <br><br>
         Dibuixa un recuadre que representa l'estada on et situas, i feix unes fletxes amb les sortides
         disponibles (tenint en compte la direcci&oacute;: Nord, Sud...). Quan prenguis alguna d'aquestes sortides, dibuixa un recuadre que estigui conjugat amb la seva pertinent fletxa i que representi el lloc on has arribat.
         <br><br>
         A cada recuadre se li ha d'assignar un nom descriptiu, per a recordar quina estada &eacute;s. 
         <br><br>
         Recorda que podria cabre la posibildiad de descobrir noves sortides que abans no existien al realitzar segons quines accions.
        </p>
        
        <br>
        
        <!-- <h2><a href="index.php">Volver</a></h2> -->
    </body>
</html>

