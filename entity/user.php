<?php
	class User {
		private $login;
		private $password;

		public getLogin() {
			return $this->login;
		}

		public setLogin($login) {
			$this->login = $login;
		}

		public getPassword() {
			return $this->password;
		}

		public setPassword($password) {
			$this->password = $password;
		}

	}