<?php

require_once 'CRM/Core/Page.php';

class CRM_QuickLinksDashlet_Page_QuickLinks extends CRM_Core_Page {

  function run() {

    $res = CRM_Core_Resources::singleton();
    
    
    CRM_Utils_System::setTitle(ts('QuickLinksDashlet'));
    parent::run();
  }
}



