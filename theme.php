<?php
/*
+---------------------------------------------------------------+
| Ultimate theme
|
| ©Kevin Deldycke 2003-2004
| http://funky-storm.com
| kevin@funky-storm.com
|
| Released under the terms and conditions of the
| GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

// [theme]
$themename = "UltimateBand";
$themeversion = "1.0";
$themeauthor = "Kevin Deldycke";
$themedate = "11/11/2004";
$themeinfo = "This theme, originally designed for the Funky Storm website (www.funky-storm.com) and released under the GNU General Public License (http://gnu.org), is the property of Kevin Deldycke (kevin@funky-storm.com)";


// [layout]
$layout = "_default";


$HEADER = "
  <div id=\"container\">

   <div id=\"header\">
    <img src=\"".THEME."images/laser.png\" alt=\"The Ultimate Band\"/>
   </div>

   <div id=\"sidebar\">
    <div class=\"box-border\">
     <div class=\"box-caption\">Menu</div>
     <div class=\"box-body\">{SITELINKS=flat}</div>
    </div>
    {MENU=2}
   </div>

   <div id=\"content\">
    {MENU=1}";



$FOOTER = "
    {MENU=3}
   </div>

   <div id=\"footer\">
    {MENU=4}
    {MENU=5}
    <a href=\"http://www.mozilla-europe.org/fr/products/firefox/\"><img src=\"".THEME."images/firefox.gif\" alt=\"Get Firefox Now !\"/></a>
    <img src=\"".THEME."images/music.gif\" alt=\"Music related website\"/>
    <a href=\"http://validator.w3.org/check/referer\"><img src=\"".THEME."images/xhtml.png\" alt=\"xHTML 1.1 valid !\"/></a>
    <a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><img src=\"".THEME."images/css.gif\" alt=\"CSS valid !\"/></a>
    {SITEDISCLAIMER}
   </div>
  </div>";


// [newsstyle]
$NEWSSTYLE = "
    <div id=\"news\" class=\"box-border\">
     <div class=\"news-caption\">
      <span class=\"left\">{NEWSTITLE}</span>
      <span class=\"right\"> {ADMINOPTIONS} {EMAILICON} | {NEWSCOMMENTS}</span>
     </div>
     <br/><hr class=\"underline\"/>
     <div class=\"box-body\">{NEWSBODY}{EXTENDED}</div>
     <div id=\"news-details\">Par {NEWSAUTHOR}, le {NEWSDATE}</div>
    </div>";


define("ICONMAIL", "icon-mail.png");
define("ICONPRINT", "icon-print.png");
define("COMMENTLINK", "<img src=\"".THEME."images/icon-comment.png\" alt=\"Voir/poster des commentaires\"/> ");
define("COMMENTOFFSTRING", "Pas de commentaires");


// [linkstyle]
define(PRELINK, "");
define(POSTLINK, "");
define(LINKSTART, "");
define(LINKEND, "<br/>");

function tablestyle($caption, $text){
  global $style;
  echo "<div class=\"box-border\">";
  if($caption != ""){
    echo "<div class=\"box-caption\">".$caption."</div>";
  }
  if($text != ""){
    echo "<div class=\"box-body\">".$text."</div>";
  }
  echo "</div>";
}

?>