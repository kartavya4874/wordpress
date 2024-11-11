<?php
$events = [
    [
        'title' => 'World War II',
        'date' => '1939-1945',
        'description' => 'A global war that involved many of the world\'s nations. It was the deadliest conflict in human history.',
        'image' => '/placeholder.svg?height=200&width=300'
    ],
    [
        'title' => 'French Revolution',
        'date' => '1789-1799',
        'description' => 'A period of far-reaching social and political upheaval in France that overthrew the monarchy.',
        'image' => '/placeholder.svg?height=200&width=300'
    ],
    [
        'title' => 'Industrial Revolution',
        'date' => '1760-1840',
        'description' => 'The transition to new manufacturing processes in Europe and the United States.',
        'image' => '/placeholder.svg?height=200&width=300'
    ]
];

foreach ($events as $event) {
    echo "<div class='event'>";
    echo "<img src='{$event['image']}' alt='{$event['title']}' class='event-thumbnail'>";
    echo "<h3>{$event['title']}</h3>";
    echo "<p class='date'>{$event['date']}</p>";
    echo "<p>{$event['description']}</p>";
    echo "</div>";
}
?>