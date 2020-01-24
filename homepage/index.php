<?php
    //Nombre:
    $title = "La villa del seis";

    //Nombre unix:
    $unix = "lavilladel6";

    //Resumen:
    $summary = 'A terror adventure. Combination of graphical point-and-click adventure and text adventure totally written in PHP and DHTML.';
    
    //Descripcion:
    $description = 'La villa del seis is a multiplatform point-and-click graphical psychological terror adventure in PHP and DHTML that uses mouse and keyboard optionally.[br]Also, you can play it like a text adventure (interactive fiction) on a text browser or without JavaScript.[br]The game uses Yasmina\'s Quest motor but altered and improved.[br]You can use the motor/engine/parser to create your own adventure if you know PHP and JavaScript.';
        
    //Version:
    $version = "1.0";

    //Ultimos cambios:
    $last_changes = "16th September 2006 (approximately)";
    
    //Url para donar:
    $donate_url = "http://sourceforge.net/donate/index.php?group_id=177819";
    
    //Se filtran los caracteres especiales a HTML:
    $title = htmlspecialchars($title);
    $unix = htmlspecialchars($unix);
    $summary = htmlspecialchars($summary);
    $yquest_url = "http://www.dhtmlgames.com/yquest/";
	if (isset($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['SERVER_NAME']) && strpos($HTTP_SERVER_VARS['SERVER_NAME'], "tuxfamily.org") !== false || isset($_SERVER) && isset($_SERVER['SERVER_NAME']) && strpos($_SERVER['SERVER_NAME'], "tuxfamily.org") !== false) { $yquest_url = "http://yquest.tuxfamily.org/"; }
	$description = str_replace("Yasmina's Quest", "<a href=\"" . $yquest_url . "\" target=\"_blank\">Yasmina's Quest</a>", str_replace("[br]", "<br>", htmlspecialchars($description)));
    $version = htmlspecialchars($version);

    //Se configura el BBClone:
    define("_BBC_PAGE_NAME", $unix." homepage");
    define("_BBCLONE_DIR", "bbclone/");
    define("COUNTER", _BBCLONE_DIR."mark_page.php");
    if (is_readable(COUNTER)) include_once(COUNTER);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <link rev="made" href="mailto:drogaslibres@hotmail.com">
        <link rel="SHORTCUT ICON" href="favicon.ico">
        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Content-Language" content="en">

        <meta http-equiv="Reply-To" content="drogaslibres@hotmail.com">

        <meta http-equiv="imagetoolbar" content="no">

        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="expires" content="0">

        <meta name="VW96.objecttype" content="Document">
        <meta name="resource-type" content="Document">
        <meta name="DC.Type" scheme="DCMIType" content="Text">
        <!-- <meta name="DC.Format.Medium" content="text/html"> -->

        <meta name="DC.Format" content="text/html">

        <meta name="DC.Identifier" content="http://<?php echo $unix; ?>.tuxfamily.org">
        <meta name="URL" content="http://<?php echo $unix; ?>.tuxfamily.org">
        <meta http-equiv="URL" content="http://<?php echo $unix; ?>.tuxfamily.org">

        <meta name="DC.Source" content="<?php echo $title; ?>">

        <meta name="htdig-email" content="drogaslibres@hotmail.com">

        <meta name="subject" content="<?php echo $summary; ?>">
        <meta name="DC.Subject" content="<?php echo $summary; ?>">

        <meta name="generator" content="MAX's HTML Beauty++ 2004">

        <meta name="title" content="<?php echo $title; ?>">
        <meta name="DC.title" content="<?php echo $title; ?>">
        <meta http-equiv="title" content="<?php echo $title; ?>">

        <meta name="author" content="Joan Alba Maldonado">
        <meta name="autor" content="Joan Alba Maldonado">
        <meta name="DC.Creator" content="Joan Alba Maldonado">
        <meta name="DC.Publisher" content="Joan Alba Maldonado">

        <meta name="creator" content="Joan Alba Maldonado">
        <meta name="DC.creator" content="Joan Alba Maldonado">

        <meta name="keywords" content="game, javascript, dhtml, ajax, php, html, css, free, open">
        <meta name="htdig-keywords" content="game javascript dhtml ajax php html css free open">
        <meta http-equiv="keywords" content="game, javascript, dhtml, ajax, php, html, css, free, open">
 
        <meta name="description" content="<?php echo $summary; ?>">
        <meta name="DC.Description" content="<?php echo $summary; ?>">
        <meta http-equiv="description" content="<?php echo $summary; ?>">

        <meta name="distribution" content="global">
        <meta http-equiv="distribution" content="global">

        <meta name="revisit" content="1 day">
        <meta name="revisit-after" content="1 day">
        <meta name="robots" content="all">
        <meta name="GOOGLEBOT" content="all"> 

        <meta name="DC.Language" scheme="RFC1766" content="en">
        <meta name="language" content="en">

        <meta name="copyright" content="&copy; <?php echo date("Y") . " " . $title; ?>" lang="en">
        <meta name="DC.Rights" content="(c) <?php echo date("Y") . " " . $title; ?>" lang="en">
		
		<script language="javascript" type="text/javascript">
		<!--
			function changeEmailsNoSpam()
			{
				var emailLink = document.getElementById("email_link");
				if (emailLink !== null)
				{
					var innerHTMLBackup = emailLink.innerHTML.replace("NO_SPAM_PLEASE", ""); //IE fix.
					emailLink.href = emailLink.href.replace("NO_SPAM_PLEASE", "");
					emailLink.innerHTML = innerHTMLBackup;
				}

				var emailNoSpam = document.getElementById("email_no_spam");
				if (emailNoSpam !== null)
				{
					emailNoSpam.innerHTML = "";
				}
				
				return;
			}
		// -->
		</script>
    </head>
    <body bgcolor="#fefefe" link="#0000ff" alink="#ff0000" vlink="#0000ff" leftmargin="20" topmargin="20" marginwidth="20" marginheight="20" onLoad="setTimeout(function() { changeEmailsNoSpam(); }, 100);">
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
            <!-- <tr>
                <td>
                    <div style="position:absolute; text-align:right; width:95%;">[ <a href="bbclone/" target="_blank" title="See stats for <?php echo $title; ?>">Stats</a> ]</div>
                </td>
            </tr> -->
            <tr>
                <td>
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td>
                                <img src="icon.gif" alt="icon icon.gif" title="<?php echo $title; ?>" align="left" align="middle" hspace="10" vspace="0"><div style="font-family:verdana; font-size:28px; font-weight:bold; color:#aa0000;"><?php echo $title; ?></div>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <font face="arial" size="3">
                                    <i><?php echo $summary; ?></i><br>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <font face="courier" size="3">
                                    You can <b>donate</b> using PayPal at <a href="<?php echo $donate_url; ?>" target="_blank" title="Please, donate!"><?php echo str_replace("http://sourceforge.net", "sf.net", $donate_url); ?></a>
                                </font>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <font face="verdana"><h2>Description</h2></font>
        <ul>
            <font face="arial" size="3">
                <?php echo $description; ?><br>
                This cross-platform and cross-browser game was tested under PC (Windows, BeOS, Linux, FreeBSD, OpenBSD, NetBSD, Syllable, SkyOS, etc), MAC (Mac OS 7.1, Mac OS X), Amiga, console (Nintendo DS, PSP, Dreamcast, XBOX), etc.
				<br>
                <br>
				<font face="arial" size="3">
						Last version: <?php echo $version; ?>
						<ul><li> <?php echo $last_changes; ?></li></ul>
				</font>
            </font>
        </ul>        
        <font face="verdana"><h2>Download</h2></font>
        <font face="arial" size="3">
            <ul>
                <li> <?php echo $version; ?> version</li>
                <ul><li> Spanish language: <a href="<?php echo $unix; ?>_spanish.zip" title="download Spanish version"><?php echo $unix; ?>_spanish.zip</a> <i>(<?php printf("%.2f", filesize($unix."_spanish.zip") / 1024); ?> KB)</i></li></ul>
				<ul><li> Spanish language on php-webkit installer (Windows 32 bit, minimum Windows XP with SP2) + source code (packaged): <a href="la_villa_del_seis_php-webkit_win32_installer.exe" title="download php-webkit installer Spanish version">la_villa_del_seis_php-webkit_win32_installer.exe</a> <i>(<?php printf("%.2f", filesize("la_villa_del_seis_php-webkit_win32_installer.exe") / 1024); ?> KB)</i></li></ul>
				<?php
					$fileSize = 31753.11;
					$fileURL = "http://dhtmlgames.com/lavilladel6/la_villa_del_seis_php-webkit_win32.zip";
					if (file_exists("la_villa_del_seis_php-webkit_win32.zip")) //Tuxfamily.org has limited space.
					{
						$fileSize = filesize("la_villa_del_seis_php-webkit_win32.7z") / 1024;
						$fileURL = "la_villa_del_seis_php-webkit_win32.zip";
					}
				?>
				<ul><li> Spanish language on php-webkit binary (Windows 32 bit, minimum Windows XP with SP2) + source code (packaged) in ZIP: <a href="<?php echo $fileURL; ?>" title="download php-webkit binary Spanish version in ZIP">la_villa_del_seis_php-webkit_win32.zip</a> <i>(<?php printf("%.2f", $fileSize); ?> KB)</i></li></ul>
				<ul><li> Spanish language on php-webkit binary (Windows 32 bit, minimum Windows XP with SP2) + source code (packaged) in 7z: <a href="la_villa_del_seis_php-webkit_win32.7z" title="download php-webkit binary Spanish version in 7z">la_villa_del_seis_php-webkit_win32.7z</a> <i>(<?php printf("%.2f", filesize("la_villa_del_seis_php-webkit_win32.7z") / 2014); ?> KB)</i></li></ul>
				<ul><li> Spanish language on Server2Go binary (Windows 32 bit, only recommended for older than Windows XP with SP2) + source code: <a href="la_villa_del_seis_on_server2go.zip" title="download Server2Go Spanish version">la_villa_del_seis_on_server2go.zip</a> <i>(<?php printf("%.2f", filesize("la_villa_del_seis_on_server2go.zip") / 1024); ?> KB)</i></li></ul>
                <ul><li> Catalan language: <a href="<?php echo $unix; ?>_catalan.zip" title="download Catalan version"><?php echo $unix; ?>_catalan.zip</a> <i>(<?php printf("%.2f", filesize($unix."_catalan.zip") / 1024); ?> KB)</i></li></ul>
				<ul><li> Catalan language on Server2Go binary (Windows 32 bit, only recommended for older than Windows XP with SP2) + source code: <a href="la_vila_del_sis_on_server2go.zip" title="download Server2Go Catalan version">la_vila_del_sis_on_server2go.zip</a> <i>(<?php printf("%.2f", filesize("la_vila_del_sis_on_server2go.zip") / 1024); ?> KB)</i></li></ul>
            </ul>
        </font>
        <font face="verdana"><h2>Play on-line</h2></font>
        <font face="arial" size="3">
            <ul>
                <li> <?php echo $version; ?> version</li>
                <ul><li> <a href="<?php echo $unix; ?>_spanish/index.php" target="_blank" title="play Spanish version">play Spanish version</a></li></ul>
                <ul><li> <a href="<?php echo $unix; ?>_catalan/index.php" target="_blank" title="play Catalan version">play Catalan version</a></li></ul>
            </ul>
        </font>
        <font face="verdana"><h2>Screenshots</h2></font>
        <ul>
            PC platform under a web browser with CSS support:<br>
            <img src="<?php echo $unix; ?>.gif" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;"><br><br>
            Nintendo DS platform under Opera mini:<br>
            <img src="<?php echo $unix; ?>_nds.jpg" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;"><br><br>
            PSP platform under Links 2 with CSS support:<br>
            <img src="<?php echo $unix; ?>_psp_links2.png" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;"><br><br>
            PSP platform under Sony browser with CSS support:<br>
            <img src="<?php echo $unix; ?>_psp_sony.jpg" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;"><br><br>
            DreamCast platform under PlanetWeb:<br>
            <img src="<?php echo $unix; ?>_dc_planetweb.jpg" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;"><br><br>
            DreamCast platform under XDP:<br>
            <img src="<?php echo $unix; ?>_dc_xdp.jpg" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;"><br><br>
            Pocket PC platform under Opera without CSS support:<br>
            <img src="<?php echo $unix; ?>_ppc.jpg" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;"><br><br>
            PC platform under Links without CSS support:<br>
            <img src="<?php echo $unix; ?>_links.gif" hspace="0" vspace="0" alt="screenshot <?php echo $unix; ?>.gif" title="<?php echo $title; ?>" style="max-width:100%;">
        </ul>
        <font face="verdana"><h2>Contact</h2></font>
        <ul>
            <div style="width:100%; overflow:auto;">
				This projects was created by Yasmina Llaveria del Castillo and <a href="https://joanalbamaldonado.com/" target="_blank">Juan Alba Maldonado</a> (<a href="mailto:joanalbamaldonadoNO_SPAM_PLEASE@gmail.com?subject=<?php echo $unix; ?>" id="email_link">joanalbamaldonado<del><s>NO_SPAM_PLEASE</s></del>@gmail.com</a><span id="email_no_spam">, without &quot;NO_SPAM_PLEASE&quot;</span>).
			</div>
        </ul>
		<a href="https://github.com/jalbam/lavilladel6" target="_blank"><img style="position:absolute; top:0; right:0; border:0;" src="github_fork_me_right_upper.gif" alt="Fork me on GitHub"></a>
    </body>
</html>