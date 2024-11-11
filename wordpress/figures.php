<?php
$figures = [
    [
        'name' => 'Napoleon Bonaparte',
        'years' => '1769-1821',
        'description' => 'French statesman and military leader who rose to prominence during the French Revolution.',
        'image' => '/placeholder.svg?height=200&width=300'
    ],
    [
        'name' => 'Queen Elizabeth I',
        'years' => '1533-1603',
        'description' => 'Queen of England and Ireland from 1558 until her death in 1603.',
        'image' => '/placeholder.svg?height=200&width=300'
    ],
    [
        'name' => 'Mahatma Gandhi',
        'years' => '1869-1948',
        'description' => 'Indian lawyer, anti-colonial nationalist and political ethicist who employed nonviolent resistance.',
        'image' => '/placeholder.svg?height=200&width=300'
    ]
];

foreach ($figures as $figure) {
    echo "<div class='figure'>";
    echo "<img src='{$figure['image']}' alt='{$figure['name']}' class='figure-portrait'>";
    echo "<h3>{$figure['name']}</h3>";
    echo "<p class='years'>{$figure['years']}</p>";
    echo "<p>{$figure['description']}</p>";
    echo "</div>";
}
?>