<?php
/*
Plugin Name: Booking Calendar
Plugin URI: http://wpbookingcalendar.com/demo/
Description: Online reservation and availability checking service for your site.
Version: 4.1.2
Author: wpdevelop
Author URI: http://wpbookingcalendar.com/
Tested WordPress Versions: 2.8.3 - 3.5.2
*/

/*  Copyright 2009 - 2013  www.wpbookingcalendar.com  (email: info@wpbookingcalendar.com),

    www.wpdevelop.com - custom wp-plugins development & WordPress solutions.

    This file (and only this file wpdev-booking.php) is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// <editor-fold defaultstate="collapsed" desc=" T O D O : & Changelog lists ">
/*
-----------------------------------------------
Change Log and Features for Future Releases :
-----------------------------------------------
= 4.1.3 =
* Personal / Business Small / Business Medium / Business Large / MultiUser versions features:
 *
* Features and issue fixings in All versions:
 * 

= 4.1.2 =
* Personal / Business Small / Business Medium / Business Large / MultiUser versions features:
 * Fix issue with links in pagination at the Resources page.
* Features and issue fixings in All versions:
 * Correct of font size in the links of "Powered by" notice.

= 4.1.1 =
* Personal / Business Small / Business Medium / Business Large / MultiUser versions features:
 * Fix issue of showing the warning message "mktime() expects parameter 1 to be long, string given in" if the time is not selected.
* Features and issue fixings in All versions:
 * Fix issue of showing the "You do not have sufficient permissions to access this page." error.

= 4.1 =
* Personal / Business Small / Business Medium / Business Large / MultiUser versions features:
 * Check-in and check-out days visible like in the other booking systems (mark half of day,  instead of the clock icon).  This feature is active if the "Use check-in/out time" option is checked at the General Booking Settings page (Business Small/Medium/Large, MultiUser)
 * New type of season filter - just selecting the specific dates during a year(s). /Removing the time filter/ (Business Medium/Large, MultiUser)
 * Emails templates (in subject and content of email templates) support any shortcodes, which you are used at booking form. You can use the shortcodes in the same way as you are used it in the bottom form at Settings Fields page. (Personal, Business Small/Medium/Large, MultiUser)
 * Possibility to use the "visitor email" shortcode in the email template at the field "From", so if the admin click  on reply button he will send email directly to the visitor  (Personal, Business Small/Medium/Large, MultiUser)
 * New shortcode [bookingselect] for selecting in selectbox the specific booking form, instead of using the customizations of PHP theme files. Example: [bookingselect type='2,3,4' form_type='standard' nummonths=1 label='Please select the resource: '] (Personal, Business Small/Medium/Large, MultiUser)
 * Search. Possibility to use new parameters in the seacrh form: searchresults="URL of search  results", noresultstitle="Title of search results, when  nothing fount", searchresultstitle="Title of search results" Example: [bookingsearch searchresults="http://server.com/custom-search-results/" noresultstitle="Nothing Found" searchresultstitle="Search results"] ( Business Large, MultiUser)
 * Search. Possibility to show the search results in a  new seperate page, diferent from search form page. Use this shortcode: [bookingsearchresults] for showing the search  results inside of this page. Inside of the search form you will need to use this parameter:  bookingsearchresults - for definition of URL of search  results page. ( Business Large, MultiUser)
 * Search. Search  widget (Business Large, MultiUser)
 * Search. Availability Search Form (Booking > Settings > Search page) can have as parameter any "CUSTOM FIELDS" from the posts/pages, where you are inserted the booking form shortcodes. Please use only the custom field(s) with the names, which is starting with the "booking_" term. Exmaple: In the post or page, you can have the custom field like this: booking_width : 50. In the Settings Search form you can use this selectbox: <select name="booking_width" id="booking_width" ><option value="">Any</option><option value="50">50</option><option value="75">75</option></select> ( Business Large, MultiUser)
 * Search. Limit the search results based on the availability per user. Showing availability in search  results only for the specific users. Example of usage search  form shortcode: [bookingsearch users="1,2"]  ; where 1,2 - its a ID list of users.
 * Search. Add the translation possibility  for the "[booking info]" and "[booking_resource_title]" section  at the search  results, using the [lang=LOCALE] shortcode (Business Large, MultiUser)
 * Search. Usage the translation(s) of the Subject and Excerpt for the search  result in a format: <!--[lang=en_US]English translation<!-- --><!--[lang=pl_PL]Polish translation<!-- --><!--[lang=ru_RU]Russian  translation<!-- -->
 * Search. Fix issue of not updating the cost hint in the booking form, when the visitor is redirected from search form (Business Large, MultiUser)
 * Form Fields. Define for the each CUSTOM FORM the CUSTOM CONTENT, which is showing in the email templates (shortcode - [content]), and in the booking listing page. (Business Medium/Large)
 * Form Fields. Define the default CUSTOM FORM for the specific resource at the Booking > Resources page. (Business Medium/Large)
 * Form fields. Several  new default templates for reseting of booking forms.  (Personal, Business Small/Medium/Large, MultiUser)
 * Possibility to use the "url" parameter in the shortcodes: [visitorbookingediturl], [visitorbookingcancelurl], [visitorbookingpayurl] on the Booking > Settings > Emails page, for setting different page URL of the specific action . Example: [visitorbookingpayurl url="http://www.server.com/custom-page/"]  (Personal, Business Small/Medium/Large, MultiUser)
 * Showing the correct  content of the booking form at the Booking Listing page, if for the booking was used the Custom form. (Business Medium/Large)
 * Fix issue of not using the custom form, when editing the booking, which  was done in the custom form. For correct using of this feature, you must  correctly define the default custom  form for the specific resource at the Booking > Resources page. ( Business Medium/Large, MultiUser)
 * Possibility to show booking details in payment form ( Business Small/Medium/Large, MultiUser)
 * Customization of the booking title (ID or Name,... of the booking form, etc) in the Calendar Overview page  (Personal, Business Small/Medium/Large, MultiUser)
 * Configuration of the shortcodes: search form, search  results and the selection of booking forms; in the popup configuration dialog at the edit post page, using the booking calendar button at edit toolbar. (Personal, Business Small/Medium/Large, MultiUser)
 * Show the inactive rates and season filters for the availability  as grayed at the Settings page ( Business Medium/Large, MultiUser)
 * Do not show the Cost in mouseover tooltip, if the cost = 0 ( Business Medium/Large, MultiUser)
 * Possibility to use the additional cost per each night in the same way as with days at the Resources - Advanced cost page ( Business Medium/Large, MultiUser)
 * Possibility  to set the different colors of the for the days with the different rates. Each such date cell (which have the different rate) is have the specific CSS class in format: rate_150 or rate_300, where 150 and 300 its rate (cost) for the specific date. So inside of the some CSS file (for example: ../booking/css/client.css ) you can use construction like this:  .datepick-inline table.datepick td.rate_300 a{ background: #F00; } ( Business Medium/Large, MultiUser)
 * Fix issue of not possibility to select  the booking resources at the Booking Calendar widget, if your booking resources displayed at the several  pages in the Booking - Resources page.  (Personal, Business Small/Medium/Large, MultiUser)
 * Fix of not possibility to use the HTML tags in excerpts for the [booking_info] shortcode in the search results. (Business Large, MultiUser)
 * Fix issue of not possibility to modify/save the "Cancel Return URL from PayPal" at the settings page. (Business Small/Medium/Large, MultiUser)
 * Fix correct link of edit users profile at the Settings Users menu page (MultiUser)
 * Fix issue of auto cancellation pending not successfully payed bookings after specific time  (Business Small/Medium/Large, MultiUser).
 * Fix issue of not showing correct translation of message: 'The booking has been canceled successfully', if visitor is cancel the reservation.
 * Fix issue of showing the correct availability in calendar with specific capacity (higher than 1), if the "season  filter(s) availability" are applied to the "child" booking resources (Business Large, MultiUser)
 * Fix issue of generating the JavaScript error at the page, when using the conditional season  filter, where is not selected any week days, even if this filter do not apply to the any of the days.
 * Fix issue of not correct showing values of checkbox fields, if the booking is saved to the "child" resource (Business Large, MultiUser).
 * Fix issue of disappearing the booking resource, if at the Resource menu is assign to the booking resource the parent element as itself (Business Large, MultiUser).
 * Fix issue of selecting the dates in correct  format in calendar after redirection from the search results  (Business Large, MultiUser).
 * Fix issue of not applying to the all "regular users" the "Deposit activation" feature from the General Booking Settings page in MultiUser version. (MultiUser)
 * Fix issue when Regular Users can see the bookings from other user(s) in MultiUser version, after reconfiguration parameters in filter tab.  (MultiUser)
 * Fix issue of not showing the cost in tooltip, if the calendar is showing more than 1 year.(Business Medium/Large, MultiUser).
 * Fix issue of not correct  showing the cost  description, if using togather the coupons and advanced cost settings. (Business Large, MultiUser).
* Features and issue fixings in All versions:
 * New Calendar Overview page (1 month/ 3 month / Year view mode) for the booking listing in the admin panel.
 * Showing the full booking info in the popover tooltip, when mouse over specific booking in the Calendar Overview page in admin panel.
 * Setting the default start page at the General Booking Settings page : Booking Listing or Booking Calendar Overview page.
 * Possibility to Sort the bookings by booking Dates in the Booking Listing page
 * Possibility  to  activate / deactivate and edit titles of specific items in the Legend under the calendar.
 * Showing the current date instead of "#" symbol at the cells of legend.
 * New technical section at the General Booking Settings page (for reindexing (possibility to sort by date field) the exist bookings)
 * Slovak translation by Branco, Slovak (<a href="http://webhostinggeeks.com/blog/">WebHostingGeeks.com</a>
 * Add possibility to send the "Approve" emails, if the "Auto-approve" feature is activated at the General Booking Settings page.
 * Use the "visitor email" from the booking form as a default "reply" email in the email template about the new booking, which  is sending to the booking administrator.
 * Set  the date and time of the booking(s) relative to the "Timezone", which  is set at the WordPress General Settings page.
 * Support of migration to the jQuery 1.9 or 2.0 
 * Fix issue of not sending emails at the "Add booking" admin page, if the "Not sending emails" checkbox is checked.
 * Many other small issue fixing and improvements...
*/
// </editor-fold>


    // Die if direct access to file
    if (   (! isset( $_GET['wpdev_bkpaypal_ipn'] ) ) &&    (! isset( $_GET['merchant_return_link'] ) ) && (! isset( $_GET['payed_booking'] ) ) && (!function_exists ('get_option')  )  && (! isset( $_POST['ajax_action'] ) ) ) {
        die('You do not have permission to direct access to this file !!!');
    }

    // A J A X /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if ( ( isset( $_GET['wpdev_bkpaypal_ipn'] ) )  || ( isset( $_GET['payed_booking'] ) )  || (  isset( $_GET['merchant_return_link']))  || ( isset( $_POST['ajax_action'] ) ) ) {
        require_once( dirname(__FILE__) . '/../../../wp-load.php' );
        @header('Content-Type: text/html; charset=' . get_option('blog_charset'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //   D e f i n e     S T A T I C              //////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if (!defined('WP_BK_DEBUG_MODE'))    define('WP_BK_DEBUG_MODE',  false );
    if (!defined('WPDEV_BK_FILE'))       define('WPDEV_BK_FILE',  __FILE__ );

    if (!defined('WP_CONTENT_DIR'))      define('WP_CONTENT_DIR', ABSPATH . 'wp-content');                   // Z:\home\test.wpdevelop.com\www/wp-content
    if (!defined('WP_CONTENT_URL'))      define('WP_CONTENT_URL', site_url() . '/wp-content');    // http://test.wpdevelop.com/wp-content
    if (!defined('WP_PLUGIN_DIR'))       define('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');               // Z:\home\test.wpdevelop.com\www/wp-content/plugins
    if (!defined('WP_PLUGIN_URL'))       define('WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins');               // http://test.wpdevelop.com/wp-content/plugins
    if (!defined('WPDEV_BK_PLUGIN_FILENAME'))  define('WPDEV_BK_PLUGIN_FILENAME',  basename( __FILE__ ) );              // menu-compouser.php
    if (!defined('WPDEV_BK_PLUGIN_DIRNAME'))   define('WPDEV_BK_PLUGIN_DIRNAME',  plugin_basename(dirname(__FILE__)) ); // menu-compouser
    if (!defined('WPDEV_BK_PLUGIN_DIR')) define('WPDEV_BK_PLUGIN_DIR', WP_PLUGIN_DIR.'/'.WPDEV_BK_PLUGIN_DIRNAME ); // Z:\home\test.wpdevelop.com\www/wp-content/plugins/menu-compouser
    if (!defined('WPDEV_BK_PLUGIN_URL')) define('WPDEV_BK_PLUGIN_URL', site_url().'/wp-content/plugins/'.WPDEV_BK_PLUGIN_DIRNAME ); // http://test.wpdevelop.com/wp-content/plugins/menu-compouser


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //   L O A D   F I L E S                      //////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if (file_exists(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-functions.php')) {     // S u p p o r t    f u n c t i o n s
        require_once(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-functions.php' ); }
    if (file_exists(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-widget.php')) {        // W i d g e t s
        require_once(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-widget.php' ); }

    if (file_exists(WPDEV_BK_PLUGIN_DIR. '/js/captcha/captcha.php'))  {             // C A P T C H A
        require_once(WPDEV_BK_PLUGIN_DIR. '/js/captcha/captcha.php' );}

    if (file_exists(WPDEV_BK_PLUGIN_DIR. '/inc/personal.php'))   {                  // O t h e r
        require_once(WPDEV_BK_PLUGIN_DIR. '/inc/personal.php' ); }
    if (file_exists(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-bk-lib.php')) {                // S u p p o r t    l i b
        require_once(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-bk-lib.php' ); }

    if (file_exists(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-class.php'))           // C L A S S    B o o k i n g
        { require_once(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-class.php' ); }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // GET VERSION NUMBER
    $plugin_data = get_file_data_wpdev(  __FILE__ , array( 'Name' => 'Plugin Name', 'PluginURI' => 'Plugin URI', 'Version' => 'Version', 'Description' => 'Description', 'Author' => 'Author', 'AuthorURI' => 'Author URI', 'TextDomain' => 'Text Domain', 'DomainPath' => 'Domain Path' ) , 'plugin' );
    if (!defined('WPDEV_BK_VERSION'))    define('WPDEV_BK_VERSION',   $plugin_data['Version'] );                             // 0.1
            

    //    A J A X     R e s p o n d e r     // RUN if Ajax //
    if (file_exists(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-ajax.php'))  { require_once(WPDEV_BK_PLUGIN_DIR. '/lib/wpdev-booking-ajax.php' ); }

    // RUN //
    $wpdev_bk = new wpdev_booking();
?>