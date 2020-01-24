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


    //Objeto CLAU:
    $HTTP_SESSION_VARS["objetos"][0]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][0]["activado"] = TRUE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][0]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][0]["nombre"] = "CLAU"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][0]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_usarse"] = "Obres el maleter amb la clau."; //Frase a mostrar cuando el objeto se activa (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["lugar"] = FALSE; //No se encuentra en ningun lugar.
    $HTTP_SESSION_VARS["objetos"][0]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][0]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["activa_objetos_al_usarse"] = "1,2,34"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["MIRAR"] = "&Eacute;s la clau del meu cotxe."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][0]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][0]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][0]["COGER"] = FALSE; //No se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][0]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][0]["USAR"] = "MALETER TANCAT"; //No se utiliza con nada.
    $HTTP_SESSION_VARS["objetos"][0]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][0]["top_position"] = 0; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][0]["left_position"] = 0; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][0]["top_position_activado"] = 0; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][0]["left_position_activado"] = 0; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto MALETER TANCAT/MALETER OBERT:
    $HTTP_SESSION_VARS["objetos"][1]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][1]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][1]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][1]["nombre"] = "MALETER TANCAT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][1]["nombre_nuevo"] = "MALETER OBERT"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_usarse"] = "Obres el maleter amb la clau."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_no_cogerse"] = "Aix&ograve; es massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][1]["lugar"] = "2"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][1]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][1]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["activa_objetos_al_usarse"] = "2,34"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["MIRAR"] = "Dem&agrave; el natejo."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][1]["MIRAR_nuevo"] = "Dem&agrave; l'ordeno."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][1]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][1]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][1]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][1]["USAR"] = "CLAU"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][1]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][1]["top_position"] = "0px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][1]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][1]["top_position_activado"] = "0px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][1]["left_position_activado"] = "0px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto LLANTERNA APAGADA/LLANTERNA ENCESA:
    $HTTP_SESSION_VARS["objetos"][2]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][2]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][2]["zindex"] = 4; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][2]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][2]["nombre"] = "LLANTERNA APAGADA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][2]["nombre_nuevo"] = "LLANTERNA ENCESA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_usarse"] = "Amb la llanterna encesa ja pots visitar m&eacute;s llocs."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_cogerse"] = "Aquesta llanterna s&iacute; que &eacute;s bona, aix&iacute; que te l'emportes."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][2]["lugar"] = "2"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][2]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][2]["activa_salidas_al_usarse"] = "5,10,13,16,18"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["MIRAR"] = "&Eacute;s una llanterna molt potent, per&ograve; est&agrave; apagada."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][2]["MIRAR_nuevo"] = "&Eacute;s una bona llanterna."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][2]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][2]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][2]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][2]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][2]["USARSE"] = TRUE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][2]["top_position"] = "200px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][2]["left_position"] = "200px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][2]["top_position_activado"] = "200px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][2]["left_position_activado"] = "200px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto FILFERRO:
    $HTTP_SESSION_VARS["objetos"][3]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][3]["activado"] = TRUE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][3]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][3]["nombre"] = "FILFERRO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][3]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_cogerse"] = "Reculls el fi i oxidad filferro."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][3]["lugar"] = "3"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][3]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][3]["activa_salidas_al_usarse"] = "7"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["desactiva_objetos_al_usarse"] = "6,33"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["MIRAR"] = "&Eacute;s un filferro bastant fi i oxidad. &Eacute;s flexible per&ograve; resistent."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][3]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][3]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][3]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][3]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][3]["USAR"] = "PANY"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][3]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][3]["top_position"] = "320px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][3]["left_position"] = "150px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][3]["top_position_activado"] = "320px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][3]["left_position_activado"] = "150px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)




    //Objeto RAMA/INVENT:
    $HTTP_SESSION_VARS["objetos"][4]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][4]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][4]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][4]["nombre"] = "RAMA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][4]["nombre_nuevo"] = "INVENT"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_usarse"] = "Apliques una mica de les herbes a la branca, construint un invent."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_cogerse"] = "Agafes la ferma rama."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][4]["lugar"] = "4"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][4]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][4]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["MIRAR"] = "&Eacute;s una rama podrida per&ograve; ferma."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][4]["MIRAR_nuevo"] = "Es una rama amb herba &quot;Helix Atrayentus&quot;, per&ograve; massa seca per a atreure a qualsevol animal ."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][4]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][4]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][4]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][4]["USAR"] = "HERBES MEDICINALS, RIBA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][4]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][4]["top_position"] = "230px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][4]["left_position"] = "120px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][4]["top_position_activado"] = "230px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][4]["left_position_activado"] = "120px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)




    //Objeto CARAGOL PEGAT:
    $HTTP_SESSION_VARS["objetos"][5]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][5]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][5]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][5]["nombre"] = "CARAGOL ENGANXAT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][5]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_usarse"] = "El caragol es desenganxa, Es dirigeix al teu invent i l'agafes"; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_no_cogerse"] = "No hi arribo i a m&eacute;s est&agrave; molt enganxat. Donar-li amb algun objecte no serviria perqu&egrave; es perdria entre els matorrals al caure."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][5]["lugar"] = "4"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][5]["animado"] = TRUE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][5]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["desactiva_objetos_al_usarse"] = "5"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["MIRAR"] = "&Eacute;s un caragol enganxat en una branca i no arribo. Donar-li amb algun objecte per a agafar-lo no serviria perqu&egrave; es perdria entre els matorrals al caure. Crec que est&agrave; viu."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][5]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][5]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][5]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][5]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][5]["USAR"] = "INVENT MULLAT"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][5]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][5]["top_position"] = "80px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][5]["left_position"] = "330px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][5]["top_position_activado"] = "80px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][5]["left_position_activado"] = "330px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PANY:
    $HTTP_SESSION_VARS["objetos"][6]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][6]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][6]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][6]["nombre"] = "PANY"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][6]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_usarse"] = "Obres la porta amb el filferro. Ja pots accedir a l'interior de la casa ."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_no_cogerse"] = "Per a qu&egrave; vull jo un pany."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][6]["lugar"] = "5"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][6]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][6]["activa_salidas_al_usarse"] = "6"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["desactiva_objetos_al_usarse"] = "6,33"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["MIRAR"] = "No sembla molt sofisticada."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][6]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][6]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][6]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][6]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][6]["USAR"] = "FILFERRO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][6]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][6]["top_position"] = "160px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][6]["left_position"] = "338px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][6]["top_position_activado"] = "160px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][6]["left_position_activado"] = "338px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto CULLERA:
    $HTTP_SESSION_VARS["objetos"][7]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][7]["activado"] = TRUE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][7]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][7]["nombre"] = "CULLERA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][7]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_usarse"] = "Obres el pot amb la cullera. Ja pots accedir a les herbes medicinals que contenia."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_cogerse"] = "Com ning&uacute; trobar&agrave; a faltar aquesta cullera, l'agafes."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][7]["lugar"] = "6"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][7]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][7]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["MIRAR"] = "&Eacute;s la t&iacute;pica cullera de postres."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][7]["MIRAR_nuevo"] = "Est&agrave; una mica doblegada per&ograve; segueix sent la t&iacute;pica cullera per a postres."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][7]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][7]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][7]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][7]["USAR"] = "POT TANCAT"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][7]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][7]["top_position"] = "260px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][7]["left_position"] = "380px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][7]["top_position_activado"] = "260px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][7]["left_position_activado"] = "380px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto POT GRAN/XARXA:
    $HTTP_SESSION_VARS["objetos"][8]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][8]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][8]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][8]["nombre"] = "POT GRAN"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][8]["nombre_nuevo"] = "XARXA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_cogerse"] = "&Eacute;s un bonic pot de caf&egrave; cobert per una xarxa verda."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][8]["lugar"] = "7"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][8]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][8]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["MIRAR"] = "Est&agrave; buit per&ograve; encara fa olor a caf&egrave;"; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][8]["MIRAR_nuevo"] = "&Eacute;s una xarxa verd fosc."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][8]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][8]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][8]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][8]["USAR"] = "NAVALLA, PAL"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][8]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][8]["top_position"] = "310px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][8]["left_position"] = "410px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][8]["top_position_activado"] = "310px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][8]["left_position_activado"] = "410px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto PORTA OXIDADA:
    $HTTP_SESSION_VARS["objetos"][9]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][9]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][9]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][9]["nombre"] = "PORTA OXIDADA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][9]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_usarse"] = "Lubriques la porta i pots obrir-la. Ja pots accedir a l'interior de la casa."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_no_cogerse"] = "Pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][9]["lugar"] = "8"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][9]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][9]["activa_salidas_al_usarse"] = "7"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["desactiva_objetos_al_usarse"] = "9"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["MIRAR"] = "&Eacute;s una porta enorme i est&agrave; oxidada. No la pots obrir sense greix o alguna cosa que se li sembli."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][9]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][9]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][9]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][9]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][9]["USAR"] = "PALET EMBAVAT"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRAND
    $HTTP_SESSION_VARS["objetos"][9]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][9]["top_position"] = "110px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][9]["left_position"] = "240px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][9]["top_position_activado"] = "110px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][9]["left_position_activado"] = "240px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto PAL/SALABRE:
    $HTTP_SESSION_VARS["objetos"][10]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][10]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][10]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][10]["nombre"] = "PAL"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][10]["nombre_nuevo"] = "SALABRE"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_usarse"] = "Amb una mica de xarxa de la tens aconsegueixes fabricar un salabre."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_cogerse"] = "Ser&agrave; un pal d'algun excursionista, per&ograve; com est&agrave; abandonat el reculls."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][10]["lugar"] = "10"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][10]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][10]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["MIRAR"] = "&Eacute;s un pal llarg i fort, probablement d'algun excursionista."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][10]["MIRAR_nuevo"] = "&Eacute;s un salabre una mica mal fet, per&ograve; servir&agrave;. "; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][10]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][10]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][10]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][10]["USAR"] = "XARXA, FOSSA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
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
    $HTTP_SESSION_VARS["objetos"][11]["frase_al_usarse"] = "La sal absorbeix la humitat dels llumins."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][11]["frase_al_cogerse"] = "Agafes la sal per si de cas."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][11]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][11]["lugar"] = "11"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][11]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][11]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][11]["MIRAR"] = "&Eacute;s un potet ple de sal."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][11]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][11]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][11]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][11]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][11]["USAR"] = "LLUMINS HUMITS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][11]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][11]["top_position"] = "260px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][11]["left_position"] = "180px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][11]["top_position_activado"] = "260px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][11]["left_position_activado"] = "180px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto PALET/PALET EMBAVAT:
    $HTTP_SESSION_VARS["objetos"][12]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][12]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][12]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][12]["nombre"] = "PALET"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][12]["nombre_nuevo"] = "PALET EMBAVAT"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][12]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][12]["frase_al_cogerse"] = "Agafes un pal petit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][12]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][12]["lugar"] = "12"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][12]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][12]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][12]["MIRAR"] = "&Eacute;s un pal diminut."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][12]["MIRAR_nuevo"] = "&Eacute;s un pal diminut lubricat amb baves de caragol."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][12]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][12]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][12]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][12]["USAR"] = "PLASTIC BAVOS, PORTA OXIDADA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][12]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][12]["top_position"] = "290px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][12]["left_position"] = "240px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][12]["top_position_activado"] = "290px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][12]["left_position_activado"] = "240px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto POT TANCAT/HERBES MEDICINALS:
    $HTTP_SESSION_VARS["objetos"][13]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][13]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][13]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][13]["nombre"] = "POT TANCAT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][13]["nombre_nuevo"] = "HERBES MEDICINALS"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][13]["frase_al_usarse"] = "Obres el pot amb la cullera. Ja pots accedir a les herbes medicinals que contenia."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][13]["frase_al_cogerse"] = "Agafes un pot ple d'unes estranyes herbes."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][13]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][13]["lugar"] = "14"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][13]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][13]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][13]["MIRAR"] = "&Eacute;s un pot amb una etiqueta que posa &quot;HELIX ATRAYENTUS&quot;."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][13]["MIRAR_nuevo"] = "S&oacute;n unes herbes cridades &quot;HELIX ATRAYENTUS.&quot;"; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][13]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][13]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][13]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][13]["USAR"] = "CULLERA, RAMA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][13]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][13]["top_position"] = "275px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][13]["left_position"] = "450px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][13]["top_position_activado"] = "280px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][13]["left_position_activado"] = "450px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)




    //Objeto SABATES:
    $HTTP_SESSION_VARS["objetos"][14]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][14]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][14]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][14]["nombre"] = "SABATES"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][14]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][14]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][14]["frase_al_cogerse"] = "Alg&uacute;n nen les haur&agrave; perdut."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][14]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][14]["lugar"] = "20"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][14]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][14]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][14]["MIRAR"] = "S&oacute;n unes sabates d'un nen petit."; //Texto a mostrar cuando se mira.
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




    //Objeto JOGUINA/JOGUINA CLAVADA:
    $HTTP_SESSION_VARS["objetos"][15]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][15]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][15]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][15]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][15]["nombre"] = "JOGUINA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][15]["nombre_nuevo"] = "JOGUINA CLAVADA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][15]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][15]["frase_al_cogerse"] = "Agafes el ninot."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][15]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][15]["lugar"] = "17"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][15]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][15]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][15]["MIRAR"] = "&Eacute;s un nad&oacute; de pl&agrave;stic."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][15]["MIRAR_nuevo"] = "&Eacute;s un nad&oacute; de pl&agrave;stic traspassat amb una agulla."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][15]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][15]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][15]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][15]["USAR"] = "AGULLA, ALTAR MISTERIOS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
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
    $HTTP_SESSION_VARS["objetos"][16]["MIRAR"] = "&Eacute;s una cascada preciosa, l'aigua brilla amb la llum de la llanterna."; //Texto a mostrar cuando se mira.
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



    //Objeto RIBA:
    $HTTP_SESSION_VARS["objetos"][17]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][17]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][17]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][17]["nombre"] = "RIBA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][17]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][17]["frase_al_usarse"] = "Proves a mullar l'invent amb cura de no perdre les herbes que cont&eacute;."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][17]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][17]["frase_al_no_cogerse"] = "No anir&eacute; per aqu&iacute; amb aigua."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][17]["lugar"] = "18"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][17]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][17]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["activa_objetos_al_usarse"] = "25"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][17]["MIRAR"] = "La lluna es reflecteix en l'aigua."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][17]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][17]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][17]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][17]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][17]["USAR"] = "INVENT"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][17]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][17]["top_position"] = "220px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][17]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][17]["top_position_activado"] = "220px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][17]["left_position_activado"] = "0px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto ESPELMES APAGADES/ESPELMES ENCESES:
    $HTTP_SESSION_VARS["objetos"][18]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][18]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][18]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][18]["nombre"] = "ESPELMES APAGADES"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][18]["nombre_nuevo"] = "ESPELMES ENCESES"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][18]["frase_al_usarse"] = "Encens les veles amb els llumins i, encara que no il&middot;luminin molt, pots veure que hi ha un pl&agrave;stic en la cova."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][18]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][18]["frase_al_no_cogerse"] = "Estan b&eacute; on estan."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][18]["lugar"] = "36"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][18]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][18]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["activa_objetos_al_usarse"] = "24"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][18]["MIRAR"] = "Apenas se distinguen entre tanta oscuridad."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][18]["MIRAR_nuevo"] = "No il&middot;luminen molt per&ograve; si lo suf¡cient."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][18]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][18]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][18]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][18]["USAR"] = "LLUMINS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][18]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][18]["top_position"] = "110px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][18]["left_position"] = "380px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][18]["top_position_activado"] = "110px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][18]["left_position_activado"] = "380px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto NAVALLA:
    $HTTP_SESSION_VARS["objetos"][19]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][19]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][19]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][19]["nombre"] = "NAVALLA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][19]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.pot que cobria."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][19]["frase_al_cogerse"] = "Agafes una navalla met&agrave;l&middot;lica."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][19]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][19]["lugar"] = "24"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][19]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][19]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][19]["MIRAR"] = "&Eacute;s una navalla molt afilada. A saber per a qu&egrave; haur&agrave; estat utilitzada."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][19]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][19]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][19]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][19]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][19]["USAR"] = "POT GRAN"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][19]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][19]["top_position"] = "220px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][19]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][19]["top_position_activado"] = "220px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][19]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto CAIXES/CAIXA:
    $HTTP_SESSION_VARS["objetos"][20]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][20]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][20]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][20]["nombre"] = "CAIXES"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][20]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][20]["frase_al_cogerse"] = "Agafes les dues caixes. S&oacute;n bastant grans i semblen resistents."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][20]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][20]["lugar"] = "27"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][20]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][20]["activa_salidas_al_usarse"] = "37"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["activa_objetos_al_usarse"] = "31"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][20]["MIRAR"] = "S&oacute;n dues caixes grans. Jo crec que suportar&agrave;n el meu pes."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][20]["MIRAR_nuevo"] = "&Eacute;s una caixa gran."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][20]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][20]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][20]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][20]["USAR"] = "PORTA ALTA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][20]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][20]["top_position"] = "240px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][20]["left_position"] = "230px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][20]["top_position_activado"] = "240px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][20]["left_position_activado"] = "230px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto TISORES:
    $HTTP_SESSION_VARS["objetos"][21]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][21]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][21]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][21]["nombre"] = "TISORES"; //Nombre del objeto.
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
    $HTTP_SESSION_VARS["objetos"][21]["MIRAR"] = "Esperem que no siguin l'arma de cap crim."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][21]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][21]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][21]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][21]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][21]["USAR"] = "MATORRALS"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][21]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][21]["top_position"] = "260px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][21]["left_position"] = "10px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][21]["top_position_activado"] = "260px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][21]["left_position_activado"] = "10px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto FOSSA:
    $HTTP_SESSION_VARS["objetos"][22]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][22]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][22]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][22]["nombre"] = "FOSSA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][22]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][22]["frase_al_usarse"] = "Aconsegueixes pescar unes tisores de la fossa. Si de cas s&oacute;n l'arma d'algun crim, les agafes amb cura."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][22]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][22]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][22]["lugar"] = "30"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][22]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][22]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["activa_objetos_al_usarse"] = "21"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][22]["MIRAR"] = "A saber qu&egrave; amagar&agrave; en aquestes fosques aig&uuml;es."; //Texto a mostrar cuando se mira.
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



    //Objeto ALTAR MISTERIOS:
    $HTTP_SESSION_VARS["objetos"][23]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][23]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][23]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][23]["nombre"] = "ALTAR MISTERIOS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][23]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][23]["frase_al_usarse"] = "Diposites el ninot en l'altar com si d'una esp&egrave;cie de ritual es tract&eacute;s. S'obre una esp&egrave;cie de portal interdimensional en direcci&oacute; al nord. La realitat s'esva&iuml;x davant teu. Creus estar somiant."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][23]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][23]["frase_al_no_cogerse"] = "Pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][23]["lugar"] = "34"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][23]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][23]["activa_salidas_al_usarse"] = "44"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["activa_objetos_al_usarse"] = "32"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][23]["MIRAR"] = "Sembla un altar i t&eacute; escrit un sis. Ha de ser aquesta la porta cap a La vila del sis."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][23]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][23]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][23]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][23]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][23]["USAR"] = "JOGUINA CLAVADA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][23]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][23]["top_position"] = "125px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][23]["left_position"] = "55px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][23]["top_position_activado"] = "125px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][23]["left_position_activado"] = "55px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto PLASTIC/PLASTIC BAVOS:
    $HTTP_SESSION_VARS["objetos"][24]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][24]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][24]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][24]["nombre"] = "PLASTIC"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][24]["nombre_nuevo"] = "PLASTIC BAVOS"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][24]["frase_al_usarse"] = "Aconsegueixes sucar el pl&agrave;stic amb baves de caragol."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][24]["frase_al_cogerse"] = "Ho agafes perqu&egrave; podria ser-te &uacute;til."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][24]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][24]["lugar"] = "36"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][24]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][24]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][24]["MIRAR"] = "Es un tros de pl&agrave;stic."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][24]["MIRAR_nuevo"] = "&Eacute;s un pl&agrave;stic ple de baves de caragol. Per&ograve; si vull utilitzar-les potser hauria fer servir un aplicador."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][24]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][24]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][24]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][24]["USAR"] = "CARAGOL, PALET"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][24]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][24]["top_position"] = "150px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][24]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][24]["top_position_activado"] = "150px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][24]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)




    //Objeto INVENT MULLAT/CARAGOL:
    $HTTP_SESSION_VARS["objetos"][25]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][25]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][25]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][25]["nombre"] = "INVENT MULLAT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][25]["nombre_nuevo"] = "CARAGOL"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][25]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][25]["frase_al_cogerse"] = "Espero no embrutar-me molt."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][25]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][25]["lugar"] = "18"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][25]["animado"] = FALSE; //Es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][25]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["desactiva_objetos_al_usarse"] = "4"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][25]["MIRAR"] = "&Eacute;s una branca amb herba &quot;Helix Atrayentus&quot;. Ara que est&agrave; mullada servir&agrave; m&eacute;s."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][25]["MIRAR_nuevo"] = "&Eacute;s un caragol viu."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][25]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][25]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][25]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][25]["USAR"] = "CARAGOL ENGANXAT, PLASTIC"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][25]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][25]["top_position"] = "270px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][25]["left_position"] = "170px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][25]["top_position_activado"] = "270px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][25]["left_position_activado"] = "170px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto PORTA ALTA:
    $HTTP_SESSION_VARS["objetos"][26]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][26]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][26]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][26]["nombre"] = "PORTA ALTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][26]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][26]["frase_al_usarse"] = "Una caixa per a arribar a la casa. Ara ja pots accedir a ella."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][26]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][26]["frase_al_no_cogerse"] = "No puc agafar una porta."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][26]["lugar"] = "38"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][26]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][26]["activa_salidas_al_usarse"] = "37"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["activa_objetos_al_usarse"] = "31"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][26]["MIRAR"] = "&Eacute;s la porta de la casa. Est&agrave; oberta, per&ograve; est&agrave; molt alta."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][26]["MIRAR_nuevo"] = "&Eacute;s la porta de la casa. Est&agrave; oberta i ja puc accedir a ella."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][26]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][26]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][26]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][26]["USAR"] = "CAIXES"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][26]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][26]["top_position"] = "30px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][26]["left_position"] = "65px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][26]["top_position_activado"] = "30px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][26]["left_position_activado"] = "65px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)




    //Objeto LLUMINS HIMEDAS/LLUMINS:
    $HTTP_SESSION_VARS["objetos"][27]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][27]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][27]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][27]["nombre"] = "LLUMINS HUMITS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][27]["nombre_nuevo"] = "LLUMINS"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][27]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][27]["frase_al_cogerse"] = "Agafes una caixa de llumins per&ograve; estan humits."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][27]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][27]["lugar"] = "40"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][27]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][27]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][27]["MIRAR"] = "&Eacute;s una caixa de llumins humits."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][27]["MIRAR_nuevo"] = "&Eacute;s una caixa de llumins."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][27]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][27]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][27]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][27]["USAR"] = "SAL, ESPELMES APAGADES"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][27]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][27]["top_position"] = "220px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][27]["left_position"] = "425px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][27]["top_position_activado"] = "220px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][27]["left_position_activado"] = "425px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto MATORRALS/CAMÍ:
    $HTTP_SESSION_VARS["objetos"][28]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][28]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][28]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][28]["nombre"] = "MATORRALS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][28]["nombre_nuevo"] = "CAMI"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][28]["frase_al_usarse"] = "Les tisores tallen els matorrals molt b&eacute;. Ja pots accedir al cam&iacute; que ocultaven."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][28]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][28]["frase_al_no_cogerse"] = "No puc amb aix&ograve;."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][28]["lugar"] = "42"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][28]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][28]["activa_salidas_al_usarse"] = "43"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][28]["MIRAR"] = "S&oacute;n uns matorrals molt espessos que oculten el cam&iacute; i t'impedeixen avançar."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][28]["MIRAR_nuevo"] = "&Eacute;s un cam&iacute; que va cap al nord, pujant."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][28]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][28]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][28]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][28]["USAR"] = "TISORES"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][28]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][28]["top_position"] = "0px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][28]["left_position"] = "0px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][28]["top_position_activado"] = "41px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][28]["left_position_activado"] = "110px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)




    //Objeto PERGAMÍ:
    $HTTP_SESSION_VARS["objetos"][29]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][29]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][29]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][29]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][29]["nombre"] = "PERGAMI"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][29]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][29]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][29]["frase_al_cogerse"] = "Agafes un pergam&iacute; que sembla molt antic."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][29]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][29]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][29]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][29]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][29]["MIRAR"] = "En ell posa: &quot;La &eacute;s un enclavament tel&middot;l&uacute;ric negatiu des de temps remots. &Eacute;s tamb&eacute; una porta a altres mons. Qui vulgui visitar aquests llocs haur&agrave; de realitzar un acte tamb&eacute; negatiu. Ja els antics realitzaven sacrificis a tal fi, travessant el cor d'una &agrave;nima innocent amb alguna cosa fina i despr&eacute;s dipositant el seu cad&agrave;ver en el lloc m&eacute;s apropiat.&quot;"; //Texto a mostrar cuando se mira.
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





    //Objeto AGULLA/AGULLA TRENCADA: 
    $HTTP_SESSION_VARS["objetos"][30]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][30]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][30]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][30]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][30]["nombre"] = "AGULLA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][30]["nombre_nuevo"] = "AGULLA TRENCADA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][30]["frase_al_usarse"] = "Traspasses amb l'agulla el ninot de pl&agrave;stic. L'agulla es trenca, quedant una part dintre del ninot i una altra fora. "; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][30]["frase_al_cogerse"] = "Agafes una agulla amb cura de no punxar-te."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][30]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][30]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][30]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][30]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][30]["MIRAR"] = "Es un alfiler pequeño y afilado."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][30]["MIRAR_nuevo"] = "&Eacute;s una agulla petita i afilada, per&ograve; ara est&agrave; trencada."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][30]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][30]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][30]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][30]["USAR"] = "JOGUINA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][30]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][30]["top_position"] = "190px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][30]["left_position"] = "130px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][30]["top_position_activado"] = "22px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][30]["left_position_activado"] = "130px"; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto ESCALA CASOLANA:
    $HTTP_SESSION_VARS["objetos"][31]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][31]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][31]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][31]["nombre"] = "ESCALA CASOLANA:"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][31]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][31]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][31]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][31]["frase_al_no_cogerse"] = "On estan em serveix per a anar dintre de la casa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][31]["lugar"] = "38"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][31]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][31]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][31]["MIRAR"] = "Gr&agrave;cies a ella puc pujar a la casa."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][31]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][31]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][31]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][31]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][31]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][31]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][31]["top_position"] = "318px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][31]["left_position"] = "118px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][31]["top_position_activado"] = "318px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][31]["left_position_activado"] = "118px"; //Posicion respecto a la X cuando esta activado (0 = izquierda




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
    $HTTP_SESSION_VARS["objetos"][32]["MIRAR"] = "Despr&egrave;n una llum molt blanca. Est&agrave; al nord."; //Texto a mostrar cuando se mira.
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



    //Objeto PORTA:
    $HTTP_SESSION_VARS["objetos"][33]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][33]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][33]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][33]["nombre"] = "PORTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][33]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][33]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][33]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][33]["frase_al_no_cogerse"] = "Pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][33]["lugar"] = "5"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][33]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][33]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][33]["MIRAR"] = "&Eacute;s una porta normal i corrent, de fusta. El que m&eacute;s et crida l'atenci&oacute; &eacute;s el seu pany."; //Texto a mostrar cuando se mira.
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



    //Objeto MOTXILLA:
    $HTTP_SESSION_VARS["objetos"][34]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][34]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][34]["zindex"] = 3; //z-index del DIV que contiene la imagen.
    $HTTP_SESSION_VARS["objetos"][34]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][34]["nombre"] = "MOTXILLA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][34]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][34]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][34]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][34]["frase_al_no_cogerse"] = "No cont&eacute; res de valor."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][34]["lugar"] = "2"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][34]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][34]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][34]["MIRAR"] = "&Eacute;s la meva motxilla de viatge, per&ograve; avui la duc buida."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][35]["frase_al_no_cogerse"] = "No puc agafar aix&ograve;."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][35]["lugar"] = "3"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][35]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][35]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][35]["MIRAR"] = "&Eacute;s una fletxa que apunta directe al cam&iacute; que segueix la carretera."; //Texto a mostrar cuando se mira.
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




    //Objeto FINESTRA:
    $HTTP_SESSION_VARS["objetos"][36]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][36]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][36]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][36]["nombre"] = "FIENESTRA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][36]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][36]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][36]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][36]["frase_al_no_cogerse"] = "No puc emportar-me una finestra."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][36]["lugar"] = "5"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][36]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][36]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][36]["MIRAR"] = "Pel que es pot apreciar, la casa &eacute;s bastant espaiosa"; //Texto a mostrar cuando se mira.
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




    //Objeto BUIT LLUMINÓS: 
    $HTTP_SESSION_VARS["objetos"][37]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][37]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][37]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][37]["nombre"] = "BUIT LLUMINOS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][37]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][37]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][37]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][37]["frase_al_no_cogerse"] = "No puc agafar aix&ograve;."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][37]["lugar"] = "6"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][37]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][37]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][37]["MIRAR"] = "La casa t&eacute; molts buits, potser es tracte d'un colomer. Per&ograve; aquest buit en particular &eacute;s m&eacute;s llumin&oacute;s."; //Texto a mostrar cuando se mira.
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




    //Objeto XEMENEIA:
    $HTTP_SESSION_VARS["objetos"][38]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][38]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][38]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][38]["nombre"] = "XEMENEIA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][38]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][38]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][38]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][38]["frase_al_no_cogerse"] = "Aix&ograve; no t&eacute; sentit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][38]["lugar"] = "7"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][38]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][38]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][38]["MIRAR"] = "Aquesta llarga xemeneia va haver de reconfortar als habitants d'aquesta llar en les fredes nits."; //Texto a mostrar cuando se mira.
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




    //Objeto FORAT RODÓ:
    $HTTP_SESSION_VARS["objetos"][39]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][39]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][39]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][39]["nombre"] = "FORAT RODO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][39]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][39]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][39]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][39]["frase_al_no_cogerse"] = "Aix&ograve; es impossible."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][39]["lugar"] = "7"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][39]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][39]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][39]["MIRAR"] = "&Eacute;s un forat amb forma rodona. Va servir de respirador quan la xemeneia encara funcionava."; //Texto a mostrar cuando se mira.
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




    //Objeto SUPORT ESQUERRE:
    $HTTP_SESSION_VARS["objetos"][40]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][40]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][40]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][40]["nombre"] = "SUPORT ESQUERRE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][40]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][40]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][40]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][40]["frase_al_no_cogerse"] = "Est&agrave; clavat en al terra i a m&eacute;s pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][40]["lugar"] = "8"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][40]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][40]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][40]["MIRAR"] = "Serveix d'adorn per a l'entrada. Est&agrave; bastant b&eacute; conservat."; //Texto a mostrar cuando se mira.
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




    //Objeto SUPORT DRET:
    $HTTP_SESSION_VARS["objetos"][41]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][41]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][41]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][41]["nombre"] = "SUPORT DRET"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][41]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][41]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][41]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][41]["frase_al_no_cogerse"] = "Est&agrave; clavat en al terra i a m&eacute;s pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][41]["lugar"] = "8"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][41]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][41]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][41]["MIRAR"] = "Serveix d'adorn per a l'entrada. Li falta la lloseta superior."; //Texto a mostrar cuando se mira.
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



    //Objeto TACA:
    $HTTP_SESSION_VARS["objetos"][42]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][42]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][42]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][42]["nombre"] = "TACA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][42]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][42]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][42]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][42]["frase_al_no_cogerse"] = "Est&agrave; pintada en la paret, no es pot agafar."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][42]["lugar"] = "9"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][42]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][42]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][42]["MIRAR"] = "&Eacute;s una taca blanca. Sembla com si alg&uacute; hagu&eacute;s esborrat alguna inscripci&oacute; anterior."; //Texto a mostrar cuando se mira.
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





    //Objeto ENDERROCS:
    $HTTP_SESSION_VARS["objetos"][43]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][43]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][43]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][43]["nombre"] = "ENDERROCS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][43]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][43]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][43]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][43]["frase_al_no_cogerse"] = "No trobo res de valor en ells."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][43]["lugar"] = "9"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][43]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][43]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][43]["MIRAR"] = "S&oacute;n un munt d'enderrocs, per&ograve; no trobo res de valor en ells."; //Texto a mostrar cuando se mira.
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



    //Objeto REIXA OBERTA:
    $HTTP_SESSION_VARS["objetos"][44]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][44]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][44]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][44]["nombre"] = "REIXA OBERTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][44]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][44]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][44]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][44]["frase_al_no_cogerse"] = "Est&agrave; trencada i oxidada, no la vull per res."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][44]["lugar"] = "10"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][44]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][44]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][44]["MIRAR"] = "Ja est&agrave; oberta, no m'impedeix el pas ni m' estorba."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][45]["frase_al_no_cogerse"] = "No m'interessa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][45]["lugar"] = "12"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][45]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][45]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][45]["MIRAR"] = "Una parra ha aconseguit obrir-se pas per una esquerda de la caseta de vig&iacute;a."; //Texto a mostrar cuando se mira.
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


    //Objeto CARTELL:
    $HTTP_SESSION_VARS["objetos"][46]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][46]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][46]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][46]["nombre"] = "CARTELL"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][46]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][46]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][46]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][46]["frase_al_no_cogerse"] = "Est&agrave; clavat en al terra i a m&eacute;s no em serviria per a res. "; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][46]["lugar"] = "13"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][46]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][46]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][46]["MIRAR"] = "Indica la existencia d'un refugi anomenat &quot;Refugi La Mussara&quot; en direcci&oacute; al oest."; //Texto a mostrar cuando se mira.
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



    //Objeto FINESTRA ESQUERRA:
    $HTTP_SESSION_VARS["objetos"][47]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][47]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][47]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][47]["nombre"] = "FINESTRA ESQUERRA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][47]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][47]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][47]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][47]["frase_al_no_cogerse"] = "Aix&ograve; no t&eacute; sentit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][47]["lugar"] = "14"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][47]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][47]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][47]["MIRAR"] = "No veig res interessant all&iacute;, est&agrave; molt fosc."; //Texto a mostrar cuando se mira.
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



    //Objeto FINESTRA DRETA:
    $HTTP_SESSION_VARS["objetos"][48]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][48]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][48]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][48]["nombre"] = "FINESTRA DRETA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][48]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][48]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][48]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][48]["frase_al_no_cogerse"] = "Aix&ograve; no te sentit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][48]["lugar"] = "14"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][48]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][48]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][48]["MIRAR"] = "Es pot apreciar la silueta en forma de humanoide, per&ograve; ha de ser un joc de llums i ombres ."; //Texto a mostrar cuando se mira.
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



    //Objeto JOGUINES:
    $HTTP_SESSION_VARS["objetos"][49]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][49]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][49]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][49]["nombre"] = "JOGUINES"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][49]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][49]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][49]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][49]["frase_al_no_cogerse"] = "No gr&agrave;cies, una vegada vaig arrencar un d'aquests que estava pegat al s&ograve;l i vaig tenir un accident de cotxe m&eacute;s tard. Prefereixo no temptar a la sort encara que sigui una ximpleria."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][49]["lugar"] = "16"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][49]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][49]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][49]["MIRAR"] = "S&oacute;n un munt de ninots posats amb claus en els arbres."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][50]["frase_al_no_cogerse"] = "Pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][50]["lugar"] = "17"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][50]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][50]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][50]["MIRAR"] = "&Eacute;s una esp&egrave;cie d'altar ple de ninots que formen un cercle."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][51]["frase_al_no_cogerse"] = "Te forma de casa, pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][51]["lugar"] = "19"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][51]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][51]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][51]["MIRAR"] = "Quan funcionava generava electricitat amb l'aigua de la cascada, probablement per a alimentar l'ara deshabitat campament militar dels Castillejos. T&eacute; forma de casa per&ograve; prefereixo no entrar, &eacute;s massa estreta."; //Texto a mostrar cuando se mira.
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




    //Objeto INSCRIPCIONS:
    $HTTP_SESSION_VARS["objetos"][52]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][52]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][52]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][52]["nombre"] = "INSCRIPCIONS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][52]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][52]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][52]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][52]["frase_al_no_cogerse"] = "Aix&ograve; &eacute;s una ximpleria, estan pintades en la paret."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][52]["lugar"] = "22"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][52]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][52]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][52]["MIRAR"] = "S&oacute;n uns estranys s&iacute;mbols que no arribo a comprendre, probablement d'&iacute;ndol sat&agrave;nic."; //Texto a mostrar cuando se mira.
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



    //Objeto ALTAR TRENCAT:
    $HTTP_SESSION_VARS["objetos"][53]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][53]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][53]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][53]["nombre"] = "ALTAR TRENCAT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][53]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][53]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][53]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][53]["frase_al_no_cogerse"] = "La base est&agrave; clavada al terra i la llosa pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][53]["lugar"] = "23"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][53]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][53]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][53]["MIRAR"] = "&Eacute;s un altar derru&iuml;t, nom&eacute;s queda un recolze en peu dels dos que havien d'haver. La llosa que estava abans damunt ara est&agrave; llençada pel terra. A saber quins rituals s'hauran fet aqu&iacute;."; //Texto a mostrar cuando se mira.
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




    //Objeto PINTADA VERMELLA:
    $HTTP_SESSION_VARS["objetos"][54]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][54]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][54]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][54]["nombre"] = "PINTADA VERMELLA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][54]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][54]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][54]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][54]["frase_al_no_cogerse"] = "Aix&ograve; no pot ser."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][54]["lugar"] = "23"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][54]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][54]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][54]["MIRAR"] = "No crec que aquestes pintades siguin sat&agrave;niques, per&ograve; darrere d'elles es veuen estranys s&iacute;mbols que probablement ho siguin."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][55]["frase_al_no_cogerse"] = "Est&agrave; b&eacute; subjecta a la paret i a m&eacute;s no m'interessa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][55]["lugar"] = "23"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][55]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][55]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][55]["MIRAR"] = "&Eacute;s una pila bautismal tallada en pedra i subjecta a la paret de l'esgl&eacute;sia. Ara que tot est&agrave; abandonat, potser encara s'usi per a altres prop&ograve;sits."; //Texto a mostrar cuando se mira.
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
    



    //Objeto MAONS:
    $HTTP_SESSION_VARS["objetos"][56]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][56]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][56]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][56]["nombre"] = "MAONS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][56]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][56]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][56]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][56]["frase_al_no_cogerse"] = "No te ning&uacute;n inter&eacute;s."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][56]["lugar"] = "24"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][56]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][56]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][56]["MIRAR"] = "S&oacute;n un parell de maons sense importancia."; //Texto a mostrar cuando se mira.
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




    //Objeto VESTIT ESTRIPAT:
    $HTTP_SESSION_VARS["objetos"][57]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][57]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][57]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][57]["nombre"] = "VESTIT ESTRIPAT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][57]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][57]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][57]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][57]["frase_al_no_cogerse"] = "No m'atreveixo a deixar les meves petjades en la possible presumpta prova d'un delicte."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][57]["lugar"] = "25"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][57]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][57]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][57]["MIRAR"] = "&Eacute;s potser la futura presumpta prova d'un delicte, encara que el m&eacute;s probable &eacute;s que passi a l'oblit en aquest lloc."; //Texto a mostrar cuando se mira.
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




    //Objeto PRESTATGERIES:
    $HTTP_SESSION_VARS["objetos"][58]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][58]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][58]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][58]["nombre"] = "PRESTATGERIES"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][58]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][58]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][58]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][58]["frase_al_no_cogerse"] = "Agafar unes prestatgeries &eacute;s absurd i a m&eacute;s no contenen gens."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][58]["lugar"] = "26"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][58]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][58]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][58]["MIRAR"] = "Estan buides."; //Texto a mostrar cuando se mira.
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



    //Objeto FORAT:
    $HTTP_SESSION_VARS["objetos"][59]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][59]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][59]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][59]["nombre"] = "FORAT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][59]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][59]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][59]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][59]["frase_al_no_cogerse"] = "Aix&ograve; no te sentit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][59]["lugar"] = "26"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][59]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][59]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][59]["MIRAR"] = "&Eacute;s una esquerda en l'esgl&eacute;sia en ru&iuml;nes que va en direcci&oacute; a l'aquest cap al cementiri."; //Texto a mostrar cuando se mira.
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

    
    //Objeto TOMBA:
    $HTTP_SESSION_VARS["objetos"][60]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][60]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][60]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][60]["nombre"] = "TOMBA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][60]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][60]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][60]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][60]["frase_al_no_cogerse"] = "No penso profanar una tomba."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][60]["lugar"] = "27"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][60]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][60]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][60]["MIRAR"] = "&Eacute;s l'&uacute;nica del lloc que no est&agrave; profanada ni oculta per les ru&iuml;nes o per la mala herba. Per&ograve; &eacute;s tan antiga que no puc llegir b&eacute; les seves inscripcions."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][61]["frase_al_no_cogerse"] = "Aix&ograve; no te sentit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][61]["lugar"] = "32"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][61]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][61]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][61]["MIRAR"] = "La casa, ja molt deteriorada, es troba a l'alt d'aquest pujol en direcci&oacute; al nord."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][62]["frase_al_no_cogerse"] = "Punxen massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][62]["lugar"] = "33"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][62]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][62]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][62]["MIRAR"] = "La mala herba s'ha ensenyorit del lloc."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][62]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][62]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][62]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][62]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][62]["USAR"] = FALSE; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][62]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][62]["top_position"] = "225px"; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][62]["left_position"] = "5px"; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][62]["top_position_activado"] = "225px"; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][62]["left_position_activado"] = "5px"; //Posicion respecto a la X cuando esta activado (0 = izquierda



    //Objeto MOLSA:
    $HTTP_SESSION_VARS["objetos"][63]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][63]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][63]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][63]["nombre"] = "MOLSA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][63]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][63]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][63]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][63]["frase_al_no_cogerse"] = "No la vull per a res."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][63]["lugar"] = "37"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][63]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][63]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][63]["MIRAR"] = "La humitat de la paret haur&agrave; fet cr&eacute;ixer la molsa."; //Texto a mostrar cuando se mira.
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



    //Objeto FINESTRA ALTA:
    $HTTP_SESSION_VARS["objetos"][64]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][64]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][64]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][64]["nombre"] = "FINESTRA ALTA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][64]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][64]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][64]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][64]["frase_al_no_cogerse"] = "Aix&ograve; no te sentit"; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][64]["lugar"] = "38"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][64]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][64]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][64]["MIRAR"] = "&Eacute;s una finestra massa alta i a m&eacute;s est&agrave; plena de reixes."; //Texto a mostrar cuando se mira.
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



    //Objeto CLAU:
    $HTTP_SESSION_VARS["objetos"][65]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][65]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][65]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][65]["nombre"] = "CLAU"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][65]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][65]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][65]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][65]["frase_al_no_cogerse"] = "No crec que em serveixi per a res."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][65]["lugar"] = "39"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][65]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][65]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][65]["MIRAR"] = "&Eacute;s un clau a la paret, potser antigament penjaven aqu&iacute; la caça."; //Texto a mostrar cuando se mira.
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
    $HTTP_SESSION_VARS["objetos"][66]["frase_al_no_cogerse"] = "Pesa massa."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][66]["lugar"] = "40"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][66]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][66]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][66]["MIRAR"] = "&Eacute;s una bombona que no s&eacute; que contindria, per&ograve; segurament ja no contingui res."; //Texto a mostrar cuando se mira.
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



    //Objeto TAULA:
    $HTTP_SESSION_VARS["objetos"][67]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][67]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][67]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][67]["nombre"] = "TAULA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][67]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][67]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][67]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][67]["frase_al_no_cogerse"] = "No la vull per a res."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][67]["lugar"] = "41"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][67]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][67]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][67]["MIRAR"] = "Si no fos perqu&egrave; &eacute;s massa curta diria que &eacute;s una llitera. Una llitera per a un nad&oacute; tampoc crec que sigui tenint en compte el lloc on est&agrave;."; //Texto a mostrar cuando se mira.
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
   
    
    //Objeto PRESTATGERIA:
    $HTTP_SESSION_VARS["objetos"][68]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][68]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][68]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][68]["nombre"] = "PRESTATGERIA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][68]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][68]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][68]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][68]["frase_al_no_cogerse"] = "Aix&ograve; no t&eacute; sentit i a m&eacute;s no cont&eacute; res."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][68]["lugar"] = "41"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][68]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][68]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][68]["MIRAR"] = "&Eacute;s una prestageria buida."; //Texto a mostrar cuando se mira.
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



    //Objeto FINESTRA TANCADA:
    $HTTP_SESSION_VARS["objetos"][69]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][69]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][69]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][69]["nombre"] = "FINESTRA TANCADA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][69]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][69]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][69]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][69]["frase_al_no_cogerse"] = "Aix&ograve; no te sentit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][69]["lugar"] = "41"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][69]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][69]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][69]["MIRAR"] = "&Eacute;s una t&eacute;trica finestra amb la cristalleria trencada."; //Texto a mostrar cuando se mira.
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


    //Objeto CASTELL:
    $HTTP_SESSION_VARS["objetos"][70]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][70]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][70]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][70]["nombre"] = "CASTELL"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][70]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][70]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][70]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][70]["frase_al_no_cogerse"] = "Aix&ograve; no te sentit."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][70]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][70]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][70]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][70]["MIRAR"] = "&Eacute;s un castell enorme i fantasmag&oacute;rico vist enmig de la foscor. Prefereixo no entrar."; //Texto a mostrar cuando se mira.
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


    //Objeto FORT:
    $HTTP_SESSION_VARS["objetos"][71]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][71]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][71]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][71]["nombre"] = "FORT"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][71]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][71]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][71]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][71]["frase_al_no_cogerse"] = "Massa gran."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][71]["lugar"] = "43"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][71]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][71]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][71]["MIRAR"] = "&Eacute;s el fort del castell que est&agrave; en ru&iuml;nes."; //Texto a mostrar cuando se mira.
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
