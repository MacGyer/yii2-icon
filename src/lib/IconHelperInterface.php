<?php

namespace macgyer\yii2icon\lib;

use yii\web\View;

interface IconHelperInterface
{
    public function render();

    public static function registerAssets(View $view);
}
