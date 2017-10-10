<?php

namespace app\models;

use Yii;
use \app\models\base\HistoriKerja as BaseHistoriKerja;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "histori_kerja".
 */
class HistoriKerja extends BaseHistoriKerja
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
