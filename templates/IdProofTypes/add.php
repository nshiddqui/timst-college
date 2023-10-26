<?= $this->Form->create($idProofType) ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body bootstrap-select-1">
                <hr />
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4" style="margin-top: 30px;">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->Form->end() ?>