<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body bootstrap-select-1">
                <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'btn btn-primary float-right', 'escape' => false]) ?>

                <h4 class="mt-0 header-title">Streams</h4>
                <hr class="mt-4" />
                <div class="table-responsive">
                    <?= $this->DataTables->renderTable('Streams', ['class' => 'table table-bordered dt-responsive nowrap']) ?>
                </div>
            </div>
        </div>
    </div>
</div>