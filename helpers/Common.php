<?php


namespace app\helpers;


use yii\base\Model;

class Common
{
    public static function getErrorFromModel(Model $model): ?string
    {
        $modelErrors = $model->errors;
        $firstError = array_values($modelErrors)[0] ?? null;
        return $firstError[0] ?? '';
    }
}