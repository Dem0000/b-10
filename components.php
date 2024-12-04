

<?php

function setheader()
{

    include 'data.php';

    echo '<section id="header">
    <header>
        <div class="logo">
            <a href="index.php"><img src="logo.png" alt="Logo" /> </a>
            <h2>name</h2>
        </div>';

    echo '<div class="hamburger" onclick="toggleSidebar()">
            <div></div>
            <div></div>
            <div></div>
        </div>';
    echo '<nav id="main-nav" class="dropdown">
        <ul>';

    $lastItemKey = array_key_last($navItems);
    foreach ($navItems as $label => $link) {
        if ($label === $lastItemKey) {
            echo '<li><a href="' . $link . '" class="btn">' . $label . ' <span class="arrow">&#8594;</span></a></li>';
        } else {
            if (strpos($link, '?') === false) {
                echo '<li><a href="index.php#' . $link . '">' . $label . '</a></li>';
            } else {
                echo '<li><a href="' . $link . '">' . $label . '</a></li>';
            }
        }
    }

    echo '</ul>
    </nav>
    </header>
    </section>';
}


function home()
{


    section1();
    product();
    features();
    pricing();
    testimonials();
    contactus();
}

function section1()
{

    echo '<section id="section1">
    
    <div class="content">
        <h1>We Ensure A Best Insurance Service</h1>
        <p>We know how large objects will act, 
but things on a small scale.</p>
        <div class="buttons">
            <a href="#" class="button">Get Quote Now</a>
            <a href="#" class="button">Learn More</a>
        </div>
    </div>
    
</section>';
}




function product()
{
    include 'data.php';
    echo '
    
    <div  class="products-section"  id="product">
        <div class="products-container">';


    foreach ($products as $product) {
        echo '
            <div class="product-box ' . $product['class'] . '
            " style="background-image: linear-gradient(to bottom, rgba(1, 3, 31, 0.5) 0%, rgba(60, 70, 2018, 0) 50%),
             url(' . $product['image'] . ');">
                <h2>' . $product['title'] . '</h2>';

        if (!empty($product['description'])) {
            echo '<p>' . $product['description'] . '</p>';
        }

        echo '
                <a href="?page=signup" class="button">→</a>
            </div>';
    }

    echo '
        </div>
    </div>';
}







function pricing()
{

    echo '<section id="pricing"><h1>Pricing Section </h1>
    
    
    
    
    </section>';
}


function features()
{
    include 'data.php';

    echo '<section id="features"> <h1>Features</h1>';

    echo '<div class="cards-container">';
    foreach ($features as $feature) {
        echo '<div class="card">';
        echo '<img src="' . $feature['image'] . '" alt="' . $feature['title'] . '" class="card-image">';
        echo '<h2 class="card-title">' . $feature['title'] . '</h2>';
        echo '<p class="card-description">' . $feature['description'] . '</p>';
        echo '</div>';
    }
    echo '</div>';

    echo '</section>';
}




function testimonials()
{

    echo "<section id='testimonials'><h1>Testimonials page</h1></section>";
}




function contactus()
{

    echo "<section id='contactus'><h1>Contact Us Section</h1></section>";
}






function setfooter()
{
    include 'data.php';

    echo '<footer class="footer">
        <div class="footer-container">';

    foreach ($footerData as $title => $links) {
        echo '<div class="footer-column">';
        echo '<h3 class="footer-title">' . $title . '</h3>';
        echo '<ul>';

        foreach ($links as $index => $linkData) {
            $label = $linkData['label'];
            $url = $linkData['url'];

            if ($title === "Get in Touch") {
                echo '<li>' . ($icons[$index]) . '<a href="' . $url . '">' . $label . '</a></li>';
            } else {
                echo '<li><a href="' . $url . '">' . $label . '</a></li>';
            }
        }

        echo '</ul>';
        echo '</div>';
    }

    echo '</div>
    </footer>';
}




?>