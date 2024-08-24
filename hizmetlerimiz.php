


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/hizmetlerimiz by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:30:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><title>
	Hizmetlerimiz
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><link rel="stylesheet" href="css/animate.css" /><link rel="stylesheet" href="css/et-lineicons.css" /><link rel="stylesheet" href="css/themify-icons.css" /><link rel="stylesheet" href="css/bootstrap.css" /><link rel="stylesheet" href="css/flexslider.css" /><link rel="stylesheet" href="css/style.css" />
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="/js/respond.min.js"></script>
    <![endif]-->


    <link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='32x32' /><link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='192x192' /><link rel='apple-touch-icon' href='img/recais/638034618139291350-6218-29FU.png' /><meta name='msapplication-TileImage' content='img/recais/638034618139291350-6218-29FU.png' />
<meta name="description" content="Hizmetlerimiz" /><meta name="keywords" content="Hizmetlerimiz" /></head>


<body>
    


  <!-- navbar start -->
   <?php
include 'navbar.php';

?>

  <!-- navbar end -->
        <!-- Main Section -->
        <div id="doro-main">
            


    
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
    <!-- blog end -->

       
            <!-- Footer -->
    <?php
    
    include 'footer.php';
    
    ?>
<!-- Js -->
        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/sticky-kit.min.js"></script>
        <script src="js/main.js"></script>
<!-- footer end -->
          
        

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

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/hizmetlerimiz by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:31:00 GMT -->
</html>
