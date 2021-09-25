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
                    ['label' => 'Projeção', 'icon' => 'bar-chart', 'url' => ['/curso/index']],
                    ['label' => 'Cursos', 'icon' => 'graduation-cap', 'url' => ['/curso/index']],
                    ['label' => 'Núcleos', 'icon' => 'graduation-cap', 'url' => ['/nucleo/index']],
                    ['label' => 'Ofertas', 'icon' => 'graduation-cap', 'url' => ['/oferta/index']],            
                    ['label' => 'Docentes', 'icon' => 'graduation-cap', 'url' => ['/docente/index']],
                    ['label' => 'Usuários', 'icon' => 'graduation-cap', 'url' => ['/usuario/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
