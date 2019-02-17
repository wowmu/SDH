<div class="install-step-group">
    <div class="col-md-2 col-lg-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <div class="circle circle1">
            1
        </div>   
        <div class="step-line "></div> 
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle2">
            2
        </div>
        <div class="step-line "></div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3 active">
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
    <div class="panel-heading">Database Setting</div>
    <div class="panel-body">
        <form action="<?php echo base_url()?>index.php?install/start" method="post">
            <input type="hidden" class="form-control" name="admin_email" id="user" value="<?php echo $this->session->userdata('admin_email'); ?>"/>
            <input type="hidden" class="form-control" name="admin_password" id="password" value="<?php echo $this->session->userdata('admin_password'); ?>"/>
            <div class="form-group row">
                <label for="field-1" class="col-sm-2 control-label text-right">Host :</label>
                <div class="form-group col-md-4 field-1">
                    <input type="input" class="form-control" name="host" id="host"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="field-2" class="col-sm-2 control-label text-right">Database :</label>
                <div class="form-group col-md-4 field-2">
                    <input type="input" class="form-control" name="database" id="database"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="field-3" class="col-sm-2 control-label text-right">User :</label>
                <div class="form-group col-md-4 field-3">
                    <input type="input" class="form-control" name="user" id="db_user"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="field-4" class="col-sm-2 control-label text-right">Password :</label>
                <div class="form-group col-md-4 field-4">
                    <input type="input" class="form-control" name="password" id="db_password"/>
                </div>
            </div>

            <div class="clear"></div>
            <div class="row">
                <div class="form-group col-md-4 col-md-offset-2 text-right">
                    <button class="btn btn-info">Finish</button>
                    <img id="install_progress" src="<?php echo base_url() ?>assets/images/loader-2.gif" style="margin-left: 20px; display: none"/>
                </div>
            </div>
            <div class="tips col-md-4 col-md-offset-2">

            </div>
        </form>
    </div>
</div>

<div id="modal_1" style="position: fixed; width: 100%; height: 100%; z-index: 100;top:0; left: 0; display: none">
    <?php echo $msg; ?>
</div>
<script>
    $('form').submit(function (e) {
        if ($('#host').val() == '') {
            $('.tips').html('Plase input host.');
            $('#host').focus();
            e.preventDefault();
            return;
        } else if ($('#database').val() == '') {
            $('.tips').html('Plase input database name.');
            $('#database').focus();
            e.preventDefault();
            return;
        } else if ($('#db_user').val() == '') {
            $('.tips').html('Plase input database user name.');
            $('#db_user').focus();
            e.preventDefault();
            return;
        }

        $('#install_progress').show();
        $('#modal_1').show();
        $('.btn').val('Installing...');
        $('form').submit();
        e.preventDefault();
    });
</script>