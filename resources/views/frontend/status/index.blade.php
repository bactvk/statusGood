<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s01">
      <form method="POST">
        @csrf
        <fieldset>
          <legend>What's your crush name?</legend>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="key_search" name="key_search" type="text" placeholder="Enter your crush name? ( ex: Nguyên )" />
          </div>
          
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">Search</button>
          </div>
        </div>

      
          <audio id="audioID" autoplay loop> <source src="assets/audio/BeautifulInWhite.mp3"  type="audio/mp3"> 
          </audio>


      </form>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
