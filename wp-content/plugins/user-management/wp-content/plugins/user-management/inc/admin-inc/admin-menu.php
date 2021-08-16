<?php
add_action( 'admin_menu', 'us_mg_admin_menu' );


function us_mg_admin_menu() {
	add_menu_page(
		'مدیریت کاربران',
		'مدیریت کاربران',
		'manage_options',
		'user_management',
		'us_mg_admin_menu_html',
	);
}

function us_mg_admin_menu_html() {
	global $wpdb;
	if ( isset( $_GET['action'] ) ) {
		$user_id = intval( $_GET['id'] );
		 if ( $_GET['action'] == 'delete' ) {
			delete_user_meta( $user_id, 'mobile_user' );
			delete_user_meta( $user_id, 'wallet' );
		}
	else if ( $_GET['action'] == 'update' ) {
			if ( isset( $_POST['save-data'] ) ) {
				if ( is_numeric( $_POST['mobile-user'] ) && ! empty( $_POST['mobile-user'] )
				     && is_numeric( $_POST['wallet-user'] ) && ! empty( $_POST['wallet-user'] ) ) {
					$user_id = intval( $_GET['id'] );
					update_user_meta( $user_id, 'mobile_user', $_POST['mobile-user'] );
					update_user_meta( $user_id, 'wallet', $_POST['wallet-user'] );
				} else {
					$empty = 'پرکردن فیلدها با عدد الزامی است';
				}
			}
			$mobile_user = get_user_meta( $user_id, 'mobile_user', true );
			$wallet_user = get_user_meta( $user_id, 'wallet', true );
			include US_MG_TPL . 'admin-tpl/update-wallet-mobile.php';
			return;
		}
	else if($_GET['action'] == 'mobile_delete'){
		$user_id = intval( $_GET['id'] );
		$msg_delete = 'به روزرسانی انجام شود';
		delete_user_meta($user_id,'mobile_user');
	}
	else if($_GET['action']=='wallet_edit'){
		$user_id = intval( $_GET['id'] );
		delete_user_meta($user_id,'wallet');
	}
	}
		$users = $wpdb->get_results( "SELECT ID,display_name,user_registered,user_email FROM {$wpdb->users}" );
		include US_MG_TPL . 'admin-tpl/users-page.php';
	}


