<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] テンプレートウィジェット設定
 *
 * PHP versions 4 and 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2011, Catchup, Inc.
 *								1-19-4 ikinomatsubara, fukuoka-shi
 *								fukuoka, Japan 819-0055
 *
 * @copyright		Copyright 2008 - 2011, Catchup, Inc.
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.blog.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$title = 'PHPテンプレート';
$description = 'PHPコードが書かれたテンプレートの読み込みが行えます。';
?>
<?php echo $formEx->label($key.'.template','PHPテンプレート名') ?> 
<?php echo $formEx->text($key.'.template',array('size'=>14)) ?> .ctp
<p style="text-align:left"><small>テンプレートを利用中のテーマ内の次のパスに保存してください。<br />
/app/webroot/themed/{テーマ名}/elements/widgets/</small></p>