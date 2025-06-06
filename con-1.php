<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('setting/leave_model', 'leave');
        ($this->session->userdata('mim_id')== '') ? redirect(base_url(), 'refresh') : '';
        $this->load->model(array('inventory/Inventory_model'=>'inventory'));
	    $this->logID=$this->session->userdata('mim_id');
        error_reporting(0);	
		
	}

    public function  index()
    {
        $data['title']='Dashboard Overview';
		$data['breadcrums'] = 'Dashboard Overview';
        $data['layout']= "admin/inventory/dashboard.php";
		$this->load->view('base',$data);
    }

	public function setting($type = NULL){

		if($type === 'showUnitList'){

			$post_data = $this->input->post();
            $return['data'] = array();
            $i = $post_data['start'] + 1;           
            $record = $this->inventory->unitList($post_data);

            foreach ($record as $row) {
                if($row->status=='1'){$status='<a class="badge bg-success  miLvs" href="javascript:void(0)">Acepted</a>';}
				else{$status='<a class="badge bg-primary  miLvs" href="javascript:void(0)">Pending</a>';}
				$editUid = base_url('admin/inventory/editUnitSed/' . urlencode(base64_encode(json_encode(array('action' => 'editDetails', 'id' => $row->id)))));
				$action = '<div class="px-2">
				<a href="javascript:void(0);" onclick="viewUnitSec(' . $row->id . ')" title="Click to View Salary Details" data-bs-target="#unitModelSec" data-bs-toggle="modal" class="px-2 btn ripple miView btn-sm"> <i class="ti-eye"></i></a>&emsp;
                 <a href="' . $editUid . '" style="margin-left:-13px;" title="Click to Update Salary Details" class="px-2 btn ripple btn-secondary btn-sm arvAction"  id="upD0'.$row->id.'"><i class="ti-pencil-alt"></i></a>&emsp;
				</div>';
              $return['data'][] = array('<div class="px-2"><strong>' . $i . '.</strong></div>',
              $row->unit_id,
              $row->unit,
              $status,
              $action,
              $return,
              );
              $i++;
            }
          
            $return['recordsTotal'] = $this->inventory->unitList_count($whereCn);
            $return['recordsFiltered'] = $this->inventory->unitList_filter_count($post_data, $whereCn);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);

		}elseif($type === 'showList'){

		    $post_data = $this->input->post();
            $return['data'] = array();
            $i = $post_data['start'] + 1;           
            $record = $this->inventory->productList($post_data);
	
            foreach ($record as $row) {   

				$viewUid = base_url('admin/inventory/viewCategory/' . urlencode(base64_encode(json_encode(array('action' => 'viewDetails', 'id' => $row->id)))));
				$editUid = base_url('admin/inventory/editCategory/' . urlencode(base64_encode(json_encode(array('action' => 'editDetails', 'id' => $row->id)))));

                if($row->status=='1'){$status='<a class="badge bg-success  miLvs" href="javascript:void(0)">Acepted</a>';}
				else{$status='<a class="badge bg-primary  miLvs" href="javascript:void(0)">Pending</a>';}
				$view = '<div class="px-2">
				<a href="javascript:void(0);" onclick="viewCatItem(' . $row->id . ')" title="Click to View Salary Details" data-bs-target="#categoryModelOn" data-bs-toggle="modal" class="px-2 btn ripple miView btn-sm"> <i class="ti-eye"></i></a>&emsp;
                <a href="' . $editUid . '" style="margin-left:-13px;" title="Click to Update Salary Details" class="px-2 btn ripple btn-secondary btn-sm arvAction"  id="upD0'.$row->id.'"><i class="ti-pencil-alt"></i></a>&emsp;
				</div>';
              $return['data'][] = array('<div class="px-2"><strong>' . $i . '.</strong></div>',
              $row->product_id,
              $row->product,
              $status,
              $view,
              $return,
              );
              $i++;

          }
          
            $return['recordsTotal'] = $this->inventory->productList_count($whereCn);
            $return['recordsFiltered'] = $this->inventory->productList_filter_count($post_data, $whereCn);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);


	}elseif($type === 'createUnit'){sleep(1);

	$this->form_validation->set_rules('unit', 'Unit', 'trim|required|xss_clean');
   
    if ($this->form_validation->run() == TRUE) {

    $inp = $this->input->post();

	$lastId = $this->db->select('unit_id')->from('item_units')->order_by('id', 'DESC')->limit(1)->get()->row();

		if (!empty($lastId)) {
    		if (preg_match('/^PRO(\d+)$/', $lastId->unit_id, $matches)) {
        		$numericPart = (int)$matches[1] + 1;
        		$unitId = 'UNI' . str_pad($numericPart, 4, '0', STR_PAD_LEFT);
    		} else {
        		$unitId = 'UNI1001';
    		}
			} else {
    			$unitId = 'UNI1001';
			}
		
        $unitItem = array(
            'unit_id' => $unitId,
            'unit'    => $inp['unit'],
            'created_at' => date('Y-m-d'),
            'status'     => '1',
        );
        $saved = $this->common->save_data('item_units', $unitItem);
        $data = array(
            'addClas' => 'tst_success', 'msg' => array('Thank you! You have successfully created a new category.'),'icon'    => '<i class="ti-check-box"></i>'
        ); } else {
    	    $msg = array( 'unit'  => form_error('unit'));
    	    $data = array( 'addClas' => 'tst_danger', 'msg' => $msg, 'icon' => '<i class="pe-7s-sun bx-spin"></i>' );
    	}
    	echo json_encode($data);
      


	}elseif($type === 'create'){sleep(1);
	
    $this->form_validation->set_rules('proName', 'Product Name', 'trim|required|xss_clean');
    if ($this->input->post('mainCat')) {
        $this->form_validation->set_rules('mainCat', 'Main Category', 'trim|required|xss_clean');
    } elseif ($this->input->post('subCat')) {
        $this->form_validation->set_rules('subCat', 'Sub Category', 'trim|required|xss_clean');
    }
    if ($this->form_validation->run() == TRUE) {
        $inp = $this->input->post();

	$lastId = $this->db->select('product_id')->from('inventoryitem')->order_by('id', 'DESC')->limit(1)->get()->row();

		if (!empty($lastId)) {
    		if (preg_match('/^PRO(\d+)$/', $lastId->product_id, $matches)) {
        		$numericPart = (int)$matches[1] + 1;
        		$proId = 'PRO' . str_pad($numericPart, 4, '0', STR_PAD_LEFT);
    		} else {
        		$proId = 'PRO1001';
    		}
		} else {
    		$proId = 'PRO1001';
		}
		
        $productCat = array(
            'product_id' => $proId,
            'product'    => $inp['proName'],
            'created_at' => date('Y-m-d'),
            'status'     => '1',
        );
        if (!empty($inp['mainCat'])) {
            $item = array('main_cat' => $inp['mainCat']);
        } elseif(!empty($inp['subCat'])){
            $item = array('sub_category' => $inp['subCat']);
        }
        $saveItem = array_merge($productCat, $item);
        $saved = $this->common->save_data('inventoryitem', $saveItem);
        $data = array(
            'addClas' => 'tst_success', 'msg' => array('Thank you! You have successfully created a new category.'),'actReload'=> base_url('admin/inventory/setting'), 'icon'    => '<i class="ti-check-box"></i>'
        ); } else {
    	    $msg = array( 'proName'  => form_error('proName'), 'mainCat'  => form_error('mainCat'), 'subCat'   => form_error('subCat'), );

    	    $data = array( 'addClas' => 'tst_danger', 'msg' => $msg, 'icon' => '<i class="pe-7s-sun bx-spin"></i>' );
    	}
    	echo json_encode($data);
		}else{

		$data['title']='Product / Unite Manage';
		$data['targetItem']= base_url('admin/inventory/setting/create');
		$data['targetUnit']= base_url('admin/inventory/setting/createUnit');
		$data['targetUnitItem']= 'admin/inventory/setting/showUnitList';
		$data['targetProduct']= 'admin/inventory/setting/showList';
		$data['product']='Manage Category ';
		$data['productText'] = 'Brand List';
		$data['unitText'] = 'Unite Manage';
		$data['layout']= "admin/inventory/category.php";
		$this->load->view('base',$data);
		}
	}


public function viewCatItem()
{
    $id = $this->input->post('id');
    $data = $this->db->select('product_id,product') ->from('inventoryitem')->where('id', $id)->get()->row();
    echo json_encode($data);
}


public function viewUnitSec()
{
    $id = $this->input->post('id');
    $data = $this->db->select('unit_id, unit')->from('item_units')->where('id', $id)->get()->row();
    echo json_encode($data);
}

public function editCategory($where = NULL)
{
  $where=json_decode(base64_decode(urldecode($where)));
  $data['catItem'] = $this->db->select('*')->from('inventoryitem')->where('id', $where->id)->get()->row();
  $data['title']='Update Product Item';
  $data['targetItem']= base_url('admin/inventory/updateCatItem');
  $data['product']='Manage Category ';
  $data['productText'] = 'Product Manage';
  $data['unitText'] = 'Unite Manage';
  $data['layout']= "admin/inventory/edit_category.php";
  $this->load->view('base',$data);

}  

public function editUnitSed($where = NULL)
{
  $where=json_decode(base64_decode(urldecode($where)));
  $data['unitItem'] = $this->db->select('*')->from('item_units')->where('id', $where->id)->get()->row();

  $data['title']='Unite Manage';
  $data['targetItem']= base_url('admin/inventory/updateUnitSec');
  $data['unitText'] = 'Unite Manage';
  $data['layout']= "admin/inventory/edit_unit.php";
  $this->load->view('base',$data);

}  

public function updateCatItem()
{
    $this->form_validation->set_rules('proName', 'Product Name', 'trim|required|xss_clean');
    if ($this->input->post('mainCat')) {
        $this->form_validation->set_rules('mainCat', 'Main Category', 'trim|required|xss_clean');
    } elseif ($this->input->post('subCat')) {
        $this->form_validation->set_rules('subCat', 'Sub Category', 'trim|required|xss_clean');
    }
    if ($this->form_validation->run() == TRUE) {
        $inp = $this->input->post();
		
        $productCat = array(
            'product'    => $inp['proName'],
            'created_at' => date('Y-m-d'),
            'status'     => '1',
        );
        if (!empty($inp['mainCat'])) {
            $item = array('main_cat' => $inp['mainCat']);
        } elseif(!empty($inp['subCat'])){
            $item = array('sub_category' => $inp['subCat']);
        }
        $saveItem = array_merge($productCat, $item);
        $saved = $this->db->where('id',$this->input->post('id'))->update('inventoryitem', $saveItem);
        $data = array(
            'addClas' => 'tst_success', 'msg' => array('Thank you! You have successfully created a new category.'),'actReload'=> base_url('admin/inventory/setting'), 'icon'    => '<i class="ti-check-box"></i>'
        ); } else {
    	    $msg = array( 'proName'  => form_error('proName'), 'mainCat'  => form_error('mainCat'), 'subCat'   => form_error('subCat'), );

    	    $data = array( 'addClas' => 'tst_danger', 'msg' => $msg, 'icon' => '<i class="pe-7s-sun bx-spin"></i>' );
    	}
    	echo json_encode($data);
}


    public function cityList(){
        $id = $this->input->post('id');
        $getCity = $this->common->getDataList('states_cities', 'parent_id', $id);
        sleep(1);  
        echo '<option value=""> --- Choose One --- </option>';
        if ($getCity) {
        foreach ($getCity as $list) {
        echo '<option value="' . htmlspecialchars($list->id) . '">' . htmlspecialchars($list->state_cities) . '</option>';
    } } }


}