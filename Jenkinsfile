pipeline {
    agent any 
    stages {
        stage('Build') { 
            steps {
                sh "composer install --no-interaction"
                // sh "npm install"
                // sh "npm run prod or dev"
            }
        }
        stage('Test') { 
            steps {
                sh './vendor/bin/phpunit'
            }
        }
        stage('Deploy') { 
            steps {
                echo "deloying"
            }
        }
    }
}