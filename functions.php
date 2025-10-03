<?php

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
}


