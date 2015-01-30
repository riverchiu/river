<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 *  @desc JavaScript 類別
 *  @created 2014/04/12
 */

class CI_Myjavascript{
	
	// This is the constructor for this class
	// Initialize all your default variables here
	function __construct() {
	
	}
	
	
	
	/**
	 * @desc 警告訊息後返回
	 * @param string $msg 警告訊息
	 * @param 設定 $go 第幾頁 負數為前幾頁
	 */
	public static function vAlertBack($msg, $go = -1) {
		header('Content-Type: text/html; charset=utf-8');
		echo "<script>";
		echo "alert('".$msg."');";
		echo "window.history.go($go);";
		echo "</script>";
		exit;
	}
	
	
	
	/**
	 * @desc 警告訊息後返回
	 * @param string $msg 警告訊息
	 * @param 設定 $go 第幾頁 負數為前幾頁
	 */
	public static function vJsAlertHistory($msg, $go = -1) {
		header('Content-Type: text/html; charset=utf-8');
		echo "<script>";
		echo "alert('".$msg."');";
		echo "window.history.go($go);";
		echo "</script>";
		exit;
	}
	
	/**
	* @desc  回第幾頁
	* @param 設定 $go 第幾頁 負數為前幾頁
	*/
	public static function vJsHistory($go = -1) {
		header('Content-Type: text/html; charset=utf-8');
		echo "<script>";
		echo "window.history.go($go);";
		echo "</script>";
		exit;
	}
	
	/**
	 * @desc 警告訊息後轉址
	 * @param string $msg 警告訊息
	 * @param string $url 轉址網址
	 */
	public static function vAlertRedirect($msg , $url) {
		header('Content-Type: text/html; charset=utf-8');
		echo "<script>";
		if($msg) echo "alert('".$msg."');";
		echo "window.location.href='$url'";
		echo "</script>";
		exit;
	}
	
	/**
	* @desc  警告訊息
	* @param 設定 $sMsg 訊息
	*/
	public function vAlert($sMsg) {
		echo "<script>";
		if (substr($sMsg, -1)=="\n") $sMsg = substr($sMsg, 0, -1);
		echo "alert(\"$sMsg\");";
		echo "</script>";
	}
	
	/**
	* @desc  回第幾頁
	* @param 設定 $go 第幾頁 負數為前幾頁
	*/
	public static function vBack($go=-1) {
		echo "<script>";
		echo "Javascript:history.go($go)";
		echo "</script>";
		exit;
	}
	
	/**
	 * @desc 轉址
	 * @param string $url 轉址網址
	 */
	public static function vRedirect($url) {
		header('Content-Type: text/html; charset=utf-8');
		echo "<script>";
		echo "window.location.href='$url'";
		echo "</script>";
		exit;
	}
	
	// ===================================================================================== //
		
	/**
	* @param 設定 $sSrc url src
	* @desc  將url加一time
	*/
	public static function sRndSrc($sSrc){
		if (preg_match("/\?/",$sSrc)) {
			$sSrc=$sSrc."&"."ranload=".time();
		} else $sSrc=$sSrc."?"."ranload=".time();	
		return $sSrc;
	}
	
	/**
	* @param 設定 $sFrame html frame $sSrc url src  $iCache=1 將url多一變數加入時間就部會被IE cache
	* @desc  重導其他frame 
	*/
	public static function vUpdateBrotherFrame($sFrame,$sSrc,$iCache=0) {
		if (!$iCache) $sSrc=$this->sRndSrc($sSrc);		
		if ($sSrc) {
			echo "<script language=javascript>";
			echo "parent.".$sFrame.".location.href='$sSrc'";
			echo "</script>"; 
		} else { //未指定reload
			echo "<script language=javascript>";
			echo "var d=new Date(); \n";
			echo "var t=d.getTime();\n";
			echo "var url=window.opener.document.URL + '&t='+t;";
			echo "parent.".$sFrame.".location.href='url'";
			echo "</script>"; 
		}	
	}
	
	/**
	* @param 設定 $sSrc url src  
	* @desc  重導母視窗
	*/
	public static function vUpdateOpener($sSrc="") {
		if(!$sSrc) { //未指定reload
			echo "<script language=javascript>\n";			
			echo "var d=new Date(); \n";
			echo "var t=d.getTime();\n";
			echo "var url=window.opener.document.URL + '&t='+t;";
			echo "</script>\n";
		} else {
			echo "<script language=javascript>\n";			
			echo "var d=new Date(); \n";
			echo "var t=d.getTime();\n";
			echo "var url='".$sSrc."&t=' +t;\n";
			echo "window.opener.document.location=url;\n";
			echo "</script>\n";
		}
	}
	
	/**
	* @param 設定 $sSrc url src  $iCache=1 將url多一變數加入時間就部會被IE cache
	* @desc  重導上一層frame 
	*/
	public static function vUpdateParentFrame($sSrc,$iCache=0) {
		if(!$iCache) $sSrc=$this->sRndSrc($sSrc);		
		echo "<script language=javascript>";
		echo "parent.location.href='$sSrc'";
		echo "</script>"; 
	}
	
	/**
	* @param 設定 $sSrc url src  $iCache=1 將url多一變數加入時間就部會被IE cache
	* @desc  重導目前這層 
	*/
	public static function vUpdateThisFrame($sSrc,$iCache=0){
		if (!$iCache) {
			if (preg_match("/\?/",$sSrc)) {
				$sSrc=$sSrc."&"."ranload=".time();
			} else $sSrc=$sSrc."?"."ranload=".time();	
		}
		echo "<script>";
		echo "window.location.href='$sSrc';";
		echo "</script>"; 	
		exit;
	}

	/**
	* @desc  關閉視窗
	*/
	public static function vClose() {
		echo "<script language=javascript>";
		echo "window.close()\n";
		echo "</script>";
	}
	
	/**
	* @param 設定 $sMsg 訊息
	* @desc  警告訊息
	*/
	public static function vAlertOnLoad($sMsg) {
		echo "<script language=javascript>";
		if(substr($sMsg, -1)=="\n")
		$sMsg = substr($sMsg, 0, -1);
		echo "window.onload = function () {";
		echo "Javascript:alert(\"$sMsg\");";
		echo "}</script>";
	}
	
	/**
	* @param 設定 $sSrc url src  $iCache=1 將url多一變數加入時間就部會被IE cache
	* @desc  重導目前這層 
	*/
	public static function vUpdateThisFrameToAlert($sSrc,$iCache=0,$sMsg){
		if (!$iCache) $sSrc=$this->sRndSrc($sSrc);
		echo "\n<script language=javascript>\n";
		echo "Javascript:alert(\"$sMsg\");\n";
		echo "window.location.href='$sSrc';\n";
		echo "</script>\n"; 	
	}

	/**
	 *  @desc 主視窗重整後關閉子視窗
	 *  @created 2014/04/17
	 */
	public static function vReloadClose() {
		echo "<script>";
		echo " opener.window.location.reload(); \n";
		echo " self.close();\n";
		echo "</script>";
		exit;
	}
	
	/**
	 *  @dsec 表單預設值設定
	 *  @param $form_name string 表單名稱
	 *  @param $id string 預設定ID名稱
	 *  @param $value int or string 預設值
	 *  @param $vActive string 設定動作 checked or selected
	 *  @created 2014/04/17
	 */
	public static function sFormDefaultValue($form_name='myForm',$id='flag',$value=1,$vActive="checked") {
		return $javascript_action = "
			<SCRIPT language=javascript>\n
				var elem;\n
				if(document.getElementById) {\n
					elem = document.forms['".$form_name."'].elements['".$id."'];\n
				} else if (document.all){\n
					elem = document.all[\"$id\"];\n
				}\n
				for (i=0;i<elem.length;i++){\n
					if(elem[i].value == '".$value."') {\n
						elem[i].".$vActive."=true;\n
						break;\n
					}\n
				}\n
		    </SCRIPT>\n";
	}

}

?>