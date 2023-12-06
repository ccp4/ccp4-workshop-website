<!doctype html>
<html>

<head>
  <title>DLS-CCP4 Workshop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/ccp4.css" />
</head>

<body>
  <?PHP include("includes/banner.php"); ?>
  <main>
    <h2 style="clear:both">Lecture and workshop slides</h2>
    <?PHP
    selectFiles("2023");

    /////////////////////////////////////////////////////
    // Function to display all files as table of links //
    /////////////////////////////////////////////////////
    function selectFiles($check)
    {
      echo "<table>\n";
      $rtnArray = scandir("course_material", 0);
      $numFiles = count($rtnArray);
      for ($i = 0; $i < $numFiles; $i++) {
        if (strstr($rtnArray[$i], $check) != FALSE) {
          $fileArray = explode("/", $rtnArray[$i]);
          $descArray = explode(".", $fileArray[1]);
          echo "<tr><td><font size=\"+1\"><a class=darklink href=\"course_material/" . $rtnArray[$i] . "\">" . $rtnArray[$i] . "</a></font></td></tr>\n";
        }
      }
      echo "</table>\n";
    }
    ?>
  </main>
  <?PHP include("includes/sponsors.php"); ?>
</body>

</html>
