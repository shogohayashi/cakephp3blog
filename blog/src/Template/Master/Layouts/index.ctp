<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Layout[]|\Cake\Collection\CollectionInterface $layouts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Layout'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="layouts index large-9 medium-8 columns content">
    <h3><?= __('Layouts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('theme') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($layouts as $layout): ?>
            <tr>
                <td><?= $this->Number->format($layout->id) ?></td>
                <td><?= h($layout->theme) ?></td>
                <td><?= $layout->has('user') ? $this->Html->link($layout->user->id, ['controller' => 'Users', 'action' => 'view', $layout->user->id]) : '' ?></td>
                <td><?= h($layout->position) ?></td>
                <td><?= h($layout->created) ?></td>
                <td><?= h($layout->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $layout->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $layout->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $layout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layout->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
