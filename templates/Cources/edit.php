<?= $this->Form->create($cource) ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body bootstrap-select-1">
                <h4 class="mt-0 header-title">Update Cource</h4>
                <hr />
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= $this->Form->control('fees', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-12 mb-3">
                        <?= $this->Form->control('description', ['class' => 'form-control', 'type' => 'textarea']) ?>
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
<!--Wysiwig js-->
<?= $this->Html->script('/assets/plugins/tinymce/tinymce.min.js', ['block' => 'script']) ?>
<script>
    <?php $this->Html->scriptStart(['block' => true]); ?>
    $(document).ready(function() {
        tinymce.init({
            selector: "textarea#description",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [{
                    title: 'Bold text',
                    inline: 'b'
                },
                {
                    title: 'Red text',
                    inline: 'span',
                    styles: {
                        color: '#ff0000'
                    }
                },
                {
                    title: 'Red header',
                    block: 'h1',
                    styles: {
                        color: '#ff0000'
                    }
                },
                {
                    title: 'Example 1',
                    inline: 'span',
                    classes: 'example1'
                },
                {
                    title: 'Example 2',
                    inline: 'span',
                    classes: 'example2'
                },
                {
                    title: 'Table styles'
                },
                {
                    title: 'Table row 1',
                    selector: 'tr',
                    classes: 'tablerow1'
                }
            ]
        });
    });
    <?php $this->Html->scriptEnd(); ?>
</script>