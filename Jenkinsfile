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
                echo "deploying"
            }
        }
    }
}