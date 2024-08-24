


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/kurumsal by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:30:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><title>
	Kurumsal
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><link rel="stylesheet" href="css/animate.css" /><link rel="stylesheet" href="css/et-lineicons.css" /><link rel="stylesheet" href="css/themify-icons.css" /><link rel="stylesheet" href="css/bootstrap.css" /><link rel="stylesheet" href="css/flexslider.css" /><link rel="stylesheet" href="css/style.css" />
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="/js/respond.min.js"></script>
    <![endif]-->


    <link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='32x32' /><link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='192x192' /><link rel='apple-touch-icon' href='img/recais/638034618139291350-6218-29FU.png' /><meta name='msapplication-TileImage' content='img/recais/638034618139291350-6218-29FU.png' />
<meta name="description" content="Kurumsal" /><meta name="keywords" content="Kurumsal" /></head>


<body>
    


   <?php
   
   include 'navbar.php';
   
   ?>

        <!-- Main Section -->
        <div id="doro-main">
            

  

     
    
                    <!-- About Us -->
 <?php
 
 include 'database.php';
 // Verileri çekme
$sql = "SELECT * FROM about_us_kurumsal LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Verileri kullanarak about bölümünü oluşturma
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="doro-about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <span class="heading-meta">' . $row["heading_meta"] . '</span>
                        <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">
                            ' . $row["heading"] . '
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="./admin_panel/dark/posts/'. $row["image_url"] . '" class="img-fluid mb-30 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft" alt="' . $row["image_alt"] . '">
                    </div>
                    <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">' . $row["subheading"] . '</span>
                        <h3 class="doro-about-heading">' . $row["about_heading"] . '</h3>
                        <p>' . $row["about_text"] . '</p>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
} else {
    echo "Veri bulunamadı";
}

$conn->close();
?>
 
 
             <!-- about-style-four --> 
         

    
        <!-- Our Team start -->
      <!-- <?php

//       include 'database.php';

// $sql = "SELECT * FROM team_members_kurumsal";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo '<div class="doro-team">
//             <div class="container-fluid">
//                 <div class="row">
//                     <div class="col-md-12">
//                         <span class="heading-meta">TEAM</span>
//                         <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">EKİP ÜYELERİMİZ</h2>
//                     </div>
//                 </div>
//                 <div class="row">';

//     // Her bir takım üyesi için döngü
//     while($row = $result->fetch_assoc()) {
//         echo '<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
//                 <div class="team">
//                     <img src="' . $row["image_url"] . '" alt="' . $row["image_alt"] . '" class="img-fluid" />
//                     <div class="desc">
//                         <div class="con">
//                             <h3><a href="#team-details">' . $row["name"] . '</a></h3>
//                             <span>' . $row["position"] . '</span>
//                             <p>' . $row["description"] . '</p>
//                             <p class="icon">';
//                             if ($row["facebook_url"]) {
//                                 echo '<span><a href="' . $row["facebook_url"] . '"><i class="ti-facebook"></i></a></span>';
//                             }
//                             if ($row["instagram_url"]) {
//                                 echo '<span><a href="' . $row["instagram_url"] . '"><i class="ti-instagram"></i></a></span>';
//                             }
//                             if ($row["twitter_url"]) {
//                                 echo '<span><a href="' . $row["twitter_url"] . '"><i class="ti-twitter"></i></a></span>';
//                             }
//                             if ($row["linkedin_url"]) {
//                                 echo '<span><a href="' . $row["linkedin_url"] . '"><i class="ti-linkedin"></i></a></span>';
//                             }
//                             if ($row["pinterest_url"]) {
//                                 echo '<span><a href="' . $row["pinterest_url"] . '"><i class="ti-pinterest"></i></a></span>';
//                             }
//         echo               '</p>
//                         </div>
//                     </div>
//                 </div>
//               </div>';
//     }

//     echo    '</div>
//             </div>
//           </div>';
// } else {
//     echo "Takım üyeleri bulunamadı";
// }

// $conn->close();
?> -->
    

<!-- our team end -->
       
            <!-- Footer -->
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

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/kurumsal by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:30:57 GMT -->
</html>
