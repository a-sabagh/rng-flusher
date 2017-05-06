<?php

/*
  Plugin Name: rng-flusher
  Plugin URI: http://gnutec.ir
  Description: wordpress plugin for flush permalink
  Version: 0.1
  Author: abolfazl sabagh
  Author URI: http://gnutec.ir
 */

function flusher_rewrite(){
    flush_rewrite_rules();
}
register_activation_hook(__FILE__ , 'flusher_rewrite');