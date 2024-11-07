<?php
// Tablica zdjęć
$photos = [
    ['img_id' => 1, 'img' => "/zadaniegotowe/pliki/photo1.jpg", 'opis' => 'A beautiful sunset.', 'category_id' => 1],
    ['img_id' => 2, 'img' => "/zadaniegotowe/pliki/photo2.jpg", 'opis' => 'A serene beach.', 'category_id' => 2],
    ['img_id' => 3, 'img' => "/zadaniegotowe/pliki/photo3.jpg", 'opis' => 'A blooming flower.', 'category_id' => 3],
    ['img_id' => 4, 'img' => "/zadaniegotowe/pliki/photo4.jpg", 'opis' => 'Snow-covered mountains.', 'category_id' => 1],
    ['img_id' => 5, 'img' => "/zadaniegotowe/pliki/photo5.jpg", 'opis' => 'A forest in autumn.', 'category_id' => 3],
    ['img_id' => 6, 'img' => "/zadaniegotowe/pliki/photo6.jpg", 'opis' => 'City skyline at night.', 'category_id' => 2],
    ['img_id' => 7, 'img' => "/zadaniegotowe/pliki/photo7.jpg", 'opis' => 'A waterfall flowing.', 'category_id' => 3],
    ['img_id' => 8, 'img' => "/zadaniegotowe/pliki/photo8.jpg", 'opis' => 'A boat on a calm lake.', 'category_id' => 1],
    ['img_id' => 9, 'img' => "/zadaniegotowe/pliki/photo9.jpg", 'opis' => 'A field of lavender.', 'category_id' => 2],
    ['img_id' => 10, 'img' => "/zadaniegotowe/pliki/photo10.jpg", 'opis' => 'A snowy forest.', 'category_id' => 1],
    ['img_id' => 11, 'img' => "/zadaniegotowe/pliki/photo11.jpg", 'opis' => 'Aerial view of coral.', 'category_id' => 3],
    ['img_id' => 12, 'img' => "/zadaniegotowe/pliki/photo12.jpg", 'opis' => 'Market square.', 'category_id' => 2],
];

// Tablica kategorii
$categories = [
    ['category_id'=>1, 'name'=>'Nature'],
    ['category_id'=>2, 'name'=>'Cityscapes'],
    ['category_id'=>3, 'name'=>'Wildlife'],
    ['category_id'=>4, 'name'=>'New']
];

// Tablica komentarzy
$komentarze = [
    ['id_komentarza'=> 1, 'id_zdjecia'=> 1, 'ocena'=> 5, 'tresc'=>'Fantastyczne ujęcie!'],
    ['id_komentarza'=> 2, 'id_zdjecia'=> 1, 'ocena'=> 4, 'tresc'=>'Super kolorystyka, ale brakuje ostrości.'],
    ['id_komentarza'=> 3, 'id_zdjecia'=> 1, 'ocena'=> 3, 'tresc'=>'Ładne, ale bez szału.'],
    ['id_komentarza'=> 4, 'id_zdjecia'=> 2, 'ocena'=> 5, 'tresc'=>'Wspaniałe ujęcie, wygląda jak z profesjonalnej sesji!'],
    ['id_komentarza'=> 5, 'id_zdjecia'=> 2, 'ocena'=> 4, 'tresc'=>'Bardzo ładne zdjęcie, ale mogłoby być jaśniejsze.'],
    ['id_komentarza'=> 6, 'id_zdjecia'=> 2, 'ocena'=> 3, 'tresc'=>'Ładne, ale brakuje wyrazu.'],
    ['id_komentarza'=> 7, 'id_zdjecia'=> 3, 'ocena'=> 3, 'tresc'=>'Przeciętne, ale nie jest złe.'],
    ['id_komentarza'=> 8, 'id_zdjecia'=> 3, 'ocena'=> 2, 'tresc'=>'Kolory zbyt ciemne.'],
    ['id_komentarza'=> 9, 'id_zdjecia'=> 3, 'ocena'=> 4, 'tresc'=>'Podoba mi się kompozycja, choć można by dodać więcej światła.'],
    ['id_komentarza'=> 10, 'id_zdjecia'=> 4, 'ocena'=> 5, 'tresc'=>'Perfekcyjnie uchwycony moment!'],
    ['id_komentarza'=> 11, 'id_zdjecia'=> 4, 'ocena'=> 4, 'tresc'=>'Bardzo dobre, ale mogłoby być bardziej wyraziste.'],
    ['id_komentarza'=> 12, 'id_zdjecia'=> 4, 'ocena'=> 5, 'tresc'=>'Idealne zdjęcie, nic dodać, nic ująć!'],
    ['id_komentarza'=> 13, 'id_zdjecia'=> 5, 'ocena'=> 2, 'tresc'=>'Zdjęcie nieco niewyraźne, ale klimat jest.'],
    ['id_komentarza'=> 14, 'id_zdjecia'=> 5, 'ocena'=> 3, 'tresc'=>'Nie jest złe, choć mogłoby być lepiej oświetlone.'],
    ['id_komentarza'=> 15, 'id_zdjecia'=> 5, 'ocena'=> 1, 'tresc'=>'Niestety, zdjęcie jest rozmazane.'],
    ['id_komentarza'=> 16, 'id_zdjecia'=> 6, 'ocena'=> 5, 'tresc'=>'Świetny kadr i kolory!'],
    ['id_komentarza'=> 17, 'id_zdjecia'=> 6, 'ocena'=> 4, 'tresc'=>'Dobre zdjęcie, ale nieco za jasne.'],
    ['id_komentarza'=> 18, 'id_zdjecia'=> 6, 'ocena'=> 5, 'tresc'=>'Idealne ujęcie! Brawo!'],
    ['id_komentarza'=> 19, 'id_zdjecia'=> 7, 'ocena'=> 1, 'tresc'=>'Zdjęcie bardzo rozmazane.'],
    ['id_komentarza'=> 20, 'id_zdjecia'=> 7, 'ocena'=> 2, 'tresc'=>'Nie podoba mi się efekt końcowy.'],
    ['id_komentarza'=> 21, 'id_zdjecia'=> 7, 'ocena'=> 3, 'tresc'=>'Niestety, brakuje ostrości.'],
    ['id_komentarza'=> 22, 'id_zdjecia'=> 8, 'ocena'=> 5, 'tresc'=>'Rewelacja! Uwielbiam to zdjęcie!'],
    ['id_komentarza'=> 23, 'id_zdjecia'=> 8, 'ocena'=> 4, 'tresc'=>'Ładne kolory, ciekawy kadr.'],
    ['id_komentarza'=> 24, 'id_zdjecia'=> 8, 'ocena'=> 5, 'tresc'=>'Jedno z najlepszych zdjęć, jakie widziałem!'],
    ['id_komentarza'=> 25, 'id_zdjecia'=> 9, 'ocena'=> 4, 'tresc'=>'Bardzo dobre ujęcie, dobra kompozycja.'],
    ['id_komentarza'=> 26, 'id_zdjecia'=> 9, 'ocena'=> 3, 'tresc'=>'Nie zachwyca, ale jest w porządku.'],
    ['id_komentarza'=> 27, 'id_zdjecia'=> 9, 'ocena'=> 5, 'tresc'=>'Fantastyczne! Polecam.'],
    ['id_komentarza'=> 28, 'id_zdjecia'=> 10, 'ocena'=> 3, 'tresc'=>'Nie jest najgorsze, ale też nie najlepsze.'],
    ['id_komentarza'=> 29, 'id_zdjecia'=> 10, 'ocena'=> 2, 'tresc'=>'Kolory zbyt wyblakłe.'],
    ['id_komentarza'=> 30, 'id_zdjecia'=> 10, 'ocena'=> 4, 'tresc'=>'Przeciętne, ale ma swój urok.'],
    ['id_komentarza'=> 31, 'id_zdjecia'=> 11, 'ocena'=> 5, 'tresc'=>'Idealne zdjęcie, bardzo profesjonalne!'],
    ['id_komentarza'=> 32, 'id_zdjecia'=> 11, 'ocena'=> 5, 'tresc'=>'Rewelacyjne! Uwielbiam!'],
    ['id_komentarza'=> 33, 'id_zdjecia'=> 11, 'ocena'=> 4, 'tresc'=>'Bardzo dobre, choć mogłoby być ostrzejsze.'],
    ['id_komentarza'=> 34, 'id_zdjecia'=> 12, 'ocena'=> 2, 'tresc'=>'Mogłoby być lepiej skadrowane.'],
    ['id_komentarza'=> 35, 'id_zdjecia'=> 12, 'ocena'=> 3, 'tresc'=>'Nie najgorsze, ale nie do końca przemawia do mnie.'],
    ['id_komentarza'=> 36, 'id_zdjecia'=> 12, 'ocena'=> 4, 'tresc'=>'Dobre ujęcie, ciekawe kolory.']
];

// ocena zamieniona na gwiazdki
function gwiazdki($ocena) {
    $gwiazdki = str_repeat('★', $ocena);
    $pusteGwiazdki = str_repeat('☆', 5 - $ocena);
    return $gwiazdki . $pusteGwiazdki;
}

// wyświetlenia komenatrzy do zdjęcia
function photo_comment($id_zdjecia, $komentarze) {
    foreach ($komentarze as $koment) {
        if ($id_zdjecia == $koment['id_zdjecia']){
            echo ''.$koment['tresc'].' <br>';
            echo ''.gwiazdki($koment['ocena']) . "<br>";
        }
    }
}

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
            photo_comment($img_id, $komentarze);
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
