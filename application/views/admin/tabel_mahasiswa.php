<!DOCTYPE html>
<body>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Data Mahasiswa
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Data User
            </li>
        </ol>
    </div>
</div>
<div class="table table-responsive">
		<table class="table">
			<thead>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Status Pilih</th>
			<th>Aksi</th>
			</thead>
			<tbody>
			<?php $no=1; foreach ($mhs->result() as $row):?>
				<tr>
					<td id=""><?php echo $no++;?></td>
					<td id=""><?php echo $row->nim;?></td>
					<td id=""><?php echo $row->nama;?></td>
					<td id=""><?php echo $row->jurusan;?></td>
					<td id=""><?php echo status($row->status_pilih);?></td>
					<td>
						<a title="Edit" href=""> <i class="glyphicon glyphicon-edit"></i></a>
						<a class="text-danger" title="Hapus" href=""> <i class="glyphicon glyphicon-remove"></i></a>
					</td>
				</tr>
			<?php endforeach;?>	
			</tbody>
		</table>
</div>
<script type="text/javascript">
	$(document).ready(function  () {
		alert("oK");
	})
</script>
</body>
