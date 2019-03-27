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
        "views" => "app/views/dashboard/index.php",
        "version" => "v0.1",
    ];
    
    return isset($config[$key]) ? $config[$key] : null;
  }
?>