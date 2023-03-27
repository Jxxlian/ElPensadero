<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_elPensadero.css"> 

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    
    <script src="js/moment.min.js"></script>
    <script src="js/jquery.min.js"></script>
    

    <!-- Conect to Full Calendar -->
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <link rel="stylesheet" href="css/fullcalendar.min.css">

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <!-- ClockPicker -->
    <script src="js/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">
    <title>El Pensadero - Web para estudiantes</title>
</head>
<body>
  
<div class="container-fluid bb-animate"> <!-- Bubble stly -->

<?php include('toDoList_logic.php');?>
<?php include('header.html') ?>
    
    <section class="row">    

        <div id="index" class="container line">            
            <?php include('pensive.html')?>
        </div> 
    
        <div id="pomodoro" div class="container line">
            <?php include('pomodoro.html')?>
        </div>
    
        <div id="calendar" div class="container line">
            <?php include('calendar.php')?>
        </div>
        
        <div id="toDoList" div class="container line">
            <?php include('toDoList.php')?>
        </div>  

        <div id="playlist" div class="container line">
            <h1 class="section-title">Música para relajarte</h1>
            <p>El momento de relax es tan importante como el momento de trabajo. Con esta playlist vas a poder disfrutar de la mejor selección musical, justo lo que necesitas ¡Dale play!</p>            
            <iframe width="70%" height="400px" src="https://www.youtube.com/embed/4EuknxA6ZtQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div> 
        </section>
        <!-- Bubble stly -->
                <div class="bubbles">
                    <div class="oneBubble"> </div>
                    <div class="oneBubble"> </div>
                    <div class="oneBubble"> </div>
                    <div class="oneBubble"> </div>
                    <div class="oneBubble"> </div>
                    <div class="oneBubble"> </div>
                    <div class="oneBubble"> </div>
                    <div class="oneBubble"> </div>
                </div>
        <!-- end Bubble stly -->
      
    

<footer class="row footer">
    <h5>Web desarrollada por Julián Fernández</h5>
    <div>
        <a target="_blank" href="https://www.linkedin.com/in/julianfrnndz/">
            <img src="img/linkedin.png" alt="logo linkedin">
        </a>
        <a target="_blank" href="https://jxxlianportfolio.netlify.app/index.html">
            <img src="img/portfolio.png" alt="logo portfolio">
        </a>
    </div>
</footer>
</div>  


<script src="js/calendar.js"></script>
<script src="js/pomodoro2.js"></script>
</body>
</html>