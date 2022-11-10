<html>
<head>
<script>
function displayHint(str) {
  if (str.length == 0) {
    document.getElementById("Hint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Hint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("POST", "register?getparameter=" + str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<p><b>Enter the Course  name:</b></p>
<form action="">
  <label for="cname">Course name:</label>
  <input type="text" id="cname" name="cname" onkeyup="displayHint(this.value)">
</form>
<p>Show Suggestions: <span id="Hint"></span></p>
</body>
</html> 