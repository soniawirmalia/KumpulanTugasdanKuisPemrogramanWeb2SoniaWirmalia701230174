<?php
$headers = [
    "No", 
    "Nama", 
    "Gambar", 
    "Negara", 
    "Produk_Utama", 
    "Pendiri" 
];

$perusahaan_teknologi = [
    [
        "Nama" => "Apple Inc",
        "Negara" => "Amerika Serikat",
        "Produk_Utama" => "Iphone, MacBook, iPad",
        "Pendiri" => "Steve Jobs, Steve Wozniak, Ronald Wayne",
        "Gambar" => "img/gambar1.jpg"
    ],
    [
       "Nama" => "Microsoft",
        "Negara" => "Amerika Serikat",
        "Produk_Utama" => "Windows, Microsoft Office, Xbox",
        "Pendiri" => "Bill Gates, Paul Allen",
        "Gambar" => "img/gambar2.jpg"
    ],
    [
       "Nama" => "Google",
        "Negara" => "Amerika Serikat",
        "Produk_Utama" => "Search Engine, Android, Youtube",
        "Pendiri" => "Larry Page, Sergey Brin",
        "Gambar" => "img/gambar3.jpg"
    ],
    [
       "Nama" => "Amazon",
        "Negara" => "Amerika Serikat",
        "Produk_Utama" => "E-Commerce, Amazon Web Services",
        "Pendiri" => "Jeff Bezos",
        "Gambar" => "img/gambar4.jpg"
    ],
    [
       "Nama" => "Samsung Electronics",
        "Negara" => "Korea Selatan",
        "Produk_Utama" => "Smartphone, Televisi, Semikonduktor",
        "Pendiri" => "Lee Byung-chul",
        "Gambar" => "img/gambar5.jpg"
    ],
    [
        "Nama" => "Intel Corporation",
        "Negara" => "Amerika Serikat",
        "Produk_Utama" => "Processor, Chipset",
        "Pendiri" => "Gordon Moore, Robert Noyce",
        "Gambar" => "img/gambar6.jpg"
    ],
    [
        "Nama" => "Tesla, Inc",
        "Negara" => "Amerika Serikat",
        "Produk_Utama" => "Mobil Listrik, Baterai",
        "Pendiri" => "Elon Musk, JB Straubel, Ian Wright, Marc Tarpenning, Martin Eberhard",
        "Gambar" => "img/gambar7.jpg"
    ],
    [
        "Nama" => "Sony Corporation",
        "Negara" => "Jepang",
        "Produk_Utama" => "PlayStation, Televisi, Kamera",
        "Pendiri" => "Masaru Ibuka, Akio Morita",
        "Gambar" => "img/gambar8.jpg"
    ],
    [
        "Nama" => "Alibaba Group",
        "Negara" => "China",
        "Produk_Utama" => "E-Commerce, Cloud Computing",
        "Pendiri" => "Jack Ma",
        "Gambar" => "img/gambar9.jpg"
    ],
    [
       "Nama" => "Facebook (Meta Platforms)",
        "Negara" => "Amerika Serikat",
        "Produk_Utama" => "Facebook, Instagram, WhatsApp",
        "Pendiri" => "Mark Zuckerberg",
        "Gambar" => "img/gambar10.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Teknologi</title>
    <style>
        table {
            width: 100%; 
        }
        td, th {
            text-align: center; 
        }
    </style>
</head>
<body>
    <table border="2" cellpadding="3" cellspacing="3">
        <tr>
            <?php foreach($headers as $header): ?>
                <th><?= $header ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach($perusahaan_teknologi as $index => $item) : ?>
            <tr>
                <td><?= $index + 1 ?></td> 
                <td><?= $item['Nama'] ?></td>
                <td style="display: flex; justify-content: center;"><img src="<?= $item['Gambar'] ?>" width="50" height="50"></td>
                <td><?= $item['Negara'] ?></td>
                <td><?= $item['Produk_Utama'] ?></td>
                <td><?= $item['Pendiri'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
