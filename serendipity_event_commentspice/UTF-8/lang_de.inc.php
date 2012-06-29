<?php
@define('PLUGIN_EVENT_COMMENTSPICE_TITLE', 'Comment Spice');
@define('PLUGIN_EVENT_COMMENTSPICE_DESC',  'Würze Deinen Kommentarbereich mit Extras wie einem Twitterlink oder einem Link auf den letzten Artikel des Kommentators.');

@define('PLUGIN_EVENT_COMMENTSPICE_CONFIG_TWITTERNAME', 'Twittername');
@define('PLUGIN_EVENT_COMMENTSPICE_CONFIG_ANNOUNC_RSS', 'Artikel bewerben');
@define('PLUGIN_EVENT_COMMENTSPICE_CONFIG_GENERAL', 'Generelle Einstellungen');

@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT', 'Erlaube Kommentatoren, ihren Twitternamen anzugeben');
@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT_DESC', 'Hiermit erlaubst Du einem Kommentator, mit ihrem Kommentar auch ihren Twitternamen anzugeben. Wenn er dies tut, so wird seine Twitter Timeline mit seinem Kommentar verlinkt.');
@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT_NOFOLLOW', 'Twitterlink auf nofollow setzen');
@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT_NOFOLLOW_DESC', 'Wenn der Twitterlink auf nofollow gesetzt wird, werden Suchmaschinen ihn ignorieren. Dies macht die Eingabe für manuelle Kommentarspammer uninteressant, gibt aber weniger Kudos an den echten Kommentator.');
@define('PLUGIN_EVENT_COMMENTSPICE_FOLLOWME_WIDGET', 'Erstelle Twitter Followme Widget');
@define('PLUGIN_EVENT_COMMENTSPICE_FOLLOWME_WIDGET_DESC', 'Wenn angeschaltet, wird das Followme Widget von Twitter in den Kommentaren angezeigt anstatt des eigenen Outputs. Das sieht recht gut aus, verlangsamt aber das Rendern der Kommentarliste, da es pro Kommentar nachgeladen werden muss. Wenn das Plugin smartifiziert ist, stellt das ein, ob $comment.spice_twitter_followme Inhalt hat oder nicht.');
@define('PLUGIN_EVENT_COMMENTSPICE_FOLLOWME_WIDGET_COUNT',  'Twitter Followme Widget Follower Anzahl');
@define('PLUGIN_EVENT_COMMENTSPICE_FOLLOWME_WIDGET_COUNT_DESC',    'Soll das Widget die aktuelle Anzahl der Follower des Kommentators anzeigen?');
@define('PLUGIN_EVENT_COMMENTSPICE_FOLLOWME_WIDGET_DARK',          'Twitter Followme Widget auf dunklem Hintergrund');
@define('PLUGIN_EVENT_COMMENTSPICE_FOLLOWME_WIDGET_DARK_DESC',     'Wenn Dein Template dunkel ist, so solltest Du diese Option einschalten.');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS', 'Erlaube Kommentatoren, einen ihrer Artikel zu bewerben');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_DESC', 'Wenn der Kommentator eine Homepage eingegeben hat, wird CommentSpice die URL nach einem RSS feed durchsuchen. Wenn einer gefunden wurde, kann der Kommentator einen seiner Artikel aussuchen, der dann mit seinem Kommentar beworben wird.');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_NOFOLLOW', 'Artikel Bewerbung auf nofollow setzen');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_NOFOLLOW_DESC', 'Wenn die Artikel Bewerbung auf nofollow gesetzt wird, werden Suchmaschinen ihn ignorieren. Dies macht die Eingabe für manuelle Kommentarspammer uninteressant, gibt aber weniger Kudos an den echten Kommentator.');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_MAXSELECT', 'Maximale Artikel Anzahl, aus der beworben werden darf');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_MAXSELECT_DESC', 'Wie viele seiner neuesten Artikel sollen dem Kommentator maximal zu Auswahl vorgelegt werden?');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_CACHEMIN', 'Cache Minuten für Artikel Informationen');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_CACHEMIN_DESC', 'Wie viele Minuten sollen die Information für Artikel zwischen gespeichert werden? Ein bis zwei Stunden (60-120 Minuten) erscheint sinnvoll. Ein Wert von 0 schaltet den Cache aus.');

@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_TWITTER', 'Twittername Ausgabe smartifizieren');
@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_TWITTER_DESC', 'Wenn angeschaltet, wird CommentSpice keinen Code für den Twitterlink darstellen sondern wird benötigte Informationen in den Smarty Hash stecken. Damit das funktioniert, muss die comments.tpl angepasst werden. Verfügbare Variablen sind $comment.spice_twitter_name (Twittername, sollte auf Vorhandensein gecheckt werden), $comment.spice_twitter_url (URL der Twitter Timeline), $comment.spice_twitter_nofollow (Nofollow Einstllung für Twitterlinks), $comment.spice_twitter_icon_html (HTML, das das twitter icon darstellt), $comment.spice_twitter_followme (HTML, das das followme widget darstellt).');
@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_RSS', 'Artikelbewerbung smartifizieren');
@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_RSS_DESC', 'Wenn angeschaltet, wird CommentSpice keinen Code für die Artikelbewerbung darstellen sondern wird benötigte Informationen in den Smarty Hash stecken. Damit das funktioniert, muss die comments.tpl angepasst werden. Verfügbare Variablen sind $comment.spice_article_name (Name des Artikel, sollte auf Vorhandensein gecheckt werden). $comment.spice_article_url (Artikel URL), $comment.spice_article_nofollow (Nofollow Einstellung für Artikelbewerbung), $comment.spice_article_prefix (Prefix in der Sprache des Besuchers).');

@define('PLUGIN_EVENT_COMMENTSPICE_PATH', 'Plugin Pfad');
@define('PLUGIN_EVENT_COMMENTSPICE_PATH_DESC', 'In normalen Installationen ist der Default die korrekte Einstellung.');

@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_TWITTER', 'Auf Twitter lesen');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_TWITTER_FOOTER', 'Wenn Du Deinen <b>Twitter Namen</b> eingibst wird Deine Timeline in Deinem Kommentar verlinkt.');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_TWITTER_PLACEHOLDER', 'Dein Twittername');

@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_CHOOSE', '- Bewirb einen Deiner letzten Artikel -');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_RESCENT', '%s schrieb auch');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_FOOTER', '<b>Bewirb einen Deiner letzten Artikel</b><br/>Dieses Blog erlaubt Dir mit Deinem Kommentar einen Deiner letzten Artikel zu bewerben. Bitte gib Deine Blog URL als Homepage ein, dann wird eine Auswahl erscheinen, in der Du einen Artikel auswählen kannst.'); 
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_CORRUPTED', 'Entschuldigung, bei der Übergabe "Deines letzten Artikels" ist etwas schief gegangen.');
