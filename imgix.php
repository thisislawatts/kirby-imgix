<?php 
/**
 * Imgix Plugin
 *
 * c::set('imgix.url');
 */

function imgix($url, $params = array()) {

  $imgix_url = c::get('imgix.url', false);

  if (!$imgix_url) {
      return $url;
  }


  if (!str::endsWith($imgix_url, '/')) {
    $imgix_url .= '/';
  }

  if(is_object($url)) {
    $url = $url->url();
  } 
  $url = trim(str_replace(url(), '', $url), '/');
  $url = $imgix_url . $url . '?' . http_build_query($params);
  return $url;
}
