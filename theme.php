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
$themeversion = "1.2";
$themeauthor = "Kevin Deldycke";
$themedate = "06/03/2005";
$themeinfo = "This theme, originally designed for the Cool Cavemen band website (www.coolcavemen.com) and released under the GNU General Public License (http://gnu.org), is the property of Kevin Deldycke (kevin@coolcavemen.com)";

// [layout]
$layout = "_default";

$logo = THEME."images/cool-cavemen.png";

$HEADER = "
  <div id=\"header\">
   <img id=\"cool_cavemen_logo\" src=\"".$logo."\" alt=\"Cool Cavemen\"/>
   <a href=\"http://www.ofon.org\"><img id=\"ofon_logo\" src=\"".THEME."images/ofon-logo.png\" alt=\"OfOn music community\"/></a>
   <ul id=\"tabnav\">
    {SITELINKS=flat}
   </ul>
  </div>

  <div class=\"clearall mozclear\"/>


        <div id=\"pageWrapper\">

            <div id=\"outerColumnContainer\">
                <div id=\"innerColumnContainer\">
                    <div id=\"SOWrap\">
                        <div id=\"middleColumn\">
                            <div class=\"inside\">

<!--- middle (main content) column begin -->

";


$FOOTER = "
<!--- middle (main content) column end -->

                                <hr class=\"hide\" />
                            </div>
                        </div>
                        <div id=\"leftColumn\">
                            <div class=\"inside\">

<!--- left column begin -->


    {MENU=2}
    <div>
     <p><img src=\"".THEME."images/cool-cavemen-button.png\" alt=\"If you want to create a link from your website to us, you'd better use this tiny button !\"/></p>
     <p><a href=\"http://www.mozilla-europe.org/fr/products/firefox/\"><img src=\"".THEME."images/firefox.gif\" alt=\"Get Firefox Now !\"/></a></p>
     <p><a href=\"http://www.nosoftwarepatents.com/fr/m/intro/index.html\"><img src=\"".THEME."images/nopatents.png\" alt=\"No Software Patent !\"/></a></p>
     <p><img src=\"".THEME."images/music.gif\" alt=\"Music related website\"/></p>
    </div>
    {MENU=3}




<!--- left column end -->

                                <hr class=\"hide\" />
                            </div>
                        </div>
                        <div class=\"clearall mozclear\"></div>
                    </div>
                    <div id=\"rightColumn\">
                        <div class=\"inside\">

<!--- right column begin -->

<p>
    A shameless self plug:<br />
    <a href=\"http://webhost.bridgew.edu/etribou/layouts/skidoo_too/gargoyles/index.html\">Skidoo Too : Gargoyles</a>
    is a modified version of this layout. It has some nifty features that you might be interested
    in investigating.
</p>
<p>
    If you've ever thought about looking to make a donation to Ruthsarian Layouts,
    you'll want to <a href=\"http://webhost.bridgew.edu/etribou/layouts/skidoo_too/gargoyles/index.html\">check out
    Skidoo Too : Gargoyles</a>.
</p>
<p>
    And if you've ever thought that anyone looking to donate money for a CSS-based layout
    is just really crazy,
    you'll want to <a href=\"http://webhost.bridgew.edu/etribou/layouts/skidoo_too/gargoyles/index.html\">check out
    Skidoo Too : Gargoyles</a>.
</p>

<!--- right column end -->

                            <hr class=\"hide\" />
                        </div>
                    </div>
                    <div class=\"clearall mozclear\"></div>
                </div>
            </div>
            <div id=\"footer\" class=\"inside\">

<!-- footer begin -->


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
    <br/><a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\"><img src=\"".THEME."images/creative-commons-licensed.gif\" alt=\"Original material (text, audio, image, video) under Creative Commons by-nc-nd licence\"/></a><br/>
    Les <a  href=\"".THEME."/../../../download.php\">créations originales</a> (textes, <a href=\"".THEME."/../../../download.php?list.6\">musiques</a>, <a href=\"".THEME."/../../../download.php?list.9\">images</a> et vidéos) présentes sur ce site sont mises à disposition sous un <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/2.0/fr/\">contrat Creative Commons by-nc-nd</a>. La paternité des oeuvres dont l'auteur est désigné par \"Cool Cavemen\" revient à <a href=\"".THEME."/../../../user.php?id.14\">G.Deroubaix</a>, <a href=\"".THEME."/../../../user.php?id.4\">T.Haydock</a>, <a href=\"".THEME."/../../../user.php?id.8\">M.Jankowski</a>, <a href=\"".THEME."/../../../user.php?id.5\">T.Jankowski</a> et <a href=\"".THEME."/../../../user.php?id.7\">V.Pouliquen</a>.
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

<!-- footer end -->

            </div>
        </div>




";


// [newsstyle]
$NEWSSTYLE = "
    <div class=\"box-border\">
     <h1>{NEWSTITLE}</h1>
     <div class=\"box-body\">
      <span class=\"details\">{NEWSDATE}, par {NEWSAUTHOR} | {NEWSCOMMENTS} | {ADMINOPTIONS} {EMAILICON}</span><br/>
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
    echo "<h1>".$caption."</h1>";
  }
  if($text != ""){
    echo "<div class=\"box-body\">".$text."</div>";
  }
  echo "</div>";
}

?>