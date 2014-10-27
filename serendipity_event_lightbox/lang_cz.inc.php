<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/12/01
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/15
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/10/31
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2012/05/13
 */

#@define('PLUGIN_EVENT_LIGHTBOX_NAME', 'Lightbox/Thickbox JS/Greybox');
#@define('PLUGIN_EVENT_LIGHTBOX_DESC', 'Lightbox je jednoduch� nen�padn� skript pou��van� k zobrazen� obr�z� p�es aktu�ln� stranu. B�hem okam�iku ho nastav�te. Funguje ve v�ech modern�ch prohl�e��ch. Lightbox zobrazuje obr�zky, zat�mco Thickbox um� zobrazit tak� vyskakovac� HTML bloky. Oba skripty funguj� n�sledovn�: Vyhled�vaj� v p��sp�vc�ch a nahrazuj� ka�d� v�skyt odkazu \'a href="XXX"\' odkazem na zobrazen� nad aktu�ln� str�nkou. Tak�e pokud chcete zobrazovat zv�t�en� obr�zky, sta�� do �l�nku vlo�it odkazy na tyto velk� obr�zky. P�i pou�it� Thickboxu vlo�te atribut \'class="thickbox"\' do odkazu \'a href\', tento odkaz se pak zobraz� ve vyskakovac�m okn�.');
@define('PLUGIN_EVENT_LIGHTBOX_TYPE', 'Vyberte skript, kter� m� form�tovat Va�e obr�zky/odkazy');
@define('PLUGIN_EVENT_LIGHTBOX_PATH', 'Cesta ke skript�m');
@define('PLUGIN_EVENT_LIGHTBOX_PATH_DESC', 'Zadejte plnou HTTP cestu (v�echno, co n�sleduje po n�zvu Va�� dom�ny) do adres��e s pluginem Lightbox.');

@define('PLUGIN_EVENT_LIGHTBOX_OPTIMIZATION', 'Optimalizace nahr�v�n� JavaScriptu');
@define('PLUGIN_EVENT_LIGHTBOX_OPTIMIZATION_DESC', 'Zapnut� t�to volby nahraje skript a CSS Lightboxu pouze pokud jsou v zobrazen�m �l�nku obr�zky, kter� tuto funkci vy�aduj�. To podstatn� zkr�t� dobu nahr�v�n� str�nky. Na n�kter�ch blog�ch tato funkce vedla k tomu, �e se skript nenahr�l nikdy. Pokud je to i V� p��pad, vypn�te tuto volbu.');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY', 'Vytvo�it galerii');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_NONE', '��dn� galerie');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_ENTRY', 'Galerie s fotkami z p��sp�vku');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_PAGE', 'Galerie s fotkami na t�to str�nce');

// Next lines were translated on 2012/05/13
@define('PLUGIN_EVENT_LIGHTBOX_INIT_JS', 'Objekt s inicializa�n�m nastaven�m JavaScriptu');
@define('PLUGIN_EVENT_LIGHTBOX_INIT_JS_DESC', 'N�kter� typy Lightboxu (nap�. prettyPhoto) umo��uj� zad�n� libovoln�ho objektu s nastavn�m, tak�e m��ete zadat nap�. "(social_tools: false)". Currently works with prettyPhoto only.');