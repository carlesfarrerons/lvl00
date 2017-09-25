<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titol')</title>
         <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <style>
            body{
                background-color: black;
                color: white;

            }
            .panel-body{
                color:black;
            }

            .panel-heading{
                background-color: white; 
                font-size: 400%;
            }
            .nav li.active{
                background-color: red;
            }
            .list-group-item-heading{
                color:white;
            }
            .list-group-item-text{
                color:black
            }
            .form-group{
                color:black;
            }


        </style>
        
    </head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/lvl00/public"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/lvl00/public/">HOME</a></li>
      <li><a href="/lvl00/public/projects">PROJECTS</a></li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="page-header">
            @yield('header')
        </div>
    </div>
    <div class="container">
       @yield('content')
    </div>
    <footer class="footer">
        <div class="container">
             @yield('footer')
            <p>&copy; CompanyFarrerons</p>
        </div>
    </footer>
    </body>
</html>
