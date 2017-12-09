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
		<div class="row" id="potocistik">
			<div class="col-sm-4 potocistik">
				<a href="/img/2.jpg" data-fancybox="thumbnail" data-caption="Cheese Stick Bangsawan 2 Rasa" class="thumbnail" rel="ligthbox">
					<img class="img-responsive" src="/img/2.jpg" alt="2">
				</a>
				<h4 class="text-center">Cheese Stick Bangsawan 2 Rasa</h4>
			</div>
			<div class="col-sm-4 potocistik">
				<a href="/img/1.jpg" data-fancybox="thumbnail" data-caption="Cheese Stick Pedas" class="thumbnail" rel="ligthbox">
					<img class="img-responsive" src="/img/1.jpg" alt="1">
				</a>
				<h4 class="text-center">Cheese Stick Pedas</h4>
			</div>
			<div class="col-sm-4 potocistik">
				<a href="/img/3.jpg" data-fancybox="thumbnail" data-caption="Cheese Stick Original" class="thumbnail" rel="ligthbox">
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
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet dolor sed orci vestibulum venenatis sit amet at est. Nunc commodo aliquam metus eu semper. Aliquam mauris erat, ultrices cursus neque vitae, elementum scelerisque lorem. Sed venenatis sed metus ut egestas. In eget tincidunt tortor. Aliquam blandit sed urna sed scelerisque. Phasellus scelerisque tempor elit, a porta dui hendrerit id. Nulla scelerisque laoreet semper. Nam pharetra, odio ornare placerat ultricies, mauris odio maximus arcu, at hendrerit justo dolor et augue. Mauris scelerisque, diam vel aliquam lacinia, tellus erat mattis sem, at dignissim est turpis tempus ante. Suspendisse pharetra nisl a mattis fringilla. Etiam eget dolor vitae velit tempor lobortis non pretium odio. Phasellus augue urna, gravida ac euismod vitae, gravida congue ligula. Fusce ac nunc velit. Nunc tortor felis, ullamcorper non rutrum eget, semper at mauris. Nam ac neque sagittis, ultricies massa et, vestibulum turpis. Aliquam ultrices vestibulum nibh, sit amet dapibus turpis hendrerit eget. Nulla facilisi. Suspendisse placerat elit justo, ac rhoncus velit sollicitudin eget. Morbi pulvinar odio at elit venenatis, id feugiat nisl bibendum.</h4>
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