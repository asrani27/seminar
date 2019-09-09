<!DOCTYPE html>
<html>
<head>
<title>REGISTRASI SEMINAR INTERNATIONAL</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="{{url('reg/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('reg/demo.css')}}" media="all" />
    
    <style>
        table, th, td {
        border-spacing:10px 4px;
        border-collapse:separate;
        margin-left:auto;
        margin-right:auto;
        }
    </style>
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="#" target="_blank">Home</a>
                <span class="right">
                    <a href="#">
                        <strong>Dinas Komunikasi, Informatika Dan Statistik Banjarmasin</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
                <table>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Lambang_Kota_Banjarmasin.gif" height="100"></td>
                    <td><h1>REGISTRASI SEMINAR INTERNASIONAL</h1></td>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/1018px-Logo_Universitas_Brawijaya.svg.png" height="100" width="90"></td>
                </table>
            </header>       
      <div  class="form">
      <form id="contactform" action="{{route('saveseminar')}}" method="POST">
        {{csrf_field()}} 
    			<p class="contact"><label for="name">Nama / Name</label></p> 
    			<input id="name" name="name" placeholder="Nama lengkap Anda" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="name">Alamat / Address</label></p> 
    			<input id="name" name="alamat" placeholder="Alamat Anda saat ini" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="name">Jenis Kelamin / Gender</label></p> 
                <select class="select-style gender" name="jkel">
                    <option value="L" selected>Pria / Male</option>
                    <option value="P">Wanita / Female</option>
                </select><br><br>
                    
    			<p class="contact"><label for="name">Status</label></p> 
                <select class="select-style gender" name="status">
                    <option value="Alummni Brawijaya" selected>Alummni Brawijaya</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Akademisi">Akademisi</option>
                    <option value="Perwakilan Instansi">Perwakilan Instansi</option>
                </select><br><br>

    			<p class="contact"><label for="name">Instansi / Your workplace name</label></p> 
    			<input id="name" name="instansi" placeholder="Tempat Anda Bekerja Saat Ini / Your workplace name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="name">Jabatan / Your Position Name</label></p> 
    			<input id="name" name="jabatan" placeholder="Jabatan Anda Saat Ini / Your Position Name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="name">Telp</label></p> 
    			<input id="telp" name="telp" placeholder="No Telp" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email Valid</label></p> 
                <input id="email" name="email" placeholder="email valid" required="" type="email"> 
                
            <input class="buttom" id="submit" tabindex="5" value="Daftar" type="submit"> 	 
   </form> 
</div>      
</div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>
