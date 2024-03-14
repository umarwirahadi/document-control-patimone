<?php

use App\Models\MasterItem;
use App\Models\Package;


if(!function_exists('packageName')) {
    function packageName($default=''){
        try {
            $packageName=Package::packageStatus(1)->get();
            $HTML = "<option>--Select--</option>";
            if(isset($default)){
                foreach ($packageName as $key) {
                    if($default==$key->id){
                        $HTML .="<option value='".$key->id."' selected='selected'>".$key->package_name."</option>";
                    }else{
                        $HTML .="<option value='".$key->id."'>".$key->package_name."</option>";
                    }
                }
            } else {
                foreach ($packageName as $key) {
                    $HTML .="<option value='".$key->id."'>".$key->package_name."</option>";
                }
            }
                return $HTML;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
if(!function_exists('getItem')) {
    function getItem($cat='',$default=null){
        try {
            $HTML = "";
            if(!empty($cat)){
                $items=MasterItem::Category($cat)->ItemStatus('1')->get();
                if(isset($default)){
                    
                    foreach ($items as $item) {
                        if($default==$item->item_code){
                            $HTML .="<option value='".$item->item_code."' selected='selected'>".$item->item_name."</option>";
                        } else {
                            $HTML .="<option value='".$item->item_code."'>".$item->item_name."</option>";
                        }
                    }
                } else {
                    $HTML .= "<option value=''>--Select--</option>";
                    foreach ($items as $item) {
                        $HTML .="<option value='".$item->item_code."'>".$item->item_name."</option>";
                    }
                }
            } else {
                $HTML .="<option selected>--Select--</option>";
            }
            return $HTML;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}