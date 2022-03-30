pipeline {
    agent any 
    stages {
        stage('Build') { 
            steps {
                sh 'composer install --no-interaction'
                // sh "npm install"
                // sh "npm run prod or dev"
            }
        }
        stage('Test') { 
            steps {
                echo "testing stage"
            }
        }
        stage('Deploy') { 
            steps {
                sh 'ssh ubuntu@52.202.226.255 "cd /var/www/html/jenkins-pipe-test; \
                    git pull origin master; \
                    composer install --no-interaction --no-dev; \
                    php artisan migrate --force; \
                    php artisan cache:clear; \
                    php artisan config:cache; \
                "'
            }
        }
    }
}