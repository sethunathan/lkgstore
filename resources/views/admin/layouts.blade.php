<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>UKG Store | Admin | @yield('title',' Panel')</title>

  <link rel="apple-touch-icon" href="{{ url('assets')}}/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="{{ url('assets')}}/images/favicon.ico">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ url('global')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('global')}}/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="{{ url('assets')}}/css/site.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="{{ url('global')}}/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="{{ url('global')}}/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="{{ url('global')}}/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="{{ url('global')}}/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="{{ url('global')}}/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="{{ url('global')}}/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="{{ url('global')}}/vendor/waves/waves.css">
  @if (session('status'))
  <link rel="stylesheet" href="{{ url('global')}}/vendor/toastr/toastr.css">
  @endif
  @stack('styles')


  <!-- Fonts -->
  <link rel="stylesheet" href="{{ url('global')}}/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="{{ url('global')}}/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!--[if lt IE 9]>
    <script src="{{ url('global')}}/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{ url('global')}}/vendor/media-match/media.match.min.js"></script>
    <script src="{{ url('global')}}/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ url('global')}}/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="animsition">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  @include('admin.includes.topmenu')

  @include('admin.includes.sidemenu')

  <!-- Page -->
  @yield('content')
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2021 <a href="https://ukgstore.com">UKG Store</a></div>
    <div class="site-footer-right">
      Developed with <i class="red-600 icon md-favorite"></i> by <a href="https://dreamstudio.in">Dream Studio</a>
    </div>
  </footer>
  <!-- Core  -->

  <script src="{{ url('global')}}/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="{{ url('global')}}/vendor/jquery/jquery.js"></script>
  <script src="{{ url('global')}}/vendor/popper-js/umd/popper.min.js"></script>
  <script src="{{ url('global')}}/vendor/bootstrap/bootstrap.js"></script>
  <script src="{{ url('global')}}/vendor/animsition/animsition.js"></script>
  <script src="{{ url('global')}}/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="{{ url('global')}}/vendor/asscrollbar/jquery-asScrollbar.js"></script>
  <script src="{{ url('global')}}/vendor/asscrollable/jquery-asScrollable.js"></script>
  <script src="{{ url('global')}}/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <script src="{{ url('global')}}/vendor/waves/waves.js"></script>

  <!-- Plugins -->
  <script src="{{ url('global')}}/vendor/switchery/switchery.js"></script>
  <script src="{{ url('global')}}/vendor/intro-js/intro.js"></script>
  <script src="{{ url('global')}}/vendor/screenfull/screenfull.js"></script>
  <script src="{{ url('global')}}/vendor/slidepanel/jquery-slidePanel.js"></script>
  @if (session('status'))
  <script src="{{ url('global')}}/vendor/toastr/toastr.js"></script>
  @endif
  @stack('scripts')

  <!-- Scripts -->
  <script src="{{ url('global')}}/js/Component.js"></script>
  <script src="{{ url('global')}}/js/Plugin.js"></script>
  <script src="{{ url('global')}}/js/Base.js"></script>
  <script src="{{ url('global')}}/js/Config.js"></script>

  <script src="{{ url('assets')}}/js/Section/Menubar.js"></script>
  <script src="{{ url('assets')}}/js/Section/GridMenu.js"></script>
  <script src="{{ url('assets')}}/js/Section/Sidebar.js"></script>
  <script src="{{ url('assets')}}/js/Section/PageAside.js"></script>
  <script src="{{ url('assets')}}/js/Plugin/menu.js"></script>

  <script src="{{ url('global')}}/js/config/colors.js"></script>
  <script src="{{ url('assets')}}/js/config/tour.js"></script>
  <script>
    Config.set('assets', '{{ url('assets')}}');
  </script>

  <!-- Page -->
  <script src="{{ url('assets')}}/js/Site.js"></script>
  <script src="{{ url('global')}}/js/Plugin/asscrollable.js"></script>
  <script src="{{ url('global')}}/js/Plugin/slidepanel.js"></script>
  <script src="{{ url('global')}}/js/Plugin/switchery.js"></script>
  <script src="{{ url('global')}}/js/Plugin/bootstrap-treeview.js"></script>
  @stack('page_scripts')

  <script>
    (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
  </script>

  <script>
    @if (session('status'))
  toastr.options.closeButton = true;
  toastr.success(" {{ session('status') }} ")
  @endif
  </script>

</body>

</html>