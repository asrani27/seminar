<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>DAFTAR PESERTA SEMINAR</title>
<style type="text/css">
.auto-style4 {
	border-style: solid;
	border-width: 0px;
}
.auto-style5 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
}
.auto-style6 {
	border-style: solid;
	border-width: 1px;
}
.auto-style7 {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
	font-size: large;
}

</style>
</head>

<body>

<p class="auto-style7"><strong>DAFTAR PESERTA SEMINAR INTERNATIONAL</strong></p>
<table cellpadding="2" cellspacing="0" class="auto-style4" style="width: 100%">
	<tr>
		<td class="auto-style5"><strong>No</strong></td>
		<td class="auto-style5"><strong>Nama</strong></td>
		<td class="auto-style5"><strong>No Telp</strong></td>
		<td class="auto-style5"><strong>Email</strong></td>
    </tr>
    <?php
    $no = 1;
    ?>
    @foreach ($data as $d)
	<tr>
        <td class="auto-style5">{{$no++}}</td>
        <td class="auto-style6">&nbsp;{{$d->nama}}</td>
        <td class="auto-style5">{{$d->telp}}</td>
        <td class="auto-style6">&nbsp;{{$d->email}}</td>
    </tr>
    @endforeach
</table>

</body>

</html>
