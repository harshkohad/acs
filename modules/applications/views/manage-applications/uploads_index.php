<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\applications\models\ApplicationsUploadsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Upload History';
$this->params['breadcrumbs'][] = ['label' => 'Upload Applications', 'url' => ['upload-applications']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="panel">
    <div class="panel-body">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',
                'institute_id',
                'loan_type_id',
                'file_name',
                [
                    'attribute' => 'status',
                    'value' => function($model) {
                        return $model->status == 0 ? 'New' : 'Processed';
                    },
                    'filter' => [
                        0 => 'New',
                        1 => 'Processed'
                    ],
                ],
                // 'created_by',
                'created_on',
                // 'updated_by',
                // 'updated_on',
                // 'is_deleted',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</section>
