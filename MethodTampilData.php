function tampil_data(){
	$data = mysql_query("select * from user");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}