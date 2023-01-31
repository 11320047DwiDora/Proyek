<html>
<head>
	<title>Laporan Data Raport PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Raport Siswa PDF</h4>
	</center>
	<h5>{{$raport->siswa->name}}</h5>
	<h5>{{$raport->room->nama_kelas}}</h5>
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Kehadiran</th>
                <th>Tugas</th>
                <th>Uts</th>
                <th>Uas</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($raport as $item)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$item->course->nama_course}}</td>
                <td>{{$item->kehadiran}}</td>
                <td>{{$item->tugas}}</td>
                <td>{{$item->uts}}</td>
                <td>{{$item->uas}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>