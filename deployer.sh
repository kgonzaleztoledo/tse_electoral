set -e

    echo "Deploying application ..."

    #Enter maintenance mode
    (php artisan down --message 'The ap is being (quickly!)')

    #update codebase
        git pull origin master

    #exit maintenance mode
    php artisan up

    echo "Aplicacion Deployed!"
