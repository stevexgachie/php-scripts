<?php
//php database objects
echo '<pre >';
try{
	$dbh = new PDO("mysql:host=localhost;dbname=test",'root','');

}
catch (PDOException $e){
echo $e->getMessage();
}

//PDO class
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$dbh->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);



//PDO statement class


$sth=$dbh->prepare("INSERT INTO page(title,content)VALUES(?,?)");
$sth->bindParam(1,$title);
$sth->bindParam(2,$content);

$title='abc';
$content='123';
$sth->execute();

$title='def';
$content='456';
$sth->execute();

?>