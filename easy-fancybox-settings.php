<?php
function easy_fancybox_settings(){

	return array ( 
		'Global' => array(
			'title' => __('Global settings','easy-fancybox'),
			'input' => 'deep',
			'hide' => true,
			'options' => array(
				'Enable' => array (
					'title' => __('Enable FancyBox for','easy-fancybox'),
					'input' => 'multiple',
					'hide' => true,
					'options' => array(
						'IMG' => array (
							'id' => 'fancybox_enableImg',
							'input' => 'checkbox',
							'hide' => true,
							'default' => ( function_exists('is_plugin_active_for_network') && is_plugin_active_for_network(plugin_basename( __FILE__ )) ) ? '' : '1',
							'description' => '<strong>' . __('Images & Inline content','easy-fancybox') . '</strong>'
							),
						'PDF' => array (
							'id' => 'fancybox_enablePDF',
							'input' => 'checkbox',
							'hide' => true,
							'default' => '',
							'description' => '<strong>' . __('PDF','easy-fancybox') . '</strong>'
							),
						'SWF' => array (
							'id' => 'fancybox_enableSWF',
							'input' => 'checkbox',
							'hide' => true,
							'default' => '',
							'description' => '<strong>' . __('SWF','easy-fancybox') . '</strong>'
							),
						'YouTube' => array (
							'id' => 'fancybox_enableYoutube',
							'input' => 'checkbox',
							'hide' => true,
							'default' => '',
							'description' => '<strong>' . __('YouTube','easy-fancybox') . '</strong>'
							),
						'Vimeo' => array (
							'id' => 'fancybox_enableVimeo',
							'input' => 'checkbox',
							'hide' => true,
							'default' => '',
							'description' => '<strong>' . __('Vimeo','easy-fancybox') . '</strong>'
							),
						'Dailymotion' => array (
							'id' => 'fancybox_enableDailymotion',
							'input' => 'checkbox',
							'hide' => true,
							'default' => '',
							'description' => '<strong>' . __('Dailymotion','easy-fancybox') . '</strong>'
							),
						'iFrame' => array (
							'id' => 'fancybox_enableiFrame',
							'input' => 'checkbox',
							'hide' => true,
							'default' => '',
							'description' => '<strong>' . __('iFrames','easy-fancybox') . '</strong>' 
							)							
						),
					'description' => '<strong><em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('For advanced options, please purchase the Easy FancyBox Pro version.','easy-fancybox') . '</a></em></strong><br />'
					),
				'Links' => array(
					'title' => __('Links'),
					'input' => 'multiple',
					'hide' => true,
					'options' => array(
						/*'p1' => array (
							'hide' => true,
							'description' => '<br />'
							),*/
						'attributeLimit' => array (
							'id' => 'fancybox_attributeLimit',
							'title' => __('Exclude','easy-fancybox'),
							'label_for' => 'fancybox_attributeLimit',
							'hide' => true,
							'input' => 'select',
							'options' => array(
								'' => __('None'),
								':not(:empty)' => __('Empty (hidden) links','easy-fancybox'),
								':has(img)' => __('Without thumbnail image','easy-fancybox')
								),
							'default' => '',
							'description' => '<br />' 
							),
						'autoClick' => array (
							'id' => 'fancybox_autoClick',
							'title' => __('Auto-open','easy-fancybox'),
							'label_for' => 'fancybox_autoClick',
							'hide' => true,
							'input' => 'select',
							'options' => array(
								'' => __('None'),
								'1' => __('Link with ID "fancybox-auto"','easy-fancybox'),
								),
							'default' => '1',
							'description' => '<em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('More options &raquo;','easy-fancybox') . '</a></em><br />' 
							)
						)
					),
				'Overlay' => array (
					'title' => __('Overlay','easy-fancybox'),
					'input' => 'multiple',
					'hide' => true,
					'options' => array(
						'overlayShow' => array (
							'id' => 'fancybox_overlayShow',
							'input' => 'checkbox',
							'noquotes' => true,
							'default' => '1',
							'description' => __('Show the overlay around content opened in FancyBox.','easy-fancybox')
							),
						'overlayOpacity' => array (
							'id' => 'fancybox_overlayOpacity',
							'title' => __('Opacity','easy-fancybox'),
							'label_for' => 'fancybox_overlayOpacity',
							'input' => 'text',
							'class' => 'small-text',
							'default' => '',
							'description' => __('Value between 0 and 1. ','easy-fancybox') . ' <em>' . __('Default:','easy-fancybox')  . ' 0.7</em><br />' 
							),
						'overlayColor' => array (
							'id' => 'fancybox_overlayColor',
							'title' => __('Color','easy-fancybox'),
							'label_for' => 'fancybox_overlayColor',
							'input' => 'text',
							'class' => 'small-text',
							'default' => '',
							'description' => __('Enter an HTML color value.','easy-fancybox') . ' <em>' . __('Default:','easy-fancybox')  . ' #777</em><br />' 
							)
						)
					),
				
				'Window' => array (
					'title' => __('Window','easy-fancybox'),
					'input' => 'multiple',
					'hide' => true,
					'options' => array(
						'p1' => array (
							'hide' => true,
							'description' => '<strong>' . __('Appearance','easy-fancybox') . '</strong><br />'
							),
						'showCloseButton' => array (
							'id' => 'fancybox_showCloseButton',
							'input' => 'checkbox',
							'noquotes' => true,
							'default' => '1',
							'description' => __('Show the (X) close button','easy-fancybox')
							),
						'showNavArrows' => array (
							'id' => 'fancybox_showNavArrows',
							'input' => 'checkbox',
							'noquotes' => true,
							'default' => '1',
							'description' => __('Show the gallery navigation arrows','easy-fancybox')
							),
						'p2' => array (
							'hide' => true,
							'description' => '<br /><strong>' . __('Color','easy-fancybox') . '</strong><br /><em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('Only available in the Pro version.','easy-fancybox') . '</a></em><br />'
							),
						'p3' => array (
							'hide' => true,
							'description' => '<br /><strong>' . __('Behavior','easy-fancybox') . '</strong><br />'
							),
						'autoScale' => array (
							'id' => 'fancybox_autoScale',
							'input' => 'checkbox',
							'noquotes' => true,
							'default' => '1',
							'description' => __('Scale large content down to fit in the browser viewport.','easy-fancybox')
							),
						'centerOnScroll' => array (
							'id' => 'fancybox_centerOnScroll',
							'input' => 'checkbox',
							'noquotes' => true,
							'default' => '1',
							'description' => __('Center while scrolling','easy-fancybox')
							),
						'speedIn' => array (
							'id' => 'fancybox_speedIn',
							'title' => __('Opening speed','easy-fancybox'),
							'label_for' => 'fancybox_speedIn',
							'input' => 'text',
							'sanitize_callback' => 'easy_fancybox_intval',
							'class' => 'small-text',
							'default' => '',
							),
						'speedOut' => array (
							'id' => 'fancybox_speedOut',
							'title' => __('Closing speed','easy-fancybox'),
							'label_for' => 'fancybox_speedOut',
							'input' => 'text',
							'sanitize_callback' => 'easy_fancybox_intval',
							'class' => 'small-text',
							'default' => '',
							),
						'changeFade' => array (
							'id' => 'fancybox_changeFade',
							'title' => __('Fade speed','easy-fancybox'),
							'label_for' => 'fancybox_changeFade',
							'input' => 'text',
							'sanitize_callback' => 'easy_fancybox_intval',
							'class' => 'small-text',
							'default' => '',
							'description' => '<br />' . __('Duration in milliseconds. Higher is slower.','easy-fancybox') . ' <em>' . __('Default:','easy-fancybox')  . ' 300</em><br />'
							),
						'p5' => array (
							'hide' => true,
							'description' => '<br /><strong>' . __('Advanced') . '</strong><br /><em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('Only available in the Pro version.','easy-fancybox') . '</a></em><br />'
							)
						)
					)
					
				)
			),
		'IMG' => array(
			'title' => __('Images & Inline content','easy-fancybox'),
			'input' => 'multiple',
			'options' => array(
				'intro' => array (
					'hide' => true,
					'description' => __('To make images open in an overlay, add their extension to the auto-detect field or use the class "fancybox" for its link. Clear field to switch off auto-enabling.','easy-fancybox') . '<br />'
					),
				'autoAttribute' => array (
					'id' => 'fancybox_autoAttribute',
					'title' => __('Auto-detect','easy-fancybox'),
					'label_for' => 'fancybox_autoAttribute',
					'input' => 'text',
					'class' => 'regular-text',
					'hide' => true,
					'default' => '.jpg .jpeg .png',
					'selector' => 'href*=',
					'description' => ' <em>' . __('Default:','easy-fancybox') . ' .jpg .gif .png</em><br /><br />'
					),
				'autoAttributeLimit' => array (
					'id' => 'fancybox_autoAttributeLimit',
					'title' => __('Apply to','easy-fancybox'),
					'label_for' => 'fancybox_autoAttributeLimit',
					'hide' => true,
					'input' => 'select',
					'options' => array(
						'' => __('All image links', 'easy-fancybox')
						),
					'default' => '',
					'description' => '<em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('More options &raquo;','easy-fancybox') . '</a></em><br />'
					),
				'autoGallery' => array (
					'id' => 'fancybox_autoGallery',
					'title' => __('Auto-gallery','easy-fancybox'),
					'label_for' => 'fancybox_autoGallery',
					'hide' => true,
					'input' => 'select',
					'options' => array(
						'' => __('Disabled'),
						'2' => __('All in one gallery','easy-fancybox')
						),
					'default' => '2',
					'description' => '<em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('More options &raquo;','easy-fancybox') . '</a></em><br />' .  __('When disabled, you can use the rel attribute to manually group image links together.','easy-fancybox') . ' ' . '<br />'
					),
				'autoSelector' => array (
					'id' => 'fancybox_autoGallerySelector',
					'title' => __('Section(s)','easy-fancybox'),
					'label_for' => 'fancybox_autoGallerySelector',
					'hide' => true,
					'input' => 'text',
					'class' => 'regular-text',
					'default' => 'article, div.hentry',
					'description' => '<em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('Only available in the Pro version.','easy-fancybox') . '</a> ' . __('Default:','easy-fancybox') . ' ' . 'article, div.hentry' . '</em><br />' . __('This applies when <em>Apply to</em> is set to <em>Limited to Sections</em> and/or <em>Auto-gallery</em> is set to <em>Galleries per Section</em>. Adapt it to conform with your theme.','easy-fancybox') . '<br /><br />'
					),
/*				'onStart' => array (
						'noquotes' => true,
						'default' => 'function() { window.clearTimeout(fb_timeout); }'
					),*/
				'transitionIn' => array (
					'id' => 'fancybox_transitionIn',
					'title' => __('Transition In','easy-fancybox'),
					'label_for' => 'fancybox_transitionIn',
					'input' => 'select',
					'options' => array(
						'' => __('Fade','easy-fancybox'),
						'elastic' => __('Elastic','easy-fancybox'),
						'none' => __('None','easy-fancybox')
						),
					'default' => 'elastic',
					'description' => ' '
					),
				'easingIn' => array (
					'id' => 'fancybox_easingIn',
					'title' => __('Easing In','easy-fancybox'),
					'label_for' => 'fancybox_easingIn',
					'input' => 'select',
					'options' => array(
						'linear' => __('Linear','easy-fancybox'),
						'' => __('Swing','easy-fancybox'),
						'easeOutBack' => __('Back','easy-fancybox')
						),
					'default' => 'easeOutBack',
					'description' => ' <em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('More options &raquo;','easy-fancybox') . '</a></em><br />'
					),
				'transitionOut' => array (
					'id' => 'fancybox_transitionOut',
					'title' => __('Transition Out','easy-fancybox'),
					'label_for' => 'fancybox_transitionOut',
					'input' => 'select',
					'options' => array(
						'' => __('Fade','easy-fancybox'),
						'elastic' => __('Elastic','easy-fancybox'),
						'none' => __('None','easy-fancybox')
						),
					'default' => 'elastic',
					'description' => ' '
					),
				'easingOut' => array (
					'id' => 'fancybox_easingOut',
					'title' => __('Easing Out','easy-fancybox'),
					'label_for' => 'fancybox_easingOut',
					'input' => 'select',
					'options' => array(
						'linear' => __('Linear','easy-fancybox'),
						'' => __('Swing','easy-fancybox'),
						'easeInBack' => __('Back','easy-fancybox')
						),
					'default' => 'easeInBack',
					'description' => ' <em><a href="http://4visions.nl/en/wordpress-plugins/easy-fancybox-pro/">' . __('More options &raquo;','easy-fancybox') . '</a></em><br />' . __('Easing effects only apply when Transition is set to Elastic. ','easy-fancybox') . '<br />'
					),
				'opacity' => array (
					'id' => 'fancybox_opacity',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '',
					'description' => __('Transparency fade during elastic transition.','easy-fancybox') . '<br />'
					),
				'autoDimensions' => array (
					'id' => 'fancybox_autoDimensions',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Try to adjust size to inline/html content.<br />If unchecked, the default dimensions below will always be used. This option does not apply when images are displayed.','easy-fancybox')
					),
				'width' => array (
					'id' => 'fancybox_width',
					'title' => __('Width'),
					'label_for' => 'fancybox_width',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '',
					'description' => ' '
					),
				'height' => array (
					'id' => 'fancybox_height',
					'title' => __('Height'),
					'label_for' => 'fancybox_height',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => ''
					),
				'padding' => array (
					'id' => 'fancybox_padding',
					'title' => __('Border'),
					'label_for' => 'fancybox_padding',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '',
					'description' => '<em>' . __('Default:','easy-fancybox')  . ' 560 x 340 x 10</em><br /><br />'
					),
				'titleShow' => array (
					'id' => 'fancybox_titleShow',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Show title','easy-fancybox')
					),
				'titlePosition' => array (
					'id' => 'fancybox_titlePosition',
					'title' => __('Title Position','easy-fancybox'),
					'label_for' => 'fancybox_titlePosition',
					'input' => 'select',
					'options' => array(
						'' => __('Float','easy-fancybox'), // same as 'float'
						'outside' => __('Outside','easy-fancybox'),
						'inside' => __('Inside','easy-fancybox'),
						'over' => __('Overlay','easy-fancybox')
						),
					'default' => 'over',
					'description' => ' '
					),
				'titleFromAlt' => array (
					'id' => 'fancybox_titleFromAlt',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Allow title from thumbnail alt tag','easy-fancybox')
					),
/*						'titleFormat' => array (
					'id' => 'fancybox_titleFormat',
					'title' => __('Title format','easy-fancybox'),
					'label_for' => 'fancybox_titleFormat',
					'input' => 'select',
					'options' => array(
						'' => __('Default FancyBox style','easy-fancybox'),
						'function(title, currentArray, currentIndex, currentOpts) { return \'<div style="font-face:Arial,sans-serif;text-align:left"><span style="float:right;font-size:large"><a href="javascript:;" onclick="$.fancybox.close();">' . __('Close','easy-fancybox') . ' <img src="' . plugins_url(FANCYBOX_SUBDIR, __FILE__) . '/fancybox/fancy_close.png" /></a></span>\' + (title && title.length ? \'<b style="display:block;margin-right:80px">\' + title + \'</b>\' : \'\' ) + \'' . __('Image','easy-fancybox') . '\' + (currentIndex + 1) + \' ' . __('of','easy-fancybox') . ' \' + currentArray.length + \'</div>\';
}' => __('Mimic Lightbox2 style','easy-fancybox'),
						),
					'noquotes' => true,
					'default' => '',
					'description' =>  '<br />' . __('To improve Lightbox2 style disable Show close button and set titleposition to Inside or Outside','easy-fancybox') . '<br />'
					),*/
				'tag' => array (
					'hide' => true,
					'default' => 'a, area, li a'
					),
				'class' => array (
					'hide' => true,
					'default' => 'fancybox'
					)
				)
			),

		'PDF' => array(
			'title' => __('PDF','easy-fancybox'),
			'input' => 'multiple',			
			'options' => array(
				'intro' => array (
					'hide' => true,
					'description' => __('To make any PDF document file open in an overlay, switch on auto-detect or use the class "fancybox-pdf" for its link.','easy-fancybox') . '<br />'
					),
				'autoAttribute' => array (
					'id' => 'fancybox_autoAttributePDF',
					'input' => 'checkbox',
					'hide' => true,
					'default' => '1',
					'selector' => 'href*=".pdf"',
					'description' => __('Auto-detect','easy-fancybox') . '<br />'
					),
				'tag' => array (
					'hide' => true,
					'default' => 'a, area, li a'
					),
				'class' => array (
					'hide' => true,
					'default' => 'fancybox-pdf'
					),
				'type' => array (
					'default' => 'html'
					),
				'width' => array (
					'id' => 'fancybox_PDFwidth',
					'title' => __('Width'),
					'label_for' => 'fancybox_PDFwidth',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '90%',
					'description' => ' '
					),
				'height' => array (
					'id' => 'fancybox_PDFheight',
					'title' => __('Height'),
					'label_for' => 'fancybox_PDFheight',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '90%'
					),
				'padding' => array (
					'id' => 'fancybox_PDFpadding',
					'title' => __('Border'),
					'label_for' => 'fancybox_PDFpadding',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '10',
					'description' => '<br /><br />'
					),
/*				'autoScale' => array (
					'noquotes' => true,
					'default' => 'false'
					),*/
				'titleShow' => array (
					'id' => 'fancybox_PDFtitleShow',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '',
					'description' => __('Show title','easy-fancybox')
					),
				'titlePosition' => array (
					'id' => 'fancybox_PDFtitlePosition',
					'title' => __('Title Position','easy-fancybox'),
					'label_for' => 'fancybox_PDFtitlePosition',
					'input' => 'select',
					'options' => array(
						'float' => __('Float','easy-fancybox'), // same as 'float'
						'outside' => __('Outside','easy-fancybox'),
						'inside' => __('Inside','easy-fancybox')
						//,'over' => __('Overlay','easy-fancybox')
						),
					'default' => 'float',
					),
				'titleFromAlt' => array (
					'id' => 'fancybox_PDFtitleFromAlt',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Allow title from thumbnail alt tag','easy-fancybox')
					),
/*				'transitionOut' => array (
					'id' => 'fancybox_PDFtransitionOut',
					'title' => __('Transition Out','easy-fancybox'),
					'label_for' => 'fancybox_PDFtransitionOut',
					'input' => 'select',
					'class' => '',
					'options' => array(
						'fade' => __('Fade','easy-fancybox'),
						//'elastic' => __('Elastic','easy-fancybox'),
						'none' => __('None','easy-fancybox')
						),
					'default' => 'fade',
					),
				'easingIn' => array (
					'default' => 'swing'
					),*/
				'autoDimensions' => array (
					'noquotes' => true,
					'default' => 'false'
					),
				'scrolling' => array (
					'default' => 'no',
					),
				'onStart' => array ( 
					'noquotes' => true,
//					'default' => 'function(selectedArray, selectedIndex, selectedOpts) { selectedOpts.content = \'<embed src="\' + selectedArray[selectedIndex].href + \'#nameddest=self&page=1&view=FitH,0&zoom=80,0,0" type="application/pdf" height="100%" width="100%" />\' }'
					'default' => 'function(selectedArray, selectedIndex, selectedOpts) { selectedOpts.content = \'<object data="\' + selectedArray[selectedIndex].href + \'#toolbar=1&amp;navpanes=0&amp;nameddest=self&amp;page=1&amp;view=FitH,0&amp;zoom=80,0,0" type="application/pdf" height="100%" width="100%"><param name="src" value="\' + selectedArray[selectedIndex].href + \'#toolbar=1&amp;navpanes=0&amp;nameddest=self&amp;page=1&amp;view=FitH,0&amp;zoom=80,0,0" /><embed src="\' + selectedArray[selectedIndex].href + \'#toolbar=1&amp;navpanes=0&amp;nameddest=self&amp;page=1&amp;view=FitH,0&amp;zoom=80,0,0" type="application/pdf" height="100%" width="100%" /><a href="\' + selectedArray[selectedIndex].href + \'" style="display:block;font-size:18px;position:absolute;top:50%;width:100%;text-align:center">\' + jQuery(selectedArray[selectedIndex]).html() + \'</a></object>\' }'
					),
/*				'onClosed' => array ( 
					'noquotes' => true,
					'default' => 'function() { $("#fancybox-content").empty(); }'
					)*/
 				)
			),

		'SWF' => array(
			'title' => __('SWF','easy-fancybox'),
			'input' => 'multiple',
			'options' => array(
				'intro' => array (
					'hide' => true,
					'description' => __('To make any Flash (.swf) file open in an overlay, switch on auto-detect or use the class "fancybox-swf" for its link.','easy-fancybox') . '<br />'
					),
				'autoAttribute' => array (
					'id' => 'fancybox_autoAttributeSWF',
					'input' => 'checkbox',
					'hide' => true,
					'default' => '1',
					'selector' => 'href*=".swf"',
					'description' => __('Auto-detect','easy-fancybox') . '<br />'
					),
				'tag' => array (
					'hide' => true,
					'default' => 'a, area, li a'
					),
				'class' => array (
					'hide' => true,
					'default' => 'fancybox-swf'
					),
				'type' => array( 
					'default' => 'swf' 
					),
				'width' => array (
					'id' => 'fancybox_SWFWidth',
					'title' => __('Width'),
					'label_for' => 'fancybox_SWFWidth',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'options' => array(),
					'default' => '680',
					'description' => ' '
					),
				'height' => array (
					'id' => 'fancybox_SWFHeight',
					'title' => __('Height'),
					'label_for' => 'fancybox_SWFHeight',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'options' => array(),
					'default' => '495',
					),
				'padding' => array (
					'id' => 'fancybox_SWFpadding',
					'title' => __('Border'),
					'label_for' => 'fancybox_SWFpadding',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '0',
					'description' => '<br /><br />'
					),
				'titleShow' => array (
					'id' => 'fancybox_SWFtitleShow',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '',
					'description' => __('Show title','easy-fancybox')
					),
				'titlePosition' => array (
					'id' => 'fancybox_SWFtitlePosition',
					'title' => __('Title Position','easy-fancybox'),
					'label_for' => 'fancybox_SWFtitlePosition',
					'input' => 'select',
					'options' => array(
						'float' => __('Float','easy-fancybox'), // same as 'float'
						'outside' => __('Outside','easy-fancybox'),
						'inside' => __('Inside','easy-fancybox')
						//,'over' => __('Overlay','easy-fancybox')
						),
					'default' => 'float',
					),
				'titleFromAlt' => array (
					'id' => 'fancybox_SWFtitleFromAlt',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Allow title from thumbnail alt tag','easy-fancybox')
					),
				'swf' => array (
					'noquotes' => true,
					'default' => '{\'wmode\':\'opaque\',\'allowfullscreen\':true}'
					)
				)
			),

		'YouTube' => array(
			'title' => __('YouTube','easy-fancybox'),
			'input' => 'multiple',			
			'options' => array(
				'intro' => array (
					'hide' => true,
					'description' => __('To make any YouTube movie open in an overlay, switch on auto-detect or use the class "fancybox-youtube" for its link.','easy-fancybox') . '<br />'
					),
				'autoAttribute' => array (
					'id' => 'fancybox_autoAttributeYoutube',
					'input' => 'checkbox',
					'hide' => true,
					'default' => '1',
					'selector' => 'href*="youtube.com/"',
					//'href-replace' => "return attr.replace(new RegExp('watch\\\?v=', 'i'), 'v/')",
					'description' => __('Auto-detect','easy-fancybox')
					),
				'autoAttributeAlt' => array (
					'id' => 'fancybox_autoAttributeYoutubeShortURL',
					'input' => 'checkbox',
					'hide' => true,
					'default' => '1',
					'selector' => 'href*="youtu.be/"',
					//'href-replace' => "return attr.replace(new RegExp('youtu.be', 'i'), 'www.youtube.com/v')",
					'description' => __('Auto-detect Short links','easy-fancybox') . '<br />'
					),
				'tag' => array (
					'hide' => true,
					'default' => 'a, area, li a'
					),
				'class' => array (
					'hide' => true,
					'default' => 'fancybox-youtube'
					),
				'type' => array( 
					'default' => 'iframe' 
					),
				'width' => array (
					'id' => 'fancybox_YoutubeWidth',
					'title' => __('Width'),
					'label_for' => 'fancybox_YoutubeWidth',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '640',
					'description' => ' '
					),
				'height' => array (
					'id' => 'fancybox_YoutubeHeight',
					'title' => __('Height'),
					'label_for' => 'fancybox_YoutubeHeight',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '390',
					),
				'padding' => array (
					'id' => 'fancybox_Youtubepadding',
					'title' => __('Border'),
					'label_for' => 'fancybox_Youtubepadding',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '0',
					'description' => '<br /><br />'
					),
				'titleShow' => array (
					'id' => 'fancybox_YoutubetitleShow',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '',
					'description' => __('Show title','easy-fancybox')
					),
				'titlePosition' => array (
					'id' => 'fancybox_YoutubetitlePosition',
					'title' => __('Title Position','easy-fancybox'),
					'label_for' => 'fancybox_YoutubetitlePosition',
					'input' => 'select',
					'options' => array(
						'float' => __('Float','easy-fancybox'), // same as 'float'
						'outside' => __('Outside','easy-fancybox'),
						'inside' => __('Inside','easy-fancybox')
						//,'over' => __('Overlay','easy-fancybox')
						),
					'default' => 'float',
					),
				'titleFromAlt' => array (
					'id' => 'fancybox_YoutubetitleFromAlt',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Allow title from thumbnail alt tag','easy-fancybox')
					),
/*				'swf' => array (
					'noquotes' => true,
					'default' => '{\'wmode\':\'opaque\',\'allowfullscreen\':true}'
					), */
				'onStart' => array ( 
					'noquotes' => true,
					'default' => 'function(selectedArray, selectedIndex, selectedOpts) { selectedOpts.href = selectedArray[selectedIndex].href.replace(new RegExp(\'youtu.be\', \'i\'), \'www.youtube.com/embed\').replace(new RegExp(\'watch\\\?v=([a-z0-9\_\-]+)(&|\\\?)?(.*)\', \'i\'), \'embed/$1?version=3&$3\') }'
					)
				)
			),

		'Vimeo' => array(
			'title' => __('Vimeo','easy-fancybox'),
			'input' => 'multiple',			
			'options' => array(
				'intro' => array (
					'hide' => true,
					'description' => __('To make any Vimeo movie open in an overlay, switch on auto-detect or use the class "fancybox-vimeo" for its link.','easy-fancybox') . '<br />'
					),
				'autoAttribute' => array (
					'id' => 'fancybox_autoAttributeVimeo',
					'input' => 'checkbox',
					'hide' => true,
					'default' => '1',
					'selector' => 'href*="vimeo.com/"',
					//'href-replace' => "return attr.replace(new RegExp('/([0-9])', 'i'), '/moogaloop.swf?clip_id=$1')",
					'description' => __('Auto-detect','easy-fancybox') . '<br />'
					),
				'tag' => array (
					'hide' => true,
					'default' => 'a, area, li a'
					),
				'class' => array (
					'hide' => true,
					'default' => 'fancybox-vimeo'
					),
				'type' => array( 
					'default' => 'iframe' 
					),
				'width' => array (
					'id' => 'fancybox_VimeoWidth',
					'title' => __('Width'),
					'label_for' => 'fancybox_VimeoWidth',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '640',
					'description' => ' '
					),
				'height' => array (
					'id' => 'fancybox_VimeoHeight',
					'title' => __('Height'),
					'label_for' => 'fancybox_VimeoHeight',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '360'
					),
				'padding' => array (
					'id' => 'fancybox_Vimeopadding',
					'title' => __('Border'),
					'label_for' => 'fancybox_Vimeopadding',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '0',
					'description' => '<br /><br />'
					),
				'titleShow' => array (
					'id' => 'fancybox_VimeotitleShow',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '',
					'description' => __('Show title','easy-fancybox')
					),
				'titlePosition' => array (
					'id' => 'fancybox_VimeotitlePosition',
					'title' => __('Title Position','easy-fancybox'),
					'label_for' => 'fancybox_VimeotitlePosition',
					'input' => 'select',
					'options' => array(
						'float' => __('Float','easy-fancybox'), // same as 'float'
						'outside' => __('Outside','easy-fancybox'),
						'inside' => __('Inside','easy-fancybox')
						//,'over' => __('Overlay','easy-fancybox')
						),
					'default' => 'float',
					),
				'titleFromAlt' => array (
					'id' => 'fancybox_VimeotitleFromAlt',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Allow title from thumbnail alt tag','easy-fancybox')
					),
/*				'swf' => array (
					'noquotes' => true,
					'default' => '{\'wmode\':\'opaque\',\'allowfullscreen\':true}'
					),*/
				'onStart' => array ( 
					'noquotes' => true,
					'default' => 'function(selectedArray, selectedIndex, selectedOpts) { selectedOpts.href = selectedArray[selectedIndex].href.replace(new RegExp(\'http://(www\\.)?vimeo\\.com/([0-9]+)(&|\\\?)?(.*)\', \'i\'), \'http://player.vimeo.com/video/$2?$4\') }'
					)
				)
			),


		'Dailymotion' => array(
			'title' => __('Dailymotion','easy-fancybox'),
			'input' => 'multiple',			
			'options' => array(
				'intro' => array (
					'hide' => true,
					'description' => __('To make any Dailymotion movie open in an overlay, switch on auto-detect or use the class "fancybox-dailymotion" for its link.','easy-fancybox') . '<br />'
					),
				'autoAttribute' => array (
					'id' => 'fancybox_autoAttributeDailymotion',
					'input' => 'checkbox',
					'hide' => true,
					'default' => '1',
					'selector' => 'href*="dailymotion.com/"',
					//'href-replace' => "return attr.replace(new RegExp('/video/', 'i'), '/swf/')",
					'description' => __('Auto-detect','easy-fancybox') . '<br />'
					),
				'tag' => array (
					'hide' => true,
					'default' => 'a, area, li a'
					),
				'class' => array (
					'hide' => true,
					'default' => 'fancybox-dailymotion'
					),
				'type' => array( 
					'default' => 'iframe' 
					),
				'width' => array (
					'id' => 'fancybox_DailymotionWidth',
					'title' => __('Width'),
					'label_for' => 'fancybox_DailymotionWidth',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '560',
					'description' => ' '
					),
				'height' => array (
					'id' => 'fancybox_DailymotionHeight',
					'title' => __('Height'),
					'label_for' => 'fancybox_DailymotionHeight',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '315'
					),
				'padding' => array (
					'id' => 'fancybox_DailymotionPadding',
					'title' => __('Border'),
					'label_for' => 'fancybox_DailymotionPadding',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '0',
					'description' => '<br /><br />'
					),
				'titleShow' => array (
					'id' => 'fancybox_DailymotiontitleShow',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '',
					'description' => __('Show title','easy-fancybox')
					),
				'titlePosition' => array (
					'id' => 'fancybox_DailymotiontitlePosition',
					'title' => __('Title Position','easy-fancybox'),
					'label_for' => 'fancybox_DailymotiontitlePosition',
					'input' => 'select',
					'options' => array(
						'float' => __('Float','easy-fancybox'), // same as 'float'
						'outside' => __('Outside','easy-fancybox'),
						'inside' => __('Inside','easy-fancybox')
						//,'over' => __('Overlay','easy-fancybox')
						),
					'default' => 'float',
					),
				'titleFromAlt' => array (
					'id' => 'fancybox_DailymotiontitleFromAlt',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Allow title from thumbnail alt tag','easy-fancybox')
					),
/*				'swf' => array (
					'noquotes' => true,
					'default' => '{\'wmode\':\'opaque\',\'allowfullscreen\':true}'
					),*/
				'onStart' => array ( 
					'noquotes' => true,
					'default' => 'function(selectedArray, selectedIndex, selectedOpts) { selectedOpts.href = selectedArray[selectedIndex].href.replace(new RegExp(\'/video/(.*)\', \'i\'), \'/embed/video/$1\') }'
					)
				)
			),
			
/*		'Tudou' => array(
			'id' => 'fancybox_Tudou',
			'title' => __('Tudou','easy-fancybox'),
			'label_for' => '',
			'input' => 'multiple',
			'class' => '',			'description' =>  '',
			'options' => array(
				 'autoAttributeTudou' => array (
					'id' => 'fancybox_autoAttributeTudou',
					'label_for' => '',
					'input' => 'checkbox',
					'class' => '',
					'options' => array(),
					'hide' => true,
					'default' => '1',
					'description' => __('Tudou links','easy-fancybox')
					) 
				)					
			),*/
			
/*		'Animoto' => array(),

Example ANIMOTO page link http://animoto.com/play/Kf9POzQMSOGWyu41gtOtsw should become
http://static.animoto.com/swf/w.swf?w=swf/vp1&f=Kf9POzQMSOGWyu41gtOtsw&i=m

*/

		'iFrame' => array(
			'title' => __('iFrames','easy-fancybox'),
			'input' => 'multiple',			
			'options' => array(
				'intro' => array (
					'hide' => true,
					'description' => __('To make a website or HTML document open in an overlay, use the class "fancybox-iframe" for its link.','easy-fancybox') . '<br /><br />'
					),
				'tag' => array (
					'hide' => true,
					'default' => 'a, area, li a'
					),
				'class' => array (
					'hide' => true,
					'default' => 'fancybox-iframe'
					),
				'type' => array (
					'default' => 'iframe'
					),
				'width' => array (
					'id' => 'fancybox_iFramewidth',
					'title' => __('Width'),
					'label_for' => 'fancybox_iFramewidth',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '70%',
					'description' => ' '
					),
				'height' => array (
					'id' => 'fancybox_iFrameheight',
					'title' => __('Height'),
					'label_for' => 'fancybox_iFrameheight',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '90%',
					),
				'padding' => array (
					'id' => 'fancybox_iFramepadding',
					'title' => __('Border'),
					'label_for' => 'fancybox_iFramepadding',
					'input' => 'text',
					'sanitize_callback' => 'easy_fancybox_intval',
					'class' => 'small-text',
					'default' => '0',
					'description' => '<br /><br />'
					),
				'scrolling' => array (
					'default' => 'auto'
					),
				'titleShow' => array (
					'id' => 'fancybox_iFrametitleShow',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '',
					'description' => __('Show title','easy-fancybox')
					),
				'titlePosition' => array (
					'id' => 'fancybox_iFrametitlePosition',
					'title' => __('Title Position','easy-fancybox'),
					'label_for' => 'fancybox_iFrametitlePosition',
					'input' => 'select',
					'options' => array(
						'float' => __('Float','easy-fancybox'), // same as 'float'
						'outside' => __('Outside','easy-fancybox'),
						'inside' => __('Inside','easy-fancybox')
						//,'over' => __('Overlay','easy-fancybox')
						),
					'default' => 'float',
					),
				'titleFromAlt' => array (
					'id' => 'fancybox_iFrametitleFromAlt',
					'input' => 'checkbox',
					'noquotes' => true,
					'default' => '1',
					'description' => __('Allow title from thumbnail alt tag','easy-fancybox')
					)
				)
			)
			
		);
}
