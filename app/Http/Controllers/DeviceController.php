<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    public function list($id = null){
        return $id ? Device::find($id) : Device::all();
    }

    public function addDevice(Request $request){
        $addDevice = new Device();

        $addDevice->name = $request->name;
        $addDevice->memberId = $request->memberId;

        $addDevice->save();

        if($addDevice){
            return ['data' => 'Device has been saved!'];
        }else{
            return ['data' => 'Error!'];
        }

    }
}
