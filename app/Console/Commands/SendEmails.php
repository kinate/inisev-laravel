<?php

namespace App\Console\Commands;

use App\Models\Website;
use App\Mail\EmailToSubscriber;
use App\Notifications\newPostEmail;
use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:subscriberWebsite {website_id}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to subscribers';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $websiteId = $this->argument('website_id');
        //Get latest post
        $post = Post::where('website_id', $websiteId)->latest('created_at')->first();
        $subscribers = Website::where('id', $websiteId)->with('users')->first();

        $emailArray = array();
        $post_title=$post->title;
        $post_content=$post->content;

        $users = $subscribers->users;
        foreach ($users as $user) {
            Mail::to($user->email)->send(new EmailToSubscriber ($post_title,$post_content));
        }

    }
}
