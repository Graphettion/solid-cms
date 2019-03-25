<?php
/**
 * Used to configure the website
 *
 * @param {string} key
 * @returns {string} key
 */
function config($key = "") {
  $config = [
      "name" => "Solid CMS",
      "site_url" => "",
      "pretty_uri" => true,
      "themes_path" => "themes/default",
      "views" => "views",
      "version" => "v3.0",
  ];
  
  return isset($config[$key]) ? $config[$key] : null;
}

?>