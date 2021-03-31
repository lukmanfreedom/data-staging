<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use DB;

class StockOnlineUnitController extends Controller
{
    public function index() 
    {
    	return view('stock-online-unit');
    }

    public function download(Request $request)
    {
    	$start_date = $request->start_date;
    	$end_date = $request->end_date;

    	$header = [
    		"OutletCode", 
    		"OutletName",
			"VehicleModelName", 
			"KatashikiCode", 
			"SuffixCode",
			"VehicleTypeDescription", 
			"ColorCode",
			"ColorName", 
			"StatusStock", 
			"StatusUnit", 
			"VIN", 
			"LastLocation",
			"LastDateLocation", 
			"EngineNo", 
			"RRNNo", 
			"AssemblyYear", 
			"KeyNumber", 
			"AssemblyTypeName",
			"Price", 
			"DOTAMDate", 
			"PLOD", 
			"ProductionYear", 
			"ProdDate"
    	];

   //  	$data = DB::select(DB::raw("
   //  		select
			// 	f.OutletCode, f.Name as OutletName, 
			// 	d.VehicleModelName, c.KatashikiCode, c.SuffixCode, c.Description as 
			// 	VehicleTypeDescription, e.ColorCode, e.ColorName, 
			// 	g.StatusStockName as StatusStock, h.StatusUnitName as StatusUnit, a.VIN, 
			// 	a.LastLocation, a.LastDateLocation, a.EngineNo, a.RRNNo, a.AssemblyYear, 
			// 	a.KeyNumber, i.AssemblyTypeName,
			// 	a.Price, a.DOTAMDate, a.PLOD, a.ProductionYear, a.ProdDate
			// from CVehicle_List_TM a
			// left join MUnit_VehicleTypeColor_TR b on a.VehicleTypeColorId = b.VehicleTypeColorId
			// left join MUnit_VehicleType_TM c on b.VehicleTypeId = c.VehicleTypeId
			// left join MUnit_VehicleModel_TM d on c.VehicleModelId = d.VehicleModelId
			// left join MUnit_Color_TM e on b.ColorId = e.ColorId
			// left join MSites_Outlet_TM f on a.OutletId = f.OutletId
			// left join PStatus_Stock_TP g on a.StatusStockId = g.StatusStockId
			// left join PStatus_Unit_TP h on a.StatusUnitId = h.StatusUnitId
			// left join MUnit_AssemblyType_TP i on a.AssemblyTypeId = i.AssemblyTypeId
			// where a.StatusUnitId in (2)
			// and a.StatusStockId not in (3)
			// order by f.OutletCode, a.DOTAMDate
   //  	"));

    	// dummy data
    	$data = [
    		[
    			"OutletCode" => 1, 
	    		"OutletName" => "Outlet Test",
				"VehicleModelName" => "v-test", 
				"KatashikiCode" => "v-test", 
				"SuffixCode" => "v-test",
				"VehicleTypeDescription" => "v-test", 
				"ColorCode" => "v-test",
				"ColorName" => "v-test", 
				"StatusStock" => "v-test", 
				"StatusUnit" => "v-test", 
				"VIN" => "v-test", 
				"LastLocation" => "v-test",
				"LastDateLocation" => "v-test", 
				"EngineNo" => "v-test", 
				"RRNNo" => "v-test", 
				"AssemblyYear" => "v-test", 
				"KeyNumber" => "v-test", 
				"AssemblyTypeName" => "v-test",
				"Price" => "v-test", 
				"DOTAMDate" => "v-test", 
				"PLOD" => "v-test", 
				"ProductionYear" => "v-test", 
				"ProdDate" => "v-test"
    		],
    		[
    			"OutletCode" => 2, 
	    		"OutletName" => "Outlet Test",
				"VehicleModelName" => "v-test", 
				"KatashikiCode" => "v-test", 
				"SuffixCode" => "v-test",
				"VehicleTypeDescription" => "v-test", 
				"ColorCode" => "v-test",
				"ColorName" => "v-test", 
				"StatusStock" => "v-test", 
				"StatusUnit" => "v-test", 
				"VIN" => "v-test", 
				"LastLocation" => "v-test",
				"LastDateLocation" => "v-test", 
				"EngineNo" => "v-test", 
				"RRNNo" => "v-test", 
				"AssemblyYear" => "v-test", 
				"KeyNumber" => "v-test", 
				"AssemblyTypeName" => "v-test",
				"Price" => "v-test", 
				"DOTAMDate" => "v-test", 
				"PLOD" => "v-test", 
				"ProductionYear" => "v-test", 
				"ProdDate" => "v-test"
    		],
    	];

    	$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$col = 'A';
		$row = 1;

		foreach ($header as $value) {
			$sheet->setCellValue($col . $row, $value);
			$col++;
		}

		$row++;

		foreach ($data as $data_row) {
			$col = 'A';
			foreach ($data_row as $data_col) {
				$sheet->setCellValue($col . $row, $data_col);
				$col++;
			}

			$row++;
		}

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="stock-online-unit.xlsx"');
		header('Cache-Control: max-age=0');
		
		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
    }
}
