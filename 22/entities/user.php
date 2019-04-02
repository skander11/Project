<?PHP

Class User {
	
	private $idc;
	private $email;
	private $nom;
	private $prenom;
	private $sexe;
	private $adr;
	private $dNaiss;
	private $numero;

	
	
	
	public function __construct ($idc, $email, $nom, $prenom, $sexe, $adr, $dNaiss, $numero)
	{
		$this->idc=$idc;
		$this->email=$email;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sexe=$sexe;
		$this->adr=$adr;
		$this->dNaiss=$dNaiss;
		$this->numero=$numero;

	}
	
	public function getIdc()     {return $this->idc;}
	public function getEmail()   {return $this->email;}
	public function getNom()     {return $this->nom;}
	public function getPrenom()  {return $this->prenom;}
    public function getSexe()  {return $this->sexe;}
	public function getadr()    {return $this->adr;}
	public function getdNaiss()  {return $this->dNaiss;}
	public function getnumero()    {return $this->numero;}

	
	public function setIdc($idc)         {$this->idc=$idc;}
	public function setEmail($email)     {$this->email=$email;}
	public function setNom($nom)         {$this->nom=$nom;}
	public function setPrenom($prenom)   {$this->prenom=$prenom;}
	public function setSexe($sexe)       {$this->sexe=$sexe;}
	public function setadr($adr)         {$this->adr=$adr;}
	public function setdNaiss($dNaiss)   {$this->dNaiss=$dNaiss;}
	public function setnumero($numero)   {$this->numero=$numero;}
	

	
}
?>