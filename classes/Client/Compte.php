<?php 
	namespace App\Client;

class Compte
{
	private $nom;
	private $prenom;

	public function __construct(string $nomClient, string $prenomClient)
	{
		$this->nom = $nomClient;
		$this->prenom = $prenomClient;
	}
}
 ?>