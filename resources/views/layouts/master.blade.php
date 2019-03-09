<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#660088">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="author" content="James Dewes">
  <link rel="icon" href="../../../../favicon.ico">
  @yield('meta')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0//css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    @include('layouts.nav')
    <main class="container">
      @if (!Request::is('/'))
        <h1 class="mt-5 stencil">
        @yield('title')
        </h1>
        <hr>
      @endif

      @yield('content')
    </main>

    @include('layouts.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0//js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('scripts')
    <script>
    $(function($) {
      checkCookie_eu();
      function checkCookie_eu()
      {
          var consent = getCookie_eu("cookies_consent");
          if (consent == null || consent == "" || consent == undefined)
          {
              // show notification bar
              $('#cookie_directive_container').show();
          }
      }
      function setCookie_eu(c_name,value,exdays)
      {
          var exdate = new Date();
          exdate.setDate(exdate.getDate() + exdays);
          var c_value = escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
          document.cookie = c_name + "=" + c_value+"; path=/";
          $('#cookie_directive_container').hide('slow');
      }
      function getCookie_eu(c_name)
      {
          var i,x,y,ARRcookies=document.cookie.split(";");
          for (i=0;i<ARRcookies.length;i++)
          {
              x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
              y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
              x=x.replace(/^\s+|\s+$/g,"");
              if (x==c_name)
              {
                  return unescape(y);
              }
          }
      }
      $("#cookie_accept .close").click(function(){
          setCookie_eu("cookies_consent", 1, 30);
      });
    });
    </script>
  </body>
</html>
