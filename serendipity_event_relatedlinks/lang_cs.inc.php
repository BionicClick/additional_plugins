<?php # lang_cs.inc.php 0.1 2009-02-15 21:25:32 VladaAjgl $

/**
 *  @version 0.1
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @translated 2009/02/15
 */

@define('PLUGIN_EVENT_RELATEDLINKS_TITLE',		'Odkazy na podobn� pr�spevky/str�nky');
@define('PLUGIN_EVENT_RELATEDLINKS_DESC',		'Vlo�te odkazy na podobn� pr�spevky/str�nky. K lep��mu prizpusoben� v�stupu mu�ete upravit Smarty �ablonu "plugin_relatedlinks.tpl". Tento modul zobrazuje data pouze v detailn�m zobrazen� pr�spevku.');
@define('PLUGIN_EVENT_RELATEDLINKS_ENTERDESC',		'Vlo�te odkazy, kter� chcete zobrazit. Jedno URL (��dn� HTML) na r�dku (tzn. oddelen� koncem r�dky). Chcete-li vlo�it popis, pou�ijte tento form�t: http://priklad.cz/odkaz.html=Nejak� odkaz. V�e za znakem "=" bude pou�ito jako popis. Pokud nen� popis vlo�en, zobraz� se m�sto nej samotn� adresa (URL).');
@define('PLUGIN_EVENT_RELATEDLINKS_LIST',		'Podobn� pr�spevky/str�nky:');

@define('PLUGIN_EVENT_RELATEDLINKS_POSITION',		'Um�sten� odkazu na podobn� str�nky');
@define('PLUGIN_EVENT_RELATEDLINKS_POSITION_DESC',		'Pridat seznam odkazu do z�pat� pr�spevku nebo pou��t Smarty �ablony? Pokud aktivujete Smarty �ablony, budete muset do sv� �ablony entries.tpl do foreach cyklu, kde je nastaveno $entry (tzn. tam, kde se zobrazuj� koment�re roz��ren� verze pr�spevku) pridat: {serendipity_hookPlugin hook="frontend_display_relatedlinks" data=$entry hookAll="true"}{$RELATEDLINKS}');
@define('PLUGIN_EVENT_RELATEDLINKS_POSITION_FOOTER',		'Um�stit v z�pat� pr�spevku');
@define('PLUGIN_EVENT_RELATEDLINKS_POSITION_BODY',		'Um�stit v tele pr�spevku');
@define('PLUGIN_EVENT_RELATEDLINKS_POSITION_SMARTY',		'Pou��t Smarty');

@define('PLUGIN_EVENT_RELATEDLINKS_EXPLODECHAR',		'Znak pro odd�len� odkaz�');
@define('PLUGIN_EVENT_RELATEDLINKS_EXPLODECHAR_DESC',		'Zadejte znak, kter� bude odd�lovat URL adresy a popisky. Bu�te opatrn� p�i jeho v�b�ru, nesm� existovat ani v URL ani v popisku. Vhodn� znak je t�eba "|".');

