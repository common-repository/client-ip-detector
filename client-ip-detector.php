<?php
/*
Plugin Name: Client IP Detector Plugin
Plugin URI: http://wordpress.org/extend/plugins/client-ip-detector/
Description: A Simple widget to display client IP Address and print if the client is connecting via IPv6 or IPv4.
Version: 1.2
Author: Alessio Bravi
Author URI: http://blog.bravi.org/
License: GPL3
*/

class Client_IP_Detector_Widget extends WP_Widget {

 public function __construct() {
   parent::__construct(
     'client-ip-detector-widget',
     'Client IP Detector Widget',
     array( 'description' => __( 'Detect Visitor IP Address and recognize if IPv4 or IPv6 is used.', 'text_domain' ), )
   );
 }

 function register() {
   add_option("IPv6_counter", 0);
   add_option("IPv4_counter", 0);
   register_widget("Client_IP_Detector_Widget");
 }

 function update($new_instance, $old_instance) {
  $instance = array();
  $instance['title'] = strip_tags($new_instance['title']);
  $instance['color_link_tags'] = strip_tags($new_instance['color_link_tags']);
  $instance['print_statistics'] = strip_tags($new_instance['print_statistics']);
  return $instance;
 }

 public function form( $instance ) {
   if (isset($instance['title'])) {
     $title = strip_tags($instance['title']);
   }
   else {
     $title = __( 'Client IP Detector', 'text_domain' );
   }
   $color_link_tags = esc_attr($instance['color_link_tags']);
   $print_statistics = esc_attr($instance['print_statistics']);
   ?>
   <p>
   <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
   <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
   </p>
   <p>
   <input id="<?php echo $this->get_field_id('print_statistics'); ?>" name="<?php echo $this->get_field_name('print_statistics'); ?>" type="checkbox" value="1" <?php checked( '1', $print_statistics); ?>/>
   <label for="<?php echo $this->get_field_id('print_statistics'); ?>"><?php _e('Print Clients Statistics'); ?></label>
   </p>
   <p>
   <input id="<?php echo $this->get_field_id('color_link_tags'); ?>" name="<?php echo $this->get_field_name('color_link_tags'); ?>" type="checkbox" value="1" <?php checked( '1', $color_link_tags); ?>/>
   <label for="<?php echo $this->get_field_id('color_link_tags'); ?>"><?php _e('Enable IP TAG Colors and Links'); ?></label>
   </p>
   <?php
 }

 function widget($args, $instance) {
   extract ($args);
   $IPv6_counter = get_option("IPv6_counter");
   $IPv4_counter = get_option("IPv4_counter");
   $title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance );
   $print_statistics = $instance['print_statistics'];
   $color_link_tags = $instance['color_link_tags'];
   $client_ip_address = getenv ("REMOTE_ADDR");

   echo $before_widget;
   echo $before_title.$title.$after_title;
   echo '<ul class="widget client-ip-detector-widget" id="'.$args['widget_id'].'"><li class="client-ip-detector-widget-subtitle" id="'.$args['widget_id'].'">You reach us in <b>';
   if ( substr_count($client_ip_address, ":") > 0 && substr_count($client_ip_address, ".") == 0 ) {
     $IPv6_counter++;
     update_option("IPv6_counter", $IPv6_counter);
     if ($color_link_tags == true)
      echo '<a href="http://en.wikipedia.org/wiki/IPv6" target="_blank"><font style="color:green;">IPv6</font></a>';
     else 
      echo 'IPv6';
   }
   else {
     $IPv4_counter++;
     update_option("IPv4_counter", $IPv4_counter);
     if ($color_link_tags == true)
      echo '<a href="http://en.wikipedia.org/wiki/IPv4" target="_blank"><font style="color:red;">IPv4</font></a>';
     else
      echo 'IPv4';
   }
   echo '</b>, your IP is:</li>';
   echo '<li class="client-ip-detector-widget-address" id="'.$args['widget_id'].'">'.$client_ip_address.'</li>';
   if ($print_statistics == true) {
     $IPv6_percentage = round(($IPv6_counter / ($IPv6_counter + $IPv4_counter) * 100),2,PHP_ROUND_HALF_UP);
     $IPv4_percentage = round(($IPv4_counter / ($IPv6_counter + $IPv4_counter) * 100),2,PHP_ROUND_HALF_DOWN);
     echo '<li class="client-ip-detector-widget-statistics" id="'.$args['widget_id'].'">IPv6: '.$IPv6_percentage.'&#37; - IPv4: '.$IPv4_percentage.'&#37;</li>';
   }
   echo '</ul>';
   echo $after_widget;
  }

}

add_action("widgets_init", array('Client_IP_Detector_Widget', 'register'));

?>
