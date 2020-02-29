<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lend'), ['controller' => 'Lend', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lend'), ['controller' => 'Lend', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($book->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($book->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($book->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($book->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($book->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Lend') ?></h4>
        <?php if (!empty($book->lend)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->lend as $lend): ?>
            <tr>
                <td><?= h($lend->id) ?></td>
                <td><?= h($lend->user_id) ?></td>
                <td><?= h($lend->book_id) ?></td>
                <td><?= h($lend->Note) ?></td>
                <td><?= h($lend->created) ?></td>
                <td><?= h($lend->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lend', 'action' => 'view', $lend->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lend', 'action' => 'edit', $lend->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lend', 'action' => 'delete', $lend->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lend->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
