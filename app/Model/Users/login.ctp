<div class="users form">
    <?php echo $this->Session->flash(); ?>
    <div class="alert alert-info">
        <a class="close" data-dismiss="alert">×</a>
        <?php echo __('Enter your username and password'); ?>
    </div>

    <?php echo $this->Form->create('User'); ?>
    <fieldset>

        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Login')); ?>
</div>

<script type="text/javascript">
     $(document).ready(function() {

         $("#flashMessage").addClass("alert alert-error");
     });
</script>