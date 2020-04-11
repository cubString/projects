pipeline {
    agent any
    environment {
        SSH_PWD = credentials('1bc309fe-0b1e-4b4f-a0ce-9cc8ae645467')
        SSH_IP = '192.144.226.143'
    }
    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Test') {
            steps {

                echo 'Testing..'
                echo "Running ${env.BUILD_ID} on ${env.JENKINS_URL}"
                echo "Run222ning ${env.WORKSPACE}"
                echo "Run2211ning $SSH_PWD"
                sh '''
                   sudo docker ps -a
                '''
            }
        }
        stage('Deploy') {
             when {
              expression {
                currentBuild.result == null || currentBuild.result == 'SUCCESS' 
              }
            }
            steps {
                echo 'Deploying....'
            }
        }
    }
}