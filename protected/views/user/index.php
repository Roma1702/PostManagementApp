<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
/* @var $model User */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Manage User', 'url'=>array('view')),
);
?>

<h1>Users</h1>

<div class="search-form">
    <?php $this->renderPartial('_search', array(
        'model' => $model,
    )); ?>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'pager' => array(
        'class' => 'CLinkPager',
        'maxButtonCount' => 5, // Adjust this to set the maximum number of page buttons to display
        'header' => '', // Hide the default pager header
        'htmlOptions' => array('class' => 'pagination'), // Add CSS class for styling
    ),
)); ?>
