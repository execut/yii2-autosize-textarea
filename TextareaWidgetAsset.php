<?php
namespace execut\autosizeTextarea;


use execut\yii\web\AssetBundle;
use yii\jui\JuiAsset;
use yii\web\JqueryAsset;

class TextareaWidgetAsset extends AssetBundle
{
    public $depends = [
        TextareaWidgetBowerAsset::class,
        JuiAsset::class,
    ];
}