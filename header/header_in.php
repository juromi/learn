<!DOCTYPE html>
<html>
<body>
  <div class="header">
  <h1>SOLITUDE</h1>
</div>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#logout">Log Out</a></li>
  <li><a class="active" href="#about">About</a></li>
</ul>

</body>
</html>

<style>

.header {
  padding: 50px;
  text-align: center;
  background: #6aa0b0;
  color: black;
  font-size: 30px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 15px;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
</style>
