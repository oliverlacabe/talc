<div class="body" style="background-color: transparent;">
	<ul class="nav nav-tabs" style="margin-top: -5px; padding-top: 10px; padding-right:10px;; background-color: #555;">
	  <li class="pull-right"><a class="white" href="#filipino" data-toggle="tab">Filipino</a></li>
	  <li class="pull-right"><a class="white" href="#science" data-toggle="tab">Science</a></li>
	  <li class="pull-right"><a class="white" href="#math" data-toggle="tab">Math</a></li>
	  <li class="active pull-right"><a class="white" href="#english" data-toggle="tab">English</a></li>
	</ul>

	<form class="form">
	<div class="tab-content">
	  <div class="tab-pane active" id="english">
	  	<div class="col-md-12">
	  		<ol>
	  			<li class="question">
	  				Who wrote the famous novel Romeo and Juliet?
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q1" id="optionsRadios1" value="Q1A1">
					    Albert Einstein
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q1" id="optionsRadios2" value="Q1A2">
					    Willam Lopez
					  </label>
					</div>
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q1" id="optionsRadios1" value="Q1A1">
					    William Shakespear
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q1" id="optionsRadios2" value="Q1A2">
					    Benigno Simeon Aquino III
					  </label>
					</div>
	  			</li>
	  			<li class="question">
	  				What is verb?
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q2" id="optionsRadios1" value="Q1A1">
					    Healing Plant
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q2" id="optionsRadios2" value="Q1A2">
					    Action Word
					  </label>
					</div>
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q2" id="optionsRadios1" value="Q1A1">
					    A flying animal
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q2" id="optionsRadios2" value="Q1A2">
					    none of the above
					  </label>
					</div>
	  			</li>
	  		</ol>
	  	</div>
	  </div>
	  <div class="tab-pane" id="math">
	  	<div class="col-md-12">
	  	<div class="col-md-12">
	  		<ol>
	  			<li class="question">
	  				What is the squareroot of 2,567, 321?
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q3" id="optionsRadios1" value="Q1A1">
					    1, 218
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q3" id="optionsRadios2" value="Q1A2">
					    984
					  </label>
					</div>
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q3" id="optionsRadios1" value="Q1A1">
					    10732
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q3" id="optionsRadios2" value="Q1A2">
					    None of the above
					  </label>
					</div>
	  			</li>
	  			<li class="question">
	  				What is 1 + 1?
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q4" id="optionsRadios1" value="Q1A1">
					    11
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q4" id="optionsRadios2" value="Q1A2">
					    0
					  </label>
					</div>
	  				<div class="radio">
					  <label>
					    <input type="radio" name="q4" id="optionsRadios1" value="Q1A1">
					    2
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="q4" id="optionsRadios2" value="Q1A2">
					    none of the above
					  </label>
					</div>
	  			</li>
	  		</ol>
	  	</div>
	  	</div>
	  </div>
	  <div class="tab-pane" id="science">
	  	<div class="col-md-12">
	  		
	  	</div>
	  </div>
	  <div class="tab-pane" id="filipino">
	  	<div class="col-md-12">
	  		
	  	</div>
	  </div>

	</div>
		<button style="position: fixed; bottom: 0; right: 0; margin: 10px;" class="btn btn-warning" type="submit" >Submit</button>
	</form>

	<?php $this->load->view('templates/js'); ?>
  </body>
</html>