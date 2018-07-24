<?php

namespace Drupal\mycinema\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\mycinema\Controller\ParserMegogoController;

class Film extends ControllerBase {

  /**
   * Возвращает на страницу все популярные фильмы и данные о них
   */
  public function getPopularFilms() {
    $output           = [];
    $output['#title'] = 'Список популярных фильмов из Megogo';

    $film = '<b>Films:</b> Film1, Film2, Film3';

    $output['#markup'] = $film;

    return $output;
  }
}