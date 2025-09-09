<?php
// Test image accessibility
$imagePath = '../assets/images/first page .jpg';
$absolutePath = __DIR__ . '/' . $imagePath;

echo "<h2>🖼️ Image Test for YPOK First Page</h2>";
echo "<p><strong>Relative Path:</strong> $imagePath</p>";
echo "<p><strong>Absolute Path:</strong> $absolutePath</p>";
echo "<p><strong>File Exists:</strong> " . (file_exists($absolutePath) ? '✅ YES' : '❌ NO') . "</p>";

if (file_exists($absolutePath)) {
    echo "<p><strong>File Size:</strong> " . number_format(filesize($absolutePath) / 1024, 2) . " KB</p>";
    echo "<h3>📷 Image Preview:</h3>";
    echo "<img src='$imagePath' style='max-width: 500px; max-height: 300px; border: 2px solid #ddd; border-radius: 8px;' alt='First Page Image'>";
} else {
    echo "<p style='color: red;'>❌ Image file not found!</p>";
    echo "<h3>📁 Available Images:</h3>";
    $imagesDir = __DIR__ . '/../assets/images/';
    if (is_dir($imagesDir)) {
        $files = scandir($imagesDir);
        echo "<ul>";
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                echo "<li>📷 $file</li>";
            }
        }
        echo "</ul>";
    }
}

echo "<h3>🔗 Quick Links:</h3>";
echo "<ul>";
echo "<li><a href='firstpage.php'>🎯 Back to First Page</a></li>";
echo "<li><a href='beranda.php'>🏠 Go to Beranda</a></li>";
echo "</ul>";
?>
