<div id='user-login'>
    <div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('ログイン') ?></legend>
            <?= $this->Form->input('username',['label'=>'ユーザー名またはメールアドレス']) ?>
            <?= $this->Form->input('password',['label'=>'パスワード']) ?>
        </fieldset>
    <?= $this->Form->button(__('ログイン')); ?>
    <?= $this->Form->end() ?>
<?php /*    <?= $this->Html->link('新規登録',['controller'=>'regist', 'action'=>'preConfirm']) ?>   */?>
    </div>
</div>
