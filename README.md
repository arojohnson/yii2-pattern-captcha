Yii 2 - Pattern based captcha
=====================

yii2-pattern-captcha is a new version of captcha or puzzle to solve smaller problems in order to make the web application is accessed by human.

Steps to follow.

Install via composer 

`composer require johnson/yii2-pattern-captcha`

### Then In your form

`<?=
            JayPattern::widget();
            ?>`
			
System will generate the dynamic numbers and the users need to draw pattern without releasing the mouse button!. Each single swipe or touch will be considered as pattern submission.

### In your Controller

    if (Yii::$app->request->isPost) {
                $jp = new \Johnson\JayPattern();
                
                echo json_encode($jp->verifyCode());
                Yii::$app->end();
     }

