<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\widgets\ListView;

$this->title = 'منتجات';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <div class="col-lg-9 col-md-8 padding-right-30">

        <div class="row">
            <?php           // print_r($carList);die();
            Pjax::begin(['id' => 'product', 'enablePushState' => 0]);
            echo ListView::widget([
                'dataProvider' => $prodList,
                'options' => [
                    'tag' => null,
                ],
                'itemOptions' => [
                    'tag' => null,
                ],
                'layout' => "{items}\n<div class='clearfix'></div><div class='pagination-container margin-top-30 margin-bottom-0 text-center'>{summary}\n{pager}</div>",
                'itemView' => '_prod_item',
                'emptyText' => 'لا يوجد منتجات ',
            ]);
            Pjax::end();
            ?>
        </div>
    </div>
    
    
</div>
