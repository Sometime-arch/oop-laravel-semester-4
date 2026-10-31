<!doctype html>
<html lang="en">

<head>
    <title>:: Iconic :: Documentation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .card .body {
            font-size: 15px;
        }

        .main_features li {
            line-height: 35px;
        }

        .main_features li.divider {
            border-bottom: 1px solid #ececec;
            margin: 10px 0;
            list-style: none;
            font-size: 12px;
            text-transform: uppercase;
            line-height: 1;
            color: #ff0000;
            padding-top: 15px;
        }
    </style>
</head>

<body data-theme="light" class="font-nunito">

    <div id="wrapper" class="theme-cyan">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="mt-3"><img src="../dist/assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Top navbar div start -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                    <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                    <a href="index.html">ICONIC</a>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="https://www.thememakker.com/" class="icon-menu" title="ThemeMakker" target="_blank"><i class="fa fa-globe"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="https://wrraptheme.com/templates/iconic/dist/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela Petrus</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="https://www.thememakker.com/about-us/"><i class="icon-user"></i>About Us</a></li>
                            <li><a href="https://www.thememakker.com/portfolio/"><i class="icon-envelope-open"></i>Portfolio</a></li>
                            <li><a href="https://www.thememakker.com/store/"><i class="icon-settings"></i>Template</a></li>
                            <li><a href="https://www.thememakker.com/mega-bundle/"><i class="icon-power"></i>Mega Bundle</a></li>
                        </ul>
                    </div>
                    <hr>
                    <ul class="row list-unstyled">
                        <li class="col-5">
                            <small>EXPERIENCE</small>
                            <h6>10+</h6>
                        </li>
                        <li class="col-7">
                            <small>RELEASED PROJECTS</small>
                            <h6>100+</h6>
                        </li>
                    </ul>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
                        <li class="active"><a href="#documenter_cover"><span>Start </span></a></li>
                        <li><a href="#overview"><span>Overview</span></a></li>
                        <li><a href="#features"><span>Features</span></a></li>
                        <li><a href="#template"><span>Template</span></a></li>
                        <li><a href="#folder_structure"><span>Folder Structure</span></a></li>
                        <li><a href="#grunt_file"><span>Grunt File</span></a></li>
                        <li><a href="#SCSS"><span>SCSS</span></a></li>
                        <li><a href="#javascript"><span>Javascript</span></a></li>
                        <li><a href="#fonts"><span>Fonts</span></a></li>
                        <li><a href="#thank_you"><span>THANK YOU!</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="main-content">
            <div class="card">
                <div class="header">
                    <h2>Tabel Dosen</h2>
                    <a href="form_dosen" class="btn btn-primary mb-3">+ Tambah Dosen</a>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>NIDN</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>created at</th>
                                    <th>update at</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->nidn }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td><a href="destroy_dosen/{{ $item -> id }}" class="btn btn-danger btn-sm">hapus</a>
                                        <a href="edit_dosen/{{ $item -> id }}" class="btn btn-warning btn-sm">edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="js/libscripts.bundle.js"></script>
    <script src="js/vendorscripts.bundle.js"></script>
    <script src="js/mainscripts.bundle.js"></script>
    <script>
        $('.metismenu li').click(function() {
            var $this = $(this);
            if (!$this.is('active')) {
                $('.metismenu li').removeClass('active').removeData("top");
                $this.addClass('active').data("top", $this.offset().top);
            }
        });
        document.createElement('section');
        var duration = '500',
            easing = 'swing';

        // Select all links with hashes
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    </script>
</body>

</html>