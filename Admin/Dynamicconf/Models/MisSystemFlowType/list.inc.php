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
		'searchField' => 'mis_system_flow_type.orderno',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'table' => '',
		'field' => '',
		'status' => '1',
		'isexport' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'1' => array(
		'name' => 'name',
		'showname' => '类型名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '2',
		'searchField' => 'mis_system_flow_type.name',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'table' => '',
		'field' => '',
		'status' => '1',
		'isexport' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'2' => array(
		'name' => 'cmpid',
		'showname' => '可使用公司',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'cmpid',
		'sortnum' => '3',
		'searchField' => 'mis_system_flow_type.cmpid',
		'conditions' => '',
		'type' => 'db|name',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'table' => 'mis_system_company',
		'field' => 'id',
		'status' => '1',
		'isexport' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
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
					'3' => 'mis_system_company',
				),
			),
		),
	),
	'3' => array(
		'name' => 'companyid',
		'showname' => '所属公司',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'companyid',
		'sortnum' => '3',
		'searchField' => 'mis_system_flow_type.companyid',
		'conditions' => '',
		'type' => 'db|name',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'table' => 'mis_system_company',
		'field' => 'id',
		'status' => '1',
		'isexport' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
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
					'3' => 'mis_system_company',
				),
			),
		),
	),
	'4' => array(
		'name' => 'sort',
		'showname' => '显示顺序',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sort',
		'sortnum' => '4',
		'searchField' => 'mis_system_flow_type.sort',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'table' => '',
		'field' => '',
		'status' => '1',
		'isexport' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'5' => array(
		'name' => 'remark',
		'showname' => '描述',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '5',
		'searchField' => 'mis_system_flow_type.remark',
		'conditions' => '',
		'type' => 'textarea',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'table' => '',
		'field' => '',
		'status' => '1',
		'isexport' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'6' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'func' => array(
			'0' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
				),
			),
		),
		'sortnum' => '6',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
);

?>