<?php
/*
+---------------------------------------------------------------+
| Ultimate theme
|
| ©Kevin Deldycke 2003-2005
| http://funky-storm.com
| kevin@funky-storm.com
|
| Released under the terms and conditions of the
| GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

// [theme]
$themename = "Cool Cavemen";
$themeversion = "1.1";
$themeauthor = "Kevin Deldycke";
$themedate = "27/02/2005";
$themeinfo = "This theme, originally designed for the Cool Cavemen band website (www.coolcavemen.com) and released under the GNU General Public License (http://gnu.org), is the property of Kevin Deldycke (kevin@coolcavemen.com)";

// [layout]
$layout = "_default";

$logo = THEME."images/coolcavemen.png";

$HEADER = "
  <div id=\"header\">
   <div id=\"logo\"><img src=\"".$logo."\" alt=\"Cool Cavemen\"/></div>
   <ul id=\"tabnav\">
    {SITELINKS=flat}
   </ul>
  </div>

  <div class=\"clearall\"/>

  <div id=\"main\">
   <div id=\"sidebar\">
    <div id=\"boxed\">

     <div id=\"quote\">
      <span class=\"start\">&laquo;</span>
      <span class=\"stop\">&raquo;</span>
      A tale of frustration, hardship, and endless reward.
      <p class=\"author\">-- Eric Meyer</p>
     </div>

     {MENU=2}
    </div>
    <div>
     {MENU=3}
    </div>
    <div>
     <p><img src=\"".THEME."images/cool_cavemen_button.png\" alt=\"Link us to your site with this button !\"/></p>
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
   <div class=\"clearall\"/>
    <div class=\"row\">
     <div class=\"left\">
      {MENU=7}
     </div>
     <div class=\"right\">
      {MENU=8}
     </div>
    </div>
    <br/>
    <a href=\"".THEME."/../../../e107_files/backend/news.xml\"><img src=\"".THEME."images/rss2.gif\" alt=\"RSS 2.0 news feed\"/></a>
    <a href=\"http://validator.w3.org/check/referer\"><img src=\"".THEME."images/xhtml.png\" alt=\"xHTML 1.1 valid !\"/></a>
    <a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><img src=\"".THEME."images/css.gif\" alt=\"CSS valid !\"/></a>
    <br/><a href=\"http://fr.creativecommons.org\"><img src=\"".THEME."images/cc.gif\" alt=\"Audio material under Creative Commons licences\"/></a>
    <br/>
    Les créations audios disponibles dans la rubrique <a href=\"http://coolcavemen.com/download.php\">download</a> de ce site sont l'oeuvre des Cool Cavemen (G.Deroubaix, T.Haydock, M.Jankowski, T.Jankowski, V.Pouliquen). Ces compositions sont mises à disposition sous un <a href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\">contrat Creative Commons by-nc-nd</a>.
   <div class=\"clearall\"/>
   {MENU=9}
  </div>";


// [newsstyle]
$NEWSSTYLE = "
    <div class=\"box-border\">
     <div class=\"box-caption\">
      <span class=\"right\">{ADMINOPTIONS} {EMAILICON}</span>
      <h1>{NEWSTITLE}</h1>
     </div>
     <div class=\"box-body\">
      {NEWSBODY}
      {EXTENDED}
      <div class=\"news-details\">
       <div class=\"left\">
        {NEWSCOMMENTS}
       </div>
       <div class=\"right\">
        {NEWSDATE}, par {NEWSAUTHOR}
       </div>
      </div>
     </div>
    </div>";

define("ICONMAIL", "icon-mail.png");
define("ICONPRINT", "icon-print.png");
define("COMMENTOFFSTRING", "Commentaires désactivés pour cet élément");
define("COMMENTLINK", " Commentaires : ");


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