<?php

namespace App\Controllers;
use App\Models\Product_model;
use App\Models\Category_model;
use App\Models\Sub_category_model;
class Home extends BaseController
{
    public function index(): string
    {
        return view('admin/index');
            
    }
    public function add_product(): string
    {
        helper('form');
        
        $modelcat = new Category_model();
        $modelscat = new Sub_category_model();
        $data['category']= $modelcat->findAll();
        $data['sub_category']= $modelscat->findAll();
        return view('admin/add_product', $data);

    }
    public function add_category(): string
    {
        helper('form');
        if ($this->request->getMethod()=='post') {
            $upload=[
            'category_name' => $this->request->getPost('category')
            ];
            $model = new Category_model();
            $model->save($upload);
            $data['cat_success'] = 'Category Added Successfully';
        }
        $modelcat = new Category_model();
        $modelscat = new Sub_category_model();
        $data['category']= $modelcat->findAll();
        $data['sub_category']= $modelscat->findAll();
        return view('admin/add_product', $data);

    }
    public function add_sub_category(): string
    {
        helper('form');
        if ($this->request->getMethod()=='post') {
            $upload=[
            'sub_category_name' => $this->request->getPost('sub_category')
            ];
            $model = new Sub_category_model();
            $model->save($upload);
            $data['sub_cat_success'] = 'Sub Category Added Successfully';
        }
        $modelcat = new Category_model();
        $modelscat = new Sub_category_model();
        $data['category']= $modelcat->findAll();
        $data['sub_category']= $modelscat->findAll();
        return view('admin/add_product', $data);

    }
    public function upload_product(){
        $data = [];
        helper('form');
        $model = new Product_model();
        if($this->request->getMethod()=='post') {
            $rules = [
                'product_name'=> 'required',
                'category'=> 'required',
                'sub_category'=> 'required',
                'is_feature'=> 'required',
                'price'=> 'required',
                'product_desc'=> 'required|min_length[10]',
                
            ];
            if (!$this->validate($rules)) {
                $data['valid_error']= $this->validator;
                return view('admin/add_product', $data);
            }
            else{
                $main_img = $this->request->getFile("main_image");
               

                if(! empty($main_img) ) 
                {
                $main_img_name =  $main_img->getRandomName();
                $main_img->move('uploads', $main_img_name);
                }
                
                if (! empty($_FILES['sub_image1']['name'])) {
                    $sub_img1 = $this->request->getFile('sub_image1');
                    $sub_img1_name =  $sub_img1->getRandomName();
                    $sub_img1->move('uploads', $sub_img1_name);
                }
                else {
                    $sub_img1_name = '';
                }    
                if (! empty($_FILES['sub_image2']['name'])) {
                    $sub_img2 = $this->request->getFile('sub_image2');
                    $sub_img2_name =  $sub_img2->getRandomName();
                    $sub_img2->move('uploads', $sub_img2_name);
                }
                else {
                    $sub_img2_name = '';
                }    
                if (! empty($_FILES['sub_image3']['name'])) {
                    $sub_img3 = $this->request->getFile('sub_image3');
                    $sub_img3_name =  $sub_img3->getRandomName();
                    $sub_img3->move('uploads', $sub_img3_name);
                }
                else {
                    $sub_img3_name = '';
                }    
                if (! empty($_FILES['sub_image4']['name'])) {
                    $sub_img4 = $this->request->getFile('sub_image4');
                    $sub_img4_name =  $sub_img4->getRandomName();
                    $sub_img4->move('uploads', $sub_img4_name);
                }
                else {
                    $sub_img4_name = '';
                }    
                

                $input = [
                    'product_name' => $this->request->getPost('product_name'), 
                    'category_id'=> $this->request->getPost('category'), 
                    'sub_category_id'=> $this->request->getPost('sub_category'), 
                    'price'=> $this->request->getPost('price'), 
                    'is_featured'=> $this->request->getPost('is_feature'), 
                    'description'=> $this->request->getPost('product_desc'), 
                    'main_image'=> $main_img_name, 
                    'sub_image1'=> $sub_img1_name, 
                    'sub_image2'=> $sub_img2_name, 
                    'sub_image3'=> $sub_img3_name, 
                    'sub_image4'=> $sub_img4_name
                ];
                $model->save($input);
                return redirect()->to(base_url('view-product'));
            
        }
    }
    }

    public function view_product(){
        $session = \Config\Services::session();

        $model = new Product_model();
        $modelcat = new Category_model();
        $modelscat = new Sub_category_model();
        $data['product']= $model->findAll();
        $data['category']= $modelcat->findAll();
        $data['sub_category']= $modelscat->findAll();
        $data['del_msg']= $session->getFlashdata('del_msg');
        return view('admin/view_product', $data);
    }

    public function delete_product($id=null){
        $model = new Product_model();
        $session = \Config\Services::session();
        $model->where('id', $id)->delete();
        $session->setFlashdata('del_msg','Product Deleted Successfully');
        return redirect()->to(base_url('view-product'));
    }
    public function delete_category($id=null){
        $model = new Category_model();
        $session = \Config\Services::session();
        $model->where('id', $id)->delete();
        $session->setFlashdata('del_msg','Category Deleted Successfully');
        return redirect()->to(base_url('view-product')); 
    }
    public function delete_sub_category($id=null){
        $model = new Sub_category_model();
        $session = \Config\Services::session();
        $model->where('id', $id)->delete();
        $session->setFlashdata('del_msg','Sub Category Deleted Successfully');
        return redirect()->to(base_url('view-product'));   
    }
    public function update_category($id=false){
        $model = new Category_model();
        $session = \Config\Services::session();
        if ($this->request->getMethod()=='post') {
            $name = $this->request->getPost('name');
            $cat_id = $this->request->getPost('cat_id');
            $model->set('category_name', $name)->where('id', $cat_id)->update();

            $session->setFlashdata('del_msg','Category Updated Successfully');
            // return redirect()->to(base_url('view-product'));   

        }
        else {
            
            $data['cat_popup_val']= $model->where('id', $id)->find();
            $data['update_url']= 'update_category';
            echo json_encode($data);
        }

    }
    public function update_sub_category($id=false){
        $model = new Sub_category_model();
        $session = \Config\Services::session();
        if ($this->request->getMethod()=='post') {
            $name = $this->request->getPost('name');
            $cat_id = $this->request->getPost('cat_id');
            $model->set('sub_category_name', $name)->where('id', $cat_id)->update();

            $session->setFlashdata('del_msg','Sub Category Updated Successfully');

        }
        else {
            
            $data['cat_popup_val']= $model->where('id', $id)->find();
            $data['update_url']= 'update_sub_category';
            echo json_encode($data);
        }
    }

    public function edit_product($ids=false){
        helper('form');
        $model = new Product_model();
        
        $modelcat = new Category_model();
        $modelscat = new Sub_category_model();
        
        if($this->request->getMethod()=='post') {
            $rules = [
                'product_name'=> 'required',
                'category'=> 'required',
                'sub_category'=> 'required',
                'is_feature'=> 'required',
                'price'=> 'required',
                'product_desc'=> 'required|min_length[10]',
                
            ];
            if (!$this->validate($rules)) {
                $data['valid_error']= $this->validator;
                return view('admin/edit_product', $data);
            }
            else{
                $main_img = $this->request->getFile("main_image");
               

                if(! empty($main_img) )
                {
                $main_img_name =  $main_img->getRandomName();
                $main_img->move('uploads', $main_img_name);
                }
                
                if (! empty($_FILES['sub_image1']['name'])) {
                    $sub_img1 = $this->request->getFile('sub_image1');
                    $sub_img1_name =  $sub_img1->getRandomName();
                    $sub_img1->move('uploads', $sub_img1_name);
                }
                else {
                    $sub_img1_name = '';
                }    
                if (! empty($_FILES['sub_image2']['name'])) {
                    $sub_img2 = $this->request->getFile('sub_image2');
                    $sub_img2_name =  $sub_img2->getRandomName();
                    $sub_img2->move('uploads', $sub_img2_name);
                }
                else {
                    $sub_img2_name = '';
                }    
                if (! empty($_FILES['sub_image3']['name'])) {
                    $sub_img3 = $this->request->getFile('sub_image3');
                    $sub_img3_name =  $sub_img3->getRandomName();
                    $sub_img3->move('uploads', $sub_img3_name);
                }
                else {
                    $sub_img3_name = '';
                }    
                if (! empty($_FILES['sub_image4']['name'])) {
                    $sub_img4 = $this->request->getFile('sub_image4');
                    $sub_img4_name =  $sub_img4->getRandomName();
                    $sub_img4->move('uploads', $sub_img4_name);
                }
                else {
                    $sub_img4_name = '';
                }    
                

                $input = [
                    'product_name' => $this->request->getPost('product_name'), 
                    'category_id'=> $this->request->getPost('category'), 
                    'sub_category_id'=> $this->request->getPost('sub_category'), 
                    'price'=> $this->request->getPost('price'), 
                    'is_featured'=> $this->request->getPost('is_feature'), 
                    'description'=> $this->request->getPost('product_desc'), 
                    'main_image'=> $main_img_name, 
                    'sub_image1'=> $sub_img1_name, 
                    'sub_image2'=> $sub_img2_name, 
                    'sub_image3'=> $sub_img3_name, 
                    'sub_image4'=> $sub_img4_name
                ];
                $model->save($input);
                return redirect()->to(base_url('view-product'));
            
        }
 
        }
        else {
        $data['product'] = $model->where('id', $ids)->first();       
        $data['category']= $modelcat->findAll();
        $data['sub_category']= $modelscat->findAll();
            echo view('admin/edit_product', $data);
        }
    }
}
