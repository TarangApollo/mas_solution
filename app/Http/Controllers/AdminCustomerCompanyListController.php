<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyClient;
use App\Models\CompanyMaster;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Session;

class AdminCustomerCompanyListController extends Controller
{
    public function index(Request $request){
        if(Auth::User()->role_id == 1){
            $OEMCompany = $request->OEMCompany;
            
            $iCompanyClientId = $request->iCompanyClientId;
            $search_state = $request->search_state;
            $search_city = $request->search_city;
            $daterange = $request->daterange;

            $formDate = "";
            $toDate = "";
            if ($request->daterange != "") {
                $daterange = explode("-", $request->daterange);
                $formDate = date('Y-m-d H:i:s', strtotime($daterange[0]));
                $toDate = date('Y-m-d 23:59:59', strtotime($daterange[1]));
            }
            $CompanyMaster = CompanyMaster::where(['companymaster.isDelete' => 0])
                ->orderBy('strOEMCompanyName', 'ASC')
                ->get();
                //  'strCompanyClientProfile',
            $CompanyClientLists = CompanyClient::select('companyclient.*', 'strStateName', 'strCityName',
                    DB::raw("(select strOEMCompanyName from companymaster where companymaster.iCompanyId=companyclient.iCompanyId) as 'strOEMCompanyName'"))
                //->join('ticketmaster', 'companyclient.iCompanyClientId', '=', 'ticketmaster.iCompanyId')
                ->leftJoin('ticketmaster', function($join) use ($request, $formDate, $toDate) {
                    $join->on('companyclient.iCompanyClientId', '=', 'ticketmaster.iCompanyId')
                        ->where('ticketmaster.isDelete', 0)
                        ->where('ticketmaster.iStatus', 1)
                        ->where('ticketmaster.OemCompannyId', $request->OEMCompany);
                        if ($request->daterange) {
                            $join->whereBetween('ticketmaster.strEntryDate', [$formDate, $toDate]);
                        }
                })
                //->join('icompanyclientprofile', 'icompanyclientprofile.iCompanyClientProfileId', '=', 'companyclient.iCompanyClientProfileId', 'left outer')
                ->join('statemaster', 'statemaster.iStateId', '=', 'companyclient.iStateId', ' left outer')
                ->join('citymaster', 'citymaster.iCityId', '=', 'companyclient.iCityId', ' left outer')
                ->when($request->iCompanyClientId, fn ($query, $iCompanyClientId) => $query->where('companyclient.iCompanyClientId', $iCompanyClientId))
                ->when($request->OEMCompany, fn ($query, $OEMCompany) => $query->where('companyclient.iCompanyId', $OEMCompany))
                ->when($request->search_state, fn ($query, $search_state) => $query->where('companyclient.iStateId', $search_state))
                ->when($request->search_city, fn ($query, $search_city) => $query->where('companyclient.iCityId', $search_city))
                ->when($request->daterange, fn ($query, $daterange) => $query->where('companyclient.strEntryDate','>=',$formDate)->where('companyclient.strEntryDate','<=',$toDate))
                ->orderBy('iCompanyClientId', 'DESC')
                ->where(['companyclient.isDelete' => 0,'companyclient.iStatus' => 1])
                //->groupBy('ticketmaster.iCompanyId')
                ->groupBy('companyclient.iCompanyClientId')
                ->get();
            
            $CompanyClient = CompanyClient::orderBy('iCompanyClientId', 'DESC')
                    ->where(['isDelete' => 0,'iStatus' => 1])
                    ->get();
            $statemasters = DB::table('statemaster')
                ->where(['isDelete' => 0, "iStatus" => 1])
                ->orderBy('strStateName', 'ASC')
                ->get();
            $citymasters = DB::table('citymaster')
                ->where(['isDelete' => 0, "iStatus" => 1])
                ->orderBy('strCityName', 'ASC')
                ->get();
            return view('admin.customer_company_list.index', compact('CompanyClientLists','statemasters', 'citymasters','CompanyMaster','iCompanyClientId', 'search_state', 'search_city', 'daterange','OEMCompany','CompanyClient'));
        } else {
            return redirect()->route('home');
        }
    }

    public function info(Request $request, $id){
        if(Auth::User()->role_id == 1){
            $CompanyClients = CompanyClient::select('companyclient.iCompanyId','CompanyName','email','owner','owneremail','ownerphone','address','strStateName','strCityName','branchOffice','strCompanyClientProfile','userDefine1','userDefine2','userDefine3')
                ->where(['companyclient.isDelete' => 0, 'companyclient.iCompanyClientId' => $id])
                ->join('icompanyclientprofile', 'icompanyclientprofile.iCompanyClientProfileId', '=', 'companyclient.iCompanyClientProfileId', 'left outer')
                ->join('statemaster', 'statemaster.iStateId', '=', 'companyclient.iStateId', ' left outer')
                ->join('citymaster', 'citymaster.iCityId', '=', 'companyclient.iCityId', ' left outer')
                ->join('userdefined', 'userdefined.iCompanyClientId', '=', 'companyclient.iCompanyClientId', ' left outer')
                ->first();

            $salesperson = DB::table('salesperson')->where(['personType' => 1, "iCompanyClientId" => $id])->orderBy('iSalesId', 'DESC')->get();
            $technicalperson = DB::table('technicalperson')->where(['personType' => 1, "iCompanyClientId" => $id])->orderBy('iTechnicalId', 'DESC')->get();
            $CompanyClients['salesperson'] = $salesperson;
            $CompanyClients['technicalperson'] = $technicalperson;
            //dd($CompanyClients->icompanyId);
            
            $CompanyMaster = CompanyMaster::where(['companymaster.isDelete' => 0,"iCompanyId" => $CompanyClients->iCompanyId])
                ->orderBy('strOEMCompanyName', 'ASC')
                ->first();

            return view('admin.customer_company_list.info', compact('CompanyClients','CompanyMaster'));
        } else {
            return redirect()->route('home');
        }
    }

    public function getCompanyClient(Request $request){
        $CompanyClient = CompanyClient::orderBy('iCompanyClientId', 'DESC')->where(['isDelete' => 0, 'iStatus' => 1, 'iCompanyId' => $request->OEMCompany])->get();
        $html = "";
        if (count($CompanyClient) > 0) {
            $html .= '<option label="Please Select" value="">-- Select --</option>';
            foreach ($CompanyClient as $Company) {
                $html .= '<option value="' . $Company->iCompanyClientId . '">' . $Company->CompanyName . '</option>';
            }
        }else{
            $html .= '<option label="Please Select" value="">No record Found</option>';
        }
        echo $html;
    }
    
    public function genrateCustomerCompanyExcel(Request $request){
        
        if (Auth::User()->role_id == 1) {
            $OEMCompanyID = $request->OEMCompany;
            $CompanyClients = CompanyClient::select('companyclient.*', 'strStateName', 'strCityName', 'strCompanyClientProfile')
                ->join('icompanyclientprofile', 'icompanyclientprofile.iCompanyClientProfileId', '=', 'companyclient.iCompanyClientProfileId', 'left outer')
                ->join('statemaster', 'statemaster.iStateId', '=', 'companyclient.iStateId', ' left outer')
                ->join('citymaster', 'citymaster.iCityId', '=', 'companyclient.iCityId', ' left outer')
                ->when($request->OEMCompany, fn ($query, $OEMCompany) => $query->where('companyclient.iCompanyId', $OEMCompany))
                ->when($request->iCompanyClientId, fn ($query, $iCompanyClientId) => $query->where('companyclient.iCompanyClientId', $iCompanyClientId))
                ->when($request->search_state, fn ($query, $search_state) => $query->where('companyclient.iStateId', $search_state))
                ->when($request->search_city, fn ($query, $search_city) => $query->where('companyclient.iCityId', $search_city))
                //->when($request->daterange, fn ($query, $daterange) => $query->whereBetween('companyclient.strEntryDate', [$formDate, $toDate]))
                ->orderBy('iCompanyClientId', 'DESC')->where(['companyclient.isDelete' => 0])->get();
            return view('admin.customer_company_list.download', compact('CompanyClients'));
        } else {
            return redirect()->route('home');
        }
    }
}
