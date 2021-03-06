<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Controller
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */

App::uses('UsersController', 'Controller');

/**
 * メンバーコントローラー（デモ用）
 *
 * @package Baser.Controller
 */
class MembersController extends UsersController {

/**
 * クラス名
 *
 * @var string
 */
	public $name = 'Members';

/**
 * モデル
 *
 * @var array
 */
	public $uses = array('Member', 'UserGroup');

/**
 * [MYPAGE] メンバー編集
 * 
 */
	public function mypage_index() {
		$this->pageTitle = 'メンバーマイページ';
	}

}
