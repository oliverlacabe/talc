<div class="body">
	<div class="col-md-10 col-md-offset-1">
		<br/>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Financial Records</h3>
			</div>
			<div class="panel-body">
				<div class="row">
				  <div class="col-lg-9">
				  	<!-- pwede butangan hit pagination -->
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
							<th class="center">View Financial Rcords</th>
						</tr>
						<tr>
							<td>2015-00001</td>
							<td>Juan Dela Cruz</td>
							<td>I - Kamias</td>
							<td class="center">
								<label class="label label-success a-label"><a class="a-a" href="/accounting/payment">Payment <span class="glyphicon glyphicon-search"></span></a></label>	
								<label class="label label-info a-label"><a class="a-a" href="/accounting/billing">Billing <span class="glyphicon glyphicon-pencil"></span></a></label>								
								<label class="label label-danger a-label"><a class="a-a" href="/accounting/backaccounts">Back Accounts<span class="glyphicon glyphicon-trash"></span></a></label>								
							</td>
						</tr>
						<tr>
							<td>2015-00002</td>
							<td>James Paul Barcelo</td>
							<td>I - Kamias</td>
							<td class="center">
								<label class="label label-success a-label"><a class="a-a" href="/accounting/payment">Payment <span class="glyphicon glyphicon-search"></span></a></label>	
								<label class="label label-info a-label"><a class="a-a" href="/accounting/billing">Billing <span class="glyphicon glyphicon-pencil"></span></a></label>								
								<label class="label label-danger a-label"><a class="a-a" href="/accounting/backaccounts">Back Accounts<span class="glyphicon glyphicon-trash"></span></a></label>								
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
