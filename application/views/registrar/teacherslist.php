<div class="body">
	<div class="col-md-10 col-md-offset-1">
		<br/>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Teachers List</h3>
			</div>
			<div class="panel-body">
				<div class="row">
				  <div class="col-lg-7">
				  	<!-- pwede butangan hit pagination -->
				  </div>
				  <div class="col-lg-2">
				  	<select class="form-control" name="section">
				  		<option>All Yr & Sec</option>
				  		<option>I-Kamias</option>
				  		<option>I-Kamote</option>
				  		<option>I-Balanghoy</option>
				  	</select>
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
							<th class="center">Action</th>
						</tr>
						<tr>
							<td>15-001</td>
							<td>Noel Lesigues</td>
							<td class="center">
								<label class="label label-success a-label"><a class="a-a" href="/registrar/classlist">View Classes <span class="glyphicon glyphicon-search"></span></a></label>	
							</td>
						</tr>
						<tr>
							<td>15-002</td>
							<td>Nenita Antoni</td>
							<td class="center">
								<label class="label label-success a-label"><a class="a-a" href="/registrar/classlist">View Classes <span class="glyphicon glyphicon-search"></span></a></label>	
							</td>
						</tr>
						<tr>
							<td>15-002</td>
							<td>Macario Mesias</td>
							<td class="center">
								<label class="label label-success a-label"><a class="a-a" href="/registrar/classlist">View Classes <span class="glyphicon glyphicon-search"></span></a></label>	
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>	
		
	</div>
	<?php $this->load->view('templates/js'); ?>
  </body>
</html>
