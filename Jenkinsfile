pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build') {
            steps {
                script {
                    docker.image('composer:2').inside('-u root') {
                        sh '''
                            cp .env.example .env || true
                            composer install --no-interaction --prefer-dist --optimize-autoloader
                        '''
                    }
                }
            }
        }

        stage('Set APP_KEY') {
            steps {
                script {
                    docker.image('php:8.4-cli').inside('-u root') {
                        sh '''
                            php artisan key:generate
                        '''
                    }
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    docker.image('php:8.4-cli').inside('-u root') {
                        sh 'php artisan test'
                    }
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    sh 'echo "CI checks passed. Ready for Vercel deployment."'
                }
            }
        }
    }
}