<?php

namespace App\Models;

use App\Exceptions\IdDoesntExistException;
use app\Log\UserActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\QueryException;

class ClaimModel
{
	// Select all products
	public function getClaims($claimsPerPage = null, $request, $role)
	{
        $rcId = $request->input('rc');
        $product = $request->input('product');
        $searchString = $request->input('search');
        $searchField = $request->input('field');
        $status = $request->input('status');

        $filterType = $request->session()->get('filterTypeClaims');
        $filterOrder = $request->session()->get('filterOrder');

        if(isset($rcId)){
        $request->session()->put('rc', $rcId);
        }
        if(isset($product)){
            $request->session()->put('product', $product);
        }
        if(isset($searchString)){
            $request->session()->put('searchClaim', $searchString);
        }
        if(isset($searchField)){
            $request->session()->put('fieldClaim', $searchField);
        }
        if(isset($status)){
            $request->session()->put('status', $status);
        }

        $rcId = $request->session()->get('rc');
        $product = $request->session()->get('product');
        $searchString = $request->session()->get('searchClaim');
        $searchField = $request->session()->get('fieldClaim');
        $status = $request->session()->get('status');

        if(empty($filterType) || empty($filterOrder)) {

            $filterType = 'created_at';
            $filterOrder = 'desc';
        }


		$claims = DB::table('claim')
            ->join('customer', 'claim.customer_id', '=', 'customer.id')
            ->join('repair_center', 'claim.repair_center_id', '=', 'repair_center.id')
            ->select('claim.id as claim_id',
                    'claim.product_style as style',
                    \DB::raw('DATE_FORMAT(claim.created_at, "%m/%d/%Y") as created_at'),
                    \DB::raw('DATE_FORMAT(claim.date_closed, "%m/%d/%Y") as closed_at'),
                    'claim.parts_available as parts_available',
                    'claim.part_needed as part_needed',
                    'claim.tracking_number as tracking_number',
                    'claim.replace_order as replace_order',
                    'customer.first_name as first', 
                    'customer.last_name as last',
                    'repair_center.name as repair_center', 
                    'repair_center.id as repair_center_id'
                    )
            ->orderBy($filterType, $filterOrder)

            // TWC - Only show repair claims where part_needed == 1
            ->when($role == "partCompany", function($query) {
                return $query->where('claim.part_needed', '=', 1)
                             ->where('claim.replace_order', '=', 0);
            })

            // Search
            ->when($searchString, function($query) use($searchString, $searchField) {
                if ($searchField === 'claim')
                {
                    return $query->where('claim.id', 'like', '%' . $searchString . '%');
                }
                else if ($searchField === 'cust')
                {
                    return $query->where('customer.first_name', 'like', '%' . $searchString . '%')
                                ->orWhere('customer.last_name', 'like', '%' . $searchString . '%');
                }
                else if ($searchField === 'rc')
                {
                    return $query->where('repair_center.name', 'like', '%' . $searchString . '%');
                }
                else if ($searchField === 'product')
                {
                    return $query->where('claim.product_style', 'like', '%' . $searchString . '%');
                }
                else
                {
                    return $query->where('claim.id', 'like', '%' . $searchString . '%')
                                ->orWhere('customer.first_name', 'like', '%' . $searchString . '%')
                                ->orWhere('customer.last_name', 'like', '%' . $searchString . '%')
                                ->orWhere('claim.product_style', 'like', '%' . $searchString . '%')
                                ->orWhere('repair_center.name', 'like', '%' . $searchString . '%');
                }
            })

            // Product Filter
            ->when($product, function($query) use($product) {
                return $query->where('claim.product_style', '=', $product);
            })

            // Repair Center Filter
            ->when($rcId, function($query) use($rcId) {
                return $query->where('repair_center.id', '=', $rcId);
            })

            // Claim Status Filter
            ->when($status === "Open", function($query) {
                return $query->where('claim.date_closed', '=', null);
            })
            ->when($status === "Closed", function($query) {
                return $query->where('claim.date_closed', '!=', null);
            })

            // Pagination
            ->when($claimsPerPage, function ($query) use ($claimsPerPage) {
                return $query->paginate($claimsPerPage);
            }, function ($query) {
                return $query->get();
            });

		return $claims;
	}

    // Select claim by ID
    public function getClaim($id)
    {
                //$claim = DB::table('claim')->where('id', '=', $id)->get();
                $claim = DB::table('claim')
                    ->join('customer', 'claim.customer_id', '=', 'customer.id')
                    ->join('repair_center', 'claim.repair_center_id', '=', 'repair_center.id')
                    ->join('damage_code', 'claim.damage_code_id', '=', 'damage_code.id')
                    ->join('product', 'claim.product_style', '=', 'product.style')
                    ->select(
                        'claim.id as claim_id',
                        'claim.customer_id as cust_id',
                        \DB::raw('DATE_FORMAT(claim.created_at, "%m/%d/%Y") as claim_created_at'),
                        \DB::raw('DATE_FORMAT(claim.date_closed, "%m/%d/%Y") as claim_date_closed'),
                        'claim.email_sent as claim_email_sent',
                        'claim.replace_order as replace_order',
                        'claim.ship_to as ship_to',
                        'claim.part_needed as part_needed',
                        'claim.parts_needed as parts_needed',
                        'claim.parts_available as parts_available',
                        'claim.tracking_number as tracking_number',
                        'claim.purchase_order as purchase_order',
                        'claim.part_company_comment as part_company_comment',
                        'claim.created_by as created_by',
                        'customer.address as cust_address',
                        'claim.invoice_amount as invoice_amount',
                        'customer.address_2 as cust_address_2',
                        'customer.city as cust_city',
                        'customer.email as cust_email',
                        'claim.invoice_amount as invoice_amount',
                        'customer.first_name as cust_first_name',
                        'customer.last_name as cust_last_name',
                        \DB::raw("CONCAT('(', SUBSTRING(customer.phone, 1, 3), ') ',
                                      SUBSTRING(customer.phone, 4, 3), '-',
                                      SUBSTRING(customer.phone, 7, 4)) as cust_phone"),
                        'customer.state as cust_state',
                        'customer.zip as cust_zip',
                        'product.style as product_style',
                        'repair_center.id as rc_id',
                        'repair_center.address as rc_address',
                        'repair_center.name as rc_name',
                        'repair_center.city as rc_city',
                        'repair_center.state as rc_state',
                        'repair_center.contact_name as rc_contact',
                        \DB::raw("CONCAT('(', SUBSTRING(repair_center.phone, 1, 3), ') ',
                                      SUBSTRING(repair_center.phone, 4, 3), '-',
                                      SUBSTRING(repair_center.phone, 7, 4)) as rc_phone"),
                        'repair_center.email as rc_email',
                        'repair_center.zip as rc_zip',
                        'damage_code.id as dc_id',
                        'damage_code.part as dc_part'
                    )
                    ->where('claim.id', '=', $id)
                    ->get();

                return $claim;
    }

    public function insertClaim($existing_customer_email, $customerData ,$comment, $createdBy, $products, $damage_code, $repair_center, $replace_order, $ship_to, $part_needed, $parts_needed, $updateSwitch, $purchaseOrder){


        DB::beginTransaction();

        $isCustomerInDB = false;

        try {

            $customers = DB::table('customer')->get();

            //Checks to see if customer exists in the db, if it does then the insert new customer step is skipped

            foreach($customers as $customer){

                if($customer->email == $customerData['email'] || $customer->email == $existing_customer_email) {

                    $isCustomerInDB = true;
                    break;
                }
            }

            if(!$isCustomerInDB && $updateSwitch == 0) {

                $customerID = DB::table('customer')->insertGetId([
                    'first_name' => $customerData['first_name'],
                    'last_name' => $customerData['last_name'],
                    'address' => $customerData['address'],
                    'address_2' => $customerData['address_2'],
                    'city' => $customerData['city'],
                    'state' => $customerData['state'],
                    'zip' => $customerData['zip'],
                    'phone' => $customerData['phone'],
                    'email' => $customerData['email']
                ]);

                //$customerID = DB::table('customer')->where('customer.email', '=', $customerData['email'])->pluck('id')[0];

                $claimCustomerInsertValues = (array) DB::table('customer')->where('id', '=', $customerID)->get()[0];

                //Stores User Activity Log Data into the DB
                $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'New Customer Inserted');
                $UALog->insertAllValues(array_keys($claimCustomerInsertValues), array_values($claimCustomerInsertValues));

            } else if(!empty($existing_customer_email) && $isCustomerInDB && empty($customerData['email'])){

                $output = new \Symfony\Component\Console\Output\ConsoleOutput(2);

                $customerID = DB::table('customer')->where('customer.email', '=', $existing_customer_email)->select('id')->pluck('id')[0];

                $output->writeln($customerID);


            } else {
                DB::rollback();

                return redirect()->route('claim-index')->withErrors('Customer with that email already exists.');
            }

            $claimId = DB::table('claim')->insertGetId([
                'customer_id'      => $customerID,
                'created_by'       => $createdBy,
                'product_style'    => $products,
                'damage_code_id'   => $damage_code,
                'repair_center_id' => $repair_center,
                'replace_order'    => $replace_order,
                'ship_to'          => $ship_to,
                'part_needed'      => $part_needed,
                'parts_needed'     => $parts_needed,
                'purchase_order' => $purchaseOrder ? $purchaseOrder : NULL
            ]);

            //$claimID = DB::table('claim')->orderBy('claim.id', 'Desc')->pluck('claim.id')->first();

            $claimValuesForInsert = (array) DB::table('claim')->where('id', '=', $claimId)->get()[0];

            //Stores User Activity Log Data into the DB
            $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'New Claim Inserted');
            $UALog->insertAllValues(array_keys($claimValuesForInsert), array_values($claimValuesForInsert));

            $claimCommentValuesForInsert = [
                'claim_id' => $claimId,
                'author' => Auth::user()->id . ' : ' . Auth::user()->name,
                'author_id' => Auth::user()->id,
                'comment' => $comment
            ];

            DB::table('claim_comment')->insert($claimCommentValuesForInsert);

            //Stores User Activity Log Data into the DB
            $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'New Claim Comment Inserted');
            $UALog->insertAllValues(array_keys($claimCommentValuesForInsert), array_values($claimCommentValuesForInsert));

            DB::table('claim_customer')->insert([
                'claim_id' => $claimId,
                'customer_id' => $customerID
            ]);

        } catch (ValidationException $e)
        {
            DB::rollback();

        } catch (\Exception $e) {

            DB::rollback();
            throw $e;

        }

        DB::commit();
    }

    public function insertComment($claimID, $comment)
    {
        $insertCommentValues = [
            'author' => Auth::user()->name,
            'author_id' => Auth::user()->id,
            'claim_id' => $claimID,
            'comment' => $comment
        ];

        DB::table('claim_comment')->insert($insertCommentValues);

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'New Claim Comment Inserted');
        $UALog->insertAllValues(array_keys($insertCommentValues), array_values($insertCommentValues));
    }

    public function getMostRecentClaimId()
    {
        return DB::table('claim')->orderBy('claim.id', 'Desc')->pluck('claim.id')->first();
    }

    public function getLatestClaimIdByEmail($email)
    {
        $claimId = DB::table('claim_customer')
            ->join('customer', 'claim_customer.customer_id', '=', 'customer.id')
            ->select(
                'claim_customer.claim_id as id'
            )
            ->where('customer.email', '=', $email)
            ->orderBy('id', 'desc')
            ->first();

        return $claimId;
    }

    public function deleteClaim($id)
    {
        $deletedClaimValues = (array) DB::table('claim')->where('id', '=', $id)->get()[0];

        DB::table('claim')->where('id', '=', $id)->delete();

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim Deleted');
        $UALog->insertAllValues(array_keys($deletedClaimValues), array_values($deletedClaimValues));


    }

    // Get comments for a claim
    public function getComments($id)
    {
        $comments = DB::table('claim_comment')
            ->where('claim_id', '=', $id)
            ->select(
                'id as id',
                'author as author',
                'author_id as author_id',
                'created_at as created', // Alias for orderBy only.
                \DB::raw('DATE_FORMAT(created_at, "%m/%d/%Y %h:%i%p") as created_at'),
                'comment as comment'
            )
            ->orderBy('created', 'desc')
            ->get();

        return $comments;
    }

    public function editComment($id, $newComment){



        DB::table('claim_comment')
            ->where('id', '=', $id)
            ->update(['comment' => $newComment]);

        $editCommentValues = (array) DB::table('claim_comment')->where('id', '=', $id)->get()[0];

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim Comment Edited');
        $UALog->insertAllValues(array_keys($editCommentValues), array_values($editCommentValues));
    }

    public function updateClaim($claimId, $customerId, $createdBy, $product, $repairCenter, 
                                $damageCode, $claimType, $partsRequired, $partsNeeded, 
                                $shipPartsTo, $purchaseOrder) {

        DB::table('claim')
            ->where('id', '=', $claimId)
            ->update([
                'customer_id' => $customerId,
                'created_by' => $createdBy,
                'product_style' => $product,
                'repair_center_id' => $repairCenter,
                'damage_code_id' => $damageCode,
                'replace_order' => $claimType,
                'part_needed' => $partsRequired,
                'parts_needed' => $partsNeeded,
                'ship_to' => $shipPartsTo,
                'purchase_order' => $purchaseOrder ? $purchaseOrder : NULL
            ]);

        $updateClaimValues = (array) DB::table('claim')->where('id', '=', $claimId)->get()[0];

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim Edited');
        $UALog->insertAllValues(array_keys($updateClaimValues), array_values($updateClaimValues));
    }

    public function convertToReplaceOrder($id)
    {
        DB::table('claim')
            ->where('id', '=', $id)
            ->update(['replace_order' => 1]);

        $convertToReplaceOrderClaimValues = (array) DB::table('claim')->where('id', '=', $id)->get()[0];

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim Convert To Replace Order');
        $UALog->insertAllValues(array_keys($convertToReplaceOrderClaimValues), array_values($convertToReplaceOrderClaimValues));
    }

    public function enterPartAvailability($id, $partsAvailable, $partCompanyComment) 
    {
        DB::table('claim')
            ->where('id', '=', $id)
            ->update([
                'parts_available' => $partsAvailable,
                'part_company_comment' => $partCompanyComment
            ]);

        $partAvailabilityClaimValues = (array) DB::table('claim')->where('id', '=', $id)->get()[0];

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim Part Availability entered');
        $UALog->insertAllValues(array_keys($partAvailabilityClaimValues), array_values($partAvailabilityClaimValues));


    }

    public function enterTrackingNumber($id, $trackingNumber) 
    {
        DB::table('claim')
            ->where('id', '=', $id)
            ->update([
                'tracking_number' => $trackingNumber
            ]);

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim Tracking Number Entered');
        $UALog->insertAllValues((array) 'tracking_number', (array) $trackingNumber);
    }

    public function updateInvoiceAmount($id, $invoiceAmount) 
    {
        DB::table('claim')
            ->where('id', '=', $id)
            ->update([
                'invoice_amount' => $invoiceAmount
            ]);

        //Stores User Activity Log Data into the DB
        // $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim Tracking Number Entered');
        // $UALog->insertAllValues((array) 'tracking_number', (array) $trackingNumber);
    }

    public function closeClaim($id)
    {
    	DB::table('claim')
            ->where('id', '=', $id)
            ->update([
                'date_closed' => Carbon::now()
            ]);

        $closeClaimValues = (array) DB::table('claim')->where('id', '=', $id)->get()[0];

        //Stores User Activity Log Data into the DB
        $UALog = new UserActivityLog(Auth::user()->id, Auth::user()->name, 'Claim closed');
        $UALog->insertAllValues($closeClaimValues, $closeClaimValues);
    }
}