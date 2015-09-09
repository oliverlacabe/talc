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
					<div class="container-fluid">
						<table class="table table-bordered">
							<tr>
								<th class="center" colspan="3">In settlement of the following</th>
							</tr>
							<tr>
								<th width="50%">Particulars</th>
								<th colspan="2">Amount</th>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td width="30px"></td>
							</tr>	
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td width="30px"></td>
							</tr>	
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td width="30px"></td>
							</tr>	
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td width="30px"></td>
							</tr>	
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td width="30px"></td>
							</tr>	
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td width="30px"></td>
							</tr>	
							<tr>
								<th colspan="3">Form of Payment</th>
							</tr>
							<tr>
								<td>
									<div class="radio col-sm-4">
									  <label>
									    <input type="radio" name="p-type" value="cash" checked>
									    Cash
									  </label>
									</div>
								</td>
								<td colspan="2">
									<div class="radio col-sm-4">
									  <label>
									    <input type="radio" name="p-type" value="check">
									    Check
									  </label>
									</div>
								</td>
							</tr>					
						</table>
					</div>
				</div>
				<div class="col-md-7">
					<div class="form-group">
						<label class="control-label">OR No. <small class="required">(required)</small></label>
						<input class="form-control" type="text" name="or" value="" required placeholder="official receipt">
					</div>
					<div class="form-group">
						<label class="control-label">Received from <small class="required">(required)</small></label>
						<input class="form-control" type="text" name="receive" value="" required placeholder="name">
					</div>
					<div class="form-group">
						<label class="control-label">TIN <small class="optional">(optional)</small></label>
						<input class="form-control" type="text" name="tin" value="" placeholder="tax identification no.">
					</div>
					<div class="form-group">
						<label class="control-label">Address <small class="required">(required)</small></label>
						<textarea class="form-control" name="address"></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Amount <small class="required">(required)</small></label>
						<input class="form-control" type="text" name="amount" value="" required placeholder="amount">
					</div>
					<div class="form-group">
						<label class="control-label">In partial/full payment of <small class="required">(required)</small></label>
						<input class="form-control" type="text" name="payment" value="" placeholder="">
					</div>
					<div class="form-group">
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
