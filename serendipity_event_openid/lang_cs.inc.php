<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/07/16
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2012/05/13
 */
@define('PLUGIN_OPENID_NAME',     'P�ihla�ov�n� pomoc� OpenID');
@define('PLUGIN_OPENID_DESC',     'Umo��uje autor�m p�ihl�sit se pomoc� OpenID.');

@define('PLUGIN_OPENID_EXISTS', 'S t�mto OpenID u� jste se zaregistrovali.');
@define('PLUGIN_OPENID_WRONG_ACTIVATION', 'Nespr�vn� aktiva�n� URL adresa!');

@define('PLUGIN_EVENT_OPENID_SELECT', 'OpenID sv�zan� s t�mto ��tem');

@define('PLUGIN_OPENID_SERVER', 'OpenID server');
@define('PLUGIN_OPENID_SERVER_DESC', 'OpenID server pro pou�it� deleg�ta (vy�aduje napln�n� OpenID deleg�ty)');

@define('PLUGIN_OPENID_DELEGATE', 'OpenID deleg�t');
@define('PLUGIN_OPENID_DELEGATE_DESC', 'OpenID deleg�t (vy�aduje napln�n� OpenID server)');

@define('PLUGIN_OPENID_XRDS_LOC', 'Um�st�n� OpenID XRDS');
@define('PLUGIN_OPENID_XRDS_LOC_DESC', 'URL adresa pro um�st�n� XRDS dokument� (vy�aduje napln�n� OpenID server)');

@define('PLUGIN_OPENID_UPDATE_SUCCESS', 'OpenID server byl aktualizov�n');
@define('PLUGIN_OPENID_UPDATE_FAIL', 'P�i aktualizaci OpenID serveru se vyskytla chyba');
@define('PLUGIN_OPENID_INVALID_RESPONSE', 'Bylo zad�no nespr�vn� OpenID');

// Next lines were translated on 2012/05/13
@define('PLUGIN_OPENID_DESCRIPTION', '<h3>Pou�it� OpenID k p�ihl�en� do blogu</h3>' .
'<p>Tento plugin nevy�aduje ��dn� nastaven�, abyste se mohli p�ihl�sit do blogu pomoc� OpenID (OpenID je samonastavovac�)</p>' .
'<p>Nicm�n� u�ivatel�, kte�� cht�j� pou��t OpenID k p�ihl�en�, musej� m�t nastavenou OpenID URL adresu, pomoc� kter� se cht�j� p�ihla�ovat. ' . 
'Tedy pokud chcete vyu��vat OpenID k p�ihla�ov�n�, jd�te na va�i <a href="serendipity_admin.php?serendipity[adminModule]=personal">profilovou str�nku Serendipity</a> a nastavte si OpenID URL (dole na str�nce).</p>' .
'<p>Tak� tam najdete tla��tka pro ��ty <b>Google</b>, <b>Yahoo</b> a <b>Aol</b>. Tyto slu�by jsou tak� poskytovateli OpenID a tla��tka v�m pomohou nastavit je.<br/>' .
'M��ete ale nastavit <b>pouze jedno OpenID spojen� pro jeden u�ivatelsk� ��et</b>.</p>');
@define('PLUGIN_OPENID_DELEGATION_DESCRIPTION', '<h3>Nastaven� p�esm�rov�n� OpenID (nepovinn�)</h3>' .
'<p>Pokud chcete pou��t blog jako poskytovatele OpenID URL k p�ihla�ov�n� k jin�m webov�m slu�b�m, kter� podporuj� OpenID, m��ete zde nastavit p�esm�rov�n� z va�eho blogu na slu�bu, kde je ulo�eno va�e ID.<br/>' .
'Tento plugin p�id� n�kter� informace do HTML k�du va�eho blogu, kter� bude informovat slu�by, kde hledat va�e ID, pokud bude v� blog dotazov�n na OpenID.</p>' .
'<p>Nastaven� p�esm�rov�n� je zcela nepovinn� a nen� pot�eba k p�ihl�en� do blogu pomoc� OpenID.</p>');
@define('PLUGIN_OPENID_LOGIN_USERS', 'P�ihl�ov�n� z v�b�ru u�ivatel�');
@define('PLUGIN_OPENID_LOGIN_USERS_DESC', 'Pot�, co si auto�i blogu nastav� jejich OpenID, m��ou si pro p�ihl�en� vybrat sv� jm�no ze seznamu autor� a t�m se p�ihl�sit.
A�koliv je to velmi poholdn� zp�sob p�ihla�ov�n�, m� to nev�hodu, �e zobrazujete v�em n�v�t�vn�k�m jm�na v�ech va�ich autor�.
Oby�ejn� to nen� probl�m, proto�e jsou jm�na zobrazov�na i u p��sp�vk�.
Ale pokud se v�m to nel�b�, m��ete zde tuto vlastnost vypnout. Pak se bude zobrazovat oby�ejn� pol��ko pro zad�n� OpenID URL.');
@define('PLUGIN_OPENID_VERSION_SUPPORTED', 'Verze OpenID');
@define('PLUGIN_OPENID_VERSION_SUPPORTED_DESC', 'Verze, kterou podporuje v� poskytovatel OpenID. Obvykle je v po��dku volba "ob�", ale pokud v�te, �e v� poskytovatel podporuje pouze verzi 1, nebo pouze verzi 2, nastavte to pr�v� zde.');
@define('PLUGIN_OPENID_VERSION_SUPPORTED_V1', 'Pouze OpenID verze 1');
@define('PLUGIN_OPENID_VERSION_SUPPORTED_V2', 'Pouze OpenID verze 2');
@define('PLUGIN_OPENID_VERSION_SUPPORTED_BOTH', 'Ob� dv� verze OpenID');
@define('PLUGIN_OPENID_LOGIN_INPUT', 'P�ihl�en� pomoc� OpenID');
@define('PLUGIN_OPENID_LOGIN_WITH_GOOGLE', 'P�ihl�en� pomoc� ��tu Google');
@define('PLUGIN_OPENID_SET_GOOGLE_OID', 'Nastavte v� ��et Google jako OpenID');
@define('PLUGIN_OPENID_LOGIN_WITH_YAHOO', 'P�ihl�en� pomoc� ��tu Yahoo');
@define('PLUGIN_OPENID_SET_YAHOO_OID', 'Nastavte v� ��et Yahoo jako OpenID');
@define('PLUGIN_OPENID_LOGIN_WITH_AOL', 'P�ihl�en� pomoc� ��tu Aol');
@define('PLUGIN_OPENID_SET_AOL_OID', 'Nastavte v� ��et Aol jako OpenID');
@define('PLUGIN_OPENID_LOGIN_NOOPENID', 'V sou�asnosti nem� ��dn� z autor� nastaven� p�ihl�en� pomoc� OpenID.<br/>
Pokud se chcete p�ihla�ovat pomoc� OpenID, nastavte pros�m nejd��ve pat�i�n� v� u�ivatelsk� ��et.<br/>D�ky.');