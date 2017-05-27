<?php
/* defining variables*/
$server = [
			'local'=>[
						'host'	=>	'localhost',
						'key'	=>	'123',
						'user'	=>	'root'

					],
			'myphlebo'=>[
						'host'	=>	'34.208.220.213',
						'key'	=>	'myphlebo',
						'user'	=>	'myphlebo',
						'db'	=>	'myphlebo'
					]
			];
/*extract($server['myphlebo']);echo $user;
$file = 'sql.sql';
	system('mysqldump --user='.$user.' --password='.$key.' --host='.$host.' ' .$db.' > '.$file,$output);
die;*/
function dump($db,$array){
 	extract($array);
 	$file	=	$db.'.sql';
	system('mysqldump --user='.$user.' --password='.$key.' --host='.$host.' ' .$db.' > '.$file,$output);
	if(file_exists(filename)){
		$msg =  'Backed UP Successfully';
	}else{
		$msg =  'Backed UP Successfully';
	}
	return $msg;
}
 function load($db,$array,$file){
 	extract($array);
 	$file	=	$db.'.sql';
	if(system('mysql --user='.$user.' --password='.$key.' --host='.$host.' ' .$db.' < '.$file,$output))
	{
		$msg 'Restored Successfully';
	}else{
		$msg =  'Restored Successfully';
	}
	return $msg;
}

extract($_POST);
$x = $action($db,$server[$target]);
echo $x;
?>

