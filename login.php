<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		body {
   
    font-family: 'Poppins', sans-serif;
    background-image: url(phpimg.jpg);
}
#form {
    width: 250px;
    margin: 20vh auto 0 auto;
    padding: 25px;
    background-color: whitesmoke;
    border-radius: 4px black ;
    font-size: 12px;
    border: solid;
    font-family: Algerian;

}
#form h1 {
    color: #0f2027;
    text-align: center;
    text-decoration: underline blue;
    font-family: Algerian;
}
#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(41, 57, 194);
    border: none;
    border-radius: 4px;
    font-family: Algerian;
}
#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(41, 57, 194);
    border: none;
    border-radius: 4px;
}
#form input{
	width: 100%;
	font-family: Algerian;
	font-size: 12px;
}
#form textarea{
	width: 100%;
	font-family: Algerian ;

}
.input-control {
    display: flex;
    flex-direction: column;
    text-align: center;
}

.input-control input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-size: 12px;
    padding: 10px;
    width: 100%;

}

.input-control input:focus {
    outline: 0;
}


.input-control.error input {
    border-color: #ff3860;
}

.input-control .error {
    color: #ff3860;
    font-size: 9px;
    height: 13px;
}

	</style>
</head>
<body>
	<form id="form" action="email.php" method="POST">
		 <div class="container">
        <h1>Send Us a Message</h1>
        <div class="input-control">
        <div class="error"></div>
            </div>

          <label>Username</label><br>
        <input type="text" name="username" placeholder="full name" required><div class="error"></div>
            </div><br>

        <label>Email</label><br>
        <input type="text" name="email" placeholder="email address" required><div class="error"></div>
            </div><br>

           <label>Subject</label><br>
		  <input type="text" name="subject"  placeholder="enter a subject" required><div class="error"></div>
            </div><br>

           <label>Message</label><br>
		  <textarea name="body" rows="5"  placeholder="message" required></textarea><div class="error"></div>
            </div><br>
		  
		  <div><button class="btn" type="submit" name="submit">send message</button> 
		</div>
	</form>

</body>
</html>