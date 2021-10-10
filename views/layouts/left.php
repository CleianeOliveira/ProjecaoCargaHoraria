<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '', 'options' => ['class' => 'header']],
                    ['label' => 'Projeção', 'icon' => 'bar-chart', 'url' => ['/curso/index']],
                    ['label' => 'Ofertas', 'icon' => 'bookmark', 'url' => ['/oferta/index']],            
                                      
                       
                    ['label' => 'Cursos', 'icon' => 'cubes', 'url' => ['/curso/index']],                                    
                    ['label' => 'Docentes', 'icon' => 'graduation-cap', 'url' => ['/docente/index']],  
                    ['label' => 'Núcleos', 'icon' => 'users', 'url' => ['/nucleo/index']],
                    ['label' => 'Usuários', 'icon' => 'user', 'url' => ['/usuario/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
