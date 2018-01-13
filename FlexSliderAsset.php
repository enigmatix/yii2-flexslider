<?php
/**
 * Created by PhpStorm.
 * User: joels
 * Date: 21/04/2017
 * Time: 12:42 PM
 */

namespace enigmatix\flexSlider;


use yii\web\AssetBundle;



class FlexSliderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/flexslider';
    public $css = [
        'flexslider.css',
    ];
    public $js = [
        'jquery.flexslider-min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}