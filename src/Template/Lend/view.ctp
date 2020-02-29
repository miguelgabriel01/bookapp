<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lend $lend
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lend'), ['action' => 'edit', $lend->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lend'), ['action' => 'delete', $lend->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lend->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lend'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lend'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lend view large-9 medium-8 columns content">
    <h3><?= h($lend->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $lend->has('user') ? $this->Html->link($lend->user->name, ['controller' => 'Users', 'action' => 'view', $lend->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $lend->has('book') ? $this->Html->link($lend->book->title, ['controller' => 'Books', 'action' => 'view', $lend->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lend->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lend->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lend->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($lend->Note)); ?>
    </div>
</div>
