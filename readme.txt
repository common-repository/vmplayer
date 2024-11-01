=== VMPlayer ===
Contributors: ganddser  
Plugin URI: https://gandenterprisesinc.com/vmplayer
Donate link: https://paypal.me/gandinc
Tags: Radio streaming,player,Shoutcast,Icecast,popup window,popout
Requires at least: 5.0
Tested up to: 5.9.2
Stable tag: 1.0.1
Author URI: https://gandenterprisesinc.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

VMPlayer (Vouscast Media Player) is a popout player specifically designed for Shoutcast and Icecast radio.


== Description ==

VMPlayer pop-out player helps your listeners stay tuned to your stream while they continue to browse the rest of your website. Without losing the radio or having to start listening ever ytime they land on a new page.

Useful Features 

*Easily add your stream URL.
*Customize player color and size.
*Customize popout button color and size.
*Place shortcode to show popout button anywhere (sidebar, Page or post).
*Social Share options.
*Live listener count.
*Stream quality.
*Genre.
*Last played.
*Artist or song artwork, when available.


== Installation ==

= Minimum Requirements =

* WordPress 5.0 or greater
* PHP version 5.6 or greater
* MySQL version 5.0 or greater

= We recommend your host supports: =

* PHP version 7.0 or greater
* MySQL version 5.6 or greater
* WordPress Memory limit of 64 MB or greater (128 MB or higher is preferred)

== Installation ==

From your WP plugins page press add new and search for VMPlayer. Install and activate. - After installation and Activation

From the Admin menu click VMPlayer

1. Add your stream URL e.g http://server:port

2. Size the player window and button to your preferred size. (Note: For Firefox users the vol control gets streched if the window is smaller than 605px wide, we're working on a fix for this).

3. Go to your pages and find the VMPlayer Page. This is important: In order to make sure only the pop-out player shows in the window
you'll need to change the page template, there are two or three ways of doing this.

Note: If your pages are automatically added to your menus be sure to exclude the VMPlayer page from the list.

3.a. Change page template to Elementor Canvas or Redux Canvas if you used either of these plugins to build your pages
then click edit with Elementor if you have Elementor Page Builder installed.

3.b. You can hide the header and footer using custom CSS. Your theme may have multiple options to add CSS, but we recommend the WP core option. Login as administrator then visit Appearance > Customizer > Additional CSS.

3.c. Find page’s ID.

3.d. There are two ways to find your page ID, first method is to open your page as editor your page ID will be included with the URL and will look like this "post=1234"

3.e. The second method is to go to your page like a normal user and open the inspector (right-click menu or F12 or CTRL+SHIFT+I). When you're in the inspect menu scroll up until you see <Body ...-page-1234> this number is the ID you need copy it.

4. Return to the customizer and paste the following into the Additional CSS input field

[ .page-id-1234 header, .page-id-1234 footer {
display: none !important;
} ]

4.a Replace the sample page ID with your actual ID

4.b. You may have to manually turn off sidebars if your theme do not have a canvas template for example WPBakery users who have no canvas template will have to go to the page and, Remove margins, Hide featured image on the single post, Sidebar position - Hide

That's it for page setup.

Final step: Copy the pop-out button shortcode from the VMPlayer dashboard and install it on your sidebar or page or post where you want the button to show up.

Your users/listeners can now listen to your radio uninterrupted while they browse your site.
 

== Uninstall ==

Deactivate the VMPlayer from the WP Plugins page then delete it. Note deleting the plugin will remove all of it's data except for the shortcode, you'll have to delete manually if you don't plan on reinstalling VMPlayer.

== Frequently Asked Questions ==

Q. The player in the popup window, but when I click the play button nothing happens, what's the problem?
A. Most likely, you forgot to add a valid stream URL. Please make sure the stream includes the server address and port number seperate by a : 

Q. Why am I not seeing any meta data?
A. Your server host might be employing methods which blocks the player from access this information.

Q. Why do I have to click the play button after opening the popout window?
A. This is because by default browsers disable autoplay for audio and video. Autoplay is expected to be a user initiated activite. We      recommend leavng it this way.

== Screenshots ==
1. **VMPlayer Dashboard.** Just a glimpse of the player settings page.
2. **Player with artwork.** This shows the song artwork.
3. **Player without artwork.** This shows the player default logo when artwork is unavailable.
4. **Player social share methods.** This shows listener count and social share buttons.


== Changelog ==

=1.0.1
*Fixed error which caused player to not load in window
=1.0.0
* Initial Public Release


Support our work, click on the donate button and buy us a coffee. Or switch your stream to one of our awesome streaming packages <a href="https://vouscast.com/">Vouscast Media Platform</a>