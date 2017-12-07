@extends("layouts.application")
@section("content")

<!-- Jumbotron -->
<div class="jumbotron text-center" id="jumbotron">
	<img src="img/cb.png" class="">
	<br>
	<br>
	<h1>Cebelas Bangsawan</h1>
	<h2><i>Cemilan Masyarakat Rasa Bangsawan</i></h2>
</div>

<!-- Produk -->
<section class="produk" id="produk">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Produk</h2>
				<hr>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<a href="/img/2.jpg" class="thumbnail fancybox" rel="ligthbox">
					<img class="img-responsive" src="/img/2.jpg" alt="2">
				</a>
				<h4 class="text-center">Cheese Stick Bangsawan 2 Rasa</h4>
			</div>
			<div class="col-sm-4">
				<a href="/img/1.jpg" class="thumbnail fancybox" rel="ligthbox">
					<img class="img-responsive" src="/img/1.jpg" alt="1">
				</a>
				<h4 class="text-center">Cheese Stick Pedas</h4>
			</div>
			<div class="col-sm-4">
				<a href="/img/3.jpg" class="thumbnail fancybox" rel="ligthbox">
					<img class="img-responsive" src="/img/3.jpg" alt="3">
				</a>
				<h4 class="text-center">Cheese Stick Original</h4>
			</div>
		</div>
	</div>
</section>

<!-- Tentang -->
<section class="tentang" id="tentang">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Tentang Kami</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1">
				<h3>Keripik atau kripik adalah sejenis makanan ringan berupa irisan tipis dari umbi-umbian, buah-buahan, atau sayuran yang digoreng di dalam minyak nabati. Untuk menghasilkan rasa yang gurih dan renyah biasanya dicampur dengan adonan tepung yang diberi bumbu rempah tertentu. Secara umum keripik dibuat melalui tahap penggorengan, tetapi ada pula dengan hanya melalui penjemuran, atau pengeringan. Keripik dapat berasa dominan asin, pedas, manis, asam, gurih, atau paduan dari kesemuanya. Keripik singkong banyak diproduksi di kota Bandung dengan berbagai macam rasa dan varian. Di Yogyakarta terdapat keripik berbahan baku jamur tiram. Secara umum keripik dibuat melalui tahap penggorengan, tetapi ada pula dengan hanya melalui penjemuran, atau pengeringan. Keripik atau kripik adalah sejenis makanan ringan berupa irisan tipis dari umbi-umbian, buah-buahan, atau sayuran yang digoreng di dalam minyak nabati.</h4>
			</div>		
		</div>
	</div>
</section>

<!-- Hubungi Kami -->
<section class="hubungi" id="hubungi">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Hubungi Kami</h2>
				<hr>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
			    	<label for="inputnama"  control-label">Nama</label>
		        		<input type="nama" class="form-control" id="inputnama" placeholder="Tulis namamu disini">	
		    	</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
			    	<label for="inputemail"  control-label">Email</label>
		        		<input type="email" class="form-control" id="inputemail" placeholder="Tulis emailmu disini">	
		    	</div>
		    	<div class="col-sm-4">
			    	<label for="inputtelp"  control-label">No. Telepon</label>
		        		<input type="telp" class="form-control" id="inputtelp" placeholder="Tulis nomor teleponmu disini">	
		    	</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
			    	<label for="inputsubjek"  control-label">Subjek</label>
		        		<textarea type="subjek" class="form-control" id="inputsubjek" rows="8" placeholder="Tulis subjek disini"></textarea>
		    	</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
			    	<button type="submit" class="btn btn-primary">Submit</button>
		    	</div>
			</div>
		</div>
	</div>
</section>

@stop