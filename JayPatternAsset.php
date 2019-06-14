<?php

/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * @desc - Yii2 pattern captcha is nine dots based pattern Captcha to match with the numbers given in the box
 */

namespace Johnson;

use yii\web\AssetBundle;
use yii\web\View;

class JayPatternAsset extends AssetBundle {

    public $css = [
        'css/patternlock.css',
    ];
    public $js = [
        'js/jaypatternlock.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init() {
        //Initiate the asset bundle at the beginning of body
        $this->jsOptions['position'] = View::POS_BEGIN;
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }

}
