<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil input dari form
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // Variabel untuk menyimpan rekomendasi sepatu
    $shoeRecommendations = [];

    // Logika untuk menentukan rekomendasi sepatu berdasarkan tinggi badan dan berat badan
    if ($height >= 140 && $height <= 150) {
        if ($weight < 50) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Casual => <a href='https://id.puma.com/in/pd/sepatu-sneaker-bari-casual-canvas/389383.html' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_a.png"
            ];
        } elseif ($weight >= 51 && $weight <= 60) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Casual => <a href='https://id.puma.com/in/pd/sepatu-sneaker-bari-casual-canvas/389383.html' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_a.png"
            ];
        } else {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Casual => <a href='https://id.puma.com/in/pd/sepatu-sneaker-bari-casual-canvas/389383.html' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_a.png"
            ];
        }
    } elseif ($height >= 151 && $height <= 160) {
        if ($weight < 50) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Trail Running => <a href='https://www.zalora.co.id/blog/fashion/sports/rekomendasi-sepatu-trail-running-terbaik/' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_b.png"
            ];
        } elseif ($weight >= 51 && $weight <= 60) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Trail Running => <a href='https://www.zalora.co.id/blog/fashion/sports/rekomendasi-sepatu-trail-running-terbaik/' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_b.png"
            ];
        } else {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Trail Running => <a href='https://www.zalora.co.id/blog/fashion/sports/rekomendasi-sepatu-trail-running-terbaik/' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_b.png"
            ];
        }
    } elseif ($height >= 161 && $height <= 170) {
        if ($weight < 50) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Sneakers => <a href='https://www.atome.id/blog/8-fakta-menarik-keuntungan-mempergunakan-sneakers' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_c.png"
            ];
        } elseif ($weight >= 51 && $weight <= 60) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Sneakers => <a href='https://www.atome.id/blog/8-fakta-menarik-keuntungan-mempergunakan-sneakers' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_c.png"
            ];
        } else {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Sneakers => <a href='https://www.atome.id/blog/8-fakta-menarik-keuntungan-mempergunakan-sneakers' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_c.png"
            ];
        }
    } elseif ($height >= 171 && $height <= 180) {
        if ($weight < 50) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Chelsea Boots => <a href='https://lifestyle.kompas.com/read/2021/01/19/205528820/mengenal-chelsea-boots-sepatu-serbaguna-untuk-tampil-gaya?page=all' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_d.png"
            ];
        } elseif ($weight >= 51 && $weight <= 60) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Chelsea Boots => <a href='https://lifestyle.kompas.com/read/2021/01/19/205528820/mengenal-chelsea-boots-sepatu-serbaguna-untuk-tampil-gaya?page=all' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_d.png"
            ];
        } else {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Chelsea Boots => <a href='https://lifestyle.kompas.com/read/2021/01/19/205528820/mengenal-chelsea-boots-sepatu-serbaguna-untuk-tampil-gaya?page=all' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_d.png"
            ];
        }
    } elseif ($height >= 181 && $height <= 200) {
        if ($weight < 50) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Chukka Boots => <a href='https://lifestyle.kompas.com/read/2019/12/15/205750820/apa-itu-chukka-boots-mari-mengenalnya-lebih-dekat?page=all' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_e.png"
            ];
        } elseif ($weight >= 51 && $weight <= 60) {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Chukka Boots => <a href='https://lifestyle.kompas.com/read/2019/12/15/205750820/apa-itu-chukka-boots-mari-mengenalnya-lebih-dekat?page=all' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_e.png"
            ];
        } else {
            $shoeRecommendations[] = [
                "name" => "<span style='color: white;'>Sepatu Chukka Boots => <a href='https://lifestyle.kompas.com/read/2019/12/15/205750820/apa-itu-chukka-boots-mari-mengenalnya-lebih-dekat?page=all' target='_blank' style='color: white;'>Lihat Detail Alasan Sepatu Ini Cocok Untuk Anda</a></span>",
                "image" => "images/sepatu_e.png"
            ];
        }
    } else {
        // Jika tidak ada rekomendasi yang sesuai
        $shoeRecommendations[] = [
            ["name" => "<span style='color: white;'>Tidak ditemukan rekomendasi sepatu dengan spesisfikasi data yang anda maasukkan atau coba untuk memasukkan ulang data diatas</span>", "image" => "notFound.png"]
        ];
    }

    // Menampilkan hasil dan rekomendasi
    echo json_encode(["recommendations" => $shoeRecommendations]);
}
?>