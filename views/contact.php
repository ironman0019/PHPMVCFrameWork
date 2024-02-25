
<?php 

/** @var $this \App\core\View */

$this->title = 'Contact';

?>

<h1>Contact us</h1>

<?php $form = \App\core\form\Form::begin('', 'post')  ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new \App\core\form\TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary mt-3">Submit</button>
<?php \App\core\form\Form::end() ?>
 