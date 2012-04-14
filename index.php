<?php
/**************************************************************************************************\
*
* vim: ts=3 sw=3 et wrap co=100 go -=b
*
* Filename: "index.php"
*
* Project: Minesweeper Solver.
*
* Purpose: The main file for the project.
*
* Author: Tom McDonnell 2010-03-20.
*
\**************************************************************************************************/

// Settings. ///////////////////////////////////////////////////////////////////////////////////////

error_reporting(-1);

// Includes. ///////////////////////////////////////////////////////////////////////////////////////

//require_once dirname(__FILE__) . '/../common/php/utils/Utils_validator.php';
//require_once dirname(__FILE__) . '/../common/php/classes/MinesweeperBoard.php';

// Global variables. ///////////////////////////////////////////////////////////////////////////////

$filesCss = array('style.css');

// Globally executed code. /////////////////////////////////////////////////////////////////////////

try
{
   list($submittedTextValidated, $includedWordsValidated) = validateGetString();
}
catch (Exception $e)
{
   echo $e;
}

// Functions. //////////////////////////////////////////////////////////////////////////////////////

/*
 *
 */
function validateGetString()
{
}

// HTML code. //////////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html PUBLIC
 "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
 <head>
<?php
 $unixTime = time();
 foreach ($filesCss as $file) {echo "  <link rel='stylesheet' href='$file?$unixTime' />\n";}
?>
  <title>Minesweeper Solver</title>
 </head>
 <body>
  <a class='backLink' href='http://www.tomcdonnell.net'>Back to tomcdonnell.net</a>
  <h1>Minesweeper Solver</h1>
  <p>Page under construction.</p>
  <p>Site author: <a href='http://www.tomcdonnell.net'>Tom McDonnell</a>.</p>
 </body>
</html>
<?php
/*******************************************END*OF*FILE********************************************/
?>
