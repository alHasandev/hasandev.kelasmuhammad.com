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
<h4>Yang diperlukan</h4>
<p>sebelum memulai membuat kalkulator ini kamu perlu menyiapkan beberapa hal</p>
<p>Perangkat</p>
<p>Code Editor</p>
<p>Mental</p>
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
