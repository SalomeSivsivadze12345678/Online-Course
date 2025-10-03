<?php

// header
function hheadera($headerebi){
    foreach($headerebi as $headeri) {
        echo '<div class="headsa container">
            <div class="zedaheader"><h3>' . $headeri['firsttext'] . '</h3></div>
            <div class="kvedaheaders">
                <div class="kvedaheaders1">
                    <img src="' . $headeri['logo'] . '" alt="Logo">
                    <a href="index.php"> <h3 class ="pirveladze">' . $headeri['secondtext'] . '</h3> </a>
                    <a href="courses.php"> <h3>' . $headeri['thirdtext'] . '</h3> </a>
                    <a href="aboutus.php"> <h3>' . $headeri['fourthtext'] . '</h3> </a>
                    <a href="#"> <h3>' . $headeri['fifthtext'] . '</h3> </a>
                    <a href="#"> <h3>' . $headeri['sixthtext'] . '</h3> </a>
                </div>
                <div class="kvedaheaders2">
                    <h4>' . $headeri['seventhtext'] . '</h4>
                    <h3>' . $headeri['eighttext'] . '</h3>
                </div>
            </div>
        </div>';
    }
};

// header end

// first section of home start

function firstconta($firstcontainers) {
    foreach($firstcontainers as $firstcontainer) {
        echo '
        <div class="firstmain container">
            <div class="pirvelzeda">
                <img src="' . $firstcontainer['secondimg'] . '" alt="">
                <h3>' . $firstcontainer['firsttxt'] . '<span> ' . $firstcontainer['secondtxt'] . ' </span></h3>
            </div>
            <div class="kveda">
                <div class="pirvelkveda">
                    <h3>' .$firstcontainer['thirdtxt']. '</h3>
                </div>
                <div class="meorekveda">
                    <h3>' .$firstcontainer['fourthtxt']. '</h3>
                </div>
                <div class="mesamekveda">
                    <a href="#">'.$firstcontainer['firstbut'].'</a>
                    <a href="#" class="meorebuttoni">'.$firstcontainer['secondbut'].'</a>
                </div>
            </div>
        </div>';
    }
};

// first section of home end

// second section of home page start 

function konta2($meorekontainers) {
    foreach ($meorekontainers as $meorekontainer) {
        echo '
        <div class="fotoebiskontainer container"> 
            <img src="' . $meorekontainer['firstimg'] . '" alt="Zapier">
            <img src="' . $meorekontainer['secondimg'] . '" alt="Spotify">
            <img src="' . $meorekontainer['thirdimg'] . '" alt="Zoom">
            <img src="' . $meorekontainer['fourthimg'] . '" alt="Zoom">
            <img src="' . $meorekontainer['fifthimg'] . '" alt="Adobe">
            <img src="' . $meorekontainer['sixthimg'] . '" alt="Notion">
            <img src="' . $meorekontainer['seventhimg'] . '" alt="Netflix">
        </div>';
    }
};

// second section of home page end

// big photo start

function solophoto($solophotos) {
    foreach ($solophotos as $solophoto) {
        echo '
        <div class="solobigphoto container"> 
            <img src="' . $solophoto['onlyimg'] . '" alt="Illustration of students">
        </div>';
    }
};

// big photo end

// third container of home page start

function benefitstart($benefitstars) {
    foreach ($benefitstars as $benefitstar) {
        echo '
        <div class = "benefittitles container"> 
            <h1>'.$benefitstar['title'].'</h1>
            <div class = "benefitlowerinfo"> 
                <h2>'.$benefitstar['description'].'</h2>
                <a href="#">'.$benefitstar['button'].'</a>
            </div>
        </div>';
    }
}; 

function benefitcards($benefitcardsinfo) {
    echo '<div class="bigcontainerforcards container">'; 
    for ($i = 0; $i < 3; $i++) {
        $card = $benefitcardsinfo[$i];
        echo '
        <div class="benefitcard"> 
            <h1>'.$card['number'].'</h1>
            <h2>'.$card['title'].'</h2>
            <h3>'.$card['description'].'</h3>
            <a href="#">
                <img src="'.$card['link'].'" alt="Arrow link" />
            </a>
        </div>';
    }
    echo '</div>';
    
    echo '<div class="bigcontainerforcards container">'; 
    for ($i = 3; $i < 6; $i++) {
        $card = $benefitcardsinfo[$i];
        echo '
        <div class="benefitcard"> 
            <h1>'.$card['number'].'</h1>
            <h2>'.$card['title'].'</h2>
            <h3>'.$card['description'].'</h3>
            <a href="#">
                <img src="'.$card['link'].'" alt="Arrow link" />
            </a>
        </div>';
    }
    echo '</div>';
};

// third container of home page end

// fourth container of home page start

function ourcour($ourcourses) {
    foreach ($ourcourses as $ourcourse) {
        echo '
        <div class = "benefittitles container"> 
            <h1>'.$ourcourse['title'].'</h1>
            <div class = "benefitlowerinfo"> 
                <h2>'.$ourcourse['description'].'</h2>
                <a href="#">'.$ourcourse['button'].'</a>
            </div>
        </div>';
    }
}; 

function ourcourcards($ourcoursescards) {
    echo '<div class = "bigcoursescontainer container">';
    foreach ($ourcoursescards as $ourcoursescard){
        echo '
        <div class = "coursecard">
            <img src="' . $ourcoursescard['img'] . '" alt="Course illustration">
            <div class = "courseszeda">
                <h4>' . $ourcoursescard['duration'] . '</h4>
                <h2>' . $ourcoursescard['level'] . '</h2>
                <h3>' . $ourcoursescard['author'] . '</h3>
            </div>
            <div class = "courseskveda">
                <h1>' . $ourcoursescard['title'] . '</h1>
                <p>' . $ourcoursescard['description'] . '</p>
                <a href="#">' . $ourcoursescard['button'] . '</a>
            </div>
        </div>';
    }
    echo "</div>";
};

// fourth container of home page end

// fifth container of home page start

function ourtesti($ourtestisinfos) {
    foreach ($ourtestisinfos as $ourtestisinfo) {
        echo '
        <div class = "benefittitles container"> 
            <h1>'.$ourtestisinfo['title'].'</h1>
            <div class = "benefitlowerinfo"> 
                <h2>'.$ourtestisinfo['description'].'</h2>
                <a href="#">'.$ourtestisinfo['button'].'</a>
            </div>
        </div>';
    }
}; 

function testitipebi($tipebzeinfos) {
    echo '<div class = "tipebisinfo container">';
    foreach ($tipebzeinfos as $tipebzeinfo){
        echo '
        <div class = "prostadiv">
            <div class = "zedatitle">
            <h3>' . $tipebzeinfo['description'] . '</h3>
            </div>
            <div class = "kvedatitle">
                <img src="' . $tipebzeinfo['img'] . '" alt="Avatar">
                <h3>' . $tipebzeinfo['name'] . '</h3>
                <a href="#">' . $tipebzeinfo['button'] . '</a>
            </div>
        </div>';
    }
    echo '</div>';
};

// fifth container of home page end

// sixth container of home page start

function pricinginfo($ourpricings) {
    foreach ($ourpricings as $ourpricing) {
        echo '
        <div class = "ourpricingtitles container"> 
            <h1>'.$ourpricing['title'].'</h1>
            <div class = "ourpricinglowerinfo"> 
                <h2>'.$ourpricing['description'].'</h2>
                <div class = "pricingbuttons">
                    <a href="#" class = "stafilosferi">'.$ourpricing['but1'].'</a>
                    <a href="#">'.$ourpricing['but2'].'</a>
                </div>
            </div>
        </div>';
    }
}; 

function showPricing($plans) {
    foreach($plans as $plan) {
        $is_pro = $plan['name'] === 'Pro Plan';
        echo '
        <div class="pricing-container">
            <div class="pricing-header">
                <h2>' . $plan['name'] . '</h2>
                <div class="pricing-price">
                    <span class="main-price">' . $plan['price'] . '</span>
                    <span class="per-month">' . $plan['price2'] . '</span>
                </div>
            </div>
            <div class="yvelafersurtyavs">
                <div class="pricing-title">' . $plan['title'] . '</div>
                <ul class="pricing-features">';
                    
                    // Logic to display features with check or cross marks
                    $feature_keys = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh'];
                    $img_src = $plan['img1']; // Default to checkmark
                    $alt_text = "Check mark";

                    foreach ($feature_keys as $key) {
                        $current_img = $img_src;
                        $current_alt = $alt_text;
                        $class = '';

                        // For the Free Plan, use cross for 6th and 7th features
                        if (!$is_pro && ($key === 'sixth' || $key === 'seventh')) {
                             $current_img = $plan['img2'];
                             $current_alt = "Cross mark";
                             $class = 'iksia';
                        }
                        
                        // For the Pro Plan, ensure all use checkmarks (img1)
                        if ($is_pro) {
                            $current_img = $plan['img1'];
                            $current_alt = "Check mark";
                            $class = '';
                        }
                        
                        if(isset($plan[$key])) {
                            echo '<li><img src="' . $current_img . '" alt="' . $current_alt . '" class="' . $class . '"> ' . $plan[$key] . '</li>';
                        }
                    }

        echo '      </ul>
            </div>
            <a href="#" class="pricing-btn">' . $plan['but'] . '</a>
        </div>';
    }
};


// sixth container of home page end

// seventh container of home page start

function frequestion($askedquestions){
    echo '<div class ="questions container">';
    foreach ($askedquestions as $askedquestion) {
        echo '
        <div class ="marcxenaquestions"> 
            <h1>'.$askedquestion['text1'].'</h1>
            <p>'.$askedquestion['text2'].'</p>
            <a href="#">'.$askedquestion['but1'].'</a>
        </div>
        <div class ="marjvenaquestions"> 
            <div class ="gaxsniliquestion"> 
                <h1>'.$askedquestion['text3'].'</h1>
                <a href="#"><img src="' . $askedquestion['img1'] . '" alt="Collapse icon"> </a>
                <hr>
                <h2>'.$askedquestion['text4'].'</h2>
                <div class = "ucnauriferi">
                    <h4>'.$askedquestion['text5'].'</h4>
                    <a href="#"><img src="' . $askedquestion['img2'] . '" alt="Arrow icon"></a>
                </div>
            </div>
            <div class ="daxuruliquestion1"> 
                <h1>'.$askedquestion['text6'].'</h1>
                <a href="#"><img src="' . $askedquestion['img3'] . '" alt="Expand icon"></a>
            </div>
            <div class ="daxuruliquestion1"> 
                <h1>'.$askedquestion['text7'].'</h1>
                <a href="#"><img src="' . $askedquestion['img3'] . '" alt="Expand icon"></a>
            </div>
            <div class ="daxuruliquestion1"> 
                <h1>'.$askedquestion['text8'].'</h1>
                <a href="#"><img src="' . $askedquestion['img3'] . '" alt="Expand icon"></a>
            </div>
            <div class ="daxuruliquestion1"> 
                <h1>'.$askedquestion['text9'].'</h1>
                <a href="#"><img src="' . $askedquestion['img3'] . '" alt="Expand icon"></a>
            </div>
        </div>';
        
    }
    echo '</div>';
};

// seventh container of home page end

// footer start

function footerstart($footerinfos) {
    // Removed the redundant .footers wrapper div
    echo '<div class = "footerstart container">'; 
    foreach ($footerinfos as $footerinfo){
        echo '
        <div class ="footerleft"> 
            <a href="#"><img src="' . $footerinfo['img1'] . '" alt="Company Logo" class="flogo"></a>
            
            <div class="contact-item">
                <a href="mailto:'.$footerinfo['email'].'"><img src="' . $footerinfo['emaillogo'] . '" alt="Email Icon"></a>
                <a href="mailto:'.$footerinfo['email'].'">'.$footerinfo['email'].'</a>
            </div>
            
            <div class="contact-item">
                <a href="tel:'.$footerinfo['phone'].'"><img src="' . $footerinfo['phonelogo'] . '" alt="Phone Icon"></a>
                <a href="tel:'.$footerinfo['phone'].'">'.$footerinfo['phone'].'</a>
            </div>
            
            <div class="contact-item">
                <a href="https://maps.google.com/?q=' . urlencode($footerinfo['location']) . '" target="_blank">
                <img src="' . $footerinfo['locationlogo'] . '" alt="Location Icon">
                </a>
                <a href="https://maps.google.com/?q=' . urlencode($footerinfo['location']) . '" target="_blank">
                    '.$footerinfo['location'].'
                </a>
            </div>
        </div>
        <div class = "footercenter"> 
            <a href="#"> <h2>'.$footerinfo['text1'].'</h2> </a>
            <a href="#"> <h3>'.$footerinfo['text2'].'</h3> </a>
            <a href="#"> <h3>'.$footerinfo['text3'].'</h3> </a>
            <a href="#"> <h3>'.$footerinfo['text4'].'</h3> </a>
            <a href="#"> <h3>'.$footerinfo['text11'].'</h3> </a>
        </div>
        <div class = "footerright1"> 
            <a href="#"> <h2>'.$footerinfo['text5'].'</h2> </a>
            <a href="#"> <h3>'.$footerinfo['text6'].'</h3> </a>
            <a href="#"> <h3>'.$footerinfo['text7'].'</h3> </a>
            <a href="#"> <h3>'.$footerinfo['text8'].'</h3> </a>
        </div>
        <div class = "footerright2"> 
            <h2>'.$footerinfo['text9'].'</h2>
            <div class="social-icons">
                <a href="https://facebook.com"><img src="' . $footerinfo['img2'] . '" alt="Facebook"></a>
                <a href="https://twitter.com"><img src="' . $footerinfo['img3'] . '" alt="Twitter"></a>
                <a href="https://linkedin.com"><img src="' . $footerinfo['img4'] . '" alt="LinkedIn"></a>
            </div>
        </div>
        <div class ="footerdown"> 
            <h6>'.$footerinfo['text10'].'</h6>
        </div>';
    }
    echo '</div>';
};

// footer end

// 2nd page

function texts($desks){
    foreach($desks as $desk){
        echo '<div class="firstpart container" >
                <div class="fpart"><h2>' . $desk['text1'] . '</h2></div>
                <div class="spart"><p>' . $desk['text2'] . '</p></div>
              </div>';
    }
};

function main($kartebi){
    foreach($kartebi as $karti){
        echo '<div class="mainc container">

            <div class="heading"><h2>' . $karti['text1'] .'</h2>
            
                <div class="heading2"><p>' . $karti['text2'] .'</p>
                
                    <a href=""> ' . $karti['button'].'</a>
                
                
                </div>
            
            </div>
           
             
            <div class="cardz"> 
    
                <img src="'.$karti['pic1'].'" alt="">
                <img src="'.$karti['pic2'].'" alt="">
                <img src="'.$karti['pic3'].'" alt="">
            
            </div>
        
            <div class="info"> 

                <h3> '.$karti['date'] .' </h3>
                <h4> '.$karti['level'] .' </h4>
                <h5> '.$karti['author'] .' </h5>

        
            </div>
        
            <div class="curi"> 

                <h1> ' . $karti['date2'].'</h1>

            <div class="culum"> 

            <div class="xinkali"> 
                <h1>'.$karti['1'] . ' </h1>
                <p>'.$karti['11'] . ' </p>   
            </div>

            <div class="xinkali"> 

                <h1>'.$karti['2'] . ' </h1>
                <p>'.$karti['22'] . ' </p>  
            </div>

            <div class="xinkali"> 

                 <h1>'.$karti['3'] . ' </h1>
                <p>'.$karti['33'] . ' </p>   
            </div>

            <div class="xinkali"> 

                <h1>'.$karti['4'] . ' </h1>
                <p>'.$karti['44'] . ' </p>   
            </div>

            <div class="xinkali"> 

                <h1>'.$karti['5'] . ' </h1>
                <p>'.$karti['55'] . ' </p>
                
            </div>

            </div>
            
            </div>
            

        </div>';
    }
};

// 2nd page END

// About us Start

function renderAboutIntro($aboutIntro) {
  ?>
  <section class="about-intro container">
    <div class="about-text">
      <h2><?= $aboutIntro['title']; ?></h2>
      <p><?= $aboutIntro['description']; ?></p>
    </div>
    <div class="about-image">
      
    </div>
  </section>
  <?php
}

function renderAchievements($achievements) {
  ?>
  <section class="achievements container">
    <div class="achievements-header">
      <div class="achievements-left">
        <h2 class="achievements-title"><?= htmlspecialchars($achievements['title']); ?></h2>
      </div>
      <div class="achievements-right">
        <?php if (!empty($achievements['description'])): ?>
          <p class="achievements-desc"><?= htmlspecialchars($achievements['description']); ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="achievements-grid">
      <?php foreach ($achievements['items'] as $item): ?>
        <article class="achievement-card">
          <div class="achievement-icon">
            <?php if (!empty($item['icon'])): ?>
              <img src="<?= $item['icon']; ?>" alt="<?= htmlspecialchars($item['title']); ?>">
            <?php endif; ?>
          </div>
          <h3><?= htmlspecialchars($item['title']); ?></h3>
          <p><?= htmlspecialchars($item['description']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
  <?php
}

function renderGoals($goals) {
  ?>
  <section class="goals container">
    <h2><?= $goals['title']; ?></h2>
    <div class="goals-grid">
      <?php foreach ($goals['items'] as $goal): ?>
        <div class="goal-card">
          <img src="<?= $goal['icon']; ?>" alt="<?= $goal['title']; ?>">
          <h3><?= $goal['title']; ?></h3>
          <p><?= $goal['description']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <?php
}

function renderCTA($cta) {
  ?>
  <section class="cta container">
    <div class="cta-content">
      <h2><?= $cta['title']; ?></h2>
      <p><?= $cta['description']; ?></p>
    </div>
    <div class="cta-divider"></div>
    <div class="cta-action">
      <a href="<?= $cta['button_link']; ?>" class="btn-primary"><?= $cta['button']; ?></a>
    </div>
  </section>
  <?php
};

// about us end