<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/custom.css">
  </head>
  <body>
    
    
    <div class="s01">
      <div class="music_block">
        <div class="gif_icon" style="float: left;">
            <img src="assets/images/sound_tran.gif">
            
        </div>
        <div class="play_pause">
            <p>Beautiful in while</p>
            <img class="btn_play_pause" src="assets/images/pause.png">
        </div>
      </div>
      <form method="POST">
        @csrf
        <fieldset>
          @if(!empty($result))
            <div class="snow">
              <img src="assets/images/tuyet.gif">
            </div>
            <p class="content_css">{!! str_replace(ucfirst($name), "<span class='name_style'>".ucfirst($name)."</span>", $result ) !!}</p>
          @endif
          <legend>What's your crush name?</legend>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="key_search" name="key_search" type="text" placeholder="Enter your crush name? ( ex: Ngọc )" value="{{$name}}" />
          </div>
          
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">Search</button>
          </div>
        </div>

      
          <audio id="audioID" autoplay loop> <source src="assets/audio/BeautifulInWhite.mp3"  type="audio/mp3"> 
          </audio>


      </form>

      <div class="add_cap">
        <a href="{{route('status-add')}}">Adding caption</a>
      </div>

      @if(session('success'))
        <div class="alert alert-success success_msg">
            {{session('success')}}
        </div>
      @endif
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
