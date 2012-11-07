<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-carousel.js"></script>
<script src="/assets/js/jquery.contenthover.js" type="text/javascript"></script>
<script src="/assets/js/jquery.scrollto.js" type="text/javascript"></script>
<script type="text/javascript">
var addthis_config =
{
data_track_addressbar: false,
services_compact: 'tumblr,pinterest_share,facebook,twitter',
services_expand: 'tumblr,pinterest_share,facebook,twitter',
services_exclude: '100zakladok, 2tag, 2linkme, 7live7, a1webmarks, a97abi, addio, addressbar, adfty, adifni, aerosocial, aim, amazonwishlist, amenme, aolmail, armenix, arto, apsense, aviary, azadegi, baang, baidu, beat100, bebo, bentio, biggerpockets, bizsugar, bland, blinklist, bleetbox, blip, blogger, bloggy, blogkeen, blogmarks, blogtrottr, blurpalicious, boardlite, bobrdobr, bolt, bonzobox, bookmarkycz, bookmerkende, bordom, box, brainify, bryderi, buddymarks, buffer, buzzzy, camyoo, cardthis, care2, chimein, chiq, cirip, citeulike, classicalplace, cleanprint, cleansave, clipdo, cndig, colivia, cosmiq, connotea, cootopia, curateus, dashboard, delicious, designbump, designmoo, digaculturanet, digg, diggita, diglog, digo, digthiswebhost, digzign, diigo, dipdive, domaintoolswhois, domelhor, dosti, dotnetkicks, dotnetshoutout, douban, draugiem, drimio, dropjack, dudu, dwellicious, dzone, edelight, efactor, ekudos, elefantapl, email, embarkons, eucliquei, evernote, extraplay, ezyspot, fabulously40, favlogde, fark, farkinda, fashiolista, fashionburner, faves, favable, favoritende, favorites, favoritus, flaker, flosspro, folkd, followtags, forceindya, formspring, formspring, fresqui, friendfeed, friendster, funp, fwisp, gabbr, gacetilla, gamekicker, gigbasket, givealink, globalgrind, gluvsnap, gmail, goodnoows, google, google_plusone, google_plusone_share, googlebuzz, googletranslate, govn, gravee, greaterdebater, grono, grumper, habergentr, hackernews, hadashhot, hatena, hazarkor, hedgehogs, hellotxt, hipstr, historious, hitmarks, hotbookmark, hotklix, hotmail, hyves, idearef, identica, idibbit, ihavegot, index4, indexor, informazione, instapaper, investorlinks, iorbix, isociety, iwiw, jamespot, jappy, joliprint, jolly, jumptags, kaboodle, kaevur, kaixin, ketnooi, kindleit, kipup, kirtsy, kledy, kommenting, latafaneracat, laaikit, ladenzeile, librerio, link, linkedin, linkninja, linkagogo, linksgutter, linkshares, linkuj, live, livefavoris, livejournal, lockerblogger, logger24, lynki, mailto, markme, mashbord, mawindo, meccho, bitly, mekusharim, memonic, memori, mendeley, meneame, menu, mindbodygreen, misterwong, mixx, moemesto, moikrug, mototagz, mrcnetworkit, me2day, meinvz, multiply, myaol, myhayastan, mylinkvault, mymailru, myspace, n4g, naszaklasa, netlog, netvibes, netvouz, newsmeback, newstrust, newsvine, nujij, odnoklassniki_ru, oknotizie, oneview, ongobee, orkut, osmosus, oyyla, packg, pafnetde, pdfonline, pdfmyurl, phonefavs, pimpthisblog, pingfm, planypus, plaxo, plurk, pochvalcz, pocket, politicnote, popedition, posteezy, posterous, pratiba, print, printfriendly, pusha, qrsrc, qrfin, quantcast, qzone, raiseyourvoice, readitlater, reddit, rediff, redkum, researchgate, ridefix, safelinking, scoopat, scoopit, segnalo, sekoman, select2gether, sharer, shaveh, shetoldme, shirintar, simpy, sinaweibo, skyrock, slashdot, smiru, socialbookmarkingnet, sodahead, sonico, speedtile, sphinn, spinsnap, spokentoyou, sportpost, yiid, springpad, spruzer, squidoo, startaid, startlap, storyfollower, studivz, stuffpit, stumbleupon, stumpedia, stylehive, stylishhome, supbro, surfingbird, svejo, symbaloo, taaza, tagvn, tagza, taringa, tarpipe, technerd, tellmypolitician, thefreedictionary, thewebblend, thinkfinity, thisnext, throwpile, tipd, toly, topsitelernet, transferr, tuenti, tulinq, tusul, tvinx, tweetmeme, twitthis, typepad, upnews, urlaubswerkde, urlcapt, viadeo, virb, visitezmonsite, vk, vkrugudruzei, voxopolis, vybralisme, vyoom, w3validator, webnews, webshare, werkenntwen, windycitizen, wirefan, wordpress, worio, woscc, wykop, xanga, xing, yahoobkm, yahoomail, yammer, yardbarker, yemle, yigg, yookos, yoolink, yorumcuyum, youblr, youbookmarks, youmob, yuuby, zakladoknet, zanatic, zanatic, ziczac, zingme, zizac, zooloo, zootool, zukmo'
};
</script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-507c44304467c88e"></script>
</body>

<script type="text/javascript">
$(document).ready(function() {

  if (!isMobile()) {
    $('#first, #second, #third').contenthover({
        effect: 'slide',
        slide_direction: 'right',
        overlay_x_position: 'right',
        overlay_y_position: 'center',
        overlay_background: 'rgba(0, 0, 0, 0.5)',
        overlay_opacity: 0.8
    });
  }
  else {
    /* prepend menu icon */
    $('#mobileNavWrap').prepend('<div id="menu-icon">Menu</div>');
    
    /* toggle nav */
    $("#menu-icon").on("click", function(){
      $("#mobileNavContainer").slideToggle();
      $(this).toggleClass("active");
    });

  }

 $(".carousel").carousel();

 
 $(function() {
    $(window).scroll(function() {
      if (isMobile()) {
        if($(this).scrollTop() != 0) {
          $('#toTop').fadeIn(); 
        } else {
          $('#toTop').fadeOut();
        }
      }
    });
   
    $('#toTop').click(function() {
      $('body,html').animate({scrollTop:0},800);
    }); 
  });
});

function isMobile(){
  return $(window).width() <= 640;
}
</script>