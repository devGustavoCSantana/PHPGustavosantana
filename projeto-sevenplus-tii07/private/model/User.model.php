<?php
    // Criando a Classe de Obj "User"
    class User {
        private $userName;
        private $userEmail;
        private $userPassword;
        private $userNewPassword;
        private $idRec;

        // Envio
        public function setUserName(String $userName) {
            $this->userName = $userName;
        }
        // Retorno
        public function getUserName() {
            return $this->userName;
        }

        public function setUserEmail(String $userEmail) {
            $this->userEmail = $userEmail;
        }
        public function getUserEmail() {
            return $this->userEmail;
        }

        public function setUserPassword(String $userPassword) {
            $this->userPassword = $userPassword;
        }
        public function getUserPassword() {
            return $this->userPassword;
        }

        public function setUserNewPassword(String $userNewPassword) {
            $this->userNewPassword = $userNewPassword;
        }
        public function getUserNewPassword() {
            return $this->userNewPassword;
        }

        public function setIdRec(String $idRec) {
            $this->idRec = $idRec;
        }
        public function getIdRec() {
            return $this->idRec;
        }

        public function validatedLogin (String $fxUser) {
            // Certifique-se de que o caminho e a conexão estão corretos com o banco de dados
            require "../config/db/conn.php";

            // Preparando a consulta em SQL usando parâmetros do PDO
            $sql = "SELECT * FROM tbuser WHERE email = :userEmail";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":userEmail", $this->userEmail);
            $stmt->execute();

            $userEmailDB = "";
            $userPasswordDB = "";

            // Busca o resultado da consulta execultada
            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $userEmailDB = $row["email"];
                $userPasswordDB = $row["password"];
                $idStatus = $row["idstatus"];
            }

            include_once("Crypt.model.php");
            $Encryption = new Encrypt;

            $Cpass = $this->userPassword;
            $Cemail = $this->userEmail;

            $passCP = $Encryption->cryptPass($Cpass, $Cemail);

            if (
                ($userEmailDB == $this->userEmail) &&
                ($passCP === $userPasswordDB) &&
                ($idStatus == 2)
                ) {
                $result = [
                    "status"       => true,
                    "msg"          => "<p>Usuário válido!</p>",
                    "userEmail"    => $this->userEmail,
                    "userPassword" => $this->userPassword,
                    "senha gerada" => $passCP,
                    "senha banco"  => $userPasswordDB,
                    'dashboardClient' =>'http://localhost/projeto-sevenplus-tii07/public_html/dashboard-client.php'
                ];
            } else {
                $result = [
                    "status"       => false,
                    "msg"          => "<p>Usuário email ou senha não válida!</p>",
                    "userEmail"    => $this->userEmail,
                    "userPassword" => $this->userPassword
                ];
            }

            // Saída para o objeto
            // $this->fxLogin = $result;

            // Saída para JSON
            return $result;
        }

        public function validatedRegister (String $fxUser) {
            require("../config/db/conn.php");

            $sql = "SELECT * FROM tbuser WHERE email = :userEmail";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":userEmail", $this->userEmail);
            $stmt->execute();

            $userEmailDB = "";

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $userEmailDB = $row["email"];
            }

            if ($userEmailDB === $this->userEmail) {
                $result = [
                    "status"       => true,
                    "msg"          => "<p>Usuário já cadastrado!</p>",
                    "userName"     => $this->userName,
                    "userEmail"    => $this->userEmail,
                    "userPassword" => $this->userPassword
                ];
            } else {
                include_once("Crypt.model.php");
                $Encryption = new Encrypt;
                
                $Cpass = $this->userPassword;
                $Cemail = $this->userEmail;

                $passCP = $Encryption->cryptPass($Cpass, $Cemail);
                $hashCP = $Encryption->cryptHash($Cpass, $Cemail);

                $idStatus = 2;
                $idProfile = 1;

                $sql = ("INSERT INTO tbuser (email, password, hash, idStatus, idProfile)
                            VALUES (:email, :password, :hash, :idStatus, :idProfile)
                ");

                $stmt = $conn->prepare($sql);

                $stmt->bindParam(":email", $Cemail);
                $stmt->bindParam(":password", $passCP);
                $stmt->bindParam(":hash", $hashCP);
                $stmt->bindParam(":idStatus", $idStatus);
                $stmt->bindParam(":idProfile", $idProfile);

                $stmt->execute();

                $idUser = $conn->lastInsertId();

                $result = [
                    "status"       => true,
                    "msg"          => "<p>Usuário cadastrado!</p>",
                    "userName"     => $this->userName,
                    "userEmail"    => $this->userEmail,
                    "userPassword" => $this->userPassword,
                    "senha gerada" => $passCP,
                    "idStatus"     => $idStatus,
                    "idProfile"    => $idProfile,
                    "hash"         => $hashCP
                ];
            }

            return $result;
        }

        public function validatedEmail (String $fxUser) {
            require("../config/db/conn.php");

            $sql = "SELECT email, hash FROM tbuser WHERE email = :userEmail";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":userEmail", $this->userEmail);
            $stmt->execute();

            $userEmailDB = "";
            $hash = "";

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $userEmailDB = $row["email"];
                $hash = $row["hash"];
            }

            if ($userEmailDB === $this->userEmail) {
                $url = "http://localhost/projeto-sevenplus-tii07/public_html/insert-new-password.php?idRec=$hash";
                $result = [
                    "status" => true,
                    "msg"    => "
                                    <p>Solicitado a alteração de senha do Email: $this->userEmail</p>
                                    <p>Para alterar sua senha clique no link abaixo:</p>
                                    <p>
                                        <a href='$url' target='_blank'>$url</a>
                                    </p>
                                "
                ];
            } else {
                $result = [
                    "status"    => false,
                    "msg"       => "<p>Email não encontrado!</p>",
                    "userEmail" => $this->userEmail
                ];
            }

            return $result;
        }

        // public function updateNewPassword (String $fxUser) {
        //     require("../config/db/conn.php");

        //     $sql = "SELECT * FROM tbuser WHERE email = :userEmail AND hash = :idRec";
        //     $stmt = $conn->prepare($sql);
        //     $stmt->bindParam(":userEmail", $this->userEmail);
        //     $stmt->bindParam(":idRec", $this->idRec);
        //     $stmt->execute();

        //     $userEmailDB = "";
        //     $hashDB = "";

        //     if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //         $idUserDB = $row["idUser"];
        //         $userEmailDB = $row["email"];
        //         $hashDB = $row["hash"];
        //     }

        //     if ($userEmailDB === $this->userEmail && $hashDB === $this->idRec) {
        //         include_once("Crypt.model.php");
        //         $Encryption = new Encrypt;
                
        //         $Cpass = $this->userNewPassword;
        //         $Cemail = $this->userEmail;

        //         $passCP = $Encryption->cryptPass($Cpass, $Cemail);
        //         $hashCP = $Encryption->cryptHash($Cpass, $Cemail);

        //         $sql  = "UPDATE tbuser SET password = :passCP, hash = :hashCP WHERE idUser = :idUserDB";
        //         $stmt = $conn->prepare($sql);
        //         $stmt->bindParam(':passCP', $passCP);
        //         $stmt->bindParam(':hashCP', $hashCP);
        //         $stmt->bindParam(':idUserDB', $idUserDB);
 
        //         $stmt->execute();

        //         $result = [
        //             "status" => true,
        //             "msg" => "<p>Senha alterada com sucesso!</p>",
        //             "userEmail" => $this->userEmail
        //         ];
        //     } else {
        //         $result = [
        //             "status" => false,
        //             "msg" => "<p>ERRO ao alterar senha!</p>",
        //             "userEmail" => $this->userEmail
        //         ]; 
        //     }

        //     return $result;
        // }

        public function updateNewPassword (String $fxUser) {
            require("../config/db/conn.php");
 
            $sql  = "SELECT * FROM tbuser WHERE email = :userEmail AND hash = :idRec";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":userEmail", $this->userEmail);
            $stmt->bindParam(":idRec", $this->idRec);
            $stmt->execute();
 
            $userEmailDB = "";
            $hashDB      = "";
 
            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $idUserDB    = $row["idUser"];
                $userEmailDB = $row["email"];
                $hashDB      = $row["hash"];
            }
 
            if ($userEmailDB === $this->userEmail && $hashDB === $this->idRec) {
                include_once("Crypt.model.php");
                $Encryption = new Encrypt;
               
                $Cpass  = $this->userPassword;
                $Cemail = $this->userEmail;
 
                $passCP = $Encryption->cryptPass($Cpass, $Cemail);
                $hashCP = $Encryption->cryptHash($Cpass, $Cemail);
           
                $sql  = "UPDATE tbuser SET password = :passCP, hash = :hashCP WHERE idUser = :idUserDB";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':passCP', $passCP);
                $stmt->bindParam(':hashCP', $hashCP);
                $stmt->bindParam(':idUserDB', $idUserDB);
 
                $stmt->execute();
 
                $result = [
                    "status"    => true,
                    "msg"       => "<p>Senha alterada com sucesso!</p>",
                    "userEmail" => $this->userEmail,
                    "passCP"    => $passCP,
                    "hashCP"    => $hashCP
                ];
            } else {
                $result = [
                    "status"    => false,
                    "msg"       => "<p>ERRO ao alterar a senha!</p>",
                    "userEmail" => $this->userEmail
                ];
            }
           
            return $result;
        }
    }
?>