<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ASSETS?>megabit/css/adminStyle.css">
    <title><?=$data['page_title'] . " | " . WEBSITE_NAME?></title>
</head>

<body>
<?php 


$dbData = $emails;

$deleteValue = "";
$domainValue = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $domainValue = test_input($_POST["domainValue"]);
    $deleteValue = test_input($_POST["deleteValue"]);
   
   
};
  

?>
<form method="POST">
    <input type="hidden" name="domainValue" id="input" value="" >
    <input type="hidden" name="deleteValue" id="input2" value="" >
<table>
<tr>
    <th>Domains</th>
    <th colspan="2"><button>All</button>
    <?php
 
    foreach($dbData as $domain)
    {
        $domainArray[] = $domain->domain;
    }
            $uniqueDomaiArray = array_unique($domainArray);
            foreach($uniqueDomaiArray as $domain)
            {
        ?>
        <button type="submit" onclick="filterEmailsByDomain(this)"class="<?=$domain?>"><?=$domain?></button>
       
        <?php
    }
    
    ?>
    </th>
    
</tr>
<tr>
    <th>Date/Time</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php
if(empty($domainValue) && empty($deleteValue))
{

    foreach($dbData as $email){
        
        ?>
        <tr>                   
            <td><?= $email->date?></td>
            <td><?= $email->email?></td>
            <td><button type="submit" onclick="deleteEmailFromDataBase(this)" class="<?= $email->id?>">delete </button> </td> 
        </tr>
        
            
        <?php
        }

    
}elseif(!empty($domainValue) && empty($deleteValue)){


    foreach($dbData as $email)
    {
        if($email->domain == $domainValue)
        {
    
            ?>
            <tr>                   
                <td><?=$email->date?></td>
                <td><?= $email->email?></td>
                <td><button type="submit" onclick="deleteEmailFromDataBase(this)" class="<?= $email->id?>">delete </button> </td> 
            </tr>
            
                
            <?php
        }
        
    }
   
}elseif(empty($domainValue) && !empty($deleteValue)){

    foreach($dbData as $email){
        
        ?>
        <tr>                   
            <td><?= $email->date?></td>
            <td><?= $email->email?></td>
            <td><button type="submit" onclick="deleteEmailFromDataBase(this)" class="<?= $email->id?>">delete </button> </td> 
        </tr>
        
            
        <?php
        }

    
}



?>
</table>

</form>
<script>


</script>
</table>
    </form>
    <script src="<?=ASSETS?>megabit/js/adminActions.js"></script>
</body>
</html>

