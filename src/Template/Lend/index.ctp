<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lend[]|\Cake\Collection\CollectionInterface $lend
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lend'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lend index large-9 medium-8 columns content">
    <h3><?= __('Lend') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lend as $lend): ?>
            <tr>
                <td><?= $this->Number->format($lend->id) ?></td>
                <td><?= $lend->has('user') ? $this->Html->link($lend->user->name, ['controller' => 'Users', 'action' => 'view', $lend->user->id]) : '' ?></td>
                <td><?= $lend->has('book') ? $this->Html->link($lend->book->title, ['controller' => 'Books', 'action' => 'view', $lend->book->id]) : '' ?></td>
                <td><?= h($lend->created) ?></td>
                <td><?= h($lend->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lend->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lend->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lend->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lend->id)]) ?>
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
