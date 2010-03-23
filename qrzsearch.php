<?php
/*
Plugin Name: QRZ search widget
Version: 0.1
Plugin URI: http://ns6t.net/word/?page_id=69
Description: Provide a simple widget form to search for amateur radio call signs on QRZ.com, based on examples here on <a href="http://www.qrz.com/i/linking.html">QRZ.com</a>.
Author: Tom Epperly
Author URI: http://ns6t.net/
License: GPL2
 */

  /*  Copyright 2010 Tom Epperly  (email : tepperly@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  */

function widget_qrzsearch_init()
{
  // Check if the widget API is available
  if ( !function_exists('register_sidebar_widget') )
    return;
 
  function widget_qrzsearch($args) {
    extract($args);
    ?>
      <?php echo $before_widget; ?>
	  <?php echo $before_title
	      . 'QRZ Callsign Search'
	      . $after_title; ?>
	      <form method="get" action="http://www.qrz.com/db/" style="display:inline" target="_blank" >
		 <input type="text" name="callsign" size="8" title="Enter ham call sign here" />
<input type="submit" value="Go" /></form>
	      <?php echo $after_widget; ?>
  <?php
      }


  register_sidebar_widget('QRZ Callsign Search', 'widget_qrzsearch');
}

add_action('plugins_loaded', 'widget_qrzsearch_init');
?>