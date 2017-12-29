<?php  
 require "function/function.php";
?>

<!DOCTYPE html>
<html>
<head>
<!-- Credit -->
<!-- 

Developed by          :

Tanggal Awal          : 11/12/2017
Update Terakhir       : 19/12/2017
Lokasi Kerja          : Banjarmasin, Kalimantan Selatan.
Nama Resmi            : Mohamad Albie
Nama yang seharusnya  : Muhammad Albie Al Hasan 
Nama Panggilan        : Albie || Al || Hasan
Pekerjaan             : Sales Agent Telkom Bjm
Status Pendidikan     : Mahasiswa (masih)
Perguruan Tinggi      : UNISKA Banjarmasin
Semester              : 3 (tiga)
Jurusan               : Teknik Informatika
Kelas                 : 3 I Reguler Malam
Keterangan            : Jika ada yang mau bekerja sama dalam mengembangkan sebuah website atau mau merekrut saya pada suatu pekerjaan baik jangka panjang maupun jangka pendek, saya akan sangat senang bekerjasama. Hubungi (Call/Chat -> WA ) : 082149259826

-->
<!-- Meta Tag -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
<!-- <meta http-equiv="refresh" content="1;url=?menu=home"> -->
<!-- Akhir Meta -->
<title>Hasandev - learn to be a good developer</title>

<!--Menghubungkan dengan file CSS-->
<link rel="stylesheet" typ\e="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Menghubungkan dengan file JQuery-->
<script src="js/jquery/jquery-3.2.1.min.js" rel="text/javascript"></script>
<script src="js/jquery/velocity.min.js"></script>
</head>
<body>
<div class="container">
  <div class="header">
    <h1>HASANDEV</h1>
    <p>learn to be a good developer <i class="fa fa-angle-double-right satu" aria-hidden="true"></i><i class="fa fa-angle-double-right dua" aria-hidden="true"></i></p>
  </div>
  <section>
     <aside class="box-shadow">
      <nav class="menu">
        <div class="title">
          <span onclick="makeFixed()"><i class="material-icons">&#xE897;</i>
          </span>
          <h2>Menu</h2>
        </div>
        <ul>
          <li class="close" onclick="closeResponseNav()"><a href="javascript:void(0);" onclick="closeResponseNav()"><i class="fa fa-times" aria-hidden="true"></i></a></li>
          <li class="menuHasan"><a href="javascript:void(0);">HASANDEV</a></li>
          <li><a href="?menu=home" class="aHome" id="home">Home</a></li>
          <li><a href="?menu=blog" id="blog">Blog</a></li>
          <li><a href="?menu=about_me" id="about_me">About Me</a></li>
          <li><a href="?menu=contact" id="contact">Contact</a></li>
          <li><a href="?menu=thanks" id="thanks">Specials Thanks</a></li>
          <li class="btnNav"><a href="javascript:void(0);" class="lock" onclick="responseNav()">&#9776;</a><span class="clear"></span><span class="titleNav">HASANDEV</span><a href="javascript:void(0);" class="openLock" onclick="outFixed()"><i class="material-icons">&#xE898;</i></a></li>
        </ul>
      </nav>
    </aside>
    <div class="content box-shadow">

    <?php 

      gotoPage();

    ?>

    </div>
    <span class="clear"></span>
    <span class="floatLeft"></span>
    <div class="socialBox box-shadow">
      <div class="title"><h2>Be My Friends</h2></div>
      <div class="socialIcon">
        <ul>
          <li><a href="https://www.facebook.com/mohamad.albie.5" target="_blank"><i class="fa fa-facebook-official" target="_blank"></i><p>Facebook</p></a></li>
          <li><a href="https://www.twitter.com/alHasandev" target="_blank"><i class="fa fa-twitter" style="font-size:24px"></i><p>Twitter</p></a></li>
          <li><a href="https://www.instagram.com/mohamad9albie/" target="_blank"><i class="fa fa-instagram" style="font-size:24px"></i><p>Instagram</p></a></li>
          <li><a href="https://plus.google.com/116273329112878889049" target="_blank"><i class="fa fa-google" style="font-size:24px"></i><p>Google +</p></a></li>
        </ul>
      </div>
    </div>
  </section>
  <div class="footer">
    <div class="box">
      <span class="left">
        <h2>Web Tools</h2>
        <p><a href="javascript:void(0);"><i class="fa fa-user-circle-o" aria-hidden="true"></i> About Me</a></p>
        <p><a href="javascript:void(0);"><i class="fa fa-map-signs" aria-hidden="true"></i> Sitemap</a></p>
        <p><a href="javascript:void(0);"><i class="fa fa-user-secret" aria-hidden="true"></i> Privacy Policy</a></p>
        <p><a href="javascript:void(0);"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Disclaimer</a></p>
        <p><a href="javascript:void(0);"><i class="fa fa-handshake-o" aria-hidden="true"></i> Terms of Service</a></p>
      </span>
      <span class="center">
        <h2>Partner Links</h2>
        <p><a href="http://kelasmuhammad.com" target="_blank">kelasmuhammad.com</a></p>
        <p><a href="https://hasandev.blogspot.co.id" target="_blank">hasandev.blogspot.co.id</p>
        <p><a href="https://fiberkalsel.blogspot.co.id" target="_blank">fiberkalsel.blogspot.co.id</p>
        <p><a href="http://doa.kelasmuhammad.com" target="_blank">doa.kelasmuhammad.com</a></p>
        <p><a href="?menu=contact" target="_blank">menjadi partner</a></p>
      </span>
      <span class="right">
        <h2>Development</h2>
        <p><a href="javascript:void(0);">Dosen Pa Andie</a></p>
        <p><a href="javascript:void(0);">Design by Alhasan</a></p>
        <p><a href="javascript:void(0);">Supported by Hasandev</a></p>
        <p><a href="javascript:void(0);">Powered by kelasmuhammad</a></p>
        <p><a href="javascript:void(0);">copyright &copy; 2017 Muhammad Albie Al Hasan </a></p>
      </span>
    </div>
  </div>
</div>
<script src="js/script.js"></script>
</body>
</html>