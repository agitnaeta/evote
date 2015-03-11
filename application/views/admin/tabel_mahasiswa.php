<!DOCTYPE html>
<body>
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
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->jurusan;?></td>
					<td><?php echo $row->status_pilih;?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
