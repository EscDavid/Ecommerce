<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Login</h2>
        <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'login']]); ?>
        <?= $this->Form->control('email'); ?>
        <?= $this->Form->control('password', ['type' => 'password']); ?>
        <?= $this->Form->submit('Login', ['class' => 'button']); ?>
        <?= $this->Form->end(); ?>
    </div>
</div>
