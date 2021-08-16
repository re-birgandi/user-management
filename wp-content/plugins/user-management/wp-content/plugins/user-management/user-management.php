<?php
/*
 * Plugin Name:   مدیریت کاربران وردپرس
 * Plugin URI:  https://wordpress.org/plugins/classic-editor/
 * Description: حذف کردن،آپدیت کردن اطلاعات کاربر
 * Version:     1.0.0
 * Author:      re-BIRJANDI
 * Author URI:  https://7learn.com/
 * Text Domain: users-management
 * Domain Path: /languages
 */
define('US_MG_FILE',__FILE__);
define('US_MG_DIR',plugin_dir_path(US_MG_FILE));
define('US_MG_INC',US_MG_DIR.'inc/');
define('US_MG_TPL',US_MG_DIR.'tpl/');

if (is_admin()){
    include US_MG_INC.'admin-inc/admin-menu.php';

}
