<?php # lang_cz.inc.php 1.5 2009-08-15 10:21:49 VladaAjgl $

/**
 *  @version 1.5
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Revision-date: 2008/01/27 17:35:00
 *  Revision-author: Vladim�r Ajgl <vlada@ajgl.cz>  
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/06/30
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/15
 */

//
//  serendipity_event_geotag.php
//

@define('PLUGIN_EVENT_GEOTAG_TITLE',            'Geotag');
@define('PLUGIN_EVENT_GEOTAG_DESC',             'Umo��uje p�idat k p��sp�vku zem�pisn� sou�adnice - geotag');
@define('PLUGIN_EVENT_GEOTAG_LONG',             'Zem�pisn� d�lka');
@define('PLUGIN_EVENT_GEOTAG_LONG_DESC',        'Zem�pisn� d�lka st�edu mapy p�i editaci p��sp�vku - mapa pro zad�v�n� sou�adnic. Uplatn� se pouze pokud v p��sp�vku ji� nejsou zad�ny sou�adnice. Pokud jsou zad�ny, je mapa vyst�ed�na na zadanou sou�adnici.');
@define('PLUGIN_EVENT_GEOTAG_LAT',              'Zem�pisn� ���ka');
@define('PLUGIN_EVENT_GEOTAG_LAT_DESC',         'Zem�pisn� ���ka st�edu mapy p�i editaci p��sp�vku - mapa pro zad�v�n� sou�adnic. Uplatn� se pouze pokud v p��sp�vku ji� nejsou zad�ny sou�adnice. Pokud jsou zad�ny, je mapa vyst�ed�na na zadanou sou�adnici.');
@define('PLUGIN_EVENT_GEOTAG_ZOOM',             'Zoom');
@define('PLUGIN_EVENT_GEOTAG_ZOOM_DESC',        'P�ibl�en� mapy p�i editaci p��sp�vku - mapa pro zad�v�n� sou�adnic.');
@define('PLUGIN_EVENT_GEOTAG_FRONTEND_LABEL',   'Sou�adnice');
@define('PLUGIN_EVENT_GEOTAG_MAP_URL',          'URL mapy');
@define('PLUGIN_EVENT_GEOTAG_MAP_DESC',         'Up�esn�te podrobn� link do mapy, nap��klad http://local.google.com/maps?q=%GEO_LAT%,%GEO_LONG%+(%TITLE%)&spn=0.1,0.1&t=h');
@define('PLUGIN_EVENT_GEOTAG_API_KEY',          'Google Maps API key');
@define('PLUGIN_EVENT_GEOTAG_API_KEY_DESC',     'Z�skejte ho na adrese http://www.google.com/apis/maps/signup.html. Ponechte pr�zdn�, pokud nechcete pou��v�t Google Maps location picker.');

//
//  serendipity_plugin_geotag.php
//

@define('PLUGIN_GEOTAG_GMAP_NAME',              "Geotag Google Map");
@define('PLUGIN_GEOTAG_GMAP_NAME_DESC',         "Tento plugin zobrazuje sou�adnice u osou�adnicovan�ch p��sp�vk� v map�ch na Googlu");
@define('PLUGIN_GEOTAG_GMAP_TITLE',             "Nadpis");
@define('PLUGIN_GEOTAG_GMAP_TITLE_DESC',        "Vlo�te nadpis postran�ho panelu:");
@define('PLUGIN_GEOTAG_GMAP_TITLE_DEFAULT',     "GMap");
@define('PLUGIN_GEOTAG_GMAP_KEY',               "Google Maps API Key");
@define('PLUGIN_GEOTAG_GMAP_KEY_DESC',          "Z�skejte jej na http://www.google.com/apis/maps/signup.html zad�n�m ko�enov� adresy va�eho blogu:");
@define('PLUGIN_GEOTAG_GMAP_WIDTH',             "���ka");
@define('PLUGIN_GEOTAG_GMAP_WIDTH_DESC',        "(v�choz� = 220).");
@define('PLUGIN_GEOTAG_GMAP_HEIGHT',            "V��ka");
@define('PLUGIN_GEOTAG_GMAP_HEIGHT_DESC',       "(v�choz� = 150).");
@define('PLUGIN_GEOTAG_GMAP_ZOOM',              "Velikost zoomu");
@define('PLUGIN_GEOTAG_GMAP_ZOOM_DESC',         "(0-8) P�i 0 je vid�t cel� sv�t, v�t�� ��sla pro bli��� pohled.");
@define('PLUGIN_GEOTAG_GMAP_LONGITUDE',         "Zem�pisn� d�lka");
@define('PLUGIN_GEOTAG_GMAP_LONGITUDE_DESC',    "Zem�pisn� d�lka st�edu mapy");
@define('PLUGIN_GEOTAG_GMAP_LATITUDE',         	"Zem�pisn� ���ka");
@define('PLUGIN_GEOTAG_GMAP_LATITUDE_DESC',    	"Zem�pisn� ���ka st�edu mapy");
@define('PLUGIN_GEOTAG_GMAP_TYPE',              "Typ mapy");
@define('PLUGIN_GEOTAG_GMAP_TYPE_DESC',         "Satelitn�, Mapa nebo Hybridn�");
@define('PLUGIN_GEOTAG_GMAP_SATELLITE',         "Satelitn�");
@define('PLUGIN_GEOTAG_GMAP_MAP',               "Mapa");
@define('PLUGIN_GEOTAG_GMAP_HYBRID',            "Hybridn�");
@define('PLUGIN_GEOTAG_GMAP_RSSURL',               "RSS2 URL");
@define('PLUGIN_GEOTAG_GMAP_RSSURL_DESC',          "Pro volbu z�sk�v�n� geodat z RSS kan�lu: URL na geotagovan� RSS2 kan�l. M��ete pou��t jednotlivou kategorii, nebo p�ipojit v�e - all=1.");

@define('PLUGIN_GEOTAG_GMAP_DATABASE',              'datab�ze');
@define('PLUGIN_GEOTAG_GMAP_GEODATA_SOURCE',        'Zdroj geodat');
@define('PLUGIN_GEOTAG_GMAP_GEODATA_SOURCE_DESC',   'Vyberte, odkud se maj� z�sk�vat geodata. "RSS" znamen�, �e javacsript bude na��tat rss kan�l, kter� specifikujete ve volb� n�e, z n�j pak bude vysos�vat sou�adnice. "Datab�ze" znamen�, �e se budou na��tat z datab�ze. RSS kan�l je obecn�j�� a sn�� zat�en� p��stupu do datab�ze d�ky mo�nosti cachov�n�, ale pokud m�te rozs�hl� blog, m��e u�ivateli napoprv� trvat dlouhou dobu, ne� se st�hne kompletn� RSS kan�l.');
@define('PLUGIN_GEOTAG_GMAP_CATEGORY_DESC',         'Pro volbu z�sk�v�n� geodat z datab�ze: Zde m��ete omezit zobrazov�n� sou�adnic na p��sp�vky z jedin� kategorie.');
@define('PLUGIN_GEOTAG_GMAP_GEOCODE',           'naj�t adresu');
@define('PLUGIN_GEOTAG_GMAP_GEOCODE_TYPE_ADDRESS','Napi�te adresu...');
@define('PLUGIN_GEOTAG_GMAP_GEOCODE_MSG_PROGRESS','Sna��m se naj�t sou�adnice...');
@define('PLUGIN_GEOTAG_GMAP_GEOCODE_NOT_FOUND', 'nenalezeno:-(');
@define('PLUGIN_GEOTAG_GMAP_GEOCODE_OK',        'OK');