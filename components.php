

<?php

function setheader()
{

    Global $navitems;

    echo '<section id="header">
    <header>
        <div class="logo">
            <a href="index.php"><img src="logo.jpg" alt="Logo" /> </a>
            <h2>name</h2>
        </div>';

    echo '<div class="hamburger" onclick="toggleSidebar()">
            <div></div>
            <div></div>
            <div></div>
        </div>';
    echo '<nav id="main-nav" class="dropdown">
        <ul>';

    $lastitemkey = array_key_last($navitems);
    foreach ($navitems as $label => $link) {
        if ($label === $lastitemkey) {
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
    features();
    product();
    testimonials();
    pricing();
    content();
    contactus();
}



function section1() {
    echo '<section id="section1">
        <!-- Background Image -->
        <img src="mainimg.jpg" alt="Background Image" class="background-img" id="mainimg">
        <div class="gradient-overlay"></div>
        
        <!-- Content -->
        <div class="content">
        
            <h1>We Ensure A Best Insurance Service</h1>
            <p>We know how large objects will act, but things on a small scale.</p>
            <div class="buttons">
                <a href="#" class="button">Get Quote Now</a>
                <a href="#" class="button">Learn More</a>
            </div>
        </div>
    </section>';
    echo '<div class="scrollwatcher"> </div>';
}



function product()
{
    global $products;
    
    echo '
    
    <div  class="products-section"  id="product">
        <div class="products-container">';


    foreach ($products as $product) {
        echo '
            <div class="product-box" style="background-image: linear-gradient(to bottom, rgba(1, 3, 31, 0.5) 0%, rgba(60, 70, 2018, 0) 90%),
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








function features()
{
    Global $features;

    echo '<section id="features">';

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
    echo "<div class='ad-container'>
  <div class='ad-content'>
    <p>This company always says they've got a 'limited time offer'—but somehow, it's always available. I'm starting to think the only thing 'limited' is their creativity.</p>
  </div>
</div>";
}






function testimonials() {
   
    Global $testimonials;
    
    echo "<section id='testimonials'>
        <h1>Industry</h1>
        <p>Problems trying to resolve the conflict between 
        the two major realms of Classical physics: Newtonian mechanics </p>

        <div class='testimonial-cards'>";

    
    foreach ($testimonials as $testimonial) {
        $stars = generateStars($testimonial['rating']); 
        echo "
        <div class='testimonial-card'>
            <div class='profile'>
                <img src='" . $testimonial['image'] . "' alt='Profile'>
                <div class='info'>
                    <h2>" . $testimonial['name'] . "</h2>
                    <p class='profession'>" . $testimonial['profession'] . "</p>
                </div>
            </div>
            <div class='rating'>
                $stars
            </div>
            <p class='testimonial-text'>" . $testimonial['testimonial'] . "</p>
        </div>";
    }

    echo "</div>
    </section>";
}















function pricing()
{   
    Global $pricingplans;
    echo '
    <section id="pricing">
        <h1>Pricing</h1>
        <p class="pricing-intro">Choose the plan that best suits your needs</p>
        
        <div class="pricing-cards">';
    
    foreach ($pricingplans as $plan) {
        echo '
        <div class="pricing-card">';
        
        if (!empty($plan['badge'])) {
            echo '<div class="badge">' . $plan['badge'] . '</div>';
        }
        
        echo '
            <h2>' . $plan['title'] . '</h2>
            <p class="price-description">' . $plan['description'] . '</p>
            <p class="price">
                <span class="big-price">' . $plan['price'] . '</span> 
                <span class="small-text">per month</span>
            </p>
            <button class="btn">' . $plan['buttontext'] . '</button>
            <ul class="features">';
        
        foreach ($plan['features'] as $feature) {
            $checkmarkclass = $feature['available'] ? 'green' : 'grey';
            echo '<li><span class="checkmark ' . $checkmarkclass . '">&#10003;</span> ' . $feature['text'] . '</li>';
        }
        
        echo '</ul>
        </div>';
    }
    
    echo '</div>
    </section>';
}





function content() {
    Global $projects;
    echo '<section id="projects-section">
            <h1 class="projects-title">Industry</h1>
            <p class="projects-description">Problems trying to resolve the conflict between 
the two major realms of Classical physics: Newtonian mechanics </p>
            <div class="projects-grid">';

    foreach ($projects as $project) {
        echo '<div class="project-card" style="background-image: url(\'' . $project['image'] . '\');">
                <span class="project-tag">' . $project['tag'] . '</span>
                <h3 class="project-title">' . $project['title'] . '</h3>
                <button class="project-button">' . $project['buttonText'] . '</button>
              </div>';
    }

    echo '</div></section>';
}








function contactus() {
    
    

   echo ' 
        <section id="contact">
           
            
           
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form class="sendmessage" action="?page=submit" method="POST">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    
                    <button type="submit">Submit</button>
                </form>
            </div>
            
            
            <div class="map">
                <h2>Find Us Here</h2>
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD1VnYC6EugmolDY9RjsZ77TeXstyj0288&q=Stupid+Lake&center=55.6645715,-93.448917&zoom=15" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>'
        ;

       
  

   }








function setfooter()
{
    Global $footers;
    Global $icons;

    echo '<footer class="footer">
        <div class="footer-container">';

    foreach ($footers as $title => $links) {
        echo '<div class="footer-column">';
        echo '<h3 class="footer-title">' . $title . '</h3>';
        echo '<ul>';

        foreach ($links as $index => $linkfooter) {
            $label = $linkfooter['label'];
            $url = $linkfooter['url'];

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