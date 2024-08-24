<?php


include 'database.php';

// Verileri çekmek için SQL sorgusu
$sql = "SELECT * FROM navbar ORDER BY sira"; // sira sütununa göre sıralama
$result = $conn->query($sql);

// Sonuçları bir diziye atayalım
$navbarItems = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $navbarItems[] = $row;
    }
} else {
    echo "Navbar öğesi bulunamadı.";
}

?>



<div id="doro-page">
        <a href="#" class="js-doro-nav-toggle doro-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="doro-aside">
            <!-- Logo -->
            <h1 id="doro-logo">
                <a href="index.php">
                <!-- logo gelecek -->
                <img src="img/recais/logo.jpg" alt="#">
                </a>
            </h1>
            <!-- Menu -->
            <nav id="doro-main-menu">
                <ul>
                <?php foreach ($navbarItems as $item): ?>
        <li class="<?php echo ($item['link'] === 'index.php' ? 'doro-active' : ''); ?>">
            <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
        </li>
    <?php endforeach; ?>

                  
                    

                    

                </ul>
            </nav>
            <!-- Sidebar Footer -->
         
        </aside>


