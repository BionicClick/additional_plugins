<?php # lang_cs.inc.php 1.0 2011-06-19 09:27:10 VladaAjgl $

/**
 *  @version 1.0
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2011/06/19
 */
@define('PLUGIN_DISQUS_TITLE', 'Koment��e Disqus');
@define('PLUGIN_DISQUS_DESC', 'Disqus.com je webov� slu�ba pro spr�vu koment���. Ukl�d� a spravuje koment��e vn� instalace serendipity a je do blogu vkl�d�na pomoc� JavaScriptu. Pro v�ce informac� p�ejd�te na www.disqus.com.');
@define('PLUGIN_DISQUS_DESC2', 'Kdy� jsou zapnut� koment��e disqus, pak p�irozen� nefunguj� vestav�n� funkce serendipity t�kaj�c� se koment���.

Vnit�n� tento plugin pou��v� CSS ke skryt� koment���, formul��� a odezev serendipity. Nastavuje vlastnost "display:none" pro n�sleduj�c� t��dy CSS:

.serendipity_comments
.serendipity_section_comments
.serendipity_section_trackbacks
.serendipity_section_commentform

Pokud va�e �ablona/styl vzhledu pou��v� jin� n�zvy, mus�te tyto n�zvy p�idat do n�zv� t��d va�� �ablony, a nebo mus�te schovat koment��e sami.

Plugin um�st� v�stup koment��� disqus do prom�nn� Smarty {$entry.plugin_display_dat} A {$entry.disqus}, kter� m��ete um�stit do �ablony entries.tpl na libovoln� m�sto ve smy�ce {$entry}.
');
@define('PLUGIN_DISQUS_ENABLE_SINCE', 'Povolit disqus.com pro p��sp�vky od...');
@define('PLUGIN_DISQUS_ENABLE_SINCE_DESC', 'Zadejte datum (R-m-d), po kter�m se budou zobrazovat koment��e disqus m�sto vestav�n�ch koment��� serendipity. Star�� koment��e se budou zobrazovat spr�vn� z datab�ze serendipity.');
@define('PLUGIN_DISQUS_SHORTNAME', 'Kr�tk� n�zev ��tu disqus');
@define('PLUGIN_DISQUS_SHORTNAME_DESC', 'Zadejte kr�tk� n�zev (shortname), kter� jste si zaregistrovali pod ��tem disqus.');