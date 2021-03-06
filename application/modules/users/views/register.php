<h2><?=lang('user_register_header') ?></h2>

<p>
	<span class="spacer-right" style="background:#FFFF99;"><?=lang('user_register_step1') ?></span> -&gt; 
	<?=lang('user_register_step2') ?>
</p>

<p><?=lang('user_register_reasons') ?></p>

<? if(!empty($error_string)):?>
<div class="error-box"><?=$error_string;?></div>
<? endif;?>

<?=form_open('register', array('id'=>'register')); ?>

<p class="float-left spacer-right">
	<label for="first_name"><?=lang('user_first_name') ?></label><br/>
	<input type="text"name="first_name" maxlength="40" value="<?= $this->validation->first_name; ?>" />
</p>

<p>
	<label for="last_name"><?=lang('user_last_name') ?></label><br/>
	<input type="text"name="last_name" maxlength="40" value="<?= $this->validation->last_name; ?>" />
</p>

<p class="float-left spacer-right">
	<label for="email"><?=lang('user_email') ?> - <em>used to login</em></label><br/>
	<input type="text"name="email" maxlength="100" value="<?= $this->validation->email; ?>" />
</p>

<p>
	<label for="confirm_email"><?=lang('user_confirm_email') ?></label><br/>
	<input type="text"name="confirm_email" maxlength="100" value="<?= $this->validation->confirm_email; ?>" />
</p>

<p class="float-left spacer-right">
	<label for="password"><?=lang('user_password') ?></label><br/>
	<input type="password"name="password" maxlength="100" />
</p>

<p>
	<label for="confirm_password"><?=lang('user_confirm_password') ?></label><br/>
	<input type="password"name="confirm_password" maxlength="100" />
</p>

<?=form_submit('btnSubmit', lang('user_register_btn')) ?>
<?=form_close(); ?>