<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>TIMST Portal</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="/favicon.ico">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body>


    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <div class="text-center m-b-15">
                    <a href="/" class="logo logo-admin"><img src="/img/logo-wide.png" width="100%" alt="logo"></a>
                </div>
                <?= $this->Flash->render() ?>
                <div class="p-3">
                    <?= $this->Form->create(null, ['class' => 'form-horizontal m-t-20', 'templates' => false]) ?>

                    <div class="form-group row">
                        <div class="col-12">
                            <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Username', 'label' => false, 'required' => true]) ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'required' => true]) ?>
                        </div>
                    </div>

                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">
                            <?= $this->Form->button('Log In', ['type' => 'submit', 'class' => 'btn btn-danger btn-block waves-effect waves-light']) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>

            </div>
        </div>
    </div>



    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/modernizr.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>

    <!-- KNOB JS -->
    <script src="/assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

</body>

</html>