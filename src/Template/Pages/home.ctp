<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        不確定
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('top.css') ?>
    <?= $this->Html->css('base.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<header class="row">
    <div class="header-image"><?= $this->Html->image('cake.logo.svg') ?></div>
    <div class="header-title">
        <h1>トップタイトル</h1>
    </div>
</header>
<div class="main">
    <div class="row">
        <h4>新着</h4>
        <ul>
            <li>React+RealmをCakePHPに組み込む・・・・・・・2017年3月5日</li>
            <li>桜さく・・・・・・・・・・・・・・・・・・・2017年3月5日</li>
        </ul>
    </div>
    <div class="row">
        <div class="columns large-3 left-bar">
            <h4>サイドバー</h4>
            <div class="">
                カテゴリ
            </div>
            <div class="">
                月間アーカイブ
            </div>
        </div>
        <div class="columns large-9">
            <div class="row article-box">
                <div class="columns large-2 date">
                    2018/3/24
                </div>
                <div  class="columns large-10 article" >
                    <h4>記事タイトル</h4>
                    <div>記事の最初の方。。。。。。。</div>
                </div>
            </div>
            <div class="row article-box">
                <div class="columns large-2 date">
                    2018/3/24
                </div>
                <div  class="columns large-10 article" >
                    <h4>記事タイトル</h4>
                    <div>記事の最初の方。。。。。。。</div>
                </div>
            </div>
            <div class="row article-box">
                <div class="columns large-2 date">
                    2018/3/24
                </div>
                <div  class="columns large-10 article" >
                    <h4>記事タイトル</h4>
                    <div>記事の最初の方。。。。。。。</div>
                </div>
            </div>
        </div>
        <hr />
    </div>

    <div class="row">
        <div class="columns large-4">
            <i class="icon support">P</i>
            <h3>Help and Bug Reports</h3>
            <ul>
                <li class="bullet cutlery">
                    <a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
                    <ul><li>Live chat about CakePHP</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="http://cakesf.herokuapp.com/">Slack</a>
                    <ul><li>CakePHP Slack support</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://github.com/cakephp/cakephp/issues">CakePHP Issues</a>
                    <ul><li>CakePHP issues and pull requests</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="http://discourse.cakephp.org/">CakePHP Forum</a>
                    <ul><li>CakePHP official discussion forum</li></ul>
                </li>
            </ul>
        </div>
        <div class="columns large-4">
            <i class="icon docs">r</i>
            <h3>Docs and Downloads</h3>
            <ul>
                <li class="bullet cutlery">
                    <a href="https://api.cakephp.org/3.0/">CakePHP API</a>
                    <ul><li>Quick Reference</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://book.cakephp.org/3.0/en/">CakePHP Documentation</a>
                    <ul><li>Your Rapid Development Cookbook</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://bakery.cakephp.org">The Bakery</a>
                    <ul><li>Everything CakePHP</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://plugins.cakephp.org">CakePHP plugins repo</a>
                    <ul><li>A comprehensive list of all CakePHP plugins created by the community</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://github.com/cakephp/">CakePHP Code</a>
                    <ul><li>For the Development of CakePHP Git repository, Downloads</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://github.com/FriendsOfCake/awesome-cakephp">CakePHP Awesome List</a>
                    <ul><li>A curated list of amazingly awesome CakePHP plugins, resources and shiny things.</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://www.cakephp.org">CakePHP</a>
                    <ul><li>The Rapid Development Framework</li></ul>
                </li>
            </ul>
        </div>
        <div class="columns large-4">
            <i class="icon training">s</i>
            <h3>Training and Certification</h3>
            <ul>
                <li class="bullet cutlery">
                    <a href="https://cakefoundation.org/">Cake Software Foundation</a>
                    <ul><li>Promoting development related to CakePHP</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://training.cakephp.org/">CakePHP Training</a>
                    <ul><li>Learn to use the CakePHP framework</li></ul>
                </li>
                <li class="bullet cutlery">
                    <a href="https://certification.cakephp.org/">CakePHP Certification</a>
                    <ul><li>Become a certified CakePHP developer</li></ul>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
