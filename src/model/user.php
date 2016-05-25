<?php
class book extends model(){
	private $table = "user";
	public function findById($id){
		return $this -> fetchAssoc(
			$this -> table,
			$id
		);
	}
	public function save($data){
		return $this -> insert(
			$this -> table,
			$data
		);
	}
	public function update($data, $where){
		return $this -> update(
			$this -> table,
			$data,
			$where
		);
	}
	public function delete($where){
		return $this -> update(
			$this -> table,
			$where
		);
	}
	public function findAll($where = null, $order = null, $group = null, $limit = null){
		return $this -> fetchAll(
			$this -> table,
			$where,
			$order,
			$group,
			$limit
		);
	}
	public function query($query){
		return $this -> query(
			$query
		);
	}
}