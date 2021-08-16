<div class="wrap">
	<h1>به روزرسانی اطلاعات موبایل و کیف پول</h1>
    <form action="" method="post" class="form-table">
       <table >
           <tr valign="top">
               <th scope="row">همراه</th>
               <td><input type="text" name="mobile-user" value="<?php echo isset($mobile_user) ? $mobile_user : false; ?>"></td>
           </tr>
           <tr valign="top">
               <th scope="row">کیف پول</th>
               <td><input type="text" name="wallet-user" value="<?php echo isset($wallet_user) ? $wallet_user : false; ?>"></td>
           </tr>
           <tr valign="top">
               <td><button type="submit" name="save-data" class="button button-primary">ذخیره اطلاعات</button></td>
               <td><a href="<?php echo admin_url('admin.php?page=user_management');?> " class="button button-primary" style="    text-decoration: none; width: 81%;text-align: center;">صفحه مدیریت کاربران</a></td>

           </tr>
       </table>
    </form>
</div>

<?php
if(isset($empty)){
   ?>
    <div style="height: 29px;background: bisque;width: 36%;text-align: center;padding: 6px;font-size: 15px;color: brown;"><?php echo $empty; ?></div>
<?php
}