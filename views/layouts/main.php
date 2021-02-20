<?php

/**
 * @var $this View
 * @var $content string
 */


use app\assets\AdminLTEAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;
use yii\web\View;

AppAsset::register($this);
AdminLTEAsset::register($this);
?>
<?php
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <?php
    $this->head() ?>
</head>
<body>
<?php
$this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin(
        [
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-lg navbar-light bg-dark text-white',
            ],
        ]
    );
    echo Nav::widget(
        [
            'options' => ['class' => ''],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]
    );
    NavBar::end();
    ?>

    <div class="container-fluid">
        <!--        <div class="row">-->
        <!--            <div class="col-sm-6 offset-6">-->
        <?= Breadcrumbs::widget(
            [
                'links' => $this->params['breadcrumbs'] ?? [],
                'options' => ['class' => 'float-sm-right']
            ]
        ) ?>
        <!--            </div>-->
        <!--        </div>-->
        
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php
$this->endBody() ?>
</body>
</html>
<?php
$this->endPage() ?>
