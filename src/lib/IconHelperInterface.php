<?php

namespace common\components\iconhelper\lib;

use yii\web\View;

interface IconHelperInterface
{
    public function render();

    public static function registerAssets(View $view);
}
