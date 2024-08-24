<?php
include 'database.php';

// Verileri çekme
$sql = "SELECT * FROM footer_info LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Veriyi al ve dinamik HTML oluştur
    while($row = $result->fetch_assoc()) {
        echo '
        <!-- footer start -->
        <div id="doro-footer2" style="margin-top: 50px;">
            <div class="doro-narrow-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="brand">
                            <b>' . $row["brand_name"] . '</b>
                            <p>' . $row["brand_description"] . '</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p><b>İletişime Geçin</b><br />
                            <p>E: ' . $row["contact_email"] . '</p>
                            <p>T: ' . $row["contact_phone"] . '</p>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><b>Adres</b><br />
                            <p>A: ' . $row["address"] . '</p>
                        </p>
                    </div>
                </div>
                <div class="row" style="margin-top: 25px;">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <p class="doro-lead">' . $row["copyright_text"] . '</p>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <p>
                            <a href="' . $row["kvkk_general_link"] . '">KVKK - İşlenme Genel Aydınlatma</a>  <span>|</span>
                            <a href="' . $row["kvkk_policy_link"] . '">KVKK - İşlenme Politikası Metni</a>  <span>|</span>
                            <a href="' . $row["homepage_link"] . '">Anasayfa</a>
                        </p>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <ul class="social-network">
                            <li><a target="_blank" href="' . $row["facebook_link"] . '"><i class="ti-facebook font-14px gray-icon"></i></a></li>
                            <li><a target="_blank" href="' . $row["instagram_link"] . '"><i class="ti-instagram font-14px gray-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->
        ';
    }
} else {
    echo "Veri bulunamadı";
}

$conn->close();
?>
