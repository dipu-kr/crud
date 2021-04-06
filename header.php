<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud-page</title>
    <style>
          *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;  
}
body{
    font: 16px arial;
    font-family: Arial, Helvetica, sans-serif;
}

 #wrapper{
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    
}
#head1{
    text-align: center;
    background-color:rgb(0, 255,255);
    width:1000px;
}
#head1 h1{
    padding:10px 0 10px 0;
    margin: 0 0;
    font-size: 35px;
}

#menu{
    background-color: rgb(0 , 0 , 0);
    width: 1000px;
}
#menu ul{
   list-style-type: none;
   margin-top: 0;
   padding:7px 0 7px 0; 
 }
#menu ul li{
    display: inline;
    padding:10px 20px 10px 35px;

}
#menu ul li a{
    text-decoration: none;
    font-size: 25px;
    color: whitesmoke;
}
#menu ul li a:hover{
    background-color: grey;
} 

/*<---------------- index.php file css ------------------------> */

#main{
    width:1000px;
    height: auto;
    background-color: rgb(192,192,192);
    margin: 0 auto;
    padding-bottom:10px;
}
#main h2{
    padding: 20px 0 0 25px;
}
table{
    width: 950px;
    margin: 0 auto;
    margin-top: 20px;
    
    
}
table th{
    background-color: rgb(0 , 0 , 0);
    color:white;
}
table ,th, td{
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    padding:10px;
}
tr td a{
    text-decoration:none;
    padding:5px 10px 5px 10px;
    
}
tr td a:first-child{
    background-color: #00bd57;
    border-radius: 5px;
}
tr td a:first-child:hover{
    color:white;
}
tr td a:last-child{
    background-color: #ff4300; 
    border-radius: 5px;
}
tr td a:last-child:hover{
    color:white;
}

/* <--------------------------add.php css_-------------------------> */
.container{
    width:1000px;
    height: 460px;
    background-color: rgb(192,192,192);
    margin: 0 auto;
}
.container h2{
    padding:15px 0 0 25px;
}
.container .forms{
    width:70%;
    margin:0 auto;
    padding-top:17px;
}
.container form{
    width:100%;
    height:100%;
    padding:20px;
    background-color:white;
    border-radius:8px;
}
.container form label{
    text-transform:uppercase;
    font-family:Arial, Helvetica, sans-serif;
    font-weight:bold;
}
.container form .form-control{
    width:100%;
    height:30px;
    background-color:white;
    border:1px solid gray;
    border-radius:8px;
    margin:10px 0 18px 0;
    padding:0 10px;
}
.container form .btn{
    margin-left:50%;
    transform:translatex(-50%);
    width:120px;
    height:34px;
    border:none;
    outline:none;
    background:#27a327;
    cursor:pointer;
    font-size:16px;
    text-transform:uppercase;
    border-radius:5px;
}
.container form .btn:hover{
    color:white;
    opacity:0.8;
}

/* <-----------------------update file css----------------------------------> */
.container1{
    width:1000px;
    height: auto;
    background-color: rgb(192,192,192);
    margin: 0 auto;
}
.container1 h2{
    padding:15px 0 0 25px;
}
.container1 .update{
    width:70%;
    margin:0 auto;
    padding:8px 0 15px 0;
}
.container1 form{
    width:100%;
    height:100%;
    padding:20px;
    background-color:white;
}
.container1 form label{
    text-transform:uppercase;
    font-family:Arial, Helvetica, sans-serif;
    font-weight:bold;
}
.container1 form .update-control{
    width:100%;
    height:25px;
    background-color:white;
    border:1px solid gray;
    border-radius:8px;
    margin:10px 0 18px 0;
    padding:0 10px;
}
.container1 form .btn1{
    margin-left:50%;
    transform:translatex(-50%);
    width:110px;
    height:24px;
    border:none;
    outline:none;
    background:#27a327;
    cursor:pointer;
    font-size:16px;
    text-transform:uppercase;
    border-radius:5px;
}
.container1 form .btn1:hover{
    color:white;
    opacity:0.8;
}
.container1 form .btn2{
    margin-left:50%;
    transform:translatex(-50%);
    width:110px;
    height:24px;
    border:none;
    outline:none;
    background:#27a327;
    cursor:pointer;
    font-size:16px;
    text-transform:uppercase;
    border-radius:5px;
}
.container1 form .btn2:hover{
    color:white;
    opacity:0.8;
}

/* <-----------------------------------delete file css------------------------------> */

.container2{
    width:1000px;
    height: 450px;
    background-color: rgb(192,192,192);
    margin: 0 auto;
}
.container2 h2{
    padding:15px 0 0 25px;
}
.container2 .delete{
    width:70%;
    margin:0 auto;
    padding-top:17px;
}
.container2 form{
    width:100%;
    height:100%;
    padding:20px;
    background-color:white;
    border-radius:8px;
}
.container2 form label{
    text-transform:uppercase;
    font-family:Arial, Helvetica, sans-serif;
    font-weight:bold;
}
.container2 form .delete-control{
    width:100%;
    height:30px;
    background-color:white;
    border:1px solid gray;
    border-radius:8px;
    margin:10px 0 18px 0;
    padding:0 10px;
}
.container2 form .btn3{
    margin-left:50%;
    transform:translatex(-50%);
    width:110px;
    height:28px;
    border:none;
    outline:none;
    background:#27a327;
    cursor:pointer;
    font-size:16px;
    text-transform:uppercase;
    border-radius:5px;
}
.container2 form .btn3:hover{
    color:white;
    opacity:0.8;
}
    </style>
    
</head>
<body>
      <div id="wrapper">
          <div id="head1">
              <h1>CRUD</h1>
          </div>
          <div id="menu">
              <ul>
                  <li>
                       <a href="index.php">Home</a>
                  </li>
                  <li>
                       <a href="add.php">Add</a>
                  </li>
                  <li>
                       <a href="update.php">Update</a>
                  </li>
                  <li>
                       <a href="delete.php">Delete</a>
                  </li>
              </ul>
          </div>
      </div>
    
</body>
</html>