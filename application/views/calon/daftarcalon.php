<!DOCTYPE html>

<head>
	<title>Evote - Daftar Calon</title>
	<script type="text/javascript">
	$(document).ready(function  () {
		$("#error").hide();
		$("#one").hide();
		$("#wakil").keyup(function  () {
			var nim=$("#wakil").val()
			var ketua=$("#ketua").val()
			if (nim.length!=10) {
				$.post('<?php echo site_url('mahasiswa/home/handleNull');?>',{nim:nim},function (data) {
					$("#nama").val(data);
					$("#jurusan").val(data);
					$("#semester").val(data);
					$("#ipk").val(data);
					$("#error").show();
					$("button#simpan").hide();
					$("#one").hide();
				})
			}
			else
			{
				if (nim==ketua) {
					$("#one").show();
						$("#error").hide();
				}
				else
				{
					$.post('<?php echo site_url('mahasiswa/home/cari');?>',{nim:nim,ketua:ketua},function (data) {
					var obj = JSON.parse(data);
					$("#nama").val(obj[0].nama);
					$("#jurusan").val(obj[0].jurusan);
					$("#semester").val(obj[0].semester);
					$("#ipk").val(obj[0].ipk);
					$("#error").hide();
					$("#one").hide();
					$("#simpan").show();
					})
				}	
			}
		})
	})
</script>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
});
</script>

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
			<br>
			<br>
			<br>

		</div>
	<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-footer">
			<h3>Daftar Calon</h3>
			<div class="pull-riht">
				<?php echo $this->session->flashdata('pesan');?>
			</div>
		</div>
		<?php echo form_open_multipart('calon/calon/daftar_calon');?>
		<div class="panel-body">
			<table class="table">
			<tr class="bg-success">
				<td colspan="2"> <i class="glyphicon glyphicon-user"></i> Keperluan Pribadi</td>
			</tr>
				<tr>
					<td>
						<div class="panel-footer">Calon Ketua</div>
						<div class="panel-body">
							<label>NIM</label>

							<input id="ketua" value="<?php echo "$row->nim";?>" readonly class="form-control" type="text" name="nimketua" required>
							<label>Nama</label>
							<input value="<?php echo "$row->nama";?>" readonly class="form-control" type="text" name="namaketua" required>
							<label>Jurusan</label>
							<input value="<?php echo "$row->jurusan";?>" readonly class="form-control" type="text" name="jurusanketua" required>
							<label>Semester</label>
							<input value="<?php echo "$row->semester";?>" readonly class="form-control" type="text" name="semesterketua" requred>
							<label>IPK</label>
							<input value="<?php echo "$row->ipk";?>" type="text" name="ipkketua" class="form-control" readonly required>
							<label>Foto</label>
							<input class="form-control"  type="file" name="fotoketua">
							<label>Surat Keterangan Ukm</label>
							<input class="form-control"  type="file" name="ukmketua">
							<label>Sertifikat LDKM</label>
							<input class="form-control" type="file"  name="ldkmketua">
							<label>Surat Izin Orang Tua</label>
							<input class="form-control" type="file"  name="surat_izinketua">
							
						</div>
					</td>
					<td>
						<div class="panel-footer">Calon Wakil Ketua</div>
						<div class="panel-body">
							<label>NIM</label>
							<input id="wakil"  class="form-control" type="text" name="nimwakil" required>
							<div id="error" role="alert"class="alert alert-danger">Data Yang Dimasukan Salah!</div>
							<div id="one" role="alert" class="alert alert-danger">Anda Tidak Bisa Daftar Sendiri!</div>
							<label>Nama</label>
							<input id="nama" readonly class="form-control" type="text" name="nama" required>
							<label>Jurusan</label>
							<input id="jurusan" readonly class="form-control" type="text" name="jurusan" required>
							<label>Semester</label>
							<input id="semester" readonly class="form-control" type="text" name="semester" requred>
							<label>IPK</label>
							<input id="ipk" type="text" name="ipk" class="form-control" readonly required>
							<label>Foto</label>
							<input class="form-control"  type="file" name="foto">
							<label>Surat Keterangan Ukm</label>
							<input class="form-control"  type="file" name="ukm">
							<label>Sertifikat LDKM</label>
							<input class="form-control" type="file"  name="ldkm">
							<label>Surat Izin Orang Tua</label>
							<input class="form-control" type="file"  name="surat_izin">
						</div>
					</td>
				</tr>
				<tr class="bg-success">
					<td colspan="2">
					<i class="glyphicon glyphicon-home"></i>
						Keperluan Pasangan
					</td>
				</tr>
				<tr>
				<td>
				<label>Foto Pasangan</label>
					<input class="form-control" type="file" name="foto_pasangan">
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
					<button id="simpan" type="submit" class="btn btn-lg btn-primary">
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
 