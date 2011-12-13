<?php # lang_cz.inc.php 1.0 2009-05-25 22:20:33 VladaAjgl $

/**
 *  @version 1.0
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/05/25
 */

@define('PLUGIN_EVENT_FCKEDITOR_NAME',     'Pou�it� FCKeditoru jako WYSIWYG editoru');
@define('PLUGIN_EVENT_FCKEDITOR_DESC',     'Pou��v� FCKeditor jako WYSIWYG editor. Vy�aduje Serendipity 0.9 nebo vy���. Po instalaci si p�e�t�te instala�n�ho pr�vodce na str�nce s nastaven�m pluginu.');
@define('PLUGIN_EVENT_FCKEDITOR_INSTALL', '<br /><br /><strong>Instala�n� pr�vodce:</strong><br />
<ul>
<li>St�hn�te FCKeditor v2.1 nebo vy��� z http://www.fckeditor.net/</li>
<li>Rozbalte do podadres��e "FCKeditor" v adres��i ' . dirname(__FILE__) . '</li>
<li>Zadejte zde do nastaven� pluginu relativn� cestuk adres��i "FCKeditor".</li>
<li>V�t�inou je tato cesta "plugins/serendipity_event_fckeditor/fckeditor/"</li>
<li>Ujist�te se, �e jste v Nastaven� Serendipity povolili pou�it� WYSIWYG editoru.</li>
</ul>');
@define('PLUGIN_EVENT_FCKEDITOR_CONFIG', '<br /><br /><strong>Pr�vodce nastaven�m pluginu:</strong><br />
<ul>
<li>Pokud po�adujete od editoru v�ce funkc�, jako je nap��klad spr�vce soubor� nebo operace s tabulkami, p�epi�te konfigura�n� soubor fckconfig.js file v adres��i fckeditor n�kter�m p�ilo�en�m.</li>
<ul>
	<li>pak jd�te na serendipity_event_fckeditor/fckeditor/editor/filemanager/browser/default/connectors/php/config.php</li>
	<li>a zm��te nastaven� n�sledovn� $Config["Enabled"] = true; a $Config["UserFilesPath"] = "/uploads/";</li>
	<li>pak nalezn�te serendipity_event_fckeditor/fckeditor/editor/filemanager/upload/php/config.php</li>
	<li>a zopakujte zm�nu parametr� nastaven�</li>
</ul>
<li>V FCKeditoru jsou 3 r�zn� �ablony vzhledu - v�choz�, office2003 a silver. Ty se daj� nastavit v souboru fckconfig.js.</li>
	<ul><li>Jednodu�e p�epi�te prom�nnou FCKConfig.SkinPath = FCKConfig.BasePath + "skins/default/" ;. nahra�te office2003 nebo silver</li></ul>

</ul>');

?>
