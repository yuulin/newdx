<?php
$scriptlang['myrepeats'] = array(
	'login_strike' => '密码错误次数过多，请重新设置马甲账户信息并在 15 分钟后再尝试切换。',
	'login_succeed' => '您已切换到 {user} {comment}帐号，现在将转入切换前页面。',
	'login_succeed_rsnonexistence' => '您已切换到 {user} {comment}帐号，但是此账号尚未设置 {olduser} 为马甲。<br /><a href="home.php?mod=spacecp&ac=plugin&id=myrepeats:memcp&username={olduserenc}" target="_blank">[ 设置 {olduser} 为本账号的马甲 ]</a><br /><a href="{referer}">[ 转入切换前页面 ]</a>',
	'login_activation' => '{user} 账户未在本论坛激活，现在将转入帐号激活页面。',
	'login_invalid' => '账户切换失败，请重新设置帐号信息，您还可以尝试 {loginperm} 次。',
	'login_question_empty' => '请重新设置账户的安全提问以及正确的答案。',
	'login_question_invalid' => '安全提问选择错误，请重新设置。',
	'user_nonexistence' => '无效的马甲账户信息，请重新设置。',
	'user_locked' => '此马甲账户被管理员锁定，您无法切换到 {user}，请与管理员联系。',
	'switch' => '切换马甲',
	'memcp' => '设置马甲',
	'usergroup_disabled' => '您所在用户组无法使用本功能',
	'normal' => '正常',
	'lock' => '锁定',
	'username' => '用户名',
	'repeat' => '马甲',
	'lastswitch' => '最后切换时间',
	'status' => '状态',
	'search' => '搜索',
	'repeats' => '被哪些账号马甲',
	'repeatusers' => '的马甲',
	'statuss' => '状态的记录',
	'viewall' => '查看全部',
	'deleted' => '- 已删除 -',
	'adduser_succeed' => '马甲账号 {usernamenew} 已成功添加。',
	'updateuser_succeed' => '马甲帐号信息已成功更新。',
);

$templatelang['myrepeats'] = array(
	'myrepeats' => '我的马甲',
	'adduser' => '添加马甲账号',
	'add' => '添加',
	'lastswitch' => '最后切换时间',
	'nouse' => '尚未使用',
	'locked' => '被管理员锁定',
	'comment' => '备　注',
	'commentrow' => '备注',
	'username' => '用户名',
	'password' => '密码',
	'security_question' => '安全提问',
	'security_question_1' => '母亲的名字',
	'security_question_2' => '爷爷的名字',
	'security_question_3' => '父亲出生的城市',
	'security_question_4' => '您其中一位老师的名字',
	'security_question_5' => '您个人计算机的型号',
	'security_question_6' => '您最喜欢的餐馆名称',
	'security_question_7' => '驾驶执照的最后四位数字',
	'security_answer' => '回答',
	'delete_check' => '删?',
);

?>