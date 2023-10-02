<?= $this->Form->create($user) ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body bootstrap-select-1">
                <h4 class="mt-0 header-title">Create Students</h4>
                <p class="text-muted mb-4 font-13">Simple jQuery Based Color and Gradient Picker - asColorPicker. </p>
                <div class="row">
                    <div class="col-md-4">
                        <h6 class=" input-title mb-2 mt-0">Simple mode</h6>
                        <div class="asColorPicker-wrap"><input type="text" class="colorpicker form-control asColorPicker-input" value="#079c9e"><a href="#" class="asColorPicker-clear"></a>
                            <div class="asColorPicker-trigger"><span style="background: rgb(7, 156, 158);"></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class=" input-title mb-2 mt-2 mt-lg-0">Gradiant mode</h6>
                        <div class="asColorPicker-wrap"><input type="text" class="gradient-colorpicker form-control asColorPicker-input" value="#ffa784"><a href="#" class="asColorPicker-clear"></a>
                            <div class="asColorPicker-trigger"><span style="background: rgb(255, 167, 132);"></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class=" input-title mb-2 mt-2 mt-lg-0">Complex mode</h6>
                        <div class="asColorPicker-wrap"><input type="text" class="complex-colorpicker form-control asColorPicker-input" value="#a0a9b3"><a href="#" class="asColorPicker-clear"></a>
                            <div class="asColorPicker-trigger"><span style="background: rgb(160, 169, 179);"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->Form->end() ?>