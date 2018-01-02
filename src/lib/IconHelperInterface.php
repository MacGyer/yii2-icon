<?php
/**
 * @link https://github.com/MacGyer/yii2-icon
 * @copyright Copyright (c) 2017 ... MacGyer for pluspunkt coding
 * @license https://github.com/MacGyer/yii2-icon/blob/master/LICENSE
 */

namespace macgyer\yii2icon\lib;

use yii\web\View;

/**
 * Interface IconHelperInterface
 * @package lib
 */
interface IconHelperInterface
{
    /**
     * Renders the icon tag.
     *
     * @return string the rendered markup
     */
    public function render();

    /**
     * Registers the required asset files.
     *
     * @param View $view the view object
     */
    public static function registerAssets(View $view);
}
