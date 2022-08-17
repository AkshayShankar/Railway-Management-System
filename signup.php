<html>
  <head>
    <head>
      <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
      <link href="demo.css" rel="stylesheet">
    <title> Form </title>
      <script src = "https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
      <script src = "https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>
      <script src = "signup.js"></script>
      <link rel="stylesheet" type="text/css" href="css/signup.css"/> 
  </head>
  <div class="animation-area">
		<ul class="box-area">
      
  <body>
    <h1>Railway Management System</h1>
    <div id="formContainer"> 
    <div id="header"></div>
    <input type = "email" placeholder="email" id="email"/>
    <input type="password" placeholder="password" id="password"/>
    <button onclick="signUp()" id="signUp"> Sign Up
    </button> 
    <button onclick="signIn()" id="signIn"> Sign In
    <link href="./profile1.php" rel="stylesheet"/>
  </button>
  </div>
  </body>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
  <style>
    h1{
      background-color: #078b9c;
      margin: 100px auto;
      margin-left: 150;
      margin-right: 150;
      text-align: center;
      color: white;
    }
    #formContainer{
      background-color: white;
      margin-left: 460;
      box-sizing: 0 12px 11px 0 rgba(0,0,0,0.24) 0 17px 50px 0 rgba(0,0,0,0.19);
      width: 25%;
      height: 45%;
      border-radius: 1rem;
    }
    #header{
      width: 100%;
      height: 10px;
      background: #078b9c;
    }

    #email{
      width: 70%;
      height: 40px;
      display: block;
      margin: 20 auto;
      border: none;
      outline: none;
      border-bottom: 2px solid #0039b4;
      font-family: Advent Pro;
      font-family: Normal;
      font-size: 20px;
      color: #0039b4;
    }
    #password{
      width: 70%;
      height: 40px;
      display: block;
      margin: 0 auto;
      border: none;
      outline: none;
      border-bottom: 2px solid #0039b4;
      font-family: Advent Pro;
      font-family: Normal;
      font-size: 20px;
      color: #0039b4;
    }
    #signIn{
    position: relative;
    display: inline-block;
    padding: 10px 10px;
    font-size: 20px;
    border-radius: 10px;
    background-color: #078b9c;
    background-size: 60px 40px;
    margin: 10px;
    margin-left: 125px;
    border: solid 1px #555;
    color: white;
    font-family: Advent Pro;
    font-weight: Regular;
    transition: all ease 0.3s;
    }

  #signIn::after {
    position: absolute;
    top: 30%;
    right: 0.6em;
    content: ">>";
    transition: all ease 0.3s;
    opacity: 0;
  }

  #signIn:hover {
    padding: 10px 50px 5px 5px;
  }

  #signIn:hover::after {
    right: 1.2em;
    opacity: 1;
  }
  
  #signUp{
    position: relative;
    display: inline-block;
    padding: 10px 10px;
    border-radius: 10px;
    font-size: 20px;
    background-color: #078b9c;
    background-size: 60px 40px;
    border: solid 1px #555;
    margin: 20px;
    margin-left: 120px;
    color: white;
    font-family: Advent Pro;
    font-weight: Regular;
    transition: all ease 0.3s;
    }

  #signUp::after {
    position: absolute;
    top: 30%;
    right: 0.6em;
    content: ">>";
    transition: all ease 0.3s;
    opacity: 0;
  }

  #signUp:hover {
    padding: 10px 50px 5px 5px;
  }

  #signUp:hover::after {
    right: 1.2em;
    opacity: 1;
  }
    button:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24) 0 17px 50px 0 rgba(0,0,0,0.19); ;
    }
  </style>
  
</html>