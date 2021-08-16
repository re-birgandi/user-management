<div class="wrap">
    <h1>مدیریت کاربران</h1>
    <table class="widefat">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>نام کاربر</th>
            <th>ایمیل</th>
            <th>شماره همراه</th>
            <th>کیف پول</th>
            <th>به روزرسانی شماره همراه و کیف پول</th>
            <th>حذف همراه و کیف پول</th>
            <th>تاریخ ثبت نام</th>
        </tr>
        </thead>
        <tbody>
		<?php
		if ( isset( $users ) ) {
			foreach ( $users as $user ) {
				$wallet_user = get_user_meta( $user->ID, 'wallet', true );
				$wallet_user = empty( $wallet_user ) ? 0 : $wallet_user;
				?>
                <tr >
                    <td><?php echo $user->ID; ?></td>
                    <td><?php echo $user->display_name; ?></td>
                    <td><?php echo $user->user_email; ?></td>
                    <td><?php echo get_user_meta( $user->ID, 'mobile_user', true );
                    $set_meta_mobile = get_user_meta( $user->ID, 'mobile_user', true );
                    if($set_meta_mobile){?>
                        <a href="<?php echo add_query_arg(['action'=>'mobile_delete','id'=>$user->ID]);?>">&nbsp;&nbsp;&nbsp;<span class="dashicons dashicons-trash"></span></a>
                     <?php
                    } else{?>
                        <span style="color: #5A5A5A">به روزرسانی کنید</span>
                     <?php
                    }?>
                    </td>
                    <td><?php echo number_format( $wallet_user ); ?>
                        <a href="<?php echo add_query_arg(['action'=>'wallet_edit','id'=>$user->ID]);  ?>">&nbsp;&nbsp;&nbsp;<span class="dashicons dashicons-trash"></span></a></td>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo add_query_arg( [ 'action' => 'update', 'id' => $user->ID ] ) ?>"><span
                                    class="dashicons dashicons-update-alt"></span> به روز رسانی </a></td>
                    <td>&nbsp;&nbsp;
                        <a href="<?php echo add_query_arg( [ 'action' => 'delete', 'id' => $user->ID ] ) ?>">
                            <span class="dashicons dashicons-trash"></span>حذف </a></td>
                    <td><?php echo $user->user_registered ?>
                        <div style="height: 20px;"></div>
                    </td>
                </tr>
				<?php
			}
		}

		?>
        </tbody>
    </table>
</div>