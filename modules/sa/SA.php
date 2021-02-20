<?php

namespace app\modules\sa;

/**
 * sa module definition class
 */
class SA extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\sa\controllers';
    
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        
        // custom initialization code goes here
//        \Yii::configure($this, require __DIR__ . '/config.php');
    }
}
