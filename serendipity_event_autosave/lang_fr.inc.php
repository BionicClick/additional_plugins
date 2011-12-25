<?php # $Id$

@define('PLUGIN_EVENT_AUTOSAVE_TITLE', 'Sauvegarde automatique');
@define('PLUGIN_EVENT_AUTOSAVE_DESC', 'Effectue une copie de sauvegarde des posts lors de leur r�daction');
@define('PLUGIN_EVENT_AUTOSAVE_STARTING', 'Autosave d�marre ...');
@define('PLUGIN_EVENT_AUTOSAVE_INTERVAL', 'Intervale de temps');
@define('PLUGIN_EVENT_AUTOSAVE_INTERVAL_DESC', 'Temps en secondes entre 2 sauvegardes (0 pour d�sactiver)');
@define('PLUGIN_EVENT_AUTOSAVE_INTERVAL_ERROR', 'L\'intervale de temps doit �tre un entier');
@define('PLUGIN_EVENT_AUTOSAVE_HTTPATH', 'URL relative du plugin');
@define('PLUGIN_EVENT_AUTOSAVE_HTTPATH_DESC', 'URL relative � la racine du blog jusqu\'au plugin, sans slash en d�but ou fin  (en g�n�ral "plugins/serendipity_event_autosave")');
@define('PLUGIN_EVENT_AUTOSAVE_HTTPATH_ERROR', 'URL incorrecte');
@define('PLUGIN_EVENT_AUTOSAVE_AJAX_ERROR', 'L\'appel AJAX au serveur a �chou� ');
@define('PLUGIN_EVENT_AUTOSAVE_SAVE_ERROR', '/!\ la sauvegarde automatique a �chou� ;-(');
@define('PLUGIN_EVENT_AUTOSAVE_SAVED', 'le post a �t� sauvegard� avec succ�s :-)');
@define('PLUGIN_EVENT_AUTOSAVE_ACTIVATED', 'Autosave est actif (cliquez moi pour effectuer une sauvegarde manuelle ou attendez le temps d�fini)');
@define('PLUGIN_EVENT_AUTOSAVE_ACTIVATING', 'Autosave se charge ...');
@define('PLUGIN_EVENT_AUTOSAVE_INIT_FAILED', 'Autosave n\'est pas initialis� correctement et ne sera pas disponible');
@define('PLUGIN_EVENT_AUTOSAVE_RECOVER', 'Le post poss�de une copie de secours, vous pouvez la r�cup�rer en cliquant ici');
@define('PLUGIN_EVENT_AUTOSAVE_RECOVER_FAILED', 'La r�cup de la copie de sauvegarde a �chou�');
@define('PLUGIN_EVENT_AUTOSAVE_BAD_SHADOW', 'L\'identifiant donn� ne correspond pas � celui de la copie de secours du post');
@define('PLUGIN_EVENT_AUTOSAVE_RESTORING', 'Autosave r�cup�re la copie de sauvegarde ...');
@define('PLUGIN_EVENT_AUTOSAVE_RESTORED', 'Le post a �t� recharg� avec les donn�es sauvegard�es');
@define('PLUGIN_EVENT_AUTOSAVE_BAD_RESPONSE', 'R�ponse AJAX inconnue');
@define('PLUGIN_EVENT_AUTOSAVE_UNSUPPORTED_EDITOR', 'Arggg! votre editeur wysiwyg n\'est pas encore support� :-(');
@define('PLUGIN_EVENT_AUTOSAVE_CONFIRM', 'Vous �tes sur le point de recharger votre post depuis la copie de secours, �tes-vous s�r de vouloir continuer ?');
?>
