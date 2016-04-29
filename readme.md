# Twitter Stream

## Installation

1. Clone this repository
2. Configure your *.env* file
3. Run migrations

Creating previously the database run the next command in terminal.
    
    php artisan migrate

## Get tweets
Connect to twitter and push tweets into the queue. 

    php artisan connect-to-streaming-api

For stop process run break command. 

    Ctrl ^C

## Save tweets in the system

    php artisan queue:listen

## Usage
Go to homepage and view approved tweets or create an account and access to admin panel for approve o unapprove tweets.

