<div class="body">

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="<?php echo base_url().'assets/images/slide1.jpg' ?>" alt="...">
		      <div class="carousel-caption">
		      	<h4>- School Motto -</h4>
		      	<h1>"Nurture Oneness With God, Man, and Nature"</h1>
		      </div>
		    </div>
		    <div class="item">
		      <img src="<?php echo base_url().'assets/images/slide2.jpg' ?>" alt="...">
		      <div class="carousel-caption">
		      </div>
		    </div>
		    <div class="item">
		      <img src="<?php echo base_url().'assets/images/slide3.jpg' ?>" alt="...">
		      <div class="carousel-caption">
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
		<br/><br/>
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="mvg-center"><img class="img-letter" src="<?php echo base_url().'assets/images/mission.png' ?>"></div>
				<p class="mvg-p">
					<br/>
					<strong>ANGELICUM</strong> is commited to the development of the 
					<strong>MENTAL, SPIRITUAL, MORAL, SOCIAL,</strong> and <strong>PHYSICAL</strong> 
					capabilities of the Pilipino Child, providing him with experiences in the democratic way 
					of life, inculating in him ideas and attitudes necessary for enlightened, patriotic
					and useful citizenship.
				</p>
			</div>
			<div class="col-md-4">
				<div class="mvg-center"><img class="img-letter" src="<?php echo base_url().'assets/images/vision.png' ?>"></div>
				<p class="mvg-p">
					<strong>Our vision therefore is to see that:</strong>
					<ul>
						<li>
							Every <strong>PILIPINO CHILD</strong> be given the access
							to <strong>QUALITY EDUCATION</strong>
						</li>
						<br/>
						<li>
							Opportunities be provided for him to develop as a
							unique individual, able to pace his learning according to his 
							mental capacity so that he may be able to strengthenhis relationship
							with <strong>FAMILY, PEER</strong> and <strong>COMMUNITY</strong>	
							in order for him to become a participating and productive member of
							society
						</li> 
					</ul>	
				</p>
			</div>
			<div class="col-md-4">
				<div class="mvg-center"><img class="img-letter" src="<?php echo base_url().'assets/images/goal.png' ?>"></div>
				<p class="mvg-p">
					<ul>
						<li><i>Inculcate Patriotism and Nationalism</i></li>
						<li><i>Foster love of humanity an respect for Human Rights</i></li>
						<li><i>Teach the rights and duties of citizenship</i></li>
						<li><i>strengthen ethical and spiritual values</i></li>
						<li><i>Develop morel charachter and personal discipline</i></li>
						<li><i>Encourage critical and creative thinking</i></li>
						<li><i>Broaden scientific and technological knowledge</i></li>
						<li><i>Promote Philippine culture and art</i></li>
					</ul>
				</p>
			</div>
		</div>
		
	</div>

	<?php $this->load->view('templates/js'); ?>
  </body>
</html>
