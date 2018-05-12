<?php
/**
 * Created by PhpStorm.
 * User: Dede Irawan,S.kom
 * Date: 24/12/2016
 * Time: 21.42
 */

function getMenu()
{
    $ci = &get_instance();
    $ci->load->model('mitra_model', 'mitra');
    $query = $ci->mitra->getwhere('r_cat_item',array('parent_id'=> 0),1,false,false,array('param'=>'menu_order','by'=>'desc'));
    if($query){

        foreach ($query as $data1) {
            echo "<li class='dropdown dropdown-megamenu'>
                    <a class='dropdown-toggle' data-toggle='dropdown' data-target='#' href='#'>".$data1['menu']."</a>
                    ";
            echo"<ul class='dropdown-menu'>
                <li>
                    <div class='header-navigation-content'>
                        <div class='row'>

                            ";
            #Category ke-2
            $category_1 = $ci->mitra->getwhere('r_cat_item', array('parent_id' => $data1['id']), 1);
            if ($category_1) {
                foreach ($category_1 as $data2) {
                    echo"<div class='col-md-4 header-navigation-col'>";
                    echo"<h4>".$data2['menu']."</h4>";

                    $category_2 = $ci->mitra->getwhere('r_cat_item', array('parent_id' => $data2['id']), 1);
                    if ($category_2) {
                        foreach ($category_2 as $hasil) {
                            echo "

                                <ul>
                                <li><a href='".base_url('mitra/item/'.$hasil['link'])."'>" . $hasil['menu'] . "</a></li>
                                </ul>
                                ";
                        }
                    }

                echo"</div>";
                }
            }
            echo"
                        </div>
                    </div>
                </li>
            </ul>
         </li>";
        }
    }
}

function newItemMenu()
{
    $ci = &get_instance();
    $ci->load->model('mitra_model', 'mitra');
    $query = $ci->mitra->getJoin('t_item','t_item_harga','t_item_images','id','id_item','id_item',1,4,false,array('param'=>'id','by'=>'DESC'));
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
                                        <a href='".base_url('mitra/item_detail/'.$row['id'])."'><img src='".base_url('assets/pages/img/products/'.$row['img'])."' class='img-responsive' alt='{$row['nama']}'></a>
            </div>
            <h3><a href='".base_url('mitra/item_detail/'.$row['id'])."'>{$row['nama']}</a></h3>
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
