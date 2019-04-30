<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '
<div class="news-list-item">
  <div class="row">
    <div class="col-md-6">           
      <div class="news-list-item-mainimage">
        {SETIMAGE: w=900&h=700&crop=1}
        {NEWSIMAGE: item=1}
      </div>
    </div>    
    <div class="col-md-6">
      <h3 class="news-list-item-title">{NEWS_TITLE: link=1}</h3>
      <div class="news-list-item-date">
        <span>{NEWSDATE=dd}&nbsp;/&nbsp;</span><span>{NEWSDATE=M}&nbsp;/&nbsp;</span><span>{NEWSDATE=yyyy}</span>
      </div>
      <div class="lead">{NEWS_SUMMARY}</div>
      <div class="news-list-item-extended text-right"><a class="button btn btn-mini btn-xs" href="{NEWSURL}">'.LAN_READ_MORE.'&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a></div>
    </div>
  </div>
</div>
<hr />
';






//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';



// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme. 
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/


/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/


// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';


$NEWS_TEMPLATE['default']['start']	= '
<!-- Default News Template -->
<div class="isotope-grid">
  <div class="isotope-grid-sizer col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
';
$NEWS_TEMPLATE['default']['item'] = '
<div class="isotope-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
  <div class="default-item news-category-{NEWS_CATEGORY_ID}">
    <div class="default-item-mainimage">
      {SETIMAGE: w=1200&h=1000}
      {NEWSIMAGE: item=1&type=tag}
      <div class="default-item-overlay">
        <div class="default-item-overlay-text-align">
          <div class="default-item-overlay-text">
            <a href="{NEWSURL}"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
    <h2 class="default-item-title">{NEWS_TITLE: link=1}</h2>
    <div class="default-item-date">
      <span>{NEWSDATE=dd}&nbsp;/&nbsp;</span><span>{NEWSDATE=M}&nbsp;/&nbsp;</span><span>{NEWSDATE=yyyy}</span>
    </div>
    <div class="default-item-body text-justify">{NEWS_BODY}</div>
    <div class="default-item-bottom">
      <div class="default-item-comments">
        <a href="{NEWSURL}">
          <span class="default-item-comments-badge">{NEWS_COMMENT_COUNT}</span>
          <i class="fa fa-comments-o"></i>
        </a>
      </div>
      <div class="default-item-morebutton">{EXTENDED}</div>
    </div>
  </div>
</div>
';

$NEWS_TEMPLATE['default']['end']	= '
</div>';



/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/

$NEWS_TEMPLATE['category']['start'] = '<!-- Category News Template -->';

$NEWS_TEMPLATE['category']['item'] = '
<div class="news-cat-item">
  <div class="news-cat-item-category"><span>{NEWSCATEGORY}</span></div> 
	<h2 class="news-cat-item-title">{NEWS_TITLE: link=1}</h2>
  <div class="news-cat-item-meta">
    <a class="news-cat-item-date" href="{NEWSURL}">{NEWS_DATE}</a>
    {NEWS_AUTHOR} 
    {NEWSCOMMENTS}
  </div>
  <div class="news-cat-item-mainimage">
    {SETIMAGE: w=1200&h=1000&crop=1}
    {NEWS_IMAGE: item=1}
  </div>
  <div class="news-cat-item-content">
    <div class="lead">{NEWS_SUMMARY}</div>
    <div class="news-cat-item-body">{NEWS_BODY=body}</div>
    <div class="news-cat-item-extended text-right"><a class="button btn btn-mini btn-xs" href="{NEWSURL}">'.LAN_READ_MORE.'&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a></div>
  </div>
</div>
';

$NEWS_TEMPLATE['category']['end'] = '';





###### Default view item (temporary)  ######
//$NEWS_MENU_TEMPLATE['view']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['view']['end']         = '</ul>';

// As displayed by news.php?extend.1

/* FOR EXTEND NEWS ITEM ***************************************************************************/


// $NEWS_WRAPPER['view']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['view']['item'] = '
<div class="view-item">
  <div class="view-item-category"><span>{NEWSCATEGORY}</span></div> 
	<h2 class="view-item-title">{NEWS_TITLE: link=1}</h2>
  <div class="view-item-meta">
    <a class="view-item-date" href="{NEWSURL}">{NEWS_DATE}</a>
    {NEWS_AUTHOR} 
    <a class="view-item-comment" href="{NEWSURL}">{NEWSCOMMENTS}</a>
  </div>
  <div class="view-item-mainimage">
    {SETIMAGE: w=1200&h=1000&crop=1}
    {NEWS_IMAGE: item=1}
  </div>
  <div class="view-item-content">
    <div class="lead">{NEWS_SUMMARY}</div>
    <div class="view-item-body">{NEWS_BODY=body}</div>
    <div class="row view-item-videos">
			<div class="col-md-6 view-video">{NEWSVIDEO: item=1}</div>
		 	<div class="col-md-6 view-video">{NEWSVIDEO: item=2}</div>
		 	<div class="col-md-6 view-video">{NEWSVIDEO: item=3}</div>
      <div class="col-md-6 view-video">{NEWSVIDEO: item=4}</div>
		</div>
    {SETIMAGE: w=1200&h=1000&crop=1}
    <div class="row view-item-images-1">
      <div class="col-md-6">{NEWS_IMAGE: item=2}</div>
      <div class="col-md-6">{NEWS_IMAGE: item=3}</div>
    </div>
    <div class="row view-item-images-2">
      <div class="col-md-6">{NEWSIMAGE: item=4}</div>
      <div class="col-md-6">{NEWSIMAGE: item=5}</div>
    </div>
    <div class="view-item-extended">{NEWS_BODY=extended}</div>
    <div class="view-item-tags">{GLYPH=tags} &nbsp;{NEWSTAGS: separator=&nbsp;}</div>
    <div class="view-item-share">{PRINTICON}{ADMINOPTIONS}{SOCIALSHARE: type=basic}</div>
  </div>
</div>
<div class="view-item-by-author">
  <h3 class="view-item-about-author">'.LAN_THEME_70.'</h3>    
	<div class="view-item-by-author-avatar">
    {SETIMAGE: w=100&h=100&crop=1}
    {NEWS_AUTHOR_AVATAR: shape=circle}
  </div>               
	<div class="view-item-author-name">
    <h4><i class="fa fa-user-circle"></i>&nbsp;&nbsp;{NEWS_AUTHOR}</h4>
    <a class="view-item-author-articles" href="{NEWS_AUTHOR_ITEMS_URL}">'.LAN_THEME_71.'</a>
  </div>
	<div class="view-item-author-info">{NEWS_AUTHOR_SIGNATURE}</div>	
</div>    
{NEWSRELATED: limit=4&types=news}
{NEWSNAVLINK}
';

/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';





### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '
{SETIMAGE: w=900&h=700&crop=1}
<div class="related-news-title"><h2>'.LAN_RELATED.'</h2></div>
<div class="row">';

$NEWS_TEMPLATE['related']['item'] = '
  <div class="col-xs-3">
    <div class="related-news-image">
      <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
    </div> 
    <div class="related-news-header">
      <h4 class="related-news-caption"><a href="{RELATED_URL}">{RELATED_TITLE}</a></h4>
      <div class="related-news-summary">{RELATED_SUMMARY}</div> 
    </div>
  </div>';

$NEWS_TEMPLATE['related']['end'] = '
</div>';