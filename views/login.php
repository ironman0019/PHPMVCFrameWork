<?php 

/** @var $this \emadisavi\phpmvc\View */

$this->title = 'Login';

?>

<h1>Login</h1>

<?php $form =  \emadisavi\phpmvc\form\Form::begin('' , 'post') ; ?>



<?php echo $form->field($model,'email') ?>

<?php echo $form->field($model,'password')->passwordField() ?>

<button type="submit" class="btn btn-primary mt-3">Submit</button>

<?php \emadisavi\phpmvc\form\Form::end(); ?>


