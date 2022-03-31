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
        
        stage('Deploy to Staging') { 
            steps {
                sh 'ssh -o StrictHostKeyChecking=no ubuntu@staging_server_IP "cd /var/www/html/jenkins-pipe-test; \
                    git pull origin master; \
                    composer install --no-interaction --no-dev; \
                    php artisan migrate --force; \
                    php artisan cache:clear; \
                    php artisan config:cache; \
                "'
            }
        }

        stage('Deploy to Production') { 
            input {
                message "Shall we go ahead?"
                ok "Yes Please."
            }
            steps {
                sh 'ssh -o StrictHostKeyChecking=no ubuntu@3.93.172.116 "cd /var/www/html/jenkins-staging-prod; \
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
