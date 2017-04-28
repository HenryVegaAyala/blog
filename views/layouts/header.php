<?php
use yii\helpers\Url;
?>

<header id="top">

    <div class="row">

        <div class="header-content twelve columns">

            <h1 id="logo-text"><a href="index.html" title="">Keep It Simple.</a></h1>
            <p id="intro">Put your awesome slogan here...</p>

        </div>

    </div>

    <nav id="nav-wrap">

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

        <div class="row">

            <ul id="nav" class="nav">
                <li class="current"><a href="<?= Url::to(['/site/index']) ?>">Home</a></li>
                <li class="has-children"><a href="#">Dropdown</a>
                    <ul>
                        <li><a href="#">Submenu 01</a></li>
                        <li><a href="#">Submenu 02</a></li>
                        <li><a href="#">Submenu 03</a></li>
                    </ul>
                </li>
                <li><a href="<?= Url::to(['/site/login']) ?>">Demo</a></li>
                <li><a href="archives.html">Archives</a></li>
                <li class="has-children"><a href="single.html">Blog</a>
                    <ul>
                        <li><a href="blog.html">Blog Entries</a></li>
                        <li><a href="single.html">Single Blog</a></li>
                    </ul>
                </li>
                <li><a href="page.html">Page</a></li>
            </ul> <!-- end #nav -->

        </div>

    </nav> <!-- end #nav-wrap -->

</header> <!-- Header End -->
