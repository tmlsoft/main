<?php
/** 
 * @Title: MisPerformanceQueryModel 
 * @Package package_name
 * @Description: todo(绩效查询) 
 * @author laicaixia
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2013-8-14 下午1:56:17 
 * @version V1.0
 */
class MisPerformanceQueryModel extends CommonModel {
	protected $trueTableName = 'mis_performance_assess';

	public $_auto = array(
		array('createid','getMemberId',self::MODEL_INSERT,'callback'),
		array('updateid','getMemberId',self::MODEL_UPDATE,'callback'),
		array('createtime','time',self::MODEL_INSERT,'function'),
		array('updatetime','time',self::MODEL_UPDATE,'function'),
		array("companyid","getCompanyID",self::MODEL_INSERT,"callback"),
		array("departmentid","getDeptID",self::MODEL_INSERT,"callback"),
		array('sysdutyid','getDutyID',self::MODEL_INSERT,'callback'),
	);
}
?>