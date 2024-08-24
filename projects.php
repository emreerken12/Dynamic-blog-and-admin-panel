
<?php
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
        ';
    }

    // Projeler HTML'ini kapat
    echo '
            </div>
        </div>
    </div>
    ';
} else {
    echo "Veri bulunamadı";
}

$conn->close();
?>
