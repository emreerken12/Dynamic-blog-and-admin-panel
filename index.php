


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
    
 
    <!-- navbar start -->

<?php

include 'navbar.php';
?>


    <!-- navbar end -->



    

        <!-- Main Section -->
        <div id="doro-main">
            

<!-- slider başlangıç -->

<?php

include 'database.php';

$sql = "SELECT * FROM slider_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Slider HTML'ini başlat
    echo '
    <aside id="doro-hero" class="js-fullheight">
        <!-- Slider -->
        <div class="flexslider js-fullheight">
            <ul class="slides">
    ';

    // Verileri kullanarak slider öğelerini oluşturma
    while($row = $result->fetch_assoc()) {
        echo '
        <li style="background-image: url(' . $row["image_url"] . ');">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1>' . $row["title"] . '</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        ';
    }

    // Slider HTML'ini kapat
    echo '
            </ul>
        </div>
    </aside>
    ';
} else {
    echo "Veri bulunamadı";
}

$conn->close();
?>






<!-- slider son -->
    



<!-- projelerimiz başlangıç -->


<!-- <?php
include 'database.php';

// Verileri çekme
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Projeler HTML'ini başlat
    echo '
    <div class="doro-recent-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <span class="heading-meta">PROJELERİMİZ</span>
                    <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">PROJELERİMİZ</h2>
                </div>
            </div>
            <div class="row">
    ';

    // Verileri kullanarak proje öğelerini oluşturma
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
            <a href="' . $row["project_link"] . '" class="desc">
                <div class="project">
                    <img src="' . $row["project_image_url"] . '" class="img-fluid" alt="' . $row["project_name"] . '" />
                    <div class="desc">
                        <div class="con">
                            <h3>' . $row["project_name"] . '</h3>
                            <span>
                                ' . $row["project_description"] . '
                                <button type="button" class="proje_btn lead" onclick="javascript:location.href=\'' . $row["project_category_link"] . '\'">
                                    ' . $row["project_category_name"] . ' <i class="ti-shift-right-alt"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
            </div>
    </div>
      </div>
 </div>
        ';
    }

    // Projeler HTML'ini kapat
    echo '
            </div>
        </div>
    </div>
    </div>
      </div>
 </div>
 
   
    ';
} else {
    echo "Veri bulunamadı";
}

$conn->close();
?> -->
 
     
  
         <!--    Recent Projects -->
<!-- projelerimiz son -->


            


    
            <!-- Blog -->
             <?php
             include 'database.php';
             $sql = "SELECT * FROM combined_services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo '<div class="doro-blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <span class="heading-meta">HİZMETLERİMİZ</span>
                    <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">HİZMETLERİMİZ</h2>
                </div>
            </div>
            <div class="row">';

// Her bir hizmet için döngü
while($row = $result->fetch_assoc()) {
    echo '<div class="col-md-4 col-sm-12">
            <div class="blog-entry animate-box" data-animate-effect="fadeInLeft">
                <a href="' . $row["detail_url"] . '" class="blog-img">
                    <img src="./admin_panel/dark/posts/'. $row["image_url"] . '" alt="' . $row["image_alt"] . '" class="img-fluid" />
                </a>
                <div class="desc" style="padding-left:5px;">
                    <h3><a href="' . $row["detail_url"] . '">' . $row["title"] . '</a></h3>
                    <p>' . substr($row["description"],0,250) . '...</p>
                    <p><a href="' . $row["detail_url"] . '" class="lead">Detaylı Bilgi <i class="ti-shift-right-alt"></i></a></p>
                </div>
            </div>
          </div>';
}

echo    '</div>
        </div>
      </div>';
} else {
echo "Hizmetler bulunamadı";
}

$conn->close();
             
             ?>


        <!--- aaaaaaaaaaa !-->
        
 <!--</div>!-->        
 
            <!-- Footer start -->
        <?php
       include 'footer.php';
        
        ?>

<!-- footer end -->



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