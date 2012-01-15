<?php

@define('PLUGIN_EVENT_XMLRPC_NAME', 'Eintr�ge via XML-RPC erstellen');
@define('PLUGIN_EVENT_XMLRPC_DESC', 'Erm�glicht Eintr�ge via XML-RPC API zu erstellen/bearbeiten (MT, Blogger, WordPress API-Endpunkte)');
@define('PLUGIN_EVENT_XMLRPC_DEFAULTCAT', 'Standard-Kategorie');
@define('PLUGIN_EVENT_XMLRPC_DEFAULTCAT_DESC', 'Bestimmt die Standard-Kategorie f�r Blog-Artikel via XML-RPC, wenn der Client keine Kategorie setzt.');
@define('PLUGIN_EVENT_XMLRPC_GMT', 'GMT Zeitzone verwenden');

@define('PLUGIN_EVENT_XMLRPC_DOC_RPCLINK','<b>Zur Information:</b><br/>Dieses Blog hat eine URL, an der XML-RPC Aufrufe abgearbeitet werden. Modernere Clients k�nnen diese automatisch mit der Blog URL ermitteln, bei �lteren Clients muss sie explizit angegeben werden.<br/>Deine XML-RPC URL ist: <b>%s</b><br/>');

@define('PLUGIN_EVENT_XMLRPC_DEBUGLOG', 'Debug Log');
@define('PLUGIN_EVENT_XMLRPC_DEBUGLOG_DESC', 'Wenn Du daran interessiert bist, was die XML-RPC Schnittstelle empf�ngt und antwortet, kannst Du das Debug Log anschalten. Das Logfile wird als rpc.log im Plugin Verzeichnis angelegt. Die \'debug\' Einstellung ist nur zum Auffinden von Problemen geeignet, sie produziert Antworten, mit denen ein Client nicht umgehen kann. Also bitte nicht in einem Live System einschalten!');
@define('PLUGIN_EVENT_XMLRPC_DEBUGLOG_NONE', 'ausgeschaltet');
@define('PLUGIN_EVENT_XMLRPC_DEBUGLOG_NORMAL', 'angeschaltet');
@define('PLUGIN_EVENT_XMLRPC_DEBUGLOG_VERBOSE', 'debug: Nicht f�r Clients!');

@define('PLUGIN_EVENT_XMLRPC_WPFAKEVERSION', 'WordPress Version vort�uschen');
@define('PLUGIN_EVENT_XMLRPC_WPFAKEVERSION_DESC', 'Die XML-RPC Schnittlstelle kann auf WordPress Aufrufe reagieren. Wenn sie nach der installierten Software Version gefragt wird, antwortet sie normaler Weise mit Serendipity ' . $serendipity['version'] .'. Wenn Du hier eine Version eintr�gst, dann wird sie mit WordPress (angegebene Version) antworten. Einige Clients k�nnten auf eine minimale WordPress Version testen, eine Version wie 3.2 erscheint dann okay.');
@define('PLUGIN_EVENT_XMLRPC_HTMLCONVERT', 'Text Artikel nach HTML konvertieren');
@define('PLUGIN_EVENT_XMLRPC_HTMLCONVERT_DESC', 'Das Plugin versucht zu erkennen, ob Artikel als reine Texte oder als HTML �bermittelt werden. Bei reinem Text wird es Zeilenumbr�che in HTML umwandeln. Wenn Du z.B: ein Textile oder das NL2BR Plugin f�r Artikel benutzt, solltest Du diese Option ausschalten.');
@define('PLUGIN_EVENT_XMLRPC_UPLOADDIR', 'Upload Verzeichnis');
@define('PLUGIN_EVENT_XMLRPC_UPLOADDIR_DESC', 'In welches Medienverzeichnis sollen Medien (wie Bilder und Videos) hoch geladen werden, die der Client schickt?');