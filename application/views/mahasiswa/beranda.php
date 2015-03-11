<head>
	<title>Evote | Home</title>
</head>
<body>
	<div class="container ">
		<div class="row clearfix">
			<div class="col-md-12 ">
			<nav>
				<div class="nav navbar-fixed-top navbar-default text-center">
				<h1 class="text-muted"><i class="glyphicon glyphicon-leaf"></i> Evote<small>~STMIK Sumedang</small></h1>
				</div>
			</nav>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<img src="<?php echo base_url();?>src/img/lk.jpg" class="img-responsive img-circle img"/>
					<div class="pull-right">
					<h3 class="text-center"><?php echo $nama;?> </h3>
					<?php foreach ($mhs->result() as $row):?>
					<?php echo status($row->status_pilih);?>
					<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-body">
					<ul class="nav">
					<li>
						<a id="beranda" href="">
							<i class="glyphicon glyphicon-dashboard"></i> Beranda
						</a>
					</li>
					<li>
						<a id="pilih" href="">
							<i class="glyphicon glyphicon-edit"></i> Pilih
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('mahasiswa/home/daftar/');echo "/$nim";?>"> 
						<i class="glyphicon glyphicon-pencil"></i> 
						Daftar Calon</a>
					</li>
				</ul>
				</div>
				<div class="panel-footer">
					<ul class="nav">
						<li>
								<a href="<?php echo base_url('login/logout');?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a>
						</li>
					</ul>
				</div>
			
			</div>	
			</div>
			<div id="panduan" class="col-md-8">
				<?php include 'panduan.php';?>
				
			</div>
			<div id="konten" class="col-md-8">
				<?php include 'calon.php';?>
			</div>
			<div class="col-md-12">
				<nav>
				<div class="nav navbar-static-bottom  text-center">
					<div class="pull-right">
						<p class="colorgraph"></p>
						<p class="text-muted">
							Powered By: NaetaLab
						</p>
					</div>
				</div>
				</nav>
			</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function  () {
			$("#konten").hide();
			$("a#pilih").click(function  () {
				$("#panduan").hide();
				$("#konten").fadeIn("slow");
				return false;	
			})
			$("a#beranda").click(function  () {
				$("#konten").hide();
				$("#panduan").fadeIn("slow");
				return false;	
			})	
		})
	</script>
</body>