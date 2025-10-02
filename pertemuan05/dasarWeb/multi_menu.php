<?php
// Mendefinisikan struktur menu dalam array multidimensi
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

/**
 * Fungsi rekursif untuk menampilkan menu bertingkat.
 * Fungsi ini akan memanggil dirinya sendiri jika menemukan 'subMenu'.
 * @param array $menu Array yang berisi struktur menu.
 */
function tampilkanMenuBertingkat(array $menu) {
    // Membuka tag <ul> untuk setiap level menu
    echo "<ul>";
    
    // Melakukan iterasi untuk setiap item di level menu saat ini
    foreach ($menu as $item) {
        // Mencetak nama item menu di dalam tag <li>
        echo "<li>{$item['nama']}";
        
        // Memeriksa apakah item saat ini memiliki 'subMenu'
        if (isset($item['subMenu'])) {
            // Jika ada, panggil kembali fungsi ini (rekursi) 
            // dengan data subMenu sebagai argumennya.
            tampilkanMenuBertingkat($item['subMenu']);
        }
        
        // Menutup tag </li>
        echo "</li>";
    }
    
    // Menutup tag </ul>
    echo "</ul>";
}

// Memanggil fungsi untuk pertama kali dengan menu utama
tampilkanMenuBertingkat($menu);
?>