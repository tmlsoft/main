<?php 
return array(
	'0' => array(
		'name' => 'orderno',
		'showname' => '编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '1',
		'fieldtype' => '',
		'fieldcategory' => 'text',
		'searchField' => 'mis_system_unit.orderno',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'1' => array(
		'name' => 'danweileixing',
		'showname' => '单位类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'danweileixing',
		'sortnum' => '2',
		'fieldtype' => 'int',
		'fieldcategory' => 'select',
		'searchField' => 'mis_system_unit.danweileixing',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_system_unit_type',
				),
			),
		),
		'table' => 'mis_system_unit_type',
		'field' => 'name',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'2' => array(
		'name' => 'danweimingchen',
		'showname' => '单位名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'danweimingchen',
		'sortnum' => '3',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_system_unit.danweimingchen',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'3' => array(
		'name' => 'danweidaima',
		'showname' => '单位代码',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'danweidaima',
		'sortnum' => '4',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_system_unit.danweidaima',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'4' => array(
		'name' => 'danweizhuangtai',
		'showname' => '数据类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'danweizhuangtai',
		'sortnum' => '5',
		'fieldtype' => 'int',
		'fieldcategory' => 'select',
		'searchField' => 'mis_system_unit.danweizhuangtai',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'func' => array(
			'0' => array(
				'0' => 'getSelectlistValue',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'unittype',
				),
			),
		),
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'isbase' => array(
		'name' => 'isbase',
		'showname' => '是否基本单位',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'isbase',
		'sortnum' => '6',
		'issearch' => '1',
		'searchField' => 'mis_system_unit.isbase',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '1',
		'searchsortnum' => '7',
		'func' => array(
			'0' => array(
				'0' => 'getSelectlistValue',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'YesOrNo',
				),
			),
		),
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'5' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'func' => array(
			'0' => array(
				'0' => 'showStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
					'1' => '#id#',
				),
			),
		),
		'sortnum' => '7',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
);

?>