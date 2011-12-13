<?php # lang_cs.inc.php 1.0 2009-06-14 10:48:58 VladaAjgl $

/**
 *  @version 1.0
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/06/14
 */

@define('PLUGIN_EVENT_FLICKR_NAME', 'Import z Flickru');
@define('PLUGIN_EVENT_FLICKR_DESC', 'Importuje obr�zky z flickr.com do knihovny m�di�');
@define('PLUGIN_EVENT_FLICKR_APIKEY', 'API kl��');
@define('PLUGIN_EVENT_FLICKR_APIKEY_INVALID', 'Kl�� m� 32 znak� a obsahuje pouze ��slice a p�smenka [a-f] (kl�� je v �estn�ctkov� ��seln� soustav�)');
@define('PLUGIN_EVENT_FLICKR_APIKEY_DESC', 'API kl�� z http://www.flickr.com/services/api/');
@define('PLUGIN_EVENT_FLICKR_IMPORT', 'Importovat obr�zky ze slu�by Flickr.com');
@define('PLUGIN_EVENT_FLICKR_IMPORT2', 'Importovat obr�zky ze slu�by Flickr.com (krok 2)');
@define('PLUGIN_EVENT_FLICKR_TAGS', 'Tagy');
@define('PLUGIN_EVENT_FLICKR_KEYWORDS', 'Kl��ov� slova');

@define('PLUGIN_EVENT_FLICKR_IMPORT_BLAHBLAH', 'Plugin um� importovat pouze fotky ozna�en� jako "ve�ejn�" ("public"). Pamatujte na to, �e k fotk�m existuj� jist� (autorsk�) pr�va.');
@define('PLUGIN_EVENT_FLICKR_INSTALL', '<strong>/!\</strong> U n�kter�ch poskytovatel� internetov�ho p�ipojen� nen� mo�n� zm�nit cestu "include path" pomoc� php funkce ini_set() (nap�. slu�ba Free.fr). Tento plugin pak zhavaruje, proto�e nem��e naj�t n�kter� t��dy.<br /><br />V takov�m p��pad� m�te nejsp�e na sv�m webov�m ��tu zvl�tn� prostor, kam m��ete nahr�t vlastn� php skripty (na podrobnosti se ptejte poskytovatele internetov�ho p�ipojen�). Na Free.fr nap�. jednodu�e vytvo��te adres�� "include" v ko�enov�m adres��i Va�eho ��tu. Pak zkop�rujete v�echno z podadres��e phpFlickr/PEAR (podadres�� tohoto pluginu) do zm�n�n�ho "include" adres��e.');