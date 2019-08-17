<?php //foreach($users as $user):?>
<!--    <div>asdfsadf</div>-->
<?php //endforeach; ?>

<?= $this->Form->create($user) ?>
    <div class="form-group">
        <?php echo $this->Form->control('ime', ['class' => 'form-control', 'type' => 'text', 'required']); ?>
<!--        --><?//= $this->Form->label('Ime'); ?>
<!--        <input id="ime" type="text" class="form-control" required>-->
    </div>
    <div>
        <?= $this->Form->button('Vstopi', ['class' => 'btn btn-success pull-right']); ?>
    </div>
<?= $this->Form->end() ?>
