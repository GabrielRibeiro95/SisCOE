<?php
	
	class Usuario {
		private $nome;
		private $email;
		private $tel;
		private $cargo;
		private $mat;
		private $nasc;
		private $ing;
		private $foto;
		
		public function __construct($nome, $email, $tel, $cargo, $mat, $nasc, $ing, $foto) {
			$this->nome=$nome;
			$this->email=$email;
			$this->telefone=$tel;
			$this->cargo=$cargo;
			$this->mat=$mat;
			$this->nasc=$nasc;
			$this->ing=$ing;
			$this->foto=$foto;
		}
		
		public function getNome() {
			return $this->nome;
		}
		
		public function setNome($nome) {
			$this->nome=$nome;
		}
		
		public function getEmail() {
			return $this->email;
		}
		
		public function setEmail($email) {
			$this->email=$email;
		}
		
		public function getTel() {
			return $this->tel;
		}
		
		public function setTel($tel) {
			$this->tel=$tel;
		}
		
		public function getCargo() {
			return $this->cargo;
		}
		
		public function setCargo($cargo) {
			$this->cargo=$cargo;
		}
		
		public function getMat() {
			return $this->mat;
		}
		
		public function setMat($mat) {
			$this->mat=$mat;
		}
		
		public function getNasc() {
			return $this->nasc;
		}
		
		public function setNasc($nasc) {
			$this->nasc=$nasc;
		}
		
		public function getIng() {
			return $this->ing;
		}	
		
		public function setIng($ing) {
			$this->ing=$ing;
		}
		
		public function getFoto() {
			return $this->foto;
		}

		public function setFoto($foto) {
			$this->foto=$foto;
		}		
	}
	
	class Peca {
		private $num;
		private $tipo;
		private $modelo;
		private $fab;
		private $garantia;
		private $forn;
		private $obs;
		
		public function __construct($num, $tipo, $modelo, $fab, $garantia, $forn, $obs) {
			$this->num=$num;
			$this->tipo=$tipo;
			$this->modelo=$modelo;
			$this->fab=$fab;
			$this->garantia=$garantia;
			$this->forn=$forn;
			$this->obs=$obs;
		}
		
		public function getNum() {
			return $this->num;
		}
		
		public function setNum($num) {
			$this->num=$num;
		}
		
		public function getTipo() {
			return $this->tipo;
		}
		
		public function setTipo($tipo) {
			$this->tipo=$tipo;
		}
		
		public function getModelo() {
			return $this->modelo;
		}
		
		public function setModelo($modelo) {
			$this->modelo=$modelo;
		}
		
		public function getFab() {
			return $this->fab;
		}
		
		public function setFab($fab) {
			$this->fab=$fab;
		}
		
		public function getGarantia() {
			return $this->garantia;
		}
		
		public function setGarantia($garantia) {
			$this->garantia=$garantia;
		}
		
		public function getForn() {
			return $this->forn;
		}
		
		public function setForn($forn) {
			$this->forn=$forn;
		}
		
		public function getObs() {
			return $this->obs;
		}
		
		public function setObs($obs) {
			$this->obs=$obs;
		}
	}
	
	class Pedido {
		private $id;
		private $pecas;
		private $obs;
		
		public function __construct($id, $pecas, $obs) {
			$this->id=$id;
			$this->pecas=$pecas;
			$this->obs=$obs;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id=$id;
		}
		
		public function getPecas() {
			return $this->pecas;
		}
		
		public function setPecas($pecas) {
			$this->pecas=$pecas;
		}
		
		public function getObs() {
			return $this->obs;
		}
		
		public function setObs($obs) {
			$this->obs=$obs;
		}
	}
		
?>