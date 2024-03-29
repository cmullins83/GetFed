<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Grid</title>

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#5bc0de">
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/Font-Awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/lib/prettify/prettify.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
	      <script src="assets/lib/respond/respond.min.js"></script>
	    <![endif]-->

    <!--Modernizr 3.0-->
    <script src="assets/lib/modernizr-build.min.js"></script>
  </head>
  <body>
    <div id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">

          <!-- Brand and toggle get grouped for better mobile display -->
          <header class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
            </button>
            <a href="index.html" class="navbar-brand">
              <img src="assets/img/logo.png" alt="">
            </a> 
          </header>
          <div class="topnav">
            <div class="btn-toolbar">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Sidebar" data-toggle="tooltip" class="btn btn-success btn-sm" id="changeSidebarPos">
                  <i class="fa fa-expand"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-warning">5</span> 
                </a> 
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-comments"></i>
                  <span class="label label-danger">4</span> 
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Document" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-file"></i>
                </a> 
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i>
                </a> 
              </div>
            </div>
          </div><!-- /.topnav -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">

            <!-- .nav -->
            <ul class="nav navbar-nav">
              <li> <a href="dashboard.html">Dashboard</a>  </li>
              <li> <a href="table.php">Tables</a>  </li>
              <li> <a href="file.html">File Manager</a>  </li>
              <li class='dropdown '>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Form Elements
                  <b class="caret"></b>
                </a> 
                <ul class="dropdown-menu">
                  <li> <a href="form-general.html">General</a>  </li>
                  <li> <a href="form-validation.html">Validation</a>  </li>
                  <li> <a href="form-wysiwyg.html">WYSIWYG</a>  </li>
                  <li> <a href="form-wizard.html">Wizard &amp; File Upload</a>  </li>
                </ul>
              </li>
            </ul><!-- /.nav -->
          </div>
        </nav><!-- /.navbar -->

        <!-- header.head -->
        <header class="head">
          <div class="search-bar">
            <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
              <i class="fa fa-expand"></i>
            </a> 
            <form class="main-search">
              <div class="input-group">
                <input type="text" class="input-small form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm text-muted" type="button"><i class="fa fa-search"></i></button>
                                </span> 
              </div>
            </form>
          </div>

          <!-- ."main-bar -->
          <div class="main-bar">
            <h3>
              <i class="fa fa-columns"></i>Grid</h3>
          </div><!-- /.main-bar -->
        </header>

        <!-- end header.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
            <span class="label label-danger user-label">16</span> 
          </a> 
          <div class="media-body">
            <h5 class="media-heading">Mikey</h5>
            <ul class="list-unstyled user-info">
              <li> <a href="">Administrator</a>  </li>
              <li>Last Access :
                <br>
                <small>
                  <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
              </li>
            </ul>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="collapse">
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-dashboard"></i>
              <span class="link-title">Dashboard</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li class="">
                <a href="dashboard.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Default Style
                </a> 
              </li>
              <li class="">
                <a href="alterne.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Alternative Style
                </a> 
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>&nbsp;Components
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li class="">
                <a href="icon.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Icon</a> 
              </li>
              <li class="">
                <a href="button.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Button</a> 
              </li>
              <li class="">
                <a href="progress.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Progress</a> 
              </li>
              <li class="">
                <a href="pricing.html">
                  <i class="fa fa-credit-card"></i>&nbsp;Pricing Table</a> 
              </li>
              <li class="">
                <a href="bgimage.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Bg Image</a> 
              </li>
              <li class="">
                <a href="bgcolor.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Bg Color</a> 
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-pencil"></i>&nbsp;Forms
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li class="">
                <a href="form-general.html">
                  <i class="fa fa-angle-right"></i>&nbsp;General</a> 
              </li>
              <li class="">
                <a href="form-validation.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Validation</a> 
              </li>
              <li class="">
                <a href="form-wysiwyg.html">
                  <i class="fa fa-angle-right"></i>&nbsp;WYSIWYG</a> 
              </li>
              <li class="">
                <a href="form-wizard.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Wizard &amp; File Upload</a> 
              </li>
            </ul>
          </li>
          <li>
            <a href="table.php">
              <i class="fa fa-table"></i>&nbsp; Tables</a> 
          </li>
          <li>
            <a href="file.html">
              <i class="fa fa-file"></i>&nbsp;File Manager</a> 
          </li>
          <li>
            <a href="typography.html">
              <i class="fa fa-font"></i>&nbsp; Typography</a> 
          </li>
          <li>
            <a href="maps.html">
              <i class="fa fa-map-marker"></i>&nbsp;Maps</a> 
          </li>
          <li>
            <a href="chart.html">
              <i class="fa fa fa-bar-chart-o"></i>&nbsp;Charts</a> 
          </li>
          <li>
            <a href="calendar.html">
              <i class="fa fa-calendar"></i>&nbsp;Calendar</a> 
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-exclamation-triangle"></i>&nbsp;Error Pages
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="403.html">
                  <i class="fa fa-angle-right"></i>&nbsp;403</a> 
              </li>
              <li>
                <a href="404.html">
                  <i class="fa fa-angle-right"></i>&nbsp;404</a> 
              </li>
              <li>
                <a href="405.html">
                  <i class="fa fa-angle-right"></i>&nbsp;405</a> 
              </li>
              <li>
                <a href="500.html">
                  <i class="fa fa-angle-right"></i>&nbsp;500</a> 
              </li>
              <li>
                <a href="503.html">
                  <i class="fa fa-angle-right"></i>&nbsp;503</a> 
              </li>
              <li>
                <a href="offline.html">
                  <i class="fa fa-angle-right"></i>&nbsp;offline</a> 
              </li>
              <li>
                <a href="countdown.html">
                  <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a> 
              </li>
            </ul>
          </li>
          <li class="active">
            <a href="grid.php">
              <i class="fa fa-columns"></i>&nbsp;Grid</a> 
          </li>
          <li>
            <a href="blank.html">
              <i class="fa fa-square-o"></i>&nbsp;Blank Page</a> 
          </li>
          <li class="nav-divider"></li>
          <li>
            <a href="login.html">
              <i class="fa fa-sign-in"></i>&nbsp;Login Page</a> 
          </li>
          <li>
            <a href="javascript:;">Unlimited Level Menu  <span class="fa arrow"></span>  </a> 
            <ul>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li>
                    <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a> 
                    <ul>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li>
                        <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a> 
                        <ul>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li>
                            <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a> 
                            <ul>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li> <a href="javascript:;">Level 4</a>  </li>
                    </ul>
                  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
              <li> <a href="javascript:;">Level 1</a>  </li>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner">
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                    <h5>.col-lg-12</h5>
                    <div class="toolbar">
                      <span class="label">label</span> 
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-12&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
            <div class="row">
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>.col-lg-6</h5>
                    <div class="toolbar">
                      <span class="label label-success">label</span> 
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-6&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>.col-lg-6</h5>
                    <div class="toolbar">
                      <div class="progress 
                         progress-danger middle">
                        <div class="progress-bar" style="width: 57%"></div>
                      </div>
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-6&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
            <div class="row">
              <div class="col-lg-4">
                <div class="box">
                  <header>
                    <h5>.col-lg-4</h5>
                    <div class="toolbar">
                      <a href="#" rel="tooltip" data-placement="bottom" data-original-title="Link Tooltip">link</a> 
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-4&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box">
                  <header>
                    <h5>.col-lg-4</h5>
                    <div class="toolbar">
                      <div class="progress mini">
                        <div class="progress-bar" style="width: 43%;"></div>
                      </div>
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-4&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box">
                  <header>
                    <h5>.col-lg-4</h5>
                    <div class="toolbar">
                      <button class="btn btn-xs btn-primary">mini button</button>
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-4&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
            <div class="row">
              <div class="col-lg-3">
                <div class="box">
                  <header>
                    <h5>.col-lg-3</h5>
                    <div class="toolbar">
                      <ul class="nav">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            Dropdown
                            <b class="caret"></b>
                          </a> 
                          <ul class="dropdown-menu">
                            <li> <a href="">Menu Link 1</a>  </li>
                            <li> <a href="#">Menu Link 2</a>  </li>
                            <li>
                              <a href="#">
                                <i class="icon-external-link"></i>Menu Link with icon</a> 
                            </li>
                            <li class="divider"></li>
                            <li> <a href="#">Menu Linkk 4</a>  </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-3&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="box">
                  <header>
                    <h5>.col-lg-3</h5>
                    <div class="toolbar">
                      <button class="btn btn-danger btn-xs">button</button>
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-3&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="box">
                  <header>
                    <h5>.col-lg-3</h5>
                    <div class="toolbar">
                      <input class="form-control input-sm" type="text" />
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-3&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="box">
                  <header>
                    <h5>.col-lg-3</h5>
                    <div class="toolbar">
                      <i class="icon-envelope"></i>
                    </div>
                  </header>
                  <div class="body">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-3&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
            <div class="row">
              <div class="col-lg-5">
                <div class="row">
                  <div class="col-lg-7">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-7&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                  <div class="col-lg-5">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-5&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="row">
                  <div class="col-lg-6">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-6&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                  <div class="col-lg-6">
                    <pre class="prettyprint linenums">
&lt;div class=&quot;.col-lg-6&quot;&gt;&lt;/div&gt;</pre>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
          </div>

          <!-- end .inner -->
        </div>

        <!-- end .outer -->
      </div>

      <!-- end #content -->
    </div><!-- /#wrap -->
    <div id="footer">
      <p>2013 &copy; Metis Admin</p>
    </div>

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->
    <script src="assets/lib/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="assets/lib/prettify/prettify.js"></script>
    <script src="assets/lib/touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script>
      $(function() {
        metisSortable();
      });
    </script>
    <script src="assets/lib/screenfull/screenfull.js"></script>
    <script src="assets/js/main.min.js"></script>

    <!--For Demo Only. Not required -->
    <script type="text/javascript" src="assets/js/style-switcher.js"></script>
  </body>
</html>