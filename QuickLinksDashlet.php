<?php

require_once 'civiquicklinksdashlet.civix.php';
// phpcs:disable
use CRM_QuickLinksDashlet_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function civiquicklinksdashlet_civicrm_config(&$config) {
  _civiquicklinksdashlet_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function civiquicklinksdashlet_civicrm_xmlMenu(&$files) {
  _civiquicklinksdashlet_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function civiquicklinksdashlet_civicrm_install() {
/**
 civicrm_initialize();
  $result = civicrm_api3('Dashboard', 'create', [
    'name' => "QuickLinks",
    'label' => "QuickLinks",
    'is_active' => 1,
  ]);
**/
  _civiquicklinksdashlet_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function civiquicklinksdashlet_civicrm_postInstall() {
  _civiquicklinksdashlet_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function civiquicklinksdashlet_civicrm_uninstall() {
  /**
  civicrm_initialize();
  $quick_links = civicrm_api3('Dashboard', 'get', [
    'sequential' => 1,
    'name' => "QuickLinks",
  ]);
  if (isset($result['id'])) {
    $result = civicrm_api3('Dashboard', 'delete', [
      'id' => $quick_links['id'],
    ]);
  }
  **/
  _civiquicklinksdashlet_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function civiquicklinksdashlet_civicrm_enable() {
  _civiquicklinksdashlet_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function civiquicklinksdashlet_civicrm_disable() {
  _civiquicklinksdashlet_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function civiquicklinksdashlet_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _civiquicklinksdashlet_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function civiquicklinksdashlet_civicrm_managed(&$entities) {
  _civiquicklinksdashlet_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function civiquicklinksdashlet_civicrm_caseTypes(&$caseTypes) {
  _civiquicklinksdashlet_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function civiquicklinksdashlet_civicrm_angularModules(&$angularModules) {
  _civiquicklinksdashlet_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function civiquicklinksdashlet_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _civiquicklinksdashlet_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function civiquicklinksdashlet_civicrm_entityTypes(&$entityTypes) {
  _civiquicklinksdashlet_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function civiquicklinksdashlet_civicrm_themes(&$themes) {
  _civiquicklinksdashlet_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function civiquicklinksdashlet_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function civiquicklinksdashlet_civicrm_navigationMenu(&$menu) {
//  _civiquicklinksdashlet_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _civiquicklinksdashlet_civix_navigationMenu($menu);
//}
