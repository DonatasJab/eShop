<?php if(Session::has('info')): ?>
    <div class="container">
        <div class="alert alert-success"><?php echo e(Session::get('info')); ?></div>
    </div>
<?php endif; ?>