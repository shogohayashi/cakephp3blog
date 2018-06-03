<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Layout $layout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Layout'), ['action' => 'edit', $layout->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Layout'), ['action' => 'delete', $layout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layout->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layout'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="layouts view large-9 medium-8 columns content">
    <h3><?= h($layout->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Theme') ?></th>
            <td><?= h($layout->theme) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $layout->has('user') ? $this->Html->link($layout->user->id, ['controller' => 'Users', 'action' => 'view', $layout->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($layout->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($layout->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($layout->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($layout->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Discription') ?></h4>
        <?= $this->Text->autoParagraph(h($layout->discription)); ?>
    </div>
</div>
