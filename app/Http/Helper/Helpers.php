<?php

use App\Models\CorrespondenceType;
use App\Models\LetterSource;
use App\Models\MasterItem;
use App\Models\Package;

if(!function_exists('correspondenceType')) {
    function correspondenceType($default=''){
        try {
            $corresType=CorrespondenceType::correspondenceTypeStatus('1')->get();
            $HTML = "<option>--Select--</option>";
            if(isset($default)){
                foreach ($corresType as $key) {
                    if($default==$key->id){
                        $HTML .="<option value='".$key->id."' selected='selected'>".$key->correspondence_type."</option>";
                    }else{
                        $HTML .="<option value='".$key->id."'>".$key->correspondence_type."</option>";
                    }
                }
            } else {
                foreach ($corresType as $key) {
                    $HTML .="<option value='".$key->id."'>".$key->correspondence_type."</option>";
                }
            }
                return $HTML;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

if(!function_exists('packageName')) {
    function packageName($default=''){
        try {
            $packageName=Package::packageStatus(1)->orderBy('created_at','asc')->get();
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
if(!function_exists('getLetterSource')) {
    function getLetterSource($default=''){
        try {
            $letterSources=LetterSource::with('package')->where('status','=','1')->orderBy('created_at','asc')->get();
            $HTML = "<option>--Select--</option>";
            if(isset($default)){
                foreach ($letterSources as $key) {
                    if($default==$key->id){
                        $HTML .="<option value='".$key->id."' selected='selected'>".$key->package->package_name." - ".$key->source_code."</option>";
                    }else{
                        $HTML .="<option value='".$key->id."'>".$key->package->package_name." - ".$key->source_code."</option>";
                    }
                }
            } else {
                foreach ($letterSources as $key) {
                    $HTML .="<option value='".$key->id."'>".$key->package->package_name." - ".$key->source_code."</option>";
                }
            }
                return $HTML;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
if(!function_exists('UserPackageNameActive')) {
    function UserPackageNameActive($package_id=''){
        try {
            $package=Package::findOrFail($package_id);
            if($package){
                return $package->package_name;
            }
            return 'No Package Selected..!';
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
if(!function_exists('packageNameLabel')) {
    function packageNameLabel($default=''){
        try {
            $data=Package::findOrFail($default);
            return $data->package_name;
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

if(!function_exists('monthToRoman')) {
    function monthToRoman($month=''){
        try {
            $roman=['I'=>'01','II'=>'02','III'=>'03','IV'=>'04','V'=>'05','VI'=>'06','VII'=>'07','VIII'=>'08','IX'=>'09','X'=>'10','XI'=>'11','XII'=>'12'];
            if(in_array($month, $roman)){
                $monthRoman=array_search($month, $roman);
            } else {
                $monthRoman='MM';
            }
            return $monthRoman;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
