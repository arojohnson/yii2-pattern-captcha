Yii 2 - Pattern based captcha
=====================

yii2-pattern-captcha is a extension for Yii Framework version above 2.0.0 and it's new version of captcha or puzzle to solve smaller problems in order to make the web application is accessed by human.

Steps to follow.

Install via composer 

`composer require johnson/yii2-pattern-captcha`

### Then In your form
    <?=
		JayPattern::widget([
		'ajaxUrl' => 'http://localhost/yii2-basic/web/index/login',
		'name' => 'pattern'
		]);
	?>
			
System will generate the dynamic numbers and the users need to draw pattern without releasing the mouse button!. Each single swipe or touch will be considered as pattern submission.

### Parameters

- **ajaxUrl** - the verification call will be made to this URL
- **name** - the input field that will be amended in the widget. Later you can verify if the value of the input given by you *has empty value* then the captcha failed or if *it has value as true* then captcha has been passed.

The selector may be like this ===> input[name="< your-given-name >']

### In your Controller

    if (Yii::$app->request->isPost) {
                $jp = new \Johnson\JayPattern();
                
                echo json_encode($jp->verifyCode());
                Yii::$app->end();
     }



Please do your comments about improvements and other stuffs.
