<?php # lang_cz.inc.php 1.0 2013-06-22 11:15:15 VladaAjgl $

/**
 *  @version 1.0
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @translated 2013/06/22
 */
@define('PLUGIN_EVENT_CKEDITOR_NAME', 'CKEditor');
@define('PLUGIN_EVENT_CKEDITOR_DESC', 'Používá CKEditor jako výchozí WYSIWYG editor. Tento editor je aktuálním state-of-art. Použití: Doporučeno! Po instalaci přejděte na stránku s nastavením tohoto pluginu a čtěte další instrukce.');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL', '<h2>Instalace</h2>
<ol style="line-height: 1.6">
<li>V nastavení pluginu zadejte relativní HTTP cestu k adresáři <em>"ckeditor"</em>.
    <div><strong>Poznámka:</strong> ve většině instalací je tato cesta <em>"plugins/serendipity_event_ckeditor/ckeditor/"</em></div>
</li>
<li>V nastavení pluginu zadejte plnou HTTP cestu k serendipity adresáři <em>"plugins"</em> (včetně ukončujícího lomítka).
    <div><strong>Poznámka:</strong> ve většině instalací je tato cesta <em>"' . $serendipity['serendipityHTTPPath'] . 'plugins/"</em></div>
</li>
<li>Abyste umožnili ostatním uživatelům použití CKEditoru, umístěte tento plugin (CKEditor) blízko konce seznamu pluginů.</li>
<li>Ujistěte se, že máte v osobním nastavení zapnuto použití WYSIWYG módu.</li>
</ol>

<h3>Aktualizace</h3>
<p>Tento plugin bude čas od času umožňovat aktualizace pomocí pluginu Spartacus.<hr>
Pokud vůbec někdy budete potřebovat ručně aktualizovat dodané CKEditor balíčky na vlastní balíčky (*), pak prosím:
<ol style="line-height: 1.6">
<li><a href="http://ckeditor.com/download" target="_blank">stáhněte CKEditor</a></li>
<li>Rozbalte jej do: <em>' . dirname(__FILE__) . '</em> (měl by být vytvořen podadresář <em>"ckeditor"</em>)</li>
</ol>
(*) <em><strong>Poznámka:</strong> Toto vypnete (přepíše) integraci KCFinderu přidanou na konec souboru ckeditor/config.js: <a style="border:0; text-decoration: none;" href="#" onClick="showConfig(\'el1\'); return false" title="TOGGLE_OPTION"><img src="'.serendipity_getTemplateFile('img/plus.png').'" id="optionel1" alt="+/-" border="0">&nbsp;TOGGLE_OPTION</a></em>
<div id="el1" style="margin-top: 0.5em; border: 1px solid #BBB;background-color: #EEE; padding: 0.5em">
<pre>
/* KCFinder integration - 2013-05-04 */
CKEDITOR.editorConfig = function(config) {
   config.filebrowserBrowseUrl = CKEDITOR_BASEPATH + \'../kcfinder/browse.php?type=files\';
   config.filebrowserImageBrowseUrl = CKEDITOR_BASEPATH + \'../kcfinder/browse.php?type=images\';
   config.filebrowserFlashBrowseUrl = CKEDITOR_BASEPATH + \'../kcfinder/browse.php?type=flash\';
   config.filebrowserUploadUrl = CKEDITOR_BASEPATH + \'../kcfinder/upload.php?type=files\';
   config.filebrowserImageUploadUrl = CKEDITOR_BASEPATH + \'../kcfinder/upload.php?type=images\';
   config.filebrowserFlashUploadUrl = CKEDITOR_BASEPATH + \'../kcfinder/upload.php?type=flash\';
};
</pre>
</div><script type="text/javascript" language="JavaScript">document.getElementById("el1").style.display = "none";</script>
</p>');
@define('PLUGIN_EVENT_CKEDITOR_CONFIG', '');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL_PLUGPATH', 'HTTP cesta do serendipity dresáře s pluginy');
@define('PLUGIN_EVENT_CKEDITOR_CKEACF_OPTION', 'Vypnout "Pokročilé fitrlování obsahu" (tzv. ACF = Advanced-Content-Filter)');
@define('PLUGIN_EVENT_CKEDITOR_TBLB_OPTION', 'Použít výchozí dvouřádkové zobrazení nástrojové lišty');