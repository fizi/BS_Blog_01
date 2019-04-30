<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */
if (!defined('e107_INIT')) { exit; }
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%"); }

if (!isset($FORUM_MAIN_START))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_MAIN_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<th colspan='2' style='width:60%; text-align:center' class='fcaption'>{FORUMTITLE}</th>\n<th style='width:10%; text-align:center' class='fcaption'>".LAN_FORUM_0002."</th>\n<th style='width:10%; text-align:center' class='fcaption'>".LAN_FORUM_0003."</th>\n<th style='width:20%; text-align:center' class='fcaption'>".LAN_FORUM_0004."</th>\n</tr>";
*/
// LEGACY definition with LAN Shortcodes ({THREADTITLE}, {REPLYTITLE}, {LASTPOSTITLE}).....
$FORUM_MAIN_START = "
<div style='text-align:center'>
  <div class='spacer'>
    <table style='".USER_WIDTH."' class='fborder table'>
      <tr>
        <th colspan='2' style='width:60%; text-align:center' class='fcaption'>{FORUMTITLE}</th>
        <th style='width:10%; text-align:center' class='fcaption'>{THREADTITLE}</th>
        <th style='width:10%; text-align:center' class='fcaption'>{REPLYTITLE}</th>
        <th style='width:20%; text-align:center' class='fcaption'>{LASTPOSTITLE}</th>
      </tr>";
}
if (!isset($FORUM_MAIN_PARENT))
{
	$FORUM_MAIN_PARENT = " 
      <tr>
        <td colspan='5' class='forumheader'>{PARENTNAME} {PARENTSTATUS}</td>
      </tr>";
}
if (!isset($FORUM_MAIN_FORUM))
{
	$SC_WRAPPER['LASTPOST:type=date'] = "{---}<br>";
	$SC_WRAPPER['LASTPOST:type=url'] = " <a href='{---}'>".IMAGE_post2."</a>";
	$FORUM_MAIN_FORUM = "
      <tr>
        <td style='width:5%; text-align:center' class='forumheader2'>{NEWFLAG}</td>
        <td style='width:55%' class='forumheader2'>{FORUMNAME}<br /><span class='smallblacktext'>{FORUMDESCRIPTION}</span>{FORUMSUBFORUMS}</td>
        <td style='width:10%; text-align:center' class='forumheader3'>{THREADS}</td>
        <td style='width:10%; text-align:center' class='forumheader3'>{REPLIES}</td>
        <td style='width:20%; text-align:center' class='forumheader3'><span class='smallblacktext'>{LASTPOST}</span></td>
      </tr>";
}
if (!isset($FORUM_MAIN_END))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_MAIN_END = "</table></div>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td colspan='2' style='width:60%' class='fcaption'>".LAN_FORUM_0009."</td>\n</tr>\n<tr>\n<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>\n<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr><tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>\n</div>\n<div class='spacer'>\n<table class='fborder table' style='".USER_WIDTH."'>\n<tr>\n<td class='forumheader3' style='text-align:center; width:33%'>{ICONKEY}</td>\n<td style='text-align:center; width:33%' class='forumheader3'>{SEARCH}</td>\n<td style='width:33%; text-align:center; vertical-align:middle' class='forumheader3'><span class='smallblacktext'>{PERMS}</span>\n</td>\n</tr>\n</table>\n</div>\n</div>";
*/
// LEGACY definition with LAN Shortcodes ({INFOTITLE}).....
$FORUM_MAIN_END = "
    </table>
  </div>
  <div class='spacer'>
    <table style='".USER_WIDTH."' class='fborder table'>
      <tr>
        <td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>
      </tr>
      <tr>
        <td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>
        <td style='width:auto' class='forumheader3'>{USERINFO}</td>
      </tr>
      <tr>
        <td style='width:95%' class='forumheader3'>{INFO}</td>
      </tr>
      <tr>
        <td style='width:95%' class='forumheader3'>{FORUMINFO}</td>
      </tr>
      <tr>
        <td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>
      </tr>
    </table>
  </div>
  <div class='spacer'>
    <table class='fborder table' style='".USER_WIDTH."'>
      <tr>
        <td class='forumheader3' style='text-align:center; width:33%'>{ICONKEY}</td>
        <td style='text-align:center; width:33%' class='forumheader3'>{SEARCH}</td>
        <td style='width:33%; text-align:center; vertical-align:middle' class='forumheader3'><span class='smallblacktext'>{PERMS}</span></td>
      </tr>
    </table>
  </div>
</div>";
}

if (!isset($FORUM_NEWPOSTS_START))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_NEWPOSTS_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td style='width:3%' class='fcaption'>&nbsp;</td>\n<td style='width:60%' class='fcaption'>".LAN_FORUM_0075."</td>\n<td style='width:27%; text-align:center' class='fcaption'>".LAN_FORUM_0074."</td>\n</tr>";
*/
// LEGACY definition with LAN Shortcodes ({NEWTHREADTITLE}, {POSTEDTITLE}).....
	$FORUM_NEWPOSTS_START = "
<div style='text-align:center'>
  <div class='spacer'>
    <table style='".USER_WIDTH."' class='fborder table'>
      <tr>
        <td style='width:3%' class='fcaption'>&nbsp;</td>
        <td style='width:60%' class='fcaption'>{NEWTHREADTITLE}</td>
        <td style='width:27%; text-align:center' class='fcaption'>{POSTEDTITLE}</td>
      </tr>";
}

if (!isset($FORUM_NEWPOSTS_MAIN))
{
	$FORUM_NEWPOSTS_MAIN = "
      <tr>
        <td style='width:3%' class='forumheader3'>{NEWIMAGE}</td>
        <td style='width:60%' class='forumheader3'>{NEWSPOSTNAME}</td>
        <td style='width:27%; text-align:center' class='forumheader3'>{STARTERTITLE}</td>
      </tr>";
}

if (!isset($FORUM_NEWPOSTS_END))
{
	$FORUM_NEWPOSTS_END = "
    </table>
  </div>
</div>";
}

if (!isset($FORUM_TRACK_START))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_TRACK_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td colspan='3' style='width:60%' class='fcaption'>".LAN_FORUM_0073."</td>\n</tr>\n";
*/
// LEGACY definition with LAN Shortcodes ({TRACKTITLE}).....
$FORUM_TRACK_START = "
<div style='text-align:center'>
  <div class='spacer'>
    <table style='".USER_WIDTH."' class='fborder table'>
      <tr>
        <td colspan='3' style='width:60%' class='fcaption'>{TRACKTITLE}</td>
      </tr>";

	if (!isset($FORUM_TRACK_MAIN))
	{
		$FORUM_TRACK_MAIN = "
      <tr>
			  <td style='text-align:center; vertical-align:middle; width:6%'  class='forumheader3'>{NEWIMAGE}</td>
			  <td style='vertical-align:middle; text-align:left; width:70%'  class='forumheader3'><span class='mediumtext'>{TRACKPOSTNAME}</span></td>
			  <td style='vertical-align:middle; text-align:center; width:24%'  class='forumheader3'><span class='mediumtext'>{UNTRACK}</span></td>
			</tr>";
	}
}

if (!isset($FORUM_TRACK_END))
{
	$FORUM_TRACK_END = "
    </table>
  </div>
</div>";
}


/*
$FORUM_MAIN_START	= "<br />MAIN START";
$FORUM_MAIN_PARENT 	= "<br />MAIN PARENT";
$FORUM_MAIN_FORUM		= "<br />MAIN FORUM";
$FORUM_MAIN_END		= "<br />MAIN END";
$FORUM_NEWPOSTS_START	= "<br />NEWPOSTS-START";
$FORUM_NEWPOSTS_MAIN 	= "<br />NEWPOSTS-MAIN";
$FORUM_NEWPOSTS_END 	= "<br />NEWPOSTS END";
$FORUM_TRACK_START	= "<br />TRACK-START";
$FORUM_TRACK_MAIN	= "<br />TRACK-MAIN";
$FORUM_TRACK_END	= "<br />TRACK-END";
*/

// New in v2.x - requires a bootstrap theme be loaded.  
// Modified by FIZI **************************************************************************************************************

$FORUM_TEMPLATE['main']['start'] = "
{FORUM_BREADCRUMB}
<div class=''>
  <div class='form-group right'>
	  {SEARCH}
	</div>
</div>
<div id='forum'>
  <div class='forum-header'>{FORUMTITLE}</div>
";

$FORUM_TEMPLATE['main']['parent']	= "
  <div class='forum-parent'>
    <div class='row'>
      <div class='col-xs-12 forum-parent-title'>{PARENTNAME} {PARENTSTATUS}</div>
		</div>
  </div>";

$FORUM_TEMPLATE['main']['forum'] = "
    <div class='forum-box'>
      <div class='row'>
		    <div class='hidden-xs col-md-1 forum-newflag'>{NEWFLAG}</div>
			  <div class='col-xs-12 col-md-8 forum-forumitem'>
          <div class='forum-forumname'>{FORUMNAME}</div>
          <div class='forum-forumdescription'><small>{FORUMDESCRIPTION}</small></div>
          <div class='forum-subforum'>{FORUMSUBFORUMS}</div>  
        </div>
			  <div class='col-xs-12 col-md-3 forum-status'>
          <div class='forum-replies'><i class='fa fa-reply'></i> ".LAN_FORUM_0003." {REPLIESX}</div>
          <div class='forum-threads'><i class='fa fa-list'></i> ".LAN_FORUM_0002." {THREADSX}</div>
          <div class='forum-lastpost-user'><i class='fa fa-user'></i> ".LAN_FORUM_0004." {LASTPOST:type=username}</div>
          <div class='forum-lastpost-date'><i class='fa fa-clock-o'></i> {LASTPOST:type=datelink}</div>
        </div>
		  </div>
    </div>";

//{LASTPOST:type=username} + {LASTPOST:type=datelink} can also be replaced by the legacy shortcodes {LASTPOST} or {LASTPOSTUSER} + {LASTPOSTDATE}

$FORUM_TEMPLATE['main']['end'] = "
    </div>
  </div>
  <div class='forum-footer center'><small>{USERINFOX}</small></div>
</div>
";

// $FORUM_WRAPPER['main']['forum']['USERINFOX'] = "{FORUM_BREADCRUMB}(html before){---}(html after)";

// Tracking
$FORUM_TEMPLATE['track']['start'] = "
{FORUM_BREADCRUMB}
<div id='forum-track'>  
";

$FORUM_TEMPLATE['track']['item'] = "
  <div class='forum-track-box'>
    <div class='row'>
		  <div class='hidden-xs col-md-1 forum-track-newflag'>{NEWIMAGE}</div>
		  <div class='col-md-8 forum-track-forumname'>{TRACKPOSTNAME}</div>
      <div class='col-xs-12 col-md-3 forum-track-status'>
        <div class='forum-track-lastpost-user'><i class='fa fa-user'></i> ".LAN_FORUM_0004." {LASTPOSTUSER}</div>
        <div class='forum-track-lastpost-date'><i class='fa fa-clock-o'></i> {LASTPOSTDATE}</div>
        <div class='forum-track-untrack'>{UNTRACK}</div>
      </div>
    </div>
  </div>
";

$FORUM_TEMPLATE['track']['end'] = "
</div>";




/*
$FORUM_TEMPLATE['main-end']				.= "

<div class='center'>
	<small class='muted'>{PERMS}</small>
	</div>
<table style='".USER_WIDTH."' class='fborder table'>\n<tr>
<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>
<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>
<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>
";
*/
?>
