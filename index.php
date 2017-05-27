<!DOCTYPE html>
<html lang="en">
<head>
  <title>BD Operations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
   <link rel="stylesheet" href="asset/css/style.css">
  <script src="asset/js/jquery.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>

</head>
<body  background="asset/images/2.jpg">
<div class=" container-table">
	
	<div class='container vertical-center-row'>
	<div class="panel panel-info col-md-3">
		<div class='' id='loader'></div>
	  <div class='panel-heading'>
		<h4>Backup / Restore Database</h4>
	  </div>
	  <div class='panel-body'>
		  <div class="list-group">
		    <a href="javascript:void(0)" class="list-group-item" data='dumpFromLocal' action='dump' targets='local' db='myphlebo'>Myphlebo: Dump From Localhost</a>
		    <a href="javascript:void(0)" class="list-group-item" data='loadToLocal' action='load' targets='local' db='myphlebo'>Myphlebo: Load To Localhost</a>
		    <a href="javascript:void(0)" class="list-group-item" data='dumpFromRemote' action='dump' targets='myphlebo' db=''>Myphlebo: Dump From Remote Host</a>
		    <a href="javascript:void(0)" class="list-group-item" data='loadToRemote' action='load' targets='myphlebo' db=''>Myphlebo: Load To Remote Host</a>
		  </div>
	  </div>
	 <div class='panel-footer text-right'>
		<h5>Backup / Restore Database</h5>
	 </div>
	</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$(".list-group").on('click','a',function(){
			var data = $(this).attr('data');
			var target = $(this).attr('targets');
			var action = $(this).attr('action');
			var db = $(this).attr('db');
			$.ajax({
				type:'post',
				url:'action.php',
				data:{data:data,action:action,target:target,db:db},
				beforeSend:function(){
					$("#loader").toggleClass('loading');
				},
				success:function(res){
					alert(res);
				}
			}).done(function() {
	          $("#loader").toggleClass('loading');
	        });;
		});
	});
</script>
</body>
</html>

