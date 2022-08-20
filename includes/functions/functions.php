<?php
require_once '../inc/initDb.php';
//error reporting
error_reporting(0);

//functions code
    function listContacts()
    {

        $contact  = DB::query("select * from contacts");
        if(DB::count() > 0)
        {
            foreach($contact as $contacts)
            {
                $id = $contacts['id'];
                $name= $contacts['name'];
                $companyName = $contacts['company_name'];
                $contactNo = $contacts['contact_no'];
                $association = $contacts['association'];
                $notes = $contacts['notes'];

                echo"<tr><th scope='row'>$id</th>
                <td>$name</td><td>$companyName</td><td>$contactNo</td><td>$association </td><td>$notes</td><td>
                
                
                <a href='edit_contact.php?edit_contact=$id;'>Edit</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href='Delete_contact.php?Delete_contact=$id;'>Delete</a></td></tr>";
            }

        }
        else
        {
            echo "0 results";
        }
    }

    function listReffers()
    {
        $referrer  = DB::query("select * from referrer");
        if(DB::count() > 0)
        {
            foreach($referrer as $contacts)
            {
                $id = $contacts['id'];
                $name= $contacts['name'];
                $companyName = $contacts['company_name'];
                $email = $contacts['email'];
                $set_free = $contacts['set_fee'];
                $ref_agreement = $contacts['ref_agreement'];
                
                echo"<tr><th scope='row'>$id</th>
                <td>$name</td><td>$companyName</td><td>1</td><td>$email </td><td>$set_free</td><td>ref_agreement</td>
                <td>
                
                
                <a href='referrer_edit.php?referrer_edit=$id;'>Edit</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href='referrer_delete.php?referrer_delete=$id;'>Delete</a></td></tr>";
            }
        }
        else 
        {
            echo "0 results";
        }
       
    }

    function validation($var) 
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }
?>