<?php

require_once(PATH_VIEW . 'TwigView.php');

class DefaultView extends TwigView {

    /**
     * 
     */
    public function renderIndex($parameters = array()) {
        echo self::getTwig()->render('index.html.twig', $parameters);
    }

}
