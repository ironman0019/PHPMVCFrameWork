
<?php 

/** @var $this \emadisavi\phpmvc\View */

$this->title = 'Contact';

?>

<h1>Contact us</h1>

<?php $form = \emadisavi\phpmvc\form\Form::begin('', 'post')  ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new \emadisavi\phpmvc\form\TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary mt-3">Submit</button>
<?php \emadisavi\phpmvc\form\Form::end() ?>
 