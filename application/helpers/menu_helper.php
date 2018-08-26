<?php
/**
 * Created by PhpStorm.
 * User: Dede Irawan,S.kom
 * Date: 24/12/2016
 * Time: 21.42
 */

function getMenu($id_user = false)
{
    $ci = &get_instance();
    $ci->load->library('session');
    $ci->load->model('general_model', 'general');

    $id_user = $ci->session->userdata('id');
    #getmenu by user
    $query = $ci->general->getwhere('m_menu_user',array('id_user'=> $id_user),1);

    if($query){
        foreach ($query as $row) {
            $in[] = $row['id_menu'];
        }
    }else{
        $in[] = "";
    }





    $query = $ci->general->getwhere('m_menu',array('parent_id'=> 0),1,false,false,array('param'=>'menu_order','by'=>'asc'),'id',$in);
    if($query){

        foreach ($query as $data1) {
            echo "<li class='treeview'>";

            #Category ke-2
            $category_1 = $ci->general->getwhere('m_menu', array('parent_id' => $data1['id']), 1,false,false,array('param'=>'menu_order','by'=>'asc'),'id',$in);
            if ($category_1) {
                #jika ada sub menu
                echo "<a href=".base_url($data1['link'])."><i class='".$data1['icon']."'></i> <span>".$data1['menu']."</span><i class='fa fa-angle-left pull-right'></i></a>";

                echo"<ul class='treeview-menu'>";


                foreach ($category_1 as $data2) {
                    echo"<li class='treeview'>";

                    $category_2 = $ci->general->getwhere('m_menu', array('parent_id' => $data2['id']), 1,false,false,array('param'=>'menu_order','by'=>'asc'),'id',$in);
                    if ($category_2) {
                        #jika ada sub menu
                        echo"<a href=".base_url($data2['link'])."><i class='".$data2['icon']."'></i> <span>".$data2['menu']."</span><i class='fa fa-angle-left pull-right'></i></a>";

                        echo"<ul class='treeview-menu'>";
                        foreach ($category_2 as $hasil) {
                            echo "
                                <li><a href=".base_url($hasil['link'])."><i class='".$hasil['icon']."'></i> <span>".$hasil['menu']."</span></a></li>
                                ";
                        }

                        echo" </ul>";
                    }else{
                        #jika tidak ada sub menu
                        echo"<a href=".base_url($data2['link'])."><i class='".$data2['icon']."'></i> <span>".$data2['menu']."</span></a>";
                    }
                    echo"</li>";
                }

                echo"</ul>";

            }else{
                #jika tidak ada sub menu
                echo "<a href=".base_url($data1['link'])."><i class='".$data1['icon']."'></i> <span>".$data1['menu']."</span></a>";

            }
            echo"</li>";
        }

    }
}

function newItemMenu()
{
    $ci = &get_instance();
    $ci->load->model('general_model', 'general');
    $query = $ci->general->getJoin('t_item','t_item_harga','t_item_images','id','id_item','id_item',1,4,false,array('param'=>'id','by'=>'DESC'));
    if($query){
        $html = "
                <li class='dropdown dropdown100 nav-catalogue'>
            <a class='dropdown-toggle' data-toggle='dropdown' data-target='#' href='javascript:;'>
                New
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <div class='header-navigation-content'>
                        <div class='row'>
        ";
        foreach ($query as $row) {
            $html .="
            <div class='col-md-3 col-sm-4 col-xs-6'>
                                <div class='product-item'>
                                    <div class='pi-img-wrapper'>
                                        <a href='".base_url('general/item_detail/'.$row['id'])."'><img src='".base_url('assets/pages/img/products/'.$row['img'])."' class='img-responsive' alt='{$row['nama']}'></a>
            </div>
            <h3><a href='".base_url('general/item_detail/'.$row['id'])."'>{$row['nama']}</a></h3>
            <div class='pi-price'>{$row['harga']}</div>
            <a href='javascript:;' class='btn btn-default add2cart'>Add to Catalog</a>
            </div>
            </div>
            ";

        }
        $html .="
            </div>
                    </div>
                </li>
            </ul>
        </li>
        ";
    }
    echo $html;
}
