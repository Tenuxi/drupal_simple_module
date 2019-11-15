<?php

namespace Drupal\drupal_controller\Controller;

class ArticleController {
    public function page() {

        $items = array(
            array('name' => 'Artikkeli 1'),
            array('name' => 'Artikkeli 2'),
            array('name' => 'Artikkeli 3'),
            array('name' => 'Artikkeli 4'),
        );

        return array(
            '#theme' => 'article_list',
            '#items' => $items,
            '#title' => 'Artikkeli lista'
        );
    }
}