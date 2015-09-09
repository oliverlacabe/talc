<div class="body">
	<div class="col-md-10 col-md-offset-1">
		<br/>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Payment Report</h3>
			</div>
			<div class="panel-body">
				<div class="row">
				  <div class="col-sm-7">
				  	<h4>Payment for the month of June</h4>
				  </div>
				  <div class="col-sm-5">
				    <div class="input-group">
				      <span class="input-group-btn">
				        <button class="btn btn-warning" type="button">Select Date</button>
				      </span>
				      <input type="date" class="form-control" name="p-date">
				      <span class="input-group-btn">
				        <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
				      </span>
				    </div>
				  </div>
				</div>
				<br/>
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th class="center">Name of Payor</th>
							<th class="center">Or No.</th>
							<th class="center">Date</th>
							<th class="center">Amount</th>
						</tr>
						<tr>
							<td>Juan Dela Cruz</td>
							<td class="center">100304</td>
							<td class="center">06/07/2015</td>
							<td class="right">3,500.00</td>
						</tr>
						<tr>
							<td>James Paul Barcelo</td>
							<td class="center">100305</td>
							<td class="center">06/08/2015</td>
							<td class="right">4,500.00</td>
						</tr>
						<tr>
							<th class="right" colspan="3">Total Amount</th>
							<th class="right">8,000.00</th>
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
