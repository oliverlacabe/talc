<div class="body">
	<div class="col-md-10 col-md-offset-1">
		<br/>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Payment</h3>
			</div>
			<div class="panel-body">
				<form class="form" method="post" action="" role="form">
					<div class="col-md-5">
						<h4>Add Fee form</h4><hr/>
						<div class="form-group">
							<label class="control-label">Fee Name <small class="required">(required)</small></label>
							<input class="form-control" type="text" name="fee" value="" required placeholder="fee name">
						</div>
						<div class="form-group">
							<label class="control-label">Amount <small class="required">(required)</small></label>
							<input class="form-control" type="text" name="amount" value="" required placeholder="amount">
						</div>
						<div class="form-group">
								<button class="btn btn-warning pull-right" type="submit">Save</button>
						</div>
					</form>
				</div>
				<div class="col-md-7">
					<h4>Fee List</h4><hr/>
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover">
							<tr>
								<th class="center">Fee</th>
								<th class="center">Amount</th>
								<th class="center">Action</th>
							</tr>
							<tr>
								<td>Registration/Mat.</td>
								<td>5000</td>
								<td class="center">	
									<label class="label label-info a-label"><a class="a-a" href="/accounting/billing">Edit <span class="glyphicon glyphicon-pencil"></span></a></label>								
								</td>
							</tr>
							<tr>
								<td>Tuitiopn</td>
								<td>3000</td>
								<td class="center">	
									<label class="label label-info a-label"><a class="a-a" href="/accounting/billing">Edit <span class="glyphicon glyphicon-pencil"></span></a></label>								
								</td>
							</tr>
							<tr>
								<td>Snacks</td>
								<td>300</td>
								<td class="center">	
									<label class="label label-info a-label"><a class="a-a" href="/accounting/billing">Edit <span class="glyphicon glyphicon-pencil"></span></a></label>								
								</td>
							</tr>
							<tr>
								<td>Medical/Dental</td>
								<td>500</td>
								<td class="center">	
									<label class="label label-info a-label"><a class="a-a" href="/accounting/billing">Edit <span class="glyphicon glyphicon-pencil"></span></a></label>								
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	
		
	</div>
	<?php $this->load->view('templates/js'); ?>
  </body>
</html>
