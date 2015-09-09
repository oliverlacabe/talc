<div class="body">
	<div class="col-md-10 col-md-offset-1">
		<br/>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Student List</h3>
			</div>
			<div class="panel-body">
				<div class="row">
				  <div class="col-lg-7">
				  	<!-- pwede butangan hit pagination -->
				  </div>
				  <div class="col-lg-2">
					<div class="form-group">
							<select class="form-control" name="yearandsection" required>
								<option></option>
								<?php $sec = $this->registrar_model->get_sections();
								foreach ($sec as $key => $value): 
									extract($value);
									$level = $this->api->ys($yearlevel, $section);?>
									<option value="<?php echo $id; ?>"><?php echo $level; ?></option>
								<?php endforeach ?>
							</select>
					</div>
				  </div>
				  <div class="col-lg-3">
				    <div class="input-group">
				      <input type="text" class="form-control" placeholder="search student">
				      <span class="input-group-btn">
				        <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
				      </span>
				    </div>
				  </div>
				</div>
				<br/>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover">
						<tr>
							<th class="center">ID No.</th>
							<th class="center">Name</th>
							<th class="center">Year & Section</th>
							<th class="center">Action</th>
						</tr>
						<?php 
							$res = $this->registrar_model->get_students();

						 ?>
						 <?php foreach ($res as $key => $value): extract($value); 
						 	$sec = $this->registrar_model->stud_section($id);
						 	$level = $this->api->ys($sec['yearlevel'], $sec['section']);
						 ?>
							<tr>
								<td><?php echo $stud_id; ?></td>
								<td><?php echo $lname.", ".$fname." ".$mname; ?></td>
								<td><?php echo $level; ?></td>
								<td class="center">
									<label class="label label-success a-label"><a class="a-a" href="/registrar/deletestudent"><span class="glyphicon glyphicon-search"></span></a></label>	
									<label class="label label-info a-label"><a class="a-a" href="/registrar/deletestudent"><span class="glyphicon glyphicon-pencil"></span></a></label>								
									<label class="label label-danger a-label"><a class="a-a" href="/registrar/deletestudent"><span class="glyphicon glyphicon-trash"></span></a></label>								
								</td>
							</tr>
						 <?php endforeach ?>
					</table>
				</div>
			</div>
		</div>
	</div>	
		
	</div>
	<?php $this->load->view('templates/js'); ?>
  </body>
</html>
