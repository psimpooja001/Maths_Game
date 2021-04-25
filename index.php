<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Social Networks API's</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      
    <style>
        body{
            background: url(balloon.jpg) center center fixed;
            background-size: cover;
            text-align: center;
            font-family: Arvo, serif
                ;
        }  
        
        .jumbotron{
            background-color: transparent; 
        }
        .jumbotron h1{
            letter-spacing: 2.5px;
        }
        
        .form-horizontal{
            margin-top: 50px;
        }
        .row{
            margin-top: 30px;
        }
        .col-sm-2{
            margin-bottom: 10px;
        }
    </style>

    
  </head>
  <body>
      
      <!--Facebook code-->
      <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="fxDE7Eis"></script>
      
    <div class="jumbotron">
      <div class="container-fluid">
        <h1>Join us and build Freedom</h1>
        <p>We make freedom, we love freedom, we spread freedom.</p>
      </div>
        
        <form class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-8">
                <input type="email" id="email" placeholder="Your Email" class="form-control">
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-6">
                    <input type="submit" id="submit" value="Subscribe" class="btn btn-info btn-lg">
                
                </div>
            </div>
        </form>
        
        <div class="row">
            <div class="col-sm-offset-3 col-sm-2">
                <!--facebook button-->
                <div class="fb-like" data-href="https://completewebdevelopmentcourse.com" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
            </div>
            <!--G+ button-->
            <div class="col-sm-2">
            <div class="g-plusone" data-size="medium"></div>
            </div>
            <!--twitter button-->
            <div class="col-sm-2">
            <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world">
Tweet</a>
            </div>
        <!--Twitter timeline-->
        <div class="tweet">    
            <a class="twitter-timeline" href="https://twitter.com/https://twitter.com/home" data-widget-id="PoojaSa64536125" data-chrome="nofooter noborders" data-tweet-limit="3">Tweet by @PoojaSa64536125</a>
        </div>
        </div>
        
    </div>
<!--Google+-->
<!--<script src="https://apis.google.com/js/plusone.js"></script>-->
<script type="text/javascript">
 (function() {
 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
 po.src = 'https://apis.google.com/js/plusone.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 })();
</script>
<!--Twitter-->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
  return t;
}(document, "script", "twitter-wjs"));</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>