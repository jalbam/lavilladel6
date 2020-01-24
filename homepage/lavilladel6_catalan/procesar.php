<?php


//Funcion que procesa la accion enviada:
function realizar_accion($accion, $objeto1, $preposicion = "", $objeto2  = "", $palabra1 = "", $palabra2 ="")
 {

    //Se globalizan las siguientes variables y/o matrices:
    global $HTTP_SESSION_VARS;
    global $lugar;

//    echo "<br>";

    //Se eliminan OTRA VEZ los espacios en blanco al principio y al final de las acciones enviadas:
    $accion = trim($accion);
    $objeto1 = trim($objeto1);
    $preposicion = trim($preposicion);
    $objeto2 = trim($objeto2);

    //Corregimos posibles acciones enviadas con faltas ortograficas en los verbos (acciones):
    if ($accion == "COGE") { $accion = "COGER"; } //COGE por COGER
    if ($accion == "COJE") { $accion = "COGER"; } //COJE por COGER
    if ($accion == "COJER") { $accion = "COGER"; } //COJER por COGER
    if ($accion == "KOGER") { $accion = "COGER"; } //KOGER por COGER
    if ($accion == "KOGE") { $accion = "COGER"; } //KOGE por COGER
    if ($accion == "MIRA") { $accion = "MIRAR"; } //MIRA por MIRAR
    if ($accion == "BER") { $accion = "VER"; } //BER por VER
    if ($accion == "USA") { $accion = "USAR"; } //USA por USAR
    if ($accion == "HUZA") { $accion = "USAR"; } //HUZA por USAR
    if ($accion == "UZA") { $accion = "USAR"; } //UZA por USAR
    if ($accion == "UZAR") { $accion = "USAR"; } //UZAR por USAR
    if ($accion == "HUZAR") { $accion = "USAR"; } //HUZAR por USAR
    if ($accion == "HUSA") { $accion = "USAR"; } //HUSA por USAR
    if ($accion == "HUSAR") { $accion = "USAR"; } //HUSAR por USAR
    if ($accion == "UTILIZA") { $accion = "UTILIZAR"; } //UTILIZA por UTILIZAR
    if ($accion == "HUTILISA") { $accion = "UTILIZAR"; } //HUTILISA por UTILIZAR
    if ($accion == "HUTILIZA") { $accion = "UTILIZAR"; } //HUTILIZA por UTILIZAR
    if ($accion == "UTILISA") { $accion = "UTILIZAR"; } //UTILISA por UTILIZAR
    if ($accion == "UTILISAR") { $accion = "UTILIZAR"; } //UTILISAR por UTILIZAR
    if ($accion == "HUTILIZAR") { $accion = "UTILIZAR"; } //HUTILIZAR por UTILIZAR
    if ($accion == "HUTILISAR") { $accion = "UTILIZAR"; } //HUTILISAR por UTILIZAR
    if ($accion == "MOBER") { $accion = "MOVER"; } //MOBER por MOVER
    if ($accion == "MUEVE") { $accion = "MOVER"; } //MUEVE por MOVER
    if ($accion == "MUEBE") { $accion = "MOVER"; } //MUEBE por MOVER
    if ($accion == "EMPUJA") { $accion = "EMPUJAR"; } //EMPUJA por EMPUJAR
    if ($accion == "ENPUJA") { $accion = "EMPUJAR"; } //ENPUJA por EMPUJAR
    if ($accion == "ENPUJAR") { $accion = "EMPUJAR"; } //ENPUJAR por EMPUJAR
    if ($accion == "DA") { $accion = "DAR"; } //DA por DAR
    if ($accion == "HIR") { $accion = "IR"; } //HIR por IR
    if ($accion == "VE") { $accion = "IR"; } //VE por IR
    if ($accion == "VES") { $accion = "IR"; } //VES por IR


    //Version en catalan:
    if ($accion == "BEURE") { $accion = "VEURE"; } //BEURE por VEURE
    if ($accion == "LLEIGIR") { $accion = "LLEGIR"; } //LLEIGIR por LLEGIR
    if ($accion == "LLEXIR") { $accion = "COGER"; } //LLEXIR por LLEGIR
    if ($accion == "LLEIXIR") { $accion = "IR"; } //LLEIXIR por LLEGIR
    if ($accion == "UTILITZAR") { $accion = "USAR"; } //UTILITZAR por USAR
    if ($accion == "DAR") { $accion = "DONAR"; } //DAR por DONAR
    if ($accion == "IR") { $accion = "ANAR"; } //IR por ANAR
    if ($accion == "VER") { $accion = "VEURE"; } //VER por VEURE
    if ($accion == "LEER") { $accion = "LLEGIR"; } //LEER por LLEGIR

    //Esto es para los objetos con mas de una palabra:
    if ($palabra1 != "" && $palabra2 != "")
     {
//        echo "aaaaa";
        if ($preposicion == "CON" || $preposicion == "KON" || $preposicion == "EN" || $preposicion == "AMB") { $objeto1 .= " ".$palabra1; $preposicion = "AMB"; }
        if ($preposicion == "A" || $preposicion == "HA" || $preposicion == "AL" || $preposicion == "AH") { $objeto1 .= " ".$palabra1; $preposicion = "A"; }
        if ($preposicion == "CON" || $preposicion == "KON" || $preposicion == "EN" || $preposicion == "AMB") { $objeto2 .= " ".$palabra2; $preposicion = "AMB"; }
        if ($preposicion == "A" || $preposicion == "AL" || $preposicion == "HA" || $preposicion == "AH") { $objeto2 .= " ".$palabra2; $preposicion = "A"; }
     }
    elseif ($palabra1 != "" && $palabra2 == "")
     {
  //      echo "bbbbb";
        if ($preposicion != "CON" && $palabra1 == "CON" || $preposicion != "KON" && $palabra1 == "KON" || $preposicion != "EN" && $palabra1 == "EN" || $preposicion != "AMB" && $palabra1 == "AMB") { $objeto2 = $preposicion." ".$objeto2; $preposicion = "AMB"; }
        elseif ($preposicion == "CON" && $palabra1 != "CON" || $preposicion == "KON" && $palabra1 != "KON" || $preposicion == "EN" && $palabra1 != "EN" || $preposicion == "AMB" && $palabra1 != "AMB") { $objeto1 .= " ".$palabra1; $preposicion = "AMB"; }
        elseif ($preposicion != "A" && $palabra1 == "A" || $preposicion != "HA" && $palabra1 == "HA" || $preposicion != "AL" && $palabra1 == "AL" || $preposicion != "AH" && $palabra1 == "AH") { $objeto2 = $preposicion." ".$objeto2; $preposicion = "A"; }
        elseif ($preposicion == "A" && $palabra1 != "A" || $preposicion == "HA" && $palabra1 != "HA" || $preposicion == "AL" && $palabra1 != "AL" || $preposicion == "AH" && $palabra1 != "AH") { $objeto1 .= " ".$palabra1; $preposicion = "A"; }
     } 
    else
     {
    //    echo "ccccccc";
        if ($preposicion != "CON" && $preposicion != "KON" && $preposicion != "EN" && $preposicion != "AMB" && $accion == "USAR") { $objeto1 .= " ".$preposicion; }
        elseif ($preposicion != "A" && $preposicion != "HA" && $preposicion != "AL" && $preposicion != "AH" && $accion == "DONAR") { $objeto1 .= " ".$preposicion; }
        elseif ($preposicion != "" && $accion != "USAR" && $accion != "DONAR") { $objeto1 .= " ".$preposicion; }
//        if ($preposicion != "A" && $accion == "DAR" || $preposicion != "HA" && $accion == "DAR" || $preposicion != "AL" && $accion == "DAR" || $preposicion != "AH" && $accion == "DAR") { $objeto1 .= " ".$preposicion; }
     }


    //Se corrigen preposiciones y SUD por SUR:
    if ($preposicion == "EN") { $preposicion = "CON"; } //EN por CON
    if ($preposicion == "KON") { $preposicion = "CON"; } //KON por CON
    if ($preposicion == "HA") { $preposicion = "A"; } //HA por A
    if ($preposicion == "AL") { $preposicion = "A"; } //AL por A
    //if ($accion == "ANAR" && $objeto1 == "SUD") { $objeto1 = "SUR"; } //SUD por SUD
    if ($accion == "ANAR" && $objeto1 == "N") { $objeto1 = "NORD"; } //N por NORD
    if ($accion == "ANAR" && $objeto1 == "S") { $objeto1 = "SUD"; } //S por SUD
    if ($accion == "ANAR" && $objeto1 == "E") { $objeto1 = "EST"; } //E por EST
    if ($accion == "ANAR" && $objeto1 == "O") { $objeto1 = "OEST"; } //O por OEST

    if (($accion == "ANAR" || $accion == "IR") && $objeto1 == "NORTE") { $objeto1 = "NORD"; } //NORTE por NORD
    if (($accion == "ANAR" || $accion == "IR") && $objeto1 == "SUR") { $objeto1 = "SUD"; } //SUR por SUD
    if (($accion == "ANAR" || $accion == "IR") && $objeto1 == "ESTE") { $objeto1 = "EST"; } //ESTE por EST
    if (($accion == "ANAR" || $accion == "IR") && $objeto1 == "OESTE") { $objeto1 = "OEST"; } //OESTE por OEST
    
    //Traduccion al catalan:
    if ($preposicion == "CON") { $preposicion = "AMB"; } //CON por AMB

    //Se eliminan OTRA VEZ los espacios en blanco al principio y al final de las acciones enviadas:
    $accion = trim($accion);
    $objeto1 = trim($objeto1);
    $preposicion = trim($preposicion);
    $objeto2 = trim($objeto2);

    //Calculamos si se ha enviado una accion y al menos un objeto, y que no esten vacios:
    if (isset($accion) && $accion != "" && isset($objeto1) && $objeto1 != "")
     {

        //Si se ha escogido la accion de coger:
        if ($accion == "COGER" || $accion == "AGAFAR")
         {

            echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>AGAFAR</b> ".$objeto1."</font><br>";
    
            $objeto_encontrado = FALSE;

            foreach ($HTTP_SESSION_VARS["objetos"] as $indice => $valor)
             {
                //$HTTP_SESSION_VARS["inventario"][$objeto_indice]
                foreach ($valor as $indice2 => $valor2)
                 {
                    if ($indice2 == "nombre" && $valor2 == $objeto1)
                     {
        
                        $objeto_encontrado = TRUE;                    

                        if (!$HTTP_SESSION_VARS["inventario"][$indice] && $HTTP_SESSION_VARS["objetos"][$indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$indice]["COGER"] && $HTTP_SESSION_VARS["objetos"][$indice]["estado"])
                         {
//                            echo "Lo has podido pillar el objeto numero $indice (".$HTTP_SESSION_VARS['objetos'][$indice]['nombre'].")<br>";
                            $HTTP_SESSION_VARS["inventario"][$indice] = TRUE;
                            $HTTP_SESSION_VARS["objetos"][$indice]["estado"] = FALSE;
                            
                            if (isset($HTTP_SESSION_VARS["objetos"][$indice]["frase_al_cogerse"]) && $HTTP_SESSION_VARS["objetos"][$indice]["frase_al_cogerse"] && $HTTP_SESSION_VARS["objetos"][$indice]["frase_al_cogerse"] != "")
                             {
                                echo $HTTP_SESSION_VARS["objetos"][$indice]["frase_al_cogerse"];
                             }
                            else { echo "Has agafat  l'objecte."; }
                            
                         }
                        elseif ($HTTP_SESSION_VARS["inventario"][$indice])
                         {
                            echo "Ya tens l'objecte.<br>";
                         }
                        elseif (!$HTTP_SESSION_VARS["objetos"][$indice]["COGER"] && $HTTP_SESSION_VARS["objetos"][$indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$indice]["estado"])
                         {
//                          if ($HTTP_SESSION_VARS["objetos"][$indice]["COGER"]) { echo "TRUE"; } else { echo "FALSE"; }
                          if (isset($HTTP_SESSION_VARS["objetos"][$indice]["frase_al_no_cogerse"]) && $HTTP_SESSION_VARS["objetos"][$indice]["frase_al_no_cogerse"] && $HTTP_SESSION_VARS["objetos"][$indice]["frase_al_no_cogerse"] != "")
                           {
                            echo $HTTP_SESSION_VARS["objetos"][$indice]["frase_al_no_cogerse"];
                           }
                           else { echo "No puc agafar aix&ograve;.<br>"; }
                         
                         }
                        else { echo "No trobo aix&ograve;.<br>"; }
                     }
                 }
             }
             
             if (!$objeto_encontrado) { echo "No trobo aix&ograve;.<br>"; }

//        foreach($HTTP_SESSION_VARS["inventario"] as $index => $key) { if ($HTTP_SESSION_VARS["inventario"][$index]) { echo "$index es TRUE<br>"; } else { echo "$index es FALSE<br>"; } }

         }
        //Fin de la accion coger. 

        //Si se ha escogido la accion ver, mirar o leer (es lo mismo):
        elseif ($accion == "VER" || $accion == "MIRAR" || $accion == "LEER" || $accion == "VEURE" || $accion == "LLEGIR")
         {

            echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>".$accion."</b> ".$objeto1."</font><br>";
            
            $mirar_texto = "";
            if (isset($HTTP_SESSION_VARS["objetos"]))
             {
                foreach ($HTTP_SESSION_VARS["objetos"] as $objeto_indice => $objeto_array)
                 {
                    foreach ($objeto_array as $objeto_propiedad_indice => $objeto_propiedad_valor)
                     {
                        //Buscamos en el inventario:
                        foreach ($HTTP_SESSION_VARS["inventario"] as $inventario_indice => $inventario_valor)
                         {
                                if ($HTTP_SESSION_VARS["inventario"][$inventario_indice])
                                 {
                                    if ($objeto1 == $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] != "")
                                    {
                                        $mirar_texto = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR"];
                                    }
                                 }
                         }
                        
                        //Buscamos en el paisaje:
                        if ($objeto_propiedad_indice == "lugar" && $HTTP_SESSION_VARS["objetos"][$objeto_indice][$objeto_propiedad_indice] == $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto_indice] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"])
                         {
                            if ($objeto1 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] != "" && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"])
                             {
                                $mirar_texto = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR"];
                             }
                         }
                     }
                 }
             }
            
          if ($mirar_texto != "") { echo $mirar_texto; }
          else { echo "No trobo aix&ograve;."; }
            
         }
        //Fin de la accion ver, mirar o leer.

        //Si se ha escogido la accion ir:
        elseif ($accion == "ANAR" || $accion == "IR")
         {

            echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>ANAR</b> a <b>".$objeto1."</b></font><br>";
            
            //echo $HTTP_SESSION_VARS["estancia"]."=>".$lugar[$HTTP_SESSION_VARS["estancia"]]["NORTE"];
            
            if (isset($lugar[$HTTP_SESSION_VARS["estancia"]][$objeto1]) && $lugar[$HTTP_SESSION_VARS["estancia"]][$objeto1] && $HTTP_SESSION_VARS["lugares"][$lugar[$HTTP_SESSION_VARS["estancia"]][$objeto1]])
             {
                echo "Vas al ".$objeto1."...<br>";
                $HTTP_SESSION_VARS["estancia"] = $lugar[$HTTP_SESSION_VARS["estancia"]][$objeto1];
            //    describir_lugar($lugar[$HTTP_SESSION_VARS["estancia"]][$objeto1]);
             }
            else { echo "<b>No pots anar all&iacute;.</b><br>"; }
            
            //describir_lugar($HTTP_SESSION_VARS["estancia"]);

         }
        //Fin de la accion ir.

        //Si se ha escogido la accion usar o utilizar:
        elseif ($accion == "USAR" || $accion == "UTILITZAR" || $accion == "DONAR")
         {

            //[MODIFICACION PARA LA VILLA DEL SEIS] Si se utiliza la linterna (no con la accion dar, si con usar o utilizar) sin haberla cogido, no deja hacerlo:
            if ($accion != "DONAR" && $objeto1 == $HTTP_SESSION_VARS["objetos"][2]["nombre"] && !$HTTP_SESSION_VARS["inventario"][2] && $HTTP_SESSION_VARS["objetos"][2]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][2]["estado"]) { if ($preposicion == "" || $objeto2 == "") { echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>".$accion."</b> ".$objeto1."</font><br>"; echo "Primer tindria que agafar-la.<br>"; return 1; } }


            if ($preposicion != "A" && $accion == "DONAR")
             {
                echo "Sintaxis incorrecta. Usa: <b>DONAR x A y</b>";
                return 1;
             }
            if ($preposicion != "AMB" && $accion == "USAR" && $objeto1 != "" && $objeto2 != "" || $preposicion != "AMB" && $accion == "UTILITZAR" && $objeto1 != "" && $objeto2 != "")
             {
                echo "Sintaxis incorrecta. Usa: <b>".$accion." x AMB y</b>";
                return 1;
             }

            //Si se ha determinado utilizar un objeto con otro:
            if ($preposicion == "AMB" && $objeto2 != "" || $preposicion == "A" && $objeto2 != "")
             {

                if ($objeto1 != $objeto2)
                 {

                   //[MODIFICACION PARA LA VILLA DEL SEIS] Si se utiliza el salabre con la fosa, se insertan las tijeras en el inventario:
                   if ($objeto1 == "SALABRE" && $objeto2 == "FOSSA" || $objeto1 == "FOSSA" && $objeto2 == "SALABRE") { if ($HTTP_SESSION_VARS["estancia"] == 30 && $HTTP_SESSION_VARS["objetos"][10]["nombre"] == "SALABRE" && $HTTP_SESSION_VARS["inventario"][10]) { $HTTP_SESSION_VARS["inventario"][21] = TRUE; } }
//                   else { echo "objeto 1 = ".$objeto1." y objeto 2 = ".$objeto2." y estancia = ".$HTTP_SESSION_VARS["estancia"]." y objeto 10 nombre = ".$HTTP_SESSION_VARS["objetos"][10]["nombre"]; } 
                    
                   echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>".$accion."</b> ".$objeto1." <b>".$preposicion."</b> ".$objeto2."</font><br>";
                    
            
                    $objeto1_existe = FALSE;
                    $objeto2_existe = FALSE;
                    $se_pueden_usar_ambos_1 = FALSE;
                    $se_pueden_usar_ambos_2 = FALSE;
                    $se_pueden_usar_ambos = FALSE;
                    
                    $usar_texto = "";
                    if (isset($HTTP_SESSION_VARS["objetos"]))
                     {
                        foreach ($HTTP_SESSION_VARS["objetos"] as $objeto_indice => $objeto_array)
                          {
                    
                            if ($objeto2 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"] || $objeto2 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] && $HTTP_SESSION_VARS["inventario"][$objeto_indice]) { $objeto2_existe = TRUE; $objeto2_indice = $objeto_indice; }
                            if ($objeto1 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"] || $objeto1 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] && $HTTP_SESSION_VARS["inventario"][$objeto_indice]) { $objeto1_existe = TRUE; $objeto1_indice = $objeto_indice; }
                            
                            if ($objeto2_existe && $objeto1_existe)
                             {
                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["USAR"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["USAR"] != "" && isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["USAR"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["USAR"] != "")
                                 {

                                  //Falta: solo proceder si ambos estan en el inventario, o uno en el inventario y otro en el lugar donde estamos o ambos en el lugar donde estamos.
                                  $objeto1_usarse_matriz = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["USAR"]);
                                   foreach ($objeto1_usarse_matriz as $valores)
                                    {
                                        $valores = trim($valores);
                                        if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre"] == $valores)
                                         {
                                             $se_pueden_usar_ambos_1 = TRUE;
                                             //echo "<br>" . $valores . " de ".$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre"]." encontrado en " . $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre"] . "<br><br>";
                                         }
                                    }
                                    
                                  $objeto2_usarse_matriz = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["USAR"]);
                                   foreach ($objeto2_usarse_matriz as $valores2)
                                    {
                                        $valores2 = trim($valores2);
                                        if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre"] == $valores2)
                                         {
                                             $se_pueden_usar_ambos_2 = TRUE;
                                             //echo "<br>" . $valores2 . " de ".$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre"]." encontrado en " . $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre"] . "<br><br>";
                                         }
                                    }
                                    
                                    if ($se_pueden_usar_ambos_1 && $se_pueden_usar_ambos_2) { $se_pueden_usar_ambos = TRUE; }
                                    
                                    if ($se_pueden_usar_ambos)
                                     {
                                     
                                        $pueden_usarse_legalmente = FALSE;
                                     
                                        //Ambos pueden usarse: (proceder con el codigo pertinente) --> calcular primero si estan en el inventario, al menos uno:
                                        if (isset($HTTP_SESSION_VARS["inventario"][$objeto1_indice]) && $HTTP_SESSION_VARS["inventario"][$objeto1_indice] || isset($HTTP_SESSION_VARS["inventario"][$objeto2_indice]) && $HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                                         {
                                            //echo "Estan en el inventario al menos uno o los dos.<br>";
                                            //Calcular que el que esta en el paisaje este en el mismo que el nuestro, y setear $pueden_usarse_legalmente = TRUE:
                                            if ($HTTP_SESSION_VARS["inventario"][$objeto1_indice] && $HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                                             {
                                                //Los dos estas en el inventario
                                                $pueden_usarse_legalmente = TRUE;
                                                //echo "Los dos en el inventario.<br>";
                                             }
                                            elseif ($HTTP_SESSION_VARS["inventario"][$objeto1_indice] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                                             {
                                                //echo "El 1 en el inventario.<br>";
                                                //El objeto 1 esta en el inventario. Calcular si el objeto 2 esta en el mismo lugar que nosotros...
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                 {
                                                    $pueden_usarse_legalmente = TRUE;
                                                 }
                                                else
                                                 {
                                                    //$usar_texto = "No encuentro ".$objeto2;
                                                 }
                                                
                                             }
                                            elseif (!$HTTP_SESSION_VARS["inventario"][$objeto1_indice] && $HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                                             {
                                                //echo "El 2 en el inventario.<br>";
                                                //El objeto 2 esta en el inventario. Calcular si el objeto 1 esta en el mismo lugar que nosotros...
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                 {
                                                    $pueden_usarse_legalmente = TRUE;
                                                 }
                                                else
                                                 {
                                                    //$usar_texto = "No encuentro ".$objeto1;
                                                 }       
                                             }

                                      //      elseif (!$HTTP_SESSION_VARS["inventario"][$objeto1_indice] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice])
                                        //     {
                                                //Ningun objeto esta en el inventario. Calcular si los objetos estan en la misma estancia que nosotros...
//                                                if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"])
  //                                               {
    //                                                $pueden_usarse_legalmente = TRUE;
      //                                              echo "Ninguno en el inventario.<br>";
        //                                         }
          //                                      else { $usar_texto = "No encuentro ninguno de los dos objetos."; }
                                                
            //                                 }

                                            
                                         }
                                        else
                                         {
                                            //echo "Ninguno esta en el inventario";
                                            //Calcular que ambos esten en el MISMO paisaje entre ellos, y nosotros en ese paisaje, y setear $pueden_usarse_legalmente = TRUE;
                                            
                                            if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                             {
                                                 $pueden_usarse_legalmente = TRUE;
                                                  //echo "Ninguno en el inventario.<br>";
                                             }
                                             else { $usar_texto = "No trobo cap dels dos objectes."; }
                                            
                                         }
                                         
                                         
                                        if ($pueden_usarse_legalmente)
                                         {
                                                    
                                        
                                        if ($accion == "DONAR" && $preposicion == "A" && !$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["animado"])
                                         {
                                            
                                            if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["animado"]) { echo "No puc donar ".$objeto1." a ".$objeto2.". Prova al rev&eacute;s. O a lo millor voldries utilitzar la acci&oacute;n USAR."; }
                                            else { echo "No puc donarli res a ".$objeto2.". Prova a utilitzar l'acci&oacute;n USAR."; }
                                            
                                            return 1;
                                         }
                                        
                                            //$usar_texto = "Usarse legalmente = ok<br>";
                                            //Usar aqui los dos objetos, ya que se puede...
                                        if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activado"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activado"])
                                        {
                                            if ($usar_texto == "")
                                             {
                                                //[MODIFICACION PARA LA VILLA DEL SEIS] Si se utiliza el palito con el plastico baboso (o al reves), evita que salga "ya esta bien por hoy, gracias":
                                                if ($objeto1 == "PALET" && $objeto2 == "PLASTICO BAVOS" || $objeto1 == "PLASTIC BAVOS" && $objeto2 == "PALET") { if ($HTTP_SESSION_VARS["objetos"][24]["nombre"] == "PLASTIC BAVOS" && $HTTP_SESSION_VARS["objetos"][12]["nombre"] == "PALET EMBAVAT") { if ($HTTP_SESSION_VARS["inventario"][24] && $HTTP_SESSION_VARS["inventario"][12] || $HTTP_SESSION_VARS["inventario"][24] && $HTTP_SESSION_VARS["estancia"] == 12) { $usar_texto = "Lubriques b&eacute; el palet."; } } }
                                                else { $usar_texto = "Per avui ja est&agrave; b&eacute;, gr&agrave;cies."; }
                                             }
                                        }
                                        else
                                         {
                                            if (!$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activado"])
                                             {
                                                $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activado"] = TRUE;
                                            
//                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"] != "") { $usar_texto .= "<br>".$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"]; }
                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"] != "") { $usar_texto .= $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"]; }
                                                elseif (!isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"]) || !$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"] || $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"] == "") { $usar_texto .= "Has usat l'objecte."; }

                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre"] = $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["nombre_nuevo"]; }
                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["MIRAR_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["MIRAR_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["MIRAR_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["MIRAR"] = $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["MIRAR_nuevo"]; }

                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["alternar_coger_al_activar"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["alternar_coger_al_activar"])
                                                 {
                                                    if (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["COGER"]) && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["COGER"])
                                                     {
                                                        $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["COGER"] = FALSE;
                                                     }
                                                    elseif (isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["COGER"]) && !$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["COGER"])
                                                     {
                                                        $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["COGER"] = TRUE;
                                                     }
                                                 }


                                                $salidas_a_activar = "";
                                                $objetos_a_activar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activa_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activa_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activa_salidas_al_usarse"]);
                                                    foreach ($salidas_a_activar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = TRUE;
                                                        
//                                                        if ($lugar[$salida_x]["NORTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["SUR"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["ESTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["OESTE"] == $HTTP_SESSION_VARS["estancia"])
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
    //                                                    if ($salida_x == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha activado una salida nueva en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Activada una salida en otro lugar<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activa_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activa_objetos_al_usarse"] != "")
                                                 {
//                                                 echo "ayyyyy";
                                                    $objetos_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["activa_objetos_al_usarse"]);
                                                    foreach ($objetos_a_activar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = TRUE;
                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha activado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Activado objeto: ".$salida_x." en otro lugar<br>";
                                                         }
                                                    
                                                     }
                                                 }



                                                $salidas_a_desactivar = "";
                                                $objetos_a_desactivar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["desactiva_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["desactiva_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["desactiva_salidas_al_usarse"]);
                                                    foreach ($salidas_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = FALSE;
                                                        
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                         {
                                                            //echo "Se ha desactivado una salida en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Desactivada una salida en otro lugar.<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["desactiva_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["desactiva_objetos_al_usarse"] != "")
                                                 {
//                                                 echo "ayyyyy";
                                                    $objetos_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["desactiva_objetos_al_usarse"]);
                                                    $desactivar_el_objeto1 = "";
                                                    foreach ($objetos_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = FALSE;
                                                        $desactivar_el_objeto1 .= $salida_x.",";

                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en otro lugar.<br>";
                                                         }
                                                    
                                                     }
                                                 }



                                             }
                                            
                                            if (!$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activado"])
                                             {
                                               $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activado"] = TRUE;                                             

//                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"] != "") { $usar_texto .= "<br>".$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"]; }
                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"] != "") { $usar_texto .= $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["frase_al_usarse"]; }
//                                                else { $usar_texto .= "Has usado el objeto."; }
                                                elseif (!isset($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"]) || !$HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"] || $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["frase_al_usarse"] == "") { $usar_texto .= "Has usat l'objecte."; }
                                               
                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre"] = $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["nombre_nuevo"]; }
                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["MIRAR_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["MIRAR_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["MIRAR_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["MIRAR"] = $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["MIRAR_nuevo"]; }

                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["alternar_coger_al_activar"]) && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["alternar_coger_al_activar"])
                                                 {
                                                    if (isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["COGER"]) && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["COGER"])
                                                     {
                                                        $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["COGER"] = FALSE;
                                                     }
                                                    elseif (isset($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["COGER"]) && !$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["COGER"])
                                                     {
                                                        $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["COGER"] = TRUE;
                                                     }
                                                 }
                                                 
                                                $salidas_a_activar = "";
                                                $objetos_a_activar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activa_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activa_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activa_salidas_al_usarse"]);
                                                    foreach ($salidas_a_activar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = TRUE;
                                                        
//                                                        if ($lugar[$salida_x]["NORTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["SUR"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["ESTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["OESTE"] == $HTTP_SESSION_VARS["estancia"])
//                                                        if ($salida_x == $HTTP_SESSION_VARS["estancia"])
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                         {
                                                            //echo "Se ha activado una salida nueva en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Activada salida nueva en otro lugar.<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activa_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activa_objetos_al_usarse"] != "")
                                                 {
                                                    $objetos_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["activa_objetos_al_usarse"]);
                                                    foreach ($objetos_a_activar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        //$HTTP_SESSION_VARS["inventario"][$objeto1_indice] = FALSE;
                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = TRUE;
                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha activado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Activado objeto: ".$salida_x." en otro lugar<br>";
                                                         }
                                                    
                                                     }
                                                 }
                                                 
                                                 
                                                 //desactivar:
                                                $salidas_a_desactivar = "";
                                                $objetos_a_desactivar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["desactiva_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["desactiva_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["desactiva_salidas_al_usarse"]);
                                                    foreach ($salidas_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = FALSE;
                                                        
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                         {
                                                            //echo "Se ha desactivado una salida en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Desactivada una salida en otro lugar.<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["desactiva_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["desactiva_objetos_al_usarse"] != "")
                                                 {
//                                                 echo "ayyyyy";
                                                    $objetos_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto2_indice]["desactiva_objetos_al_usarse"]);
                                                    $desactivar_el_objeto2 = "";
                                                    foreach ($objetos_a_desactivar as $salida_x)
                                                     {
                                                        //$HTTP_SESSION_VARS["inventario"][$objeto2_indice] = FALSE;
                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = FALSE;
                                                        $desactivar_el_objeto2 .= $salida_x.",";
                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en otro lugar.<br>";
                                                         }
                                                    
                                                     }
                                                 }

                                                }
                                            
                                          }
                                         
                                         }
//                                        else
  //                                       {
    //                                        $usar_texto = "No puedo hacer eso";
      //                                   }

                                        
                                        //echo $usar_texto;
                                        
                                     }

                                 }

                             }
                          
                          }
                     }
                     
//                     if (!isset($objeto1_indice) && !isset($objeto1_indice)) { echo "No se encontro ".$objeto1." ni ".$objeto2; }
  //                   elseif (!isset($objeto1_indice) && isset($objeto2_indice)) { echo "No se encontro ".$objeto1; }
    //                 elseif (isset($objeto1_indice) && !isset($objeto2_indice)) { echo "No se encontro ".$objeto2; }

//                   elseif (isset($objeto1_indice) && isset($objeto2_indice))
  //                  {
                     
                     if ($objeto1_existe == FALSE && $objeto2_existe == TRUE)
                      {
//                        if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice])
                        if ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                         {
                            echo "No trovo ".$objeto1." ni ".$objeto2;
                         }
//                        elseif (!$HTTP_SESSION_VARS["inventario"][$objeto1_indice]) { echo "No encuentro ".$objeto1; }
//                        else { echo "No puedo hacer eso"; }
                        else { echo "No trovo ".$objeto1; }
                      }
                     elseif ($objeto1_existe == TRUE && $objeto2_existe == FALSE)
                      {
//                        if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                        if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice])
                         {
                            echo "No trovo ".$objeto1." ni ".$objeto2;
                         }
  //                      elseif (!$HTTP_SESSION_VARS["inventario"][$objeto2_indice]) { echo "No encuentro ".$objeto2; }
                        else { echo "No trovo ".$objeto2; }
                      }
                     elseif ($objeto1_existe == FALSE && $objeto2_existe == FALSE)
                      {
                        //echo "No encuentro ".$objeto1." ni ".$objeto2; echo "<br>".$usar_texto;
                        //echo "Se encontraron ambos objetos, pero no pueden usarse<br>"; echo "<br>".$usar_texto;
                        
                        //if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                         //{
                            echo "No trovo ".$objeto1." ni ".$objeto2;
                         //}
                        //elseif ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice] || $HTTP_SESSION_VARS["inventario"][$objeto1_indice] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                         //{
                         //   echo "<br>No se encontro ".$objeto2;
                         //}
                        //elseif ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] || $HTTP_SESSION_VARS["inventario"][$objeto2_indice] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice])
                         //{
                         //   echo "<br>No se encontro ".$objeto1;
                         //}
                        //else { echo "<br>No puedo usar eso"; }

                        
                      }
                     //if ($se_pueden_usar_ambos) { echo "Ambos pueden usarse"; }
                     elseif(!$se_pueden_usar_ambos)
                      {
                        //echo "Se encontraron ambos objetos, pero no pueden usarse<br>"; echo "<br>".$usar_texto;
                        
                        //echo "aaaaa";
                        
                        if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                         {
                            echo "No trovo ".$objeto1." ni ".$objeto2;
                         }
                        elseif ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice] || $HTTP_SESSION_VARS["inventario"][$objeto1_indice] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                         {
                            echo "No trovo ".$objeto2;
                         }
                        elseif ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice] || $HTTP_SESSION_VARS["inventario"][$objeto2_indice] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice])
                         {
                            echo "No trovo ".$objeto1;
                         }
                        else { echo "Aix&ograve; no funciona."; }
                      }
                     elseif($se_pueden_usar_ambos && !$pueden_usarse_legalmente)
                      {
                        //echo "Se encontraron, se pueden usar pero no legalmente"; echo "<br>".$usar_texto;
                        
                        if ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                         {
                            echo "No trovo ".$objeto1." ni ".$objeto2;
                         }
                        elseif ($HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] || $HTTP_SESSION_VARS["inventario"][$objeto1_indice] && !$HTTP_SESSION_VARS["inventario"][$objeto2_indice])
                         {
                            echo "No trovo ".$objeto2;
                         }
                        elseif ($HTTP_SESSION_VARS["objetos"][$objeto2_indice]["lugar"] == $HTTP_SESSION_VARS["estancia"] && $HTTP_SESSION_VARS["objetos"][$objeto1_indice]["lugar"] != $HTTP_SESSION_VARS["estancia"] || $HTTP_SESSION_VARS["inventario"][$objeto2_indice] && !$HTTP_SESSION_VARS["inventario"][$objeto1_indice])
                         {
                            echo "No trovo ".$objeto1;
                         }
                        else { echo "Aix&oacute; no funciona."; }
                      }
                     elseif($se_pueden_usar_ambos && $pueden_usarse_legalmente)
                      {
                        //echo "Se encontraron, se pueden usar y ademas legalmente";
                        echo $usar_texto;
                      }
                     
                 }
                 else
                  {
                    echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>".$accion."</b> ".$objeto1." <b>".$preposicion."</b> ".$objeto2."</font><br>";
                    echo "No puc utilitzar un objecte amb ell mateix.<br>";
                  }
                //}





                
               $objetos1_a_desactivar = "";
               $objetos2_a_desactivar = "";
                if (isset($desactivar_el_objeto1) && $desactivar_el_objeto1 != "")
                 { 
                    $objetos1_a_desactivar = explode(",",$desactivar_el_objeto1);
                    //$HTTP_SESSION_VARS["inventario"][$desactivar_el_objeto1] = FALSE;
                    //echo "desactivado $desactivar_el_objeto1";
                    foreach ($objetos1_a_desactivar as $objeto1_desactivar_indice)
                     {
                        $HTTP_SESSION_VARS["inventario"][$objeto1_desactivar_indice] = FALSE;  
                        //echo "<br>desactivado ".$HTTP_SESSION_VARS['objetos'][$objeto1_desactivar_indice]['nombre']."<br>";
                     }
                 }

                if (isset($desactivar_el_objeto2) && $desactivar_el_objeto2 != "")
                 {
                 //   $HTTP_SESSION_VARS["inventario"][$desactivar_el_objeto2] = FALSE; echo "desactivado $desactivar_el_objeto2";
                    $objetos2_a_desactivar = explode(",",$desactivar_el_objeto2);
                    //$HTTP_SESSION_VARS["inventario"][$desactivar_el_objeto1] = FALSE;
                    //echo "desactivado $desactivar_el_objeto1";
                    foreach ($objetos2_a_desactivar as $objeto2_desactivar_indice)
                     {
                        $HTTP_SESSION_VARS["inventario"][$objeto2_desactivar_indice] = FALSE;  
                        //echo "<br>desactivado ".$HTTP_SESSION_VARS['objetos'][$objeto2_desactivar_indice]['nombre']."<br>";
                     }
                 }



                //[MODIFICACION PARA LA VILLA DEL SEIS] Si se utiliza el invento con la orilla (o la orilla con el invento), se retira del inventario el objeto invento:
                if ($accion != "DONAR" && $objeto1 == "INVENT" && $objeto2 == "RIBA" && $preposicion == "AMB" || $accion != "DONAR" && $objeto1 == "RIBA" && $objeto2 == "INVENT" && $preposicion == "AMB") { if ($HTTP_SESSION_VARS["estancia"] == 18 && $HTTP_SESSION_VARS["inventario"][4] && $HTTP_SESSION_VARS["objetos"][4]["nombre"] == "INVENT") { $HTTP_SESSION_VARS["inventario"][4] = FALSE; } }


             }

            //O bien si se ha determinado utilizar el objeto en si mismo, sin ningun otro:
            else
             {        

                echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>".$accion."</b> ".$objeto1."</font><br>";
                
                
                
                
            if ($accion == "DONAR") { echo "Has d'especificar a qui."; }
            else {
                
            $usar_texto = "";
            if (isset($HTTP_SESSION_VARS["objetos"]))
             {
                foreach ($HTTP_SESSION_VARS["objetos"] as $objeto_indice => $objeto_array)
                 {
                    foreach ($objeto_array as $objeto_propiedad_indice => $objeto_propiedad_valor)
                     {
                        //Buscamos en el inventario:
                        foreach ($HTTP_SESSION_VARS["inventario"] as $inventario_indice => $inventario_valor)
                         {
                                if ($HTTP_SESSION_VARS["inventario"][$inventario_indice])
                                 {
                                    if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["USARSE"]) && $objeto1 == $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["USARSE"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] != "")
                                    {
                                        if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["activado"])
                                         {
                                            
                                            //echo "ee";
                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["USARSE"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["USARSE"])
                                             {
                                                
                                                if ($usar_texto == "") { $usar_texto = "Per avui ja est&agrave; b&eacute;, gr&agrave;cies."; }
                                                
                                                //echo "aaaaa";
                                             }
                                            else { echo "No puc fer aix&ograve;."; }
                                         
                                         }
                                        else
                                         {
                                            $HTTP_SESSION_VARS["objetos"][$inventario_indice]["activado"] = TRUE;
                                            
                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"] != "") { $usar_texto = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"]; }
                                            else { $usar_texto = "Has usat l'objecte."; }
                                            
                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"]; }
                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR"] = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"]; }

                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["alternar_coger_al_activar"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["alternar_coger_al_activar"])
                                             {
                                                if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"] = FALSE;
                                                    //echo "<br>Objeto ya NO se puede coger.<br>";
                                                 }

                                                elseif (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"]) && !$HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"] = TRUE;
//                                                    echo "<br>Objeto ya se puede coger.<br>";
                                                 }

                                             
                                             }

                                            //echo "Objeto activado<br>";
                                            //Falta: calcular si los objetos y salidas que activa estan o no activados, y si no lo estan activarlos y mostrarlos con un echo.
                                            
                                            //$HTTP_SESSION_VARS["objetos"][0]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
                                            //$HTTP_SESSION_VARS["objetos"][0]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
                                            $salidas_a_activar = "";
                                            $objetos_a_activar = "";
                    
                                            if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_salidas_al_usarse"] != "")
                                             {
                                                $salidas_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_salidas_al_usarse"]);
                                                foreach ($salidas_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["lugares"][$salida_x] = TRUE;
                                                    
//                                                    if ($lugar[$salida_x]["NORTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["SUR"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["ESTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["OESTE"] == $HTTP_SESSION_VARS["estancia"])
//                                                    if ($salida_x == $HTTP_SESSION_VARS["estancia"])
                                                    if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                     {
                                                        //echo "Se ha activado una salida nueva en este lugar.<br>";
                                                     }
                                                    else
                                                     {
                                                        //echo "Activada salida nueva en otro lugar.<br>";
                                                     }
                                                 
                                                 }
                                             }


                                            if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_objetos_al_usarse"] != "")
                                             {
                                                $objetos_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_objetos_al_usarse"]);
                                                foreach ($objetos_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = TRUE;
                                                 
                                                    if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                     {
                                                        //echo "Se ha activado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar<br>";
                                                     }
                                                    
                                                    else
                                                     {
                                                        //echo "Activado objeto: ".$salida_x." en otro lugar<br>";
                                                     }
                                                 
                                                 }
                                             }
                                            
                                            
                                            


                                                $salidas_a_desactivar = "";
                                                $objetos_a_desactivar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_salidas_al_usarse"]);
                                                    foreach ($salidas_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = FALSE;
                                                        
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                         {
                                                            //echo "Se ha desactivado una salida en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Desactivada una salida en otro lugar.<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_objetos_al_usarse"] != "")
                                                 {
//                                                 echo "ayyyyy";
                                                    $objetos_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_objetos_al_usarse"]);
                                                    $desactivar_el_objeto = "";
                                                    foreach ($objetos_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        //$HTTP_SESSION_VARS["inventario"][$inventario_indice] = FALSE;
//                                                        $desactivar_el_objeto2 = $inventario_indice;
                                                        $desactivar_el_objeto .= $salida_x.",";

                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = FALSE;
                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en otro lugar.<br>";
                                                         }
                                                    
                                                     }
                                                 }




                                            
                                            
                                            
                                         } 
                                        //$mirar_texto = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR"];
                                    }  elseif ($objeto1 == $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"]) { $usar_texto = "No puc fer aix&ograve;."; }
                                    //else { echo $objeto1." no es igual a ".$HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"]; }
                                 } 
                         } 
                        
                        //Buscamos en el paisaje:
                        if ($objeto_propiedad_indice == "lugar" && $HTTP_SESSION_VARS["objetos"][$objeto_indice][$objeto_propiedad_indice] == $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto_indice] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"])
                         {
                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["USARSE"]) && $objeto1 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["USARSE"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] != "" && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"])
                             {
                                        if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["activado"])
                                         {
//                                            $usar_texto = "Por hoy ya esta bien, gracias.";
                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["USARSE"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["USARSE"])
                                             {
                                                if ($usar_texto == "") { $usar_texto = "Per avui ja est&agrave; b&eacute;, gr&agrave;cies."; }
                                             }
                                            else { echo "No puc fer aix&ograve;."; }

                                         }
                                        else
                                         {
                                            $HTTP_SESSION_VARS["objetos"][$objeto_indice]["activado"] = TRUE;
//                                            $usar_texto = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"];
                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"] != "") { $usar_texto = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"]; }
                                            else { $usar_texto = "Has usat l'objecte."; }

                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"]; }
                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR"] = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"]; }
                                            

                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["alternar_coger_al_activar"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["alternar_coger_al_activar"])
                                             {
                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"] = FALSE;
                                                    //echo "<br>Objeto ya NO se puede coger.<br>";
                                                 }

                                                elseif (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"]) && !$HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"] = TRUE;
                                                    //echo "<br>Objeto ya se puede coger.<br>";
                                                 }

                                             }
                                            //echo "Objeto activado<br>";
                                            
                                            
                                            
                                            //Falta: calcular si los objetos y salidas que activa estan o no activados, y si no lo estan activarlos y mostrarlos con un echo.
                                            
                                            
                                            
                                            $salidas_a_activar = "";
                                            $objetos_a_activar = "";
                    
                                            if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_salidas_al_usarse"] != "")
                                             {
                                                $salidas_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_salidas_al_usarse"]);
                                                foreach ($salidas_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["lugares"][$salida_x] = TRUE;
                                                    
//                                                    if ($lugar[$salida_x]["NORTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["SUR"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["ESTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["OESTE"] == $HTTP_SESSION_VARS["estancia"])
//                                                    if ($salida_x == $HTTP_SESSION_VARS["estancia"])
                                                    if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                     {
                                                        //echo "Se ha activado una salida nueva en este lugar.<br>";
                                                     }
                                                    else
                                                     {
                                                        //echo "Activada salida nueva en otro lugar.<br>";
                                                     }
                                                 
                                                 }
                                             }


                                            if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_objetos_al_usarse"] != "")
                                             {
                                                $objetos_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_objetos_al_usarse"]);
                                                foreach ($objetos_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = TRUE;
                                                 
                                                    if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                     {
                                                        //echo "Se ha activado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                     }
                                                    
                                                    else
                                                     {
                                                        //echo "Activado objeto: ".$salida_x." en otro lugar<br>";
                                                     }
                                                 
                                                 }
                                             }
                                            
                                            
                                            
                                            
                                                $salidas_a_desactivar = "";
                                                $objetos_a_desactivar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_salidas_al_usarse"]);
                                                    foreach ($salidas_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = FALSE;
                                                        
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                         {
                                                            //echo "Se ha desactivado una salida en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Desactivada una salida en otro lugar.<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_objetos_al_usarse"] != "")
                                                 {
//                                                 echo "ayyyyy";
                                                    $objetos_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_objetos_al_usarse"]);
                                                    $desactivar_el_objeto = "";
                                                    foreach ($objetos_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        //$HTTP_SESSION_VARS["inventario"][$objeto_indice] = FALSE;
                                                        $desactivar_el_objeto .= $salida_x.",";
                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = FALSE;
                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en otro lugar.<br>";
                                                         }
                                                    
                                                     }
                                                 }
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                         }
                             } elseif ($objeto1 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]) { $usar_texto = "No puc fer aix&ograve;."; }
                         } 
                     }
                 }
             }
            
          if ($usar_texto != "") { echo $usar_texto; }
          else { echo "No trovo aix&ograve;."; }


               $objetos_a_desactivar = "";
                if (isset($desactivar_el_objeto) && $desactivar_el_objeto != "")
                 { 
                    $objetos_a_desactivar = explode(",",$desactivar_el_objeto);
                    foreach ($objetos_a_desactivar as $objeto_desactivar_indice)
                     {
                        $HTTP_SESSION_VARS["inventario"][$objeto_desactivar_indice] = FALSE;  
                     }
                 }


         }
                
                
                

             }

         }
        //Fin de la accion usar o utilizar.
        
        //Si se ha escogido la accion mover o empujar o tirar:
        elseif ($accion == "MOURE" || $accion == "ESPENYAR" || $accion == "ESTIRAR")
         {

            echo "<font color=\"#888888\" style=\"font-family:arial; font-size:12px; color:#888888;\">Has escollit <b>".$accion."</b> ".$objeto1."</font><br>";




            $mover_texto = "";
            if (isset($HTTP_SESSION_VARS["objetos"]))
             {
                foreach ($HTTP_SESSION_VARS["objetos"] as $objeto_indice => $objeto_array)
                 {
                    foreach ($objeto_array as $objeto_propiedad_indice => $objeto_propiedad_valor)
                     {
                        //Buscamos en el inventario:
                        foreach ($HTTP_SESSION_VARS["inventario"] as $inventario_indice => $inventario_valor)
                         {
                                if ($HTTP_SESSION_VARS["inventario"][$inventario_indice])
                                 {
                                    if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["MOVER"]) && $objeto1 == $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MOVER"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] != "")
                                    {
                                        if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["activado"])
                                         {
                                            
                                         
                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["MOVER"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MOVER"])
                                             {
                                                if ($mover_texto == "") { $mover_texto = "Per avui ja est&agrave; b&eacute;, gr&agrave;cies."; }
                                             }
                                            else { echo "No puc fer aix&ograve;."; }

                                         //   $mover_texto = "Por hoy ya esta bien, gracias.";
                                         
                                         }
                                        else
                                         {
                                            $HTTP_SESSION_VARS["objetos"][$inventario_indice]["activado"] = TRUE;
//                                            $mover_texto = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"];

                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"] != "") { $mover_texto = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["frase_al_usarse"]; }
                                            else { $mover_texto = "Has mogut l'objecte."; }

                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"] = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre_nuevo"]; }
                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR"] = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR_nuevo"]; }

                                            if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["alternar_coger_al_activar"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["alternar_coger_al_activar"])
                                             {
                                                if (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"]) && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"] = FALSE;
                                                    echo "Ja no es pot agafar.<br>";
                                                 }

                                                elseif (isset($HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"]) && !$HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$inventario_indice]["COGER"] = TRUE;
                                                    echo "Ja es pot agafar.<br>";
                                                 }

                                             
                                             }

                                            //echo "Objeto activado<br>";
                                            //Falta: calcular si los objetos y salidas que activa estan o no activados, y si no lo estan activarlos y mostrarlos con un echo.
                                            
                                            
                                            $salidas_a_activar = "";
                                            $objetos_a_activar = "";
                    
                                            if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_salidas_al_usarse"] != "")
                                             {
                                                $salidas_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_salidas_al_usarse"]);
                                                foreach ($salidas_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["lugares"][$salida_x] = TRUE;
                                                    
//                                                    if ($lugar[$salida_x]["NORTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["SUR"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["ESTE"] == $HTTP_SESSION_VARS["estancia"] || $lugar[$salida_x]["OESTE"] == $HTTP_SESSION_VARS["estancia"])
//                                                    if ($salida_x == $HTTP_SESSION_VARS["estancia"])
                                                    if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                     {
                                                        //echo "Se ha activado una salida nueva en este lugar (".$salida_x.").<br>";
                                                     }
                                                    else
                                                     {
                                                        //echo "Activada salida nueva en otro lugar.<br>";
                                                     }
                                                 
                                                 }
                                             }


                                            if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_salidas_al_usarse"] != "")
                                             {
                                                $objetos_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["activa_objetos_al_usarse"]);
                                                foreach ($objetos_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = TRUE;
                                                 
                                                    if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                     {
                                                        //echo "Se ha activado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                     }
                                                    
                                                    else
                                                     {
                                                        //echo "Activado objeto: ".$salida_x." en otro lugar<br>";
                                                     }
                                                 
                                                 }
                                             }







                                                $salidas_a_desactivar = "";
                                                $objetos_a_desactivar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_salidas_al_usarse"]);
                                                    foreach ($salidas_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = FALSE;
                                                        
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                         {
                                                            //echo "Se ha desactivado una salida en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Desactivada una salida en otro lugar.<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_objetos_al_usarse"] != "")
                                                 {
//                                                 echo "ayyyyy";
                                                    $objetos_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$inventario_indice]["desactiva_objetos_al_usarse"]);
                                                    $desactivar_el_objeto = "";
                                                    foreach ($objetos_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        //$HTTP_SESSION_VARS["inventario"][$inventario_indice] = FALSE;
//                                                        $desactivar_el_objeto2 = $inventario_indice;
                                                        $desactivar_el_objeto .= $salida_x.",";
                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = FALSE;
                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en otro lugar.<br>";
                                                         }
                                                    
                                                     }
                                                 }

                                            
                                            
                                         } 
                                        //$mirar_texto = $HTTP_SESSION_VARS["objetos"][$inventario_indice]["MIRAR"];
                                    } elseif ($objeto1 == $HTTP_SESSION_VARS["objetos"][$inventario_indice]["nombre"]) { $mover_texto = "No puc fer aix&ograve;."; }
                                 }
                         }
                        
                        //Buscamos en el paisaje:
                        if ($objeto_propiedad_indice == "lugar" && $HTTP_SESSION_VARS["objetos"][$objeto_indice][$objeto_propiedad_indice] == $HTTP_SESSION_VARS["estancia"] && !$HTTP_SESSION_VARS["inventario"][$objeto_indice] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"])
                         {

                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["MOVER"]) && $objeto1 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MOVER"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] != "" && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"])
                             {

                                        if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["activado"])
                                         {

                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["MOVER"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MOVER"])
                                             {
                                                if ($mover_texto == "") { $mover_texto = "Per avui ja est&agrave; b&eacute;, gr&agrave;cies."; }
                                             }
                                            else { echo "No puc fer aix&ograve;."; }


//                                            $mover_texto = "Por hoy ya esta bien, gracias.";
                                         }
                                        else
                                         {
                                            $HTTP_SESSION_VARS["objetos"][$objeto_indice]["activado"] = TRUE;

//                                            $mover_texto = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"];
                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"] != "") { $mover_texto = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["frase_al_usarse"]; }
                                            else { $mover_texto = "Has mogut l'objecte."; }

                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre_nuevo"]; }
                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"] != "") { $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR"] = $HTTP_SESSION_VARS["objetos"][$objeto_indice]["MIRAR_nuevo"]; }
                                            

                                            if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["alternar_coger_al_activar"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["alternar_coger_al_activar"])
                                             {
                                                if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"]) && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"] = FALSE;
                                                    //echo "<br>Objeto ya NO se puede coger.<br>";
                                                 }

                                                elseif (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"]) && !$HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"])
                                                 {
                                                    $HTTP_SESSION_VARS["objetos"][$objeto_indice]["COGER"] = TRUE;
                                                    //echo "<br>Objeto ya se puede coger.<br>";
                                                 }

                                             }
                                            //echo "Objeto activado<br>";
                                            
                                            
                                            
                                            //Falta: calcular si los objetos y salidas que activa estan o no activados, y si no lo estan activarlos y mostrarlos con un echo.


                                            $salidas_a_activar = "";
                                            $objetos_a_activar = "";
                                            
                                            if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_salidas_al_usarse"] != "")
                                             {
                                                $salidas_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_salidas_al_usarse"]);
                                                foreach ($salidas_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["lugares"][$salida_x] = TRUE;
                                                    
                                                    if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                     {
                                                        //echo "Se ha activado una salida nueva en este lugar.<br>";
                                                     }
                                                    else
                                                     {
                                                        //echo "Activada salida nueva en otro lugar.<br>";
                                                     }
                                                 
                                                 }
                                             }


                                            if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_salidas_al_usarse"] != "")
                                             {
                                                $objetos_a_activar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["activa_objetos_al_usarse"]);
                                                foreach ($objetos_a_activar as $salida_x)
                                                 {
                                                    $salida_x = trim($salida_x);
                                                    $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = TRUE;
                                                 
                                                    if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                     {
                                                        //echo "Se ha activado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                     }
                                                    
                                                    else
                                                     {
                                                        //echo "Activado objeto: ".$salida_x." en otro lugar<br>";
                                                     }
                                                 
                                                 }
                                             }








                                                $salidas_a_desactivar = "";
                                                $objetos_a_desactivar = "";
                    
                                                if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_salidas_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_salidas_al_usarse"] != "")
                                                 {
                                                    $salidas_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_salidas_al_usarse"]);
                                                    foreach ($salidas_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        $HTTP_SESSION_VARS["lugares"][$salida_x] = FALSE;
                                                        
                                                        if ($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] == $salida_x || $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] == $salida_x)
                                                         {
                                                            //echo "Se ha desactivado una salida en este lugar.<br>";
                                                         }
                                                        else
                                                         {
                                                            //echo "Desactivada una salida en otro lugar.<br>";
                                                         }
                                                     
                                                     }
                                                 }

                                                if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_objetos_al_usarse"] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_objetos_al_usarse"] != "")
                                                 {
//                                                 echo "ayyyyy";
                                                    $objetos_a_desactivar = explode(",",$HTTP_SESSION_VARS["objetos"][$objeto_indice]["desactiva_objetos_al_usarse"]);
                                                    $desactivar_el_objeto = "";
                                                    foreach ($objetos_a_desactivar as $salida_x)
                                                     {
                                                        $salida_x = trim($salida_x);
                                                        //$HTTP_SESSION_VARS["inventario"][$objeto_indice] = FALSE;
//                                                        $desactivar_el_objeto2 = $objeto_indice;
                                                        $desactivar_el_objeto .= $salida_x.",";
                                                        $HTTP_SESSION_VARS["objetos"][$salida_x]["estado"] = FALSE;
                                                     
                                                        if ($HTTP_SESSION_VARS["objetos"][$salida_x]["lugar"] == $HTTP_SESSION_VARS["estancia"])
                                                         {
                                                            //echo "Se ha desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en este lugar.<br>";
                                                         }
                                                   
                                                        else
                                                         {
                                                            //echo "Desactivado objeto: ".$HTTP_SESSION_VARS["objetos"][$salida_x]["nombre"]." en otro lugar.<br>";
                                                         }
                                                    
                                                     }
                                                 }




                                         } 
                             } elseif ($objeto1 == $HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]) { $mover_texto = "No puc fer aix&ograve;."; }
                         }
                     }
                 }
             }
            
          if ($mover_texto != "") { echo $mover_texto; }
          else { echo "No trovo aix&ograve;."; }




               $objetos_a_desactivar = "";
                if (isset($desactivar_el_objeto) && $desactivar_el_objeto != "")
                 { 
                    $objetos_a_desactivar = explode(",",$desactivar_el_objeto);
                    foreach ($objetos_a_desactivar as $objeto_desactivar_indice)
                     {
                        $HTTP_SESSION_VARS["inventario"][$objeto_desactivar_indice] = FALSE;  
                     }
                 }




         }
        //Fin de la accion mover.

        //Si se ha escogido una accion invalida:
        else { echo "<center><b>No entenc l'ordre.</b></center>"; }

     } //Fin del if que calcula si se han enviado minimo dos parametros

     else { echo "Par&agrave;metres insuficients per a processar.<br>"; } //si no se han enviado minimo dos parametros, avisa.

 } //Fin de function.


//Funcion para describir el lugar donde se encuentra uno, lisar objetos y salidas:
function describir_lugar($estancia)
 {
    global $sesion;
    global $this_file;
    global $lugar;
    global $HTTP_SESSION_VARS;
    global $frase_inicial;
    global $frase_final;
    global $lugar_para_acabar_el_juego;

    if (isset($frase_inicial) && $frase_inicial && $frase_inicial != "")
     {
        echo "<div style=\"background:transparent; font-family:courier; font-size:14px; color:#ffffff; line-height:14px;\"><font size=\"4\" color=\"#ffffff\" face=\"courier\" style=\"background:transparent; font-family:courier; font-size:14px; color:#ffffff; line-height:14px;\">".$frase_inicial."</font></div><br>";
        $frase_inicial = FALSE;
     }

    if ($HTTP_SESSION_VARS["estancia"] == $lugar_para_acabar_el_juego)
     {  
         if (isset($frase_final) && $frase_final && $frase_final != "") { echo $frase_final; }
         else { echo "Fin del joc."; }
         if (file_exists("paisajes/".$HTTP_SESSION_VARS["estancia"].".jpg")) { $extension_paisaje_img = ".jpg"; }
         else { $extension_paisaje_img = ".gif"; }
         ?>
         <br><br><img src="paisajes/<?php echo $HTTP_SESSION_VARS["estancia"].$extension_paisaje_img; ?>" width="540" height="340" align="center" class="invisible" style="visibility:<?php echo $HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]; ?>; z-index:1; cursor:crosshair;">
         <?php
     }
    else {

    $representar = "";

    if (isset($lugar[$estancia]["descripcion"]) && $lugar[$estancia]["descripcion"] != "") { $representar .= "<b style=\"font-family:arial; font-size:14px; color:#ffffff;\">".$lugar[$estancia]["descripcion"]."</b><br>"; }

    if (isset($lugar[$estancia]["NORD"]) || isset($lugar[$estancia]["SUD"]) || isset($lugar[$estancia]["EST"]) || isset($lugar[$estancia]["OEST"]))
     {
        $representar .= "<br><b style=\"font-family:arial; font-size:12px; color:#888888;\">Sortides</b>: <b style=\"font-family:arial; font-size:12px; color:#bbbbbb;\">";
        $hay_salida = FALSE;
        
//        if ($HTTP_SESSION_VARS["lugares"][$lugar[$estancia]["ESTE"]]) { echo "TRUE"; }
//        if (!$HTTP_SESSION_VARS["lugares"][$lugar[$estancia]["ESTE"]]) { echo "FALSE"; }

        $n = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["NORD"] : "sin nombre";
        $s = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["SUD"] : "sin nombre";
        $e = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["EST"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["EST"] : "sin nombre";
        $o = (isset($lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"]) && $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"]) ? $lugar[$HTTP_SESSION_VARS["estancia"]]["OEST"] : "sin nombre";
        
        if (isset($lugar[$estancia]["NORD"]) && $lugar[$estancia]["NORD"] && $HTTP_SESSION_VARS["lugares"][$lugar[$estancia]["NORD"]]) { $representar .= "[<a href=\"".$this_file."?comando=anar+nord&".$sesion."\" alt=\"ANAR NORD\" title=\"ANAR NORD (".$HTTP_SESSION_VARS["lugar_nombre"][$n].")\" accesskey=\"n\"><u>N</u>ORD</a>] "; $hay_salida = TRUE; }
        if (isset($lugar[$estancia]["SUD"]) && $lugar[$estancia]["SUD"] && $HTTP_SESSION_VARS["lugares"][$lugar[$estancia]["SUD"]]) { $representar .= "[<a href=\"".$this_file."?comando=anar+sud&".$sesion."\" alt=\"ANAR SUD\" title=\"ANAR SUD (".$HTTP_SESSION_VARS["lugar_nombre"][$s].")\" accesskey=\"s\"><u>S</u>UD</a>] "; $hay_salida = TRUE; }
        if (isset($lugar[$estancia]["OEST"]) && $lugar[$estancia]["OEST"] && $HTTP_SESSION_VARS["lugares"][$lugar[$estancia]["OEST"]]) { $representar .= "[<a href=\"".$this_file."?comando=anar+oest&".$sesion."\" alt=\"ANAR OEST\" title=\"ANAR OEST (".$HTTP_SESSION_VARS["lugar_nombre"][$o].")\" accesskey=\"o\"><u>O</u>EST</a>] "; $hay_salida = TRUE; }
        if (isset($lugar[$estancia]["EST"]) && $lugar[$estancia]["EST"] && $HTTP_SESSION_VARS["lugares"][$lugar[$estancia]["EST"]]) { $representar .= "[<a href=\"".$this_file."?comando=anar+est&".$sesion."\" alt=\"ANAR EST\" title=\"ANAR EST (".$HTTP_SESSION_VARS["lugar_nombre"][$e].")\" accesskey=\"e\"><u>E</u>ST</a>] "; $hay_salida = TRUE; }
        if (!$hay_salida) { $representar .= "NO HI HA SORTIDA I EST&Agrave;S ATRAPAT."; }
        $representar .= "</b><br>";
     }

    if (isset($HTTP_SESSION_VARS["objetos"]))
     {
        $objetos = "";
        $imagenes = "";
        $object_position = "";
        foreach ($HTTP_SESSION_VARS["objetos"] as $objeto_indice => $objeto_array)
         {
            foreach ($objeto_array as $objeto_propiedad_indice => $objeto_propiedad_valor)
             {
    
//                echo $objeto_indice;
                if ($objeto_propiedad_indice == "lugar" && $HTTP_SESSION_VARS["objetos"][$objeto_indice][$objeto_propiedad_indice] == $estancia && !$HTTP_SESSION_VARS["inventario"][$objeto_indice] && $HTTP_SESSION_VARS["objetos"][$objeto_indice]["estado"])
                 {
                    
                    if ($HTTP_SESSION_VARS["objetos"][$objeto_indice]["activado"] && file_exists("objetos/".$objeto_indice."_a.jpg") || $HTTP_SESSION_VARS["objetos"][$objeto_indice]["activado"] && file_exists("objetos/".$objeto_indice."_a.gif")) { $imagen_objeto = $objeto_indice . "_a";  $object_position = "top:".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["top_position_activado"]."; left:".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["left_position_activado"]; }
                    else { $imagen_objeto = $objeto_indice; $object_position = "top:".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["top_position"]."; left:".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["left_position"]; }
                    
                    if (file_exists("objetos/".$imagen_objeto.".jpg")) {
                        //$imagenes .= "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\"><img src=\"objetos/".$objeto_indice.".jpg\" border=\"0\" alt=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\" style=\"position:absolute; top:".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["top_position"]."; left:".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["left_position"].";\"></a>";
                        $imagen_objeto .= ".jpg";
                    } else { $imagen_objeto .= ".gif"; }

                    $zindex = (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["zindex"])) ? $HTTP_SESSION_VARS["objetos"][$objeto_indice]["zindex"] : 2;

                    if (isset($HTTP_SESSION_VARS["objetos"][$objeto_indice]["clickable"]) && !$HTTP_SESSION_VARS["objetos"][$objeto_indice]["clickable"])
                     {
                         $imagenes .= "<div style=\"position:absolute;".$object_position."; visibility:".$HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]."; z-index:".$zindex.";\" class=\"invisible\"><img src=\"objetos/".$imagen_objeto."\" border=\"0\" alt=\"\" style=\"visibility:".$HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]."; z-index:".$zindex.";\" class=\"invisible\"></div>";
                     }
                    else { $imagenes .= "<div style=\"position:absolute;".$object_position."; visibility:".$HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]."; z-index:".$zindex.";\" class=\"invisible\"><a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\"><img src=\"objetos/".$imagen_objeto."\" border=\"0\" alt=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\" style=\"visibility:".$HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]."; z-index:".$zindex."; cursor:pointer; cursor:hand;\" class=\"invisible\"></a></div>"; }
                    
                    $imagen_objeto = "";
                    $object_position = "";
                    
//                    echo "<img src=\"objetos/".$objeto_indice.".gif\" style=\"position:static; top:100; left:50;\">";
                    
                    $objetos .= "\"<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"]."\">".$HTTP_SESSION_VARS["objetos"][$objeto_indice]["nombre"] . "</a>\" ";
                 }
             }
         }

    ?>
    <table width="540" height="340" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td width="540" height="340">
                <div style="position:relative; width:540px; height:340px;">
                <?php
                echo $imagenes;
                
                if (file_exists("paisajes/".$HTTP_SESSION_VARS["estancia"].".jpg")) {
                ?>
                <img src="paisajes/<?php echo $HTTP_SESSION_VARS["estancia"]; ?>.jpg" width="540" height="340" align="center" style="visibility:<?php echo $HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]; ?>; z-index:1; cursor:crosshair;" class="invisible">
                <?php
                } else {
                ?>
                <img src="paisajes/<?php echo $HTTP_SESSION_VARS["estancia"]; ?>.gif" width="540" height="340" align="center" style="visibility:<?php echo $HTTP_SESSION_VARS["javascript_soportado_invisibilidad"]; ?>; z-index:1; cursor:crosshair;" class="invisible">
                <?php
                }
                ?>
                </div>
            </td>
        </tr>
    </table>
    <?php

         echo $representar;
         if ($objetos != "") { echo "<b style=\"font-family:arial; font-size:12px; color:#888888;\">Objectes</b>: <b style=\"font-family:arial; font-size:12px; color:#bbbbbb;\">".$objetos."</b><br>"; }
     }

    } //fin else

 }


?>
