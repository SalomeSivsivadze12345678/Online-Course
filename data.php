<?php

// მენიუს ბმულების მონაცემები
$navbar_links = [
    ['label' => 'Home', 'url' => '#'],
    ['label' => 'Courses', 'url' => '#', 'active' => true],
    ['label' => 'About Us', 'url' => '#'],
    ['label' => 'Pricing', 'url' => '#'],
    ['label' => 'Contact', 'url' => '#'],
];

// ზედა ბანერის (Top Banner) მონაცემები
$top_banner = [
    'text' => 'Free Courses 🔥 Sale Ends Soon, Get It Now',
    'url' => '#',
];

// კურსის შესავალი სექციის მონაცემები
$course_hero_section = [
    'title' => 'UI/UX Design Course',
    'description' => "Welcome to our UI/UX Design course! This comprehensive program will equip you with the knowledge and skills to create exceptional user interfaces (UI) and enhance user experiences (UX). Dive into the world of design thinking, wireframing, prototyping, and usability testing. Below is an overview of the curriculum.",
    'video_placeholder_url' => 'assets/images/bigimage.png', // ვიდეოს სურათის ბმული
];

?>




<?php
// data.php

// ... (არსებული მონაცემები: $navbar_links, $top_banner, $course_hero_section) ...

// კურსის სასწავლო გეგმის (Curriculum) მონაცემები
$course_curriculum = [
    [
        'id' => '01',
        'title' => 'Introduction to UI/UX Design',
        'lessons' => [
            ['title' => 'Understanding UI/UX Design Principles', 'duration' => '45 Minutes', 'lesson_number' => 'Lesson 01', 'is_active' => false],
            ['title' => 'Importance of User-Centered Design', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 02', 'is_active' => true],
            ['title' => 'The Role of UI/UX Design in Product Development', 'duration' => '45 Minutes', 'lesson_number' => 'Lesson 03', 'is_active' => false],
        ]
    ],
    [
        'id' => '02',
        'title' => 'User Research and Analysis',
        'lessons' => [
            ['title' => 'Conducting User Research and Interviews', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 01', 'is_active' => false],
            ['title' => 'Analyzing User Needs and Behavior', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 02', 'is_active' => false],
            ['title' => 'Creating User Personas and Scenarios', 'duration' => '45 Minutes', 'lesson_number' => 'Lesson 03', 'is_active' => false],
        ]
    ],
    [
        'id' => '03',
        'title' => 'Wireframing and Prototyping',
        'lessons' => [
            ['title' => 'Introduction to Wireframing Tools and Techniques', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 01', 'is_active' => false],
            ['title' => 'Creating Low-Fidelity Wireframes', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 02', 'is_active' => false],
            ['title' => 'Prototyping and Interactive Mockups', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 03', 'is_active' => false],
        ]
    ],
    [
        'id' => '04',
        'title' => 'Visual Design and Branding',
        'lessons' => [
            ['title' => 'Color Theory and Typography in UI Design', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 01', 'is_active' => false],
            ['title' => 'Visual Hierarchy and Layout Design', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 02', 'is_active' => false],
            ['title' => 'Creating a Strong Brand Identity', 'duration' => '45 Minutes', 'lesson_number' => 'Lesson 03', 'is_active' => false],
        ]
    ],
    [
        'id' => '05',
        'title' => 'Usability Testing and Iteration',
        'lessons' => [
            ['title' => 'Usability Testing Methods and Techniques', 'duration' => '1 Hour', 'lesson_number' => 'Lesson 01', 'is_active' => false],
            ['title' => 'Analyzing Usability Test Results', 'duration' => '45 Minutes', 'lesson_number' => 'Lesson 02', 'is_active' => false],
            ['title' => 'Iterating and Improving UX Designs', 'duration' => '45 Minutes', 'lesson_number' => 'Lesson 03', 'is_active' => false],
        ]
    ],
];

?>
