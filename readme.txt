=== Alligator Popup ===
Contributors: numeeja
Donate link: http://cubecolour.co.uk/wp
Tags: popup, popups, popup window, jQuery, shortcode, simple, popup link, message, popup message,
Requires at least: 3.6.1
Tested up to: 3.6.1
Stable tag: 1.0.0
License: GPLv3

Add popups to your site. Add links to pages/posts via a shortcode which will be opened in a popup window.

== Description ==

This plugin allows you to add links to pages/posts which will be opened in a popup window.

#### Shortcode:
Add a popup shortcode where you would like a link to appear within your post or page text. The shortcode has parameters for url, height and width and should be in the format:

`[popup url="http://cubecolour.co.uk/wp" height="300" width="300"]Link Text[/popup]`

Include your own Link Text and values for the url and the width & height of the popup.

If no values are entered for height and width, defaults of 400px are used for the width & height of the popup window.

#### HTML Link:
Instead of using the shortcode you can include your link in the format:
`<a href="http://cubecolour.co.uk/wp" class="popup" data-height="300" data-width="300">Link Text</a>`

This might be useful in a text widget, or you can build the link in a template file of your theme.

#### Note:
If you are using any other plugin (or a theme) that uses a shortcode with the name 'popup', you will not be able to use this plugin.

On mobile devices such as iPads which don't use browser windows, the link will open in a new tab. 

This plugin was written in response to a post by a WordPress.org forum user who promised to wrestle an alligator if his problem with creating popups was solved.


== Installation ==

1. Upload the plugin folder to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What is the syntax of the shortcode? =

`[popup url="http://cubecolour.co.uk/wp" height="300" width="300"]Link Text[/popup]`

= What is the syntax of a link if I'm not using the shortcode? =

`<a href="http://cubecolour.co.uk/wp" class="popup" data-height="300" data-width="300">Link Text</a>`

= Why doesn't it work? =

It does. You probably did something wrong. Feel free to ask for help on the forum.

= How do I wrestle an alligator? =

This page has some handy tips:  
http://www.artofmanliness.com/2010/10/19/how-to-wrestle-an-alligator/

== Screenshots ==

1. A popup

== Changelog ==

= 1.0.0 =
* Initial Version

== Upgrade Notice ==

= 1.0.0 =
* Initial Version