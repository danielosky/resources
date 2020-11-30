<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<style>
  #show_about{
    border:1px solid #444; 
    width:90; 
    overflow:hidden; 
    height:20px; 
    cursor:pointer;
  }
</style>

<div id="show_about">test for this example of show more</div>

<script>
  $("#show_about").click(function () {
    if ($("#show_about").height() == "20"){	
      $("#show_about").css("height", "auto");
    }else{
      $("#show_about").css("height", "20px");
    }
  })';
</script>
