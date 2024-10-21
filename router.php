<?php
// router.php
class Router
{
    public static function route($path, $id = null, $page = 1)
    {
        error_log("Requested path: $path");
        switch ($path) {
            case '':
                require_once 'app/controllers/MovieController.php';
                $controller = new MovieController();
                $controller->showMoviesFrontPage();
                break;

            case 'movie':
                require_once 'app/controllers/MovieController.php';
                $controller = new MovieController();
                $controller->single_movie_view($id);
                break;

            case 'genre':
                require_once 'app/controllers/MovieController.php';
                $controller = new MovieController();
                $controller->getMoviesByGenreAndPage($id, $page);
                break;

            case 'ajax/movieajax':
                require_once 'app/ajax/MovieAjax.php';
                break;

            default:
                echo "404 - Page not found";
                break;
        }
    }
}
