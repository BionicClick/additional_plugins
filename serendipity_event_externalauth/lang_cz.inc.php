/<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/02/17
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/02/17
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/06/19
 */

@define('PLUGIN_EVENT_EXTERNALAUTH_TITLE',		'Extern� ov��ov�n�/sledov�n� u�ivatel� (LDAP)');
@define('PLUGIN_EVENT_EXTERNALAUTH_DESC',		'Umo��uje pou��t vn�j�� zdroj pro zji��ov�n� spr�vnosti p�ihla�ovac�ch �daj�. P�ihla�ovac� jm�na jsou cachov�na v Serendipity datab�zi. Tento plugin um� tak� sledovat p�ihl�en� do Serendipity.');
@define('PLUGIN_EVENT_EXTERNALAUTH_SOURCE',		'Vn�j�� zdroj autentifikace');
@define('PLUGIN_EVENT_EXTERNALAUTH_SOURCE_DESC',		'Vyberte vn�j�� zdroj p�ihla�ovac�ch dat');
@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL',		'V�choz� u�ivatelsk� �rove�');
@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL_DESC',		'Jak� je v�choz� u�ivatelsk� �rove� pro nov�ho extern�ho u�ivatele, pokud nem� definovanou u�ivatelskou �rove�?');
@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL_ATTR',		'Atribut u�ivatelsk� �rovn�');
@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL_ATTR_DESC',		'Jak� atribut obsahuje informaci o u�ivatelsk� �rovni pro nov�ho extern�ho u�ivatele?');
@define('PLUGIN_EVENT_EXTERNALAUTH_HOST',		'Autentifika�n� host');
@define('PLUGIN_EVENT_EXTERNALAUTH_HOST_DESC',		'Zadejte um�st�n�/adresu autentifika�n�ho serveru');
@define('PLUGIN_EVENT_EXTERNALAUTH_PORT',		'Autentifika�n� port');
@define('PLUGIN_EVENT_EXTERNALAUTH_PORT_DESC',		'Zadejte port autentifika�n�ho serveru. Pr�zdn� hodnota znamen� standardn� port.');
@define('PLUGIN_EVENT_EXTERNALAUTH_RDN',		'Autentifika�n� �et�zec');
@define('PLUGIN_EVENT_EXTERNALAUTH_RDN_DESC',		'�et�zec pou�it� pro autentifikaci. %1 bude nahrazeno u�ivatelsk�m jm�nem, %2 heslem, %3 heslem zak�dovan�m v MD5. I pokud je nastaven "�et�zec pro nalezen� u�ivatele", tato hodnota mus� obsahovat z�kladn� DN pro vykon�n� dotazu.');
@define('PLUGIN_EVENT_EXTERNALAUTH_FIRSTLOGIN',		'Prov�st pouze jednou za sezen�');
@define('PLUGIN_EVENT_EXTERNALAUTH_FIRSTLOGIN_DESC',		'M� se vn�j�� autentifikace u�ivatele pou��t pouze na za��tku sezen� (session), nebo p�i ka�d�m po�adavku. ANO znamen� vy��� v�kon, NE znamen� vy��� bezpe�nost.');
@define('PLUGIN_EVENT_EXTERNALAUTH_BIND_USER',		'LDAP DN jm�no pou�it� k p�ipojen� (bind)');
@define('PLUGIN_EVENT_EXTERNALAUTH_BIND_USER_DESC',		'Pokud V� LDAP nelze voln� prohl�et a je t�eba prov�st p�ihl�en� p�ed vykon�n�m dotaz�, toto je u�ivatelsk� ��et pro prvotn� p�ihl�en�. V LDAP syntaxi nap��klad: CN=s9yldapuser,CN=Users,DC=ilog,DC=com');
@define('PLUGIN_EVENT_EXTERNALAUTH_BIND_PASSWORD',		'Heslo pro LDAP DN jm�no pou�it� pro p�ipojen� (bind)');
@define('PLUGIN_EVENT_EXTERNALAUTH_BIND_PASSWORD_DESC',		'Heslo pro p�ihl�en� k LDAPu');
@define('PLUGIN_EVENT_EXTERNALAUTH_QUERY',		'Dotaz pro nalezen� u�ivatele');
@define('PLUGIN_EVENT_EXTERNALAUTH_QUERY_DESC',		'Dotaz, pomoc� n�ho� bude nalezen u�ivatel. Pro LDAP to m��e b�t nap��klad (objectclass=*) nebo (&(objectcategory=person)(objectclass=user)(sAMAccountName=%1)). %1 bude nahrazeno u�ivatelsk�m jm�nem, %2 heslem, %3 heslem zak�dovan�m pomoc� MD5. Hled�n� prob�hne v oblasti zadan� "Autentifika�n�m �et�zcem", nap��klad: DC=s9y,DC=org. Pokud je ponech�no pr�zdn�, bude proveden jednoduch� dotaz pomoc� "Autentifika�n�ho �et�zce".');

@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL_CHIEF',		'��f');
@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL_EDITOR',		'Autor');
@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL_ADMIN',		'Administr�tor');
@define('PLUGIN_EVENT_EXTERNALAUTH_USERLEVEL_DENY',		'P��stup odep�en');

@define('PLUGIN_EVENT_EXTERNALAUTH_ENABLE_LDAP',		'Povolit p�ih�en� p�es LDAP?');
@define('PLUGIN_EVENT_EXTERNALAUTH_ENABLE_LOGGING',		'Povolit logov�n� p��stup�?');

@define('PLUGIN_EVENT_EXTERNALAUTH_USER_WYSIWYG',		'Povolit WYSIWYG editor jako v�choz�?');
@define('PLUGIN_EVENT_EXTERNALAUTH_USER_WYSIWYG_DESC',		'Nov� u�ivatelsk� ��ty budou vytvo�eny s p�ednastavenou volbou "Pou��vat WYSIWYG editor"?');

// Next lines were translated on 2011/06/19
@define('PLUGIN_EVENT_EXTERNALAUTH_FAIL2BAN',		'Logovac� soubor fail2ban');
@define('PLUGIN_EVENT_EXTERNALAUTH_FAIL2BAN_DESC',		'(Vy�aduje Serendipity &gt;= 1.6) Tento plugin um� zapsat logovac� soubor kompatibiln� s form�tem fail2ban, pokud je zaznamen�n ne�sp�n� pokus o p�ihl�en�. Pokud chcete zapnout tuto vlastnost, zadejte plnou cestu k souboru v�etn� cesty (nap�. "/var/log/fail2ban_s9y.log"). Mo�n� budete cht�t zahrnout tento soubor do rotace syst�mov�ch log�.');