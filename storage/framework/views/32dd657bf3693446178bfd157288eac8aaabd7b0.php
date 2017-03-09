<?php $__env->startSection('content'); ?>
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="breadcrumbDiv col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route('home')); ?>">Pagrindinis</a></li>
                        <?php foreach($categories as $category): ?>
                            <?php if($category->id == $product->category_id): ?>
                                <li><a href="<?php echo e(route('category', ['category' => $category->slug])); ?>"><?php echo e($category->title); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="active"><?php echo e($product->title); ?></li>
                    </ul>
                </div>
            </div>
            <div class="row transitionfx">
                <div class="col-lg-5 col-md-5 col-sm-6 col-lg-offset-1 col-md-offset-1">
                    <img class="zoomImage1 img-responsive" data-src="<?php echo e($product->image); ?>" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->title); ?>"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <h1 class="product-title"><?php echo e($product->title); ?></h1>
                    <div class="details-description">
                        <p><?php echo e($product->description); ?></p>
                    </div>
                    <div class="product-price">
                        <span class="price-sales"><?php echo e($product->price); ?> €</span>
                    </div>
                    <div class="cart-actions productFilter productFilterLook2">
                        <div class="addto row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <a href="<?php echo e(route('product.addToCart', ['id' => $product->id])); ?>" class="btn btn-danger btn-lg btn-block">Į krepšelį</a><!--button btn-block btn-cart cart first-->
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="product-tab w100 clearfix">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Aprašymas</a></li>
                            <li><a href="#shipping" data-toggle="tab">Siuntimas</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="details"><?php echo e($product->description); ?></div>
                            <div class="tab-pane" id="shipping">Informacija ruošiama</div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="gap"></div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.parallax-1.1.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.mousewheel.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.mCustomScrollbar.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('plugins/icheck-1.x/icheck.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/grids.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap.touchspin.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>