<?php

//Si no existe la variable de sesion "estancia", se pone a 1 (estaremos en el lugar numero 1, al principio):
$frase_inicial_permanente = "Parece ser que tus planes de ir a La Mussara a ver la lluvia de estrellas tendr&aacute;n que esperar.<br>Despu&eacute;s de escuchar un ruido y llegando a Los Castillejos se te para el coche.<br>Tembloroso, pero con m&aacute;s curiosidad que miedo, decides investigar el origen de ese estruendo.";
if (!isset($HTTP_SESSION_VARS["estancia"]))
 {
    $HTTP_SESSION_VARS["estancia"] = 1;
    $frase_inicial = $frase_inicial_permanente;
 } else if (isset($HTTP_GET_VARS["javascript_soportado"])) { $frase_inicial = $frase_inicial_permanente; }

$lugar_para_acabar_el_juego = 44;
$frase_final = "Felicidades, has conseguido llegar a La villa del seis. Fin del juego.";

if (!isset($HTTP_SESSION_VARS["lugares"][1])) { $HTTP_SESSION_VARS["lugares"][1] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][1] = "Dentro del coche";
$lugar[1]["descripcion"] = "Te encuentras dentro de tu coche. Aun as&iacute; puedes apreciar el leve murmullo que emiten las hojas de la monta&ntilde;a al moverse con el viento y que te recuerdan que no est&aacute;s solo.<br>Puedes ver dos casetas militares junto a la carretera que se abre paso entre el bosque y que ahora deber&aacute;s seguir a pie."; //Descripcion del lugar.
$lugar[1]["NORTE"] = "12"; //El norte va al lugar numero 12.
$lugar[1]["SUR"] = "2"; //El sur va al lugar numero 2.
$lugar[1]["ESTE"] = "4"; //El este va al lugar numero 4.
$lugar[1]["OESTE"] = "3"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][2])) { $HTTP_SESSION_VARS["lugares"][2] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][2] = "Maletero del coche";
$lugar[2]["descripcion"] = "Sumidos en la m&aacute;s profunda oscuridad, tu coche y t&uacute; parec&eacute;is los protagonistas de un siniestro cuadro retratado por la dura mano del destino."; //Descripcion del lugar.
$lugar[2]["NORTE"] = "1";
$lugar[2]["SUR"] = FALSE;
$lugar[2]["ESTE"] = FALSE;
$lugar[2]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][3])) { $HTTP_SESSION_VARS["lugares"][3] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][3] = "Caseta militar 1";
$lugar[3]["descripcion"] = "Postrado ante ti, un puesto militar de vig&iacute;a se conserva bastante intacto pese algunas pintadas que rompen con el tono que otorga una noche de desdichas.<br>Ahora, la guardia la haces t&uacute;."; //Descripcion del lugar.
$lugar[3]["NORTE"] = FALSE;
$lugar[3]["SUR"] = FALSE;
$lugar[3]["ESTE"] = "1";
$lugar[3]["OESTE"] = "10";

if (!isset($HTTP_SESSION_VARS["lugares"][4])) { $HTTP_SESSION_VARS["lugares"][4] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][4] = "Entrada al bosque";
$lugar[4]["descripcion"] = "Esos gigantes de madera son s&oacute;lo los que m&aacute;s se hacen notar de entre ese mar de espesa naturaleza que se pierde en la negra noche."; //Descripcion del lugar.
$lugar[4]["NORTE"] = "5";
$lugar[4]["SUR"] = "18";
$lugar[4]["ESTE"] = "16";
$lugar[4]["OESTE"] = "1";

if (!isset($HTTP_SESSION_VARS["lugares"][5])) { $HTTP_SESSION_VARS["lugares"][5] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][5] = "Casa redonda";
$lugar[5]["descripcion"] = "Sobre el p&aacute;ramo, esa peculiar casa llama la atenci&oacute;n. M&aacute;s que cualquier otra de las siluetas que pudieran yacer en &eacute;l."; //Descripcion del lugar.
$lugar[5]["NORTE"] = "6";
$lugar[5]["SUR"] = "4";
$lugar[5]["ESTE"] = "8";
$lugar[5]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][6])) { $HTTP_SESSION_VARS["lugares"][6] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][6] = "Interior de la Casa redonda";
$lugar[6]["descripcion"] = "Con disimulo, esta peculiar casa resulta ser m&aacute;s espaciosa de lo que en un principio parec&iacute;a ser."; //Descripcion del lugar.
$lugar[6]["NORTE"] = FALSE;
$lugar[6]["SUR"] = "5";
$lugar[6]["ESTE"] = FALSE;
$lugar[6]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][7])) { $HTTP_SESSION_VARS["lugares"][7] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][7] = "Interior de la Casa 2";
$lugar[7]["descripcion"] = "Una chimenea domina la sala principal otorgandole un aire hogareño que ahora apenas existe."; //Descripcion del lugar.
$lugar[7]["NORTE"] = FALSE;
$lugar[7]["SUR"] = "8";
$lugar[7]["ESTE"] = "9";
$lugar[7]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][8])) { $HTTP_SESSION_VARS["lugares"][8] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][8] = "Casa 2";
$lugar[8]["descripcion"] = "Casi inmiscuida entre matorrales, se deja ver una casa accesible a trav&eacute;s de unos cuantos pelda&ntilde;os llenos de follaje."; //Descripcion del lugar.
$lugar[8]["NORTE"] = "7";
$lugar[8]["SUR"] = FALSE;
$lugar[8]["ESTE"] = FALSE;
$lugar[8]["OESTE"] = "5";

if (!isset($HTTP_SESSION_VARS["lugares"][9])) { $HTTP_SESSION_VARS["lugares"][9] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][9] = "Habitaci&oacute;n 1 de la Casa 2";
$lugar[9]["descripcion"] = "Esta habitaci&oacute;n est&aacute; llena de ruinas en el suelo."; //Descripcion del lugar.
$lugar[9]["NORTE"] = FALSE;
$lugar[9]["SUR"] = FALSE;
$lugar[9]["ESTE"] = FALSE;
$lugar[9]["OESTE"] = "7";

if (!isset($HTTP_SESSION_VARS["lugares"][10])) { $HTTP_SESSION_VARS["lugares"][10] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][10] = "Casa rota";
$lugar[10]["descripcion"] = "El tiempo no ha sido el mejor amigo de estas ruinas que antes formaban un hogar."; //Descripcion del lugar.
$lugar[10]["NORTE"] = "11";
$lugar[10]["SUR"] = FALSE;
$lugar[10]["ESTE"] = "3";
$lugar[10]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][11])) { $HTTP_SESSION_VARS["lugares"][11] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][11] = "Interior de la Casa rota";
$lugar[11]["descripcion"] = "Legando tu vida a la suerte, la cual no te ha sido demasiado fiel hasta el momento, consigues adentrarte en las ruinas hasta encontrarte justo en medio de ellas."; //Descripcion del lugar.
$lugar[11]["NORTE"] = FALSE;
$lugar[11]["SUR"] = "10";
$lugar[11]["ESTE"] = FALSE;
$lugar[11]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][12])) { $HTTP_SESSION_VARS["lugares"][12] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][12] = "Caseta militar 2";
$lugar[12]["descripcion"] = "Una caseta militar muy bien conservada te hace recordar la existencia de otros tiempos cuando la poca calma de la humanidad pod&iacute;a asemejarse con la que t&uacute; sientes ahora."; //Descripcion del lugar.
$lugar[12]["NORTE"] = "13";
$lugar[12]["SUR"] = "1";
$lugar[12]["ESTE"] = FALSE;
$lugar[12]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][13])) { $HTTP_SESSION_VARS["lugares"][13] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][13] = "Cartel del Refugio";
$lugar[13]["descripcion"] = "Este cartel es quiz&aacute; el signo m&aacute;s evidente de que un resquicio de civilizaci&oacute;n a&uacute;n accede a tan enigm&aacute;tico lugar."; //Descripcion del lugar.
$lugar[13]["NORTE"] = "20";
$lugar[13]["SUR"] = "12";
$lugar[13]["ESTE"] = FALSE;
$lugar[13]["OESTE"] = "14";

if (!isset($HTTP_SESSION_VARS["lugares"][14])) { $HTTP_SESSION_VARS["lugares"][14] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][14] = "Refugio";
$lugar[14]["descripcion"] = "Un refugio de monta&ntilde;a es testigo de que algunos pocos frecuentan el lugar seg&uacute;n que d&iacute;as. Pero el atronador silencio hace sospechar que hoy no es uno de ellos."; //Descripcion del lugar.
$lugar[14]["NORTE"] = FALSE;
$lugar[14]["SUR"] = "15";
$lugar[14]["ESTE"] = "13";
$lugar[14]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][15])) { $HTTP_SESSION_VARS["lugares"][15] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][15] = "Lugar de acampada";
$lugar[15]["descripcion"] = "Un solitario lugar de acampada donde seguro que m&aacute;s de uno tendr&iacute;a problemas para conciliar el sue&ntilde;o."; //Descripcion del lugar.
$lugar[15]["NORTE"] = "14";
$lugar[15]["SUR"] = FALSE;
$lugar[15]["ESTE"] = FALSE;
$lugar[15]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][16])) { $HTTP_SESSION_VARS["lugares"][16] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][16] = "Mu&ntilde;ecos 1";
$lugar[16]["descripcion"] = "Se te hiela la sangre al pensar que haya alguien capaz de dedicarse a clavar mu&ntilde;ecos en los troncos de los &aacute;rboles y a pegarlos en la roca y en el asfalto."; //Descripcion del lugar.
$lugar[16]["NORTE"] = FALSE;
$lugar[16]["SUR"] = FALSE;
$lugar[16]["ESTE"] = "17";
$lugar[16]["OESTE"] = "4";

if (!isset($HTTP_SESSION_VARS["lugares"][17])) { $HTTP_SESSION_VARS["lugares"][17] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][17] = "Mu&ntilde;ecos 2";
$lugar[17]["descripcion"] = "Como un pueril conjuro obra de un ni&ntilde;o se encuentra esta especie de templo de adoraci&oacute;n inexplicable. Tu mente quisiera mantenerse, sin &eacute;xito, en la versi&oacute;n de que es obra de un ni&ntilde;o o bromista m&aacute;s que de un adulto con problemas."; //Descripcion del lugar.
$lugar[17]["NORTE"] = FALSE;
$lugar[17]["SUR"] = FALSE;
$lugar[17]["ESTE"] = "38";
$lugar[17]["OESTE"] = "16";

if (!isset($HTTP_SESSION_VARS["lugares"][18])) { $HTTP_SESSION_VARS["lugares"][18] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][18] = "Cascada";
$lugar[18]["descripcion"] = "Ves una caudalosa cascada que entorpece el silencio al chocar en el peque&ntilde;o estanque donde muere."; //Descripcion del lugar.
$lugar[18]["NORTE"] = "4";
$lugar[18]["SUR"] = FALSE;
$lugar[18]["ESTE"] = "19";
$lugar[18]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][19])) { $HTTP_SESSION_VARS["lugares"][19] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][19] = "Generadora el&eacute;ctrica";
$lugar[19]["descripcion"] = "Sin dejar de escuchar la cascada, a su lado observas una casa antiguamente utilizada para producir electricidad con el agua de &eacute;sta."; //Descripcion del lugar.
$lugar[19]["NORTE"] = FALSE;
$lugar[19]["SUR"] = FALSE;
$lugar[19]["ESTE"] = FALSE;
$lugar[19]["OESTE"] = "18";

if (!isset($HTTP_SESSION_VARS["lugares"][20])) { $HTTP_SESSION_VARS["lugares"][20] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][20] = "Entrada de La Mussara";
$lugar[20]["descripcion"] = "Te encuentras en la entrada del solitario pueblo abandonado de La Mussara, para algunos un lugar maldito donde la niebla es una constante.<br>Un sentimiento de desasosiego te invade."; //Descripcion del lugar.
$lugar[20]["NORTE"] = "30";
$lugar[20]["SUR"] = "13";
$lugar[20]["ESTE"] = "21";
$lugar[20]["OESTE"] = "31";

if (!isset($HTTP_SESSION_VARS["lugares"][21])) { $HTTP_SESSION_VARS["lugares"][21] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][21] = "Puerta de la Iglesia";
$lugar[21]["descripcion"] = "Ante ti, lo que antes fue un templo de adoraci&oacute;n a Di&oacute;s. Ahora, seg&uacute;n cuentan las cr&oacute;nicas, el lugar es frecuentado por seguidores de Satan&aacute;s."; //Descripcion del lugar.
$lugar[21]["NORTE"] = "22";
$lugar[21]["SUR"] = FALSE;
$lugar[21]["ESTE"] = "29";
$lugar[21]["OESTE"] = "20";

if (!isset($HTTP_SESSION_VARS["lugares"][22])) { $HTTP_SESSION_VARS["lugares"][22] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][22] = "Pasillo de la Iglesia";
$lugar[22]["descripcion"] = "La derruida iglesia ha sido escenario de pr&aacute;cticas muy poco cristianas. Como testigos, puedes ver las pintadas que inundan sus paredes."; //Descripcion del lugar.
$lugar[22]["NORTE"] = "23";
$lugar[22]["SUR"] = "21";
$lugar[22]["ESTE"] = "26";
$lugar[22]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][23])) { $HTTP_SESSION_VARS["lugares"][23] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][23] = "Altar de la Iglesia";
$lugar[23]["descripcion"] = "Seg&uacute;n dicen, &eacute;ste es el centro de todos los aberrantes sacrificios que se llevan a cabo en esta iglesia maldita. No puedes evitar tener miedo."; //Descripcion del lugar.
$lugar[23]["NORTE"] = FALSE;
$lugar[23]["SUR"] = "22";
$lugar[23]["ESTE"] = "24";
$lugar[23]["OESTE"] = "25";

if (!isset($HTTP_SESSION_VARS["lugares"][24])) { $HTTP_SESSION_VARS["lugares"][24] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][24] = "Habitaci&oacute;n derecha de la Iglesia";
$lugar[24]["descripcion"] = "En contraste con lo dem&aacute;s, esta habitaci&oacute;n es m&aacute;s c&aacute;lida y silenciosa. No se escucha ni el viento."; //Descripcion del lugar.
$lugar[24]["NORTE"] = FALSE;
$lugar[24]["SUR"] = FALSE;
$lugar[24]["ESTE"] = FALSE;
$lugar[24]["OESTE"] = "23";

if (!isset($HTTP_SESSION_VARS["lugares"][25])) { $HTTP_SESSION_VARS["lugares"][25] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][25] = "Habitaci&oacute;n izquierda de la Iglesia";
$lugar[25]["descripcion"] = "Aqu&iacute; el viento parece retumbar con m&aacute;s fuerza contra las paredes que en ning&uacute;n otro sitio."; //Descripcion del lugar.
$lugar[25]["NORTE"] = FALSE;
$lugar[25]["SUR"] = FALSE;
$lugar[25]["ESTE"] = "23";
$lugar[25]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][26])) { $HTTP_SESSION_VARS["lugares"][26] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][26] = "Agujero hacia el Cementerio";
$lugar[26]["descripcion"] = "Con un morboso azar, la suerte ha abierto una puerta entre la iglesia y la muerte que hay en el cementerio."; //Descripcion del lugar.
$lugar[26]["NORTE"] = FALSE;
$lugar[26]["SUR"] = FALSE;
$lugar[26]["ESTE"] = "27";
$lugar[26]["OESTE"] = "22";

if (!isset($HTTP_SESSION_VARS["lugares"][27])) { $HTTP_SESSION_VARS["lugares"][27] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][27] = "Dentro del Cementerio";
$lugar[27]["descripcion"] = "La maleza y las ruinas han enterrado todas las l&aacute;pidas. Pero una sigue en pie, destacando intacta de entre todo este olvidado cementerio."; //Descripcion del lugar.
$lugar[27]["NORTE"] = FALSE;
$lugar[27]["SUR"] = "29";
$lugar[27]["ESTE"] = "28";
$lugar[27]["OESTE"] = "26";

if (!isset($HTTP_SESSION_VARS["lugares"][28])) { $HTTP_SESSION_VARS["lugares"][28] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][28] = "Escalera";
$lugar[28]["descripcion"] = "Una estrecha escalera asciende por aqu&iacute;, hasta ocultarse en su propio camino sumido en la oscuridad."; //Descripcion del lugar.
$lugar[28]["NORTE"] = "42";
$lugar[28]["SUR"] = FALSE;
$lugar[28]["ESTE"] = FALSE;
$lugar[28]["OESTE"] = "27";

if (!isset($HTTP_SESSION_VARS["lugares"][29])) { $HTTP_SESSION_VARS["lugares"][29] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][29] = "Puerta del Cementerio";
$lugar[29]["descripcion"] = "Lo que antes era todo lo contrario, ahora es un lugar de dif&iacute;cil acceso. &Eacute;se inexistente port&oacute;n de madera ya no guarda el campo santo."; //Descripcion del lugar.
$lugar[29]["NORTE"] = "27";
$lugar[29]["SUR"] = FALSE;
$lugar[29]["ESTE"] = FALSE;
$lugar[29]["OESTE"] = "21";

if (!isset($HTTP_SESSION_VARS["lugares"][30])) { $HTTP_SESSION_VARS["lugares"][30] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][30] = "Fosa de La Mussara";
$lugar[30]["descripcion"] = "Un embalse artificial m&aacute;s reciente que el resto de construcciones se ha ido llenando de lluvia. A saber qu&eacute; cosas se esconden en sus profundas aguas."; //Descripcion del lugar.
$lugar[30]["NORTE"] = FALSE;
$lugar[30]["SUR"] = "20";
$lugar[30]["ESTE"] = FALSE;
$lugar[30]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][31])) { $HTTP_SESSION_VARS["lugares"][31] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][31] = "Monta&ntilde;a";
$lugar[31]["descripcion"] = "Se realza en la oscuridad una gran monta&ntilde;a."; //Descripcion del lugar.
$lugar[31]["NORTE"] = "32";
$lugar[31]["SUR"] = FALSE;
$lugar[31]["ESTE"] = "20";
$lugar[31]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][32])) { $HTTP_SESSION_VARS["lugares"][32] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][32] = "Terrapl&eacute;n";
$lugar[32]["descripcion"] = "A lo lejos de este inclinado terreno se divisa la inconfundible silueta de una antigua casa."; //Descripcion del lugar.
$lugar[32]["NORTE"] = "33";
$lugar[32]["SUR"] = "31";
$lugar[32]["ESTE"] = FALSE;
$lugar[32]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][33])) { $HTTP_SESSION_VARS["lugares"][33] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][33] = "Casa de La Mussara";
$lugar[33]["descripcion"] = "La luna parece iluminar esta casa llena de malas hierbas y en ruinas."; //Descripcion del lugar.
$lugar[33]["NORTE"] = FALSE;
$lugar[33]["SUR"] = "32";
$lugar[33]["ESTE"] = FALSE;
$lugar[33]["OESTE"] = "34";

if (!isset($HTTP_SESSION_VARS["lugares"][34])) { $HTTP_SESSION_VARS["lugares"][34] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][34] = "Piedra del Seis";
$lugar[34]["descripcion"] = "Esta piedra debe ser la que ha dado origen a esas leyendas que hablan de la existencia de un pueblo en una realidad paralela y que van a visitar todos aquellos que desaparecen misteriosamente por aqu&iacute;."; //Descripcion del lugar.
$lugar[34]["NORTE"] = "44";
$lugar[34]["SUR"] = FALSE;
$lugar[34]["ESTE"] = "33";
$lugar[34]["OESTE"] = "35";

if (!isset($HTTP_SESSION_VARS["lugares"][35])) { $HTTP_SESSION_VARS["lugares"][35] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][35] = "Bajada a la Cueva";
$lugar[35]["descripcion"] = "Un &aacute;rido camino se extiende bajando hacia el norte."; //Descripcion del lugar.
$lugar[35]["NORTE"] = "36";
$lugar[35]["SUR"] = FALSE;
$lugar[35]["ESTE"] = "34";
$lugar[35]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][36])) { $HTTP_SESSION_VARS["lugares"][36] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][36] = "Interior de la Cueva";
$lugar[36]["descripcion"] = "Sin hallar una explicaci&oacute;n, en este lugar la luz de la linterna se hace t&eacute;nue. Estamos dentro de una cueva."; //Descripcion del lugar.
$lugar[36]["NORTE"] = FALSE;
$lugar[36]["SUR"] = "35";
$lugar[36]["ESTE"] = FALSE;
$lugar[36]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][37])) { $HTTP_SESSION_VARS["lugares"][37] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][37] = "Interior de la Casa 3";
$lugar[37]["descripcion"] = "El sal&oacute;n principal est&aacute; muy oscuro, pero con ayuda de la linterna consigues verlo todo."; //Descripcion del lugar.
$lugar[37]["NORTE"] = "40";
$lugar[37]["SUR"] = "38";
$lugar[37]["ESTE"] = "39";
$lugar[37]["OESTE"] = "41";

if (!isset($HTTP_SESSION_VARS["lugares"][38])) { $HTTP_SESSION_VARS["lugares"][38] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][38] = "Casa 3";
$lugar[38]["descripcion"] = "Encima de un muro se alza esta casa, que tiene una gran puerta de madera rota. Sin algo para trepar, es imposible llegar a ella."; //Descripcion del lugar.
$lugar[38]["NORTE"] = "37";
$lugar[38]["SUR"] = FALSE;
$lugar[38]["ESTE"] = FALSE;
$lugar[38]["OESTE"] = "17";

if (!isset($HTTP_SESSION_VARS["lugares"][39])) { $HTTP_SESSION_VARS["lugares"][39] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][39] = "Habitaci&oacute;n 1 de la Casa 3";
$lugar[39]["descripcion"] = "Llegas a una habitacion muy blanca, que reluce gr&aacute;cias a la luz de tu linterna."; //Descripcion del lugar.
$lugar[39]["NORTE"] = FALSE;
$lugar[39]["SUR"] = FALSE;
$lugar[39]["ESTE"] = FALSE;
$lugar[39]["OESTE"] = "37";

if (!isset($HTTP_SESSION_VARS["lugares"][40])) { $HTTP_SESSION_VARS["lugares"][40] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][40] = "Habitaci&oacute;n 3 de la Casa 3";
$lugar[40]["descripcion"] = "Una peque&ntilde;a habitaci&oacute;n en la que s&oacute;lo hay una bombona de met&aacute;lica, probablemente de uso militar."; //Descripcion del lugar.
$lugar[40]["NORTE"] = FALSE;
$lugar[40]["SUR"] = "37";
$lugar[40]["ESTE"] = FALSE;
$lugar[40]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][41])) { $HTTP_SESSION_VARS["lugares"][41] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][41] = "Habitaci&oacute;n 2 de la Casa 3";
$lugar[41]["descripcion"] = "Unas estanter&iacute;as de madera, una ventana con los cristales rotos y una mesa es lo que m&aacute;s te llama la atenci&oacute;n."; //Descripcion del lugar.
$lugar[41]["NORTE"] = FALSE;
$lugar[41]["SUR"] = FALSE;
$lugar[41]["ESTE"] = "37";
$lugar[41]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][42])) { $HTTP_SESSION_VARS["lugares"][42] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][42] = "Matorrales";
$lugar[42]["descripcion"] = "Aqu&iacute; hay un camino."; //Descripcion del lugar.
$lugar[42]["NORTE"] = "43";
$lugar[42]["SUR"] = "28";
$lugar[42]["ESTE"] = FALSE;
$lugar[42]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][43])) { $HTTP_SESSION_VARS["lugares"][43] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][43] = "Castillo";
$lugar[43]["descripcion"] = "Este lugar adornado con un solemne castillo con un fuerte ya en ruinas es donde parece haber aterrizado &eacute;sa luz que viste desde el coche, justo antes de pararse.<br>Pero aqu&iacute; no hay nada fuera de lo normal, salvo una espesa niebla que parece caminar al moverse con el viento."; //Descripcion del lugar.
$lugar[43]["NORTE"] = FALSE;
$lugar[43]["SUR"] = "42";
$lugar[43]["ESTE"] = FALSE;
$lugar[43]["OESTE"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][44])) { $HTTP_SESSION_VARS["lugares"][44] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][44] = "La Villa del Seis";
$lugar[44]["descripcion"] = ""; //Descripcion del lugar.
$lugar[44]["NORTE"] = FALSE;
$lugar[44]["SUR"] = FALSE;
$lugar[44]["ESTE"] = FALSE;
$lugar[44]["OESTE"] = FALSE;

?>
