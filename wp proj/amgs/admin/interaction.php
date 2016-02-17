<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>


<h2>Select an USN to retrieve student information:</h2>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1RV12IS001">1RV12IS001</option>
  <option value="1RV12IS002">1RV12IS002</option>
  <option value="1RV12IS003">1RV12IS003</option>
  <option value="1RV12IS004">1RV12IS004</option>
  <option value="1RV12IS005">1RV12IS005</option>
  <option value="1RV12IS006">1RV12IS006</option>
  <option value="1RV12IS007">1RV12IS007</option>
  <option value="1RV12IS008">1RV12IS008</option>
  <option value="1RV12IS009">1RV12IS009</option>
  <option value="1RV12IS010">1RV12IS010</option>
  <option value="1RV12IS011">1RV12IS011</option>
  <option value="1RV12IS012">1RV12IS012</option>
  <option value="1RV12IS013">1RV12IS013</option>
  <option value="1RV12IS014">1RV12IS014</option>
  <option value="1RV12IS015">1RV12IS015</option>
  <option value="1RV12IS016">1RV12IS016</option>
  <option value="1RV12IS017">1RV12IS017</option>
  <option value="1RV12IS018">1RV12IS018</option>
  <option value="1RV12IS019">1RV12IS019</option>
  <option value="1RV12IS020">1RV12IS020</option>
  <option value="1RV12IS021">1RV12IS021</option>
  <option value="1RV12IS022">1RV12IS022</option>
  <option value="1RV12IS023">1RV12IS023</option>
  <option value="1RV12IS024">1RV12IS024</option>
  <option value="1RV12IS025">1RV12IS025</option>
  <option value="1RV12IS026">1RV12IS026</option>
  <option value="1RV12IS027">1RV12IS027</option>
  <option value="1RV12IS028">1RV12IS028</option>
  <option value="1RV12IS029">1RV12IS029</option>
  <option value="1RV12IS030">1RV12IS030</option>
  <option value="1RV12IS031">1RV12IS031</option>
  <option value="1RV12IS032">1RV12IS032</option>
  <option value="1RV12IS033">1RV12IS033</option>
  <option value="1RV12IS034">1RV12IS034</option>
  <option value="1RV12IS035">1RV12IS035</option>
  <option value="1RV12IS036">1RV12IS036</option>
  <option value="1RV12IS037">1RV12IS037</option>
  <option value="1RV12IS038">1RV12IS038</option>
  <option value="1RV12IS039">1RV12IS039</option>
  <option value="1RV12IS040">1RV12IS040</option>
  <option value="1RV12IS041">1RV12IS041</option>
  <option value="1RV12IS042">1RV12IS042</option>
  <option value="1RV12IS043">1RV12IS043</option>
  <option value="1RV12IS044">1RV12IS044</option>
  <option value="1RV12IS045">1RV12IS045</option>
  <option value="1RV12IS046">1RV12IS046</option>
  <option value="1RV12IS047">1RV12IS047</option>
  <option value="1RV12IS048">1RV12IS048</option>
  <option value="1RV12IS049">1RV12IS049</option>
  <option value="1RV12IS050">1RV12IS050</option>
  <option value="1RV12IS051">1RV12IS051</option>
  <option value="1RV12IS052">1RV12IS052</option>
  <option value="1RV12IS053">1RV12IS053</option>
  <option value="1RV12IS054">1RV12IS054</option>
  <option value="1RV12IS055">1RV12IS055</option>
  <option value="1RV12IS056">1RV12IS056</option>
  <option value="1RV12IS057">1RV12IS057</option>
  <option value="1RV12IS058">1RV12IS058</option>
  <option value="1RV12IS059">1RV12IS059</option>
  <option value="1RV12IS060">1RV12IS060</option>
  <option value="1RV12IS061">1RV12IS061</option>
  <option value="1RV12IS062">1RV12IS062</option>
  <option value="1RV12IS063">1RV12IS063</option>
  <option value="1RV12IS064">1RV12IS064</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Student's information will be listed here...</b></div>
<p><a href="index.php">Go Back</a></p>

</body>
</html>