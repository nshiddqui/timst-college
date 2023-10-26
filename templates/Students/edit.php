<style>

</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body bootstrap-select-1">
                <div class="table-responsive">
                    <?= $this->Form->create($student, ['type' => 'file', 'required' => false, 'id' => 'student-from']); ?>
                    <div tabindex="1">
                        <h3>Personal Details</h3>
                        <section data-step="0" class="row">
                            <div class="col-md-4">
                                <?= $this->Form->control('candidate_name', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('father_name', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('mother_name', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('date_of_birth', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('photo', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'accept' => 'image/*']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('gender_id', ['class' => 'form-control no-select2', 'options' => $genders, 'style' => 'width:100%;']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('category_id', ['class' => 'form-control no-select2', 'options' => $categories, 'style' => 'width:100%;']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('id_proof_type_id', ['class' => 'form-control no-select2', 'options' => $idProofTypes, 'style' => 'width:100%;']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('id_proof_no', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('document_front', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'accept' => 'image/*']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('document_back', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'accept' => 'image/*']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('are_you_employed', ['empty' => false, 'class' => 'form-control no-select2', 'required' => true, 'options' => [0 => 'No', 1 => 'Yes'], 'style' => 'width:100%;']) ?>
                            </div>
                        </section>
                        <h3>Communication Details</h3>
                        <section data-step="1" class="row">
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.contact_number', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.email_address', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.father_contact_no', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.mother_contact_no', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.country_id', ['class' => 'form-control no-select2', 'options' => $countries, 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.nationality', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.address', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('communication_detail.pincode', ['class' => 'form-control']) ?>
                            </div>
                        </section>
                        <h3>Previous Qualification Details</h3>
                        <section data-step="2">
                            <div class="table-responsive-sm">
                                <table class="table table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Examination</th>
                                            <th>Year of Passing</th>
                                            <th>Board/University</th>
                                            <th>Percentage/CGPA</th>
                                            <th>Upload Documents</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Secondary</td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.secondary_year_of_passing', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.secondary_university', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.secondary_percentage', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.secondary_documents', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'label' => false]) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sr. Secondary</td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.sr_secondary_year_of_passing', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.sr_secondary_university', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.sr_secondary_percentage', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.sr_secondary_documents', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'label' => false]) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Graduation</td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.graduation_year_of_passing', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.graduation_university', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.graduation_percentage', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.graduation_documents', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'label' => false]) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Post Secondary</td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.post_graduation_year_of_passing', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.post_graduation_university', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.post_graduation_percentage', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.post_graduation_documents', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'label' => false]) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other</td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.other_year_of_passing', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.other_university', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.other_percentage', ['class' => 'form-control', 'label' => false]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->control('qualification_detail.other_documents', ['class' => 'form-control', 'type' => 'file', 'required' => false, 'label' => false]) ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <h3>Programme Details</h3>
                        <section data-step="3" class="row">
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.cource_type_id', ['class' => 'form-control no-select2', 'options' => $courceTypes, 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.faculty_id', ['class' => 'form-control no-select2', 'options' => $faculties, 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.cource_id', ['class' => 'form-control no-select2', 'options' => $cources, 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.stream_id', ['class' => 'form-control no-select2', 'options' => $streams, 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.year', ['empty' => false, 'class' => 'form-control no-select2', 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.month_session', [
                                    'options' => [
                                        'January' => 'January',
                                        'February' => 'February',
                                        'March' => 'March',
                                        'April' => 'April',
                                        'May' => 'May',
                                        'June' => 'June',
                                        'July' => 'July',
                                        'August' => 'August',
                                        'September' => 'September',
                                        'October' => 'October',
                                        'November' => 'November',
                                        'December' => 'December'
                                    ],
                                    'class' => 'form-control no-select2',
                                    'style' => 'width:100%'
                                ]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.session', ['empty' => false, 'class' => 'form-control no-select2', 'type' => 'year', 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.mode_of_study_id', ['class' => 'form-control no-select2', 'options' => $modeOfStudies, 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.hostel_facility', ['empty' => false, 'class' => 'form-control no-select2', 'required' => true, 'options' => ['No', 'Yes'], 'style' => 'width:100%']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.application_fee', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.duration', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.total_fees', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('programme_detail.paying_fees', ['class' => 'form-control']) ?>
                            </div>
                        </section>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->css('jquery.steps', ['block' => true]) ?>
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js', ['block' => true]) ?>
<?= $this->Html->script('jquery.steps.min', ['block' => true]) ?>
<script>
    <?php $this->Html->scriptStart(['block' => true]) ?>
    $(document).ready(function () {
        var form = $("#student-from");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                form.submit();
            }
        });
        $('select.no-select2').select2();
    });
    <?php $this->Html->scriptEnd() ?>
</script>