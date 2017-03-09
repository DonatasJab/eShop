<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="<?php echo e(route('admin.home')); ?>">Apžvalga</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="<?php echo e(route('admin.products')); ?>">Prekės</a></li>
                    <li><a href="<?php echo e(route('admin.categories')); ?>">Kategorijos</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Apžvalga</h1>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Vartotojai <span class="badge badge-success pull-right"><?php echo e(count($users)); ?></span></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Slapyvardis</th>
                                        <th>Vardas</th>
                                        <th>Pavardė</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $user): ?>
                                        <tr>
                                            <td><?php echo e($user->username); ?></td>
                                            <td><?php echo e($user->first_name); ?></td>
                                            <td><?php echo e($user->last_name); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="glyphicon glyphicon-check"></span> Užsakymai <span class="badge badge-success pull-right"><?php echo e(count($orders)); ?></span></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Užsisakė</th>
                                        <th>Užsakymo data</th>
                                        <th>Kiekis</th>
                                        <th>Suma</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($orders as $order): ?>
                                        <tr>
                                            <td><?php echo e($order->username); ?></td>
                                            <td><?php echo e($order->created_at); ?></td>
                                            <td><?php echo e($order->quantity); ?></td>
                                            <td><?php echo e($order->total); ?> €</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>