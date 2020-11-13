<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<!--<div class="site-error">

    <h1><?php // Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?php // nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>-->

<section class="page-404">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
<!--                                <a href="index.html">
                                        <img src="images/logo.png" alt="site logo" />
                                        Re-Roll
                                </a>-->
                                <h1>404</h1>
                                <h2>Page Not Found</h2>
                                <a href="<?= Url::toRoute(['/']) ?>" class="btn btn-main"><i class="tf-ion-android-arrow-back"></i> Go Home</a>
                                
                        </div>
                </div>
        </div>
</section>
