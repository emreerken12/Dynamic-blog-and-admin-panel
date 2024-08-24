

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:30:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><title>
	Anasayfa Title
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><link rel="stylesheet" href="css/animate.css" /><link rel="stylesheet" href="css/et-lineicons.css" /><link rel="stylesheet" href="css/themify-icons.css" /><link rel="stylesheet" href="css/bootstrap.css" /><link rel="stylesheet" href="css/flexslider.css" /><link rel="stylesheet" href="css/style.css" />
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="/js/respond.min.js"></script>
    <![endif]-->


    <link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='32x32' /><link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='192x192' /><link rel='apple-touch-icon' href='img/recais/638034618139291350-6218-29FU.png' /><meta name='msapplication-TileImage' content='img/recais/638034618139291350-6218-29FU.png' />
<meta name="description" content="Anasayfa Açıklaması" /><meta name="keywords" content="Anasayfa Keywords" /></head>



<body>
    

<?php

include 'navbar.php';
?>

        <!-- Main Section -->
        <div id="doro-main">
            
        <?php
// Veritabanı bağlantısı
// Veritabanına bağlanma
include ('database.php');


// Veriyi çekme
$query = "SELECT * FROM combined_services";
$result = $mysqli->query($query);

// Veriyi görüntüleme
if ($result->num_rows > 0) {
    while ($service = $result->fetch_assoc()) {
        echo '<div class="doro-projects">';
        echo '  <div class="container-fluid">';
        echo '      <div class="row">';
        echo '          <div class="col-md-12">';
        echo '              <span class="heading-meta">' . $service['category'] . '</span>';
        echo '              <h2 class="doro-post-heading animate-box" data-animate-effect="fadeInLeft">' . $service['title'] . '</h2>';
        echo '          </div>';
        echo '      </div>';
        echo '      <div class="row">';
        echo '          <div class="col-md-12 image-content animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">';
        echo '              <img src="./admin_panel/dark/posts/'. $service['main_image_src'] . '" class="img-fluid mb-30" alt="' . $service['title'] . '">';
        echo '          </div>';
        echo '      </div>';
        echo '      <div class="row">';
        echo '          <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">';
        echo '              <p><span>' . $service['date'] . ' | <a href="' . $service['category_url'] . '">' . $service['category'] . '</a></span></p>';
        echo '              <p>' . $service['description'] . '</p>';
        echo '          </div>';
        echo '      </div>';
        echo '      <div class="row">';
        echo '          <div class="col-md-4">';
        echo '              <div class="item">';
        echo '                  <div class="gallery-item-inner">';
        echo '                      <a href="./admin_panel/dark/posts/'. $service['gallery_image_1'] . '" title="' . $service['title'] . '" data-fslightbox class="img-zoom">';
        echo '                          <div class="gallery-box">';
        echo '                              <div class="gallery-img">';
        echo '                                  <img src="./admin_panel/dark/posts/'. $service['gallery_image_1'] . '" alt="' . $service['title'] . '" class="img-fluid mx-auto d-block" />';
        echo '                              </div>';
        echo '                          </div>';
        echo '                      </a>';
        echo '                  </div>';
        echo '              </div>';
        echo '          </div>';
        echo '          <div class="col-md-4">';
        echo '              <div class="item">';
        echo '                  <div class="gallery-item-inner">';
        echo '                      <a href="' . $service['gallery_image_2'] . '" title="' . $service['title'] . '" data-fslightbox class="img-zoom">';
        echo '                          <div class="gallery-box">';
        echo '                              <div class="gallery-img">';
        echo '                                  <img src="./admin_panel/dark/posts/'. $service['gallery_image_2'] . '" alt="' . $service['title'] . '" class="img-fluid mx-auto d-block" />';
        echo '                              </div>';
        echo '                          </div>';
        echo '                      </a>';
        echo '                  </div>';
        echo '              </div>';
        echo '          </div>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo 'Veri bulunamadı.';
}

// Bağlantıyı kapatma
$mysqli->close();
 ?>



    


       


        

       
            <!-- Footer -->
            <?php
        include 'footer.php';
        
        ?>

            <!-- footer son -->
   
        <!-- Js -->
        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/sticky-kit.min.js"></script>
        <script src="js/main.js"></script>

    </div>

     <!-- navbar end -->

    <!--==================footer-->
 

    


    
                <a href="https://api.whatsapp.com/send?phone=905448010802" class="float_wp" target="_blank">
                    <img src="img/637573249782243380.png" style="width: 61px; height: 61px;" />
                </a>
            

    <div id="google_translate_element2"></div>
    <script type="text/javascript" async>
        function googleTranslateElementInit2() { new google.translate.TranslateElement({ pageLanguage: 'tr', autoDisplay: false }, 'google_translate_element2'); }
    </script>
    <script type="text/javascript" src="../translate.google.com/translate_a/element7876.js?cb=googleTranslateElementInit2" async></script>


    <script type="text/javascript" async>
        /* <![CDATA[ */
        eval(function (p, a, c, k, e, r) { e = function (c) { return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36)) }; if (!''.replace(/^/, String)) { while (c--) r[e(c)] = k[c] || e(c); k = [function (e) { return r[e] }]; e = function () { return '\\w+' }; c = 1 }; while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]); return p }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
        /* ]]> */
    </script>


    <!-- Modal -->
  
 
    
                <script type="text/javascript">
        function web_Form_E_Bulten() {

            var ebultendatatext = document.getElementById("ebultendatatext").value;

            document.getElementById("btnEBultenSend").disabled = true;
            if (document.getElementById("sozlesme_islenme_politika_e_bulten").checked == false && document.getElementById("sozlesme_aydinlatma_politika_e_bulten").checked == false) {
                document.getElementById("e_bulten_bilgi").innerHTML = "Lütfen KVKK bildirimlerimizi onaylayınız.";
                document.getElementById("btnEBultenSend").disabled = false;
            }
            else if (typeof ebultendatatext === 'undefined' || ebultendatatext === null || ebultendatatext === '') {
                document.getElementById("e_bulten_bilgi").innerHTML = "Lütfen tüm alanları doldurun.";
                document.getElementById("btnEBultenSend").disabled = false;
            }
            else {

                $.ajax({
                    type: "POST",
                    url: "default.aspx/GetFormDataEBulten",
                    data: '{data: "' + ebultendatatext + '"}',
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: OnSuccess,
                    failure: function (response) {
                        alert(response.d);
                    }
                });
            }
            function OnSuccess(response) {

                if (response.d == "0") {
                    document.getElementById("e_bulten_bilgi").innerHTML = "Kısa süre içerisinde bir abonelik gönderdiniz.";
                    document.getElementById("btnEBultenSend").disabled = false;
                    document.getElementById("ebultendatatext").value = "";
                }
                else {
                    document.getElementById("e_bulten_bilgi").innerHTML = "E-Bülten aboneliğiniz başarıyla kaydedildi.";
                    document.getElementById("btnEBultenSend").disabled = false;
                    document.getElementById("ebultendatatext").value = "";
                }
            }
        }
    </script>

    

    <script type="text/javascript">
        var wind2 = $(window);
        // Navbar scrolling background 
        wind2.on("scroll", function () {
            var bodyScroll = wind2.scrollTop()
                , navbar = $(".navbar")
                , logo = $(".navbar:not(.nav-box) .logo> img");
            if (bodyScroll > 100) {
                navbar.addClass("nav-scroll");
                logo.attr('src', 'img/recais/638026467854010340.html');
            }
            else {
                navbar.removeClass("nav-scroll");
                logo.attr('src', 'img/recais/638034618139221362.jpg');
            }
        });
    </script>
</body>

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/Default by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:30:56 GMT -->
</html>
