<?PHP

Class Client {
	
	private $idc;
	private $nom;
	private $prenom;
	private $dNaiss;
	private $sexe;
	private $email;
	private $numero;
	private $pts;
	private $adr;

	
	
	
	public function __construct ($idc, $nom, $prenom, $dNaiss, $sexe, $email, $numero, $adr, $pts)
	{
		$this->idc=$idc;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->dNaiss=$dNaiss;
		$this->sexe=$sexe;
		$this->email=$email;
		$this->numero=$numero;
		$this->adr=$adr;
		$this->pts=$pts;

	}
	
	public function getIdc()     {return $this->idc;}
	public function getNom()     {return $this->nom;}
	public function getPrenom()  {return $this->prenom;}
    public function getdNaiss()  {return $this->dNaiss;}
	public function getSexe()    {return $this->sexe;}
	public function getEmail()   {return $this->email;}
	public function getnumero()  {return $this->numero;}
	public function getadr()    {return $this->adr;}
	public function getpts()  {return $this->pts;}

	
	public function setIdc($idc)         {$this->idc=$idc;}
	public function setNom($nom)         {$this->nom=$nom;}
	public function setPrenom($prenom)   {$this->prenom=$prenom;}
	public function setdNaiss($dNaiss)   {$this->dNaiss=$dNaiss;}
	public function setSexe($sexe)       {$this->sexe=$sexe;}
	public function setEmail($email)     {$this->email=$email;}
	public function setnumero($numero)   {$this->numero=$numero;}
	public function setadr($adr)       {$this->adr=$adr;}
	public function setpts($pts)      {$this->pts=$pts;}


	
}
?>