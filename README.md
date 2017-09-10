# emailer
Send email notifications on events

### Installation
* Run composer install ``composer install``
* Configure your ``.env``
* Run db migrations ``php artisan migrate --seed``

### Events example usages:
````
HomeController::sendFeedbackNotification()
RegisterController::sendEmailNotification()
````