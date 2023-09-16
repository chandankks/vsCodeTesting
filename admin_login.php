<?php
    if(isset($_POST['']))

?>

<style>
    .popup_main{
    z-index: 2;
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: none;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    background-color: rgba(0,0,0,0.2);

}
.popup-content{
    width: 50vh;
    height: 45vh;
    background: linear-gradient(130deg, rgb(63, 104, 151), rgb(148, 205, 231),rgb(192, 88, 88));
    display: flex;
    flex-direction: column;
    border-radius: 8px;
    box-shadow: 3px 19px 20px -177px rgba(0,0,0,0.45),
    0px -1px 9px 9px rgba(0,0,0,0.45),
    0px 25px 20px -20px rgba(0,0,0,0.45),
    -25px 0px 20px -20px rgba(0,0,0,0.45);
    

}
.head{
    margin-top: 15px;
    margin-bottom: 10px;
    display: inline-block;
    text-align: center;
    padding-right: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    
}



.close-btn{
    margin-top: -20px;
    margin-right: -10px;
    float: right;
    font-size: 25px;
    cursor: pointer;

}

.form{

    text-align: center;
}

.form label{
    float: left;
    margin-left: 50px;
}

.popup-content a{
    text-align: center;
}

.sub-mit{
    margin-top: 10px;
    margin-bottom: 10px;
}

.form input {
    width: 35vh;
    padding:7px;
    margin:5px; 
    border:0;
    border-radius: 5px;
    box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
  }

.form input[type=submit] {
    padding: 8px;
    width: 13vh;
    margin-top: 10px;
}

.sub-mit:hover{
    outline: none;
    color: white;
    background-color: rgb(4, 175, 4);
}
</style>

  <!-- admin popup -->
  <div class="popup_main" id="admin-popup">
		<div class="popup-content">
			<div class="head">
			<span style="font-size: 30px;">login</span>
			<span class="close-btn"  onclick="popup('admin-popup')">&times</span>
			</div>
			<div class="form">
				<form>
					<label for="username" >Admin User:</label> <br>
					<input type="email" id="adminuser"  required> <br>
					<label for="password">Password:</label> <br>
					<input type="password" id="password"  required> <br>
					<input type="submit" value="Login" class="sub-mit" onclick="func()" id="sub_mit">
				</form>
			</div>
			<a href="#">Forgot password?</a>
		</div>
	</div>
