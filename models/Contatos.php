<?php
class Contatos extends model {
	public function getAll() {
		$array = array();
                
		$sql ="SELECT users.username,"
                        . "registros.id,"
                        . "registros.client,"
                        . "registros.callType,"
                        . "registros.problem,"
                        . "registros.soluction from users,registros where users.id = registros.id_user";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	public function get($id) {
		$array = array();

		$sql = "SELECT * FROM registros WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
                   
		}

		return $array;
	}

       
        

	public function add($callType,$problem,$soluction,$client,$id) {
		
            $sql = "INSERT INTO registros (callType,problem,soluction,client,id_user) VALUES (:callType,:problem,:soluction,:client,:id_user)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':callType', $callType);
            $sql->bindValue(':problem',$problem);
            $sql->bindValue(':soluction',$soluction);
            $sql->bindValue(':client',$client);
            $sql->bindValue(':id_user',$id);
            $sql->execute();
            return true;
		 
	}
	public function edit( $id, $callType,$problem,$soluction) {
		$sql = "UPDATE registros SET "
                        . "callType = :callType,"
                        . "problem = :problem,"
                        . "soluction = :soluction WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':callType', $callType);
		$sql->bindValue(':problem', $problem);
		$sql->bindValue(':soluction', $soluction);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	public function delete($id) {
		$sql = "DELETE FROM registros WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}
        public function deleteUser($id) {
		$sql = "DELETE FROM users WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	private function emailExists($email) {
		$sql = "SELECT * FROM registros WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
     
}