<?php 
    function view(string $filename, array $data = []): void
    {
        // create variables from the associative array
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        require_once __DIR__ . 'header.php' . $filename . '.php';
    }
    
?>