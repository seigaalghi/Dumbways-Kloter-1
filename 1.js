function converter() {
  var output = document.getElementById("ti2");
  var input = document.getElementById("ti1").value;
  output.value = "";
  for (var i = 0; i <= input.length+1; i++) {
      output.value += "0"+input[i].charCodeAt(0).toString(2) + " ";
  }
}