<div class="title-content box-shadow">
	<div>
		<i class="fa fa-laptop" aria-hidden="true"></i>
		<h2>My Blog</h2>
	</div>
	<div class="nav">
		<ul>
			<li class="active">
				<a href="?menu=blog&blog=semua;" onclick="alert('belum ada sanak');">SEMUA</a>
			</li>
			<li>
				<a href="#semua_blog" onclick="alert('belum ada sanak');">ARTIKEL</a>
			</li>
			<li>
				<a href="#semua_blog" onclick="alert('belum ada sanak');">TUTORIAL</a>
			</li>
			<li>
				<a href="#semua_blog" onclick="alert('belum ada sanak');">CERITA</a>
			</li>
			<li>
				<a href="#lainnya" onclick="alert('belum ada sanak');">LAINNYA</a>
			</li>
			<li>
				<a href="" class="icon-search" onclick="alert('belum bisa sanak');"><i class="fa fa-search" aria-hidden="true"></i></a>
			</li>
		</ul>
	</div>
</div>

<h3>[Tutorial] Membuat kalkulator sederhana di web dengan html dan Javascript</h3>
<p>Karena saya juga baru belajar web programming menggunakan javascript dan setelah sedikit belajar, saya coba-coba buat kalkulator sederhana, karena saat saya belajar pemrograman di smk atau dikuliah sekarang (pascal, delphi, foxpro, c++) biasanya saya diberi tugas untuk membuat kalkulator sederhana, tapi jika biasanya dijalankan di platform windows, sekarang saya mencoba menerapkannya di web menggunakan bahasa pemrograman javascript</p>
<p>Setelah banyak trial error akhirnya saya berhasil membuat kalkulator walupun masih sangat sederhana, karena saya berbagi itu indah dan saya tidak punya banyak uang untuk dibagi-bagi, jadi saya akan berbagi sesuatu yang tidak akan habis, tapi malah bertambah saat dibagi. <em>#berbagi itu indah</em></p>

<h4>Yang diperlukan</h4>
<p>sebelum memulai membuat program kalkulator sederhana ini kamu perlu menyiapkan beberapa hal</p>
<p>Perangkat, perangkat yang diperlukan tentu saja komputer/laptop</p>
<p>Code Editor, code editor adalah text editor khusus yang digunakan untuk mempermudah penulisan code program. Ada beberapa code editor yang bisa kamu pakai seperti <a href="">notepad++</a>, <a href="">atom</a>, <a href="">Sublime Text</a>, dan <a href="">sebagainya</a>. Kamu juga bisa memakai text editor biasa seperti notepad bawaan windows</p>
<div class="info">
	<p>untuk penjelasan lebih lanjut tentang code editor kamu bisa lihat di, <a href="">apa itu code editor dan list code editor populer</a></p>
</div>
<div class="info">
	<p>Saya sendiri lebih suka memakai Code Editor <a href="">Sublime Text</a>, tapi memakai code editor yang lain juga tidak masalah</p>
</div>
<p>Mental, untuk seorang programmer atau orang yang ingin menjadi programmer diharuskan memiliki mental pantang menyerah dalam trial and error </p>
<p></p>
<p></p>
<p>Coba kalkulator</p>
<div class="demoKalkulator">
	<div class="layar">
		<input type="text" name="input1" placeholder="nilai 1">
		<input type="text" name="input2" placeholder="nilai 1">
		<input type="text" name="hasil" placeholder="hasil">
	</div>

	<div class="control">
		<button onclick="hasilKalkulator('tambah');">Hasil Tambah</button><br>
		<button onclick="hasilKalkulator('kurang');">Hasil Kurang</button><br>
		<button onclick="hasilKalkulator('kali');">Hasil Kali</button><br>
		<button onclick="hasilKalkulator('bagi');">Hasil Bagi</button><br>
	</div>
</div>