<?php

/**
 *
 * PGreca Social extension for phpBB.
 *
 * @copyright (c) 2018 pgreca <https:/pgreca.it>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if(!defined('IN_PHPBB'))
{
	exit;
}
if(empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'ABOUT_HOUR'						=> array(
		1				=> 'hour',
		2				=> 'hours',
	),
	'ABOUT_ME'							=> 'About me',
	'ABOUT_MONTH'						=> 'month',
	'ABOUT_MONTHS'						=> 'months',
	'ACTIVITY'							=> 'Activity',
	'ACTIVITY_PAGE'						=> 'Page Activity',
	'AGO'								=> 'ago',
	'ALBUM_CREATE'						=> 'Create album',
	'ALBUM_CREATE_EXPLAIN'				=> 'It only takes a few minutes!',
	'ALBUM_CREATE_TITLE'				=> 'Insert name for the album',
	'ALBUM_CREATE_NOW'					=> 'Create it now!',
	'ALBUM_NO_PHOTO'						=> 'No photo in this album',
	'ALL'								=> 'All',
	'APPROVE_PAGE'						=> 'Approve',
	'ARE_YOU_SURE'						=> 'This activity will be deleted and you will not be able to find it. Confirm?',
	'ARE_YOU_SURE_PHOTO'				=> 'This photo will be deleted and you will not be able to find it. Confirm?',
	'ATTACH_PICTURE'					=> 'Attach picture',
	'PG_SOCIAL_AVATAR'					=> 'Avatar',
	'COMMENT'							=> array(
		0				=> 'No comment',
		1				=> 'Comment',
		2				=> 'Comments',
	),
	'COMMENT_THIS_ACTIVITY'				=> 'Comment this post!',
	'CREATE'							=> 'Create',
	'CREATED'							=> 'Created on',
	'PG_SOCIAL_COVER'				=> 'Cover photo',
	'PG_SOCIAL_DAY'								=> array(
		1	=> 'day',
		2	=> 'days',
	),
	'DO_YOU_WANT_SHARE'					=> 'Do you want share this activity?',
	'EDIT'								=> 'Edit',
	'EDIT_PROFILE'						=> 'Edit profile',
	'FAVORITE_BOOK'						=> array(
		1				=> 'Favorite book',
		2				=> 'Favorite books',
	),
	'FAVORITE_GAME'						=> array(
		1				=> 'Favorite videogame',
		2				=> 'Favorite videogames',
	),
	'FAVORITE_MOVIE'					=> array(
		1				=> 'Favorite movie',
		2				=> 'Favorite movies',
	),
	'FAVORITE_MUSIC'					=> array(
		1				=> 'Favorite Music / Song / Singer / Band',
		2				=> 'Favorite Musics / Songs / Singers / Bands',
	),

	'FAVORITE_TVSHOW'					=> array(
		1				=> 'Favorite TV Show',
		2				=> 'Favorite TV Shows',
	),
	'FRIEND'							=> array(
		1				=> 'Friend',
		2				=> 'Friends',
	),
	'FRIENDS_NO_REQUEST'				=> 'No friendships request',
	'FRIENDS_REQUEST'					=> 'Friendships request',
	'FRIENDS_SUGGESTION'				=> 'Friends suggestion',
	'GALLER'							=> 'Gallery',
	'GENDER'							=> 'Gender',
	'GENDER_FEMALE'						=> 'Female',
	'GENDER_MALE'						=> 'Male',
	'GENDER_UNKNOWN'					=> 'Unknown',
	'HAS_COMMENT_POST'					=> '%s commented an <a href="%s">activity</a> of %s',
	'HAS_COMMENT_HER_POST'				=> '%s commented a her <a href="%s">activity</a>',
	'HAS_COMMENT_YOUR_POST'				=> '%s commented an activity',
	'HAS_LIKE_POST'						=> '%s liked an <a href="%s">activity</a> of %s',
	'HAS_LIKE_HER_POST'					=> '%s liked a her <a href="%s">activity</a>',
	'HAS_LIKE_YOUR_POST'				=> '%s liked a your activity',
	'HAS_PUBLISHED_PHOTO'				=> 'has published a photo',
	'HAS_PUBLISHED_PHOTO_ALBUM'			=> 'has published a photo in %s',
	'HAS_REG'							=> '%s was registered',
	'HAS_SHARED_STATUS'					=> 'has shared a %s',
	'HAS_UPLOADED_AVATAR'				=> 'has uploaded a new profile picture',
	'HAS_UPLOADED_COVER'				=> 'has uploaded a new cover picture',
	'HAS_TAGGED_YOU'					=> '%s tagged you in an activity',
	'HAS_WRITE_IN'						=> 'has written on the wall of',
	'HAS_WRITE_IN_YOUR'					=> '%s has written on your wall',
	'HAS_WRITED_ARTICLE'				=> 'has written an article',
	'HAS_WRITED_POST_ON'				=> 'has written a post on %s',
	'HAS_WRITED_POST_ON_CANCEL'			=> 'has witten a post on a topic',
	'HIDE_ONLINE'						=> 'Hide my online status',
	'HOBBY'								=> array(
		1				=> 'Hobby',
		2				=> 'Hobbies',
	),
	'HOBBIES_INTERESTS'					=> 'Hobbies and Interests',
	'HOUR'								=> array(
		1				=> 'hour',
		2				=> 'hours',
	),
	'INFO'								=> 'Info',
	'YOU_SEE_ACTIVITY'					=> 'You are looking an activity of %s',
	'LAST_PHOTO'						=> array(
		1				=> 'Last photo',
		2				=> 'Last photos',
	),
	'LESS'								=> 'less than',
	'LIKE'								=> array(
		1				=> 'Like',
		2				=> 'Likes',
	),
	//'LIKE_ACTIVE'  						=> 'You like it',
	'LIKE_TO'							=> 'Like to',
	'MINUTE'							=> array(
		1				=> 'minute',
		2				=> 'minutes',
	),
	'NOBODY_ONLINE'						=> 'Nobody online',
	'NOTIFICATION_PG_SOCIAL'			=> 'Social notifications',
	'NOTIFICATION_TYPE_SOCIAL_STATUS'	=> 'is writing something on the wall',
	'NOTIFICATION_TYPE_SOCIAL_COMMENTS'	=> 'is commenting your post',
	'NOTIFICATION_TYPE_SOCIAL_LIKES'	=> 'like your post',
	'NOTIFICATION_TYPE_SOCIAL_TAG'		=> 'tagged in an activity',
	'NOTIFICATION_TYPE_SOCIAL_ZEBRA'	=> 'Someone add you as friend',
	'ONLY_YOU'							=> 'Only you',
	'OPTIONS'							=> 'Options',
	'OTHER_SOCIALNETWORK'				=> 'Other Social Networks',
	'PAGE_CREATE'						=> 'Create page',
	'PAGE_INSERT_NAME'					=> 'Name of the new page',
	'PAGE_USERNAME'						=> 'Page name',
	'PAGE_MAY_LIKE'						=> 'Page you may like',
	'PAGES'								=> 'Pages',
	'PERSONAL_INFO'						=> 'Personal Info',
	'PG_SOCIAL_CHAT_DISABLE'			=> 'Disable chat',
	'PG_SOCIAL_CHAT_SOUND_DISABLE'		=> 'Disable sound when receive new messages on chat',
	'PG_SOCIAL_COMMENT_NEW_LOG'			=> '<strong>Has commented an activity</strong><br />» %s',
	'PG_SOCIAL_COMMENT_REMOVE_LOG'		=> '<strong>Has deleted a his comment from an activity</strong>',
	'PG_SOCIAL_FRIENDS'					=> 'Friends',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ'		=> 'Accept friend request',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ'		=> 'Accept',
	'PG_SOCIAL_FRIENDS_ADD'				=> 'Add as friend',
	'PG_SOCIAL_FRIENDS_CANCEL_REQ'		=> 'Delete friend request',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ'		=> 'Decline friend request',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ_SHORT'		=> 'Decline',
	'PG_SOCIAL_FRIENDS_REMOVE'			=> 'Remove friend',
	'PG_SOCIAL_STATUS_DELETE'			=> 'Delete activity',
	'PG_SOCIAL_DISLIKE_NEW_LOG'			=> '<strong>Not likes more an activity</strong><br />» %s',
	'PG_SOCIAL_LIKE_NEW_LOG'			=> '<strong>Likes an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_NEW_LOG'			=> '<strong>Has published an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_SHARE_LOG'		=> '<strong>Has shared an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_REMOVE_LOG'		=> '<strong>Has deleted an activity</strong>',
	'PG_SOCIAL_WRITE_A_MESSAGE'					=> 'Write a message',
	'PG_SOCIAL_WRITE_SOMETHING'					=> 'Write something',
	'PG_SOCIAL_VERSION'							=> 'Version',
	'PHOTO_DELETE'						=> 'Delete this photo',
	'PHOTO'								=> array(
		1				=> 'Photo',
		2				=> 'Photos',
	),
	'PRIVACY_ALL'						=> 'All',
	'PRIVACY_ONLY_FRIENDS'				=> 'Friends',
	'PRIVACY_ONLY_ME'					=> 'Only me',
	'PRIVACY_VISIBLE_FOR'				=> 'Visible for',
	'PROFILE_AVATAR_UPDATE'				=> 'Change Profile picture',
	'PROFILE_COVER_UPDATE'				=> 'Change Cover picture',
	'PROFILE_NO_FRIEND'					=> 'No friend',
	'PROFILE_UPDATE'					=> 'Update profile',
	'PUBLIC'							=> 'Post',
	'QUOTE'								=> 'Quote',
	'RECENT_DISCUSSIONS'				=> 'Recent discussions',
	'RENAME'							=> 'Rename',
	'SOCIAL_STATU'						=> 'Status',
	'SOCIAL_STATUS_UNKNOW'				=> 'Unknow',
	'SOCIAL_STATUS_SINGLE'				=> 'Single',
	'SOCIAL_STATUS_ENGAGED'				=> 'Engaged',
	'SOCIAL_STATUS_MARRIED'				=> 'Married',
	'SOCIAL_STATUS_COMPLICATED'			=> 'It\'s complicated',
	'SOCIAL_STATUS_RELATIONSHIP'		=> 'In an open relationship',
	'SECONDS'							=> 'seconds',
	'SHARE'								=> 'Share',
	'STATUS'							=> 'status',
	'PG_SOCIAL_SUPPORT_EXT_KOFI'		=> 'Support PG SOCIAL NETWORK on Ko-fi',
	'PG_SOCIAL_WALL'					=> 'Wall',
	'WALL_TIME_AGO'						=> '%1$u %2$s ago',
	'WALL_TIME_FROM_NOW'			  => '%1$u %2$s ago',
	'WALL_TIME_PERIODS'				  => array(
		1	 		=> 'seconds',
		2	 		=> 'minute',
		'SECOND'	 => 'second',
		'SECONDS'	 => 'seconds',
		'MINUTE'	 => 'minute',
		'MINUTES'	 => 'minutes',
		'HOUR'		 => 'hour',
		'HOURS'		 => 'hours',
		'DAY'		 => 'day',
		'DAYS'		 => 'days',
		'WEEK'		 => 'week',
		'WEEKS'		 => 'weeks',
		'MONTH'		 => 'month',
		'MONTHS'	 => 'months',
		'YEAR'		 => 'year',
		'YEARS'		 => 'years',
		'DECADE'	 => 'decade',
		'DECADES'	 => 'decades',
	),
));
