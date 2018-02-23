<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Huddle\Zendesk\Services\ZendeskService;
use App\User;
use DB;
use Zendesk\API\HttpClient as ZendeskAPI;



class PagesController extends Controller
{
    //
    public function __construct(ZendeskService $zendesk_service) {
        $this->zendesk_service = $zendesk_service;
        }

         public function review() {
			         	$subdomain = "condingchallenge";
			$username  = "decenarizaldy@gmail.com"; // replace this with your registered email
			$token     = "loeq0qqM2STr6NtmaBdwIiHJ4uolUf80LIg0hkkl"; // replace this with your token

			$client = new ZendeskAPI($subdomain);
			$client->setAuth('basic', ['username' => $username, 'token' => $token]);
       	
				
			$users = $client->users()->findAll();
			$a = $users->users;
				
				User::truncate();
					foreach ($a as $key => $value) {
						
						$b = (array) $a[$key];
						User::create($b);
					}

			$list = DB::table('users')->get();
			return view('review',compact('list'));
					
							    }


}
