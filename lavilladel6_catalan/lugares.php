<?php

//Si no existe la variable de sesion "estancia", se pone a 1 (estaremos en el lugar numero 1, al principio):
$frase_inicial_permanente = "Sembla ser que els teus plans d'anar a La Mussara a veure la pluja d'estrelles haur&agrave;n d'esperar. Despr&eacute;s d'escoltar un soroll i arribant a &quot;Los Castillejos&quot; se't para el cotxe. Tremol&oacute;s, per&ograve; amb m&eacute;s curiositat que por, decideixes investigar l'origen d'aquest baluern.";
if (!isset($HTTP_SESSION_VARS["estancia"]))
 {
    $HTTP_SESSION_VARS["estancia"] = 1;
    $frase_inicial = $frase_inicial_permanente;
 } else if (isset($HTTP_GET_VARS["javascript_soportado"])) { $frase_inicial = $frase_inicial_permanente; }

$lugar_para_acabar_el_juego = 44;
$frase_final = "Felicitats, has arribat a La vila del sis. Fi del joc.";

if (!isset($HTTP_SESSION_VARS["lugares"][1])) { $HTTP_SESSION_VARS["lugares"][1] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][1] = "Dintre del cotxe";
$lugar[1]["descripcion"] = "Et trobes dintre del teu cotxe. Tanmateix pots apreciar el lleu murmuri que emeten les fulles de la muntanya al moure's amb el vent i que et recorden que no est&agrave;s sol.<br>Pots veure dos casetas militars al costat de la carretera que s'obre pas entre el bosc i que ara haur&agrave;s de seguir a peu."; //Descripcion del lugar.
$lugar[1]["NORD"] = "12"; //El NORD va al lugar numero 12.
$lugar[1]["SUD"] = "2"; //El SUD va al lugar numero 2.
$lugar[1]["EST"] = "4"; //El este va al lugar numero 4.
$lugar[1]["OEST"] = "3"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][2])) { $HTTP_SESSION_VARS["lugares"][2] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][2] = "Maleter del cotxe";
$lugar[2]["descripcion"] = "Sumits en la m&eacute;s profunda foscor, el teu cotxe i tu, sembleu els protagonistes d'un sinistre quadre retratat per la dura m&agrave; del dest&iacute;."; //Descripcion del lugar.
$lugar[2]["NORD"] = "1";
$lugar[2]["SUD"] = FALSE;
$lugar[2]["EST"] = FALSE;
$lugar[2]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][3])) { $HTTP_SESSION_VARS["lugares"][3] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][3] = "Caseta militar 1";
$lugar[3]["descripcion"] = "Davant teu, divises un lloc militar de vig&iacute;a que es conserva bastant intacte pesi algunes pintades que trenquen amb el to que atorga una nit de dissorts.<br>Ara, la gu&agrave;rdia la fas tu."; //Descripcion del lugar.
$lugar[3]["NORD"] = FALSE;
$lugar[3]["SUD"] = FALSE;
$lugar[3]["EST"] = "1";
$lugar[3]["OEST"] = "10";

if (!isset($HTTP_SESSION_VARS["lugares"][4])) { $HTTP_SESSION_VARS["lugares"][4] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][4] = "Entrada al bosc";
$lugar[4]["descripcion"] = "Aquests gegants de fusta s&oacute;n nom&eacute;s els quals m&eacute;s es fan notar d'entre aquest mar d'espessa naturalesa que es perd en la negra nit."; //Descripcion del lugar.
$lugar[4]["NORD"] = "5";
$lugar[4]["SUD"] = "18";
$lugar[4]["EST"] = "16";
$lugar[4]["OEST"] = "1";

if (!isset($HTTP_SESSION_VARS["lugares"][5])) { $HTTP_SESSION_VARS["lugares"][5] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][5] = "Casa rodona";
$lugar[5]["descripcion"] = "Sobre el paramo, aquesta peculiar casa crida la atenci&oacute;. M&eacute;s que qualsevol altra de les siluetes que poguessin jeure en ell."; //Descripcion del lugar.
$lugar[5]["NORD"] = "6";
$lugar[5]["SUD"] = "4";
$lugar[5]["EST"] = "8";
$lugar[5]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][6])) { $HTTP_SESSION_VARS["lugares"][6] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][6] = "Interior de la Casa rodona";
$lugar[6]["descripcion"] = "Amb dissimulo, aquesta peculiar casa resulta ser m&eacute;s espaiosa del que al principi semblava ser."; //Descripcion del lugar.
$lugar[6]["NORD"] = FALSE;
$lugar[6]["SUD"] = "5";
$lugar[6]["EST"] = FALSE;
$lugar[6]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][7])) { $HTTP_SESSION_VARS["lugares"][7] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][7] = "Interior de la Casa 2";
$lugar[7]["descripcion"] = "Una xemeneia domina la sala principal otorgan-li un aire c&agrave;lid que ara tot just existeix."; //Descripcion del lugar.
$lugar[7]["NORD"] = FALSE;
$lugar[7]["SUD"] = "8";
$lugar[7]["EST"] = "9";
$lugar[7]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][8])) { $HTTP_SESSION_VARS["lugares"][8] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][8] = "Casa 2";
$lugar[8]["descripcion"] = "Gaireb&eacute; immiscu&iuml;da entre matorrals, es deixa veure una casa accessible a trav&eacute;s d'uns quants esglaons plens de fulles."; //Descripcion del lugar.
$lugar[8]["NORD"] = "7";
$lugar[8]["SUD"] = FALSE;
$lugar[8]["EST"] = FALSE;
$lugar[8]["OEST"] = "5";

if (!isset($HTTP_SESSION_VARS["lugares"][9])) { $HTTP_SESSION_VARS["lugares"][9] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][9] = "Habitaci&oacute; 1 de la Casa 2";
$lugar[9]["descripcion"] = "Aquesta habitaci&oacute; est&agrave; plena de ru&iuml;nes en el s&ograve;l."; //Descripcion del lugar.
$lugar[9]["NORD"] = FALSE;
$lugar[9]["SUD"] = FALSE;
$lugar[9]["EST"] = FALSE;
$lugar[9]["OEST"] = "7";

if (!isset($HTTP_SESSION_VARS["lugares"][10])) { $HTTP_SESSION_VARS["lugares"][10] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][10] = "Casa trencada";
$lugar[10]["descripcion"] = "El temps no ha estat el millor amic d'aquestes ru&iuml;nes que abans formaven una llar."; //Descripcion del lugar.
$lugar[10]["NORD"] = "11";
$lugar[10]["SUD"] = FALSE;
$lugar[10]["EST"] = "3";
$lugar[10]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][11])) { $HTTP_SESSION_VARS["lugares"][11] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][11] = "Interior de la Casa trencada";
$lugar[11]["descripcion"] = "Donant la teva vida a la sort, la qual no t'ha estat massa fidel fins al moment, aconsegueixes endinsar-te en les ru&iuml;nes fins a trobar-te just enmig d'elles."; //Descripcion del lugar.
$lugar[11]["NORD"] = FALSE;
$lugar[11]["SUD"] = "10";
$lugar[11]["EST"] = FALSE;
$lugar[11]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][12])) { $HTTP_SESSION_VARS["lugares"][12] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][12] = "Caseta militar 2";
$lugar[12]["descripcion"] = "Una caseta militar molt ben conservada et fa recordar l'exist&egrave;ncia d'altres temps quan la poca calma de la humanitat podia assemblar-se amb la qual tu sents ara."; //Descripcion del lugar.
$lugar[12]["NORD"] = "13";
$lugar[12]["SUD"] = "1";
$lugar[12]["EST"] = FALSE;
$lugar[12]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][13])) { $HTTP_SESSION_VARS["lugares"][13] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][13] = "Cartell del refugi";
$lugar[13]["descripcion"] = "Aquest cartell &eacute;s potser el signe m&eacute;s evident que una escletxa de civilitzaci&eacute; encara accedeix a tan enigm&agrave;tic lloc."; //Descripcion del lugar.
$lugar[13]["NORD"] = "20";
$lugar[13]["SUD"] = "12";
$lugar[13]["EST"] = FALSE;
$lugar[13]["OEST"] = "14";

if (!isset($HTTP_SESSION_VARS["lugares"][14])) { $HTTP_SESSION_VARS["lugares"][14] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][14] = "Refugi";
$lugar[14]["descripcion"] = "Un refugi de muntanya &eacute;s testimoni que alguns pocs freq&uuml;enten el lloc segons quins dies. Per&ograve; el atronador silenci fa sospitar que avui no &eacute;s un d'ells."; //Descripcion del lugar.
$lugar[14]["NORD"] = FALSE;
$lugar[14]["SUD"] = "15";
$lugar[14]["EST"] = "13";
$lugar[14]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][15])) { $HTTP_SESSION_VARS["lugares"][15] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][15] = "LLoc d'acamapada";
$lugar[15]["descripcion"] = "Un solitari lloc d'acampada on segur que m&eacute;s d'un tindr&agrave; problemes per a agafar el son."; //Descripcion del lugar.
$lugar[15]["NORD"] = "14";
$lugar[15]["SUD"] = FALSE;
$lugar[15]["EST"] = FALSE;
$lugar[15]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][16])) { $HTTP_SESSION_VARS["lugares"][16] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][16] = "Ninots 1";
$lugar[16]["descripcion"] = "Se't gela la sang al pensar que hagi alg&uacute; capaç de dedicar-se a clavar ninots en els troncs dels arbres i a pegar-los en la roca i en l'asfalt."; //Descripcion del lugar.
$lugar[16]["NORD"] = FALSE;
$lugar[16]["SUD"] = FALSE;
$lugar[16]["EST"] = "17";
$lugar[16]["OEST"] = "4";

if (!isset($HTTP_SESSION_VARS["lugares"][17])) { $HTTP_SESSION_VARS["lugares"][17] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][17] = "Ninots 2";
$lugar[17]["descripcion"] = "Com un infantil conjur obra d'un nen es troba aquesta esp&egrave;cie de temple d'adoraci&oacute; inexplicable. La teva ment voldria mantenir-se, sense &egrave;xit, amb el pensament que &eacute;s obra d'un nen o bromista m&eacute;s que d'un adult amb problemes."; //Descripcion del lugar.
$lugar[17]["NORD"] = FALSE;
$lugar[17]["SUD"] = FALSE;
$lugar[17]["EST"] = "38";
$lugar[17]["OEST"] = "16";

if (!isset($HTTP_SESSION_VARS["lugares"][18])) { $HTTP_SESSION_VARS["lugares"][18] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][18] = "Cascada";
$lugar[18]["descripcion"] = "Veus una cabalosa cascada que entorpeix el silenci al xocar en el petit estany on mor."; //Descripcion del lugar.
$lugar[18]["NORD"] = "4";
$lugar[18]["SUD"] = FALSE;
$lugar[18]["EST"] = "19";
$lugar[18]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][19])) { $HTTP_SESSION_VARS["lugares"][19] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][19] = "Generador El&eacute;ctric";
$lugar[19]["descripcion"] = "Sense deixar d'escoltar la cascada, al seu costat observes una casa antigament utilitzada per a produir electricitat amb l'aigua d'aquesta."; //Descripcion del lugar.
$lugar[19]["NORD"] = FALSE;
$lugar[19]["SUD"] = FALSE;
$lugar[19]["EST"] = FALSE;
$lugar[19]["OEST"] = "18";

if (!isset($HTTP_SESSION_VARS["lugares"][20])) { $HTTP_SESSION_VARS["lugares"][20] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][20] = "Entrada a la Mussara";
$lugar[20]["descripcion"] = "Et trobes en l'entrada del solitari poble abandonat de La Mussara, per a alguns un lloc male&iuml;t on la boira &eacute;s una constant.<br>Un sentiment de desassossec t'envae&iuml;x."; //Descripcion del lugar.
$lugar[20]["NORD"] = "30";
$lugar[20]["SUD"] = "13";
$lugar[20]["EST"] = "21";
$lugar[20]["OEST"] = "31";

if (!isset($HTTP_SESSION_VARS["lugares"][21])) { $HTTP_SESSION_VARS["lugares"][21] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][21] = "Porta de l'esgl&eacute;sia ";
$lugar[21]["descripcion"] = "Davant teu, el que abans va ser un temple d'adoraci&oacute; a D&eacute;u. Ara, segons conten les cr&ograve;niques, el lloc &eacute;s freq&uuml;entat per seguidors de Satan&agrave;s."; //Descripcion del lugar.
$lugar[21]["NORD"] = "22";
$lugar[21]["SUD"] = FALSE;
$lugar[21]["EST"] = "29";
$lugar[21]["OEST"] = "20";

if (!isset($HTTP_SESSION_VARS["lugares"][22])) { $HTTP_SESSION_VARS["lugares"][22] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][22] = "Passadis de la iglesia";
$lugar[22]["descripcion"] = "La derru&iuml;da esgl&eacute;sia ha estat escenari de pr&agrave;ctiques molt poc cristianes. Com testimonis, pots veure les pintades que inunden les seves parets."; //Descripcion del lugar.
$lugar[22]["NORD"] = "23";
$lugar[22]["SUD"] = "21";
$lugar[22]["EST"] = "26";
$lugar[22]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][23])) { $HTTP_SESSION_VARS["lugares"][23] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][23] = "Altar de l'esgl&eacute;sia";
$lugar[23]["descripcion"] = "Segons diuen, aquest &eacute;s el centre de tots els aberrants sacrificis que es porten a terme en aquesta esgl&eacute;sia male&iuml;da. No pots evitar tenir por."; //Descripcion del lugar.
$lugar[23]["NORD"] = FALSE;
$lugar[23]["SUD"] = "22";
$lugar[23]["EST"] = "24";
$lugar[23]["OEST"] = "25";

if (!isset($HTTP_SESSION_VARS["lugares"][24])) { $HTTP_SESSION_VARS["lugares"][24] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][24] = "Habitaci&oacute; detra de l'esgl&eacute;sia";
$lugar[24]["descripcion"] = "En contrast amb la resta, aquesta habitaci&oacute; és m&eacute;s c&agrave;lida i silenciosa. No s'escolta ni el vent."; //Descripcion del lugar.
$lugar[24]["NORD"] = FALSE;
$lugar[24]["SUD"] = FALSE;
$lugar[24]["EST"] = FALSE;
$lugar[24]["OEST"] = "23";

if (!isset($HTTP_SESSION_VARS["lugares"][25])) { $HTTP_SESSION_VARS["lugares"][25] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][25] = "Habitaci&oacute; de l'esquerra de l'esgl&eacute;sia";
$lugar[25]["descripcion"] = "Aqu&iacute; el vent sembla retrunyir amb m&eacute;s força contra les parets que en cap altre lloc."; //Descripcion del lugar.
$lugar[25]["NORD"] = FALSE;
$lugar[25]["SUD"] = FALSE;
$lugar[25]["EST"] = "23";
$lugar[25]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][26])) { $HTTP_SESSION_VARS["lugares"][26] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][26] = "Forat del cementiri";
$lugar[26]["descripcion"] = "Amb un morb&oacute;s atzar, la sort ha obert una porta entre l'esgl&eacute;sia i la mort que hi ha en el cementiri."; //Descripcion del lugar.
$lugar[26]["NORD"] = FALSE;
$lugar[26]["SUD"] = FALSE;
$lugar[26]["EST"] = "27";
$lugar[26]["OEST"] = "22";

if (!isset($HTTP_SESSION_VARS["lugares"][27])) { $HTTP_SESSION_VARS["lugares"][27] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][27] = "Dintre del cementiri";
$lugar[27]["descripcion"] = "La mala herba i les ru&iuml;nes han enterrat totes les l&agrave;pides. Per&ograve; una segueix en peu, destacant intacta d'entre tot aquest oblidat cementiri."; //Descripcion del lugar.
$lugar[27]["NORD"] = FALSE;
$lugar[27]["SUD"] = "29";
$lugar[27]["EST"] = "28";
$lugar[27]["OEST"] = "26";

if (!isset($HTTP_SESSION_VARS["lugares"][28])) { $HTTP_SESSION_VARS["lugares"][28] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][28] = "Escales";
$lugar[28]["descripcion"] = "Una estreta escala ascendeix per aqu&iacute;, fins a ocultar-se en el seu propi cam&iacute; sumit en la foscor."; //Descripcion del lugar.
$lugar[28]["NORD"] = "42";
$lugar[28]["SUD"] = FALSE;
$lugar[28]["EST"] = FALSE;
$lugar[28]["OEST"] = "27";

if (!isset($HTTP_SESSION_VARS["lugares"][29])) { $HTTP_SESSION_VARS["lugares"][29] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][29] = "Porta del cementiri";
$lugar[29]["descripcion"] = "El que abans era tot el contrari, ara &eacute;s un lloc de dif&iacute;cil acc&eacute;s. Aquest inexistent portoacute&;n de fusta ja no guarda el camp sant."; //Descripcion del lugar.
$lugar[29]["NORD"] = "27";
$lugar[29]["SUD"] = FALSE;
$lugar[29]["EST"] = FALSE;
$lugar[29]["OEST"] = "21";

if (!isset($HTTP_SESSION_VARS["lugares"][30])) { $HTTP_SESSION_VARS["lugares"][30] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][30] = "Fossa de la mussara";
$lugar[30]["descripcion"] = "Et trobes en l'entrada del solitari poble abandonat de La Mussara, per a alguns un lloc male&iuml;t on la boira &eacute;s una constant. Un sentiment de desassossec t'envae&iuml;x."; //Descripcion del lugar.
$lugar[30]["NORD"] = FALSE;
$lugar[30]["SUD"] = "20";
$lugar[30]["EST"] = FALSE;
$lugar[30]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][31])) { $HTTP_SESSION_VARS["lugares"][31] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][31] = "Muntanya";
$lugar[31]["descripcion"] = "Es realça en la foscor una gran muntanya."; //Descripcion del lugar.
$lugar[31]["NORD"] = "32";
$lugar[31]["SUD"] = FALSE;
$lugar[31]["EST"] = "20";
$lugar[31]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][32])) { $HTTP_SESSION_VARS["lugares"][32] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][32] = "Terraplen";
$lugar[32]["descripcion"] = "Al lluny d'aquest inclinat terreny s'albira la inconfundible silueta d'una antiga casa."; //Descripcion del lugar.
$lugar[32]["NORD"] = "33";
$lugar[32]["SUD"] = "31";
$lugar[32]["EST"] = FALSE;
$lugar[32]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][33])) { $HTTP_SESSION_VARS["lugares"][33] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][33] = "Casa de La Mussara";
$lugar[33]["descripcion"] = "La lluna sembla il·luminar aquesta casa plena de dolentes herbes i en ru&iuml;nes."; //Descripcion del lugar.
$lugar[33]["NORD"] = FALSE;
$lugar[33]["SUD"] = "32";
$lugar[33]["EST"] = FALSE;
$lugar[33]["OEST"] = "34";

if (!isset($HTTP_SESSION_VARS["lugares"][34])) { $HTTP_SESSION_VARS["lugares"][34] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][34] = "Pedra del sis";
$lugar[34]["descripcion"] = "Aquesta pedra ha de ser la qual ha donat origen a aquestes llegendes que parlen de l'exist&egrave;ncia d'un poble en una realitat paral·lela i que van a visitar tots aquells que desapareixen misteriosament per aqu&iacute;."; //Descripcion del lugar.
$lugar[34]["NORD"] = "44";
$lugar[34]["SUD"] = FALSE;
$lugar[34]["EST"] = "33";
$lugar[34]["OEST"] = "35";

if (!isset($HTTP_SESSION_VARS["lugares"][35])) { $HTTP_SESSION_VARS["lugares"][35] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][35] = "Baixada a la cova";
$lugar[35]["descripcion"] = "Un &agrave;rid camí s'est&eacute;n baixant cap al nord."; //Descripcion del lugar.
$lugar[35]["NORD"] = "36";
$lugar[35]["SUD"] = FALSE;
$lugar[35]["EST"] = "34";
$lugar[35]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][36])) { $HTTP_SESSION_VARS["lugares"][36] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][36] = "Interior de la Cova";
$lugar[36]["descripcion"] = "Sense trobar una explicaci&oacute;, en aquest lloc la llum de la llanterna es fa t&eacute;nue. Estem dintre d'una cova."; //Descripcion del lugar.
$lugar[36]["NORD"] = FALSE;
$lugar[36]["SUD"] = "35";
$lugar[36]["EST"] = FALSE;
$lugar[36]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][37])) { $HTTP_SESSION_VARS["lugares"][37] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][37] = "Interior de la Casa 3";
$lugar[37]["descripcion"] = "El sal&eacute; principal est&agrave; molt fosc, per&ograve; amb ajuda de la llanterna aconsegueixes veure'l tot."; //Descripcion del lugar.
$lugar[37]["NORD"] = "40";
$lugar[37]["SUD"] = "38";
$lugar[37]["EST"] = "39";
$lugar[37]["OEST"] = "41";

if (!isset($HTTP_SESSION_VARS["lugares"][38])) { $HTTP_SESSION_VARS["lugares"][38] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][38] = "Casa 3";
$lugar[38]["descripcion"] = "Damunt d'un mur s'alça aquesta casa, que t&eacute; una gran porta de fusta trencada. Sense per pujar, &eacute;s impossible arribar a ella. "; //Descripcion del lugar.
$lugar[38]["NORD"] = "37";
$lugar[38]["SUD"] = FALSE;
$lugar[38]["EST"] = FALSE;
$lugar[38]["OEST"] = "17";

if (!isset($HTTP_SESSION_VARS["lugares"][39])) { $HTTP_SESSION_VARS["lugares"][39] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][39] = "Habitaci&oacute; 1 de la casa 3";
$lugar[39]["descripcion"] = "Arribes a una habitaci&oacute; molt blanca, que rellu&iuml;x gr&agrave;cies a la llum de la teva llanterna."; //Descripcion del lugar.
$lugar[39]["NORD"] = FALSE;
$lugar[39]["SUD"] = FALSE;
$lugar[39]["EST"] = FALSE;
$lugar[39]["OEST"] = "37";

if (!isset($HTTP_SESSION_VARS["lugares"][40])) { $HTTP_SESSION_VARS["lugares"][40] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][40] = "Habitaci&oacute; 3 de la casa 3";
$lugar[40]["descripcion"] = "Una petita habitaci&oacute; en la qual nom&oacute;s hi ha una bombona de met&agrave;l·lica, probablement d'&uacute;s militar."; //Descripcion del lugar.
$lugar[40]["NORD"] = FALSE;
$lugar[40]["SUD"] = "37";
$lugar[40]["EST"] = FALSE;
$lugar[40]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][41])) { $HTTP_SESSION_VARS["lugares"][41] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][41] = "Habitaci&oacute; 2 de la casa 3";
$lugar[41]["descripcion"] = "Unes prestatgeries de fusta, una finestra amb els cristalls trencats i una taula &uacute;s el que m&uacute;s et crida l'atenci&oacute;."; //Descripcion del lugar.
$lugar[41]["NORD"] = FALSE;
$lugar[41]["SUD"] = FALSE;
$lugar[41]["EST"] = "37";
$lugar[41]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][42])) { $HTTP_SESSION_VARS["lugares"][42] = TRUE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][42] = "Matorrals";
$lugar[42]["descripcion"] = "Aqu&iacute; hi ha un cam&igrave;."; //Descripcion del lugar.
$lugar[42]["NORD"] = "43";
$lugar[42]["SUD"] = "28";
$lugar[42]["EST"] = FALSE;
$lugar[42]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][43])) { $HTTP_SESSION_VARS["lugares"][43] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][43] = "Castell";
$lugar[43]["descripcion"] = "Aquest lloc adornat amb un solemne castell amb un fort ja en ru&iuml;nes &eacute;s on sembla haver aterrat aquesta llum que vesteix des del cotxe, just abans de parar-se.Per&ograve; aqu&iacute; no hi ha gens fora del normal, excepte una espessa boira que sembla caminar al moure's amb el vent."; //Descripcion del lugar.
$lugar[43]["NORD"] = FALSE;
$lugar[43]["SUD"] = "42";
$lugar[43]["EST"] = FALSE;
$lugar[43]["OEST"] = FALSE;

if (!isset($HTTP_SESSION_VARS["lugares"][44])) { $HTTP_SESSION_VARS["lugares"][44] = FALSE; } //El lugar es visitable.
$HTTP_SESSION_VARS["lugar_nombre"][44] = "La Vila del Sis";
$lugar[44]["descripcion"] = ""; //Descripcion del lugar.
$lugar[44]["NORD"] = FALSE;
$lugar[44]["SUD"] = FALSE;
$lugar[44]["EST"] = FALSE;
$lugar[44]["OEST"] = FALSE;

?>
