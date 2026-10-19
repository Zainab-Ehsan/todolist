pipeline {
    agent any

    options {
        disableConcurrentBuilds()
    }

    environment {
        COMPOSE_PROJECT_NAME = 'laravel-todolist'
        TEST_APP_KEY = 'base64:AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA='
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
                sh 'git rev-parse --short HEAD'
            }
        }

        stage('Validate Configuration') {
            steps {
                sh 'docker compose config -q'
            }
        }

        stage('Build Docker Images') {
            steps {
                sh 'docker compose build backend frontend'
            }
        }

        stage('Run Laravel Tests') {
            steps {
                sh '''
                    docker compose run --rm --no-deps \
                      -e APP_ENV=testing \
                      -e APP_KEY="$TEST_APP_KEY" \
                      -e DB_CONNECTION=sqlite \
                      -e DB_DATABASE=:memory: \
                      -e CACHE_STORE=array \
                      -e SESSION_DRIVER=array \
                      -e QUEUE_CONNECTION=sync \
                      backend php artisan test
                '''
            }
        }

        stage('Deploy Application') {
            steps {
                withCredentials([
                    string(
                        credentialsId: 'laravel-app-key',
                        variable: 'APP_KEY'
                    )
                ]) {
                    sh '''
                        test -n "$APP_KEY" || {
                            echo "APP_KEY credential is missing"
                            exit 1
                        }

                        docker compose up -d --remove-orphans

                        docker compose exec -T backend \
                          php artisan migrate --force

                        docker compose ps
                    '''
                }
            }
        }
    }

    post {
        success {
            echo 'Todo application pipeline completed successfully.'
        }

        failure {
            echo 'Pipeline failed. Check the failed stage in Console Output.'
        }
    }
}
