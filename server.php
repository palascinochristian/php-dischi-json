<?php 
$json_text = file_get_contents('./albums.json');
$album = json_decode($json_text, true);


// Creazione di un nuovo array album  SOLO al submit del form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $new_album = [
        'title' => $_POST["title"],
        'artist' => $_POST["artist"],
        'year' => $_POST["year"],
        'cover_url' => $_POST["cover_url"]
    ];
    
    // Aggiunta del nuovo album all'array esistente
    $album[] = $new_album;
    
    // Salvataggio dell'array aggiornato nel file JSON
    file_put_contents('./albums.json', json_encode($album, JSON_PRETTY_PRINT));

    // Redirect alla pagina principale
    header('Location: index.php');
}
?>