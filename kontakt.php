<!DOCTYPE html>
<html lang="de" >
<head>
  <meta charset="UTF-8">
  <title>Kontakt</title>
  <link rel="stylesheet" href="./kontakt-style.css">
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<? include("incl/nav2.php");?>
<form class="my-form" style="margin-top:10vh; min-height:85vh;">
  <div class="container">
    <h1>Get in touch!</h1>
    <ul>
      <li>
        <div class="grid grid-2">
          <input type="text" placeholder="Name" required>  
          <input type="text" placeholder="Surname" required>
        </div>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="email" placeholder="Email" required>  
          <input type="tel" placeholder="Phone">
        </div>
      </li>    
      <li>
        <textarea placeholder="Message"></textarea>
      </li>   
      <li>
        <input type="checkbox" id="terms">
        <label for="terms">I have read and agreed with <a href="https://architekturinstitut.com/datenschutzerklaerung.php">the terms and conditions.</a></label>
      </li>  
      <li>
        <div class="grid grid-3">
          <div class="required-msg">REQUIRED FIELDS</div>
          <button class="btn-grid" type="submit" disabled>
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
            </span>
            <span class="front">SUBMIT</span>
          </button>
          <button class="btn-grid" type="reset" disabled>
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
            </span>
            <span class="front">RESET</span>
          </button> 
        </div>
      </li>    
    </ul>
  </div>
</form>
<? include("incl/footer.php");?>
<footer>
<!-- partial -->
  <script  src="./kontakt-script.js"></script>

</body>
</html>
