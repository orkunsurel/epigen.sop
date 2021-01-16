<?php
	include("config.php");
	
	$version = 1.1;
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db( "sopsnpdb" );
	
	$snp = $_GET["snp"];
	$id_array = $_GET["id"];
	$id_array = array_reverse($id_array);
	
	$guncelleme = mysql_query(" UPDATE tbl_global SET value_int = value_int + 1 WHERE name = 'search_ctr' ");
	
	$sorgu = mysql_query(" SELECT * FROM tbl_global WHERE name = 'search_ctr' ");
	$kayit = mysql_fetch_array($sorgu);
	$search_ctr = $kayit["value_int"];
	
	echo 'Total Search: ' . $search_ctr . '<br/>';
	echo 'SNP: ' . $snp . '<br/>';
	
	
	foreach($id_array as $id) {
		
		$guncelleme = mysql_query(" UPDATE tbl_linklist SET prefctr = prefctr + 1 WHERE id = '$id' "); //prefctr 1 arttırma
		
		$sorgu = mysql_query(" SELECT * FROM tbl_linklist WHERE id='$id' ");
		$kayit = mysql_fetch_array($sorgu);
		$prefctr = $kayit["prefctr"];
		echo 'Prefctr: ' . $prefctr .'<br/>' ;
		
		$prefrate_new = ($prefctr * 100) / $search_ctr;
		echo 'Prefrate_new: ' . $prefrate_new .'<br/>' ;
		$guncelleme = mysql_query(" UPDATE tbl_linklist SET prefrate = '$prefrate_new' WHERE id = '$id' "); //prefrate güncelleme
		
		$sorgu = mysql_query(" SELECT * FROM tbl_linklist WHERE id='$id' ");
		$kayit = mysql_fetch_array($sorgu);
		$link = $kayit["link"];
		$prefctr = $kayit["prefctr"];
		$prefrate = $kayit["prefrate"];
		
		echo $id . ': ' . $link . '<br/><br/>';
		
		if(1) {
			?>
				<script type="text/javascript">
					window.open( "<?php echo $link . $snp?>" );
				</script>
			<?php
		}
	}
	
?>
<script type="text/javascript">
	history.back();
	//window.open( "/", "_self" );
</script>