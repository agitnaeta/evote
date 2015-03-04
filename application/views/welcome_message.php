<!DOCTYPE html>
<html lang="en">
<head>
<title>Evote STMIK Sumedang</title>
	<?php include 'style.php';?>
	<script type="text/javascript">
	$(document).ready(function  () {
		
	</script>
</head>
<body>
<div class="col-md-12 konten">
			<nav>
				<div class="nav navbar-fixed-top navbar-default text-center">
				<h1 class="text-muted"><i class="glyphicon glyphicon-leaf"></i> Evote<small>~STMIK Sumedang</small></h1>
				</div>
			</nav>
			</div>
	<div class="col-md-12">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 text-center">
			<h1 class="text-muted">
				E-Vote <small>~Tentukan Pilihanmu</small>
			</h1>
			<hr>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Silahkan Login!
				</div>
				<div class="panel-body">
				<div class="text-center">
					<?php echo $this->session->flashdata('pesan');?>	
				</div>
					<form class="form-group" method="post" action="<?php echo site_url('login');?>">
						<label><i class="glyphicon glyphicon-user"></i> Username</label>
						<input required name="username" class="form-control" type="text" placeholder="Username">
						<br>
						<label><i class="glyphicon glyphicon-lock"></i> Password</label>
						<input required name="password" class="form-control" type="password" placeholder="Password">
					
				</div>
				<div class="panel-footer">
					<button type="submit" class="btn btn-block btn-primary">
						<i class="glyphicon glyphicon-log-in"></i> Login
					</button>
				</div>
				</form>
			</div>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-12">
			<div class="navbar-fixed-bottom">
				<div class="pull-right">
					<hr class="colorgraph">
					<p class="text-muted">Powered By : NaetaLab</p>	
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>