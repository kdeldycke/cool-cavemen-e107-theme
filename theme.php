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
    <div id=\"top\"><a href=\"#main\" class=\"doNotDisplay\">Skip to main content.</a></div>

    <!-- ##### Header ##### -->

    <div id=\"header\">
      <div class=\"superHeader\">
        <span>Copinage:</span>
        <a href=\"http://www.ofon.org\" title=\"OfOn music community\">OfOn</a> |
        <a href=\"http://www.skeil.com\" title=\"Skeil band\">Skeil</a> |
        <a href=\"http://www.delacrem.com\" title=\"Delacrem band\">Delacrem</a> |
        <a href=\"http://www.skarbone14.com\" title=\"Skarbone 14 band\">Skarbone 14</a> |
        <a href=\"http://www.subsin.be\" title=\"SubSin band\">SubSin</a> |
        <a href=\"http://funkysaxplayer.skyblog.net\" title=\"TomSax's Blog, the blog of our saxophonist in Murcia, Spain\">TomSax</a> |
        <a href=\"http://mezofon01.skyblog.com\" title=\"Mez's Photo Blog\">Mez</a>
      </div>

      <div class=\"midHeader\">
        <span id=\"cool_cavemen_logo\">
          <a href=\"http://coolcavemen.com\"><img src=\"".$logo."\" alt=\"Cool Cavemen\"/></a>
        </span>

        <br class=\"doNotDisplay\"/>

        <span class=\"doNotDisplay\">Band musicians:</span>
        <ul id=\"bandFaces\">
          <li id=\"guiguit\"><a href=\"".THEME."/../../../e107_plugins/autogallery/autogallery.php?show=Membres%20du%20groupe%2F03.Guiguit%20%28bassiste%20Slapetant%29\"><span class=\"doNotDisplay\">Guiguit</span></a></li>
          <li id=\"tom\"><a href=\"".THEME."/../../../e107_plugins/autogallery/autogallery.php?show=Membres%20du%20groupe%2F05.J.%20Wong%20%28batteur%20Post-avant-gardiste%29\"><span class=\"doNotDisplay\">Tom</span></a></li>
          <li id=\"max\"><a href=\"".THEME."/../../../e107_plugins/autogallery/autogallery.php?show=Membres%20du%20groupe%2F02.Max%20%28guitariste%20Akrobatique%29\"><span class=\"doNotDisplay\">Max</span></a></li>
          <li id=\"tomsax\"><a href=\"".THEME."/../../../e107_plugins/autogallery/autogallery.php?show=Membres%20du%20groupe%2F04.Thomas%20%28saxophoniste%20Percutant%29\"><span class=\"doNotDisplay\">TomSax</span></a></li>
          <li id=\"vince\"><a href=\"".THEME."/../../../e107_plugins/autogallery/autogallery.php?show=Membres%20du%20groupe%2F1.Vince%20%28chanteur%20Paradoxal%29\"><span class=\"doNotDisplay\">Vince</span></a></li>
        </ul>

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
          <div id=\"downloads\" class=\"boxBorder\">
            <div class=\"rbtop\"><div></div></div>
            <h1>All Cool Hits !</h1>
            <div class=\"boxBody\">

                <a href=\"".THEME."/../../../request.php?27\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Fusion in Mp3\"/>Mp3</a>
                <a href=\"".THEME."/../../../request.php?28\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Fusion in Ogg/Vorbis\"/>Ogg</a>
                <a href=\"".THEME."/../../../request.php?29\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Fusion in Flac\"/>Flac</a>
              &mdash; <b>NEW!</b> Fusion<br/><br/>

              <span class=\"disabled\">

              Prochaines sorties des titres du nouveau CD <i>All Cool Hits !</i>&nbsp;:<br/>

                <!--
                <a href=\"".THEME."/../../../request.php?16\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Jérémiades in Mp3\"/>Mp3</a>
                <a href=\"".THEME."/../../../request.php?17\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Jérémiades in Ogg/Vorbis\"/>Ogg</a>
                <a href=\"".THEME."/../../../request.php?20\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Jérémiades in Flac\"/>Flac</a>
                -->
              &mdash; <b>18 novembre 2005 &raquo;</b> Jérémiades<br/>

                <!--
                <a href=\"".THEME."/../../../request.php?30\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Mystique in Mp3\"/>Mp3</a>
                <a href=\"".THEME."/../../../request.php?31\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Mystique in Ogg/Vorbis\"/>Ogg</a>
                <a href=\"".THEME."/../../../request.php?32\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Mystique in Flac\"/>Flac</a>
                -->
              &mdash; <b>25 novembre 2005 &raquo;</b> Mystique<br/>

                <!--
                <a href=\"".THEME."/../../../request.php?15\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Melalum in Mp3\"/>Mp3</a>
                <a href=\"".THEME."/../../../request.php?14\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Melalum in Ogg/Vorbis\"/>Ogg</a>
                <a href=\"".THEME."/../../../request.php?21\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Melalum in Flac\"/>Flac</a>
                -->
              &mdash; <b>2 decembre 2005 &raquo;</b> Melalum<br/>

                <!--
                <a href=\"".THEME."/../../../request.php?33\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download New Pirates in Mp3\"/>Mp3</a>
                <a href=\"".THEME."/../../../request.php?34\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download New Pirates in Ogg/Vorbis\"/>Ogg</a>
                <a href=\"".THEME."/../../../request.php?35\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download New Pirates in Flac\"/>Flac</a>
                -->
              &mdash; <b>9 decembre 2005 &raquo;</b> New Pirates<br/>

                <!--
                <a href=\"".THEME."/../../../request.php?13\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Culture and Co. in Mp3\"/>Mp3</a>
                <a href=\"".THEME."/../../../request.php?2\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Culture and Co. in Ogg/Vorbis\"/>Ogg</a>
                <a href=\"".THEME."/../../../request.php?22\"><img src=\"".THEME."images/tiny-audio-icon.png\" alt=\"Download Culture and Co. in Flac\"/>Flac</a>
                -->
              &mdash; <b>16 decembre 2005 &raquo;</b> Culture &amp; Co.<br/>

              </span>
            </div>
            <div class=\"rbbot\"><div></div></div>
          </div>

          {MENU=3}

          <div id=\"webButtons\">
            <p><img src=\"".THEME."images/cool-cavemen-button.png\" alt=\"Link us to your site with this button !\"/></p>
            <p><a href=\"http://www.nosoftwarepatents.com/fr/m/ev50/index.html\"><img src=\"".THEME."images/no-software-patents.png\" alt=\"No Software Patent !\"/></a></p>
            <p><a href=\"http://www.mozilla-europe.org/fr/products/firefox/\"><img src=\"".THEME."images/firefox.png\" alt=\"Get Firefox Now !\"/></a></p>
          </div>

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