## Advanced Beginner Level
The goal of this level is to find the first job or freelance gig

__Link icons: :book: Official Docs :clapper: Video :page_facing_up: Article :capital_abcd: Course__ 

| Topic | Examples |
| ----- | ----- |
| **Routing Advanced** ||
| Route Model Binding | [web.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/routes/web.php#L26) <br> [ClientController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/ClientController.php#L38) <br>|
| Route Redirect |[web.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/routes/web.php#L16) <br>|
| **Middleware** ||
| Create Custom Middleware Class | [TermsAccepted.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Middleware/TermsAccepted.php) <br> [web.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/routes/web.php#L23)|
| **Database Advanced** ||
| Database Seeders and Factories | [/seeders](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/tree/main/database/seeders) <br> [/factories](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/tree/main/database/factories) <br>|
| Eloquent Query Scopes | [Filter.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Traits/Filter.php#L7) <br>|
| Polymorphic relationships | _Spatie Media Library_ <br>|
| Eloquent Accessors and Mutators | [User.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Models/User.php#L58) <br> [Client.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Models/Client.php#L23) |
| Eloquent Collections | [UserController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/UserController.php#L20) <br>|
| Soft Deletes | [User.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Models/User.php#L15) [UserController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/UserController.php#L21)
| **Auth Advanced** ||
| Authorization: Roles/Permissions, Gates, Policies |:book: [TaskController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/TaskController.php#L81) <br>|
| Authorization: Extra Packages - Spatie Permission, Bouncer, etc | [User.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Models/User.php#L15) <br> [web.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/routes/web.php#L25) <br> [tasks/index.blade.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/resources/views/tasks/index.blade.php#L56) <br>
| Authentication: Email Verification | [User.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Models/User.php#L13) <br>|
| **File Uploads Advanced** | [MediaController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/MediaController.php#L14) <br>
| Extra Packages: Spatie Medialibrary, Intervention Image, etc | [MediaController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/MediaController.php) <br> [Project.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Models/Project.php#L12) <br>|
| **API Basics** |:capital_abcd: [How to Create Laravel API](https://laraveldaily.teachable.com/p/how-to-create-laravel-api) <br>|
| API Routes and Controllers | [ClientController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/Api/ClientController.php) <br> [api.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/routes/api.php#L21) <br>|
| Working with API Clients: Postman or Alternatives |:book: [Postman API Client](https://www.postman.com/product/api-client/) <br>|
| API Eloquent Resources | [ClientResource.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Resources/ClientResource.php) <br>|
| API Auth with Sanctum | [api.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/routes/api.php#L21) <br> [User.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Models/User.php#L15) <br> [web.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/routes/web.php#L46) <br>|
| API Error Handling and Status Codes | [Handler.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Exceptions/Handler.php#L37) <br>
| **Debugging Errors** ||
| Log Files in Laravel |:book: [Logging](https://laravel.com/docs/8.x/logging) <br>|
| Try-Catch and Laravel Exceptions | [ClientController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/ClientController.php#L55) <br>|
| Local Debugging Tools: Debugbar, Telescope, Ray |:book: [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) <br>:book: [Laravel Telescope](https://laravel.com/docs/8.x/telescope) <br>:book: [Spatie Ray (Premium Tool)](https://myray.app/) <br>:clapper: [Debug Eloquent Queries from API: Laravel Telescope](https://www.youtube.com/watch?v=SR3RzIfeozI) <br>:clapper: [Spatie Ray: Laravel Debugging with Pleasure](https://www.youtube.com/watch?v=n4pMxyAXeqY) <br>|
| Customizing Error Pages and Messages |:book: [/errors](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/tree/main/resources/views/errors) <br>:
| (optional) Third Party Bug Trackers: Bugsnag, Flare, Sentry, Rollbar |:book: [Bugsnag Laravel](https://docs.bugsnag.com/platforms/php/laravel/) <br>:book: [Flare Homepage](https://flareapp.io/) <br>:book: [Sentry Laravel](https://docs.sentry.io/platforms/php/guides/laravel/) <br>:book: [Rollbar Laravel](https://docs.rollbar.com/docs/laravel) <br>:clapper: [Bug Tracking in Laravel: Bugsnag vs Flare [Demo/Review]](https://www.youtube.com/watch?v=88UqUXhWwGA) <br>|
| **Sending Email** ||
| Mailables and Mail Facade | [TaskAssigned.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Mail/TaskAssigned.php) <br> [TaskController.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/TaskController.php#L41) <br> [assigned.blade.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/resources/views/emails/taks/assigned.blade.php)|
| Configure Drivers/Services: Mailgun, Mailtrap, etc |:page_facing_up: [How to Send Email From Laravel, and Why We Need 3rd Party Providers For It](https://laraveldaily.com/how-to-send-email-from-laravel-and-why-we-need-3rd-party-providers-for-it/) <br>:book: [Mail: Drivers Prerequisites](https://laravel.com/docs/8.x/mail#driver-prerequisites) <br>|
| Notifications System: Email, SMS, Slack, etc. | [TaskAssigned.php](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Notifications/TaskAssigned.php) <br> [TaskController](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/blob/main/app/Http/Controllers/TaskController.php#L37) |
| **Automated Testing with PHPUnit** ||
| Configure Testing Database and Test CRUD Operations | [/Feature](https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Roadmap/tree/main/tests/Feature) <br>|
| **Deployment and Version Control** ||
| Git Version Control |:book: [Git](https://git-scm.com/) <br>:clapper: [Git in Laravel. Part 1 - Branches: Main, Develop and Feature](https://www.youtube.com/watch?v=AmScEC-_72I) <br>|
| Deployment on Live Servers |:book: [Deployment](https://laravel.com/docs/8.x/deployment) <br>:page_facing_up: [How to Deploy Laravel Projects to Live Server: The Ultimate Guide](https://laraveldaily.com/how-to-deploy-laravel-projects-to-live-server-the-ultimate-guide/) <br>:page_facing_up: [What Server is Needed to Deploy Laravel Projects](https://laraveldaily.com/what-server-is-needed-to-deploy-laravel-projects/) <br>:clapper: [How we Deploy Laravel: Branches, Staging Servers, Forge and Envoyer](https://www.youtube.com/watch?v=8DVuVftFZcQ) <br>|


## Get sanctum token

Visit `/token` page
