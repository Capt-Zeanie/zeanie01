/**
 * Zeanie01 Theme for Wolf CMS 
 *
 * Simple 3 column layout based on... 
 * The 'Holy Grail' 3 column Liquid Layout (Pixel-widths) by Matthew James Taylor.
 * No CSS hacks. SEO friendly 2-1-3 column order. Cross-browser. Equal height columns
 * http://matthewjamestaylor.com/blog/ultimate-3-column-holy-grail-pixels.htm
 * @author Sean Arrowsmith
 * @package Wolf
 * @subpackage theme.zeanie01
 * @version 0.0.1
 */

A minimally tweaked version of the 'Holy Grail' 3 column Liquid Layout.
Main menu in the header.
Submenu rolling navigation in sidebar that will always points up to the parent page (if there is one) and down to any child pages (if there are any).

Installing

    In your Wolf admin, go to Files > themes and upload the /zeanie01 folder (or use FTP to upload the /zeanie01 folder to your Wolf installation's /public/themes directory).
    Go the Snippets tab, and create new snippet called zeanie01sidenav. Copy/paste the contents of the zeanie01sidenav.php file into the body of this snippet; make sure filter is set to --none--. Save.
    Go to the Layouts tab, and create a new layout called zeanie01, with the Content-Type of text/html. Copy/paste the contents of the zeanie01layout.html file into the body of this layout. Save.
    Go to the Pages tab, and open the Home Page for editing. Under the Settings tab, choose zeanie01 from the Layout drop-down. Save.

Your site is now using the zeanie01 Layout!

Enjoy!

Tweaking

The CSS file is in /zeanie01/css/screen.css.

Changelog

20150513 - first public release