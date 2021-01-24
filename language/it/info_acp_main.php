<?php

/**
 *
 * PGreca Social extension for phpBB.
 *
 * @copyright (c) 2018 pgreca <https:/pgreca.it>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_PG_SOCIAL_TITLE'				=> 'PG Social Network',
	'ACP_PG_SOCIAL_MAIN'				=> 'Menù principale',
	'ACP_PG_SOCIAL_GENERAL'				=> 'Generale',
	'ACP_PG_SOCIAL_PAGE'				=> 'Menù pagine',
	'ACP_PG_SOCIAL_PAGE_MANAGE'			=> 'Amministra pagine',
	'ACP_PG_SOCIAL_SETTINGS_EXPLAIN'	=> 'Questa è la pagina delle impostazioni per l\' estensione "Phpbb PGreca Social"',
	'ACP_PG_SOCIAL_VERSION'				=> 'Versione',
	'ACP_PG_SOCIAL_ENABLED'				=> 'Attiva PG Social',
	'ACP_PG_SOCIAL_INDEX_REPLACE'		=> 'Sostituisci la Home con la pagina Attività',
	'ACP_PG_SOCIAL_INDEX_ACTIVITY'		=> 'Abilita la barra laterale a Destra degli ultimi stati nella pagina del Forum',
	'ACP_PG_SOCIAL_STATUS'				=> 'Impostazioni stato',
	'ACP_PG_SOCIAL_COLOR'				=> 'Imposta colore',
	'ACP_PG_SOCIAL_LIGHT'				=> 'Chiaro',
	'ACP_PG_SOCIAL_DARK'				=> 'Scuro',
	'ACP_PG_SOCIAL_BBCODE_ENABLED'		=> 'Abilita i BBCode',
	'ACP_PG_SOCIAL_SMILIES_ENABLED'		=> 'Abilita gli Smiles',
	'ACP_PG_SOCIAL_URL_ENABLED'			=> 'Abilita i Link',
	'ACP_PG_SOCIAL_GALLERY'				=> 'Impostazioni Album',
	'ACP_PG_SOCIAL_GALLERY_LIMIT'		=> 'Limite album',
	'ACP_PG_SOCIAL_PHOTO_LIMIT'			=> 'Limite foto per album',
	'ACP_PG_SOCIAL_PROFILE'				=> 'Attiva i Profili PG Social',
	'ACP_PG_SOCIAL_PROFILE_EXPLAIN'		=> 'Sostituisce i Profili predefiniti',
	'ACP_PG_SOCIAL_SETTINGS'			=> 'Impostazioni PG Social',
	'ACP_SOCIAL_SIDEBAR_RIGHT'			=> 'Abilita la barra laterale a Destra',
	'ACP_SOCIAL_SIDEBAR_RIGHT_FRIENDSRANDOM'	=> 'Abilita gli Amici Casuali nella barra laterale a destra',
	'ACP_SOCIAL_SIDEBAR_RIGHT_LAST_POST'=> 'Abilita gli ultimi stati nella barra laterale a destra',
	'ACP_PG_SOCIAL_CHAT'				=> 'Impostazioni CHAT',
	'ACP_SOCIAL_SOCIAL_CHAT_ENABLED'	=> 'Abilita Chat',
	'ACP_PG_SOCIAL_CHAT_MESSAGES'		=> 'Messagi',
	'ACP_PG_SOCIAL_CHAT_BBCODE_ENABLED'	=> 'Abilita i BBCode nei messaggi',
	'ACP_PG_SOCIAL_CHAT_URL_ENABLED'	=> 'Abilita gli URL nei messaggi',
	'ACP_PG_SOCIAL_SETTING_SAVED'		=> 'Configurazione aggiornata.',
	'DELETE_PAGE'						=> 'Elimina',
	'PAGE_APPROVED'						=> 'Pagine approvate',
	'PAGE_TO_APPROVE'					=> 'Pagine da approvare',
	'PAGE_TRASHED'						=> 'Pagine cestinate',
	'TRASH_PAGE'						=> 'Cestina',
	
	'NO_PAGE'							=> 'Nessuna pagina',
	'NO_PAGE_APPROVE'					=> 'Nessuna pagina da approvare',
	'NO_PAGE_TRASHED'					=> 'Nessuna pagina da eliminare',
	'NO_PERMESS'						=> 'Non disponi dei permessi per la gestione delle pagine.'
));
