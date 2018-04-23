<?php
/**
 * Created by PhpStorm.
 * User: F6
 * Date: 2018/4/17
 * Time: 20:16
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this -> params['breadcrumbs'][] = "添加";
?>
<?= $this->render('//layouts/header');?>
<div class="main-wthree c_g_border">
    <div class="container">
        <div class="sin-w3-agile">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']);?>
            <div class="username">
                <span class="username">用户名:</span>
                <?= $form -> field($model,'username') -> label(false) -> textInput(['class' => 'name','placeholder'=>'请输入2-10位的用户名...'])?>
                <div class="clearfix"></div>
            </div>
            <div class="password-agileits">
                <span class="username">邮箱:</span>
                <?= $form -> field($model,'email') -> label(false) -> textInput(['class' => 'name','placeholder'=>'请输入邮箱...'])?>
                <div class="clearfix"></div>
            </div>
            <div class="password-agileits">
                <span class="username">密码:</span>
                <?= $form -> field($model,'password') -> label(false) -> passwordInput(array('class'=>'password','placeholder'=>'请输入6-8位密码....'))?>
                <div class="clearfix"></div>
            </div>
            <div class="form-dignup">
                <?= Html::submitInput('添加',['class' => 'login','name' => 'signup-button'])?>
            </div>
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>
<?= $this->render('//layouts/footer');?>
</div>
</div>

