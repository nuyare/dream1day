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
                <!-- Character selection -->
                <div>
                    <label for="characterSelectionList">Model : </label>
                    <select name="characterSelectionList" id="characterSelectionList">
                        <?php
                            foreach ($characters as $character => $path) {
                                if ($path != '.' && $path != '..') {
                                    echo '<option value="">'.$path.'</option> ';
                                }
                            }
                        ?>
                    </select>
                    <button>Previous</button>
                    <button>Next</button>
                </div>
                <!-- Character Edit -->
                <div>
                    <input type="range" min="0" max="100" value="0" placeholder="0">
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