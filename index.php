<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Practical No. 4</title>
    <link href="css/style.css" rel = "stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
  <header>
    <div class="jumbotron text-center"><h1 style="color: black">Restaurant Menu</h1></div>
    <div class="cont">
      <i class="fas fa-h1">Select any of our menu to see the details</i>
    </div>
    <br>
    <div class="container">
      <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="restaurant">
        <option value="">Select Menu</option>
    </select>
    <br>
  
    <table id="tabl" class="table tab">
      <tr>
        <th>ID</th>
        <td id="id"></td>
      </tr>
      <tr>
        <th>Name</th>
        <td id="menuname"></td>
      </tr>
      <tr>
        <th>Short Name</th>
        <td id="sname"></td>
      </tr>
      <tr>
        <th>Description</th>
        <td id="descp"></td>
      </tr>
      <tr>
        <th>Price Small</th>
        <td id="psmall"></td>
      </tr>
      <tr>
        <th>Price Large</th>
        <td id="plarge"></td>
      </tr>
	  <tr>
        <th>Small Portion Name</th>
        <td id="spname"></td>
      </tr>
      <tr>
        <th>Large Portion Name</th>
        <td id="lpname"></td>
      </tr>
    </table>
  
    </div>
    </header>
    <footer>
        <p>&copy; Copyright 2020</p><br>
        <a href="mailto:csalmotra@mitaoe.ac.in">csalmotra@mitaoe.ac.in</a></p>
    </footer>
    
    <script src="lib/jquery-3.5.1.min.js"></script>
    <script src="script.js" defer></script>
  </body>
</html>
