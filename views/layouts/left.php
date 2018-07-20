<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo 'AAA'; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <?php if (1) : ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '导航菜单', 'options' => ['class' => 'header']],
                    ['label' => '首页', 'icon' => 'menu-icon fa fa-home', 'url' => ['/site/index']],
                    ['label' => '用户管理', 'icon' => 'menu-icon fa fa-user', 'url' => ['/user/index']],
                    ['label' => '工单管理', 'icon' => 'dashboard', 'url' => ['/order/index']],
                    //['label' => '投标管理', 'icon' => 'dashboard', 'url' => ['/bid/index']],
                    ['label' => '测试模块', 'url' => ['/test/index']],
                    [
                        'label' => '系统管理',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => '数据字典', 'icon' => 'dashboard', 'url' => ['/dict-data'],],
                            /*[
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                ],
            ]
        ) ?>
        <?php else: ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '导航菜单', 'options' => ['class' => 'header']],
                    ['label' => '首页', 'icon' => 'menu-icon fa fa-home', 'url' => ['/site/index']],
                    ['label' => '工单管理', 'icon' => 'dashboard', 'url' => ['/order/index']],
                    //['label' => '投标管理', 'icon' => 'dashboard', 'url' => ['/bid/index']],
                    ['label' => '测试模块', 'url' => ['/test/index']],
                ],
            ]
        ) ?>
        <?php endif; ?>
    </section>

</aside>