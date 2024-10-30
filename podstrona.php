<?php
// Tablica zdjęć
$photos = [
    ['img_id' => 1, 'img' => "/KN/pliki/photo1.jpg", 'opis' => 'A beautiful sunset.', 'category_id' => 1],
    ['img_id' => 2, 'img' => "/KN/pliki/photo2.jpg", 'opis' => 'A serene beach.', 'category_id' => 2],
    ['img_id' => 3, 'img' => "/KN/pliki/photo3.jpg", 'opis' => 'A blooming flower.', 'category_id' => 3],
    ['img_id' => 4, 'img' => "/KN/pliki/photo4.jpg", 'opis' => 'Snow-covered mountains.', 'category_id' => 1],
    ['img_id' => 5, 'img' => "/KN/pliki/photo5.jpg", 'opis' => 'A forest in autumn.', 'category_id' => 3],
    ['img_id' => 6, 'img' => "/KN/pliki/photo6.jpg", 'opis' => 'City skyline at night.', 'category_id' => 2],
    ['img_id' => 7, 'img' => "/KN/pliki/photo7.jpg", 'opis' => 'A waterfall flowing.', 'category_id' => 3],
    ['img_id' => 8, 'img' => "/KN/pliki/photo8.jpg", 'opis' => 'A boat on a calm lake.', 'category_id' => 1],
    ['img_id' => 9, 'img' => "/KN/pliki/photo9.jpg", 'opis' => 'A field of lavender.', 'category_id' => 2],
    ['img_id' => 10, 'img' => "/KN/pliki/photo10.jpg", 'opis' => 'A snowy forest.', 'category_id' => 1],
    ['img_id' => 11, 'img' => "/KN/pliki/photo11.jpg", 'opis' => 'Aerial view of coral.', 'category_id' => 3],
    ['img_id' => 12, 'img' => "/KN/pliki/photo12.jpg", 'opis' => 'Market square.', 'category_id' => 2],
];

// Tablica kategorii
$categories = [
    ['category_id'=>1, 'name'=>'Nature'],
    ['category_id'=>2, 'name'=>'Cityscapes'],
    ['category_id'=>3, 'name'=>'Wildlife'],
    ['category_id'=>4, 'name'=>'New']
];

// Funkcja zwracająca nazwę kategorii na podstawie jej ID
function getCategoryName($category_id, $categories) {
    foreach ($categories as $category) {
        if ($category['category_id'] == $category_id) {
            return $category['name'];
        }
    }
    return 'Unknown'; 
}
// Sprawdzenie, czy przekazano identyfikator zdjęcia w zmiennej GET
if (isset($_GET['img_id'])) {
    $img_id = (int)$_GET['img_id'];

    // Wyszukaj zdjęcie o podanym ID
    foreach ($photos as $photo) {
        if ($photo['img_id'] == $img_id) {
            // Wyświetl powiększone zdjęcie
            $category_name = getCategoryName($photo['category_id'], $categories);
            echo '<img src="' . $photo['img'] . '" style="width:500px;"><br>';
            echo '<h2>' . $photo['opis'] . '</h2>';
            echo '<p>Kategoria: <a href="?id=4&category_id='.$photo['category_id'].'">'.getCategoryName($photo['category_id'], $categories).'</a></p>';
        }
    }
} else 
    // Sprawdzenie, czy przekazano identyfikator zdjęcia w zmiennej GET
if (isset($_GET['img_id'])) {
    $img_id = (int)$_GET['img_id'];

    // Wyszukaj zdjęcie o podanym ID
    foreach ($photos as $photo) {
        if ($photo['img_id'] == $img_id) {
            // Wyświetl powiększone zdjęcie
            $category_name = getCategoryName($photo['category_id'], $categories);
            echo '<h2>' . $photo['opis'] . '</h2>';
            echo '<img src="' . $photo['img'] . '" style="width:500px;"><br>';
            echo '<p>Kategoria: <a href="?id=4&category_id='.$photo['category_id'].'">'.getCategoryName($photo['category_id'], $categories).'</a></p>';
            echo '<a href="?id=4">Back to gallery</a>';
        }
    }
} else {
    // Sprawdzenie, czy przekazano identyfikator kategorii w zmiennej GET
    if (isset($_GET['category_id'])) {
        $category_id = (int)$_GET['category_id'];

        // Wyświetl miniatury tylko z wybranej kategorii
echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-between;">';

foreach ($photos as $photo) {
    if ($photo['category_id'] == $category_id) {
        echo '<div style="flex: 0 1 calc(33.33% - 20px); margin: 10px; text-align: center; box-sizing: border-box;">';
        echo '<a href="?id=4&img_id=' . $photo['img_id'] . '" style="display: block; width: 100%;">';
        // Dodanie stylu dla rozmiaru obrazka i kontenera
        echo '<div style="width: 100%; padding-top: 75%; position: relative; overflow: hidden; margin: 0 auto;">';
        echo '<img src="' . $photo['img'] . '" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">';
        echo '</div>';
        echo '</a>';
        echo '<p>' . $photo['opis'] . '</p>';
        echo '<p>Category: <a href="?id=4&category_id=' . $photo['category_id'] . '">' . getCategoryName($photo['category_id'], $categories) . '</a></p>';
        echo '</div>';
    }
}

echo '</div>';


        echo '</div>';
    } else {
        // Wyświetlanie galerii wszystkich zdjęć, jeśli nie wybrano kategorii
        echo '<h2>All Photos</h2>';
        echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-between;">';

        foreach ($photos as $photo) {
            echo '<div style="flex: 1 1 calc(33% - 20px); margin: 10px; text-align: center; box-sizing: border-box;">';
            echo '<a href="?id=4&img_id=' . $photo['img_id'] . '">';
            echo '<img src="' . $photo['img'] . '" style="width: 100%; height: auto; max-width: 100%;">';
            echo '</a>';
            echo '<p>' . $photo['opis'] . '</p>';
            echo '<p><a href="?id=4&category_id=' . $photo['category_id'] . '">' . getCategoryName($photo['category_id'], $categories) . '</a></p>';
            echo '</div>';
        }

        echo '</div>';
    }
}
