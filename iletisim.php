


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/iletisim by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:31:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><title>
	İletişim
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><link rel="stylesheet" href="css/animate.css" /><link rel="stylesheet" href="css/et-lineicons.css" /><link rel="stylesheet" href="css/themify-icons.css" /><link rel="stylesheet" href="css/bootstrap.css" /><link rel="stylesheet" href="css/flexslider.css" /><link rel="stylesheet" href="css/style.css" />
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="/js/respond.min.js"></script>
    <![endif]-->


    <link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='32x32' /><link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='192x192' /><link rel='apple-touch-icon' href='img/recais/638034618139291350-6218-29FU.png' /><meta name='msapplication-TileImage' content='img/recais/638034618139291350-6218-29FU.png' />
<meta name="description" content="İletişim" /><meta name="keywords" content="İletişim" /></head>


<body>
    


    <!-- navbar start -->
<?php
include 'navbar.php';

?>
    <!-- navbar end -->




        <!-- Main Section -->
        <div id="doro-main">
            



    <!-- Contact -->
<?php
include 'database.php';


$sql = "SELECT * FROM contact_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="doro-contact">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="heading-meta">' . $row["heading_meta"] . '</span>
                            <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">' . $row["heading_title"] . '</h2>
                        </div>
                    </div>
                    <div class="map-section">
                    
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                                <iframe src="' . $row["iframe_src"] . '" style="border: 0; width: 100%; height: 450px;" aria-hidden="false" tabindex="0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInLeft">
                            <h3 class="doro-about-heading">İletişim Bilgileri</h3>
                            <p>Danışmak istediğiniz tüm sorularınız için her daim yardıma hazırız. Bizlerle iletişime geçmeniz yeterlidir.</p>
                            <p><i class="et-phone"></i>&nbsp;<a href="tel:' . $row["phone1"] . '">&nbsp;' . $row["phone1"] . '</a></p>
                            <p><i class="et-phone"></i>&nbsp;<a href="tel:' . $row["phone2"] . '">&nbsp;' . $row["phone2"] . '</a></p>
                            <p><i class="et-envelope"></i>&nbsp;<a href="mailto:' . $row["email"] . '">' . $row["email"] . '</a></p>
                            <p><i class="et-map-pin"></i>&nbsp;' . $row["address"] . '</p>
                    
               
              ';
    }
} else {
    echo "İletişim bilgileri bulunamadı";
}

$conn->close();

?>


<form class="" method="POST" action="formpost/new_post.php">

    <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" id="isim" name="isim" placeholder="Adınız Soyadınız *" required>
        </div>
        <div class="col-md-6 form-group">
            <input type="text" name="konu" id="konu" placeholder="Konu" required>
        </div>
        <div class="col-md-6 form-group">
            <input type="email" name="mail" placeholder="E-Mail Adresiniz *" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" id="mail" required>
        </div>
        <div class="col-md-6 form-group">
            <input type="text" id="gsm" name="gsm" placeholder="Telefon Numaranız *" required>
        </div>
        <div class="col-md-12 form-group">
            <textarea style="height: 80px;" name="mesaj" id="mesaj" placeholder="Mesajnız *" cols="30" required></textarea>
        </div>
        <div class="col-md-12 form-group">
            <div class="custom-control custom-checkbox mb-6">
                <input type="checkbox" name="kisisel_veri" class="custom-control-input" id="sozlesme_islenme_politika" required>
                <label class="custom-control-label custom-control-label-02 text-body" for="sozlesme_islenme_politika">
                    Kişisel Verilerin Korunması ve İşlenmesi Politikası Metni'ni okudum ve kabul ediyorum.
                    <a href="#data-view" data-toggle="modal" data-target="#exampleModal_islenme_view"> (Ayrıntılar)</a>
                </label>
            </div>
        </div>
        <div class="col-md-12 form-group">
            <div class="custom-control custom-checkbox mb-6">
                <input type="checkbox" name="kisisel_veri2" class="custom-control-input" id="sozlesme_aydinlatma_politika" required>
                <label class="custom-control-label custom-control-label-02 text-body" for="sozlesme_aydinlatma_politika">
                    Kişisel Verilerin Korunması ve İşlenmesi Genel Aydınlatma Metni'ni okudum ve kabul ediyorum.
                    <a href="#data-view" data-toggle="modal" data-target="#exampleModal_aydinlatma_view"> (Ayrıntılar)</a>
                </label>
            </div>
        </div>
        <div class="col-md-12 form-group">
            <button type="submit">Gönder</button>
            <span id="bilgi" class="form-text text-muted"></span>
        </div>
    </div>
</form>




            </div>
        </div>
    </div>
    </div>



    <!-- contact end -->

       
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
 

    
    <script type="text/javascript">

        function webFormContact() {
            var konu = document.getElementById("konu").value;
            var isim = document.getElementById("isim").value;
            var mail = document.getElementById("mail").value;
            var gsm = document.getElementById("gsm").value;
            var mesaj = document.getElementById("mesaj").value;
            var scryt_code_data = document.getElementById("scryt_code").value;

            document.getElementById("btnSend").disabled = true;
            if (document.getElementById("sozlesme_islenme_politika").checked == false && document.getElementById("sozlesme_aydinlatma_politika").checked == false) {
                document.getElementById("bilgi").innerHTML = "Lütfen KVKK bildirimlerimizi onaylayınız.";
                document.getElementById("btnSend").disabled = false;
            }
            else if (typeof isim === 'undefined' || isim === null || isim === '' || typeof gsm === 'undefined' || gsm === null || gsm === '' || typeof mesaj === 'undefined' || mesaj === null || mesaj === '') {
                document.getElementById("bilgi").innerHTML = "Lütfen tüm alanları doldurun.";
                document.getElementById("btnSend").disabled = false;
            }
            else {

                $.ajax({
                    type: "POST",
                    url: "default.aspx/GetFormData",
                    data: '{scryt_code: "' + scryt_code_data + '" ,isim: "' + isim + '" , mail: "' + mail + '" , gsm: "' + gsm + '" , konu: "' + konu + '" , mesaj: "' + mesaj + '" }',
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
                    document.getElementById("bilgi").innerHTML = "Kısa süre içerisinde bir form gönderdiniz.";
                    document.getElementById("btnSend").disabled = false;
                    document.getElementById("isim").value = "";
                    document.getElementById("mail").value = "";
                    document.getElementById("gsm").value = "";
                    document.getElementById("mesaj").value = "";
                    document.getElementById("konu").value = "";
                }
                else if (response.d == "1") {
                    document.getElementById("bilgi").innerHTML = "Mesajınız bizlere ulaştı, kısa süre içerisinde dönüş yapacağız.";
                    document.getElementById("btnSend").disabled = false;
                    document.getElementById("isim").value = "";
                    document.getElementById("mail").value = "";
                    document.getElementById("gsm").value = "";
                    document.getElementById("mesaj").value = "";
                    document.getElementById("konu").value = "";
                }
                else {
                    document.getElementById("bilgi").innerHTML = "Güvenlik Kodu hatalı.";
                    document.getElementById("btnSend").disabled = false;
                }
            }
        }
    </script>


    
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

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/iletisim by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:31:03 GMT -->
</html>
