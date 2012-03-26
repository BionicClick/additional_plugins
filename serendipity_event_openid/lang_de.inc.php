<?php 

@define('PLUGIN_OPENID_NAME',     'OpenID Authentifizierung');
@define('PLUGIN_OPENID_DESC',     'Erm�glicht es Autoren des Blogs, sich mit ihrer OpenID (oder Google/Yahoo Account) einzuloggen.');

@define('PLUGIN_OPENID_EXISTS', 'Du bist bereits mit OpenID registriert.');
@define('PLUGIN_OPENID_WRONG_ACTIVATION', 'Ung�ltige Aktivierungs URL!');

@define('PLUGIN_EVENT_OPENID_SELECT', 'Mit diesem Benutzer verkn�fte OpenID URL');

@define('PLUGIN_OPENID_DESCRIPTION', 
'<h3>OpenID benutzen, um in Dein Blog einzuloggen</h3>' .
'<p>Das Plugin ben�tigt keinerlei Konfiguration, um ein OpenID Login zu implementieren (OpenID konfiguriert sich selbstst�ndig)</p>' .
'<p>Aber Benutzer, die OpenID als Login verwenden wollen, m�ssen einmal angeben, welche OpenID URL sie identifizieren soll. ' . 
'Wenn Du also OpenID als Login Option benutzen m�chtest, gehe zu Deiner <a href="serendipity_admin.php?serendipity[adminModule]=personal">Profilseite in Serendipity</a> und konfiguriere Deine OpenID URL (im unteren Bereich der Seite).</p>' .
'<p>Hier findest Du auch Kn�pfe f�r <b>Google</b>, <b>Yahoo</b> und <b>Aol</b> Accounts. Diese Services sind ebenfalls OpenID Provider und die Kn�pfe helfen Dir beim Setup der Verbindung.<br/>' .
'Es kann jedoch immer <b>nur eine OpenID Verbindung pro Benutzer</b> aktiviert werden.</p>'
);

@define('PLUGIN_OPENID_DELEGATION_DESCRIPTION', 
'<h3>Einstellungen f�r eine OpenID Delegation (Optional)</h3>' .
'<p>Wenn Du Deine Blog URL als Open ID URL benutzen m�chtest, kannst Du hier eine Delegation von Deinem Blog zu Deinem eigentlichen OpenID Provider einrichten.<br/>' .
'Das Plugin wird damit dann Informationen in dem HTML Deines Blogs hinterlassen, die die Services dar�ber informieren, wo Deine OpenID gehostet wird.</p>' .
'<p>Das Aufsetzen der Delegation ist v�llig optional und wird nicht f�r ein Login in Dein Blog mittels OpenID ben�tigt.</p>'
);

@define('PLUGIN_OPENID_SERVER', 'OpenID Server');
@define('PLUGIN_OPENID_SERVER_DESC', 'OpenID Server, der Deine OpenID hostet (ben�tigt einen Eintrag in "OpenID Delegation")');

@define('PLUGIN_OPENID_DELEGATE', 'Deine OpenID Delegation');
@define('PLUGIN_OPENID_DELEGATE_DESC', 'OpenID Delegation (ben�tigt einen Eintrag in "OpenID Server")');

@define('PLUGIN_OPENID_XRDS_LOC', 'OpenID XRDS Location');
@define('PLUGIN_OPENID_XRDS_LOC_DESC', 'URL des XRDS Dokumentes (wird meist nicht ben�tigt)');

@define('PLUGIN_OPENID_LOGIN_INPUT', 'Melde Dich mit Deiner OpenID an.');

@define('PLUGIN_OPENID_UPDATE_SUCCESS', 'Deine OpenID wurde erneuert.');
@define('PLUGIN_OPENID_UPDATE_FAIL', 'Es trat ein Fehler beim Update Deiner OpenID auf.');
@define('PLUGIN_OPENID_INVALID_RESPONSE', 'Ung�ltige OpenID eingegeben');

@define('PLUGIN_OPENID_LOGIN_WITH_GOOGLE', 'Mit Deinem Google Account einloggen');
@define('PLUGIN_OPENID_SET_GOOGLE_OID', 'Deinen Google Account als OpenID setzen');
@define('PLUGIN_OPENID_LOGIN_WITH_YAHOO', 'Mit Deinem Yahoo Account einloggen');
@define('PLUGIN_OPENID_SET_YAHOO_OID', 'Deinen Yahoo Account als OpenID setzen');
@define('PLUGIN_OPENID_LOGIN_WITH_AOL', 'Mit Deinem Aol Account einloggen');
@define('PLUGIN_OPENID_SET_AOL_OID', 'Deinen Aol Account als OpenID setzen');
