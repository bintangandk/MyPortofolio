node {
    checkout scm
    
    // Deploy ke environment dev
    stage("Build") {
        docker.image('shippingdocker/php-composer:7.4').inside('-u root') {
            sh '''
                rm composer.lock
                composer install
            '''
        }
    }
    
    // Tahap pengujian
    stage("Testing") {
        docker.image('ubuntu').inside('-u root') {
            sh 'echo "Ini adalah test"'
        }
    }
}
