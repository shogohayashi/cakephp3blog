<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('top.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body style="">
  <?php /*
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    */ ?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
      <header>
        <div class='row'>
          <div class="header-grid">
            <div class="grid">
            <?php for($i=0;$i<15;$i++):?>
              <div class="grid__item">
                <div class="grid__gutter">
                  <div class="hexagon">
                    <div class="hexagon__inner-1">
                      <div class="hexagon__inner-2">
                        <div class="hexagon__inner-3">
                          <div class="hexagon__inner-image"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endfor ?>
            </div>
          </div>
          <div class="header-contents">
            <?= $this->Html->link('<div class="header-image">'.$this->Html->image('cake.logo.svg').'</div>', '/', ['escape'=>false]) ?>
            <div class="header-title">
              <h1><?= env('SITE_TITLE',"title") ?></h1>
            </div>
          </div>
        </div>
      </header>
      <div id="main">
        <!-- <div id="left-nav">
          <div style="width:100%;height:15em;background:white"></div>

        </div> -->
        <div id="article">
          <?= $this->fetch('content') ?>
        </div>
        <!-- <div id="right-nav">
          <div style="width:100%;height:3em;background:aqua"></div>
          テスト
        </div> -->
      </div>
    <!-- </div>
    <footer>
    </footer> -->
</body>
</html>
