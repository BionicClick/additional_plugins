/<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/06/26
 */

@define('PLUGIN_EVENT_AUTOSAVE_TITLE', 'Automatick� ukl�d�n�');
@define('PLUGIN_EVENT_AUTOSAVE_DESC', 'B�hem psan� p��sp�vk� je ukl�d�');
@define('PLUGIN_EVENT_AUTOSAVE_STARTING', 'Automatick� ukl�d�n� za�alo...');
@define('PLUGIN_EVENT_AUTOSAVE_INTERVAL', 'Interval');
@define('PLUGIN_EVENT_AUTOSAVE_INTERVAL_DESC', '�as v sekund�ch mezi dv�ma pokusy o ulo�en� (0 vypne automatick� ukl�d�n�)');
@define('PLUGIN_EVENT_AUTOSAVE_INTERVAL_ERROR', '�asov� interval mus� b�t cel� ��slo');
@define('PLUGIN_EVENT_AUTOSAVE_HTTPATH', 'Relativn� HTTP cesta');
@define('PLUGIN_EVENT_AUTOSAVE_HTTPATH_DESC', 'Relativn� HTTP cesta k adres��i pluginu bez �vodn�ch a ukon�uj�c�ch lom�tek (nejsp�e to bude "plugins/serendipity_event_autosave")');
@define('PLUGIN_EVENT_AUTOSAVE_HTTPATH_ERROR', 'Chyba autosave.');
@define('PLUGIN_EVENT_AUTOSAVE_AJAX_ERROR', 'Ajaxov� vol�n� se nezda�ilo!');
@define('PLUGIN_EVENT_AUTOSAVE_SAVE_ERROR', '/!\ automatick� ulo�en� se nezda�ilo:-(');
@define('PLUGIN_EVENT_AUTOSAVE_SAVED', 'P��sp�vek �sp�n� ulo�en :-)');
@define('PLUGIN_EVENT_AUTOSAVE_ACTIVATED', 'Automatick� ukl�d�n� aktivn� (klikn�te pro ru�n� ulo�en� nebo vy�kejte na uplynut� nastaven�ho �asu)');
@define('PLUGIN_EVENT_AUTOSAVE_ACTIVATING', 'Funkce Autosave se nahr�v�...');
@define('PLUGIN_EVENT_AUTOSAVE_INIT_FAILED', 'Automatick� ukl�d�n� nen� spr�vn� inicializov�no a nebude pracovat');
@define('PLUGIN_EVENT_AUTOSAVE_RECOVER', 'P��sp�vek m� automaticky ulo�en� data, pravd�podobn� je budete cht�t obnovit kliknut�m sem');
@define('PLUGIN_EVENT_AUTOSAVE_RECOVER_FAILED', 'Obnova automaticky ulo�en� kopie selhala');
@define('PLUGIN_EVENT_AUTOSAVE_BAD_SHADOW', 'Poskytnut� ID identifik�tor automatick� kopie se neshoduje s ID identifik�torem automatick�ho ulo�en� v p��sp�vku');
@define('PLUGIN_EVENT_AUTOSAVE_RESTORING', 'Obnova automaticky ulo�en� verze...');
@define('PLUGIN_EVENT_AUTOSAVE_RESTORED', 'P��sp�vek byl �sp�n� obnoven z automatick� kopie');
@define('PLUGIN_EVENT_AUTOSAVE_BAD_RESPONSE', 'Nerozpoznan� odpov�� AJAXu');
@define('PLUGIN_EVENT_AUTOSAVE_UNSUPPORTED_EDITOR', 'Grrr! V� WYSIWYG editor je�t� nen� podporov�n :-(');
@define('PLUGIN_EVENT_AUTOSAVE_CONFIRM', 'Opravdu chcete obnovit automaticky ulo�en� data?');
?>
