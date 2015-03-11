
<?php $no=1; foreach ($calon->result() as $row):?>
<div class="col-md-4">
<div class="panel panel-primary">

	<div class="panel-body text-center">
		<span class="badge">
		<?php echo $no++;?>
		</span>
	</div>
	<div class="panel-body ">
		<div class="center"></div>
		<img src="<?php echo base_url('src/img/');?><?php echo "/$row->foto";?>" class="img-responsive img-thumbnail img">
		<hr>
		<div class="text-center">
		<?php echo $row->nama_pasangan;?>
		</div> 
	</div>
	
	<div class="panel-footer">
	<div class="text-right">
		<a title="Pilih" class="btn btn-primary"> 
			<i class="glyphicon glyphicon-ok"></i>
		</a>
		<a  id="detail" href="<?php echo site_url('mahasiswa/home/detail');echo "/$row->kode_pasangan";?>" title="Lihat Detail" class="btn btn-info">
			<i class="glyphicon glyphicon-eye-open"></i>
		</a>
	</div>
	</div>	
</div>
</div>
<?php endforeach;?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript">
	$(document).ready(function  () {
		$( "#detail" ).click(function  () {
			$( "#fd" ).dialog();
		});
	})
</script>