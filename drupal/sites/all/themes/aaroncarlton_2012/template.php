<?php

/**
 * Preprocess twitter_block_tweet.
 */
function aaroncarlton_2012_preprocess_twitter_block_tweet(&$vars) {
  $vars['date'] = date("M d, Y", strtotime($vars['tweet']->created_at)); 
} 