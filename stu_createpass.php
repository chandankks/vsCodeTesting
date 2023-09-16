<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       /* pop up  */
.popup_container{
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
.popup{
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

.create-passward{

    text-align: center;
}

.create-passward label{
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

.create-passward input {
    width: 35vh;
    padding:7px;
    margin:5px; 
    border:0;
    border-radius: 5px;
    box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
  }


.create-passward input[type=submit] {
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
    
</head>
<body>
    <!-- creat passward -->
  <div class="popup_container" id="crepass-popup">
		<div class="popup">
			<div class="head">
			<span style="font-size: 30px;">Create passward</span>
			<span class="close-btn"  onclick="popup('crepass-popup')">&times</span>
			</div>
			<div class="create-passward">
				<form>
					<label for="username">Create passwrad:</label> <br>
					<input type="passward" id="crepass" name="crepass" required> <br>
					<label for="password">Confirm Password:</label> <br>
					<input type="password" id="cnfpass" name="cnfpass" required> <br>
					<input type="submit" value="Submit" class="sub-mit" id="sub_mit">
				</form>
			</div>
			
		</div>
	</div>

</body>
</html>