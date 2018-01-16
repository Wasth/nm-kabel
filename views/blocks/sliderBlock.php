<div id="sliderWrapper">
    <h1>Оборудование по производству погружного кабеля для УЭЦН</h1>
    <div class="slider content">
        <div class="arrow left-arrow"></div>
        <div class="slider-container">

            <?php

            $eI = 0;
            for($i = 0;$i < ceil(sizeof($slides)/4); $i++){
                echo "<div class=\"slide-block\">";
                for($j = 0; $j < 4; $j++){
                    if($slides[$eI+$j]){
                        echo "<div class='img-container'><div class='slide-img' style='background-image: url(\" ".$slides[$eI+$j]->getImg()." \")'></div></div>";
                    }
                }
                $eI = $eI+4;
                echo "</div>";
            }



            ?>
        </div>
        <div class="arrow right-arrow"></div>
    </div>
</div>