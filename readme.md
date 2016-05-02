# Twitter Stream

## Installation

1. Clone this repository
2. Configure your *.env* file
3. Run migrations

Creating previously the database run the next command in terminal.
    
    php artisan migrate

## Get tweets
Connect to twitter and push tweets into the queue. 

    php artisan tweets:get query

*query* is the text to search, if has many words use doble quotation marks like "Something to search".

Stop process running break command. 

    Ctrl ^C

## Save tweets in the system

    php artisan queue:listen

## Usage
Go to homepage and view approved tweets or create an account and access to admin panel for approve or unapprove tweets.

