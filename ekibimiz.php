


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/ekibimiz by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:31:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><title>
	Ekibimiz
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><link rel="stylesheet" href="css/animate.css" /><link rel="stylesheet" href="css/et-lineicons.css" /><link rel="stylesheet" href="css/themify-icons.css" /><link rel="stylesheet" href="css/bootstrap.css" /><link rel="stylesheet" href="css/flexslider.css" /><link rel="stylesheet" href="css/style.css" />
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="/js/respond.min.js"></script>
    <![endif]-->


    <link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='32x32' /><link rel='icon' href='img/recais/638034618139291350-6218-29FU.png' sizes='192x192' /><link rel='apple-touch-icon' href='img/recais/638034618139291350-6218-29FU.png' /><meta name='msapplication-TileImage' content='img/recais/638034618139291350-6218-29FU.png' />
<meta name="description" content="Ekibimiz" /><meta name="keywords" content="Ekibimiz" /></head>


<body>
    

<?php

include 'navbar.php';

?>


        <!-- Main Section -->
        <div id="doro-main">
            



    
            <!-- Our Team -->
            <?php

      include 'database.php';

$sql = "SELECT * FROM team_members_kurumsal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="doro-blog">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <span class="heading-meta">TEAM</span>
                        <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">EKİP ÜYELERİMİZ</h2>
                    </div>
                </div>
                <div class="row">';

    // Her bir takım üyesi için döngü
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <div class="team">
                    <img src="./admin_panel/dark/posts/'. $row["image_url"] . '" alt="' . $row["image_alt"] . '" class="img-fluid" />
                    <div class="desc">
                        <div class="con">
                            <h3><a href="#team-details">' . $row["name"] . '</a></h3>
                            <span>' . $row["position"] . '</span>
                            <p>' . $row["description"] . '</p>
                            <p class="icon">';
                            if ($row["facebook_url"]) {
                                echo '<span><a href="' . $row["facebook_url"] . '"><i class="ti-facebook"></i></a></span>';
                            }
                            if ($row["instagram_url"]) {
                                echo '<span><a href="' . $row["instagram_url"] . '"><i class="ti-instagram"></i></a></span>';
                            }
                            if ($row["twitter_url"]) {
                                echo '<span><a href="' . $row["twitter_url"] . '"><i class="ti-twitter"></i></a></span>';
                            }
                            if ($row["linkedin_url"]) {
                                echo '<span><a href="' . $row["linkedin_url"] . '"><i class="ti-linkedin"></i></a></span>';
                            }
                            if ($row["pinterest_url"]) {
                                echo '<span><a href="' . $row["pinterest_url"] . '"><i class="ti-pinterest"></i></a></span>';
                            }
        echo               '</p>
                        </div>
                    </div>
                </div>
              </div>';
    }

    echo    '</div>
            </div>
          </div>';
} else {
    echo "Takım üyeleri bulunamadı";
}

$conn->close();
?>
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
    <div class="modal fade" id="exampleModalLang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLangLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLangLabel" style="color: #000;">DİL SEÇİMİ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                            <a style="color: #000;" class="dropdown-item" href="#lang" data-dismiss="modal" onclick="doGTranslate('tr|tr');return false;">

                                <img src="img/recais/637851119007055211.png" alt="Türkçe" style="width: 18px; height: 12px;" />
                                TÜRKÇE

                            </a>
                        
                            <a style="color: #000;" class="dropdown-item" href="#lang" data-dismiss="modal" onclick="doGTranslate('tr|en');return false;">

                                <img src="img/recais/637851119243245939.png" alt="İngilizce" style="width: 18px; height: 12px;" />
                                İNGİLİZCE

                            </a>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    
            <div class="modal fade bd-example-modal-lg" id="exampleModal_islenme_view" tabindex="-1" role="dialog" aria-labelledby="exampleModal_islenme_viewLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal_islenme_viewLabel">Kişisel Verilerin Korunması ve İşlenmesi Politikası Metni</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="font-size-12 font-size-md-14">
        <strong>1. AMAÇ VE KAPSAM</strong>
                    <p>ARTVİAS Kişisel Verilerin İşlenmesi ve Korunması Politikası (“<strong>ARTVİAS KVK Politikası</strong>”) ile ARTVİAS tarafından kişisel verilerin korunmasında ve işlenmesinde benimsenen ilkeler düzenlenmektedir.</p>

                    <p>ARTVİAS’un, kişisel verilerin korunmasına verdiği önem doğrultusunda, ARTVİAS KVK Politikası ile ARTVİAS ve iş ortakları tarafından yürütülen faaliyetlerin 6698 sayılı Kişisel Verilerin Korunması Kanunu’nda (“<strong>KVK Kanunu</strong>”) yer alan düzenlemelere uyumuna ilişkin temel prensipler belirlenmekte ve bu kapsamda ARTVİAS’un yerine getirmesi gerekenler ortaya konulmaktadır. ARTVİAS KVK Politikası düzenlemelerinin uygulanması ile ARTVİAS’un benimsediği veri güvenliği ilkeleri sürdürülebilir kılınmış olacaktır.<br>
                    &nbsp;</p>
                    <strong>2. HEDEF</strong>

                    <p>ARTVİAS;şirket bünyesinde kişisel verilerin korunması konusunda farkındalığın oluşması için gerekli sistemi oluşturmalı ve iç işleyişlerinin kişisel verilerin korunması ve işlenmesi mevzuatına uyumunu temin etmek için gereken düzeni kurmalıdır.</p>

                    <p>ARTVİAS KVK Politikası, KVK Kanunu ve ilgili mevzuat ile ortaya konulan düzenlemelerin uygulanması bakımından yol gösterme amacı taşımaktadır. ARTVİAS KVK Politikası ile, ARTVİAS tarafından önem verilen, KVK Kanunu’na uyum sürecinin benimsenmesinin ve özenle yürütülmesinin temini hedeflenmektedir.<br>
                    &nbsp;</p>

                    <p><strong>3. TANIMLAR&nbsp;</strong></p><br>

                    <p>ARTVİAS KVK Politikası’nda kullanılan ve önem teşkil eden tanımlar aşağıda yer almaktadır:</p>

                    <table border="1" cellpadding="7" cellspacing="0" style="width:652px">
                        <tbody>
                            <tr>
                                <td>
                                <p><strong>Açık Rıza</strong></p>
                                </td>
                                <td>
                                <p>Belirli bir konuya ilişkin, bilgilendirilmeye dayanan ve özgür iradeyle açıklanan rıza.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Anonim Hale Getirme</strong></p>
                                </td>
                                <td>
                                <p>Kişisel verinin, başka verilerle eşleştirilerek dahi hiçbir surette kimliği belirli veya belirlenebilir bir gerçek kişiyle ilişkilendirilemeyecek hale getirilmesi.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Aydınlatma Yükümlülüğünün Yerine Getirilmesinde Uyulacak Usul ve Esaslar Hakkında Tebliğ</strong></p>
                                </td>
                                <td>
                                <p>10 Mart 2018 tarihli ve 30356 sayılı Resmi Gazete’de yayımlanarak yürürlüğe giren Aydınlatma Yükümlülüğünün Yerine Getirilmesinde Uyulacak Usul ve Esaslar Hakkında Tebliğ.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Çalışan KVK Politikası</strong></p>
                                </td>
                                <td>
                                <p>ARTVİAS çalışanlarının kişisel verilerinin korunmasına ve işlenmesine ilişkin ilkelerin düzenlendiğ “ARTVİAS YAZILIM Çalışanları Kişisel Verilerin Korunması ve İşlenmesi Politikası”.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Kişisel Sağlık Verilerinin İşlenmesine ilişkin Yönetmelik</strong></p>
                                </td>
                                <td>
                                <p>20 Ekim 2016 tarihli ve 29863 sayılı Resmi Gazete’de yayımlanan, Kişisel Sağlık Verilerinin İşlenmesi ve Mahremiyetinin Sağlanması Hakkında Yönetmelik.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Kişisel Sağlık Verisi</strong></p>
                                </td>
                                <td>
                                <p>Kimliği belirli ya da belirlenebilir gerçek kişinin fiziksel ve ruhsal sağlığına ilişkin her türlü bilgi ile kişiye sunulan sağlık hizmetiyle ilgili bilgi.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Kişisel Veri</strong></p>
                                </td>
                                <td>
                                <p>Kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her türlü bilgi.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Kişisel Veri Sahibi</strong></p>
                                </td>
                                <td>
                                <p>Kişisel verisi işlenen gerçek kişi. Örneğin; Müşteriler ve çalışanlar.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Kişisel Verileri Koruma Birimi</strong></p>
                                </td>
                                <td>
                                <p>ARTVİAS tarafından, kişisel verilerin korunması mevzuatına uygunluğun sağlanması, muhafazası ve sürdürülmesi kapsamında Şirket bünyesinde gerekli koordinasyonu sağlayacak olan birim.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Kişisel Verilerin İşlenmesi</strong></p>
                                </td>
                                <td>
                                <p>Kişisel verilerin tamamen veya kısmen otomatik olan ya da herhangi bir veri kayıt sisteminin parçası olmak kaydıyla otomatik olmayan yollarla elde edilmesi, kaydedilmesi, depolanması, muhafaza edilmesi, değiştirilmesi, yeniden düzenlenmesi, açıklanması, aktarılması, devralınması, elde edilebilir hale getirilmesi, sınıflandırılması ya da kullanılmasının engellenmesi gibi veriler üzerinde gerçekleştirilen her türlü işlem.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>KVK Kanunu</strong></p>
                                </td>
                                <td>
                                <p>7 Nisan 2016 tarihli ve 29677 sayılı Resmi Gazete’de yayımlanan, 24 Mart 2016 tarihli ve 6698 sayılı Kişisel Verilerin Korunması Kanunu.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>KVK Kurulu</strong></p>
                                </td>
                                <td>
                                <p>Kişisel Verileri Koruma Kurulu.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>KVK Kurumu</strong></p>
                                </td>
                                <td>
                                <p>Kişisel Verileri Koruma Kurumu.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Özel Nitelikli Kişisel Veri</strong></p>
                                </td>
                                <td>
                                <p>Irk, etnik köken, siyasi düşünce, felsefi inanç, din, mezhep veya diğer inançlar, kılık kıyafet, dernek vakıf ya da sendika üyeliği, sağlık, cinsel hayat, ceza mahkûmiyeti ve güvenlik tedbirleriyle ilgili veriler ile biyometrik ve genetik veriler.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>ARTVİAS / Şirket</strong></p>
                                </td>
                                <td>
                                <p>ARTVİAS YAZILIM</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>ARTVİAS İş Ortakları</strong></p>
                                </td>
                                <td>
                                <p>ARTVİAS’in ticari faaliyetlerini yürütürken çeşitli amaçlarla iş ortaklığı kurduğu taraflar.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>ARTVİAS KVK Politikası</strong></p>
                                </td>
                                <td>
                                <p>ARTVİAS YAZILIM Kişisel Verilerin Korunması ve İşlenmesi Politikası.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>ARTVİAS Tedarikçileri</strong></p>
                                </td>
                                <td>
                                <p>Sözleşme temelli olarak ARTVİAS’e hizmet sunan taraflar.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>ARTVİAS Veri Sahibi Başvuru Formu</strong></p>
                                </td>
                                <td>
                                <p>Veri sahiplerinin, KVK Kanunu’nun 11. maddesinde yer alan haklarına ilişkin başvurularını kullanırken yararlanacakları başvuru formu.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Hukuk Dan</strong><strong>ış</strong><strong>manlar</strong><strong>ı</strong></p>
                                </td>
                                <td>
                                <p>ARTVİAS YAZILIM’nin hukuki işlemlerin yürütülmesi için danışmanlık aldığı gerçek ve tüzel kişiler</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>ARTVİAS Çalışan KVK Politikası</strong></p>
                                </td>
                                <td>
                                <p>ARTVİAS bünyesine dahil şirketlerin çalışanlarının kişisel verilerinin korunmasında ve işlenmesinde benimsenen ilkelerin düzenlendiği “ARTVİAS Çalışanları Kişisel Verilerin Korunması ve İşlenmesi Politikası”.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Türkiye Cumhuriyeti Anayasası</strong></p>
                                </td>
                                <td>
                                <p>9 Kasım 1982 tarihli ve 17863 sayılı Resmi Gazete'de yayımlanan; 7 Kasım 1982 tarihli ve 2709 sayılı Türkiye Cumhuriyeti Anayasası.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Türk Ceza Kanunu</strong></p>
                                </td>
                                <td>
                                <p>12 Ekim 2004 tarihli ve 25611 sayılı Resmi Gazete'de yayımlanan; 26 Eylül 2004 tarihli ve 5237 sayılı Türk Ceza Kanunu.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Veri İşleyen</strong></p>
                                </td>
                                <td>
                                <p>Veri sorumlusunun verdiği yetkiye dayanarak onun adına kişisel veri işleyen gerçek ve tüzel kişi.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Veri Sorumlusu</strong></p>
                                </td>
                                <td>
                                <p>Kişisel verilerin işlenme amaçlarını ve vasıtalarını belirleyen, verilerin sistematik bir şekilde tutulduğu yeri yöneten kişi.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Veri Sorumlusuna Başvuru Usul Ve Esasları Hakkında Tebliğ</strong></p>
                                </td>
                                <td>
                                <p>10 Mart 2018 tarihli ve 30356 sayılı Resmi Gazete’de yayımlanarak yürürlüğe giren Veri Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Veri Sorumluları Sicili</strong></p>
                                </td>
                                <td>
                                <p>KVK Kurulu gözetiminde, Kişisel Verileri Koruma Kurumu Başkanlığı nezdinde tutulan ve kamuya açık olan Veri Sorumluları Sicili.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p><strong>Veri Sorumluları Sicili Hakkında Yönetmelik</strong></p>
                                </td>
                                <td>
                                <p>30 Aralık 2017 tarihli ve 30286 sayılı Resmi Gazete’de yayımlanan 1 Ocak 2018 tarihinde yürürlüğe giren Veri Sorumluları Sicili Hakkında Yönetmelik.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p>&nbsp;</p>
                    <strong>4. SORUMLULUKLAR&nbsp;</strong>

                    <p>ARTVİAS KVK Politikası’na uygun hazırlanan yönetmelik, prosedür, kılavuz, standart ve eğitim faaliyetlerinin ARTVİAS bünyesinde uygulanmasında, Hukuk Danışmanları tavsiye kaynağı ve rehber olacaktır. ARTVİAS genelindeki tüm çalışanlarımız, paydaşlarımız, misafirler, ziyaretçiler ve ilgili üçüncü kişiler, ARTVİAS KVK Politikası’na uyum ile birlikte, hukuki yönden risklerin ve yakın tehlikenin önlenmesinde, Hukuk Danışmanları ile iş birliği yapmakla yükümlüdürler. ARTVİAS’un tüm organ ve departmanları ARTVİAS KVK Politikası’na uyulmasını gözetmekle sorumludur.<br>
                    &nbsp;</p>

                    <p><strong>5. POLİTİK ESASLAR&nbsp;</strong></p><br>

                    <strong>5.1. ARTVİAS TARAFINDAN BENİMSENEN TEMEL İLKELER&nbsp;</strong>

                    <p>ARTVİAS tarafından, kişisel verilerin korunması mevzuatına uyum sağlanması ve uyumun sürdürülmesi için aşağıda sıralanan temel ilkeler benimsenmelidir:</p><br>

                    <p><strong>5.1.1. Kişisel verileri hukuka ve dürüstlük kurallarına uygun olarak işleme&nbsp;</strong><br>
                    ARTVİAS, Türkiye Cumhuriyeti Anayasası başta olmak üzere, kişisel verilerin korunması mevzuatına uygun olarak, kişisel veri işleme faaliyetlerini hukuka ve dürüstlük kuralına uygun olarak yürütmelidirler.</p><br>

                    <p><strong>​​​5.1.2.&nbsp;İşlenen</strong><strong> </strong><strong>kişisel</strong><strong> </strong><strong>verilerin</strong><strong> </strong><strong>doğruluğunu</strong><strong> </strong><strong>ve</strong><strong> </strong><strong>güncelliğini</strong><strong> </strong><strong>temin</strong><strong> </strong><strong>etme </strong>ARTVİAS, işledikleri kişisel verilerin doğruluğunu ve güncelliğini sağlamalı, bu çerçevede gereken idari ve teknik tedbirleri almalı, gerekli süreçleri yürütmelidirler. ARTVİAS bu kapsamda, kişisel veri sahiplerinin kişisel verilerinin hatalı olması durumunda bunları düzeltme ve doğruluğunu teyit etmeye yönelik mekanizmalar kurmalıdır.</p><br>

                    <p><strong>5.1.3. Kişisel verileri amaçla bağlantılı, sınırlı ve ölçülü bir biçimde işleme</strong><br>
                    ARTVİAS, kişisel verileri, veri işleme şartları ile bağlantılı ve bu hizmetlerin gerçekleştirilmesi için gerektiği kadar işlemelidirler. Bu kapsamda, kişisel veri işleme amacının, kişisel veri işleme faaliyetine başlanmadan önce belirlenmesini gerektirmektedir. Diğer bir deyişle, kişisel verilerin yalnızca ileride kullanılabileceği varsayımı ile işlenmemesi (<em>kişisel</em><em> </em><em>verilerin</em><em> </em><em>muhafaza</em><em> </em><em>edilmesi</em><em> </em><em>de</em></p>

                    <p><em>veri işleme faaliyetidir</em>) gerekmektedir. Bu çerçevede, ARTVİAS, veri sahiplerinin temel haklarını ve kendi meşru menfaatlerini göz önünde bulundurmalıdırlar.</p><br>
                    <strong>5.1.4. Kişisel verileri ilgili mevzuatta öngörülen veya işlendikleri amaç için gerekli olan süre kadar muhafaza etme</strong>

                    <p>ARTVİAS, kişisel verileri, ilgili mevzuatta öngörülen veya veri işleme amacının gerektirdiği süre ile sınırlı olarak muhafaza etmelidirler. Bu doğrultuda ARTVİAS, Türk Ceza Kanunu’nun 138. maddesi ve KVK Kanunu’nun 4. ve 7. maddelerinden kaynaklanan süre sınırına riayet etmelidirler. ARTVİAS, mevzuatta öngörülen sürenin bitimi veya kişisel verilerin işlenmesini gerektiren sebeplerin ortadan kalkması halinde kişisel verileri silmeli, yok etmeli veya anonim hale getirmelidirler.</p>
                    <br>
                    <strong>5.2. KİŞİSEL VERİ İŞLEME FAALİYETLERİNİN VERİ İŞLEME ŞARTLARINA UYGUN OLARAK GERÇEKLEŞTİRİLMESİ</strong>

                    <p>ARTVİAS kişisel verilerin işlenmesi faaliyetlerini yürütürken, temel ilkelere uymak kaydıyla, KVK Kanunu’nun 5. ve 6. maddeleri ile Kişisel Sağlık Verilerinin İşlenmesine İlişkin Yönetmelik’te belirlenen veri işleme şartlarına uygun hareket etmelidirler.</p><br>

                    <p>ARTVİAS bu doğrultuda, gerçekleştirilen kişisel veri işleme faaliyetleri bakımından söz konusu veri işleme şartlarının mevcut olup olmadığını tespit etmeli; şartların bulunmaması durumunda kişisel veri işleme faaliyetini gerçekleştirmemelidirler.</p>

                    <p>ARTVİAS, kişisel verilerin hukuka uygun olarak işlenmesi için iç sistemlerinde gerekli mekanizmaları kurgulamalı ve kişisel verilerin korunmasına ilişkin kurum içi farkındalık yaratmalı, gerekli denetim mekanizmalarını yürütmelidirler.</p>

                    <p>ARTVİAS, kişisel verilerin işlenmesi kapsamında Türkiye Cumhuriyeti Anayasası başta olmak üzere, Türk Ceza Kanunu, KVK Kanunu ve ilgili diğer mevzuat ile ARTVİAS KVK Politikası’nda ortaya konulan kurallara uymalıdırlar.<br>
                    &nbsp;</p>
                    <strong>5.3. KİŞİSEL VERİ AKTARIMININ VERİ AKTARIM ŞARTLARINA UYGUN OLARAK GERÇEKLEŞTİRİLMESİ</strong>

                    <p>ARTVİAS tarafından gerçekleştirilecek kişisel veri aktarımlarında (<em>kişisel verilerin aktif olarak üçüncü kişilerle paylaşılması veya kişisel verilerin üçüncü kişilerin erişime açılması</em>) KVK Kanunu’nun 8. ve 9. maddelerinde düzenlenmiş olan kişisel veri aktarım şartlarına uygun hareket edilmelidir.<br>
                    &nbsp;</p>
                    <strong>5.4. KİŞİSEL VERİLERİN GÜVENLİĞİNİN SAĞLANMASI</strong>

                    <p>ARTVİAS, kişisel verilerin hukuka aykırı olarak açıklanmasını, aktarılmasını, kişisel verilere hukuka aykırı olarak erişilmesini, veya başka şekillerde</p>

                    <p>meydana gelebilecek güvenlik eksikliklerini önlemek için, imkanlar dahilinde, korunacak verinin niteliğine göre gerekli her türlü tedbiri almalıdırlar.</p>

                    <p>Bu kapsamda ARTVİAS tarafından gerekli (i) idari ve (ii) teknik tedbirler alınmalı, (iii) şirket bünyesinde denetim sistemi kurulmalı ve (iv) kişisel verilerin kanuni olmayan yollarla ifşası durumunda KVK Kanunu’nda öngörülen tedbirler alınmalıdır.</p><br>
                    <strong>5.4.1. Kişisel Verilerin Hukuka Uygun İşlenmesini Sağlamak ve Kişisel Verilere Hukuka Aykırı Erişilmesini Önlemek için ARTVİAS’un Alacağı İdari Tedbirler</strong>

                    <ul>
                        <li>
                        <p>ARTVİAS, kişisel verilerin korunmasına ilişkin olarak çalışanlarını eğitmeli ve bilinçlendirmelidir.</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin aktarıma konu olduğu durumlarda, ARTVİAS kişisel verilerin aktarıldığı kişiler ile akdedilmiş sözleşmelere, kişisel verilerin aktarıldığı tarafın veri güvenliğini sağlamaya yönelik yükümlülükleri yerine getireceğine ilişkin kayıtlar eklemelidir. Bu kapsamda, aktarılan tarafın kişisel verilerin korunması amacıyla gerekli her türlü tedbiri alacağı ve kendi kuruluşlarında bu tedbirlerin uygulanmasını temin edeceği taahhüt altına alınmalıdır.</p>
                        </li>
                        <li>
                        <p>ARTVİAS tarafından gerçekleştirilen süreçler detaylı olarak incelenmeli, süreç kapsamında yürütülen kişisel veri işleme faaliyetleri her birim özelinde tespit edilmelidir. Bu kapsamda, yürütülen veri işleme faaliyetlerinin KVK Kanunu’nda öngörülen kişisel veri işleme şartlarına uygunluğunun sağlanması için atılması gereken adımlar belirlenmelidir.</p>
                        </li>
                        <li>
                        <p>ARTVİAS, şirket yapılarına göre KVK Kanunu’na uyumun sağlanması için yerine getirilmesi gereken uygulamaları tespit etmeli, bu uygulamaları iç politikalar ile düzenlemelidir.</p>
                        </li>
                    </ul><br>
                    <strong>5.4.2. Kişisel Verilerin Hukuka Uygun İşlenmesini Sağlamak ve Kişisel Verilere Hukuka Aykırı Erişilmesini Önlemek için ARTVİAS’un Alacağı Teknik Tedbirler</strong>

                    <ul>
                        <li>
                        <p>Kişisel verilerin korunmasına ilişkin olarak, teknolojinin imkan verdiği ölçüde teknik önlemler alınmalı ve alınan önlemler gelişmelere paralel olarak güncellenmeli ve iyileştirilmelidir.</p>
                        </li>
                        <li>
                        <p>Teknik konularda, uzman personel istihdam edilmelidir.</p>
                        </li>
                        <li>
                        <p>Alınan önlemlerin uygulanmasına yönelik düzenli aralıklarla denetim yapılmalıdır.</p>
                        </li>
                        <li>
                        <p>Güvenliği temin edecek yazılım ve sistemler kurulmalıdır.</p>
                        </li>
                        <li>
                        <p>ARTVİAS tarafından işlenmekte olan kişisel verilere erişim yetkisi, belirlenen işleme amacı doğrultusunda ilgili şirket çalışanı ile sınırlandırılmalıdır.</p>
                        </li>
                    </ul><br>
                    <strong>5.4.3. ARTVİAS’un Kişisel Verilerin Korunmasına ilişkin Denetim Faaliyetleri Yürütmesi</strong>

                    <p>ARTVİAS tarafından kişisel verilerin korunması ve güvenliğinin sağlanması kapsamında alınan teknik tedbirlerin, idari tedbirlerin ve uygulamaların ilgili mevzuata, politika, prosedür ve talimatlara uyumu, işleyişi ve etkinliği ARTVİAS İç Denetim Birimleri tarafından denetlenmelidir. ARTVİAS denetim faaliyetini, kendi organizasyonu marifetiyle gerçekleştirebileceği gibi ARTVİAS Yönetim Kurulunun görüşünü alarak dış kaynaklı denetim firmalarına da yaptırabilir. ARTVİAS Yönetim Kurulu gerekli gördüğü durumlarda söz konusu denetim faaliyetini ARTVİAS’nde doğrudan kendi organizasyonu marifetiyle yerine getirebilir.</p>

                    <p>Gerçekleştirilen denetim faaliyetlerinin sonuçları, ilgili ARTVİAS Yönetim Kuruluna ve ilgili fonksiyon yöneticilerine raporlanmalıdır. Denetim sonuçlarına ilişkin planlanan aksiyonların düzenli olarak takibi süreç sahiplerinin asli sorumluluğundadır. İlgili ARTVİAS bu rapor kapsamındaki aksiyonların takibini, doğrulama testlerini ve denetimlerini yapmalıdır.</p>

                    <p>Denetim sonuçları ile sınırlı olmaksızın, verilerin korunmasına ilişkin alınan tedbirlerinin geliştirilmesini ve iyileştirilmesini sağlayacak faaliyetler ARTVİAS’nde ilgili icra birimlerince yürütülmelidir.</p><br>
                    <strong>5.4.4. Kişisel Verilerin Kanuni Olmayan Yollarla İfşası Durumunda Alınması Gereken Tedbirler</strong>

                    <p>ARTVİAS, işlemekte oldukları kişisel verilerin hukuka aykırı olarak yetkisiz kimseler tarafından elde edilmesi durumunda, vakit kaybetmeksizin durumu KVK Kurulu’na ve ilgili veri sahiplerine bildirmelidirler. Bu yükümlülüğün yerine getirilmesi için gereken iç yapı, her bir ARTVİAS bünyesinde kurgulanmalıdır.</p>

                    <p>&nbsp;</p>
                    <strong>5.5. KİŞİSEL VERİ İŞLEME FAALİYETİNE İLİŞKİN YÜKÜMLÜLÜKLER</strong>

                    <p>ARTVİAS, KVK Kanunu’nun veri sorumluları için öngördüğü yükümlülüklere uymalıdırlar. Bu kapsamda ARTVİAS’un uymakla yükümlü olduğu başlıca hususlar aşağıda sıralanmaktadır:</p><br>
                    <strong>5.5.1. Veri Sorumluları Siciline Kayıt ve Bildirim Yükümlülüğü</strong>

                    <p>ARTVİAS KVK Kanunu’nun 16. maddesine ve Veri Sorumluları Sicili Hakkında Yönetmelik usul ve esaslarına uygun olarak, Veri Sorumluları Sicili’ne kaydolmalıdırlar.</p>

                    <p>Kayıt başvurusunda Veri Sorumluları Sicili’ne sunulması gereken bilgiler aşağıda yer almaktadır:</p>

                    <ol>
                        <li>
                        <p>Veri sorumlusu statüsündeki ARTVİAS’un ve varsa temsilcisinin kimlik bilgileri ve adresleri,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin işlenme amacı,</p>
                        </li>
                        <li>
                        <p>Veri sahibi kişi grupları ve bu kişilere ait işlenen kişisel veri kategorileri hakkında bilgiler,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin aktarılabileceği kişi veya kişi grupları,</p>
                        </li>
                        <li>
                        <p>Yurt dışına aktarımı yapılabilecek kişisel veriler,</p>
                        </li>
                        <li>
                        <p>İşlenen kişisel verilerin güvenliğini sağlamaya yönelik alınan tedbirler,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin işlenme amacının gerektirdiği azami muhafaza edilme süresi.</p>
                        </li>
                    </ol><br>
                    <strong>5.5.2. Veri Sahibini Aydınlatma Yükümlülüğü</strong>

                    <p>ARTVİAS, KVK Kanunu’nun 10. Maddesine ve Aydınlatma Yükümlülüğünün Yerine Getirilmesinde Uyulacak Usul ve Esaslar Hakkında Tebliğ’e uygun olarak, kişisel verilerin elde edilmesi sırasında veri sahiplerinin bilgilendirilmesini sağlamak için gerekli süreçleri yürütmelidirler. Aydınlatma yükümlülüğü kapsamında veri sahiplerine sunulması gereken bilgiler aşağıda yer almaktadır:</p>

                    <ol>
                        <li>
                        <p>Veri sorumlusunun ve varsa temsilcisinin kimliği,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin hangi amaçla işleneceği,</p>
                        </li>
                        <li>
                        <p>İşlenen kişisel verilerin kimlere ve hangi amaçla aktarılabileceği,</p>
                        </li>
                        <li>
                        <p>Kişisel veri toplamanın yöntemi ve hukuki sebebi,</p>
                        </li>
                        <li>
                        <p>Veri sahibinin hakları olan;</p>
                        </li>
                    </ol>

                    <ul>
                        <li>
                        <p>Kişisel verilerinin işlenip işlenmediğini öğrenmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verileri işlenmişse buna ilişkin bilgi talep etmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenmek,</p>
                        </li>
                        <li>
                        <p>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin eksik veya yanlış işlenmiş olması halinde bunların düzeltilmesini istemek ve yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini istemek,</p>
                        </li>
                        <li>
                        <p>Öngörülen şartlar çerçevesinde kişisel verilerin silinmesini veya yok edilmesini istemek ve yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini istemek,</p>
                        </li>
                        <li>
                        <p>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etmek.</p>
                        </li>
                    </ul><br>
                    <strong>5. 5. 3. Kişisel Verilerin Güvenliğini Sağlama Yükümlülüğü</strong>

                    <p>ARTVİAS, KVK Kanunu’nun 12. maddesine uygun olarak, kişisel verilerin güvenliğinin sağlanmasının ve veri sahiplerinin temel hak ve özgürlüklerinin gözetilmesinin öneminin bilinciyle;</p>

                    <ol>
                        <li>
                        <p>Kişisel verilerin hukuka aykırı işlenmesini önlemek,</p>
                        </li>
                        <li>
                        <p>Kişisel verilere hukuka aykırı olarak erişilmesini önlemek ve</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin muhafazasını sağlamak</p>
                        </li>
                    </ol>

                    <p>amaçlarıyla uygun güvenlik düzeyini temin etmeye yönelik gerekli her türlü teknik ve idari tedbirleri almalıdırlar.</p>

                    <p>ARTVİAS ayrıca, veri güvenliğini sağlamaya yönelik mekanizmaların işletilmesi kapsamında gerekli denetimleri yapmak veya yaptırmakla yükümlüdürler.</p><br>
                    <strong>5.5.4. KVK Kurulu Tarafından Verilen Kararları Yerine Getirme Yükümlülüğü</strong>

                    <p>ARTVİAS; kişisel verilerin, temel hak ve özgürlüklere uygun şekilde işlenmesini sağlamak adına faaliyette bulunan ve KVK Kurumu’nun icra organı olan KVK Kurulu tarafından verilen kararlara uygun hareket etmelidirler.</p><br>

                    <p><strong>5.5.5. Veri Sahibi Başvurularına Cevap Verme Yükümlülüğü</strong></p>

                    <p>ARTVİAS veri sorumlusu sıfatıyla KVK Kanunu’nun 13. maddesi gereğince, veri sahiplerinin kişisel verilerine ilişkin taleplerini, talebin niteliğine göre en kısa sürede ve en geç otuz (30) gün içinde sonuçlandırmalıdırlar. Veri sahipleri kişisel verilerine ilişkin taleplerini Veri Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ doğrultusunda gerçekleştirmelidir.</p>

                    <p>KVK Kanunu’nun 11.maddesi uyarınca, kişisel veri sahipleri veri sorumlularına başvurarak kendileri ile ilgili aşağıda yer alan konularda talepte bulunabilirler:</p>

                    <ol>
                        <li>
                        <p>Kişisel verilerinin işlenip işlenmediğini öğrenmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verileri işlenmişse buna ilişkin bilgi talep etmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenmek,</p>
                        </li>
                        <li>
                        <p>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin eksik veya yanlış işlenmiş olması halinde bunların düzeltilmesini istemek ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini istemek,</p>
                        </li>
                        <li>
                        <p>KVK Kanunu ve ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması halinde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini istemek,</p>
                        </li>
                        <li>
                        <p>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etmek,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etmek.</p>
                        </li>
                    </ol><br>
                    <strong>5.5.6. Kişisel Verileri Hukuka Uygun Olarak Aktarma ve Elde Etme Yükümlülüğü</strong>

                    <p>ARTVİAS, KVK Kanunu’nun 4. maddesi gereğince, kişisel verileri hukuka ve dürüstlük kuralına uygun bir biçimde işlemelidirler. Bu kapsamda, kişisel verilerin elde edilmesi ve aktarılması faaliyetleri de hukuka uygun olarak yürütülmelidir.</p><br>

                    <p><strong>5.5.7. Kişisel Verilerin Muhafazasına ilişkin Düzenlemelere Uygun Davranma Yükümlülüğü</strong></p>

                    <p>ARTVİAS KVK Kanunu’nun 7. maddesi gereğince; hukuka uygun olarak işlenmiş olmasına rağmen işleme sebebi ortadan kalkan kişisel verilerin silinmesi, anonim hale getirilmesi veya yok edilmesine yönelik gerekli iç sistemlerini kurmalıdırlar.<br>
                    &nbsp;</p><br>

                    <p><strong>6. ARTVİAS KVK POLİTİKASI'NA VE KVK KANUNU'NA UYUM İÇİN ARTVİAS ŞİRKETLERİ TARAFINDAN YERİNE GETİRİLECEK TEMEL HUSUSLAR&nbsp;</strong></p>

                    <p>ARTVİAS, KVK Kanunu’na ve yol gösterici nitelikte olan ARTVİAS KVK Politikası’na uyum için belirli birtakım sistemleri kendi bünyelerinde kurgulamalıdırlar. Bu kapsamda ARTVİAS tarafından öncelikle yerine getirilmesi gerekenler aşağıda yer almaktadır:</p><br>
                    <strong>6.1. ARTVİAS KVK POLİTİKASI’NDA AÇIKLANAN YÜKÜMLÜLÜKLERİ YERİNE GETİRMEK</strong>

                    <p>ARTVİAS tarafından ARTVİAS KVK Politikası’nın 5.5. başlığı altında açıklanmış olan temel yükümlülüklere uygun hareket edilmelidir.</p><br>
                    <strong>6.2. KİŞİSEL VERİLERİN KORUNMASI VE İŞLENMESİ POLİTİKASI İLE TEMEL POLİTİKALARI OLUŞTURMAK</strong>

                    <p>ARTVİAS kendi iç işleyişlerini ve KVK Kanunu’nda öngörülen düzenlemeleri dikkate alarak Kişisel Verilerin Korunması ve İşlenmesi Politikası oluşturmalıdırlar.</p>

                    <p>ARTVİAS tarafından oluşturulacak olan bu politikanın dili sade ve veri sahipleri tarafından anlaşılabilir olmalıdır.</p><br>
                    <strong>6.3. KİŞİSEL VERİLERİN KORUNMASI VE İŞLENMESİNE İLİŞKİN ARTVİAS ŞİRKETLERİ TARAFINDAN POLİTİKA, TÜZÜK/İÇ TÜZÜK, YÖNETMELİK, PROSEDÜR VE KILAVUZLAR HAZIRLANMASI</strong>

                    <p>Kişisel verilerin korunması hukukuna uyumun sağlanmasının temini amacıyla, ARTVİAS tarafından, kamuya sunulmak veya şirket içinde kullanılmak üzere gerekli dokümanlar hazırlanmalıdır.</p>

                    <p>Bu kapsamda hazırlanacak olan dokümanlar, ARTVİAS tarafından uygulanan dokümantasyon modeline uygun olarak düzenlenmelidir.</p>

                    <p>ARTVİAS tarafından kamuya sunulacak politikalarda gerçekleştirilecek değişiklikler, veri sahiplerinin kolaylıkla erişim sağayabileceği biçimde sunulmalıdır.</p><br>

                    <p><strong>6.4. KİŞİSEL VERİLERİN KORUNMASI VE İŞLENMESİNDEN SORUMLU BİRİMİN TESPİTİ</strong></p>

                    <p>ARTVİAS KVK Politikası ve ilişkili diğer politikaları yönetmek üzere, her bir ARTVİAS bünyesinde Kişisel Verilerin Korunması Birimi kurulmalı ya da kişisel verilerin korunmasından sorumlu bir kişi atanmalıdır. Bu kapsamda ilgili birim veya kişi tarafından yürütülecek temel faaliyetler aşağıda sıralanmaktadır:</p>

                    <ol>
                        <li>
                        <p>Kişisel verilerin korunması ve işlenmesine ilişkin dokümantasyonun hazırlanmasının takibi ve dokümanların ilgili kişilerin onayına sunulması,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin korunması ve işlenmesine ilişkin dokümanların uygulanmasının temini ve gerekli denetimlerin yürütülmesinin sağlanması,</p>
                        </li>
                        <li>
                        <p>ARTVİAS’un yükümlülüklerini (ARTVİAS KVK Politikası Başlık 5.5.) yerine getirip getirmediğinin takibi,</p>
                        </li>
                        <li>
                        <p>KVK Kurumu ve KVK Kurulu ile olan ilişkilerin takibi.</p>
                        </li>
                    </ol>

                    <p>Birimin oluşumu ve görev dağılımı ARTVİAS üst yönetimi tarafından belirlenir. Birim kurulması yerine kişisel verilerin korunmasından ve işlenmesinden sorumlu bir kişi atanmasına karar verilmişse, bu kişinin atanması sürecini de aynı şekilde şirket üst yönetimi yürütür. Yukarıda belirtilen asgari görevlere ek olarak, ARTVİAS’un ihtiyaçları ve yürüttükleri faaliyetler göz önüne alınarak birim ve atanacak sorumlu kişiye birtakım ek görev ve sorumluluklar verilebilir.<br>
                    <br>
                    <strong>7.&nbsp;GÖZDEN GEÇİRME</strong></p>

                    <p>Bu Politika dokümanı, ARTVİAS Yönetim Kurulu tarafından onaylandığı andan itibaren yürürlüğe girer. İşbu Politika’nın yürürlükten kaldırılması hususu hariç olmak üzere Politika içerisinde yapılacak değişiklikler ve ne şekilde yürürlüğe konacağı konusunda da ARTVİAS Yönetim Kurulu tarafından Yönetim Kurulu Başkanına yetki verilmiştir. ARTVİAS Yönetim Kurulu Başkanı onayıyla işbu Politika içerisinde değişiklik yapılabilecek ve yürürlüğe konabilecektir.</p>

                    <p>İşbu Politika’ya bağlı olarak düzenlenecek, bu Politika’nın içerisinde belirtilen hususların belli konular özelinde ne şekilde icra edileceğini belirtecek uygulama kuralları yönetmelik şeklinde düzenlenecektir. Yönetmelikler ARTVİAS Yönetim Kurulu Başkanı onayıyla yayımlanarak yürürlüğe konulacaktır.</p>

                    <p>İşbu Politika her halükarda yılda bir kez gözden geçirilir, gerekli değişiklikler varsa, ARTVİAS Yönetim Kurulu Başkanı’nın onayına sunularak güncellenir.</p>

                    <p>ARTVİAS KVK Politikası, ARTVİAS tarafından internet sitesinde yayımlanarak kamuoyuna sunulmuştur. Başta KVK Kanunu olmak üzere yürürlükteki mevzuat ile işbu Politika’da yer verilen düzenlemelerin çelişmesi halinde mevzuat hükümleri uygulanır.</p>

                    <p>ARTVİAS, yasal düzenlemelere paralel olarak ARTVİAS KVK Politikasın’da değişiklik yapma hakkını saklı tutar. ARTVİAS KVK Politikası’nın güncel versiyonuna ARTVİAS’in web sitesinden ( <a href="http://www.xn--artvas-l9a.com.tr/">www.ARTVİAS.com.tr</a> ) erişilebilir.</p>
                    
    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        

    
            <div class="modal fade bd-example-modal-lg" id="exampleModal_aydinlatma_view" tabindex="-1" role="dialog" aria-labelledby="exampleModal_aydinlatma_viewLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal_aydinlatma_viewLabel">Kişisel Verilerin Korunması ve İşlenmesi Genel Aydınlatma Metni</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="font-size-12 font-size-md-14">
        <p><strong>Kişisel Verilerin Korunması ve İşlenmesi Genel Aydınlatma Metni</strong></p><br>
    
                    <p>Kişisel verilerinizin, 6698 sayılı Kişisel Verilerin Korunması Kanunu (“<strong>KVKK</strong>”) uyarınca, veri sorumlusu sıfatıyla ARTVİAS YAZILIM Şirketi (“<strong>ARTVİAS</strong>” veya “<strong>Şirket</strong>”) tarafından hangi kapsamda işlenebileceği aşağıda açıklanmıştır.</p><br>

                    <p><strong>1.&nbsp;Kişisel Verilerinizin Toplanma Yöntemi ve Hukuki Gerekçesi</strong></p>

                    <p>Kişisel verileriniz faaliyetlerimizi yürütmek amacıyla Şirket’imiz tarafından farklı kanallarla ve mevzuata ve Şirket politikalarına uyumun sağlanması hukuki sebeplerine dayanılarak toplanmaktadır. Kişisel verileriniz, KVKK tarafından öngörülen temel ilkelere uygun olarak, KVKK’nın 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları kapsamında işbu Aydınlatma Metninde belirtilen amaçlarla da işlenebilmekte ve aktarılabilmektedir.</p><br>

                    <p><strong>2.&nbsp;Kişisel Verilerinizin İşlenme Amaçları</strong></p>

                    <p>Toplanan kişisel verileriniz, KVKK tarafından öngörülen temel ilkelere uygun olarak ve KVKK’nın 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları dahilinde, ARTVİAS tarafından aşağıda yer alan amaçlarla işlenebilmektedir:</p>

                    <ul>
                        <li>
                        <p>ARTVİAS'un yürüttüğü ticari faaliyetlerin mevzuata ve Şirket politikalarına uygun olarak yerine getirilmesi için Şirket’imizin iş birimleri tarafından gerekli çalışmaların yapılması ve bu doğrultuda faaliyetlerin yürütülmesi;</p>
                        </li>
                        <li>
                        <p>ARTVİAS’un kısa, orta ve uzun vadede ticari politikalarının tespit edilmesi, planlanması ve uygulanması;</p>
                        </li>
                        <li>
                        <p>ARTVİAS’un insan kaynakları faaliyetlerinin tasarlanması ve yürütülmesi;</p>
                        </li>
                        <li>
                        <p>Şirketimiz insan kaynakları faaliyetlerinin tasarlanmasına, planlanmasına ve icrasına destek olunması;</p>
                        </li>
                        <li>
                        <p>ARTVİAS’un, iştiraki bulunduğu şirketlerin ve iş ilişkisi içerisinde olunan gerçek kişilerin ticari ve hukuki emniyetinin sağlanması;</p>
                        </li>
                        <li>
                        <p>Şirketimizin ticari itibarının ve oluşturduğu güvenin korunması.</p>
                        </li>
                    </ul>

                    <p>Kişisel verilerinizin Şirket’imiz tarafından işlenme amaçları konusunda detaylı bilgilere,&nbsp;<a href="http://www.artviasyazilin.com.tr/">www.artviasyazilin.com.tr</a> internet adresinden ulaşabileceğiniz “ARTVİAS YAZILIM Şirketi Kişisel Verilerin Korunması ve İşlenmesi Politikası”nda yer verilmiştir.</p><br>

                    <p><strong>3.&nbsp;Kişisel Verilerinizin Hangi Nedenle Kimlere Aktarılabilir?</strong></p>

                    <p>Toplanan kişisel verileriniz; KVKK tarafından öngörülen temel ilkelere uygun olarak ve KVKK’nın 8. ve 9. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları dahilinde, ARTVİAS tarafından aşağıda yer alan amaçlarla; iş ortaklarımıza, tedarikçilerimize, hissedarlarımıza, kanunen yetkili kamu kurumlarına ve özel kişilere aktarılabilmektedir:</p>

                    <ul>
                        <li>
                        <p>ARTVİAS’un yürüttüğü ticari faaliyetlerin mevzuata ve Şirket politikalarına uygun olarak yerine getirilmesi için Şirket’imizin iş birimleri tarafından gerekli çalışmaların yapılması ve bu doğrultuda faaliyetlerin yürütülmesi;</p>
                        </li>
                        <li>
                        <p>ARTVİAS’un kısa, orta ve uzun vadede ticari politikalarının tespit edilmesi, planlanması ve uygulanması;</p>
                        </li>
                        <li>
                        <p>ARTVİAS’un insan kaynakları faaliyetlerinin tasarlanması ve yürütülmesi;</p>
                        </li>
                        <li>
                        <p>Şirketimizin insan kaynakları faaliyetlerinin tasarlanmasına, planlanmasına ve icrasına destek olunması;</p>
                        </li>
                        <li>
                        <p>ARTVİAS’un, iştiraki bulunduğu şirketlerin ve iş ilişkisi içerisinde olunan gerçek kişilerin ticari ve hukuki emniyetinin sağlanması;</p>
                        </li>
                        <li>
                        <p>Şirketimizin ticari itibarının ve oluşturduğu güvenin korunması.</p>
                        </li>
                    </ul>

                    <p>Kişisel verilerinizin Şirket’imiz tarafından aktarılması konusunda detaylı bilgilere,&nbsp;<a href="http://www.artviasyazilin.com.tr/">www.artviasyazilin.com.tr</a> internet adresinden ulaşabileceğiniz “ARTVİAS YAZILIM Şirketi Kişisel Verilerin Korunması ve İşlenmesi Politikası”nda yer verilmiştir.</p><br>

                    <p><strong>IV.&nbsp; KVKK’nın 11. Maddesince Veri Sahibi Olarak Sayılan Haklarınız</strong></p>

                    <p>Kişisel verisi işlenen gerçek kişilerin KVKK’nın 11. maddesi uyarıca sahip olduğu haklar aşağıdaki gibidir;</p>

                    <ul>
                        <li>
                        <p>Kişisel veri işlenip işlenmediğini öğrenme,</p>
                        </li>
                        <li>
                        <p>Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</p>
                        </li>
                        <li>
                        <p>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</p>
                        </li>
                        <li>
                        <p>KVKK ve ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</p>
                        </li>
                        <li>
                        <p>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,</p>
                        </li>
                        <li>
                        <p>Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep etme.</p>
                        </li>
                    </ul>

                    <p>Yukarıda sıralanan haklarınıza yönelik başvurularınızı,&nbsp;<a href="http://www.artviasyazilin.com.tr/">www.artviasyazilin.com.tr</a> internet adresinde yer alan&nbsp;<strong>Veri Sahibi Bilg Talep Formu</strong> kullanarak iletebilirsiniz.</p>

                    <p>Şirket’imiz, talebin niteliğine göre talebi en kısa sürede ve en geç otuz (30) gün içinde ücretsiz olarak sonuçlandıracaktır. Ancak, işlemin ilave bir maliyeti gerektirmesi hâlinde, tarafımızca Kişisel Verileri Koruma Kurulu tarafından belirlenen tarifedeki ücret alınacaktır.</p>
                    
    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        

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

<!-- Mirrored from thenewtheme.websitefabrikasi.com.tr/ekibimiz by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 17:31:00 GMT -->
</html>
