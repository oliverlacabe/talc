<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <img class="logo pull-left" src="<?php echo base_url('assets/images/logo.jpg'); ?>">
        <h4 class="navtitle pull-left">Tacloban Angelicum Learning Center</h4>
      </div>
      <form class="navbar-form navbar-right" action="/landing/login" method="post" role="search">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-danger">Login</button>
       </form>
    </div><!-- /.container-fluid -->
  </nav>