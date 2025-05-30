  public function suppListModel_query($where=false,$empID=NULL){

         $field = array('sup_id,name,mobile,email,address'); $i = 0;
         foreach ($field as $item) {
         if (!empty($where['search']['value'])) {
         if ($i === 0) {$this->db->group_start();$this->db->like($item, $where['search']['value']);} else {$this->db->or_like($item, $where['search']['value']);}
         if (count($field) - 1 == $i) {$this->db->group_end(); } } $i++; }

         $this->db->select('*')->from('supplier');

        } public function suppListModel($where=false,$empID=NULL){ 
        $this->suppListModel_query($where,$empID); if($where['length'] != -1){$this->db->limit($where['length'], $where['start']);}return $this->db->get()->result(); }
        public function suppListModel_count($empID=NULL){
		$this->suppListModel_query($where=false,$empID);return $this->db->get()->num_rows();}
        public function suppListModel_filter_count($where=false,$empID=NULL){
        $this->suppListModel_query($where,$empID);return $this->db->get()->num_rows();
        
    }