<html>
  <link rel="stylesheet" href="stileindex.css" type="text/css" />
<head>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button:hover span {
  padding-right: 25px;
}
.button:hover span:after {
  opacity: 1;
  right: 0;
}
  
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #32CD32;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button1 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button1:hover span {
  padding-right: 25px;
}
.button1:hover span:after {
  opacity: 1;
  right: 0;
}
.button2 {
  display: inline-block;
  border-radius: 4px;
  background-color: #0073e6;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button2 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button2:hover span {
  padding-right: 25px;
}
.button2:hover span:after {
  opacity: 1;
  right: 0;
}
.button3 {
  display: inline-block;
  border-radius: 4px;
  background-color:  #ff9900;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button3 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button3 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button3:hover span {
  padding-right: 25px;
}
.button3:hover span:after {
  opacity: 1;
  right: 0;
}
.button4 {
  display: inline-block;
  border-radius: 4px;
  background-color:  #993399;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button4 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button4 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button4:hover span {
  padding-right: 25px;
}
.button4:hover span:after {
  opacity: 1;
  right: 0;
}
 
.button5 {
  display: inline-block;
  border-radius: 4px;
  background-color:  #00cc7a;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button5 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button5 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button5:hover span {
  padding-right: 25px;
}
.button5:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<section id = "sinistra">
<h2>Gestione Stazioni</h2>

<a id="btn" href="impostazioni.php"<button class="button" style="vertical-align:middle"><span>Modifica</span></button></a>
  <br></br>
<a id="btn" href="nuova.php" <button class="button1" style="vertical-align:middle"><span>Nuova</span></button></a>
<br></br>
</section>
<section id = "centro">
<h2>Gestione Prodotti</h2>


<a id="btn" href="modificaprodotti.php" <button class="button5" style="vertical-align:middle"><span>Modifica</span></button></a>
<br></br>
<a id="btn" href="prodotti.php" <button class="button2" style="vertical-align:middle"><span>Nuovo</span></button></a>
 <br></br>
</section>
<section id = "destra">
<h2>Visualizza Database</h2>

<a id="btn" href="produzione.php" <button class="button3" style="vertical-align:middle"><span>Produzione</span></button></a>

<br></br>

<a id="btn" href="log.php" <button class="button4" style="vertical-align:middle"><span>Log Eventi</span></button></a>
</section>
<br></br>
<a id="logout" href="logout.php">Logout</a>

</body>
</html>
