<?php

/**
 * @file guardian_news.admin.module
 *
 */

/**
 * Implements hook_menu().
 */
function guardian_news_menu() {
  $items['admin/guardian_news'] = array(
    'title' => 'The Guardian news',
    'description' => 'Admin page for module guardian_news.',
    'page callback' => 'drupal_get_form',
    'page arguments' => array('_guardian_news_admin_page'),
    'access arguments' => array('access admin pages'),
  );

  return $items;
}

/**
 * Admin page for module
 */
function _guardian_news_admin_page() {
  $page = array();


}