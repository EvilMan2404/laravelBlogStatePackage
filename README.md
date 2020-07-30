# laravelBlogStatePackage
#Step 1
Add this into composer.json

"require": {
        ....
        "evilman2404/blogstate": "^1.0.0"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/EvilMan2404/laravelBlogStatePackage"
        }
    ],


#Step 2
composer update 


#Step 3 
php artisan migrate

#Open http://your-domain.com/ev/state -> and you will see this

