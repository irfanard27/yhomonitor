<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HistoriKerja */

$this->title = 'Create Histori Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Histori Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="histori-kerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
