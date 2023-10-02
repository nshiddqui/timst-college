<?= $this->Form->create($student, ['type' => 'file']) ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body bootstrap-select-1">
                <h4 class="mt-0 header-title">Update Student</h4>
                <hr />
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('image', ['type' => 'file', 'label' => 'Student Image', 'accept' => '.png,.jpg,.jpeg', 'data-default-file' => $student->image]) ?>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <?= $this->Form->hidden('user.id') ?>
                                <?= $this->Form->control('user.username', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <?= $this->Form->control('user.password', ['class' => 'form-control', 'value' => '', 'required' => false, 'label' => 'Change Password']) ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <?= $this->Form->control('user.email', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <?= $this->Form->control('enrolment_no', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <?= $this->Form->control('applicant_name', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <?= $this->Form->control('father_name', ['class' => 'form-control']) ?>
                            </div>
                        </div>
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
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('date_of_birth', ['class' => 'form-control', 'type' => 'date']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('gender_id', ['class' => 'form-control', 'options' => $genders]) ?>
                    </div>
                    <?php if ($this->Identity->is(1, 'role')) { ?>
                        <div class="col-md-4 mb-3">
                            <?= $this->Form->control('university_id', ['class' => 'form-control', 'options' => $universities]) ?>
                        </div>
                    <?php } ?>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('cource_id', ['class' => 'form-control', 'options' => $cources]) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('cource_fees', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('addmission_date', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('category_id', ['class' => 'form-control', 'options' => $categories]) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('reference', ['class' => 'form-control']) ?>
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

<?= $this->Html->css('/assets/plugins/dropify/css/dropify.min.css', ['block' => 'script']) ?>
<?= $this->Html->script('/assets/plugins/dropify/js/dropify.min.js', ['block' => 'script']) ?>
<script>
    <?php $this->Html->scriptStart(['block' => true]); ?>
    $(document).ready(function() {
        // Basic
        $('#image').dropify();
    });
    <?php $this->Html->scriptEnd(); ?>
</script>