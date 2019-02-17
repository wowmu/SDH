<div class="install-step-group">
    <div class="col-md-2 col-lg-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <div class="circle circle1 active">
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
    <div class="panel-heading">Validate Serial Key <span class="label label-success"><a href="https://optimumlinkupsoftware.com/helpdesk/knowledgebase.php?category=12" target="_blank"><strong style="color:#FFFFFF">What is Serial Key?</strong></a></span></div>
    <div class="panel-body">
        <form action="<?php echo base_url()?>index.php?install/validate/confirm" method="post">
            <label for="field-1" class="col-sm-2 control-label text-right">Serial Key :</label>
            <div class="form-group col-md-8 field-1">
                <textarea class="form-control" id="key" name="key"></textarea>
            </div>

            <div class="clear"></div>
            <div class="row">
                <div class="form-group col-md-8 col-md-offset-2 text-right">
                    <button class="btn btn-green btn-sm btn-icon icon-left"><i class="fa fa-user"></i>Next</button>
                </div>
            </div>
            <div class="tips col-md-4 col-md-offset-2">
                <?php
                if ($this->session->userdata('result') == 'INVALID') {
                    echo 'Invalid serial key.';
                } else if ($this->session->userdata('result') == 'EMPTY') {
                    echo 'Plase input serial key.';
                } else if ($this->session->userdata('result') == 'INVALID_DOMAIN') {
                    echo 'Invalid domain.';
                }
                ?>
            </div>
        </form>
    </div>
</div>
