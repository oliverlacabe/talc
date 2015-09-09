<div class="body">
	<div class="col-md-10 col-md-offset-1">
		<br/>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Employee Registration</h3>
			</div>
			<div class="panel-body">
				<?php echo $this->session->flashdata('message'); ?>
				<form class="form-horizontal" method="post" action="/registrar/add_student" role="form">
					<div class="form-group">
						<label class="control-label col-sm-3">Employee ID <small class="required">(required)</small></label>
						<div class="col-sm-7">
							<input class="form-control" disabled style="background: #fff;" type="text" name="id" value="" required placeholder="id">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Lastname <small class="required">(required)</small></label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="lastname" value="" required placeholder="lastname">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Firstname <small class="required">(required)</small></label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="firstname" value="" required placeholder="firstname">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Middlename <small class="required">(required)</small></label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="middlename" value="" required placeholder="middlename">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Date of Birth <small class="required">(required)</small></label>
						<div class="col-sm-3">
							<input class="form-control" type="date" name="dob" value="" required>
						</div>
						<label class="control-label col-sm-2">Gender <small class="required">(required)</small></label>
						<div class="col-sm-2">
							<select class="form-control" name="gender" required>
								<option value="M">Male</option>
								<option value="F">Female</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Designation <small class="required">(required)</small></label>
						<div class="col-sm-7">
							<select class="form-control" name="yearandsection" required>
								<option></option>
								<?php $sec = $this->registrar_model->get_designations();
								foreach ($sec as $key => $value):
									extract($value);?>
									<option value="<?php echo $id; ?>"><?php echo $designation; ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Address <small class="required">(required)</small></label>
						<div class="col-sm-7">
							<textarea class="form-control" name="address"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Contact No. <small class="optional">(optional)</small></label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="contact1" value="" placeholder="contact no.">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Username <small class="required">(required)</small></label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="user" value="" required placeholder="guardian">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Password<small class="required">(required)</small></label>
						<div class="col-sm-7">
							<input class="form-control" type="password" name="pass" value="" placeholder="guardian contact no.">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10">
							<button class="btn btn-warning pull-right" type="submit">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	</div>
	<?php $this->load->view('templates/js'); ?>
  </body>
</html>
