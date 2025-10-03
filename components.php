<?php

// ფუნქცია: ზედა ბანერი (Free Courses Sale Ends Soon)
function render_top_banner($data) {
    echo '<div class="top-banner">';
    echo '<a href="' . htmlspecialchars($data['url']) . '">';
    echo '<span>' . htmlspecialchars($data['text']) . '</span> &rarr;';
    echo '</a>';
    echo '</div>';
}

// ფუნქცია: ნავიგაციის ზოლი (Navbar)
function render_navbar($links) {
    echo '<header class="navbar">';
    echo '<div class="logo">S</div>'; // ლოგო
    echo '<nav>';
    echo '<ul>';
    foreach ($links as $link) {
        $class = isset($link['active']) && $link['active'] ? 'active' : '';
        echo '<li><a href="' . htmlspecialchars($link['url']) . '" class="' . $class . '">' . htmlspecialchars($link['label']) . '</a></li>';
    }
    echo '</ul>';
    echo '</nav>';
    echo '<div class="auth-buttons">';
    echo '<button class="sign-up">Sign Up</button>';
    echo '<button class="login">Login</button>';
    echo '</div>';
    echo '</header>';
}

// ფუნქცია: კურსის შესავალი სექცია (Hero Section) - საბოლოოდ გასწორებული სტრუქტურა
function render_course_hero_section($data) {
    echo '<section class="course-hero">';

    // 1. ზედა რიგი: სათაური (მარცხნივ) და აღწერა (მარჯვნივ)
    echo '<div class="hero-top-row">'; 

    // მარცხენა სვეტი: სათაური
    echo '<div class="header-column">'; 
    echo '<h1>' . htmlspecialchars($data['title']) . '</h1>';
    echo '</div>'; 
    
    // მარჯვენა სვეტი: აღწერა
    echo '<div class="description-column-top">'; 
    echo '<p>' . nl2br(htmlspecialchars($data['description'])) . '</p>'; 
    echo '</div>';

    echo '</div>'; // .hero-top-row-end
    
    // 2. ქვედა რიგი: ვიდეო (მთელ სიგანეზე)
    echo '<div class="video-row">';
    
    // ვიდეო
    echo '<div class="video-container-full">';
    echo '<div class="video-player">';
    echo '<img src="' . htmlspecialchars($data['video_placeholder_url']) . '" alt="Course Video Preview">';
    echo '<div class="play-button"></div>'; 
    echo '</div>';
    echo '</div>';
    
    echo '</div>'; // .video-row-end
    
    echo '</section>';
}


// ფუნქცია: სასწავლო გეგმის სექციის რენდერირება (Curriculum Section) - შესწორებულია დროის ტეგის ჩასართავად
function render_curriculum_section($curriculum_data) {
    echo '<section class="curriculum-section">';
    echo '<div class="curriculum-grid">'; // Grid/Flex კონტეინერი მოდულებისთვის

    foreach ($curriculum_data as $module) {
        $module_id = htmlspecialchars($module['id']);
        $module_title = htmlspecialchars($module['title']);
        
        // თითოეული მოდული
        echo '<div class="module-card">';
        
        // მოდულის ნომერი
        echo '<div class="module-number">' . $module_id . '</div>';
        
        // მოდულის სათაური
        echo '<h3>' . $module_title . '</h3>';
        
        // გაკვეთილების სია
        echo '<div class="lessons-list">';
        foreach ($module['lessons'] as $lesson) {
            $class = $lesson['is_active'] ? 'active-lesson' : '';
            
            echo '<div class="lesson-item ' . $class . '">';
            echo '<div class="lesson-details">';
            echo '<h4>' . htmlspecialchars($lesson['title']) . '</h4>';
            echo '<span class="lesson-number">' . htmlspecialchars($lesson['lesson_number']) . '</span>';
            echo '</div>';
            
            // ✅ განახლება: დროის აღმნიშვნელი ტეგი ფონის და აიქონის მისაღებად
            echo '<div class="lesson-duration-tag">'; 
            // აიქონი CSS-ის ფსევდო-ელემენტით იქნება დამატებული
            echo htmlspecialchars($lesson['duration']); 
            echo '</div>'; // .lesson-duration-tag-end
            
            echo '</div>'; // .lesson-item-end
        }
        echo '</div>'; // .lessons-list-end
        
        echo '</div>'; // .module-card-end
    }

    echo '</div>'; // .curriculum-grid-end
    echo '</section>';
}

?>