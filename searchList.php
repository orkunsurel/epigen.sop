<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sopSNP</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<?php
	include("config.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	
	$imageHeight = 25;
	$checked_trh = 25;
	
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	
	mysql_select_db( "sopsnpdb" );
	
	$sorgu = mysql_query(" SELECT * FROM tbl_linklist ORDER BY prefrate DESC ");
	
	if(mysql_num_rows($sorgu) > 0)  {
		
	?>	<table class="searchTable" align="center"> 
			<tr>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>Tercih Ediliyor</th>
				<th>Seçim</th>
			</tr>
     <?php
		while($kayit = mysql_fetch_array($sorgu)){
		?>
				<tr>
					<td align="center"> <img src="img/<?php echo $kayit["imgpath"]; ?>.<?php echo $kayit["imgtype"]; ?>" alt="<?php echo $kayit["imgpath"]; ?>" height="<?php echo $imageHeight ?>"> </td></td>
					<td><?php echo $kayit["linkname"]; ?></td>
                    <td><?php echo round($kayit["prefrate"],1); ?>%</td>
                    <td>
                    	<div class="block" align="center">
							<input type="checkbox" name="id[]" id="<?php echo $kayit["id"]; ?>" value="<?php echo $kayit["id"]; ?>" <?php if($kayit["prefrate"] > $checked_trh) echo 'checked'; ?> />
							<label for="<?php echo $kayit["id"]; ?>"></label>
						</div>
                    </td>
				</tr>
		<?php
		}
		?></table><?php
	}
	
	mysql_close();
?>