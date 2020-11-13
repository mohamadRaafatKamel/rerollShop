<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
//        'id' => 'login-form',
        'method' => 'POST',
        'options' => [
            'enctype'=> 'multipart/form-data',
        ],
        'fieldConfig' => [
            //'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'template' => "<div class=\"col-lg-5\">{error}</div>\n<div class=\"col-lg-6\">{input}</div>\n{label}",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ]
    ]); ?>
    
    <div class="form-group">
        
    <?= $form->field($model, 'name')->textInput(['maxlength' => true ,'required'=>true]) ?>

    <?= $form->field($model, 'product_price')->textInput(['maxlength' => true ,'required'=>true,'type' => 'number']) ?>

    <?= $form->field($model, 'random_price')->textInput(['maxlength' => true ,'required'=>true,'type' => 'number']) ?>

    <?= $form->field($model, 'cat_id')->dropDownList(\app\models\Category::getCategoryList(), ['prompt' => 'أختر']); ?>
     
    <?= $form->field($model, 'randem_date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList(
                ['للرجال' => 'للرجال', 'للنساء' => 'للنساء', 'للاطفال' => 'للاطفال'], ['prompt' => 'كل']
            ); ?>
    
    <?= $form->field($model, 'product_code')->textInput(['maxlength' => true ,'required'=>true]) ?>

    <?= $form->field($model, 'details')->textarea(['required'=>true ,'maxlength' => true]) ?>
    
    <?= $form->field($model, 'cover_img')->fileInput(['required'=>true ,'accept'=>'image/*']) ?>

    <?= $form->field($media, 'path[]')->fileInput(['multiple'=>true ,'required'=>true ,'accept'=>'image/*'])->label(' صور') ?>
    
    </div>
    <div class="form-group" style="float: right;">
        <?= Html::submitButton('حفظ', ['class' => 'btn btn-main btn-small btn-round']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
