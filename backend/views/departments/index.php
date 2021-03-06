<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Departments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'branchesBranch.branch_name',
            [
                'attribute' => 'branches_branch_id',
                'value' => 'branchesBranch.branch_name',
            ],
            'department_name',
            [
                'attribute' => 'companies_company_id',
                'value' => 'companiesCompany.company_name',
            ],
            'department_created_date',
            // 'department_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
