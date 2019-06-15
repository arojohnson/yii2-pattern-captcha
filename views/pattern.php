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
    <input data-url="http://localhost/yii2-basic/web/index.php?r=site/login" type="password" id="password" name="password" class="patternlock" />
</div>
<div class="jsucc" style="display: none;">

</div>
