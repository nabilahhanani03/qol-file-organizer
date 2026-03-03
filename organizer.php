<?php

// Get folder path from user
$directory = $argv[1] ?? null;

if (!$directory) {
    echo "Please provide a folder path. \n";
    exit;
}

if (!is_dir($directory)){
    echo "Directory does not exist. \n";
    exit;
}

echo "Scanning directory: $directory\n";

//Define file categories
$categories = [
    "Images" => ["jpg", "jpeg", "png", "gif"],
    "Documents" => ["pdf", "doc", "docx", "txt"],
    "Videos" => ["mp4", "mkv", "avi"],
    "Music" => ["mp3", "wav"],
    "Archives" => ["zip", "rar"]
];

//Scan & organize files
$files = scandir($directory);

foreach ($files as $file){
    $filePath = $directory . DIRECTORY_SEPARATOR . $file;
    if (is_file($filePath)){
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        foreach ($categories as $folder => $extensions){
            if (in_array($extension, $extensions)){
                $targetFolder = $directory . DIRECTORY_SEPARATOR . $folder;

                if (!is_dir($targetFolder)){
                    mkdir($targetFolder);
                }

                rename($filePath, $targetFolder . DIRECTORY_SEPARATOR . $file);

                echo "Moved $file to $folder\n";
                break;
            }
        }
    }
}
echo "Organization complete.\n";