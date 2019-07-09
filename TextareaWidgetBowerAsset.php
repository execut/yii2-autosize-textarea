<?php
namespace execut\autosizeTextarea;


use yii\web\JqueryAsset;

class TextareaWidgetBowerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery.ns-autogrow/dist';
    public $js = [
        'jquery.ns-autogrow.js',
    ];

    public $css = [];

    public $depends = [
        JqueryAsset::class,
    ];
}