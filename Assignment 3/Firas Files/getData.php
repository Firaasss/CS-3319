<?php 
$query = "SELECT * FROM doctor ORDER BY ";
$order = $_GET[ 'order' ];
if ( $order == 'fname_asc' ) {
  $query .= 'firstName ASC';
} else if ( $order == 'fname_dsc' ) {
  $query .= 'firstName DESC';
} else if ( $order == 'lname_asc' ) {
  $query .= 'lastName ASC';
} else if ( $order == 'lname_dsc' ) {
  $query .= 'lastName DESC';
}

$result = mysqli_query( $connect, $query );
if ( !result ) {
  die( "query unsuccessful" );
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
  echo '<input type="radio" name="doctor" value="';
  echo $row["docLicNum"];
  echo '">'.$row["firstName"]." ".$row[ "lastName" ]. "<br>";
}
mysqli_free_result( $result );
?>