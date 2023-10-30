<!doctype html>
<html lang="en"> 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
</head>
<body>
<?php require('action.php'); ?>
    <div class="container">
        <header>
            <h1><img src="<?php echo $images ?>" width="300" height="400"></h1>
            <h1><?php echo $name ?></h1>
            <p>Student</p>
        </header>
        <section class="info">
            <div class="left">
                <h2>Contact Information</h2>
                <p>Email: <?php echo $email ?></p>
                <p>Phone: <?php echo $phone ?></p>
                
            </div>
            <div class="right">
                <h2>About Me</h2>
                <p>IC: <?php echo $ic ?></p>
                <p>Age: <?php echo $age ?></p>
                <p>Gender: <?php echo $gender ?></p>
                <p>Religion: <?php echo $religion ?></p>
                <p>Blood Type: <?php echo $bloodType ?></p>
                <p>Hobby: <?php echo $hobby ?></p>
                <p>Address: <?php echo $address ?></p>
            </div>
        </section>
        <section class="skills">
            <h2>Skills</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Node.js</li>
            </ul>
        </section>
    </div>
</body>

</html>