 <hr>
 <div class="x_panel" >
            
                <div class="x_title">
                    <div class="panel-title">
					 <?php echo get_phrase('todays_thoughts'); ?>
					</div>
					</div>
<div class="table-responsive">
                <table class="table table-bordered datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('thought');?></div></th>
                    		
						</tr>
					</thead>
                    <tbody>
                    <?php $count = 1;foreach($todays_thoughts as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['thought'];?></td>
							
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS-->
</div>