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
        <div class="circle circle3">
            3
        </div>
        <div class="step-line "></div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle4 active">
            4
        </div>
        Finish
    </div>
    <div class="clear"></div>
</div>

<div class="panel">
    <div class="panel-heading">Installed!</div>
    <div class="panel-body">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-4 col-md-offset-2">
                <h2>Successfully installed.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <span>That was all</span>
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-4 col-md-offset-2">
                <ul>
                    <?php foreach ($messages as $message): ?>
                        <li><?php echo $message ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2 text-right">
                <button class="btn btn-info"  onclick="installDone()" >Done</button>
            </div>
        </div>
    </div>
</div>
<script>
    function installDone() {
        location.href = '<?php echo base_url() ?>index.php?login';
    }
</script>