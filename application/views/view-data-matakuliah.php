<html>

<head>
	<tittle>Tampil Data Matakuliah</tittle>
</head>
<body>
	<center>
		<table>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Kode MTK</th>
				<th>:</th>
				<td>
					<?= $kode; ?>
				</td>
			</tr>
			<tr>
				<td>SKS</td>
				<td>:</td>
				<td>
					<?= $SKS; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base-url('matakuliah');
?>">kembali</a>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
