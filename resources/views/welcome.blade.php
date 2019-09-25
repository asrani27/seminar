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
            * {
              box-sizing: border-box;
            }
            
            input[type=text], input[type=email], select, textarea {
              width: 80%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              resize: vertical; 
              font-size: 12px; 
              margin:0px 0px 10px 0;
              line-height: 14px; 
              font-family:Arial, Helvetica;
            }
            
            label {
              padding: 12px 12px 12px 0;
              display: inline-block;
              color: #000; 
              font-weight:bold;
              font-size: 12px;
              font-family:Arial, Helvetica;
            }
            #formnew {
                background:#f1f1f1; 
                width:100%;
                padding: 22px;
            }
            input[type=submit] {
              background-color: #4CAF50;
              color: white;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              float: left;
              width: 70%;
            }
            
            input[type=submit]:hover {
              background-color: #45a049;
            }
            
            .container {
              border-radius: 5px;
              padding: 10px;
            }
            
            .col-25 {
              float: left;
              width: 25%;
              margin-top: 6px;
              text-align:right;
            }
            
            .col-75 {
              float: left;
              width: 75%;
              margin-top: 6px;
            }
            
            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
            
            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .col-25, .col-75{
                width: 100%;
                text-align:left;
                margin-top: 0;
              }

              input[type=submit] {
                width: 100%;
              }

              input[type=text], input[type=email], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
               }
            }
            </style>
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            {{-- <div class="freshdesignweb-top">
                <a href="#" target="_blank">Home</a>
                <span class="right">
                    <a href="#">
                        <strong>Dinas Komunikasi, Informatika Dan Statistik Banjarmasin</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> --}}
            <!--/ freshdesignweb top bar -->
			<header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/1018px-Logo_Universitas_Brawijaya.svg.png" height="80"> &nbsp;
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Lambang_Kota_Banjarmasin.gif" height="80">&nbsp;
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_unlam.png" height="80">
                <br>
                <h1>REGISTRASI SEMINAR INTERNASIONAL</h1>
            </header>       
            <div class="container">
                    <form id="formnew" action="{{route('saveseminar')}}" method="POST">
                            {{csrf_field()}} 
                      <div class="row">
                        <div class="col-25">
                            <label for="name">Nama / Name</label>
                        </div>
                        <div class="col-75">
                            <input id="name" name="name" placeholder="Nama lengkap Anda" required="" tabindex="1" type="text"> 
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="lname">Alamat / Address</label>
                        </div>
                        <div class="col-75">
                            <input id="name" name="alamat" placeholder="Alamat Anda saat ini" required="" tabindex="1" type="text">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="country">Jenis Kelamin / Gender</label>
                        </div>
                        <div class="col-75">
                            <select class="select-style gender" name="jkel">
                                <option value="L" selected>Pria / Male</option>
                                <option value="P">Wanita / Female</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="country">Status</label>
                        </div>
                        <div class="col-75">
                                <select class="select-style gender" name="status">
                                        <option value="Alummni Brawijaya" selected>Alummni Brawijaya</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Akademisi">Akademisi</option>
                                        <option value="Perwakilan Instansi">Perwakilan Instansi</option>
                                </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="subject">Instansi / Your workplace name</label>
                        </div>
                        <div class="col-75">
                            <input id="name" name="instansi" placeholder="Tempat Anda Bekerja Saat Ini / Your workplace name" required="" tabindex="1" type="text"> 
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="subject">Jabatan / Your Position Name</label>
                        </div>
                        <div class="col-75">
                            <input id="name" name="jabatan" placeholder="Jabatan Anda Saat Ini / Your Position Name" required="" tabindex="1" type="text"> 
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="subject">No Telpon</label>
                        </div>
                        <div class="col-75">
                            <input id="telp" name="telp" placeholder="No Telp" required="" tabindex="1" type="text"> 
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="subject">E-Mail Valid</label>
                        </div>
                        <div class="col-75">
                            <input id="email" name="email" placeholder="email valid" required="" type="email"> 
                        </div>
                      </div>
                      <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                                <input type="submit" value="DAFTAR">
                            </div>
                      </div>
                    </form>
                  </div>   
</div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>
