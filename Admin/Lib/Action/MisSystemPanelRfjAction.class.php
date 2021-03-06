			<?php
			/**
			 * @Title: MisSystemPanelRfjAction
			 * @Package package_name
			 * @Description: todo(自定义小块面板（个人首页，公司首页）)";
			 * @author 管理员
			 * @company 重庆特米洛科技有限公司";
			 * @copyright 本文件归属于重庆特米洛科技有限公司";
			 * @date 2015-06-02 18:06:33
			 * @version V1.08
			*/
			class MisSystemPanelRfjAction extends AutoPanelAction{
				public function setting(){
				}
				public function getConfig(){
				}
				/**
				 * 显示当前面板内容
				 * @Title: showPanel
				 * @Description: todo(页面展示)
				 * @author 管理员
				 * @date 2015-06-02 18:06:33
				 * @throws
				 */
				public function showPanel(){
					$submodel=M("mis_system_panel_desing_sub");
					$sublist = $submodel->where("masid=18")->select();
					$scdmodel = D("SystemConfigDetail");
					$map["status"]=1;
					foreach($sublist as $key=>$val){
						if($val["map"]){
							$map["_string"] = $val["map"];
						}						
						$model = $val["modelname"];
						$fields = explode(",",$val["showtitle"]);
						$detailList = $scdmodel->getDetail($model,true,"","sortnum");
						$sublist[$key]['link'] = __APP__."/".$model."/index";
						$sublist[$key]['rel'] = $model;
						foreach($detailList as $k=>$v){
							if(!in_array($v['name'],$fields)){
								unset($detailList[$k]);
							}
						}
						$sublist[$key]["detailList"] = $detailList;
						//具体数据
						$listmodel = D($model);
						$val['num'] = $val['num']?$val['num']:5;
						$list = $listmodel->where($map)->order('id desc')->limit($val['num'])->select();
						$sublist[$key]["list"] = $list;
unset($map["_string"]);
					}
					$this->assign("sublist",$sublist);
					$this->display("MisSystemPanelDesingMas:news");
				}
			}
		