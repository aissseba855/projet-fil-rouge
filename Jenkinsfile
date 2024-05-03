pipeline {
    agent any
    stages {
        stage ('test') {
            steps {
                bat 'docker ps -a'
            }
        }
        stage ('Run Docker Compose') {
            steps {
                bat 'docker-compose up -d'
            }
        }
    }
    post {
        success {
            slackSend channel: '#projetdevops', message: 'code reussi'
        }
        failure {
            slackSend channel: '#projetdevops', message: 'code error'
        }
    }
}
