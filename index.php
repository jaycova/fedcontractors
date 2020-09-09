<html>
<head>
<TITLE></TITLE>
<link href="../stylesheet.css" rel="stylesheet" type="text/css">
<head>
<style>
body{width:950px;align-content: center;}
}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	
	
	$("#search-box-state").keyup(function(){
		
		$.ajax({
		type: "POST",
		url: "readState.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box-state").css("background","#FFF");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box-state").css("background","#FFF");
		}
		});
	});
});

function selectState(val) {
$("#search-box-state").val(val);
$("#suggesstion-box").hide();
	}

	
$(document).ready(function(){
	$("#search-box-city").keyup(function(){
		var state = $("#search-box-state").text()
		
		$.ajax({
		type: "POST",
		url: "readCity.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box-city").css("background","#FFF");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box-city").css("background","#FFF");
		}
		});
	});
});

function selectCity(val) {
$("#search-box-city").val(val);
$("#suggesstion-box").hide();
}
$(document).ready(function(){
	$("#search-box-zip").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readZip.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box-zip").css("background","#FFF");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box-zip").css("background","#FFF");
		}
		});
	});
});

function selectZip(val) {
$("#search-box-zip").val(val);
$("#suggesstion-box").hide();
}
$(document).ready(function(){
	$("#search-box-naics").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readNaics.php",
		data:'keyword='+$(this).val(),
		dataType: "jsonp",
		beforeSend: function(){
			$("#search-box-naics").css("background","#FFF");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box-naics").css("background","#FFF");
		}
		});
	});
});

function selectNaics(val) {
$("#search-box-naics").val(val);
$("#suggesstion-box").hide();
}


$(document).ready(function(){
	$("#search-box-setaside").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readSetaside.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box-setaside").css("background","#FFF");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box-setaside").css("background","#FFF");
		}
		});
	});
});

function selectSetaside(val) {
$("#search-box-setaside").val(val);
$("#suggesstion-box").hide();
}

</script>	
	
</head>
<body>

<div class="frmSearch">
	<center><h1>Federal Contractor Vendor Search</h1></center>
  <input type="text" id="search-box-state" name="state" placeholder="State Name" />
	<input type="hidden" id="search-box-state" name="search-box-state"  />
  <input type="text" id="search-box-city" placeholder="City Name" />
<input type="text" id="search-box-zip" placeholder="Zip Code" />
<input type="text" id="search-box-naics" placeholder="NAICS" />
<input type="text" id="search-box-setaside" placeholder="Set-Aside Program" />
	<br><br>
  <input class="subbutton" id="inputSubmit" type="submit">
	<div id="suggesstion-box"></div><br>
			
	
</div>
	
</body>
</html>