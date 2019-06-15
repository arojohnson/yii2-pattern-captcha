<?php
/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * View File - for Yii2-pattern-captcha
 */
?>
<div class="allPatternBox">
    <div >
        <div class="jpattern">
            <?= $rand ?>
        </div>
        <div class="jreload">

        </div>
    </div>
    <input data-url="<?= !empty($url) ? $url : '/' ?>" type="password" name="<?= $name ? $name : 'password' ?>" class="patternlock" />
</div>
<div class="jsucc" style="display: none;">

</div>
