<?php
$analyses = [
    [
        'title' => 'The Impact of the Printing Press on the Reformation',
        'author' => 'John Smith',
        'date' => 'May 15, 2023',
        'excerpt' => 'The invention of the printing press by Johannes Gutenberg in the 15th century had a profound impact on the spread of information and ideas during the Protestant Reformation.',
        'image' => '/placeholder.svg?height=200&width=300'
    ],
    [
        'title' => 'The Role of Women in World War II',
        'author' => 'Emily Johnson',
        'date' => 'June 2, 2023',
        'excerpt' => 'World War II marked a significant shift in the role of women in society, particularly in the workforce. As men were called to military service, women stepped into traditionally male-dominated fields.',
        'image' => '/placeholder.svg?height=200&width=300'
    ],
    [
        'title' => 'The Legacy of the Roman Empire in Modern Europe',
        'author' => 'Michael Brown',
        'date' => 'June 20, 2023',
        'excerpt' => 'The influence of the Roman Empire continues to be felt in modern Europe, centuries after its fall. This analysis explores the enduring legacy of Rome in various aspects of European society.',
        'image' => '/placeholder.svg?height=200&width=300'
    ]
];

foreach ($analyses as $analysis) {
    echo "<div class='analysis'>";
    echo "<img src='{$analysis['image']}' alt='{$analysis['title']}' class='analysis-thumbnail'>";
    echo "<h3>{$analysis['title']}</h3>";
    echo "<p class='author'>By {$analysis['author']}</p>";
    echo "<p class='date'>{$analysis['date']}</p>";
    echo "<p>{$analysis['excerpt']}</p>";
    echo "</div>";
}
?>