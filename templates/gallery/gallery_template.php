<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Templates for "gallery" plugin.
 */

// Modified by fizi **********************************************************************

$GALLERY_TEMPLATE['list']['caption'] = LAN_PLUGIN_GALLERY_TITLE;

$GALLERY_TEMPLATE['list']['start'] = '
{GALLERY_BREADCRUMB}
<div id="gallery">
  <div class="gallery-isotope-grid">
    <div class="gallery-isotope-grid-sizer col-lg-4 col-md-4 col-sm-6 col-xs-12"></div> 
';

$GALLERY_TEMPLATE['list']['item'] = '
    <div class="gallery-isotope-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="gallery-thumb-container">
        <div class="gallery-thumb-image">
			    <img class="gallery-thumb img-responsive img-fluid" src="{GALLERY_THUMB=w=1000&h=700&imageurl}" />
          <div class="gallery-thumb-overlay"> 
            <div class="gallery-thumb-overlay-text-align">
              <div class="gallery-thumb-overlay-text">
                <div class="gallery-thumb-overlay-caption-animated">{GALLERY_CAPTION}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
';

$GALLERY_TEMPLATE['list']['end'] = '
  </div>
</div>
<div class="center">
	<div class="gallery-list-nextprev">{GALLERY_NEXTPREV}</div>
	<div class="gallery-list-back">
		<a class="btn btn-default" href="{GALLERY_BASEURL}">'.LAN_BACK.'</a>
	</div>
</div>
';


// Bootstrap3 Compatible.
$GALLERY_TEMPLATE['cat']['caption'] = LAN_PLUGIN_GALLERY_TITLE;

$GALLERY_TEMPLATE['cat']['start'] = '{GALLERY_BREADCRUMB}
<div id="gallery-cat" class="row">
';

$GALLERY_TEMPLATE['cat']['item'] = '
	<div class="col-sm-6 img-grid">
    <div class="img-grid-item">
		  {GALLERY_CAT_THUMB=w=1000&h=700}
		  <div class="gallery-cat-title">
        <div class="gallery-cat-title-text-align">
          <div class="gallery-cat-title-text">
            <h3>{GALLERY_CAT_TITLE}</h3>
          </div>
        </div>
      </div>
    </div>
	</div>
';

$GALLERY_TEMPLATE['cat']['end'] = '
</div>
';

// {GALLERY_SLIDESHOW=X}  X = Gallery Category. Default: 1 (ie. 'gallery_1') Overrides preference in admin. 
// {GALLERY_SLIDES=X}  X = number of items per slide. 
// {GALLERY_JUMPER=space} will remove numbers and just leave spaces. 

$GALLERY_TEMPLATE['slideshow_wrapper'] = '
<div id="gallery-slideshow-wrapper">
	<div id="gallery-slideshow-content">
		{GALLERY_SLIDES=4}
	</div>
</div>

<div class="gallery-slideshow-controls">
	<a href="#" class="gallery-control gal-next btn btn-xs btn-default pull-right">'. LAN_NEXT.' {GLYPH=fa-chevron-right}</a>
	<a href="#" class="gallery-control gal-prev btn btn-xs btn-default">{GLYPH=fa-chevron-left} '.LAN_PREVIOUS.'</a>
	<span class="gallery-slide-jumper-container">
		{GALLERY_JUMPER}
	</span>
</div>
';

$GALLERY_TEMPLATE['slideshow_slide_item'] = '<span class="gallery-slide-item">{GALLERY_THUMB: w=150&h=120}</span>';

$GALLERY_TEMPLATE['prettyphoto']['content'] = '
<div class="pp_pic_holder">
	<div class="ppt">&nbsp;</div>
	<div class="pp_top">
		<div class="pp_left"></div>
		<div class="pp_middle"></div>
		<div class="pp_right"></div>
	</div>
	<div class="pp_content_container">
		<div class="pp_left">
			<div class="pp_right">
				<div class="pp_content">
					<div class="pp_loaderIcon"></div>
					<div class="pp_fade">
						<a href="#" class="pp_expand" title="'.LAN_GALLERY_FRONT_02.'">'.LAN_EXPAND.'</a>
						<div class="pp_hoverContainer">
							<a class="pp_next" href="#">'.LAN_NEXT.'</a>
							<a class="pp_previous" href="#">'.LAN_PREVIOUS.'</a>
						</div>
						<div id="pp_full_res"></div>
						<div class="pp_details">
							<div class="pp_nav">
								<a href="#" class="pp_arrow_previous">'.LAN_PREVIOUS.'</a>
								<p class="currentTextHolder">0/0</p>
								<a href="#" class="pp_arrow_next">'.LAN_NEXT.'</a>
							</div>
							<p class="pp_description"></p>
							{pp_social}
							<a class="pp_close" href="#">'.LAN_CLOSE.'</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pp_bottom">
		<div class="pp_left"></div>
		<div class="pp_middle"></div>
		<div class="pp_right"></div>
	</div>
</div>
<div class="pp_overlay"></div>
';

$GALLERY_TEMPLATE['prettyphoto']['gallery_item'] = '
<div class="pp_gallery">
	<a href="#" class="pp_arrow_previous">'.LAN_PREVIOUS.'</a>
	<div>
		<ul>
			{gallery}
		</ul>
	</div>
	<a href="#" class="pp_arrow_next">'.LAN_NEXT.'</a>
</div>
';

$GALLERY_TEMPLATE['prettyphoto']['image_item'] = '
<img id="fullResImage" src="{path}" />
';

$GALLERY_TEMPLATE['prettyphoto']['flash_item'] = '
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}">
	<param name="wmode" value="{wmode}" />
	<param name="allowfullscreen" value="true" />
	<param name="allowscriptaccess" value="always" />
	<param name="movie" value="{path}" />
	<embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed>
</object>
';

$GALLERY_TEMPLATE['prettyphoto']['quicktime_item'] = '
<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}">
	<param name="src" value="{path}">
	<param name="autoplay" value="{autoplay}">
	<param name="type" value="video/quicktime">
	<embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed>
</object>
';

$GALLERY_TEMPLATE['prettyphoto']['iframe_item'] = '
<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>
';

$GALLERY_TEMPLATE['prettyphoto']['inline_item'] = '
<div class="pp_inline">{content}</div>
';

$GALLERY_TEMPLATE['prettyphoto']['custom_item'] = '';

$GALLERY_TEMPLATE['prettyphoto']['social_item'] = '
<div class="pp_social">
	<div class="twitter">
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="none">'.LAN_SHARE.'</a>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	</div>
	<div class="facebook">
		<iframe src="http://www.facebook.com/plugins/like.php?locale=en_US&href=\'+location.href+\'&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe>
	</div>
</div>
';






/*

$GALLERY_TEMPLATE['portfolio']['start']     = '<-- start portfolio -->';
$GALLERY_TEMPLATE['portfolio']['item']      = '<img src="{GALLERY_THUMB: w=1080&h=720&thumbsrc}" class="img-responsive" alt="{GALLERY_CAPTION=text}">';
$GALLERY_TEMPLATE['portfolio']['end']       = '<-- end portfolio -->';

*/
