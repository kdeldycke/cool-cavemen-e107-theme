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
$themeversion = "2.0";
$themeauthor = "Kevin Deldycke";
$themedate = "16/10/2005";
$themeinfo = "This theme, originally designed for the Cool Cavemen band website (www.coolcavemen.com) and released under the GNU General Public License (http://gnu.org), is the property of Kevin Deldycke (kevin@coolcavemen.com)";

// [layout]
$layout = "_default";

$logo = THEME."images/cool-cavemen.png";

$HEADER = "

    <!-- For non-visual user agents: -->
    <div id=\"top\"><a href=\"#main\" class=\"doNotDisplay doNotPrint\">Skip to main content.</a></div>

    <!-- ##### Header ##### -->

    <div id=\"header\">
      <div class=\"superHeader\">
        <span>Copinage:</span>
        <a href=\"http://www.ofon.org\" title=\"OfOn music community\">OfOn</a> |
        <a href=\"http://www.skeil.com\" title=\"Skeil band\">Skeil</a> |
        <a href=\"http://www.delacrem.com\" title=\"Delacrem band\">Delacrem</a> |
        <a href=\"http://www.skarbone14.com\" title=\"Skarbone 14 band\">Skarbone 14</a> |
        <a href=\"http://www.subsin.be\" title=\"SubSin band\">SubSin</a> |
        <a href=\"http://mezofon01.skyblog.com\" title=\"Mez's Photo blog\">Mez</a>
      </div>

      <div class=\"midHeader\">
        <a href=\"http://coolcavemen.com\"><img id=\"cool_cavemen_logo\" src=\"".$logo."\" alt=\"Cool Cavemen\"/></a>
        <br class=\"doNotDisplay doNotPrint\"/>
        <div class=\"headerLinks\">
          {MENU=1}
        </div>
      </div>

      <br class=\"doNotDisplay doNotPrint\"/>

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
          <div id=\"downloads\" class=\"boxBorder\">
            <div class=\"rbtop\"><div></div></div>
            <h1>Free music !</h1>
            <div class=\"boxBody\">
                <a href=\"".THEME."/../../../request.php\">[MP3]</a>
                <a href=\"".THEME."/../../../request.php\">[OGG]</a>
                <a href=\"".THEME."/../../../request.php\">[FLAC]</a>
              Fusion<br/>
                <a href=\"".THEME."/../../../request.php\">[MP3]</a>
                <a href=\"".THEME."/../../../request.php\">[OGG]</a>
                <a href=\"".THEME."/../../../request.php\">[FLAC]</a>
              Mystique<br/>
                <a href=\"".THEME."/../../../request.php?15\">[MP3]</a>
                <a href=\"".THEME."/../../../request.php?14\">[OGG]</a>
                <a href=\"".THEME."/../../../request.php?21\">[FLAC]</a>
              Melalum<br/>
                <a href=\"".THEME."/../../../request.php?13\">[MP3]</a>
                <a href=\"".THEME."/../../../request.php?2\">[OGG]</a>
                <a href=\"".THEME."/../../../request.php?22\">[FLAC]</a>
              Culture &amp; Co.<br/>
                <a href=\"".THEME."/../../../request.php?16\">[MP3]</a>
                <a href=\"".THEME."/../../../request.php?17\">[OGG]</a>
                <a href=\"".THEME."/../../../request.php?20\">[FLAC]</a>
              Jérémiades<br/>
                <a href=\"".THEME."/../../../request.php\">[MP3]</a>
                <a href=\"".THEME."/../../../request.php\">[OGG]</a>
                <a href=\"".THEME."/../../../request.php\">[FLAC]</a>
              New Pirates<br/>
              <a  href=\"".THEME."/../../../download.php\">&raquo; More downloads</a>
            </div>
            <div class=\"rbbot\"><div></div></div>
          </div>

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

      <a href=\"".THEME."/../../../e107_files/backend/news.xml\"><img src=\"".THEME."images/rss2.gif\" alt=\"RSS 2.0 news feed\"/></a>
      <a href=\"http://validator.w3.org/check/referer\"><img src=\"".THEME."images/xhtml.png\" alt=\"xHTML 1.1 valid !\"/></a>
      <a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><img src=\"".THEME."images/css.gif\" alt=\"CSS valid !\"/></a>
      <!-- Contrat Creative Commons -->
      <br/><a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\"><img src=\"".THEME."images/creative-commons-licensed.gif\" alt=\"Original material (text, audio, image, video) under Creative Commons by-nc-nd licence\"/></a><br/>
      Sauf mention contraire, les <a  href=\"".THEME."/../../../download.php\">créations originales</a> (textes, <a href=\"".THEME."/../../../download.php?list.6\">musiques</a>, <a href=\"".THEME."/../../../download.php?list.9\">images</a>, <a href=\"".THEME."/../../../e107_plugins/autogallery/autogallery.php\">photos</a> et <a href=\"".THEME."/../../../download.php?list.12\">vidéos</a>) présentes sur ce site sont mises à disposition sous un <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\">contrat Creative Commons by-nc-nd</a>. La paternité des oeuvres dont l'auteur est désigné par \"Cool Cavemen\" revient à <a href=\"".THEME."/../../../user.php?id.14\">G.Deroubaix</a>, <a href=\"".THEME."/../../../user.php?id.4\">T.Haydock</a>, <a href=\"".THEME."/../../../user.php?id.8\">M.Jankowski</a>, <a href=\"".THEME."/../../../user.php?id.5\">T.Jankowski</a> et <a href=\"".THEME."/../../../user.php?id.7\">V.Pouliquen</a>.

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
define("COMMENTOFFSTRING", "Commentaires désactivés pour cet élément");
define("COMMENTLINK", " Commentaires : ");


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

?>