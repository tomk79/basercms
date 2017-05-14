<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Mail.View
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */

/**
 * [PUBLISH] メールフォーム確認ページ
 */
$this->BcBaser->css('admin/jquery-ui/ui.all', array('inline' => true));
$this->BcBaser->js(array('admin/vendors/jquery-ui-1.11.4.min', 'admin/vendors/i18n/ui.datepicker-ja'), false);
if ($freezed) {
	$this->Mailform->freeze();
}
?>


<h1 class="contents-head">
	<?php $this->BcBaser->contentsTitle(); ?>
</h1>

<?php if ($freezed): ?>
	<h2 class="contents-head"><?php echo __('Confirm') ?></h2>
	<p class="section"><?php echo __('If there is no mistake in the contents entered, please click Submit button.') ?></p>
	<?php else: ?>
	<h2 class="contents-head"><?php echo __('Input form') ?></h2>
<?php endif; ?>

<div class="section mail-form">
	<?php $this->BcBaser->flash(); ?>
	<?php $this->BcBaser->element('mail_form'); ?>
</div>
