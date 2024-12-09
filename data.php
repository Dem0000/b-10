<?php

 $navitems = [
        'Home' => '',
        'Product' => 'product',
        'Pricing' => 'pricing',
        'Contact' => 'contact',
        'Login' => '?page=login',
        'Become a member' => '?page=signup',
    ];
    
    $products = [
        [
            'class' => 'motor-insurance',
            'title' => 'Motor Insurance',
            'description' => 'Annual insurance premium from 2%',
            'image' => 'car.png',
        ],
        [
            'class' => 'property-insurance',
            'title' => 'Property Insurance',
            'description' => 'Insurance of construction elements, repairs, and any contents. We insure houses, apartments, and commercial areas.',
            'image' => 'building.png',
        ],
        [
            'class' => 'health-insurance',
            'title' => 'Health Insurance',
            'description' => 'All types of cargo insurance during any type of transportation.',
            'image' => 'health.png',
        ],
        [
            'class' => 'travel-insurance',
            'title' => 'Travel Insurance',
            'description' => 'All types of cargo insurance during any type of transportation.',
            'image' => 'travel.png',
        ],
        [
            'class' => 'cargo-insurance',
            'title' => 'Cargo Insurance',
            'description' => 'All types of cargo insurance during any type of transportation.',
            'image' => 'cargo.png',
        ],
        [
            'class' => 'bank-guarantee',
            'title' => 'Bank Guarantee',
            'description' => 'All types of cargo insurance during any type of transportation.',
            'image' => 'bank.png',
        ],
        [
            'class' => 'liability-insurance',
            'title' => 'Liability Insurance',
            'description' => 'All types of cargo insurance during any type of transportation.',
            'image' => 'liab.png',
        ],
    ];


    $features = [
        [
            'image' => 'features1.png',
            'title' => 'Peace of mind',
            'description' => 'So it really behaves like neither. Now we have given up. ',
        ],
        [
            'image' => 'features2.png',
            'title' => 'Set For Life',
            'description' => 'They were used to create the machines that launched ',
        ],
        [
            'image' => 'features3.png',
            'title' => '100% Satisfaction',
            'description' => 'So it really behaves like neither. Now we have given up. ',
        ],
    ];

    $footers = [
        "Company Info" => [
            ["label" => "About Us", "url" => "#"],
            ["label" => "Carrier", "url" => "#"],
            ["label" => "We Are Hiring", "url" => "#"],
            ["label" => "Blog", "url" => "#"]
        ],
        "Legal" => [
            ["label" => "About Us", "url" => "#"],
            ["label" => "Carrier", "url" => "#"],
            ["label" => "We Are Hiring", "url" => "#"],
            ["label" => "Blog", "url" => "#"]
        ],
        "Features" => [
            ["label" => "Business Marketing", "url" => "#"],
            ["label" => "User Analytics", "url" => "#"],
            ["label" => "Live Chat", "url" => "#"],
            ["label" => "Unlimited Support", "url" => "#"]
        ],
        "Resources" => [
            ["label" => "IOS & Android", "url" => "#"],
            ["label" => "Watch a Demo", "url" => "#"],
            ["label" => "Customers", "url" => "#"],
            ["label" => "API", "url" => "#"]
        ],
        "Get in Touch" => [
            ["label" => "(480) 555-0103", "url" => "tel:4805550103"],
            ["label" => "4517 Washington Ave.", "url" => "https://maps.google.com?q=4517+Washington+Ave"],
            ["label" => "debra.holt@example.com", "url" => "mailto:debra.holt@example.com"]
        ]
    ];
    
    $icons = [
        '<i class="fas fa-phone-alt"></i>',
        '<i class="fas fa-map-marker-alt"></i>',
        '<i class="fas fa-envelope"></i>'
    ];
    


    $testimonials = [
        [
            'name' => 'Regina Miles',
            'profession' => 'Designer',
            'image' => 'reginamiles.png',
            'rating' => 3,
            'testimonial' => 'This proved to be impossible using the traditional concepts of space and time. Einstein developed a new view of time first and then space.'
        ],
        [
            'name' => 'El Toro',
            'profession' => 'Engineer',
            'image' => 'eltoro.png',
            'rating' => 5,
            'testimonial' => 'This proved to be impossible using the traditional concepts of space and time. Einstein developed a new view of time first and then space.'
        ],
        
    ];

    
    $pricingplans = [
        [
            'title' => 'Free',
            'description' => 'Organize across all apps by hand',
            'price' => '0.00$',
            'buttontext' => 'Try for Free',
            'badge' => '',
            'features' => [
                ['text' => 'Basic Feature 1', 'available' => true],
                ['text' => 'Basic Feature 2', 'available' => true],
                ['text' => 'No Advanced Features', 'available' => false],
                ['text' => 'Limited Support', 'available' => false],
                ['text' => 'Free Updates', 'available' => false],
            ],
        ],
        [
            'title' => 'Silver',
            'description' => 'Organize across all apps by',
            'price' => '7.88$',
            'buttontext' => 'Choose Silver',
            'badge' => 'Hot',
            'features' => [
                ['text' => 'Standard Feature 1', 'available' => true],
                ['text' => 'Standard Feature 2', 'available' => true],
                ['text' => 'Advanced Features', 'available' => true],
                ['text' => 'Priority Support', 'available' => true],
                ['text' => 'Regular Updates', 'available' => true],
            ],
        ],
        [
            'title' => 'Gold',
            'description' => 'Organize across all apps',
            'price' => '28.77$',
            'buttontext' => 'Choose Gold',
            'badge' => 'New', 
            'features' => [
                ['text' => 'Premium Feature 1', 'available' => true],
                ['text' => 'Premium Feature 2', 'available' => true],
                ['text' => 'All Advanced Features', 'available' => true],
                ['text' => '24/7 Support', 'available' => true],
                ['text' => 'Free Updates', 'available' => true],
            ],
        ],
    ];
    
    $projects = [
        [
            'image' => 'post1.jpg',
            'tag' => 'Tax Management',
            'title' => 'Life Tips From Top Ten Adventure Travelers',
            'buttonText' => 'View Project',
        ],
        [
            'image' => 'post2.jpg',
            'tag' => 'Tax Management',
            'title' => 'Life Tips From Top Ten Adventure Travelers',
            'buttonText' => 'View Project',
        ],
        [
            'image' => 'post3.jpg',
            'tag' => 'Tax Management',
            'title' => 'Life Tips From Top Ten Adventure Travelers',
            'buttonText' => 'View Project',
        ],
        [
            'image' => 'post4.jpg',
            'tag' => 'Tax Management',
            'title' => 'Life Tips From Top Ten Adventure Travelers',
            'buttonText' => 'View Project',
        ],
    ];


?>
