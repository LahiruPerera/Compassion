<?php 
	class Model extends CI_Model
	{
		public function Add_Event($p1)
		{
			$result=$this->db->insert("event",$p1);
		}
		
		public function Name_Search($p3)
		{
			$this->db->select('*');
			$this->db->from('event');
			$this->db->where('eventName',$p3);
			$query = $this->db->get();
			return $query;
		}
		public function eve_del($p1)
		{
			$this->db->where("eventID",$p1);
			$this->db->delete("event");
			$num=$this->db->affected_rows();

			return $num;
		}
		public function update_data($i,$d)
		{
			$this->db->where('eventID',$i);
			$this->db->update('event', $d);
		}
		public function Id_Search($p2)
		{
			$this->db->select('*');
			$this->db->from('event');
			$this->db->where('eventID',$p2);
			$query = $this->db->get();
			return $query;
		}
	}
 ?>