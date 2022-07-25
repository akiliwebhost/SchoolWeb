<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="goals.css" />
    <link rel="stylesheet" href="petition.css"/>
    <title>Petition Page</title>
  </head>
  <body>
  <section class="showcase">
        <div class="coming_soon">
            <h2>COMING SOON</h2>
        </div>

        <header>
            <h2 class="logo">Akili Institute<br><span>School of Excellence</span></h2>
            <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
            <label for="menu-icon"></label>
            <nav class="nav"> 		
                <ul class="pt-5">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="corriculum.html">CORRICULUM</a></li>
                    <li><a href="about.html#">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="index.php">Petitions</a></li>
                </ul>
            </nav>
            
            <ion-icon name="menu" class="header__toggle"></ion-icon>
        </header>
    
        <video src="Math Formula Science Equation Symbols Written on Chalkboard Moving 4K Motion Wallpaper Background.mp4" muted loop autoplay></video>

    </section>
    <div id="container">
      <h1>Sign The Petition</h1>
      <form action="insert_goal.php" method="post">
          <label for="text">Whole Name</label>
          <textarea name="text" id="text"></textarea>
          <label for="text2">email</label>
          <textarea name="text2" id="text2"></textarea>
          <label for="goaldate">Date</label>
          <input type="date" id="goaldate" name="goaldate" />
          <input type="checkbox" id="complete" name="complete" value="1" /><br/>
          <button type="submit">Sign</button>
      </form>
      <?php
      require_once 'connect.php';
      $sql = "SELECT * FROM goals";
      $result = mysqli_query($link, $sql) or die(mysqli_error($link));
      $num=mysqli_num_fields($query);
      print("<h2>Incomplete Goals</h2>");

      echo "<div class='num_of_signatures'>";
      echo "<p> Number of Signatures "
      echo $num
      echo "!"
      echo "</p>"

      //Incomplete Goals
      // while($row = mysqli_fetch_array($result)){
      //   if($row['goal_complete'] == 0){
      //       if($row['goal_category'] == 0){
      //         $cat = "Personal";
      //       } elseif ($row['goal_category' == 1]) {
      //         $cat = "Professional";
      //       } else {
      //         $cat = "Other";
      //       }
      //       echo "<div class='goal'>";
      //       echo "<a href='complete.php?id=" . $row['goal_id'] . "'><button class='btnComplete'>Complete</button></a><strong>";
      //       echo  $cat . "</strong><p>" . $row['goal_text'] . "</p>Goal Date: " . $row['goal_date'];
      //       echo "</div>";
      //     }
      // }
     ?>
    </div>
  </body>
</html>
