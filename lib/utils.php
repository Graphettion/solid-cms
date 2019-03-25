<?php

/**
 * Displays site name
 */

function site_name() {
    echo config('name');
}

/**
 * Displays page title
 * 
 * Replaces hyphens with spaces and capitalizes the words in the URL
 */

function page_title() {
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content
 * 
 * Uses static pages /app/views/; if not found, displays 404
 */
function page_content() {
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';
    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }
    echo file_get_contents($path);
}

/**
 * Displays site version.
 */
function site_version() {
  echo config('version');
}

/**
 * Intializes theme
 */
function init() {
    include config('theme_path') . '/theme.php';
}

?>