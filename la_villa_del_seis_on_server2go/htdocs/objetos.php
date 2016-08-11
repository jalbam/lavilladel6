<?php

//Calcula si no existe la variable de sesion con el inventario:
if (!isset($HTTP_SESSION_VARS["inventario"]))
 {

    //Se inicia la variable de sesion con el inventario (vacia):
    $HTTP_SESSION_VARS["inventario"] = array(
                                                0 => TRUE,
                                                1 => FALSE,
                                                2 => FALSE,
                                                3 => FALSE,
                                                4 => FALSE,
                                                5 => FALSE,
                                                6 => FALSE,
                                                7 => FALSE,
                                                8 => FALSE,
                                                9 => FALSE,
                                                10 => FALSE,
                                                11 => FALSE,
                                                12 => FALSE,
                                                13 => FALSE,
                                                14 => FALSE,
                                                15 => FALSE,
                                                16 => FALSE,
                                                17 => FALSE,
                                                18 => FALSE,
                                                19 => FALSE,
                                                20 => FALSE,
                                                21 => FALSE,
                                                22 => FALSE,
                                                23 => FALSE,
                                                24 => FALSE,
                                                25 => FALSE,
                                                26 => FALSE,
                                                27 => FALSE,
                                                28 => FALSE,
                                                29 => FALSE,
                                                30 => FALSE,
                                                31 => FALSE,
                                                32 => FALSE,
                                                33 => FALSE,
                                                34 => FALSE,
                                                35 => FALSE,
                                                36 => FALSE,
                                                37 => FALSE,
                                                38 => FALSE,
                                                39 => FALSE,
                                                40 => FALSE,
                                                41 => FALSE,
                                                42 => FALSE,
                                                43 => FALSE,
                                                44 => FALSE,
                                                45 => FALSE,
                                                46 => FALSE,
                                                47 => FALSE,
                                                48 => FALSE,
                                                49 => FALSE,
                                                50 => FALSE,
                                                51 => FALSE,
                                                52 => FALSE,
                                                53 => FALSE,
                                                54 => FALSE,
                                                55 => FALSE,
                                                56 => FALSE,
                                                57 => FALSE,
                                                58 => FALSE,
                                                59 => FALSE,
                                                60 => FALSE,
                                                61 => FALSE,
                                                62 => FALSE,
                                                63 => FALSE,
                                                64 => FALSE,
                                                65 => FALSE,
                                                66 => FALSE,
                                                67 => FALSE,
                                                68 => FALSE,
                                                69 => FALSE,
                                                70 => FALSE,
                                                71 => FALSE
                                            );


    //Objeto LLAVE:
    $HTTP_SESSION_VARS["objetos"][0]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][0]["activado"] = TRUE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][0]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][0]["nombre"] = "LLAVE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][0]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_usarse"] = "Abres el maletero con la llave."; //Frase a mostrar cuando el objeto se activa (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["lugar"] = FALSE; //No se encuentra en ningun lugar.
    $HTTP_SESSION_VARS["objetos"][0]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][0]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["activa_objetos_al_usarse"] = "1,2,34"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["MIRAR"] = "Es la llave de mi coche."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][0]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][0]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][0]["COGER"] = FALSE; //No se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][0]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][0]["USAR"] = "MALETERO CERRADO"; //No se utiliza con nada.
    $HTTP_SESSION_VARS["objetos"][0]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][0]["top_position"] = 0; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][0]["left_position"] = 0; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][0]["top_position_activado"] = 0; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][0]["left_position_activado"] = 0; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto MALETERO CERRADO/MALETERO ABIERTO:
    $HTTP_SESSION_VARS["objetos"][1]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][1]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][1]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][1]["nombre"] = "MALETERO CERRADO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][1]["nombre_nuevo"] = "MALETERO ABIERTO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_usarse"] = "Abres el maletero con la llave."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_no_cogerse"] = "Eso es demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][1]["lugar"] = "2"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][1]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][1]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["activa_objetos_al_usarse"] = "2,34"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["MIRAR"] = "Ma&ntilde;ana lo limpio."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][1]["MIRAR_nuevo"] = "Ma&ntilde;ana lo ordeno."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][1]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][1]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][1]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][1]["USAR"] = "LLAVE"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][1]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][1]["top_position"] = "0px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][1]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][1]["top_position_activado"] = "0px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][1]["left_position_activado"] = "0px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto LINTERNA APAGADA/LINTERNA ENCENDIDA:
    $HTTP_SESSION_VARS["objetos"][2]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][2]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][2]["zindex"] = 4; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][2]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][2]["nombre"] = "LINTERNA APAGADA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][2]["nombre_nuevo"] = "LINTERNA ENCENDIDA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_usarse"] = "Con la linterna encendida ya puedes visitar m&aacute;s lugares."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_cogerse"] = "Esta linterna s&iacute; que es buena, as&iacute; que te la llevas."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][2]["lugar"] = "2"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][2]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][2]["activa_salidas_al_usarse"] = "5,10,13,16,18"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["MIRAR"] = "Es una linterna muy potente, pero est&aacute; apagada."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][2]["MIRAR_nuevo"] = "Es una buena linterna."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][2]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][2]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][2]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][2]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][2]["USARSE"] = TRUE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][2]["top_position"] = "200px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][2]["left_position"] = "200px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][2]["top_position_activado"] = "200px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][2]["left_position_activado"] = "200px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto ALAMBRE:
    $HTTP_SESSION_VARS["objetos"][3]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][3]["activado"] = TRUE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][3]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][3]["nombre"] = "ALAMBRE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][3]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_cogerse"] = "Recoges el fino y oxidado alambre."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][3]["lugar"] = "3"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][3]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][3]["activa_salidas_al_usarse"] = "7"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["desactiva_objetos_al_usarse"] = "6,33"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["MIRAR"] = "Es un alambre bastante fino y oxidado. Es flexible pero resistente."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][3]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][3]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][3]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][3]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][3]["USAR"] = "CERRADURA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][3]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][3]["top_position"] = "320px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][3]["left_position"] = "150px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][3]["top_position_activado"] = "320px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][3]["left_position_activado"] = "150px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto RAMA/INVENTO:
    $HTTP_SESSION_VARS["objetos"][4]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][4]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][4]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][4]["nombre"] = "RAMA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][4]["nombre_nuevo"] = "INVENTO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_usarse"] = "Aplicas un poco de las hierbas en la rama, formando un invento."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_cogerse"] = "Coges la firme rama."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][4]["lugar"] = "4"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][4]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][4]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["MIRAR"] = "Es una rama podrida pero firme."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][4]["MIRAR_nuevo"] = "Es una rama con hierba <i>\"Helix Atrayentus\"</i>, pero demasiado seca para atraer a cualquier animal."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][4]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][4]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][4]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][4]["USAR"] = "HIERBAS MEDICINALES, ORILLA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][4]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][4]["top_position"] = "230px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][4]["left_position"] = "120px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][4]["top_position_activado"] = "230px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][4]["left_position_activado"] = "120px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CARACOL PEGADO:
    $HTTP_SESSION_VARS["objetos"][5]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][5]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][5]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][5]["nombre"] = "CARACOL PEGADO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][5]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_usarse"] = "El caracol se desengancha, acude a tu invento y lo coges."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_no_cogerse"] = "No lo alcanzo y adem&aacute;s est&aacute; muy pegado. Darle con alg&uacute;n objeto no servir&iacute;a porque se perder&iacute;a entre los matorrales al caer."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][5]["lugar"] = "4"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][5]["animado"] = TRUE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][5]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["desactiva_objetos_al_usarse"] = "5"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["MIRAR"] = "Es un caracol pegado en una rama y no llego. Darle con alg&uacute;n objeto para cogerlo no servir&iacute;a porque se perder&iacute;a entre los matorrales al caer. Creo que est&aacute; vivo."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][5]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][5]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][5]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][5]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][5]["USAR"] = "INVENTO MOJADO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][5]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][5]["top_position"] = "80px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][5]["left_position"] = "330px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][5]["top_position_activado"] = "80px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][5]["left_position_activado"] = "330px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto CERRADURA:
    $HTTP_SESSION_VARS["objetos"][6]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][6]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][6]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][6]["nombre"] = "CERRADURA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][6]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_usarse"] = "Abres la puerta con el alambre. Ya puedes acceder al interior de la casa."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_no_cogerse"] = "Para qu&eacute; quiero yo una cerradura."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][6]["lugar"] = "5"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][6]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][6]["activa_salidas_al_usarse"] = "6"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["desactiva_objetos_al_usarse"] = "6,33"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["MIRAR"] = "No parece muy sofisticada."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][6]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][6]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][6]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][6]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][6]["USAR"] = "ALAMBRE"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][6]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][6]["top_position"] = "160px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][6]["left_position"] = "338px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][6]["top_position_activado"] = "160px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][6]["left_position_activado"] = "338px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CUCHARA:
    $HTTP_SESSION_VARS["objetos"][7]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][7]["activado"] = TRUE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][7]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][7]["nombre"] = "CUCHARA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][7]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_usarse"] = "Abres el tarro con la cuchara. Ya puedes acceder a las hierbas medicinales que conten&iacute;a."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_cogerse"] = "Como nadie va a echar de menos esta cuchara, la coges."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][7]["lugar"] = "6"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][7]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][7]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["MIRAR"] = "Es la t&iacute;pica cuchara de postre."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][7]["MIRAR_nuevo"] = "Est&aacute; un poco doblada pero sigue siendo la t&iacute;pica cuchara de postre."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][7]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][7]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][7]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][7]["USAR"] = "TARRO CERRADO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][7]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][7]["top_position"] = "260px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][7]["left_position"] = "380px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][7]["top_position_activado"] = "260px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][7]["left_position_activado"] = "380px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto TARRO GRANDE/RED:
    $HTTP_SESSION_VARS["objetos"][8]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][8]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][8]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][8]["nombre"] = "TARRO GRANDE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][8]["nombre_nuevo"] = "RED"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_cogerse"] = "Es un bonito tarro de caf&eacute; cubierto por una red verde."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][8]["lugar"] = "7"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][8]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][8]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["MIRAR"] = "Esta vac&iacute;o pero a&uacute;n huele a caf&eacute;."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][8]["MIRAR_nuevo"] = "Es una red verde oscuro."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][8]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][8]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][8]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][8]["USAR"] = "NAVAJA, PALO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][8]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][8]["top_position"] = "310px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][8]["left_position"] = "410px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][8]["top_position_activado"] = "310px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][8]["left_position_activado"] = "410px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    //Objeto PUERTA OXIDADA:
    $HTTP_SESSION_VARS["objetos"][9]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][9]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][9]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][9]["nombre"] = "PUERTA OXIDADA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][9]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_usarse"] = "Lubricas la puerta y puedes abrirla. Ya puedes acceder al interior de la casa."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_no_cogerse"] = "Pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][9]["lugar"] = "8"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][9]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][9]["activa_salidas_al_usarse"] = "7"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["desactiva_objetos_al_usarse"] = "9"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["MIRAR"] = "Es una puerta enorme y est&aacute; oxidada. No la puedes abrir sin grasa o algo que se le parezca."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][9]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][9]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][9]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][9]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][9]["USAR"] = "PALITO EMBABADO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][9]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][9]["top_position"] = "110px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][9]["left_position"] = "240px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][9]["top_position_activado"] = "110px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][9]["left_position_activado"] = "240px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto PALO/SALABRE:
    $HTTP_SESSION_VARS["objetos"][10]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][10]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][10]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][10]["nombre"] = "PALO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][10]["nombre_nuevo"] = "SALABRE"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_usarse"] = "Con un poco de red de la que tienes consigues fabricar un salabre."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_cogerse"] = "Ser&aacute; un palo de alg&uacute;n excursionista, pero como est&aacute; abandonado lo recoges."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][10]["lugar"] = "10"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][10]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][10]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["MIRAR"] = "Es un palo largo y fuerte, probablemente de alg&uacute;n excursionista."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][10]["MIRAR_nuevo"] = "Es un salabre un poco mal hecho, pero servir&aacute;."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][10]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][10]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][10]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][10]["USAR"] = "RED, FOSA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][10]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][10]["top_position"] = "200px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][10]["left_position"] = "360px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][10]["top_position_activado"] = "180px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][10]["left_position_activado"] = "331px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto SAL:
    $HTTP_SESSION_VARS["objetos"][11]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][11]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][11]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][11]["nombre"] = "SAL"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][11]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][11]["frase_al_usarse"] = "La sal absorbe la humedad de las cerillas."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][11]["frase_al_cogerse"] = "Coges la sal por si acaso."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][11]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][11]["lugar"] = "11"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][11]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][11]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["MIRAR"] = "Es un tarrito lleno de sal."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][11]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][11]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][11]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][11]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][11]["USAR"] = "CERILLAS HUMEDAS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][11]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][11]["top_position"] = "260px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][11]["left_position"] = "180px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][11]["top_position_activado"] = "260px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][11]["left_position_activado"] = "180px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PALITO/PALITO EMBABADO:
    $HTTP_SESSION_VARS["objetos"][12]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][12]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][12]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][12]["nombre"] = "PALITO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][12]["nombre_nuevo"] = "PALITO EMBABADO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][12]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][12]["frase_al_cogerse"] = "Coges un palo peque&ntilde;o."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][12]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][12]["lugar"] = "12"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][12]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][12]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["MIRAR"] = "Es un palo diminuto."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][12]["MIRAR_nuevo"] = "Es un palo diminuto lubricado con babas de caracol."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][12]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][12]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][12]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][12]["USAR"] = "PLASTICO BABOSO, PUERTA OXIDADA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][12]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][12]["top_position"] = "290px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][12]["left_position"] = "240px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][12]["top_position_activado"] = "290px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][12]["left_position_activado"] = "240px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto TARRO CERRADO/HIERBAS MEDICINALES:
    $HTTP_SESSION_VARS["objetos"][13]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][13]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][13]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][13]["nombre"] = "TARRO CERRADO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][13]["nombre_nuevo"] = "HIERBAS MEDICINALES"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][13]["frase_al_usarse"] = "Abres el tarro con la cuchara. Ya puedes acceder a las hierbas medicinales que conten&iacute;a."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][13]["frase_al_cogerse"] = "Coges un tarro lleno de unas extra&ntilde;as hierbas."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][13]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][13]["lugar"] = "14"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][13]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][13]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["MIRAR"] = "Es un tarro con una etiqueta que pone &quot;<i>HELIX ATRAYENTUS</i>&quot;."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][13]["MIRAR_nuevo"] = "Son unas hierbas llamadas &quot;HELIX ATRAYENTUS&quot;."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][13]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][13]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][13]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][13]["USAR"] = "CUCHARA, RAMA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][13]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][13]["top_position"] = "275px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][13]["left_position"] = "450px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][13]["top_position_activado"] = "280px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][13]["left_position_activado"] = "450px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto ZAPATOS:
    $HTTP_SESSION_VARS["objetos"][14]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][14]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][14]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][14]["nombre"] = "ZAPATOS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][14]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][14]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][14]["frase_al_cogerse"] = "Alg&uacute;n ni&ntilde;o debi&oacute; perderlos."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][14]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][14]["lugar"] = "20"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][14]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][14]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["MIRAR"] = "Son unos zapatos de un ni&ntilde;o peque&ntilde;o."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][14]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][14]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][14]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][14]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][14]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][14]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][14]["top_position"] = "280px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][14]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][14]["top_position_activado"] = "280px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][14]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto JUGUETE/JUGUETE CLAVADO:
    $HTTP_SESSION_VARS["objetos"][15]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][15]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][15]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][15]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][15]["nombre"] = "JUGUETE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][15]["nombre_nuevo"] = "JUGUETE CLAVADO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][15]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][15]["frase_al_cogerse"] = "Coges el mu&ntilde;eco."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][15]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][15]["lugar"] = "17"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][15]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][15]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["MIRAR"] = "Es un beb&eacute; de pl&aacute;stico."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][15]["MIRAR_nuevo"] = "Es un beb&eacute; de pl&aacute;stico traspasado con un alfiler."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][15]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][15]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][15]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][15]["USAR"] = "ALFILER, ALTAR MISTERIOSO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][15]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][15]["top_position"] = "150px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][15]["left_position"] = "170px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][15]["top_position_activado"] = "150px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][15]["left_position_activado"] = "170px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CASCADA:
    $HTTP_SESSION_VARS["objetos"][16]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][16]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][16]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][16]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][16]["nombre"] = "CASCADA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][16]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][16]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][16]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][16]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][16]["lugar"] = "18"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][16]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][16]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][16]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][16]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][16]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][16]["MIRAR"] = "Es una cascada preciosa, el agua brilla con la luz de la linterna."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][16]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][16]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][16]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][16]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][16]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][16]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][16]["top_position"] = "0px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][16]["left_position"] = "160px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][16]["top_position_activado"] = "0px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][16]["left_position_activado"] = "160px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)

  
    //Objeto ORILLA:
    $HTTP_SESSION_VARS["objetos"][17]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][17]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][17]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][17]["nombre"] = "ORILLA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][17]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][17]["frase_al_usarse"] = "Pruebas a mojar el invento con cuidado de no perder las hierbas que contiene."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][17]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][17]["frase_al_no_cogerse"] = "No voy a ir por ah&iacute; con agua."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][17]["lugar"] = "18"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][17]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][17]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["activa_objetos_al_usarse"] = "25"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["MIRAR"] = "La luna se refleja en el agua."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][17]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][17]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][17]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][17]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][17]["USAR"] = "INVENTO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][17]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][17]["top_position"] = "220px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][17]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][17]["top_position_activado"] = "220px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][17]["left_position_activado"] = "0px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto VELAS APAGADAS/VELAS ENCENDIDAS:
    $HTTP_SESSION_VARS["objetos"][18]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][18]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][18]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][18]["nombre"] = "VELAS APAGADAS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][18]["nombre_nuevo"] = "VELAS ENCENDIDAS"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][18]["frase_al_usarse"] = "Enciendes las velas con las cerillas y, aunque no iluminen mucho, puedes ver que hay un pl&aacute;stico en la cueva."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][18]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][18]["frase_al_no_cogerse"] = "Est&aacute;n bien donde est&aacute;n."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][18]["lugar"] = "36"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][18]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][18]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["activa_objetos_al_usarse"] = "24"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["MIRAR"] = "Apenas se distinguen entre tanta oscuridad."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][18]["MIRAR_nuevo"] = "No iluminan mucho pero s&iacute; lo suficiente."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][18]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][18]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][18]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][18]["USAR"] = "CERILLAS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][18]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][18]["top_position"] = "110px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][18]["left_position"] = "380px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][18]["top_position_activado"] = "110px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][18]["left_position_activado"] = "380px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto NAVAJA:
    $HTTP_SESSION_VARS["objetos"][19]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][19]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][19]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][19]["nombre"] = "NAVAJA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][19]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][19]["frase_al_usarse"] = "Cortas la extensa red con la navaja y consigues apartarla del tarro que cubr&iacute;a."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][19]["frase_al_cogerse"] = "Coges una navaja met&aacute;lica."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][19]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][19]["lugar"] = "24"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][19]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][19]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["MIRAR"] = "Es una navaja muy afilada. A saber para qu&eacute; habr&aacute; sido utilizada"; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][19]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][19]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][19]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][19]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][19]["USAR"] = "TARRO GRANDE"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][19]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][19]["top_position"] = "220px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][19]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][19]["top_position_activado"] = "220px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][19]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CAJAS/CAJA:
    $HTTP_SESSION_VARS["objetos"][20]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][20]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][20]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][20]["nombre"] = "CAJAS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][20]["nombre_nuevo"] = "CAJA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][20]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][20]["frase_al_cogerse"] = "Coges las dos cajas. Son bastante grandes y parecen resistentes."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][20]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][20]["lugar"] = "27"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][20]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][20]["activa_salidas_al_usarse"] = "37"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["activa_objetos_al_usarse"] = "31"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["MIRAR"] = "Son dos cajas grandes. Yo creo que soportar&iacute;an mi peso."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][20]["MIRAR_nuevo"] = "Es una caja grande."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][20]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][20]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][20]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][20]["USAR"] = "PUERTA ALTA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][20]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][20]["top_position"] = "240px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][20]["left_position"] = "230px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][20]["top_position_activado"] = "240px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][20]["left_position_activado"] = "230px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto TIJERAS:
    $HTTP_SESSION_VARS["objetos"][21]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][21]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][21]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][21]["nombre"] = "TIJERAS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][21]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][21]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][21]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][21]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][21]["lugar"] = "30"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][21]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][21]["activa_salidas_al_usarse"] = "43"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][21]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][21]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][21]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][21]["MIRAR"] = "Esperemos que no sean el arma de ning&uacute;n crimen."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][21]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][21]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][21]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][21]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][21]["USAR"] = "MATORRALES"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][21]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][21]["top_position"] = "260px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][21]["left_position"] = "10px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][21]["top_position_activado"] = "260px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][21]["left_position_activado"] = "10px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto FOSA:
    $HTTP_SESSION_VARS["objetos"][22]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][22]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][22]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][22]["nombre"] = "FOSA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][22]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][22]["frase_al_usarse"] = "Consigues pescar unas tijeras de la fosa. Por si acaso son el arma de alg&uacute;n crimen, las coges con cuidado."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][22]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][22]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][22]["lugar"] = "30"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][22]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][22]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["activa_objetos_al_usarse"] = "21"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["MIRAR"] = "A saber qu&eacute; esconder&aacute;n esas oscuras aguas."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][22]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][22]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][22]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][22]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][22]["USAR"] = "SALABRE"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][22]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][22]["top_position"] = "145px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][22]["left_position"] = "75px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][22]["top_position_activado"] = "145px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][22]["left_position_activado"] = "75px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto ALTAR MISTERIOSO:
    $HTTP_SESSION_VARS["objetos"][23]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][23]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][23]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][23]["nombre"] = "ALTAR MISTERIOSO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][23]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][23]["frase_al_usarse"] = "Depositas el mu&ntilde;eco en el altar como si de una especie de ritual se tratara. Se abre una especie de portal interdimensional en direcci&oacute;n al norte. La realidad se desvanece ante ti. Crees estar so&ntilde;ando."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][23]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][23]["frase_al_no_cogerse"] = "Pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][23]["lugar"] = "34"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][23]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][23]["activa_salidas_al_usarse"] = "44"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["activa_objetos_al_usarse"] = "32"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["MIRAR"] = "Parece un altar y tiene escrito un seis. Debe ser esta la puerta hacia La villa del seis."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][23]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][23]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][23]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][23]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][23]["USAR"] = "JUGUETE CLAVADO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][23]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][23]["top_position"] = "125px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][23]["left_position"] = "55px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][23]["top_position_activado"] = "125px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][23]["left_position_activado"] = "55px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PLASTICO/PLASTICO BABOSO:
    $HTTP_SESSION_VARS["objetos"][24]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][24]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][24]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][24]["nombre"] = "PLASTICO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][24]["nombre_nuevo"] = "PLASTICO BABOSO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][24]["frase_al_usarse"] = "Consigues empapar el pl&aacute;stico con babas de caracol."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][24]["frase_al_cogerse"] = "Lo coges porque podr&iacute;a serte &uacute;til."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][24]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][24]["lugar"] = "36"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][24]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][24]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["MIRAR"] = "Es un trozo de pl&aacute;stico."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][24]["MIRAR_nuevo"] = "Es un pl&aacute;stico lleno de babas de caracol. Pero si quiero utilizarlas quiz&aacute; deber&iacute;a utilizar un aplicador."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][24]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][24]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][24]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][24]["USAR"] = "CARACOL, PALITO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][24]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][24]["top_position"] = "150px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][24]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][24]["top_position_activado"] = "150px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][24]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto INVENTO MOJADO/CARACOL:
    $HTTP_SESSION_VARS["objetos"][25]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][25]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][25]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][25]["nombre"] = "INVENTO MOJADO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][25]["nombre_nuevo"] = "CARACOL"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][25]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][25]["frase_al_cogerse"] = "Espero no ensuciarme mucho."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][25]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][25]["lugar"] = "18"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][25]["animado"] = FALSE; //Es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][25]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["desactiva_objetos_al_usarse"] = "4"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["MIRAR"] = "Es una rama con hierba <i>\"Helix Atrayentus\"</i>. Ahora que est&aacute; mojada servir&aacute; m&aacute;s."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][25]["MIRAR_nuevo"] = "Es un caracol vivo."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][25]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][25]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][25]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][25]["USAR"] = "CARACOL PEGADO, PLASTICO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][25]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][25]["top_position"] = "270px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][25]["left_position"] = "170px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][25]["top_position_activado"] = "270px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][25]["left_position_activado"] = "170px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PUERTA ALTA:
    $HTTP_SESSION_VARS["objetos"][26]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][26]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][26]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][26]["nombre"] = "PUERTA ALTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][26]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][26]["frase_al_usarse"] = "Utiizas una caja para llegar a la casa. Ahora ya puedes acceder a ella."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][26]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][26]["frase_al_no_cogerse"] = "No puedo coger una puerta."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][26]["lugar"] = "38"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][26]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][26]["activa_salidas_al_usarse"] = "37"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["activa_objetos_al_usarse"] = "31"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["MIRAR"] = "Es la puerta de la casa. Est&aacute; abierta, pero est&aacute; muy alta."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][26]["MIRAR_nuevo"] = "Es la puerta de la casa. Est&aacute; abierta y ya puedo acceder a ella."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][26]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][26]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][26]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][26]["USAR"] = "CAJAS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][26]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][26]["top_position"] = "30px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][26]["left_position"] = "65px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][26]["top_position_activado"] = "30px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][26]["left_position_activado"] = "65px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CERILLAS HIMEDAS/CERILLAS:
    $HTTP_SESSION_VARS["objetos"][27]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][27]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][27]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][27]["nombre"] = "CERILLAS HUMEDAS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][27]["nombre_nuevo"] = "CERILLAS"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][27]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][27]["frase_al_cogerse"] = "Coges una caja de cerillas pero est&aacute;n humedas."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][27]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][27]["lugar"] = "40"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][27]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][27]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["MIRAR"] = "Es una caja de cerillas humedas."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][27]["MIRAR_nuevo"] = "Es una caja de cerillas."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][27]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][27]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][27]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][27]["USAR"] = "SAL, VELAS APAGADAS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][27]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][27]["top_position"] = "220px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][27]["left_position"] = "425px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][27]["top_position_activado"] = "220px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][27]["left_position_activado"] = "425px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto MATORRALES/CAMINO:
    $HTTP_SESSION_VARS["objetos"][28]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][28]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][28]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][28]["nombre"] = "MATORRALES"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][28]["nombre_nuevo"] = "CAMINO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][28]["frase_al_usarse"] = "Las tijeras cortan los matorrales muy bien. Ya puedes acceder al camino que ocultaban."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][28]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][28]["frase_al_no_cogerse"] = "No puedo con eso."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][28]["lugar"] = "42"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][28]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][28]["activa_salidas_al_usarse"] = "43"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["MIRAR"] = "Son unos matorrales muy espesos que ocultan el camino y te impiden avanzar."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][28]["MIRAR_nuevo"] = "Es un camino que va hacia el norte, subiendo."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][28]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][28]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][28]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][28]["USAR"] = "TIJERAS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][28]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][28]["top_position"] = "0px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][28]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][28]["top_position_activado"] = "41px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][28]["left_position_activado"] = "110px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PERGAMINO:
    $HTTP_SESSION_VARS["objetos"][29]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][29]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][29]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][29]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][29]["nombre"] = "PERGAMINO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][29]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][29]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][29]["frase_al_cogerse"] = "Coges un pergamino que parece muy antiguo."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][29]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][29]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][29]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][29]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["MIRAR"] = "En &eacute;l reza: &quot;<i>La Mussara es un enclave tel&uacute;rico negativo desde tiempos remotos. Es tambi&eacute;n puerta a otros mundos. Quien quiera visitar esos lugares tendr&aacute; que realizar un acto tambi&eacute;n negativo. Ya los antiguos realizaban sacrificios a tal fin, atravesando el coraz&oacute;n de una alma inocente con algo fino y luego depositando su cad&aacute;ver en el lugar m&aacute;s apropiado.</i>&quot;"; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][29]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][29]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][29]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][29]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][29]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][29]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][29]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][29]["left_position"] = "160px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][29]["top_position_activado"] = "22px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][29]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto ALFILER/ALFILER ROTO:
    $HTTP_SESSION_VARS["objetos"][30]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][30]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][30]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][30]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][30]["nombre"] = "ALFILER"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][30]["nombre_nuevo"] = "ALFILER ROTO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][30]["frase_al_usarse"] = "Traspasas con el alfiler el mu&ntilde;eco de pl&aacute;stico.  El alfiler se rompe, quedando una parte dentro del mu&ntilde;eco y otra fuera."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][30]["frase_al_cogerse"] = "Coges un alfiler con cuidado de no pincharte."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][30]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][30]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][30]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][30]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["MIRAR"] = "Es un alfiler peque&ntilde;o y afilado."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][30]["MIRAR_nuevo"] = "Es un alfiler peque&ntilde;o y afilado, pero ahora est&aacute; roto."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][30]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][30]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][30]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][30]["USAR"] = "JUGUETE"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][30]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][30]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][30]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][30]["top_position_activado"] = "22px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][30]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto ESCALERA CASERA:
    $HTTP_SESSION_VARS["objetos"][31]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][31]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][31]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][31]["nombre"] = "ESCALERA CASERA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][31]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][31]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][31]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][31]["frase_al_no_cogerse"] = "Donde est&aacute;n me sirve para ir dentro de la casa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][31]["lugar"] = "38"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][31]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][31]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["MIRAR"] = "Gr&aacute;cias a ella puedo subir a la casa."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][31]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][31]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][31]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][31]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][31]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][31]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][31]["top_position"] = "318px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][31]["left_position"] = "118px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][31]["top_position_activado"] = "318px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][31]["left_position_activado"] = "118px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PORTAL:
    $HTTP_SESSION_VARS["objetos"][32]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][32]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][32]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][32]["nombre"] = "PORTAL"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][32]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][32]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][32]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][32]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][32]["lugar"] = "34"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][32]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][32]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][32]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][32]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][32]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][32]["MIRAR"] = "Desprende una luz muy blanca. Est&aacute; al norte."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][32]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][32]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][32]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][32]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][32]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][32]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][32]["top_position"] = "0px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][32]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][32]["top_position_activado"] = "0px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][32]["left_position_activado"] = "0px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PUERTA:
    $HTTP_SESSION_VARS["objetos"][33]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][33]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][33]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][33]["nombre"] = "PUERTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][33]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][33]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][33]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][33]["frase_al_no_cogerse"] = "Pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][33]["lugar"] = "5"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][33]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][33]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["MIRAR"] = "Es una puerta normal y corriente, de madera. Lo que m&aacute;s te llama la atenci&oacute;n es su cerradura."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][33]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][33]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][33]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][33]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][33]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][33]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][33]["top_position"] = "160px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][33]["left_position"] = "320px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][33]["top_position_activado"] = "160px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][33]["left_position_activado"] = "320px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto MOCHILA:
    $HTTP_SESSION_VARS["objetos"][34]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][34]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][34]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][34]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][34]["nombre"] = "MOCHILA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][34]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][34]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][34]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][34]["frase_al_no_cogerse"] = "No contiene nada de valor."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][34]["lugar"] = "2"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][34]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][34]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["MIRAR"] = "Es mi mochila de viaje, pero hoy la llevo vac&iacute;a."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][34]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][34]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][34]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][34]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][34]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][34]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][34]["top_position"] = "150px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][34]["left_position"] = "32px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][34]["top_position_activado"] = "150px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][34]["left_position_activado"] = "32px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PINTADA:
    $HTTP_SESSION_VARS["objetos"][35]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][35]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][35]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][35]["nombre"] = "PINTADA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][35]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][35]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][35]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][35]["frase_al_no_cogerse"] = "No puedo coger eso."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][35]["lugar"] = "3"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][35]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][35]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["MIRAR"] = "Es una flecha que apunta directo al camino que sigue la carretera."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][35]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][35]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][35]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][35]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][35]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][35]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][35]["top_position"] = "115px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][35]["left_position"] = "230px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][35]["top_position_activado"] = "115px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][35]["left_position_activado"] = "230px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto VENTANA:
    $HTTP_SESSION_VARS["objetos"][36]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][36]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][36]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][36]["nombre"] = "VENTANA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][36]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][36]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][36]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][36]["frase_al_no_cogerse"] = "No puedo llevarme una ventana."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][36]["lugar"] = "5"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][36]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][36]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["MIRAR"] = "Por lo que se puede apreciar, la casa es bastante espaciosa."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][36]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][36]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][36]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][36]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][36]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][36]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][36]["top_position"] = "160px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][36]["left_position"] = "160px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][36]["top_position_activado"] = "160px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][36]["left_position_activado"] = "160px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto HUECO LUMINOSO:
    $HTTP_SESSION_VARS["objetos"][37]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][37]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][37]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][37]["nombre"] = "HUECO LUMINOSO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][37]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][37]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][37]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][37]["frase_al_no_cogerse"] = "No puedo coger eso."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][37]["lugar"] = "6"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][37]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][37]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["MIRAR"] = "La casa tiene muchos huecos, quiz&aacute; se trate de un palomar. Pero este hueco en particular es m&aacute;s luminoso."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][37]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][37]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][37]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][37]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][37]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][37]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][37]["top_position"] = "210px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][37]["left_position"] = "175px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][37]["top_position_activado"] = "210px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][37]["left_position_activado"] = "175px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CHIMENEA:
    $HTTP_SESSION_VARS["objetos"][38]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][38]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][38]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][38]["nombre"] = "CHIMENEA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][38]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][38]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][38]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][38]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][38]["lugar"] = "7"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][38]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][38]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["MIRAR"] = "Esta larga chimenea debi&oacute; reconfortar a los habitantes de este hogar en las frias noches."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][38]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][38]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][38]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][38]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][38]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][38]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][38]["top_position"] = "105px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][38]["left_position"] = "215px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][38]["top_position_activado"] = "105px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][38]["left_position_activado"] = "215px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto AGUJERO REDONDO:
    $HTTP_SESSION_VARS["objetos"][39]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][39]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][39]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][39]["nombre"] = "AGUJERO REDONDO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][39]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][39]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][39]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][39]["frase_al_no_cogerse"] = "Eso es imposible."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][39]["lugar"] = "7"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][39]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][39]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["MIRAR"] = "Es un agujero con forma redonda. Debi&oacute; servir de respiradero cuando la chimenea a&uacute;n funcionaba."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][39]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][39]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][39]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][39]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][39]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][39]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][39]["top_position"] = "38px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][39]["left_position"] = "264px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][39]["top_position_activado"] = "38px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][39]["left_position_activado"] = "264px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto APOYO IZQUIERDO:
    $HTTP_SESSION_VARS["objetos"][40]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][40]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][40]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][40]["nombre"] = "APOYO IZQUIERDO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][40]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][40]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][40]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][40]["frase_al_no_cogerse"] = "Est&aacute; clavado en el suelo y adem&aacute;s pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][40]["lugar"] = "8"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][40]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][40]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["MIRAR"] = "Sirve de adorno para la entrada. Est&aacute; bastante bien conservado."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][40]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][40]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][40]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][40]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][40]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][40]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][40]["top_position"] = "195px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][40]["left_position"] = "80px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][40]["top_position_activado"] = "200px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][40]["left_position_activado"] = "80px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto APOYO DERECHO:
    $HTTP_SESSION_VARS["objetos"][41]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][41]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][41]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][41]["nombre"] = "APOYO DERECHO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][41]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][41]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][41]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][41]["frase_al_no_cogerse"] = "Est&aacute; clavado en el suelo y adem&aacute;s pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][41]["lugar"] = "8"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][41]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][41]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["MIRAR"] = "Sirve de adorno para la entrada. Le falta la loseta superior."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][41]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][41]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][41]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][41]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][41]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][41]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][41]["top_position"] = "195px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][41]["left_position"] = "400px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][41]["top_position_activado"] = "195px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][41]["left_position_activado"] = "400px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto MANCHA:
    $HTTP_SESSION_VARS["objetos"][42]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][42]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][42]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][42]["nombre"] = "MANCHA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][42]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][42]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][42]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][42]["frase_al_no_cogerse"] = "Est&aacute; pintada en la pared, no se puede coger."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][42]["lugar"] = "9"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][42]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][42]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["MIRAR"] = "Es una mancha blanca. Parece como si alguien hubiese borrado alguna inscripci&oacute;n anterior."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][42]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][42]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][42]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][42]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][42]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][42]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][42]["top_position"] = "135px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][42]["left_position"] = "355px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][42]["top_position_activado"] = "135px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][42]["left_position_activado"] = "355px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto ESCOMBROS:
    $HTTP_SESSION_VARS["objetos"][43]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][43]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][43]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][43]["nombre"] = "ESCOMBROS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][43]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][43]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][43]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][43]["frase_al_no_cogerse"] = "No encuentro nada de valor en ellos."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][43]["lugar"] = "9"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][43]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][43]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["MIRAR"] = "Son un mont&oacute;n de escombros, pero no encuentro nada de valor en ellos."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][43]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][43]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][43]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][43]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][43]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][43]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][43]["top_position"] = "275px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][43]["left_position"] = "95px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][43]["top_position_activado"] = "275px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][43]["left_position_activado"] = "95px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto REJA ABIERTA:
    $HTTP_SESSION_VARS["objetos"][44]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][44]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][44]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][44]["nombre"] = "REJA ABIERTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][44]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][44]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][44]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][44]["frase_al_no_cogerse"] = "Esta rota y oxidada, no la quiero para nada."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][44]["lugar"] = "10"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][44]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][44]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["MIRAR"] = "Ya est&aacute; abierta, no me impide el paso ni me estorba."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][44]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][44]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][44]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][44]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][44]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][44]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][44]["top_position"] = "126px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][44]["left_position"] = "160px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][44]["top_position_activado"] = "126px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][44]["left_position_activado"] = "160px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PARRA:
    $HTTP_SESSION_VARS["objetos"][45]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][45]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][45]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][45]["nombre"] = "PARRA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][45]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][45]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][45]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][45]["frase_al_no_cogerse"] = "No me interesa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][45]["lugar"] = "12"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][45]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][45]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["MIRAR"] = "Una parra ha conseguido abrirse paso por una grieta de la caseta de vig&iacute;a."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][45]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][45]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][45]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][45]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][45]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][45]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][45]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][45]["left_position"] = "360px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][45]["top_position_activado"] = "190px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][45]["left_position_activado"] = "360px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto CARTEL:
    $HTTP_SESSION_VARS["objetos"][46]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][46]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][46]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][46]["nombre"] = "CARTEL"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][46]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][46]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][46]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][46]["frase_al_no_cogerse"] = "Est&aacute; clavado en el suelo y adem&aacute;s no me servir&iacute;a para nada."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][46]["lugar"] = "13"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][46]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][46]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["MIRAR"] = "Indica la existencia de un refugio de monta&ntilde;a llamado <i>&quot;Refugi La Mussara&quot;</i> en direcci&oacute;n al oeste."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][46]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][46]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][46]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][46]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][46]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][46]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][46]["top_position"] = "130px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][46]["left_position"] = "285px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][46]["top_position_activado"] = "130px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][46]["left_position_activado"] = "285px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    

    //Objeto VENTANA IZQUIERDA:
    $HTTP_SESSION_VARS["objetos"][47]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][47]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][47]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][47]["nombre"] = "VENTANA IZQUIERDA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][47]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][47]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][47]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][47]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][47]["lugar"] = "14"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][47]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][47]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["MIRAR"] = "No veo nada interesante en ella, est&aacute; muy oscuro."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][47]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][47]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][47]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][47]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][47]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][47]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][47]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][47]["left_position"] = "205px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][47]["top_position_activado"] = "190px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][47]["left_position_activado"] = "205px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto VENTANA DERECHA:
    $HTTP_SESSION_VARS["objetos"][48]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][48]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][48]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][48]["nombre"] = "VENTANA DERECHA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][48]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][48]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][48]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][48]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][48]["lugar"] = "14"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][48]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][48]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["MIRAR"] = "Se puede apreciar la silueta de un ente en forma de humanoide, pero debe ser un juego de luces y sombras."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][48]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][48]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][48]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][48]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][48]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][48]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][48]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][48]["left_position"] = "310px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][48]["top_position_activado"] = "190px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][48]["left_position_activado"] = "310px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto JUGUETES:
    $HTTP_SESSION_VARS["objetos"][49]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][49]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][49]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][49]["nombre"] = "JUGUETES"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][49]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][49]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][49]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][49]["frase_al_no_cogerse"] = "No gr&aacute;cias, una vez arranqu&eacute; uno de &eacute;stos que estaba pegado al suelo y tuve un accidente de coche m&aacute;s tarde. Prefiero no tentar a la suerte aunque sea una tonter&iacute;a."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][49]["lugar"] = "16"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][49]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][49]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["MIRAR"] = "Son un mont&oacute;n de mu&ntilde;ecos puestos con clavos en los &aacute;rboles."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][49]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][49]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][49]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][49]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][49]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][49]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][49]["top_position"] = "110px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][49]["left_position"] = "200px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][49]["top_position_activado"] = "110px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][49]["left_position_activado"] = "200px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto ALTAR:
    $HTTP_SESSION_VARS["objetos"][50]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][50]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][50]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][50]["nombre"] = "ALTAR"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][50]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][50]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][50]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][50]["frase_al_no_cogerse"] = "Pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][50]["lugar"] = "17"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][50]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][50]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["MIRAR"] = "Es una especie de altar lleno de mu&ntilde;ecos que forman un c&iacute;rculo."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][50]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][50]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][50]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][50]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][50]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][50]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][50]["top_position"] = "50px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][50]["left_position"] = "42px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][50]["top_position_activado"] = "50px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][50]["left_position_activado"] = "42px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto GENERADORA ELECTRICA:
    $HTTP_SESSION_VARS["objetos"][51]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][51]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][51]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][51]["nombre"] = "GENERADORA ELECTRICA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][51]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][51]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][51]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][51]["frase_al_no_cogerse"] = "Tiene forma de casa, pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][51]["lugar"] = "19"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][51]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][51]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["MIRAR"] = "Cuando funcionaba generaba electricidad con el agua de la cascada, probablemente para alimentar el ahora deshabitado campamento militar de Los Castillejos. Tiene forma de casa pero prefiero no entrar, es demasiado estrecha."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][51]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][51]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][51]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][51]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][51]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][51]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][51]["top_position"] = "75px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][51]["left_position"] = "180px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][51]["top_position_activado"] = "75px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][51]["left_position_activado"] = "180px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto INSCRIPCIONES:
    $HTTP_SESSION_VARS["objetos"][52]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][52]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][52]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][52]["nombre"] = "INSCRIPCIONES"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][52]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][52]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][52]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][52]["frase_al_no_cogerse"] = "Eso es una tonter&iacute;a, est&aacute;n pintadas en la pared."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][52]["lugar"] = "22"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][52]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][52]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["MIRAR"] = "Son unos extra&ntilde;os s&iacute;mbolos que no llego a comprender, probablemente de &iacute;ndole sat&aacute;nica."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][52]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][52]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][52]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][52]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][52]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][52]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][52]["top_position"] = "125px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][52]["left_position"] = "90px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][52]["top_position_activado"] = "125px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][52]["left_position_activado"] = "90px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto ALTAR ROTO:
    $HTTP_SESSION_VARS["objetos"][53]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][53]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][53]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][53]["nombre"] = "ALTAR ROTO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][53]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][53]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][53]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][53]["frase_al_no_cogerse"] = "La base est&aacute; clavada en el suelo y la losa pesa demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][53]["lugar"] = "23"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][53]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][53]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["MIRAR"] = "Es un altar derruido, s&oacute;lo queda un apoyo en pie de los dos que deb&iacute;an haber. La losa que estaba antes encima ahora est&aacute; tirada por el suelo. A saber qu&eacute; rituales se habr&aacute;n hecho aqu&iacute;."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][53]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][53]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][53]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][53]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][53]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][53]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][53]["top_position"] = "160px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][53]["left_position"] = "235px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][53]["top_position_activado"] = "160px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][53]["left_position_activado"] = "235px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PINTADA ROJA:
    $HTTP_SESSION_VARS["objetos"][54]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][54]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][54]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][54]["nombre"] = "PINTADA ROJA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][54]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][54]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][54]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][54]["frase_al_no_cogerse"] = "Eso no puede ser."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][54]["lugar"] = "23"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][54]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][54]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["MIRAR"] = "No creo que estas pintadas sean sat&aacute;nicas, pero detr&aacute;s de ellas se ven extra&ntilde;os s&iacute;mbolos que probablemente lo sean."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][54]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][54]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][54]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][54]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][54]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][54]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][54]["top_position"] = "115px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][54]["left_position"] = "32px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][54]["top_position_activado"] = "115px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][54]["left_position_activado"] = "32px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PILA BAUTISMAL:
    $HTTP_SESSION_VARS["objetos"][55]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][55]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][55]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][55]["nombre"] = "PILA BAUTISMAL"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][55]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][55]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][55]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][55]["frase_al_no_cogerse"] = "Est&aacute; bien sujeta a la pared y adem&aacute;s no me interesa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][55]["lugar"] = "23"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][55]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][55]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["MIRAR"] = "Es una pila bautismal tallada en piedra y sujeta a la pared de la iglesia. Ahora que todo est&aacute; abandonado, quiz&aacute; todav&iacute;a se use para otros prop&oacute;sitos."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][55]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][55]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][55]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][55]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][55]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][55]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][55]["top_position"] = "10px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][55]["left_position"] = "228px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][55]["top_position_activado"] = "10px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][55]["left_position_activado"] = "228px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    

    //Objeto LADRILLOS:
    $HTTP_SESSION_VARS["objetos"][56]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][56]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][56]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][56]["nombre"] = "LADRILLOS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][56]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][56]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][56]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][56]["frase_al_no_cogerse"] = "No tienen ning&uacute;n inter&eacute;s."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][56]["lugar"] = "24"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][56]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][56]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["MIRAR"] = "Son un par de ladrillos sin inter&eacute;s."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][56]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][56]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][56]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][56]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][56]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][56]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][56]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][56]["left_position"] = "200px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][56]["top_position_activado"] = "190px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][56]["left_position_activado"] = "200px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto VESTIDO RASGADO:
    $HTTP_SESSION_VARS["objetos"][57]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][57]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][57]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][57]["nombre"] = "VESTIDO RASGADO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][57]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][57]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][57]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][57]["frase_al_no_cogerse"] = "No me atrevo a dejar mis huellas en la posible presunta prueba de un delito."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][57]["lugar"] = "25"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][57]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][57]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["MIRAR"] = "Es quiz&aacute; la futura presunta prueba de un delito, aunque lo m&aacute;s probable es que pase al olvido en este lugar."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][57]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][57]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][57]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][57]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][57]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][57]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][57]["top_position"] = "260px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][57]["left_position"] = "170px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][57]["top_position_activado"] = "260px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][57]["left_position_activado"] = "170px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto ESTANTERIAS:
    $HTTP_SESSION_VARS["objetos"][58]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][58]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][58]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][58]["nombre"] = "ESTANTERIAS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][58]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][58]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][58]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][58]["frase_al_no_cogerse"] = "Coger unas estanter&iacute;as es absurdo y adem&aacute;s no contienen nada."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][58]["lugar"] = "26"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][58]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][58]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["MIRAR"] = "Est&aacute;n vac&iacute;as."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][58]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][58]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][58]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][58]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][58]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][58]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][58]["top_position"] = "0px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][58]["left_position"] = "440px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][58]["top_position_activado"] = "0px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][58]["left_position_activado"] = "440px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto AGUJERO:
    $HTTP_SESSION_VARS["objetos"][59]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][59]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][59]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][59]["nombre"] = "AGUJERO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][59]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][59]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][59]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][59]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][59]["lugar"] = "26"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][59]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][59]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["MIRAR"] = "Es una grieta en la iglesia en ruinas que va en direcci&oacute;n al este hacia el cementerio."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][59]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][59]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][59]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][59]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][59]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][59]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][59]["top_position"] = "80px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][59]["left_position"] = "165px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][59]["top_position_activado"] = "80px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][59]["left_position_activado"] = "165px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)

    
    //Objeto TUMBA:
    $HTTP_SESSION_VARS["objetos"][60]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][60]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][60]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][60]["nombre"] = "TUMBA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][60]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][60]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][60]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][60]["frase_al_no_cogerse"] = "No pienso profanar una tumba."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][60]["lugar"] = "27"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][60]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][60]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["MIRAR"] = "Es la &uacute;nica del lugar que no est&aacute; profanada ni oculta por las ruinas o por la maleza. Pero es tan antigua que no puedo leer bien sus inscripciones."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][60]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][60]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][60]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][60]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][60]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][60]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][60]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][60]["left_position"] = "280px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][60]["top_position_activado"] = "190px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][60]["left_position_activado"] = "280px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CASA:
    $HTTP_SESSION_VARS["objetos"][61]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][61]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][61]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][61]["nombre"] = "CASA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][61]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][61]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][61]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][61]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][61]["lugar"] = "32"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][61]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][61]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["MIRAR"] = "La casa, ya muy deteriorada, se encuentra a lo alto de esta colina en direcci&oacute;n al norte."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][61]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][61]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][61]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][61]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][61]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][61]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][61]["top_position"] = "130px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][61]["left_position"] = "175px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][61]["top_position_activado"] = "130px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][61]["left_position_activado"] = "175px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto ZARZAS:
    $HTTP_SESSION_VARS["objetos"][62]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][62]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][62]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][62]["nombre"] = "ZARZAS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][62]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][62]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][62]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][62]["frase_al_no_cogerse"] = "Pinchan demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][62]["lugar"] = "33"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][62]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][62]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["MIRAR"] = "La maleza se ha adue&ntilde;ado del lugar."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][62]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][62]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][62]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][62]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][62]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][62]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][62]["top_position"] = "225px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][62]["left_position"] = "5px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][62]["top_position_activado"] = "225px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][62]["left_position_activado"] = "5px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto MUSGO:
    $HTTP_SESSION_VARS["objetos"][63]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][63]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][63]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][63]["nombre"] = "MUSGO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][63]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][63]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][63]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][63]["frase_al_no_cogerse"] = "No lo quiero para nada."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][63]["lugar"] = "37"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][63]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][63]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["MIRAR"] = "La humedad de la pared habr&aacute; hecho crecer el musgo."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][63]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][63]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][63]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][63]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][63]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][63]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][63]["top_position"] = "125px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][63]["left_position"] = "180px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][63]["top_position_activado"] = "125px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][63]["left_position_activado"] = "180px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto VENTANA ALTA:
    $HTTP_SESSION_VARS["objetos"][64]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][64]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][64]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][64]["nombre"] = "VENTANA ALTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][64]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][64]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][64]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][64]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][64]["lugar"] = "38"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][64]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][64]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["MIRAR"] = "Es una ventana demasiado alta y adem&aacute;s est&aacute; llena de rejas."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][64]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][64]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][64]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][64]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][64]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][64]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][64]["top_position"] = "160px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][64]["left_position"] = "240px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][64]["top_position_activado"] = "160px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][64]["left_position_activado"] = "240px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CLAVO:
    $HTTP_SESSION_VARS["objetos"][65]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][65]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][65]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][65]["nombre"] = "CLAVO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][65]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][65]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][65]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][65]["frase_al_no_cogerse"] = "No creo que me sirva para nada."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][65]["lugar"] = "39"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][65]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][65]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["MIRAR"] = "Es un clavo en la pared, quiz&aacute; antiguamente colgaban ah&iacute; la caza."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][65]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][65]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][65]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][65]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][65]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][65]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][65]["top_position"] = "36px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][65]["left_position"] = "440px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][65]["top_position_activado"] = "36px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][65]["left_position_activado"] = "440px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto BOMBONA:
    $HTTP_SESSION_VARS["objetos"][66]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][66]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][66]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][66]["nombre"] = "BOMBONA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][66]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][66]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][66]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][66]["frase_al_no_cogerse"] = "Pesa mucho."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][66]["lugar"] = "40"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][66]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][66]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["MIRAR"] = "Es una bombona que no s&eacute; que contendr&iacute;a, pero seguramente ya no contenga nada."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][66]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][66]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][66]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][66]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][66]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][66]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][66]["top_position"] = "145px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][66]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][66]["top_position_activado"] = "145px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][66]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    
    
    //Objeto MESA:
    $HTTP_SESSION_VARS["objetos"][67]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][67]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][67]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][67]["nombre"] = "MESA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][67]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][67]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][67]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][67]["frase_al_no_cogerse"] = "No la quiero para nada."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][67]["lugar"] = "41"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][67]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][67]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["MIRAR"] = "Si no fuera porque es demasiado corta dir&iacute;a que es una camilla. Una camilla para un beb&eacute; tampoco creo que sea teniendo en cuenta el lugar en donde est&aacute;."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][67]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][67]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][67]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][67]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][67]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][67]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][67]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][67]["left_position"] = "180px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][67]["top_position_activado"] = "190px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][67]["left_position_activado"] = "180px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
   
    
    //Objeto ESTANTERIA:
    $HTTP_SESSION_VARS["objetos"][68]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][68]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][68]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][68]["nombre"] = "ESTANTERIA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][68]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][68]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][68]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][68]["frase_al_no_cogerse"] = "Eso no tiene sentido y adem&aacute;s no contiene nada."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][68]["lugar"] = "41"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][68]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][68]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["MIRAR"] = "Es una estanter&iacute;a vac&iacute;a."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][68]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][68]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][68]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][68]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][68]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][68]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][68]["top_position"] = "20px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][68]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][68]["top_position_activado"] = "20px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][68]["left_position_activado"] = "0px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)
    

    //Objeto VENTANA ROTA:
    $HTTP_SESSION_VARS["objetos"][69]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][69]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][69]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][69]["nombre"] = "VENTANA ROTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][69]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][69]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][69]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][69]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][69]["lugar"] = "41"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][69]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][69]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["MIRAR"] = "Es una t&eacute;trica ventana con la cristaler&iacute;a rota."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][69]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][69]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][69]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][69]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][69]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][69]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][69]["top_position"] = "70px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][69]["left_position"] = "155px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][69]["top_position_activado"] = "70px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][69]["left_position_activado"] = "155px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto CASTILLO:
    $HTTP_SESSION_VARS["objetos"][70]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][70]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][70]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][70]["nombre"] = "CASTILLO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][70]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][70]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][70]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][70]["frase_al_no_cogerse"] = "Eso no tiene sentido."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][70]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][70]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][70]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["MIRAR"] = "Es un castillo enorme y fantasmag&oacute;rico visto en medio de la oscuridad. Prefiero no entrar."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][70]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][70]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][70]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][70]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][70]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][70]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][70]["top_position"] = "100px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][70]["left_position"] = "395px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][70]["top_position_activado"] = "100px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][70]["left_position_activado"] = "395px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto FUERTE:
    $HTTP_SESSION_VARS["objetos"][71]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][71]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][71]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][71]["nombre"] = "FUERTE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][71]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][71]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][71]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][71]["frase_al_no_cogerse"] = "Demasidado grande."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][71]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][71]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][71]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["MIRAR"] = "Es el fuerte del castillo que est&aacute; en ruinas."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][71]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][71]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][71]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][71]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][71]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][71]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][71]["top_position"] = "130px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][71]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][71]["top_position_activado"] = "130px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][71]["left_position_activado"] = "0px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



 }
 
?>
