<?php

/* 
 */
namespace guzuomuse\perfectscrollbar;
use yii\web\AssetBundle;
//设置别名,setAlias
\Yii::setAlias('@perfectscrollbar', dirname(__FILE__));
class PerfectScrollbarAsset extends AssetBundle{
	public $sourcePath = '@perfectscrollbar/assets/';

	public $js = [
		"js/perfect-scrollbar.js",
                "js/jquery.mousewheel.js",
	];

	public $css = [
		"css/perfect-scrollbar.css",
	];

//	public $publishOptions = [
//		'forceCopy' => true
//	];

	public $depends = [
                'yii\web\JqueryAsset',
	];    
}
