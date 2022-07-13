<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function post(Request $request)
    {

        $websiteId = $request->input('website_id');
        $userId = $request->input('user_id');
        $title = $request->input('title');
        $content = $request->input('content');
        $category = $request->input('category');
        $website = Website::find($websiteId);// this is new comment



        if ($websiteId == "" || $userId == "") {
            return response()->json([
                "message" => "Website and User ID are required"
            ]);
        }
        if (!$website) {
            return response()->json([
                "message" => "Website with ID " . $websiteId . " is not found"
            ]);
        }
        if (!$userId) {
            return response()->json([
                "message" => "User with ID " . $userId . " is not found"
            ]);
        }

        $post = Post::create([
            "title" => $title . $userId,
            "slug" => "slug line",
            "content" => $content,
            "category" => $category,
            "author" => $userId,
            "website_id" => $websiteId,
        ]);


        Artisan::call('mail:subscriberWebsite', [
            'website_id' => $websiteId,
        ]);

        return response()->json([
            "message" => "Post created successfully",
        ]);
    }

    public function subscribe(Request $request)
    {
        $websiteId = $request->input('website_id');
        $userId = $request->input('user_id');

        if ($websiteId == "" || $userId == "") {
            return response()->json([
                "message" => "Website and User ID are required"
            ]);
        }

        $website =  DB::table('user_websites')->where(["user_id"=>$userId,"website_id"=>$websiteId])->count();
        if ($website !=0) {
            return response()
                ->json([
                    "message" => "The user has already subscribed to this website"
                ]);
        }

        DB::table('user_websites')->insert([
            "user_id" => $userId,
            "website_id" => $websiteId
        ]);

        return response()
            ->json([
                "message" => "User subscription successfully"
            ]);
    }
}
