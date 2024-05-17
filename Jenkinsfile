pipeline {
    agent any
    environment {
        // Assurez-vous que ce chemin mène à votre kubeconfig local généré par Minikube
        KUBECONFIG = "C:\\Users\\AICHA\\.kube\\config"
        // Chemin où se trouvent vos fichiers Terraform dans votre projet
        //TERRA_DIR = "C:\\xampp\\htdocs\\Gestion_Etudiant\\terra"
       TERRA_DIR = "C:\Users\AICHA\Desktop\projet-fil-rouge\Teraform"
    }
    stages {
        stage('Initialization') {
            steps {
                // Affiche la version de Terraform pour le débogage
                script {
                    bat 'terraform --version'
                }
            }
        }
        
        stage("Terraform Init") {
            steps {
                script {
                    // Initialise Terraform
                    bat "cd %TERRA_DIR% && terraform init"
                }
            }
        }
        
        stage("Terraform Plan") {
            steps {
                script {
                    // Exécute le plan Terraform
                    bat "cd %TERRA_DIR% && terraform plan"
                }
            }
        }
        
        stage("Terraform Apply") {
            steps {
                script {
                    // Applique la configuration Terraform
                    bat "cd %TERRA_DIR% && terraform apply --auto-approve"
                }
            }
        }
    }
    post {
        always {
            script {
                // Nettoie l'environnement après l'exécution du pipeline
                bat "cd %TERRA_DIR% && terraform destroy --auto-approve"
            }
        }
        succes {
            emailext (
                subject : "Notification de build de jenkins avec terraform-succes",
                body : "votre build de pipeline jenkins terraform passe avec succes",
                to : "aisseba855@gmail.com"
            )
        }
        failure {
            emailext (
                subject : "Notification de build de jenkins avec terraform echec",
                body : "votre build de pipeline jenkins ne passe pas",
                to : "aisseba855@gmail.com"
            )
        }
    }
}
