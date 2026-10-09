<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['store'])) {
    header('Location: ../../pages/authors/index.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$bio = trim($_POST['bio'] ?? '');

if ($name === '') {
    header('Location: ../../pages/authors/create.php');
    exit;
}

$dataFile = __DIR__ . '/../../data/authors.json';

if (!is_file($dataFile)) {
    http_response_code(500);
    exit('File data penulis tidak ditemukan.');
}

$authors = json_decode(file_get_contents($dataFile), true);

if (!is_array($authors)) {
    http_response_code(500);
    exit('Data penulis tidak valid.');
}

$ids = array_column($authors, 'id');
$newId = empty($ids) ? 1 : max($ids) + 1;

$authors[] = [
    'id' => $newId,
    'name' => $name,
    'total_books' => 0,
    'bio' => $bio,
];

$result = file_put_contents(
    $dataFile,
    json_encode(
        $authors,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    ),
    LOCK_EX
);

if ($result === false) {
    http_response_code(500);
    exit('Gagal menyimpan data penulis.');
}

header('Location: ../../pages/authors/index.php');
exit;

<?php

if (isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
}

?>


