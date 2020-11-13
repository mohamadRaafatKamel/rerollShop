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
                                                <div class='carousel-inner '>
                                                    <?php if($product['cover_img']){ ?>
                                                        <div class='item active'>
                                                            <img src='<?=  Url::toRoute([ $product['cover_img'] ])  ?>' width="457px" height="582px"/>
                                                        </div>
                                                    <?php } ?>
                                                    <?php 
                                                            foreach ($medias as $media) {
                                                    ?>
                                                                <div class='item'>
                                                                    <img src='<?=  Url::toRoute([ $media['path'] ])  ?>' width="457px" height="582px"/>
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
                                
                                <p class="product-description mt-20">
                                    
                                    <?= $product->details ?>
                                </p>
                        </div>
                </div>
        </div>
</div>
