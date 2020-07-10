<script>
	$j(function(){
		var tn = 'books';

		/* data for selected record, or defaults if none is selected */
		var data = {
			Gênero_do_Livro: { id: '<?php echo $rdata['Gênero_do_Livro']; ?>', value: '<?php echo $rdata['Gênero_do_Livro']; ?>', text: '<?php echo $jdata['Gênero_do_Livro']; ?>' }
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for Gênero_do_Livro */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Gênero_do_Livro' && d.id == data.Gênero_do_Livro.id)
				return { results: [ data.Gênero_do_Livro ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

