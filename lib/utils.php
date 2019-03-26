<?php

/**
 * Displays site name
 */

function site_name() {
    return config('name');
}

/**
 * Displays page title
 * 
 * Replaces hyphens with spaces and capitalizes the words in the URL
 */

function page_title() {
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page'], ENT_QUOTES, "utf8") : 'Home';
    return ucwords(str_replace('-', ' ', $page));
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
    return file_get_contents($path);
}

/**
 * Displays site version.
 */
function site_version() {
  return config('version');
}

/**
 * Intializes theme
 */
function init() {
    include config('theme_path') . 'app/views/dashboard/index.php';
}

?>