<?php
/*
+---------------------------------------------------------------+
| Ultimate theme
|
| © Kevin Deldycke 2003-2007
| http://coolcavemen.com
| kev@coolcavemen.com
|
| Released under the terms and conditions of the
| GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

// [theme]
$themename = "Cool Cavemen";
$themeversion = "2.3";
$themeauthor = "Kevin Deldycke";
$themedate = "16/06/2008";
$themeinfo = "This theme, originally designed for the Cool Cavemen band website (www.coolcavemen.com) and released under the GNU General Public License (http://gnu.org), is the property of Kevin Deldycke (kev@coolcavemen.com)";

// [layout]
$layout = "_default";

$logo = THEME."images/cool-cavemen.png";

$HEADER = "

    <!-- For non-visual user agents: -->
    <div id=\"top\"><a href=\"#main\" class=\"doNotDisplay\">Skip to main content.</a></div>

    <!-- ##### Header ##### -->

    <div id=\"header\">

      <div class=\"midHeader\">
        <a href=\"http://coolcavemen.com\"><img id=\"cool_cavemen_logo\" src=\"".$logo."\" alt=\"Cool Cavemen\"/></a>
        <br class=\"doNotDisplay\"/>
        <div class=\"headerLinks\">
          {MENU=1}
        </div>
      </div>

      <br class=\"doNotDisplay\"/>

      <span class=\"doNotDisplay\">Navigation:</span>
      <ul id=\"tabNav\">
        {SITELINKS=flat}
      </ul>

    </div>

    <!-- ##### Main Content ##### -->

    <div id=\"main\">
      <div class=\"rowOfBoxes\">
        <div class=\"twoThirds noBorderOnLeft\">
          {MENU=2}
";


$FOOTER = "
          {MENU=4}
        </div>

        <div class=\"oneThird\">

          {MENU=3}

          <p class=\"filler\"><!-- Filler para to extend left vertical line --></p>
        </div>
      </div>

      <div class=\"rowOfBoxes dividingBorderAbove\">
        <div class=\"quarter noBorderOnLeft\">
          {MENU=5}
        </div>

        <div class=\"quarter\">
          {MENU=6}
          <p class=\"filler\"><!-- Filler para to extend left vertical line --></p>
        </div>

        <div class=\"quarter\">
          {MENU=7}
        </div>

        <div class=\"quarter\">
          {MENU=8}
        </div>
      </div>
    </div>

    <!-- ##### Footer ##### -->

    <div id=\"footer\">
      {MENU=9}

      <a rel=\"rdfs:seeAlso\" href=\"http://www.jamendo.com/album/9705/\"><img alt=\"Jamendo : Free music\" src=\"http://img.jamendo.com/ext/jamendo0.gif\"/></a>
      <a rel=\"rdfs:seeAlso\" href=\"http://www.jamendo.com/album/3511/\"><img alt=\"Jamendo : Free music\" src=\"http://img.jamendo.com/ext/jamendo0.gif\"/></a>
      <a rel=\"rdfs:seeAlso\" href=\"http://www.jamendo.com/album/993/\"> <img alt=\"Jamendo : Free music\" src=\"http://img.jamendo.com/ext/jamendo0.gif\"/></a>
      <br/>

      <a href=\"http://validator.w3.org/check/referer\"><img src=\"".THEME."images/xhtml.png\" alt=\"xHTML 1.1 valid !\"/></a>
      <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\"><img src=\"".THEME."images/creative-commons-licensed.gif\" alt=\"Original material (text, audio, image, video) under Creative Commons by-nc-nd licence\"/></a>
      <a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><img src=\"".THEME."images/css.gif\" alt=\"CSS valid !\"/></a>
      <br/>
      Sauf mention contraire, les créations originales (textes, musiques, images, <a href=\"".THEME."/../../../e107_plugins/autogallery/autogallery.php\">photos et vidéos</a>) présentes sur ce site sont mises à disposition sous un <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\">contrat Creative Commons by-nc-nd</a>. La paternité des oeuvres dont l'auteur est désigné par \"Cool Cavemen\" revient à <a href=\"".THEME."/../../../user.php?id.14\">G.Deroubaix</a>, <a href=\"".THEME."/../../../user.php?id.4\">T.Haydock</a>, <a href=\"".THEME."/../../../user.php?id.8\">M.Jankowski</a>, <a href=\"".THEME."/../../../user.php?id.5\">T.Jankowski</a> et <a href=\"".THEME."/../../../user.php?id.7\">V.Pouliquen</a>.

      <!-- ##### Creative Commons licence ##### -->
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

      {MENU=10}
    </div>
";


// [newsstyle]
$NEWSSTYLE = "
    <div class=\"boxBorder\">
      <div class=\"rbtop\"><div></div></div>
      <h1>{NEWSTITLE}</h1>
      <div class=\"boxBody\">
        {NEWSBODY}
        <div class=\"newsDetails\">{NEWSDATE}, par {NEWSAUTHOR} | {NEWSCOMMENTS} | {ADMINOPTIONS} {EMAILICON}</div>
      </div>
      <div class=\"rbbot\"><div></div></div>
    </div>";

define("ICONMAIL", "icon-mail.png");
define("ICONPRINT", "icon-print.png");
define("COMMENTOFFSTRING", "Commentaires désactivs pour cet élément");
define("COMMENTLINK", " Commentaires: ");


// [linkstyle]
define(POSTLINK, "");
define(PRELINK, "");
define(LINKSTART, "<li>");
define(LINKEND, "</li>");


function tablestyle($caption, $text){
  global $style;
  echo "<div class=\"boxBorder\">";
  echo "<div class=\"rbtop\"><div></div></div>";
  if($caption != ""){
    echo "<h1>".$caption."</h1>";
  }
  if($text != ""){
    echo "<div class=\"boxBody\">".$text."</div>";
  }
  echo "<div class=\"rbbot\"><div></div></div>";
  echo "</div>";
}

function theme_foot() {
echo "<script src=\"http://www.google-analytics.com/urchin.js\" type=\"text/javascript\"> </script>
<script type=\"text/javascript\"> _uacct = \"UA-826945\"; urchinTracker(); </script>
<script src=\"http://feeds.feedburner.com/~s/coolcavemen\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"http://feeds.feedburner.com/~s/coolcavemen-comments\" type=\"text/javascript\" charset=\"utf-8\"></script>";
}

?>