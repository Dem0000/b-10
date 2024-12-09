<?php include 'data.php' ?>
<?php include 'functions.php' ?>
<?php include 'components.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Font and Icon Libraries -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Description and SEO Metadata -->
    <meta name="description" content="A brief description of your webpage for search engines.">
    <meta name="keywords" content="HTML, CSS, JavaScript, Web Development">
    <meta name="author" content="Your Name">

    <!-- Open Graph Protocol (for social media previews) -->
    <meta property="og:title" content="Your Page Title">
    <meta property="og:description" content="A brief description of your webpage.">
    <meta property="og:image" content="image-url.jpg">
    <meta property="og:url" content="https://yourwebsite.com">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="style.css">

    <!-- Scripts -->
    <script src="script.js" defer></script>

</head>

<body>

    <?php
     setheader();
    switch ($page) {
            case 'signup':
            case 'login':
                Auth($page, $screen); 
                break;

            case 'submit': 
               Submitpage();
                break;

        default:
            home();
            break;
    }
    setfooter();
    ?>



    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const screenWidth = window.innerWidth;
            const urlParams = new URLSearchParams(window.location.search);
            const page = urlParams.get('page') || 'home';

          
            if (['signup', 'login'].includes(page)) {
                if (screenWidth <= 600 && !urlParams.has('screen')) {
                  
                    window.location.href = `index.php?page=${page}&screen=small`;
                } else if (screenWidth > 600 && !urlParams.has('screen')) {
                    
                    window.location.href = `index.php?page=${page}&screen=large`;
                }
            }
        });
    </script>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');


            if (window.scrollY > 1) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

    <script>
        function toggleSidebar() {
            const nav = document.getElementById('main-nav');
            nav.classList.toggle('active');
        }

        document.querySelectorAll('#main-nav.dropdown a').forEach((link) => {
        link.addEventListener('click', () => {
            const nav = document.getElementById('main-nav');
            nav.classList.remove('active');
        });
    });
</script>
    
    <script>
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>
</body>

</html>