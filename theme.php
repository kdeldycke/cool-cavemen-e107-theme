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
$themename = "Cool Cavemen";
$themeversion = "1.0";
$themeauthor = "Kevin Deldycke";
$themedate = "21/11/2004";
$themeinfo = "This theme, originally designed for the Cool Cavemen band website (www.funky-storm.com) and released under the GNU General Public License (http://gnu.org), is the property of Kevin Deldycke (kevin@funky-storm.com)";

// [layout]
$layout = "_default";

$logo = THEME."images/laser.png";

$HEADER = "
  <div id=\"header\">
   <div id=\"logo\"><img src=\"".$logo."\" alt=\"The Ultimate Band\"/></div>
   <ul id=\"tabnav\">
    {SITELINKS=flat}
   </ul>
  </div>

  <div id=\"container\">
   <div id=\"sidebar\">
    <div id=\"boxed\">
     {MENU=2}
    </div>
    <div>
     {MENU=3}
    </div>
    <div>
     <p><a href=\"http://www.mozilla-europe.org/fr/products/firefox/\"><img src=\"".THEME."images/firefox.gif\" alt=\"Get Firefox Now !\"/></a></p>
     <p><a href=\"http://www.nosoftwarepatents.com/fr/m/intro/index.html\"><img src=\"".THEME."images/nopatents.png\" alt=\"No Software Patent !\"/></a></p>
     <p><img src=\"".THEME."images/music.gif\" alt=\"Music related website\"/></p>
    </div>
    <div>
     {MENU=4}
    </div>
   </div>
   <div id=\"content\">
    {MENU=1}";


$FOOTER = "
    {MENU=5}
   </div>
  </div>
  <div id=\"footer\">
   {MENU=6}
   <div class=\"spacer\"></div>
    <div class=\"row\">
     <span class=\"left\">
      {MENU=7}
     </span>
     <span class=\"right\">
      {MENU=8}
     </span>
    </div>
    <br/>
    <a href=\"http://validator.w3.org/check/referer\"><img src=\"".THEME."images/xhtml.png\" alt=\"xHTML 1.1 valid !\"/></a>
    <a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><img src=\"".THEME."images/css.gif\" alt=\"CSS valid !\"/></a>
   <div class=\"spacer\"></div>
   {MENU=9}
  </div>";


// [newsstyle]
$NEWSSTYLE = "
    <div class=\"box-border\">
     <div class=\"box-caption\">
      <div class=\"left\">
       {NEWSTITLE}
      </div>
      <div class=\"right\">
       {ADMINOPTIONS} {EMAILICON}
      </div>
     </div>
     <div class=\"box-body\">
      {NEWSBODY}
      {EXTENDED}
      <div class=\"news-details\">
       <div class=\"left\">
        {NEWSCOMMENTS}
       </div>
       <div class=\"right\">
        {NEWSAUTHOR}, {NEWSDATE}
       </div>
      </div>
     </div>
    </div>";

define("ICONMAIL", "icon-mail.png");
define("ICONPRINT", "icon-print.png");
define("COMMENTOFFSTRING", "Commentaires désactivés pour cet élément");
define("COMMENTLINK", "Commentaires : ");


// [linkstyle]
define(POSTLINK, "");
define(PRELINK, "");
define(LINKSTART, "<li>");
define(LINKEND, "</li>");

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
