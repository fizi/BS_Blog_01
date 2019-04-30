<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Game Plus Theme for e107 v2.x.
 */

if(!defined('e107_INIT')) { exit; }

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected)

define("BOOTSTRAP", 3);
define("FONTAWESOME", 4);
define('VIEWPORT', "width=device-width, initial-scale=1.0");

e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

// CDN provider for Bootswatch.
$cndPref = e107::pref('theme', 'cdn', 'cdnjs');

switch($cndPref) {

	case "jsdelivr":
	//	e107::css('url', 'https://cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url',    'https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js", 'jquery');
	break;			
	
	case "cdnjs":
	default:
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js", 'jquery', 2);

}

/* @example prefetch  */
//e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));

e107::css("theme", 			"css/animate.css"); 


e107::js("theme", 			"js/isotope.pkgd.js");
e107::js("theme", 			"js/imagesloaded.pkgd.js");
e107::js("theme", 			"js/responsive-tabs_mod_by_fizi.js");
e107::js("theme", 			"js/custom.js");
                 

e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3.

// Theme disclaimer is displayed in your site disclaimer appended to the site disclaimer text.
// Uncomment the line below to set a theme disclaimer (remove the // ).
define('THEME_DISCLAIMER', "<br />".LAN_THEME_6.""); 

// applied before every layout.
// $LAYOUT['_header_'] = "";

// applied after every layout. 
// $LAYOUT['_footer_'] = "";

$LAYOUT = array();

// Default Header layout for ALL layouts
$LAYOUT['_header_'] = "
<div id='header'>
  <div class='container'>
    <div class='row'>
      <div class='header-navigation'>
        <div class='navbar navbar-default'>
          <div class='container-fluid'>
            <div class='navbar-header'>
              <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
              </button>
              <a class='navbar-brand' href='".e_HTTP."index.php' title='{SITENAME}' alt='".SITENAME."'>{SITENAME}</a>
            </div>
            <div id='navbar' class='navbar-collapse collapse'>
              {BOOTSTRAP_USERNAV: placement=top}
              {NAVIGATION=main} 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>                                                                                     
";


// Default Footer layout for ALL layouts
$LAYOUT['_footer_'] = "
<div class='footer-top'>
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12'>
        <ul class='social-connected'>
          <li>{XURL_ICONS: type=facebook}</li> 
          <li>{XURL_ICONS: type=twitter}</li>
          <li>{XURL_ICONS: type=google-plus}</li>
        </ul>
      </div>  
    </div>
  </div>
</div>
<div class='footer-info'>
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12'>
        {SITEDISCLAIMER}
        {THEME_DISCLAIMER}
      </div>
    </div>
  </div>  
</div>
";


// Blog Default layout 
$LAYOUT['blog_with_sidebar'] =  "
<div class='container'>
  <div class='row'>
    {BOOTSTRAP_GRID_NEWS_FEATURES_TOP}         
  </div>
  <div class='row'>
    <div class='banner-wrap'> 
      {SETIMAGE: w=780&h=90&crop=1}
      {BANNER}
    </div>
  </div>
  <div class='row'>
    <div class='col-md-9'>
      <div class='leftcol'>
        {SETSTYLE=leftcol}
{---}
      </div>
    </div>
    <div class='col-md-3'>
      <div class='rightcol'>
        {SETSTYLE=rightcol}
        {MENU=1}
        {MENU=2}
      </div>
    </div>
  </div>
</div>    
";  


// Homepage layout 
$LAYOUT['homepage'] =  "
<div class='container'>
  <div class='row'>
    {BOOTSTRAP_GRID_NEWS_FEATURES_TOP}         
  </div>
  <div class='row'>
    <div class='banner-wrap'> 
      {SETIMAGE: w=780&h=90&crop=1}
      {BANNER}
    </div>
  </div>
  <div class='row'>
    <div class='col-md-12'>
      <div class='leftcol'>
        {SETSTYLE=wmessage}
        {WMESSAGE}
        {SETSTYLE=leftcol}
{---}
      </div>
    </div>
  </div>
</div>    
"; 


// Blog Full layout 
$LAYOUT['blog_full_page'] =  "
<div class='container'>
  <div class='row'>
    {BOOTSTRAP_GRID_NEWS_FEATURES_TOP}         
  </div>
  <div class='row'>
    <div class='banner-wrap'> 
      {SETIMAGE: w=780&h=90&crop=1}
      {BANNER}
    </div>
  </div>
  <div class='row'>
    <div class='col-md-12'>
      <div class='leftcol'>
        {SETSTYLE=leftcol}
{---}
      </div>
    </div>
  </div>
</div>    
"; 


// Blog Extend News layout 
$LAYOUT['blog_extend_news'] =  "
<div class='container'>
  <div class='row'>
    {BOOTSTRAP_GRID_NEWS_FEATURES_TOP}         
  </div>
  <div class='row'>
    <div class='banner-wrap'> 
      {SETIMAGE: w=780&h=90&crop=1}
      {BANNER}
    </div>
  </div>
  <div class='row'>
    <div class='col-md-9'>
      <div class='leftcol'>
        {SETSTYLE=leftcol}
{---}
      </div>
    </div>
    <div class='col-md-3'>
      <div class='rightcol'>
        {SETSTYLE=rightcol}
        {MENU=1}
        {MENU=2}
      </div>
    </div>
  </div>
</div>    
"; 




function rand_tag(){
        $tags = file(e_BASE."files/taglines.txt");
        return stripslashes(htmlspecialchars($tags[rand(0, count($tags))]));
}


//        [newsstyle]
/* NEWSSTYLE IS UNUSED FOR NOW */
/* NEWSSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */

      

//  [list of news category]
/* NEWSLISTSTYLE IS UNUSED FOR NOW */
/* NEWSLISTSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */



// define('ICONPRINTPDF', 'pdf.png');
// define('ICONMAIL', 'email.png');
// define('ICONPRINT', 'printer.png');
// define('ICONSTYLE', 'float: left; border:0');
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', LAN_THEME_2);
define('PRE_EXTENDEDSTRING', '');
define('EXTENDEDSTRING', '<i class="fa fa-arrow-circle-o-right"></i>');
define('POST_EXTENDEDSTRING', '');
define('TRACKBACKSTRING', LAN_THEME_7);
define('TRACKBACKBEFORESTRING', '&nbsp;|&nbsp;');


// linkstyle
/* LINKSTYLE IS UNUSED FOR NOW */
/* LINKSTYLE IS IN THEME FOLDER/TEMPLATES/navigation_template.php */


/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data. 
 */ 


 function tablestyle($caption, $text, $id='', $info=array()){

//	global $style; // no longer needed.

  $style = $info['setStyle'];
  
  echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	
	$type = $style;

	//@todo a switch will be faster than all these elseif statements. 
	
	switch($style){
    
    case "wmessage":
      echo "<div class='wmessage-box'>                             
              <div class='wmessage-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='wmessage-body'>{$text}</div>
            </div>";
    break;
    
    case "leftcol":
      echo "<div class='leftmenu-box'>                             
              <div class='leftmenu-box-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='leftmenu-box-body'>{$text}</div>
            </div>";
    break;
    
    case "rightcol":
      echo "<div class='rightmenu-box'>
              <div class='rightmenu-box-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='rightmenu-box-body'>{$text}</div>                                                     
            </div>";
    break;
    
    default: 
      echo "<div class='othermenu-box'>
		          <div class='othermenu-box-title'>
                <h2>{$caption}</h2>
              </div>	                                 
              <div class='othermenu-box-body'>{$text}</div>                       
            </div>";
	}
}
    

// chatbox post style
// $CHATBOXSTYLE in THEME FOLDER/templates/chatbox_menu/chat_template.php    


// Image Version Example
// $SEARCH_SHORTCODE in THEME FOLDER/search_template.php

?>