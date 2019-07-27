<?

	$con = mysql_connect("localhost","root","","internship");
	if(mysql_connect_errno()){
		echo "Failed to connect to MySQL:"
				mysql_connect_error();
	} 

?>