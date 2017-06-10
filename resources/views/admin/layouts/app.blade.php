<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Exam System</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">

    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('js/jquery.min-2.1.3.js')}}"></script>
    <!-- searchable Javascript -->
    <script src="{{asset('js/jquery.searchable.js')}}"></script>
     <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
     <script src="{{asset('js/jquery-ui.js')}}"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            background-color: #F0F8FF;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <script type="text/javascript">
    $(document).ready(function(){
        // Show hide popover
        $(".dropdown").click(function(){
            $(this).find(".dropdown-menu").slideToggle("slow");
        });
    });
        $(document).on("click", function(event){

        var $trigger = $(".dropdown");

        if($trigger !== event.target && !$trigger.has(event.target).length){

            $(".dropdown-menu").slideUp("slow");

        }            

    }); 

    function check(){
            return confirm("Are you sure to delete this item");
        }
</script>
<style type="text/css">
  tr:nth-child(even) {background: #969aa4 }
    tr:nth-child(odd) {background: #9999ae}
</style>


</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
              
                <ul class="nav navbar-nav">
                    <li>
                        <a  href="{{url('/admin')}}"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                   <li class="dropdown">
                        <a  href="#">Services<span class="caret"></a>
                        <ul class="dropdown-menu">
                             <li><a href="{{url('/add_category')}}"> <span class="glyphicon glyphicon-plus-sign">Add Category</a></li>
                            <li><a href="{{url('/manage_category')}}"><span class="glyphicon glyphicon-cog">Manage Category</a></li>
                           
                            <li><a href="{{url('/add_subject')}}"><span class="glyphicon glyphicon-plus-sign">Add Subject</a></li>
                            <li><a href="{{url('/manage_subject')}}"><span class="glyphicon glyphicon-cog">Manage Subject</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="{{url('/manage_user')}}">User</a>
                    </li>
                    <li>
                        <a href="{{url('/exam_result')}}">Result</a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('containt')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
