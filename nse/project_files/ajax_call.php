<?php


ob_start ();
session_start ();
include "../includes/conn.php";

$company_name=$_GET['company_name'];
$symbol="_%";

$pass_company_name=$company_name.$symbol;

//LIKE 'b_%'

$query_country= "select company_name,short_name from company  order by company_name asc";
$country_array=array();
	
$result_country = mysql_query ( $query_country );
while ( $row_country = mysql_fetch_array ( $result_country ) ) {

    $short_name = $row_country ['short_name'];
    $company_name = $row_country ['company_name'];

    array_push($country_array,$company_name."-".$short_name);
        
    }
    echo $myJSON = json_encode($country_array);

?>


  
  









  


                          
                
            
