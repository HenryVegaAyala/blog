<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<header id="top">
    <div class="row">
        <div class="header-content twelve columns">
            <h1 id="logo-text"><a href="<?=  Url::to('/blog/') ?>" title="">Desarrollo de Tesis - UA</a></h1>
            <p id="intro">Desarrollo e Implementación De Un Sistema Web De Gestión Documentaria Aplicando Las Metodologías Scrum Y XP, Para La Mejora Del Proceso De Venta. Empresa BRANUSAC.</p>
        </div>
    </div>
    <nav id="nav-wrap">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>
        <div class="row">
            <ul id="nav" class="nav">
                <?php if (Yii::$app->user->isGuest): ?>
                    <li class="current"><a href="<?= Url::to(['/site/index']) ?>">Inicio</a></li>
                    <!--                <li class="has-children"><a href="#">Dropdown</a>-->
                    <!--                    <ul>-->
                    <!--                        <li><a href="#">Submenu 01</a></li>-->
                    <!--                        <li><a href="#">Submenu 02</a></li>-->
                    <!--                        <li><a href="#">Submenu 03</a></li>-->
                    <!--                    </ul>-->
                    <!--                </li>-->
                    <li><a href="<?= Url::to(['/site/archivos']) ?>">Archivos</a></li>
                    <!--                <li class="has-children"><a href="single.html">Blog</a>-->
                    <!--                    <ul>-->
                    <!--                        <li><a href="blog.html">Blog Entries</a></li>-->
                    <!--                        <li><a href="single.html">Single Blog</a></li>-->
                    <!--                    </ul>-->
                    <!--                </li>-->
                    <li><a href="<?= Url::to(['/site/proyecto']) ?>">Proyecto</a></li>
                <?php else: ?>
                    <li><a href="page.html">Proyecto</a></li>
                    <li>
                        <?=
                        Html::beginForm(['/site/logout'], 'post') . Html::submitButton('Cerrar Sesión (' . strtoupper(Yii::$app->user->identity->username) . ')') . Html::endForm()
                        ?>
                    </li>
                <?php endif; ?>
            </ul> <!-- end #nav -->
        </div>
    </nav> <!-- end #nav-wrap -->
</header> <!-- Header End -->
