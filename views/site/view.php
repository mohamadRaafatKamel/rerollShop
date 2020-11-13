<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = $product->name ;
$this->params['breadcrumbs'][] = $this->title;
?>
 
<div class="container">
        <div class="row mt-20">
                <div class="col-md-5">
                        <div class="single-product-slider">
                                <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                                        <div class='carousel-outer'>
                                                <!-- me art lab slider -->
                                                <?php if($medias){ ?>
                                                <div class='carousel-inner' style="height: 700px;">
                                                    <!--cover-->
                                                    <?php if($product['cover_img']){ ?>
                                                        <div class='item active'>
                                                            <img src='<?=  Url::toRoute([ $product['cover_img'] ])  ?>' width="100%" height="100%"/>
                                                        </div>
                                                    <?php } ?>
                                                    <!--allImg-->
                                                    <?php 
                                                            foreach ($medias as $media) {
                                                    ?>
                                                                <div class='item'>
                                                                    <img src='<?=  Url::toRoute([ $media['path'] ])  ?>' width="100%" height="100%"/>
                                                                </div>
                                                    <?php          
                                                            }
                                                    ?>
                                                </div>

                                                <!-- sag sol -->
                                                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                                        <i class="tf-ion-ios-arrow-left"></i>
                                                </a>
                                                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                                        <i class="tf-ion-ios-arrow-right"></i>
                                                </a>
                                                
                                                <?php }else{
                                                        echo 'No Image';
                                                    }
                                                    ?>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="col-md-7">
                        <div class="single-product-details">
                                <h2><?= $product->name ?></h2>
                                <p class="product-price"><?= $product->product_price ?> جنيه</p>
                                <p class="product-description mt-20">
                                    <?= $product->details ?>
                                </p>
                                <div class="product-category">
                                    <ul><li>سعر الاشتراك :</li></ul>
                                    <span><?= $product->random_price ?></span>
                                    <samp> جنيه </samp>
                                </div>
                                <div class="product-category">
                                    <ul><li> التصنيف :</li></ul>
                                    <span><?= $product->cat->name ?></span>
                                </div>
                                <div class="product-category">
                                    <ul><li> تاريخ السحب :</li></ul>
                                    <span><?= $product->randem_date ?></span>
                                </div>
                                <div class="product-category">
                                    <ul><li> كود الاشتراك :</li></ul>
                                    <span><?= $product->product_code ?></span>
                                </div>
                                <?php if(!empty($product->brand)){?>
                                    <div class="product-category">
                                        <ul><li> الشركه :</li></ul>
                                        <span><?= $product->brand ?></span>
                                    </div>
                                <?php } ?>
                                <?php if(!empty($product->color)){?>
                                    <div class="product-category">
                                        <ul><li> اللون :</li></ul>
                                        <span><?= $product->color ?></span>
                                    </div>
                                <?php } ?>
                                <?php if(!empty($product->size)){?>
                                    <div class="product-category">
                                        <ul><li> الحجم :</li></ul>
                                        <span><?= $product->size ?></span>
                                    </div>
                                <?php } ?>
                                <?php if(!empty($product->gender)){?>
                                    <div class="product-category">
                                        <ul><li> مخصص ل :</li></ul>
                                        <span><?= $product->gender ?></span>
                                    </div>
                                <?php } ?>
                        </div>
                </div>
        </div>
</div>
