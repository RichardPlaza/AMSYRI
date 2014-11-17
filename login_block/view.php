<?php   
defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<?php 
$cp = new Permissions(Page::getCurrentPage());

if (!$user->checkLogin() || $cp->canWrite()) {?>
<div class="login_block_container">
	<h4 class="login_block_title"><?php  echo $title; ?></h4>
	<form method="post" action="<?php  echo $loginAction; ?>">
		<input type="text" name="uName" placeholder="<?php  echo Config::get('concrete.user.registration.email_registration') ? t('Email Address') : t('Username')?>" value="<?php  echo $_POST['username']; ?>" />
		<input type="password" name="uPassword" placeholder="<?php  echo t('Password'); ?>" /><br />
		<input type="checkbox" name="uMaintainLogin" value="1"><label for="uMaintailLogin"><?php  echo t('Stay signed in for two weeks'); ?></label>
		<?php  echo $validationToken; ?>
		<input type="submit" value="<?php  echo $submitButtonText; ?>" />
	</form>
</div>
<?php  }?>
