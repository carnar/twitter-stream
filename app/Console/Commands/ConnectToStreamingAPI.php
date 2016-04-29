<?php

namespace App\Console\Commands;

use App\TwitterStream;
use Illuminate\Console\Command;

class ConnectToStreamingAPI extends Command
{
    private $twitterStream;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'connect-to-streaming-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Connect to Twitter streaming API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(TwitterStream $twitterStream)
    {
        parent::__construct();

        $this->twitterStream = $twitterStream;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $twitter_consumer_key = env('TWITTER_CONSUMER_KEY', '');
        $twitter_consumer_secret = env('TWITTER_CONSUMER_SECRET', '');

        $this->twitterStream->consumerKey = $twitter_consumer_key;
        $this->twitterStream->consumerSecret = $twitter_consumer_secret;
        $this->twitterStream->setTrack(array('coding'));
        $this->twitterStream->consume();
    }
}
