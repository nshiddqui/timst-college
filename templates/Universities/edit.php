<?= $this->Form->create($university) ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body bootstrap-select-1">
                <h4 class="mt-0 header-title">Update University</h4>
                <hr />
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->hidden('user.id') ?>
                        <?= $this->Form->control('user.username', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('user.password', ['class' => 'form-control', 'value' => '', 'required' => false, 'label' => 'Change Password']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('user.email', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('state_id', ['class' => 'form-control', 'options' => $states, 'default' => 4]) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('contact', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-12 text-center">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->Form->end() ?>