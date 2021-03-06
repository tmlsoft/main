<?php 
return array(
	//新增
	'js-add' => array(
		'ifcheck' => '1',
		'permisname' => 'missystemdataaccess_add',
		'html' => '<a class="add js-add tml-btn tml_look_btn tml_mp" href="__URL__/add" target="dialog" width="580" height="500"  mask="true" title="新增数据权限对象" rel="__MODULE__add"><span><span class="icon icon-plus icon_lrp"></span>新增</span></a>',
		'shows' => '1',
		'sortnum' => '1',
	),
	//edit按钮
	'js-edit' => array(
			'ifcheck' => '1',
			'permisname' => 'missystemdataaccess_edit',
			'html' => '<a class="edit js-edit tml-btn tml_look_btn tml_mp" href="__URL__/edit/id/{sid_node}" width="580" height="500" rel="__MODULE__edit" target="dialog"  mask="true" title="编辑数据权限对象"><span><span class="icon icon-edit icon_lrp"></span>修改</span></a>',
			'shows' => '1',
			'sortnum' => '2',
	),
	//删除
	'js-delete' => array(
			'ifcheck' => '1',
			'permisname' => 'missystemdataaccess_delete',
			'html' => '<a class="js-delete delete tml-btn tml_look_btn tml_mp" href="__URL__/delete/id/{sid_node}/navTabId/MisSystemDataAccessBOX" target="ajaxTodo" title="你确定要删除吗？" warn="删除此数据可能会引起数据不完整,请谨慎操作!"><span><span class="icon icon-trash icon_lrp"></span>删除</span></a>',
			'shows' => '1',
			'sortnum' => '3',
	),
	//分组
	'js-allotgroup' => array(
			'ifcheck' => '1',
			'permisname' => 'missystemdataaccess_allotgroup',
			'extendurl' => '"aname/".$_REQUEST["aname"]',
			'html' => '<a class="edit js-allotgroup tml-btn tml_look_btn tml_mp" href="__URL__/allotgroup/id/{sid_node}/#extendurl#"  rel="__MODULE__allotgroup" target="navTab"  mask="true" title="分组"><span><span class="icon icon-edit icon_lrp"></span>分组</span></a>',
			'shows' => '1',
			'sortnum' => '4',
	),
	//直接授权
	'js-access' => array(
			'ifcheck' => '1',
			'permisname' => 'missystemdataaccess_access',
			'html' => '<a class="js-access icon tml-btn tml_look_btn tml_mp" href="__APP__/MisSystemDataAccessCarrier/index"  rel="MisSystemDataAccessCarrier" target="navTab" mask="true" title="数据权限分配"><span><span class="icon icon-edit icon_lrp"></span>数据权限分配</span></a>',
			'shows' => '1',
			'sortnum' => '5',
	),
);