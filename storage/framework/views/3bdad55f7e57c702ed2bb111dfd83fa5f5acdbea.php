<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="<?php echo e(route('admin.home')); ?>">Apžvalga</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="<?php echo e(route('admin.products')); ?>">Prekės</a></li>
                    <li><a href="<?php echo e(route('admin.categories')); ?>">Kategorijos</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Produktai</h1>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Produktai <a href="<?php echo e(route('admin.new.product')); ?>" class="btn-xs btn-success pull-right">Naujas produktas</a>
                        </div>
                        <div class="panel-body">
                            <?php if(count($products)): ?>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <?php foreach($products as $product): ?>
                                                <tr>
                                                    <?php if($product->image): ?>
                                                        <td><img src="<?php echo e($product->image); ?>" width="50px" height="50px"></td>
                                                    <?php else: ?>
                                                        <td><img src="http://theccat.com/wp-content/themes/gonzo/images/no-image-featured-image.png" width="50px" height="50px"></td>
                                                    <?php endif; ?>
                                                    <td style="vertical-align: middle;"><?php echo e($product->title); ?></td>
                                                    <td style="vertical-align: middle;"><?php echo e($product->price); ?> €</td>
                                                    <td width="5%;" style="vertical-align: middle;">
                                                        <a href="<?php echo e(route('admin.edit.product', ['id' => $product->id])); ?>"><span style="color: grey;" class="glyphicon glyphicon-pencil"></span></a>
                                                        <a href="<?php echo e(route('admin.delete.product', ['id' => $product->id])); ?>"><span style="color: red;" class="glyphicon glyphicon-trash"></span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else: ?>
                                Nėra pridėta jokių prekių!
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>