<?php

use kartik\grid\EditableColumn;
use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use kartik\grid\SerialColumn;
use yii\helpers\Html;

use yii\widgets\Pjax;

/**
 * @var $this yii\web\View
 * @var $dataProvider
 * @var $searchModel
 */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?php
    Pjax::begin(); ?>
    <?php
    // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => SerialColumn::class],
                
                [
                    'class' => EditableColumn::class,
                    'attribute' => 'username',
                ],
                //'device_id',
                //'display_name',
                //'is_login:boolean',
                //'status',
                //'work_shift',
                //'role',
                //'number_sp',
                //'created_at',
                //'province_id',
//                'is_admin_master:boolean',
                //'version',
                
                ['class' => ActionColumn::class],
            ],
        ]
    ); ?>
    
    <?php
    Pjax::end(); ?>

</div>
