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
                <h1 class="page-header">Kategorijos</h1>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kategorijos <a href="<?php echo e(route('admin.new.category')); ?>" class="btn-xs btn-success pull-right">Nauja kategorija</a>
                        </div>
                        <div class="panel-body">
                            <?php if(count($categories)): ?>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <?php foreach($categories as $category): ?>
                                                <tr>
                                                    <td><?php echo e($category->title); ?></td>
                                                    <td width="5%;">
                                                        <a href="<?php echo e(route('admin.edit.category', ['id' => $category->id])); ?>"><span style="color: grey;" class="glyphicon glyphicon-pencil"></span></a>
                                                        <a href="<?php echo e(route('admin.delete.category', ['id' => $category->id])); ?>"><span style="color: red;" class="glyphicon glyphicon-trash"></span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else: ?>
                                Nėra sukurtų kategorijų!
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>