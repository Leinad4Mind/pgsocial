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
	'ACP_PG_SOCIAL_MAIN'				=> 'Main menu',
	'ACP_PG_SOCIAL_GENERAL'				=> 'General',
	'ACP_PG_SOCIAL_PAGE'				=> 'Pages menu',
	'ACP_PG_SOCIAL_PAGE_MANAGE'			=> 'Administer pages',
	'ACP_PG_SOCIAL_SETTINGS_EXPLAIN'	=> 'This is the settings page for "Phpbb PGreca Social" extension"',
	'ACP_PG_SOCIAL_VERSION'				=> 'Version',
	'ACP_PG_SOCIAL_ENABLED'				=> 'Enable PG Social',
	'ACP_PG_SOCIAL_INDEX_REPLACE'		=> 'Replace the Home with the Ativity page',
	'ACP_PG_SOCIAL_INDEX_ACTIVITY'		=> 'Enable the right sidebar of the last activity on the Forum page',
	'ACP_PG_SOCIAL_STATUS'				=> 'Status settings',
	'ACP_PG_SOCIAL_COLOR'				=> 'Choose color',
	'ACP_PG_SOCIAL_LIGHT'				=> 'Light',
	'ACP_PG_SOCIAL_DARK'				=> 'Dark',
	'ACP_PG_SOCIAL_BBCODE_ENABLED'		=> 'Enable BBCode',
	'ACP_PG_SOCIAL_SMILIES_ENABLED'		=> 'Enable Smiles',
	'ACP_PG_SOCIAL_URL_ENABLED'			=> 'Enable URL',
	'ACP_PG_SOCIAL_GALLERY'				=> 'Settings Album',
	'ACP_PG_SOCIAL_GALLERY_LIMIT'		=> 'Limit albums',
	'ACP_PG_SOCIAL_PHOTO_LIMIT'			=> 'Limit photos for albums',
	'ACP_PG_SOCIAL_PROFILE'				=> 'Enable PG Social Profiles',
	'ACP_PG_SOCIAL_PROFILE_EXPLAIN'		=> 'Replace default Profiles',
	'ACP_PG_SOCIAL_SETTINGS'			=> 'PG Social Settings',
	'ACP_SOCIAL_SIDEBAR_RIGHT'			=> 'Enable right sidebar',
	'ACP_SOCIAL_SIDEBAR_RIGHT_FRIENDSRANDOM'	=> 'Enabled Random Friends on the right sidebar',
	'ACP_SOCIAL_SIDEBAR_RIGHT_LAST_POST'=> 'Enable the last activity on the right sidebar',
	'ACP_PG_SOCIAL_CHAT'				=> 'Chat Settings',
	'ACP_PG_SOCIAL_CHAT_MESSAGES'		=> 'Messages',
	'ACP_SOCIAL_SOCIAL_CHAT_ENABLED'	=> 'Enable Chat',
	'ACP_PG_SOCIAL_CHAT_BBCODE_ENABLED'	=> 'Enable BBCode on messages',
	'ACP_PG_SOCIAL_CHAT_URL_ENABLED'	=> 'Enable URL on messagges',
	'ACP_PG_SOCIAL_SETTING_SAVED'		=> 'Setting saved.',
	'DELETE_PAGE'						=> 'Delete',
	'PAGE_APPROVED'						=> 'Pagine approved',
	'PAGE_TO_APPROVE'					=> 'Page to approve',
	'PAGE_TRASHED'						=> 'Page trashed',
	'TRASH_PAGE'						=> 'Trash',
	
	'NO_PAGE'							=> 'No page',
	'NO_PAGE_APPROVE'					=> 'No page to approve',
	'NO_PAGE_TRASHED'					=> 'No page to delete',
	'NO_PERMESS'						=> 'You haven\'t permission for manage the pages.'
));