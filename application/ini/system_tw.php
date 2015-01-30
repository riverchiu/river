<?php

// 功能權限
$_gFunction['user']="使用者管理";
$_gAction['user'] = array(
							"lists" => "列表" ,
							"add"=>"新增",
							"edit"=>"編修",
							"delete"=>"刪除"
							);
							
$_gFunction['competence']="使用者群組管理";
$_gAction['competence'] = array(
							"lists" => "列表" ,
							"add"=>"新增",
							"edit"=>"編修",
							"competenceedit"=>"權限",
							"delete"=>"刪除"
							);
							
							

$_gFunction['loginlog']="後台登入紀錄";
$_gAction['loginlog'] = array(
							"lists" => "列表" ,
							"delete"=>"清空"
							);


$_gFunction['actionlog']="後台操作紀錄";
$_gAction['actionlog'] = array(
							"lists" => "列表" ,
							"delete"=>"清空"
							);


?>