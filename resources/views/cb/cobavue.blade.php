<!DOCTYPE html>
<html>
	<head>
		<title>Latihan Vue</title>
	</head>

	<body>
		<div id="app">
			<h3>Nama @{{ nama }} - @{{ umur }} tahun</h3>
			<br>
			<br>
			<input type="text" v-model="pesan" placeholder="Pesan yang akan muncul">
			<p>Hasil dari input user : @{{ pesan }}</p>
			<br>
			<br>
			<h3 v-if="conditional">Hasil pesan kondisi</h3>
			<br>
			<br>
		</div>

		<script src="{{{ asset('js/vue.js')}}}"></script>
		<script>
			new Vue({
				el: '#app',
				data: {
					nama: "Jhon",
					umur: 17,
					pesan: "",
					conditional: false
				}
			});
		</script>
	</body>
</html>