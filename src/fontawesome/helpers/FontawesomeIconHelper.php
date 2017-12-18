<?php

namespace macgyer\yii2icon\fontawesome\helpers;

use macgyer\yii2icon\fontawesome\assets\FontawesomeAsset;
use macgyer\yii2icon\lib\BaseIconHelper;
use macgyer\yii2icon\lib\IconHelperInterface;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;

class FontawesomeIconHelper extends BaseIconHelper implements IconHelperInterface
{
    const TYPE_REGULAR = 'r';
    const TYPE_SOLID = 's';
    const TYPE_LIGHT = 'l';
    const TYPE_BRAND = 'b';

    const SIZE_XS = 'xs';
    const SIZE_SM = 'sm';
    const SIZE_LG = 'lg';

    const PULL_LEFT = 'left';
    const PULL_RIGHT = 'right';

    const ANIMATE_PULSE = 'pulse';
    const ANIMATE_SPIN = 'spin';

    public $name;
    public $type = self::TYPE_SOLID;
    public $size;
    public $hasFixedWidth;
    public $pull;
    public $hasBorder;
    public $animation;
    public $flipHorizontal;
    public $flipVertical;
    public $rotation;
    public $right;
    public $left;
    public $down;
    public $up;
    public $grow;
    public $shrink;

    /**
     * @var FontawesomeIconHelper
     */
    public $mask;
    public $inverse;

    public static function registerAssets(View $view)
    {
        FontawesomeAsset::register($view);
    }

    public function solid()
    {
        $this->type = self::TYPE_SOLID;
        return $this;
    }

    public function light()
    {
        $this->type = self::TYPE_LIGHT;
        return $this;
    }

    public function brand()
    {
        $this->type = self::TYPE_BRAND;
        return $this;
    }

    public function regular()
    {
        $this->type = self::TYPE_REGULAR;
        return $this;
    }

    public function size($size)
    {
        if (ctype_digit($size) || is_int($size)) {
            $this->size = "{$size}x";
        } else {
            $this->size = $size;
        }

        return $this;
    }

    public function fixedWidth()
    {
        $this->hasFixedWidth = true;
        return $this;
    }

    public function pullLeft()
    {
        $this->pull = self::PULL_LEFT;
        return $this;
    }

    public function pullRight()
    {
        $this->pull = self::PULL_RIGHT;
        return $this;
    }

    public function border()
    {
        $this->hasBorder = true;
        return $this;
    }

    public function pulse()
    {
        $this->animation = self::ANIMATE_PULSE;
        return $this;
    }

    public function spin()
    {
        $this->animation = self::ANIMATE_SPIN;
        return $this;
    }

    public function shrink($factor)
    {
        $this->shrink = $factor;
        return $this;
    }

    public function grow($factor)
    {
        $this->grow = $factor;
        return $this;
    }

    public function up($factor)
    {
        $this->up = $factor;
        return $this;
    }

    public function down($factor)
    {
        $this->down = $factor;
        return $this;
    }

    public function left($factor)
    {
        $this->left = $factor;
        return $this;
    }

    public function right($factor)
    {
        $this->right = $factor;
        return $this;
    }

    public function rotate($angle)
    {
        $this->rotation = $angle;
        return $this;
    }

    public function flipVertical()
    {
        $this->flipVertical = true;
        return $this;
    }

    public function flipHorizontal()
    {
        $this->flipHorizontal = true;
        return $this;
    }

    public function inverse()
    {
        $this->inverse = true;
        return $this;
    }

    public function mask(FontawesomeIconHelper $instance)
    {
        $this->mask = $instance;
        return $this;
    }

    public function render()
    {
        foreach ($this->getCssClasses() as $key => $cssClass) {
            Html::addCssClass($this->options, [$key => $cssClass]);
        }

        $transformation = implode(' ', $this->getTransformations());
        if ($transformation) {
            if (!ArrayHelper::keyExists('data-fa-transform', $this->options)) {
                $this->options['data-fa-transform'] = $transformation;
            } else {
                $this->options['data-fa-transform'] .= ' ' . $transformation;
            }
        }

        if ($this->mask) {
            $this->options['data-fa-mask'] = implode(' ', $this->mask->getCssClasses());
        }

        return Html::tag($this->tag, '', $this->options);
    }

    public function getCssClasses()
    {
        $cssClasses = [
            'fa-type' => "fa{$this->type}",
            'fa-name' => "fa-{$this->name}",
        ];

        if ($this->size) {
            $cssClasses['fa-size'] = "fa-{$this->size}";
        }

        if ($this->hasBorder) {
            $cssClasses['fa-border'] = 'fa-border';
        }

        if ($this->hasFixedWidth) {
            $cssClasses['fa-fw'] = 'fa-fw';
        }

        if ($this->pull) {
            $cssClasses['fa-pull'] = "fa-pull{$this->pull}";
        }

        if ($this->animation) {
            $cssClasses['fa-animate'] = "fa-{$this->animation}";
        }

        if ($this->inverse) {
            $cssClasses['fa-inverse'] = 'fa-inverse';
        }

        return $cssClasses;
    }

    public function getTransformations()
    {
        $transformations = [];

        if ($this->shrink) {
            $transformations[] = "shrink-{$this->shrink}";
        }

        if ($this->grow) {
            $transformations[] = "grow-{$this->grow}";
        }

        if ($this->up) {
            $transformations[] = "up-{$this->up}";
        }

        if ($this->down) {
            $transformations[] = "down-{$this->down}";
        }

        if ($this->left) {
            $transformations[] = "left-{$this->left}";
        }

        if ($this->right) {
            $transformations[] = "right-{$this->right}";
        }

        if ($this->rotation) {
            $transformations[] = "rotate-{$this->rotation}";
        }

        if ($this->flipHorizontal) {
            $transformations[] = "flip-h";
        }

        if ($this->flipVertical) {
            $transformations[] = "flip-v";
        }

        return $transformations;
    }
}
