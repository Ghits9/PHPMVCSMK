<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
	<table>
		<tr>
			<td>Nis</td>
			<td>Nama Lengkap</td>
			<td>Kelas</td>
			<td>Jurusan</td>
		</tr>

		<?php
			foreach ($student as $nis => $student) {
				echo '<tr> <td> <a href="index.php?student='.$student->nis.'">
					'.$student->nis.'</a> </td> <td>'.$student->nama_lengkap.'</td> <td>'.$student->kelas.'</td><td>'.$student->jurusan.'</td> </tr>';
			}
		 ?>

	</table>
</body>
</html>