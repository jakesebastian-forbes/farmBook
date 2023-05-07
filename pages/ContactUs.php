<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FARMBOOK | Contact Us</title>

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>
    
</head>
        <?php
        include "../components/nav_bar.php"?>
<style>

/* body {
  margin: 0;
} */

.contact-parent {
  background: #fff;
  display: flex;
  margin-left: 30px;
  margin-top: 15px;
  max-width: 95%;
  max-height: 95%;
  position:absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.contact-child {
  box-shadow:0px 0px 10px -2px rgba(0,0,0,0.75);
  box-sizing: border-box;
  display:flex;
  flex:1;
}

.child1{
  background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7));
  background-image: url('./bg1.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
  display:flex;
  justify-content:space-around;
  color:#fff;
}

.child1 p{
  padding-top: 550px;
  font-size:20px;
  text-shadow:0px 0px 2px #000;
}

.child1 p span{
  font-size:16px;
  color:#9df2fd;
}

.child2{
  flex-direction:column;
  justify-content:space-around;
  align-items:center;
}

.inside-contact{
  width:90%;
  margin:0 auto;
  margin-top: auto;
}
 
.inside-contact h2{
  text-transform:uppercase;
  text-align:center;
}
 
.inside-contact h3{
  text-align:center;
  font-size:16px;
  color:#57744B;
}

.inside-contact input, .inside-contact textarea{
  width:100%;
  background-color:#eee;
  border:1px solid rgba(0,0,0,0.48);
  padding:5px 10px;
  margin-bottom:20px;
}

.inside-contact input[type=submit]{
  background-color:#57744B;
  color:#fff;
  transition:0.2s;
  /* margin:30px 0; */
}

.inside-contact input[type=submit]:hover{
  background-color:#fff;
  color:#57744B;
  transition:0.2s;
}

.required:after{
  content: '*';
  color: red
}


.form-control:focus + .required { 
  display: none;
}

@media screen and (max-width:991px){
    .contact-parent{
      display: block;
      width:100%;
    }
 
    .child2{
      background-image:linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7));
      background-size:cover;
    }
 
    .inside-contact input, .inside-contact textarea{
      background-color:#fff;
    }
}

</style>
 
<body>

      <div class="container">
        <div class="contact-parent">
           <div class="contact-child child1">
              <p>
                 <i class="fas fa-map-marker-alt"></i> Address <br />
                 <span> Nasugbu 4231, PH
                 </span>
              </p>
              <p>
                 <i class="fas fa-phone-alt"></i> Let's Talk <br />
                 <span> +912 345 6789</span>
              </p>
              <p>
                 <i class=" far fa-envelope"></i> General Support <br />
                 <span>farmbook@gmail.com</span>
              </p>
           </div>
           <div class="contact-child child2">
              <div class="inside-contact">
                 <h2>Contact Us</h2>
                 <h3>
                    <span id="confirm">
                 </h3>
                 <p>Name</p>
                 <input id="txt_name" type="text" placeholder="(Optional)" class="text-muted">
                 <p class="required">Email</p>
                 <input id="txt_email" type="text" required>
                 <p class="required">Phone</p>
                 <input id="txt_phone" type="text" required>
                 <p>Subject</p>
                 <input id="txt_subject" type="text">
                 <p>Message</p>
                 <textarea id="txt_message" rows="4" cols="20" placeholder="(Optional)" class="text-muted"></textarea>
                 <input type="submit" id="btn_send" value="SEND">
              </div>
           </div>
          </div>
        </div>
     </div>
</body>
 
</html>