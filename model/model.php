<?php
class ModelUser
{
    var $db;
    public function __construct()
    {
        try {

            $this->db = new PDO('mysql:host=127.0.0.1;dbname=Pro_dev;', 'root', '');
        } catch (Exception $e) {
            die("Connection erreur du à " . $e->getMessage());
        }
    }

    function redirectUrl($url)
    {
        echo '<script language="javascript">window.location.href ="' . $url . '"</script>';
    }
    function generateMatricule($n=3) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $randomString = '';
    
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
    
        return 'SN/'.$randomString;
    }
    public function ajoutUser($nom,$prenom,$mot_de_passe,$role,$matricule,$email, $photo,$date_heure){
           
        try {
            $sql=$this->db->prepare('INSERT INTO `user` (`nom`, `prenom`,`mot_de_passe`,`role`,`matricule`,`etat`,`email`, `photo`,`date_heure`)
                                        VALUES (:nom,:prenom,:mot_de_passe,:roles,:matricule,:etat,:email, :photo,:date_heure)');
           
                    $sql->execute(array(
                        'nom' =>$nom,
                        'prenom' => $prenom,
                        'mot_de_passe' => $mot_de_passe,
                        'roles' => $role,
                        'matricule' => $matricule,
                        'etat' => 1,
                        'email'=>$email,
                        'photo' => $photo,
                        'date_heure'=> $date_heure
                    ));  
                return true;
    
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function getUser($email)
    {
        try {
            $sql = "SELECT * FROM `user` WHERE email='$email'";
            $res = $this->db->query($sql);
            if ($res->rowCount() > 0){
                return true;
            }
            return false;
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    // 
    public function selectUser($email)
    {
        try {
            $sql = "SELECT * FROM `user` WHERE email='$email'";
            $res = $this->db->query($sql);
            if ($res->rowCount() > 0){
                return $res->fetchAll()[0];
            }
            return null;
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}