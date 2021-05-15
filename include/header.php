<?php $directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3]; 

?>
<!DOCTYPE html>
<html lang="en-in">

<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="url" content="<?php echo $url; ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5NML39T');
    </script>
    <!-- End Google Tag Manager -->
    <?php echo $script; ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NML39T" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    </div>
    <div class="bg-top navbar-light">
        <div class="container-fluid">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-6 d-flex align-items-center py-4">
                    <img src="images/logo.png" alt="logo" />
                    <a class="navbar-brand" href="index.php"> Sri Siddhartha Centre for Media Studies<span>(Afiliated to
                            tumkur University)</span></a>
                </div>
                <div class="col-lg-6 d-block padding-top-15">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span><a href="mail:principal@siddharthamedia.edu.in"> sscms.info@gmail.com </a></span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span><a href="tel:9740693477">+91 97406 93477</a></span>
                            </div>
                        </div>
                        <div class="col-md topper d-flex align-items-center justify-content-end">
                            <p class="mb-0">
                                <a href="https://www.facebook.com/Siddhartha-MEDIA-Studies-Tumkur-286717561796317/"
                                    class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                    <span>Apply now</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="full-screen-navbar d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item <?php if ($first_part=="index.php") {echo "active"; } else  {echo "";}?>"><a
                            href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item <?php if ($first_part=="about.php") {echo "active"; } else  {echo "";}?>"><a
                            href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item <?php if ($first_part=="courses.php") {echo "active"; } else  {echo "";}?>"><a
                            href="courses.php" class="nav-link">Courses</a></li>
                    <li class="nav-item <?php if ($first_part=="teacher.php") {echo "active"; } else  {echo "";}?>"><a
                            href="teacher.php" class="nav-link">Staff</a></li>
                    <li class="nav-item <?php if ($first_part=="radio.php") {echo "active"; } else  {echo "";}?> "><a
                            href="radio.php" class="nav-link">Radio</a></li>
                    <li class="nav-item <?php if ($first_part=="blog.php") {echo "active"; } else  {echo "";}?>"><a
                            href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item <?php if ($first_part=="contact.php") {echo "active"; } else  {echo "";}?> "><a
                            href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->