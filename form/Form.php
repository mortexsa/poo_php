<?php

/**
 * Class Form
 * Permet de generer un formulaire rapidement et simplement
 */

class Form{

    /**
     * @var array Données utilisée par le formulaire
     */
	private $data;
    /**
     * @var string Tag utiliser pour entourer les champs
     */
	public $surround = 'p';

    /**
     * Form constructor.
     * @param array $data
     */
	public function __construct($data = array()){
		$this->data = $data;
	}

    /**
     * @param $html
     * @return string
     */
	private function surround($html){
		return "<{$this->surround}>{$html}</{$this->surround}>";
	}

    /**
     * @param $index string Index de la valeur a recuperer.
     * @return string
     */
	private function getValue($index){
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

    /**
     * @param $name
     * @return string
     */
	public function input($name){
		return $this->surround('<input type="text" name="'.$name.'"value="'.$this->getValue($name).'">');
	}

    /**
     * @return string
     */
	public function submit(){
		return $this->surround('<button type="submit">Envoyer</button>');
	}
}