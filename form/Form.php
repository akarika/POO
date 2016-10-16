<?php

/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 15/10/2016
 * Time: 12:49
 */

/**
 * Class Form
 * permet de générer un formulaire simplement
 */
class Form
{
    /**
     * @var array
     * donées tilsé par le formulaire
     */
    private $data;
    /**
     * @var string tag utilsié pour entourer les champs
     */
    public $tag = "p";

    /**
     * Form constructor.
     * @param array $data données tilsé par le formulaire
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param $html code HTML à entourer
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->tag}>$html<{$this->tag}/>";
    }

    /**
     * @param $index string Inde la valeur a recuperer
     * @return mixed|null
     */
    private function getValue($index)
    {
        return $this->data[$index] ?? null;

    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name)
    {
        return $this->surround('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');

    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround("<input type=\"submit\" value='Envoyer'>");
    }

}