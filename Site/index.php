<?php

$characters = scandir('./Image');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmanuel - Portfolio</title>
    <link rel="stylesheet" href="Css/index.css">
    <script src="./Js/index.js" defer></script>
</head>
<body>
    <main>
        <article>
            <div class="indexBody">
                <!-- Censored || Uncersored -->
                <div>
                    <button>Censored</button>
                    <button>Uncersored</button>
                </div>
                <a href="" id="nm">okay</a>
                <div class="characterHover">
                    <img src="Image/testezzzz.jpg" alt="">
                </div>
                <!-- Character selection -->
                <div>
                    <label for="characterSelectionList">Model : </label>
                    <select name="characterSelectionList" id="characterSelectionList">
                        <?php
                            foreach ($characters as $character => $path) {
                                if ($path != '.' && $path != '..') {
                                    echo '<option value="">'.$path.'</option> ';
                                    echo '<img src="Image/fille.gif" alt="">';
                                }
                            }
                        ?>
                    </select>
                    <button>Previous</button>
                    <button>Next</button>
                </div>
                <!-- Character Edit -->
                <div class="characterEdit">

                    <!-- Size -->
                    <div class="characterSize">
                        <label for="">Size : </label>
                        <input type="range" min="0" max="100" value="0" placeholder="0">
                    </div>
                    
                    <!-- Scale -->
                    <div class="characterScale">
                        <label for="">Scale : </label>
                        <input type="range" min="0" max="100" value="0" placeholder="0">
                    </div>


                    <!-- Left | Right -->
                    <div class="characterSides">
                        <label for="">Left | Right </label>
                        <input type="range" min="0" max="100" value="0" placeholder="0">
                    </div>

                    <!-- Top | Bottom -->
                    <div class="characterEdges">
                        <label for="">Top | Bottom </label>
                        <input type="range" min="0" max="100" value="0" placeholder="0">
                    </div>

                </div>
                <!-- Character -->
                <div>
                    <img src="" alt="animated character" id="animation">
                </div>
            </div>
        </article>
    </main>
</body>
</html>
<!DOCTYPE html>