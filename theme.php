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
   <img id=\"logo\" src=\"".$logo."\" alt=\"Cool Cavemen\"/>
   <a href=\"http://www.ofon.org\"><img id=\"ofon_logo\" src=\"".THEME."images/ofon_logo.png\" alt=\"OfOn music community\"/></a>
   <ul id=\"tabnav\">
    {SITELINKS=flat}
   </ul>
  </div>

  <div class=\"clearall\"/>

  <div id=\"main\">
  <div id=\"inner\">

        <div id=\"left_sidebar\" class=\"sidebar\">
    <div id=\"boxed\">

     {MENU=2}
    </div>
    <div>
     {MENU=3}
    </div>
    <div>
     <p><img src=\"".THEME."images/cool_cavemen_button.png\" alt=\"If you want to create a link from your website to us, you'd better use this button !\"/></p>
     <p><a href=\"http://www.mozilla-europe.org/fr/products/firefox/\"><img src=\"".THEME."images/firefox.gif\" alt=\"Get Firefox Now !\"/></a></p>
     <p><a href=\"http://www.nosoftwarepatents.com/fr/m/intro/index.html\"><img src=\"".THEME."images/nopatents.png\" alt=\"No Software Patent !\"/></a></p>
     <p><img src=\"".THEME."images/music.gif\" alt=\"Music related website\"/></p>
    </div>
    <div>
     {MENU=4}
    </div>
   </div>

         <div id=\"right_sidebar\" class=\"sidebar\">


     <div id=\"quote\">
      <span class=\"start\">&laquo;</span>
      <span class=\"stop\">&raquo;</span>
      A tale of frustration, hardship, and endless reward.
      <p class=\"author\">-- Eric Meyer</p>
     </div>


         </div>



   <div id=\"content\">
    {MENU=1}";


$FOOTER = "
    {MENU=5}
   </div>


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
    <!-- Contrat Creative Commons -->
    <br/><a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\"><img src=\"".THEME."images/creative_commons_licensed.gif\" alt=\"Original material (text, audio, image, video) under Creative Commons by-nc-nd licence\"/></a><br/>
    Les créations originales (textes, musiques, images et vidéos) présentes sur ce site  sont mises à disposition sous un <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\">contrat Creative Commons by-nc-nd</a>. La paternité des oeuvres dont l'auteur est désigné par \"Cool Cavemen\" revient à G.Deroubaix, T.Haydock, M.Jankowski, T.Jankowski et V.Pouliquen.
    <!-- /Contrat Creative Commons -->
    <!--
     <rdf:RDF xmlns=\"http://web.resource.org/cc/\"
     xmlns:dc=\"http://purl.org/dc/elements/1.1/\"
     xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\">
     <Work rdf:about=\"\">
      <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/Sound\"/>
      <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/StillImage\"/>
      <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/Text\"/>
      <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/MovingImage\"/>
      <license rdf:resource=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\"/>
     </Work>
     <License rdf:about=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\">
      <permits rdf:resource=\"http://web.resource.org/cc/Reproduction\"/>
      <permits rdf:resource=\"http://web.resource.org/cc/Distribution\"/>
      <requires rdf:resource=\"http://web.resource.org/cc/Notice\"/>
      <requires rdf:resource=\"http://web.resource.org/cc/Attribution\"/>
      <prohibits rdf:resource=\"http://web.resource.org/cc/CommercialUse\"/>
     </License>
    </rdf:RDF>
   -->
   <div class=\"clearall\"/>
   {MENU=9}
  </div>";


// [newsstyle]
$NEWSSTYLE = "
    <div class=\"box-border\">
     <div class=\"box-caption\">
      {NEWSTITLE}<br/>
      <span class=\"details\">{NEWSDATE}, par {NEWSAUTHOR} | {NEWSCOMMENTS} | {ADMINOPTIONS} {EMAILICON}</span>
     </div>
     <div class=\"box-body\">
      {NEWSBODY}
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