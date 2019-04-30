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



if (empty($FORUM_VIEW_START))
{
$FORUM_VIEW_START = "
<div style='text-align:center'>
  <div class='spacer'>
	  <table style='".USER_WIDTH."' class='fborder table' >
	    <tr>
	      <td class='fcaption'>{BREADCRUMB}</td>
	    </tr>
	    {SUBFORUMS}
	    <tr>
	      <td style='width:80%' class='forumheader'><span class='mediumtext'>{FORUMTITLE}</span></td>
	    </tr>
	  </table>
	</div>
	<table style='".USER_WIDTH."'>
	  <tr>
	    <td style='width:80%'><span class='mediumtext'>{THREADPAGES}</span></td>
	    <td style='width:20%; text-align:right'>{NEWTHREADBUTTON}</td>
	  </tr>
	</table>
	<div class='spacer'>
	  {MESSAGE}
	  <div class='spacer'>
	    <table style='".USER_WIDTH."' class='fborder table'>
	      <tr>
	        <td style='width:3%' class='fcaption'>&nbsp;</td>
	        <td style='width:47%' class='fcaption'>{THREADTITLE}</td>
	        <td style='width:20%; text-align:center' class='fcaption'>{STARTERTITLE}</td>
	        <td style='width:5%; text-align:center' class='fcaption'>{REPLYTITLE}</td>
	        <td style='width:5%; text-align:center' class='fcaption'>{VIEWTITLE}</td>
	        <td style='width:20%; text-align:center' class='fcaption'>{LASTPOSTITLE}</td>
	      </tr>";
}

if(empty($FORUM_VIEW_START_CONTAINER))
{
	$FORUM_VIEW_START_CONTAINER = "
<div style='text-align:center'>
	<div class='spacer'>
	  <table style='".USER_WIDTH."' class='fborder table' >
	    <tr>
	      <td class='fcaption'>{BREADCRUMB}</td>
	    </tr>
	    {SUBFORUMS}
	  </table>
	</div>
	";
}

// XXX These templates should remain unchanged.
if (empty($FORUM_VIEW_FORUM)) {
	$SC_WRAPPER['LASTPOST:type=date'] = "{---}<br>";
	$SC_WRAPPER['LASTPOST:type=url'] = " <a href='{---}'>".IMAGE_post2."</a>";
	$FORUM_VIEW_FORUM = "
		    <tr>
		      <td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		      <td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>
		        <table style='width:100%'>
		          <tr>
		            <td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span><br /><span class='smalltext'>{PAGES}</span></td>
		            <td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		          </tr>
		        </table>
		      </td>
		      <td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		      <td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		      <td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		      <td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		    </tr>";
}

if (empty($FORUM_VIEW_FORUM_STICKY))
{
	$FORUM_VIEW_FORUM_STICKY = "
		    <tr>
		      <td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		      <td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>
		        <table style='width:100%'>
		          <tr>
		            <td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span> <span class='smalltext'>{PAGES}</span></td>
		            <td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		          </tr>
		        </table>
		      </td>
		      <td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		      <td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		      <td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		      <td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		    </tr>";
}

if (empty($FORUM_VIEW_FORUM_ANNOUNCE))
{
	$FORUM_VIEW_FORUM_ANNOUNCE = "
		    <tr>
		      <td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		      <td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>
		        <table style='width:100%'>
		          <tr>
		            <td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span> <span class='smalltext'>{PAGES}</span></td>
		            <td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		          </tr>
		        </table>
		      </td>
		      <td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		      <td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		      <td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		      <td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		    </tr>";
}

if (empty($FORUM_VIEW_END))
{
	$FORUM_VIEW_END = "
		  </table>
		</div>
		<table style='".USER_WIDTH."'>
		  <tr>
		    <td style='width:80%'><span class='mediumtext'>{THREADPAGES}</span></td>
		    <td style='width:20%; text-align:right'>{NEWTHREADBUTTON}</td>
		  </tr>
		  <tr>
		    <td colspan ='2'>{FORUMJUMP}</td>
		  </tr>
		</table>
		<div class='spacer'>
		  <table class='fborder table' style='".USER_WIDTH."'>
		    <tr>
		      <td style='vertical-align:middle; width:50%' class='forumheader3'><span class='smalltext'>{MODERATORS}</span></td>
		      <td style='vertical-align:middle; width:50%' class='forumheader3'><span class='smalltext'>{BROWSERS}</span></td>
		    </tr>
		  </table>
		</div>
		<div class='spacer'>
		  <table class='fborder table' style='".USER_WIDTH."'>
		    <tr>
		      <td style='vertical-align:middle; width:50%' class='forumheader3'>{ICONKEY}</td>
		      <td style='vertical-align:middle; text-align:center; width:50%' class='forumheader3'><span class='smallblacktext'>{PERMS}</span><br /><br />{SEARCH}</td>
		    </tr>
		  </table>
		</div>
	</div>
  <div class='spacer'>";
	//	hardcoded deprecated rss links
	//	<div style='text-align:center;'>
	//	<a href='".e_PLUGIN."rss_menu/rss.php?11.1.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss1.png' alt='".LAN_431."' style='vertical-align: middle; border: 0;' /></a>
	//	<a href='".e_PLUGIN."rss_menu/rss.php?11.2.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss2.png' alt='".LAN_432."' style='vertical-align: middle; border: 0;' /></a>
	//	<a href='".e_PLUGIN."rss_menu/rss.php?11.3.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss3.png' alt='".LAN_433."' style='vertical-align: middle; border: 0;' /></a>
	//	</div>
	//	
		$FORUM_VIEW_END .= "
	<div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b></div>
</div>
";
}


if(empty($FORUM_VIEW_END_CONTAINER))
{
	$FORUM_VIEW_END_CONTAINER = "
	<table style='".USER_WIDTH."'>
		<tr>
		  <td colspan ='2'>{FORUMJUMP}</td>
	  </tr>
	</table>
<div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b></div></div>
";
}


if (empty($FORUM_VIEW_SUB_START))
 {
	$FORUM_VIEW_SUB_START = "
	<tr>
	<td colspan='2'>
		<br />
		<div>
		<table style='width:100%'>
		<tr>
			<td class='fcaption' style='width: 5%'>&nbsp;</td>
			<td class='fcaption' style='width: 45%'>".LAN_FORUM_1002."</td>
			<td class='fcaption' style='width: 10%'>".LAN_FORUM_0002."</td>
			<td class='fcaption' style='width: 10%'>".LAN_FORUM_0003."</td>
			<td class='fcaption' style='width: 30%'>".LAN_FORUM_0004."</td>
		</tr>
	";
}

if (empty($FORUM_VIEW_SUB))
{
	$FORUM_VIEW_SUB = "
	<tr>
		<td class='forumheader3' style='text-align:center'>{NEWFLAG}</td>
		<td class='forumheader3' style='text-align:left'><b>{SUB_FORUMTITLE}</b><br />{SUB_DESCRIPTION}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_THREADS}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_REPLIES}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_LASTPOST}</td>
	</tr>
	";
}

if (empty($FORUM_VIEW_SUB_END))
{
	$FORUM_VIEW_SUB_END = "
	</table><br /><br />
	</div>
	</td>
	</tr>
	";
}

if (empty($FORUM_IMPORTANT_ROW)) {
	$FORUM_IMPORTANT_ROW = "<tr><td class='forumheader'>&nbsp;</td><td colspan='5'  class='forumheader'><span class='mediumtext'><b>".LAN_FORUM_1006."</b></span></td></tr>";
}


if (empty($FORUM_NORMAL_ROW))
{
	$FORUM_NORMAL_ROW = "<tr><td class='forumheader'>&nbsp;</td><td colspan='5'  class='forumheader'><span class='mediumtext'><b>".LAN_FORUM_1007."</b></span></td></tr>";
}







$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "{FORUM_TITLE}";



// New in v2.x - requires a bootstrap theme be loaded.
// Modified by FIZI *********************************************************************************************************  

//TODO Find a good place to put a {SEARCH} dropdown.

$FORUM_VIEWFORUM_TEMPLATE['caption'] = "";
$FORUM_VIEWFORUM_TEMPLATE['start'] = "
<div id='forum-viewforum'>";

$FORUM_VIEWFORUM_TEMPLATE['header'] = "
  <div class='row'>
    <div class='col-md-12'>{BREADCRUMB}</div>
  </div>
  <div class='row'>
	  <div class='col-md-9 forum-viewforum-title'><h3>{FORUMTITLE}</h3></div>
	  <div class='col-md-3 forum-viewforum-button'>{NEWTHREADBUTTONX}</div>
  </div>  
	{SUBFORUMS}
";

$FORUM_VIEWFORUM_TEMPLATE['item'] = "
  <div class='forum-viewforum-box'>
    <div class='row'>
      <div class='hidden-xs col-md-1 forum-viewforum-newflag'>{ICON}</div>
      <div class='col-xs-12 col-md-8 forum-viewforum-item'>
        <div class='row'>
          <div class='col-xs-12 col-md-9'>
            <div class='forum-viewforum-topictitle'>{THREADNAME}</div>
            <div class='forum-viewforum-postinfo'>
              <div class='smalltext'><i class='fa fa-user'></i> ".LAN_FORUM_1004.":&nbsp;{POSTER}&nbsp;&nbsp;<i class='fa fa-clock-o'></i> {THREADTIMELAPSE}</div>
            </div>
          </div>
          <div class='col-xs-12 col-md-3 text-right'>{PAGESX}</div>
        </div>
      </div>
      <div class='col-xs-12 col-md-3 forum-viewforum-status'>
        <div class='forum-viewforum-replies'><i class='fa fa-reply'></i> ".LAN_FORUM_0003." {REPLIESX}</div>
        <div class='forum-viewforum-views'><i class='fa fa-eye'></i> ".LAN_FORUM_1005." {VIEWSX}</div>
        <div class='forum-viewforum-lastpost-user'><i class='fa fa-user'></i> ".LAN_FORUM_0004." {LASTPOSTUSER}</div>
        <div class='forum-viewforum-lastpost-date'><i class='fa fa-clock-o'></i> {LASTPOSTDATE}</div>
        <div class='pull-right forum-viewforum-adminoptions'>{ADMINOPTIONS}</div>
		  </div>
    </div>
  </div>";


$FORUM_VIEWFORUM_TEMPLATE['item-sticky'] = $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";
$FORUM_VIEWFORUM_TEMPLATE['item-announce'] = $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['sub-header']	= "
  <div class='viewforum-thread'>
    <div class='row'>
	    <div class='col-xs-12'>".LAN_FORUM_1002."</div>
    </div>
  </div>
";

$FORUM_VIEWFORUM_TEMPLATE['sub-item']	= "
  <div class='forum-viewforum-box'>
    <div class='row'>
      <div class='hidden-xs col-md-1 forum-viewforum-newflag'>{NEWFLAG}</div>
      <div class='col-xs-12 col-md-8 forum-viewforum-item'>
        <div class='row'>
          <div class='col-xs-12 col-md-9'>
            <div class='forum-viewforum-topictitle'>{SUB_FORUMTITLE}</div>
            <div class='smalltext'>{SUB_DESCRIPTION}</div>
          </div>
        </div>
      </div>
      <div class='col-xs-12 col-md-3 forum-viewforum-status'>
        <div class='forum-viewforum-replies'><i class='fa fa-reply'></i> ".LAN_FORUM_0003." {SUB_REPLIESX}</div>
        <div class='forum-viewforum-views'><i class='fa fa-list'></i> ".LAN_FORUM_0002." {SUB_THREADSX}</div>
        <div class='forum-viewforum-lastpost-user'><i class='fa fa-user'></i> ".LAN_FORUM_0004." {SUB_LASTPOSTUSER}</div>
        <div class='forum-viewforum-lastpost-date'><i class='fa fa-clock-o'></i> {SUB_LASTPOSTDATE}</div>
		  </div>
	  </div>
  </div>
";

$FORUM_VIEWFORUM_TEMPLATE['sub-footer']	= "";		

/* Examples top divider with shortcodes - working
$FORUM_VIEWFORUM_TEMPLATE['divider-important']	= "<tr><th colspan='2'>".LAN_FORUM_1006." {FORUMTITLE}</th><th class='text-center'>".LAN_FORUM_0003."</th><th class='hidden-xs text-center'>".LAN_FORUM_1005."</th><th class='hidden-xs'>".LAN_FORUM_0004."</th></tr>";
$FORUM_VIEWFORUM_TEMPLATE['divider-normal']		= "<tr><th colspan='2'>".LAN_FORUM_1007." {FORUMTITLE}</th><th class='text-center' >".LAN_FORUM_0003."</th><th class='hidden-xs text-center'>".LAN_FORUM_1005."</th><th class='hidden-xs'>".LAN_FORUM_0004."</th></tr>";
*/
$FORUM_VIEWFORUM_TEMPLATE['divider-important'] = "
  <div class='viewforum-thread'>
    <div class='row'>
      <div class='col-xs-12'>".LAN_FORUM_1006."</div>
    </div>
  </div>    
";

$FORUM_VIEWFORUM_TEMPLATE['divider-normal']	= "
  <div class='viewforum-thread'>
    <div class='row'>    
      <div class='col-xs-12'>".LAN_FORUM_1007."</div>
    </div>
  </div>
";

$SC_WRAPPER['VIEWABLE_BY'] = "
  <div class='panel panel-default' style='margin-top:10px'>
    <div class='panel-heading'>".LAN_FORUM_8012."</div>
    <div class='panel-body'>{---}</div>
  </div>
";

$FORUM_VIEWFORUM_TEMPLATE['footer'] = "
	<div class='row'>
		<div class='col-md-9 forum-viewforum-pages'>{THREADPAGES}</div>
    <div class='col-md-3 forum-viewforum-button'>{NEWTHREADBUTTONX}</div>
	</div>

  <div class='panel panel-default' style='margin-top:50px'>
	  <div class='panel-heading'>".LAN_FORUM_8011."</div>
	  <div class='panel-body'>
		  {ICONKEY}
	  </div>
  </div>
  <div class='viewforum-perms'>{PERMS}</div>
  {VIEWABLE_BY}
";

$FORUM_VIEWFORUM_TEMPLATE['end'] = "
</div>";

// define {ICONKEY}
$FORUM_VIEWFORUM_TEMPLATE['iconkey'] = "
<div class='row' >
	<div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_new_small." ".LAN_FORUM_0039."</div>
	<div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_nonew_small." ".LAN_FORUM_0040."</div>
	<div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_sticky_small." ".LAN_FORUM_1011."</div>
	<div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_announce_small." ".LAN_FORUM_1013."</div>
</div>
<div class='row' >
  <div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_new_popular_small." ".LAN_FORUM_0039." ".LAN_FORUM_1010."</div>
	<div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_nonew_popular_small." ".LAN_FORUM_0040." ".LAN_FORUM_1010."</div>
	<div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_noreplies_small." ".LAN_FORUM_1021."</div>
	<div class='col-md-3 col-sm-6 col-xs-6'>".IMAGE_closed_small." ".LAN_FORUM_1014."</div>
</div>
";



// $FORUM_VIEWFORUM_WRAPPER['THREADNAME']          = "<span class='label label-info'>{---}</span>";





