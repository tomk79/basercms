<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] メールコンテンツ一覧　テーブル
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<table cellpadding="0" cellspacing="0" class="list-table" id="ListTable">
	<thead>
		<tr>
			<th style="width:180px" class="list-tool">
				<div>
					<?php $this->BcBaser->link($this->BcBaser->getImg('admin/btn_add.png', array('width' => 69, 'height' => 18, 'alt' => '新規追加', 'class' => 'btn')), array('action' => 'add')) ?>
	
				</div>
				<!--<div>
					<?php //echo $this->BcForm->checkbox('ListTool.checkall', array('title' => '一括削除')) ?>
					<?php //echo $this->BcForm->input('ListTool.batch', array('type' => 'select', 'options' => array('del' => '削除'), 'empty' => '一括処理')) ?>
					<?php //echo $this->BcForm->button('適用', array('id' => 'BtnApplyBatch', 'disabled' => 'disabled')) ?>
				</div>-->
			</th>
			<th>NO</th>
			<th>メールフォームアカウント</th>
			<th>メールフォームタイトル</th>
			<th>登録日<br />更新日</th>
		</tr>
	</thead>
	<tbody>
	<?php if(!empty($listDatas)): ?>
		<?php foreach($listDatas as $data): ?>
			<?php $this->BcBaser->element('mail_contents/index_row', array('data' => $data)) ?>
		<?php endforeach; ?>
	<?php else: ?>
		<tr><td colspan="6"><p class="no-data">データが見つかりませんでした。</p></td></tr>
	<?php endif; ?>
	</tbody>
</table>