<div class="col-md-12 column">
			<ul class="nav nav-tabs">
				<li class="<?php echo "active";?>">
					<a id="pemilih" href="#">Pemilih</a>
				</li>
				<li>
					<a href="#">Calon</a>
				</li>
				<li class="disabled">
					<a href="#">Pendaftar</a>
				</li>
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Action</a>
						</li>
						<li>
							<a href="#">Another action</a>
						</li>
						<li>
							<a href="#">Something else here</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">Separated link</a>
						</li>
					</ul>
				</li>
			</ul>
</div>
<script type="text/javascript">
	$(document).ready(function  () {
		$("#pemilih").click(function  () {
			$("$konten").load("<?php echo base_url('admin/tabel_mahasiswa');?>")
		});
	});
</script>
<div id="konten" class="konten col-md-12">
	
</div>