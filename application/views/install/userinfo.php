<div class="install-step-group">
    <div class="col-md-2 col-lg-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <div class="circle circle1">
            1
        </div>   
        <div class="step-line "></div> 
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle2 active">
            2
        </div>
        <div class="step-line "></div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3">
            3
        </div>
        <div class="step-line "></div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle4">
            4
        </div>
        Finish
    </div>
    <div class="clear"></div>
</div>

<div class="panel">
    <div class="panel-heading">Administrator Information</div>
    <div class="panel-body">
        <form action="<?php echo base_url()?>index.php?install/userinfo/confirm" method="post">
            <div class="form-group row">
                <label for="field-1" class="col-sm-2 control-label text-right">Email :</label>
                <div class="form-group col-md-4 field-1">
                    <input type="email" class="form-control" name="admin_email" id="user"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="field-2" class="col-sm-2 control-label text-right">Password :</label>
                <div class="form-group col-md-4 field-2">
                    <input type="password" class="form-control" name="admin_password" id="password"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="field-2" class="col-sm-2 control-label text-right">Confirm Password :</label>
                <div class="form-group col-md-4 field-2">
                    <input type="password" class="form-control" id="conf_password"/>
                </div>
            </div>
            <div class="clear"></div>
            <div class="row">
                <div class="form-group col-md-4 col-md-offset-2 text-right">
                    <button class="btn btn-info">Next</button>
                </div>
            </div>
            <div class="tips col-md-4 col-md-offset-2">

            </div>
        </form>
    </div>
</div>

<script>
    $('form').submit(function (e) {
        if ($('#user').val() == '') {
            $('.tips').html('Plase input email.');
            $('#user').focus();
            e.preventDefault();
        } else if ($('#password').val() == '') {
            $('.tips').html('Plase input password.');
            $('#password').focus();
            e.preventDefault();
        } else if ($('#password').val() != $('#conf_password').val()) {
            $('.tips').html('Please check your password.');
            $('#password').focus();
            e.preventDefault();
        }
    });
</script>