<?php # lang_cz.inc.php 1.1 2010-09-28 09:02:21 VladaAjgl $

/**
 *  @version 1.1
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/06/27
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/09/28
 */
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_NAME', 'Google Analytics');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_DESC', 'Tento plugin p�id�v� va�emu blogu ro���en� funkce Google Analytics jako je nap��klad sledov�n� odkaz� nebo sta�en�ch soubor�.');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_ACCOUNT_NUMBER', '��slo ��tu Google Analytics');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_ACCOUNT_NUMBER_DESC', '��slo va�eho ��tu Google Analytics. Zad�vejte ��st xxxx-x z �et�zce _uacct="UA-xxxx-x";');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_TRACK_DOWNLOADS', 'Sledovat sta�en� soubory?');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_TRACK_DOWNLOADS_DESC', '');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_TRACK_EXTERNAL', 'Sledovat odchoz� odkazy?');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_TRACK_EXTERNAL_DESC', '');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_DOWNLOAD_EXTENSIONS', 'Kter� sta�en� soubory se maj� sledovat?');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_DOWNLOAD_EXTENSIONS_DESC', 'Seznam p��pon sledovan�ch soubor�. Jednotliv� p��pony jsou odd�len� ��rkou.');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_INTERNAL_HOSTS', 'Dom�ny, kter� p�istupuj� k blogu.');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_INTERNAL_HOSTS_DESC', 'Jedna dom�na na ��dce (www.priklad.cz).');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_EXCLUDE_GROUPS', 'Kter� skupiny u�ivatel� nemaj� b�t sledov�ny?');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_EXCLUDE_GROUPS_DESC', 'Vyberte skupiny ze seznamu.');

// Next lines were translated on 2010/09/28
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_ANONYMIZEIP', 'Anonymn� IP');
@define('PLUGIN_EVENT_GOOGLE_ANALYTICS_ANONYMIZEIP_DESC', 'Oznamovat n�stroji Google Analytics, aby znemo�nil jednozna�nou identifikaci pomoc� IP adresy zas�lan� sledovan�mi objekty t�m, �e odstran� posledn� oktet z IP adresy je�t� p�ed t�m, ne� ji ulo�� do datab�ze. M�jte na pam�ti, �e tato akce trochu sn�� p�esnost ur�en� geografick� polohy n�v�t�vn�k�.');