<html>
      <head>
<!-- Custom CSS -->
    <link href="public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="public/dist/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="public\dist\js\owl.carousel.min.css">
<link rel="stylesheet" href="public\dist\js\owl.theme.default.min.css">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
@yield('content')


    <!-- jQuery -->
    <script src="public/dist/js/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/dist/js/bootstrap.min.js"></script>
    <script src="public/dist/js/js.js"></script>
        <script src="public/dist/js/header.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="public/dist/js/classie.js"></script>
    <script src="public/dist/js/owl.carousel.min.js"></script>
    <script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
$('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
})
        </script>
    <!-- Contact Form JavaScript -->

    <!-- Custom Theme JavaScript -->
    <script src="public/js/freelancer.js"></script>

</body>

    </html>