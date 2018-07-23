<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Layout $layout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $layout->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $layout->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="layouts form large-9 medium-8 columns content">
    <?= $this->Form->create($layout) ?>
    <fieldset>
        <legend><?= __('Edit Layout') ?></legend>
        <?php
            echo $this->Form->control('theme');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('position');
            echo $this->Form->control('discription');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
