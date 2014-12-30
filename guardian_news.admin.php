<?php

/**
 * @file guardian_news.admin.module
 *
 */

/**
 * Implements hook_menu().
 */
function guardian_news_menu() {
  $items['admin/content/guardian_news'] = array(
    'title' => 'The Guardian news',
    'type' => MENU_NORMAL_ITEM,
    'description' => 'Admin page for module guardian_news.',
    'page callback' => 'drupal_get_form',
    'page arguments' => array('_guardian_news_admin_page'),
    'access arguments' => TRUE,
  );

  return $items;
}

/**
 * Admin page for module
 */
function _guardian_news_admin_page($form, &$form_state) {

  $form['title'] = array(
    '#type' => 'markup',
  );

  $form['post_number'] = array(
    '#type' => 'select',
    '#options' => array(
      1 => '1',
      2 => '2',
      3 => '3',
      4 => '4',
      5 => '5',
      6 => '6',
      7 => '7',
      8 => '8',
      9 => '9',
      10 => '10',
    ),
  );

  $form['submit_button'] = array(
    '#type' => 'submit',
    '#value' => t('Save changes'),
  );

  return $form;
}