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

        stage('Deploy to Production') { 
            input {
                message "Shall we go ahead?"
                ok "Yes Please."
            }
            steps {
                sh 'ssh -o StrictHostKeyChecking=no ubuntu@107.21.83.210 "cd /var/www/html/jenkins-pipe-test; \
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
