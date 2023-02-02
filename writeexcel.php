<?php 

require_once 'vendor/autoload.php';

use Box\Spout\Writer\Common\Creator\WriterEntityFactory;

$rows = [
    ['id', 'title', 'poster', 'overview', 'release_date', 'genres'],
    [181808, "Star Wars: The Last Jedi", "https://image.tmdb.org/t/p/w500/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg", "Rey develops her newly discovered abilities with the guidance of Luke Skywalker, who is unsettled by the strength of her powers. Meanwhile, the Resistance prepares to do battle with the First Order.", 1513123200, "Documentary"],
    [383498, "Deadpool 2", "https://image.tmdb.org/t/p/w500/to0spRl1CMDvyUbOnbb4fTk3VAd.jpg", "Wisecracking mercenary Deadpool battles the evil and powerful Cable and other bad guys to save a boy's life.", 1526346000, "Action, Comedy, Adventure"],
    [157336, "Interstellar", "https://image.tmdb.org/t/p/w500/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg", "Interstellar chronicles the adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.",1415145600,"Adventure, Drama, Science Fiction"]
];
$path = 'data/new-file.xlsx';
$writer = WriterEntityFactory::createXLSXWriter();
$writer->openToFile($path);
foreach ($rows as $row) {
    $rowFromValues = WriterEntityFactory::createRowFromArray($row);
    $writer->addRow($rowFromValues);
}
$writer->close();

?>