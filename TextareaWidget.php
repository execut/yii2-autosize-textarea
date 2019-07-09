<?php
namespace execut\autosizeTextarea;


use execut\yii\jui\InputWidget;
use yii\helpers\Html;

class TextareaWidget extends InputWidget
{
    public function run()
    {
        $this->registerWidget();

        return Html::activeTextarea($this->model, $this->attribute, $this->options);
    }
}