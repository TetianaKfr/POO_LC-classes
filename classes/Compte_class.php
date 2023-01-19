<?php
/**
 * Classe correspondant a un compte bancaire
 */
abstract class Compte
{
	//Proprietes
	/**
	 * Titulaire du compt
	 * @var string
	 */
	protected $titulaire;
	/**
	 * Solde du compte
	 * @var float
	 */
	protected $solde;
	
	//Methodes
	
/**
 * Constructeur du compte bancaire
 *
 * @param string $nomTitulaire Nom du Titulaire
 * @param float $montant
 */
	public function __construct(string $nomTitulaire, float $montant)
	{
// on attribue le nom a la propriete titulaire de l'instance cree, 
$this->titulaire = $nomTitulaire;
$this->solde = $montant;
	
	}
/********************************************* */	
//Accesseurs
//Getters

/**
 * Retourne le titulaire du compte
 * @return string Titulaire du compte
 */
public function getTitulaire() : string
{
    return $this->titulaire;
}

/**
 * Retourne le solde du compte
 * @return float Solde du compte
 */
public function getSolde() : float
{
    return $this->solde;
}
//Setters

	/**
 * Définit le titulaire du compte
 * @param string $titulaire Titulaire du compte
 * @return Compte Compte bancaire
 */
public function setTitulaire(string $nomTitulaire): self
{
		if ($nomTitulaire != "") {
			$this->titulaire = $nomTitulaire;
		}
    return $this;
}

/**
 * Définit le solde du compte
 * @param float $solde Solde du compte
 * @return Compte Compte bancaire
 */
public function setSolde(float $solde):self
{
    if($solde >= 0){
        $this->solde = $solde;
    }

    return $this;
}


 /********************************************************
  * Voir le solde du compte
  * @return void 
  */
 public function voirSolde()
	{
    echo "Le solde du compte est de $this->solde euros";
	}
	/**
 * Déposer de l'argent sur le compte
 *
 * @param float $montant Montant déposé
 * @return void
 */
public function deposer(float $montant)
 {
    // On vérifie si le montant est positif
    if($montant > 0){
        $this->solde += $montant;
    }
 }
	/**
 * Retire un montant du solde du compte
 *
 * @param float $montant Montant à retirer
 * @return void
 */
public function retirer(float $montant)
 {
    // On vérifie le montant et le solde
    if($montant > 0 && $this->solde >= $montant){
        $this->solde -= $montant;
    }else{
        echo "Montant invalide ou solde insuffisant <br>";
    }
 }
 

}
?>