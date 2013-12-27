/<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/03/14
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/06/14
 */

@define('PLUGIN_GOOGLE_LAST_QUERY_TITLE',		'Posledn� vyhled�v�n� (Google, Yahoo, Bing, Croogle)');
@define('PLUGIN_GOOGLE_LAST_QUERY_DESC',		'Zobrazuje slova, kter� byla v posledn� dob� vyhled�v�navna tomto blogu (pomoc� Googlu, Yahoo, Bingu nebo Scrooglu).');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_TITLE',		'Nadpis');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_TITLE_DESC',		'Nadpis postrann�ho bloku');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_COUNT',		'Po�et');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_COUNT_DESC',		'Kolik vyhled�van�ch slov m� b�t zobrazov�no?');

@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_VISITORTABLE',		'Pou��t tabulku n�v�t�vn�k�');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_VISITORTABLE_DESC',		'Obvykle je pou�it� tabulka odkazova��. Tato tabulka neuchov�v� v�echny odkazy, n�br� odkazy vedouc� na blog v�cekr�t. Tabulka n�v�t�vn�k� obsahuje v�echny n�v�t�vn�ky. Pokud pou�ijete tuto tabulku, vyhled�v�n� z Googlu budou zobrazeny okam�it�. Ale pozor:  Tabulka n�v�t�vn�k� ja vypl�ov�na pluginem "Statistiky", a nav�c jen pouze tehdy, pokud je v n�m povolena volba sledov�n� n�v�t�vn�k�.');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_NEWWINDOW',		'Otev��t odkaz v nov�m okn�');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_NEWWINDOW_DESC',		'Vyhled�van� slova jsou zobrazena jako odkaz na p��slu�nou str�nku Googlu s v�sledky vyhled�v�n�. M� se tento odkaz zobrazovat v nov�m okn�?');

// Next lines were translated on 2009/06/14
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_HTTPREL',		'Relativn� HTTP cesta tohoto pluginu');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_HTTPREL_DESC',		'Tato volba definuje HTTP cestu relativn� ke ko�enov� adrese serveru. Pokud jste nem�nili strukturu st�l�ch odkaz� (permalink�) a V� blog neb�� v podadres��i serveru, pak by m�lo fungovat v�choz� nastaven�.');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ICONS',		'Zobrazovat ikony');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ICONS_DESC',		'Zobrazovat ikony pou�it�ho vyhled�va�e pro ka�d� v�sledek.');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_TIME',		'Zobrazovat �as zpracov�n� dotazu');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_TIME_DESC',		'Pokud je povoleno, pak se p�i najet� my�i na v�sledek vyhled�v�n� zobraz� �as, kter� zabrao jeho zpracov�n�.');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_AUTHONLY',		'Zobrazovat pouze p�ihl�en�m u�ivatel�m');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_AUTHONLY_DESC',		'Pokud je povoleno, plugin se bude zobrazovat pouze p�ihl�en�m u�ivatel�m.');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_STATS',		'Statistiky vyhled�va��');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_STATS_DESC',		'Pokud je povoleno, bude zobrazovat, kolik vyhled�van�ch �et�zc� vede na blog z kter�ho vyhled�va�e b�hem posledn�ch X dn�');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_STATDAYS',		'Dny pro statistiku');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_STATDAYS_DESC',		'To je po�et dn� nazp�t, kter� se bude po��tat do statistiky. Nezad�vejte p��li� velkou hodnotu. ��m vy��� hodnota, t�m pomalej�� plugin je.');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ENTRIES',		'Zobrazit hledan� �et�zce');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_SHOW_ENTRIES_DESC',		'Pokud je zak�z�no, nebudou se zobrazovat hledan� �et�zce (zobrazovat se budou pouze souhrnn� statistiky)');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_CACHEMINS',		'Cachov�n� v minut�ch');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_CACHEMINS_DESC',		'Statistiky vyhled�van�ch �et�zc� a vyhled�va�� mohou b�t cachov�ny. Zadejte �as v minut�ch, po kter�m budou obnovov�ny (0 = cachov�n� vypnuto)');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_ENGINES',		'Vyhled�va�e');
@define('PLUGIN_GOOGLE_LAST_QUERY_PROP_ENGINES_DESC',		'Ozna�te v�echny vyhled�va�e, kter� m� plugin vyhodnocovat. ��m v�ce jich ozna��te, t�m del�� �as bude samoz�ejm� pluginu trvat jejich zpracov�n�.');