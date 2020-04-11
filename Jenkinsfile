pipeline {
    agent any
    environment {
        BITBUCKET_COMMON_CREDS = credentials('ccaa48c3-be5c-4535-8225-afa9c171395c')
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
                echo "Run2211ning $BITBUCKET_COMMON_CREDS"
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