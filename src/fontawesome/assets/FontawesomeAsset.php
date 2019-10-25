<?php
/**
 * @link https://github.com/MacGyer/yii2-icon
 * @copyright Copyright (c) 2017 ... MacGyer for pluspunkt coding
 * @license https://github.com/MacGyer/yii2-icon/blob/master/LICENSE
 */

namespace macgyer\yii2icon\fontawesome\assets;

use yii\web\AssetBundle;

/**
 * FontawesomeAsset bundles all JS files needed.
 *
 * @author Christoph Erdmann
 * @package assets
 */
class FontawesomeAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@vendor/fortawesome/font-awesome/js';

    /**
     * @var array list of JS files that this bundle contains.
     */
    public $js = ['all.min.js'];
}
