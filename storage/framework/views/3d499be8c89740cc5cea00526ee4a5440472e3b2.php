<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="<?php echo e(route('admin.home')); ?>">Apžvalga</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="<?php echo e(route('admin.products')); ?>">Prekės</a></li>
                    <li class="active"><a href="<?php echo e(route('admin.categories')); ?>">Kategorijos</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Nauja kategorija</h1>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nauja kategorija
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo e(route('admin.new.category')); ?>" method="POST">
                                <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                                    <label for="title" class="control-label">Pavadinimas</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Kategorijos pavadinimas" value="<?php echo e(old('title')); ?>">
                                    <?php if($errors->has('title')): ?>
                                        <span class="help-block"><?php echo e($errors->first('title')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group pull-right">
                                    <button type="submit" class="btn btn-success">Pridėti</button>
                                </div>
                                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>