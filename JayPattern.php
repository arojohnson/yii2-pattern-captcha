<?php

/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * @package - Johnson
 * Yii2 pattern captcha is nine dots based pattern Captcha to match with the numbers given in the box
 */

namespace Johnson;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 */
class JayPattern extends Widget {

    public $width = 640, $height = 480, $cssClass = '', $id = '', $imgID = '';

    public function init() {
        parent::init();
        JayPatternAsset::register($this->getView());
    }

    public function run() {
        $id = md5(uniqid());
        $eleID = ($this->id) ? $this->id : $id;
        return $this->render('pattern', []);
    }

}
