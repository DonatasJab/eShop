<header>
    <div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                    <h3 class="modal-title-site text-center">Prisijungimas</h3>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('auth.login')); ?>" method="POST" class="loginas">
                        <div class="form-group login-username<?php echo e($errors->has('login-username') ? ' has-error' : ''); ?>">
                            <input type="text" name="login-username" class="form-control input" size="20" placeholder="Slapyvardis">
                        </div>
                        <div class="form-group login-password">
                            <input type="password" name="login-password" class="form-control input" size="20" placeholder="Slaptažodis">
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="checkbox login-remember">
                                    <label>
                                        <input name="remember" value="forever" checked="checked" type="checkbox"> Prisiminti mane
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input name="submit" class="btn btn-block btn-lg btn-primary" value="Prisijungti" type="submit">
                        </div>
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-center">
                        Dar neužsiregistravęs? <a data-toggle="modal" data-dismiss="modal" href="#ModalSignup">Užsiregistruoti</a><br>
                        <a href="#">Pamiršai slaptažodį?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                    <h3 class="modal-title-site text-center">Registracija</h3>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('auth.register')); ?>" method="POST" class="registeris">
                        <div class="form-group reg-username">
                            <input type="text" name="username" class="form-control input" size="20" placeholder="Slapyvardis">
                        </div>
                        <div class="form-group reg-email">
                            <input type="text" name="email" class="form-control input" size="20" placeholder="El. paštas">
                        </div>
                        <div class="form-group reg-password">
                            <input type="password" name="password" class="form-control input" size="20" placeholder="Slaptažodis">
                        </div>
                        <div class="form-group reg-password">
                            <input type="password" name="password_confirmation" class="form-control input" size="20" placeholder="Pakartokit slaptažodį">
                        </div>
                        <input name="submit" class="btn btn-block btn-lg btn-primary" value="Registruotis" type="submit">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-center">Jau užsiregistravęs? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">Prisijunk!</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
        <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                        <div class="pull-left ">
                            <ul class="userMenu ">
                                <li class="phone-number">
                                    <a href="callto:+37063694594">
                                        <span><i class="glyphicon glyphicon-phone-alt"></i></span><span class="hidden-xs" style="margin-left:5px">+370-636-94594</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                        <div class="pull-right">
                            <ul class="userMenu">
                                <?php if(Auth::check() && Auth::user()->admin): ?>
                                    <li><a href="<?php echo e(route('admin.home')); ?>">Admin. panele</a></li>
                                <?php endif; ?>
                                <?php if(Auth::check()): ?>
                                    <li><a href="<?php echo e(route('profile.home')); ?>"><span class="hidden-xs">Paskyra</span><i class="glyphicon glyphicon-user hide visible-xs"></i></a></li>
                                    <li><a href="<?php echo e(route('auth.logout')); ?>">Atsijungti</a></li>
                                <?php else: ?>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#ModalLogin">
                                            <span class="hidden-xs">Prisijungti</span>
                                            <i class="glyphicon glyphicon-log-in hide visible-xs "></i> 
                                        </a>
                                    </li>
                                    <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup">Registruotis</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span
                        class="icon-bar"> </span> <span class="icon-bar"> </span></button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i
                        class="fa fa-shopping-cart colorWhite"> </i> <span
                        class="cartRespons colorWhite"> Krepšelis (<?php echo e(count($items) ? $total . ' €' : '0.00 €'); ?>)</span></button>
                <a class="navbar-brand " href="<?php echo e(route('home')); ?>"> <img src="<?php echo e(URL::asset('images/logo.png')); ?>" alt="eShop"> </a>
            </div>

            <div class="navbar-cart collapse">
                <div class="cartMenu col-lg-4 col-xs-12 col-md-4 ">
                    <div class="w100 miniCartTable scroll-pane">
                        <?php if(count($items)): ?>
                            <table>
                                <tbody>
                                    <?php foreach($items as $item): ?>
                                        <tr class="miniCartProduct">
                                            <td style="width:20%" class="miniCartProductThumb">
                                                <?php foreach($categories as $category): ?>
                                                    <?php if($item->options->category_id == $category->id): ?>
                                                        <div>
                                                            <a href="<?php echo e(route('product.home', ['category' => $category->slug, 'slug' => $item->options->slug])); ?>">
                                                                <img src="<?php echo e($item->options->image); ?>" alt="<?php echo e($item->name); ?>">
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </td>
                                            <td style="width:40%">
                                                <div class="miniCartDescription">
                                                    <?php foreach($categories as $category): ?>
                                                        <?php if($item->options->category_id == $category->id): ?>
                                                            <h4>
                                                                <a href="<?php echo e(route('product.home', ['category' => $category->slug, 'slug' => $item->options->slug])); ?>"><?php echo e($item->name); ?></a>
                                                            </h4>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    <div class="price"><span><?php echo e($item->price); ?> €</span></div>
                                                </div>
                                            </td>
                                            <td style="width:10%" class="miniCartQuantity"><?php echo e($item->qty); ?></td>
                                            <td style="width:15%" class="miniCartSubtotal"><span><?php echo e(number_format($item->price, 2)); ?> €</span></td>
                                            <td style="width:5%" class="delete"><a href="<?php echo e(route('cart.delete', ['id' => $item->rowId])); ?>"> x </a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p>Krepšelis tuščias!</p>
                        <?php endif; ?>
                    </div>

                    <div class="miniCartFooter text-right">
                        <h3 class="text-right subtotal"> Išviso: <?php echo e(count($items) ? $total . ' €' : '0.00 €'); ?></h3>
                        <a class="btn btn-sm btn-danger" href="<?php echo e(route('cart')); ?>"><i class="fa fa-shopping-cart"></i> Peržiūrėti krepšelį</a>
                        <a href="<?php echo e(route('checkout')); ?>" class="btn btn-sm btn-primary">Pirkti</a>
                    </div>
                </div>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php foreach($categories as $category): ?>
                        <li><a href="<?php echo e(route('category', ['category' => $category->slug])); ?>"><?php echo e($category->title); ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <div class="nav navbar-nav navbar-right hidden-xs">
                    <div class="dropdown cartMenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart"></i><span class="cartRespons"> Krepšelis (<?php echo e(count($items) ? $total . ' €' : '0.00 €'); ?>)</span><b class="caret"></b>
                        </a>
                        <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                            <div class="w100 miniCartTable scroll-pane">
                                <?php if(count($items)): ?>
                                    <table>
                                        <tbody>
                                        <?php foreach($items as $item): ?>
                                            <tr class="miniCartProduct">
                                                <td style="width:20%" class="miniCartProductThumb">
                                                    <?php foreach($categories as $category): ?>
                                                        <?php if($item->options->category_id == $category->id): ?>
                                                            <div>
                                                                <a href="<?php echo e(route('product.home', ['category' => $category->slug, 'slug' => $item->options->slug])); ?>">
                                                                    <img src="<?php echo e($item->options->image); ?>" alt="<?php echo e($item->name); ?>">
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </td>
                                                <td style="width:40%">
                                                    <div class="miniCartDescription">
                                                        <?php foreach($categories as $category): ?>
                                                            <?php if($item->options->category_id == $category->id): ?>
                                                                <h4>
                                                                    <a href="<?php echo e(route('product.home', ['category' => $category->slug, 'slug' => $item->options->slug])); ?>"><?php echo e($item->name); ?></a>
                                                                </h4>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        <div class="price"><span><?php echo e($item->price); ?> €</span></div>
                                                    </div>
                                                </td>
                                                <td style="width:10%" class="miniCartQuantity"><?php echo e($item->qty); ?></td>
                                                <td style="width:15%" class="miniCartSubtotal"><span><?php echo e(number_format($item->price, 2)); ?> €</span></td>
                                                <td style="width:5%" class="delete"><a href="<?php echo e(route('cart.delete', ['id' => $item->rowId])); ?>"> x </a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <p>Krepšelis tuščias!</p>
                                <?php endif; ?>
                            </div>

                            <div class="miniCartFooter text-right">
                                <h3 class="text-right subtotal"> Išviso: <?php echo e(count($items) ? $total . ' €' : '0.00 €'); ?></h3>
                                <a class="btn btn-sm btn-danger" href="<?php echo e(route('cart')); ?>"><i class="fa fa-shopping-cart"></i> Peržiūrėti krepšelį</a>
                                <a href="<?php echo e(route('checkout')); ?>" class="btn btn-sm btn-primary">Pirkti</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
