<html>
<?php 
    require('dbCon.php');
    $sql = "SELECT * FROM `tbusers`";
    $result = $con->query($sql);
include 'navbar.php';
?>
        <br>
        <br>
        <br>

<link rel=stylesheet href="CSS/LogBoth.css">
    <body>
        <br>
   <!--<div class="imgcontainer">
  <img src="https://www.fraeulein-k-sagt-ja.de/wp-content/uploads/2020/04/hochzeit-deko-ohne-kerzen-36-1024x684.jpg" width="400" height="268">
    <img src="http://www.economylinen.com/wp-content/uploads/2018/02/setting-a-restaurant-table.jpg" width="400">
  

    <img src="https://images.unsplash.com/photo-1587899897387-091ebd01a6b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cmVzdGF1cmFudCUyMHRhYmxlfGVufDB8fDB8fA%3D%3D&w=1000&q=80" width="400" height="268">   
  </div>-->
        <form action="" method="post">
            <div class="cntr"> 
                <img src="./Images/icon.png"  class="avatar">
                <h1>Login</h1>
            </div>
              <input type="text" placeholder="Username" name="uname" id="uname" required>
              <br>
              <input type="password" placeholder="Password" name="psw" id="psw" required>
             <div class="buttons"> 
             <button type="submit" name="submit" id="submit" class="registerbtn">Login</button>
             <button type="reset" class="resetbtn">Reset</button>
             </div>
            </div>
          <br>
            <div class="containersignin">
              <p>Don't have an account? <a href="clientreg.php">Sign up</a>.</p>
            </div>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </form>          
<?php include 'savedusers.php';
if(isset($_POST['submit'])){
 $check=$_POST['remember']; /*values of checkbox: on,off */
if($check=='on'){
  setcookie('Username', $use, time()+30); 
  setcookie('Password', $psw, time()+30);
  

}
else{
  setcookie('Username', 'null', time()+30); 
  setcookie('Password', 'null', time()+30); 
  echo "<h3> Nothing was saved </h3>";
}

if(!isset($_SESSION["Counter"])){
$_SESSION["Counter"]=0;
}
}
    
?>

    </body>
</html>