<?php

/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * @package - Johnson
 * Yii2 pattern captcha is nine dots based pattern Captcha to match with the numbers given in the box
 */

namespace Johnson;

use Yii;
use yii\base\Widget;

/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 */
class JayPattern extends Widget {

    /**
     *
     * @var String name of the input field generated
     */
    public $name = '';
    
    /**
     *
     * @var Ajax URL
     */
    public $ajaxUrl = '';

    public function init() {
        parent::init();
        JayPatternAsset::register($this->getView());
    }

    /**
     * To generate random String
     * @return String
     */
    private function genRandCode() {
        $strs = str_split('123456789');
        shuffle($strs);
        $ret = array_chunk($strs, 4);
        return implode('`', $ret[0]);
    }

    /**
     * 
     * @param int $mixCode
     * @param int $code
     * @return String
     */
    private function getActualCode($mixCode, $code) {
        $coded = strrev($code);
        unset($mixCode[0]);
        $dataCoded = str_split($coded);
        $res = '';
        foreach ($dataCoded as $char) {
            $res .= $mixCode[$char];
        }
        return trim($res);
    }

    /**
     * Verifies the ajax based token is valid
     * @return Array
     */
    public function verifyCode() {
        if (isset($_SESSION['_pt_code']) && Yii::$app->request->isPost) {
            $code = Yii::$app->request->post('jcode');
            $data = Yii::$app->request->post('data');
            $mixCode = explode('-', 'x-' . $data);
            $sessCode = preg_replace('/[^0-9.]+/', '', $_SESSION['_pt_code']);
            $verify = $this->getActualCode($mixCode, $code);
            return ['status' => (int) ((int) trim($sessCode) === (int) $verify)];
        }
        return ['status' => 0];
    }

    public function run() {
        $rand = $this->genRandCode();
        $_SESSION['_pt_code'] = $rand;
        return $this->render('pattern', ['rand' => $rand, 'name' => $this->name, 'url' => $this->ajaxUrl]);
    }

}
