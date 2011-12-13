<?php

@define('PLUGIN_GOOGLE_LAST_QUERY_TITLE',                   "Letzte Suche (Google, Yahoo, Bing, Scroogle)");
@define('PLUGIN_GOOGLE_LAST_QUERY_DESC',                    "Zeigt den Inhalt der letzten Google, Yahoo, Bing und Scroogle Suchen, die zu diesem Blog gef�hrt haben, an");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_TITLE',              "Titel");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_TITLE_DESC',         "Titel des Sidebarblocks");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_COUNT',              "Anzahl");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_COUNT_DESC',         "Wieviele Suchworte anzeigen?");

@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_VISITORTABLE',       "Besucher Tabelle benutzen");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_VISITORTABLE_DESC',  "Normaler Weise wird die Referrers Tabelle benutzt. Diese enth�lt aber nur Eintr�ge die mehrmals aufgerufen wurden. Die Tabelle der Besucher enth�lt hingegen alle Referenzen, die zu diesem Blog gef�hrt haben. Wird diese benutzt, so erscheinen Google Suchen sofort. Aber Achtung: Diese Tabelle wird durch das Statistik Plugin gef�llt und auch nur dann, wenn die entsprechende Option angeschaltet ist.");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_NEWWINDOW',          "Link in neuem Fenster");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_NEWWINDOW_DESC',     "Die Suchw�rter werden mit der entsprechenden Google Suche verlinkt. Sollen diese Links in einem neuen Fenster ge�ffnet werden?");

@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_HTTPREL',            "Relativer HTTP Pfad des Plugins");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_HTTPREL_DESC',       "Hier k�nnen Sie angeben, wie ihr relativer Pfad zu dem Plugin bezogen auf die Server Adresse lautet. Wenn Sie die Permalink Struktur f�r Plugins nicht ge�ndert haben und wenn ihr Blog nicht in einem Unterverzeichnis installiert ist, k�nnen Sie die Vorgabe so belassen.");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ICONS',         "Icons anzeigen");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ICONS_DESC',    "Zeigt f�r jedes Suchresultat Icons an, die die Suchmaschine repr�sentieren.");

@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_TIME',          "Abfragezeit anzeigen");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_TIME_DESC',     "Wenn eingeschaltet, wird die Zeit der Abfrage als MouseOver �ber der Abfrage in der Liste dargestellt.");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_AUTHONLY',      "Nur eingeloggten Usern zeigen");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_AUTHONLY_DESC', "Wenn eingeschaltet, stellt das Plugin nur etwas dar, wenn der Besucher ein im Blog eingeloggter Benutzer ist.");

@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_STATS',         "Suchmaschinen Statistiken");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_STATS_DESC',    "Hiermit wird eine Statistik der zum Blog f�hrenden Hits �ber die letzten X Tage pro Suchmaschine ausgegeben.");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_STATDAYS',           "Statistik Tage");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_STATDAYS_DESC',      "Hier werden die letzten X Tage angegeben, �ber die die Auswertung ermittelt werden soll. Dieser Wert sollte nicht zu gro� gew�hlt sein. Je gr��er der Wert ist, desto langsamer ist die Ausgabe des Plugins.");

@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ENTRIES',       "Suchen anzeigen");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ENTRIES_DESC',  "Wenn ausgeschaltet, werden keine Suchen angezeigt (nur Statistiken, wenn angeschaltet)");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_CACHEMINS',          "Cache Minuten");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_CACHEMINS_DESC',     "Die Ermittlung von Suchen und Statisken sollte gecached werden. Hier wird die Zeit in Minuten zwischen zwei neuen Berechnungen angegeben (0 = aus)");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_ENGINES',            "Suchmaschinen");
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_ENGINES_DESC',       "Nur f�r markierte Suchmaschinen werden Ergebnisse ausgewertet. Je mehr markiert sind, desto l�nger dauert nat�rlich die Auswertung.");
