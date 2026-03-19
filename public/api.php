<?php
// API Backend for Where In Borg

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

action = isset($_GET['action']) ? $_GET['action'] : 'listFiles';

switch ($action) {
    case 'listFiles':
        listFiles();
        break;
    case 'search':
        search();
        break;
    case 'getArchives':
        getArchives();
        break;
    default:
        echo json_encode(['error' => 'Unknown action']);
}

function listFiles() {
    path = isset($_GET['path']) ? $_GET['path'] : '/';
    page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    
    // Mock data
    $files = [
        ['name' => 'file1.txt', 'type' => '-', 'size' => 1024, 'mtime' => '2026-03-19'],
        ['name' => 'folder1', 'type' => 'd', 'size' => 0, 'mtime' => '2026-03-18'],
        ['name' => 'file2.pdf', 'type' => '-', 'size' => 2048, 'mtime' => '2026-03-17']
    ];
    
    echo json_encode(['files' => $files, 'hasNextPage' => false]);
}

function search() {
    query = isset($_GET['query']) ? $_GET['query'] : '';
    
    // Mock search results
    $results = [
        ['name' => 'document.pdf', 'type' => '-', 'size' => 5120, 'mtime' => '2026-03-19']
    ];
    
    echo json_encode(['files' => $results, 'hasNextPage' => false]);
}

function getArchives() {
    $archives = ['backup-2026-03-19', 'backup-2026-03-18', 'backup-2026-03-17'];
    echo json_encode(['archives' => $archives]);
}
?>