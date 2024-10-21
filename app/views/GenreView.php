<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Genre</title>
    <link rel="stylesheet" type="text/css" href="/Wexo-code/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="genre-movie-wrapper">
        <a class="go-back" href="/Wexo-code/">Go Back</a>
        <h1><?php echo $genre; ?></h1>
        <ul class="genre-movie-list">
            <?php foreach ($movies['results'] as $movie) { ?>
                <?php
                ?>
                <li class="genre-movie-list-item" data-movie_id="<?php echo $movie['id']; ?>" data-movie_title="<?php echo $movie['title']; ?>" data-movie_poster="<?php echo $movie['backdrop_path']; ?>">
                    <a class="movie-details" href="/Wexo-code/movie/<?php echo $movie['id']; ?>"><img src="https://image.tmdb.org/t/p/original/<?php echo $movie['backdrop_path'] ?>">
                        <h4><?php echo $movie['title']; ?></h4>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <div class="pagination">
            <?php if ($movies['page'] > 1) { // Check if there's a previous page 
            ?>
                <a href="/Wexo-code/genre/<?php echo $id; ?>/page/<?php echo $movies['page'] - 1; ?>">Prev</a>
            <?php } ?>
                <p><?php echo $movies['page']; ?></p>
            <?php if ($movies['page'] < $movies['total_pages']){ // Check if there's a next page 
            ?>
                <a href="/Wexo-code/genre/<?php echo $id; ?>/page/<?php echo $movies['page'] + 1; ?>">Next</a>
            <?php } ?>
        </div>

    </div>

    <script src="../public/js/script.js"></script>
</body>

</html>