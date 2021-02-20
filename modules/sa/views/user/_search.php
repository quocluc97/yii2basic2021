<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sa\search\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?= $form->field($model, 'access_token') ?>

    <?php // echo $form->field($model, 'device_id') ?>

    <?php // echo $form->field($model, 'display_name') ?>

    <?php // echo $form->field($model, 'is_login')->checkbox() ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'work_shift') ?>

    <?php // echo $form->field($model, 'role') ?>

    <?php // echo $form->field($model, 'number_sp') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'province_id') ?>

    <?php // echo $form->field($model, 'is_admin_master')->checkbox() ?>

    <?php // echo $form->field($model, 'version') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
