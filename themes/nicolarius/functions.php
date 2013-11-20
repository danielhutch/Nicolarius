<?php

  // remove first default home page link from main menu
  function page_menu_args( $args ) {
      $args['show_home'] = FALSE;
      return $args;
  }
  add_filter( 'wp_page_menu_args', 'page_menu_args' );