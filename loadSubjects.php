<link rel="sylesheet" href="style.css">



<div class="info" id="Display"> 

</div>
<script type="text/javascript">
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Display").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "subjectsDATA.php", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>