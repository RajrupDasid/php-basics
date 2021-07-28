# php-basics
php basics  as a website format
right php query to execute postgressql database

$host = "localhost";
$port = "5432";
$dbname = "login";
$user = "postgres";
$password = "passcode"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into logon (name,email,password,phonenumber)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['phonenumber']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
    }else{
        
            echo "Soething Went Wrong";
    }
