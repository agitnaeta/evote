
<div id="fd" class="container">
	<div class="row clearfix">
			<div class="col-md-12 konten">
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
		<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Detail Calon</h3>
		</div>
		<div class="bg-primary col-md-6 text-center"><h4>Ketua</h4></div>
		<div class="bg-info col-md-6 text-center"><h4>Wakil Ketua</h4></div>
		<?php foreach ($calon->result() as $row):?>
			
			<div class="col-md-6">
			<div class="panel-body">
				<img  src="<?php echo base_url('src/img/');?><?php echo "/$row->foto";?>" class="img-responsive img-rounded img">
			</div>
			<div class="panel-body">
				<label>Nama</label><br>
					<?php echo $row->nama;?><br>
				<label>Jurusan</label><br>
				<?php echo $row->jurusan;?><br>
				<label>Semester</label><br>
				<?php echo $row->semester;?><br>
				<label>IPK</label><br>
				<?php echo $row->ipk;?><br>
			</div>
			</div>
			<?php endforeach;?>	
			<div class="panel-body">
				<label class="text-center">Visi Misi</label>
				<hr>
			<?php foreach ($pasangan->result() as $row):?>
				<?php echo $row->visi_misi;?><br>
			<?php endforeach;?>	
			</div>
			<div class="panel-footer">
			<div class="text-right">
				<a title="Pilih" class="btn btn-primary"> 
					<i class="glyphicon glyphicon-ok"></i>
				</a>
				<a href="<?php echo base_url('mahasiswa/home');?>" title="Kembali" class="btn btn-danger">
					<i class="glyphicon glyphicon-remove"></i>
				</a>
			</div>
			</div>	
		</div>		
	</div>
</div>

