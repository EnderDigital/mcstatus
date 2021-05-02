<?php
$ini_array = parse_ini_file("info.ini");
require __DIR__ . '/vendor/autoload.php';


# This obfuscated code contains our keys for error tracking, You can disable the tracking in the info.ini


if ($ini_array["\x65\x72\x72\157\x72\x2d\x63\x68\x65\143\153\x69\x6e\147"] == "\x74\x72\165\145") { function console_log($output, $with_script_tags = true) { $js_code = "\143\x6f\156\163\157\x6c\x65\x2e\x6c\157\147\50" . json_encode($output, JSON_HEX_TAG) . "\x29\x3b"; if ($with_script_tags) { $js_code = "\x3c\x73\x63\162\151\x70\164\x3e" . $js_code . "\74\57\x73\x63\x72\151\x70\x74\x3e"; } echo $js_code; } Sentry\init(array("\x64\163\x6e" => "\150\164\164\x70\163\72\57\57\x61\x31\x61\x64\x35\141\x31\67\63\x32\62\x39\x34\x35\x37\143\142\67\x63\143\x31\141\x31\60\x62\x37\141\x30\x65\x33\x63\60\x40\157\65\x38\x33\65\x31\x39\56\151\156\147\x65\x73\x74\56\x73\x65\156\164\x72\x79\x2e\x69\x6f\57\65\67\64\x34\x34\64\x38")); console_log("\114\151\166\x65\40\x65\x72\162\157\x72\40\143\x68\x65\143\x6b\151\x6e\x67\x20\x61\x63\x74\151\166\145"); }


# --------------------------------------------------------------------------------------------------------


use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
if (!empty($_POST['ip'])){
    $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/' . $_POST['ip']));
    if ($status->online == 'true') {
        if (strpos($status->debug->srv, 'true') !== false) {
            $srv = '<span class="badge badge-success">Yes</span>';
        }else{
            $srv = '<span class="badge badge-danger">No</span>';
        }
        $var = '
    
        <!-- Modal -->
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">' . $status->hostname . '</h5>
          </div>
          <div class="modal-body">
            MOTD: ' . $status->motd->html[0] . '  <small><small><a href="https://mctools.org/motd-creator?text=' . $status->motd->raw[0] . '">Open on creator</a></small></small></br></br>
            Players: <span class="badge badge-success">' . $status->players->online . '/' . $status->players->max . '</span></br></br>
            Native Version: ' . $status->version . '</br></br>
            <hr>
            Software: ' . $status->software . '</br></br>
            SRV Record:  ' . $srv . '</br></br>
            IP:  <span class="badge badge-primary">' . $status->ip . '</span></br></br>
          </div>
        </div>
      </div>
        
        ';
    }else{
        if (strpos($status->debug->srv, 'true') !== false) {
            $srv = '<span class="badge badge-success">Yes</span>';
        }else{
            $srv = '<span class="badge badge-danger">No</span>';
        }
        $var = '
    
        <!-- Modal -->
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">' . $status->hostname . '</h5>
          </div>
          <div class="modal-body">
            Server offline or does not exist
          </div>
        </div>
      </div>
        
        ';
    }

}
?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Minecraft Status Checker
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./assets/css/font-awesome.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="index-page">
  <div class="wrapper">
  <nav class="navbar navbar-expand-lg navbar-dark bg-default">
    <div class="container">
        <a class="navbar-brand" href="#">Minecraft Server Info Checker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="javascript:void(0)">
                            <img src="../../assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <i class="ni ni-favourite-28"></i>
                        <span class="nav-link-inner--text d-lg-none">Discover</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <i class="ni ni-notification-70"></i>
                        <span class="nav-link-inner--text d-lg-none">Profile</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-settings-gear-65"></i>
                        <span class="nav-link-inner--text d-lg-none">Settings</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <!-- Duplicate me if you want more tabs -->
                <h1></h1>
                <?php if (!empty($_POST['ip'])){ echo $var;}else{ echo '
                <form method="post">
                <div class="form-group">
                   <input type="ip" class="form-control form-control-alternative" name="ip" placeholder="mc.endermc.uk">
                </div>
                <input type="submit" class="btn btn-secondary" value="go!">
                </form>';};
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>