

<?php

function setheader() {
    
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


function home() {
    
    
    section1();
    product();
    pricing();
    features();
    testimonials();
    contactus();
    
    
}

function section1() {
    
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







function product() {
    
    echo "<section id='product'><h1>Product Section </h1></section>";
 
  
}


function pricing() {
   
    echo "<section id='pricing'><h1>Pricing Section </h1></section>";
}



function features() {
    
    echo "<section id='features'><h1>Features section</h1></section>";


    

}

function testimonials() {
   
    echo "<section id='testimonials'><h1>Testimonials page</h1></section>";
}




function contactus() {
    
    echo "<section id='contactus'><h1>Contact Us Section</h1></section>";

       
  

   }






function setfooter() {
    echo "<section><h1>FOOTER</h1></section>";
}


?>