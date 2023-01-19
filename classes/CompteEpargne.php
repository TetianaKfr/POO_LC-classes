<?php 
class CompteEpargne extends Compte
{
/**
 * Taux d'intérêts
 * @var int
 */
private $taux_interets;

/**
 * Constructeur du compte courant
 * @param string $titulaire Titulaire du compte
 * @param float $solde Solde du compte
 * @param int $taux Taux d'intérêts du compte
 * @return void 
 */
public function __construct(string $titulaire, float $solde, int $taux)
{
    // On appelle le constructeur du parent
    parent::__construct($titulaire, $solde);

    // On définit les propriétés "locales"
    $this->taux_interets = $taux;
}
public function verserInterets(){
	if($this->solde > 0){
			$this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
	}else{
			echo 'Solde insuffisant';
	}
}
public function getTauxInterets():int
{
    return $this->taux_interets;
}

public function setTauxInterets(int $taux) : self
{
        if ($taux >= 0) {
            $this->taux_interets = $taux;
        }

    return $this;
}


}


?>