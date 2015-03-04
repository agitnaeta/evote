<!DOCTYPE html>

<head>
	<title>Evote - Daftar Calon</title>
</head>
<body>
<?php foreach ($calon->result() as $row):?>
<div class="container">
		<div class="col-md-12 konten">
			<nav>
				<div class="nav navbar-fixed-top navbar-default text-center">
				<h1 class="text-muted"><i class="glyphicon glyphicon-leaf"></i> Evote<small>~Daftar Calon</small></h1>
				</div>
			</nav>
			</div>
	<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-footer">
			<h3>Daftar Calon</h3>
			
		</div>
		<form class="form-group" method="post" action="">
		<div class="panel-body">
			<table class="table">
				<tr>
					<td>
						<div class="panel-footer">Calon Ketua</div>
						<div class="panel-body">
							<label>NIM</label>
							<input value="<?php echo "$row->nim";?>" readonly class="form-control" type="text" name="nim" required>
							<label>Nama</label>
							<input value="<?php echo "$row->nama";?>" readonly class="form-control" type="text" name="nama" required>
							<label>Jurusan</label>
							<input value="<?php echo "$row->jurusan";?>" readonly class="form-control" type="text" name="jurusan" required>
							<label>Semester</label>
							<input value="<?php echo "$row->semester";?>" readonly class="form-control" type="text" name="semester" requred>
							<label>IPK</label>
							<input value="<?php echo "$row->ipk";?>" type="text" name="ipk" class="form-control" readonly required>
							<label>Foto</label>
							<input  type="file" name="foto" required>
							<label>Surat Keterangan Ukm</label>
							<input  type="file" name="ukm" required>
							<label>Sertifikat LDKM</label>
							<input type="file"  name="ldkm" required>
							<label>Surat Izin Orang Tua</label>
							<input type="file"  name="surat_izin" required>
							
						</div>
					</td>
					<td>
						<div class="panel-footer">Calon Wakil Ketua</div>
						<div class="panel-body">
							<label>NIM</label>
							<input id="wakil"  class="form-control" type="text" name="nim" required>
							<label>Nama</label>
							<input id="nama" readonly class="form-control" type="text" name="nama" required>
							<label>Jurusan</label>
							<input id="jurusan" readonly class="form-control" type="text" name="jurusan" required>
							<label>Semester</label>
							<input id="semester" readonly class="form-control" type="text" name="semester" requred>
							<label>IPK</label>
							<input id="ipk" type="text" name="ipk" class="form-control" readonly required>
							<label>Foto</label>
							<input  type="file" name="foto" required>
							<label>Surat Keterangan Ukm</label>
							<input  type="file" name="ukm" required>
							<label>Sertifikat LDKM</label>
							<input type="file"  name="ldkm" required>
							<label>Surat Izin Orang Tua</label>
							<input type="file"  name="surat_izin" required>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label>Visi Misi</label>
							<br>
							<textarea class="form-control" name="visi">
								
							</textarea>
					</td>
				</tr>
			</table>
			<div class="panel-footer">
				<a href="<?php echo site_url('mahasiswa/home');?>" class="btn btn-lg btn-default">
				<i class="glyphicon glyphicon-backward"></i>
				Kembali</a>
			
				<div class="pull-right">
					<button type="submit" class="btn btn-lg btn-primary">
						<i class="glyphicon glyphicon-ok"></i>
					Simpan</button>
					<button class="btn btn-lg btn-danger">
					<i type="reset" class="glyphicon glyphicon-remove"></i>
					Reset</button>
				</div>
			</div>
		</div>
		</form>
	</div>
	</div>
</div>
<?php endforeach;?>
</body>
<script type="text/javascript">
	$(document).ready(function  () {
		$("#wakil").keyup(function  () {
			var nim=$("#wakil").val()
			if (nim.length!=10) {
				$.post('<?php echo site_url('mahasiswa/home/handleNull');?>',{nim:nim},function (data) {
					$("#nama").val(data);
					$("#jurusan").val(data);
					$("#semester").val(data);
					$("#ipk").val(data);
				})
			}
			else
			{
					$.post('<?php echo site_url('mahasiswa/home/cari');?>',{nim:nim},function (data) {
					var obj = JSON.parse(data);
					$("#nama").val(obj[0].nama);
					$("#jurusan").val(obj[0].jurusan);
					$("#semester").val(obj[0].semester);
					$("#ipk").val(obj[0].ipk);
					})	
			}
		})
	})
</script>