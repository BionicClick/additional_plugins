<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  DE-Revision: Revision of lang_de.inc.php
 */

@define('PLUGIN_EVENT_LIGHTBOX_NAME',               'Lightbox/Thickbox JS/Graybox');
@define('PLUGIN_EVENT_LIGHTBOX_DESC',               'Lightbox JS ist eine einfaches unauff�lliges Skript, das Bilder auf der Seite �berlagern kann, wenn die gro�e Version angeklickt wurde. Es f�gt sich selbstst�ndig in die Seite ein und funktioniert mit jedem modernen Browser. Lightbox versch�nert Bilder-Popups, w�hrend ThickBox auch HTML Popups ver�ndert. Beide Skripte durchsuchen ihre Eintr�ge und ersetzen jeden \'a href="XXX"\' so, dass die interne Darstellung benutzt wird. Wenn Sie also ein Thumbnail Bild mit einem Popup der gro�en Version haben wollen, so f�gen Sie das Thumbnail in ihren Eintrag ein und verlinken dieses mit der gro�en Version. Wenn Sie Thickbox benutzen, k�nnen sie zus�tzlich auch ein \'class="thickbox"\' Attribut in ihren \'a href\' Link einf�gen, um diese in einem Popup Fenster zu laden.');
@define('PLUGIN_EVENT_LIGHTBOX_TYPE',               'W�hlen Sie das Skript aus, das ihre Bilder/Links formatieren soll');
@define('PLUGIN_EVENT_LIGHTBOX_PATH',               'Pfad zu den Skripten');
@define('PLUGIN_EVENT_LIGHTBOX_PATH_DESC',          'Geben Sie hier den kompletten HTTP Pfad ein (alles nach ihrem Domain Namen), der das Verzeichnis des Plugins angibt.');

@define('PLUGIN_EVENT_LIGHTBOX_OPTIMIZATION',       'JavaScript Ladeoptimierung');
@define('PLUGIN_EVENT_LIGHTBOX_OPTIMIZATION_DESC',  'Wenn sie diese Option anschalten, so werden die Skripte und CSS Dateien von Lightbox nur in den Seitenheader geladen, wenn auch ein Bild auf der aktuellen Seite dargestellt wird. Dies wird die Ladezeit von Seiten ohne Lightbox f�hige Bilder sp�rbar verk�rzen. Leider funktioniert das offenbar nicht bei allen Blogs, deshalb kann diese Optimierung ausgeschaltet werden, wodurch die Skripte wieder auf jeder Seite geladen werden.');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY',  'Galerie-Erzeugung');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_DESC',  'Steuert, ob das Bl�ttern zum n�chsten Bild �ber Pfeile m�glich ist.');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_NONE', 'keine Galerie');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_ENTRY', 'nur Fotos eines Artikels');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_PAGE', 'alle Fotos der Seite'); 