
<?php 

/** @var $this \App\core\View */

$this->title = 'Register';

?>

<h1>Create an account</h1>

<?php $form =  \App\core\form\Form::begin('' , 'post') ; ?>

<div class="row">
    <div class="col">
      <?php echo $form->field($model,'firstname') ?>
    </div>
    <div class="col">
      <?php echo $form->field($model,'lastname') ?>
    </div>
</div>

<?php echo $form->field($model,'email') ?>
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

<?php echo $form->field($model,'password')->passwordField() ?>
<?php echo $form->field($model,'passwordConfirm')->passwordField() ?>


<button type="submit" class="btn btn-primary mt-3">Submit</button>

<?php \App\core\form\Form::end(); ?>


