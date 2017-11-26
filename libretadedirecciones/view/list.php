<!DOCTYPE html>
<!-- View of a list of entities Contact (contact list page) -->
<html>
    <head>
        <title>Libreta de direcciones</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <script type="text/javascript" src="../js/jquery-1.9.1.js" ></script>
        <script type="text/javascript" src="../js/generic.js" ></script>
    </head>
    <body>
        <div class="container" >
            <h2>Libreta de direcciones - Lista de contactos</h2>
            <hr/>
            <button id="new" name="new" value="new" onclick="javascript:location.href = '../view/contact.php?action=new';" class="btn btn-primary">Nuevo...</button>
           
            <br>
            <br>
            <?php
            require_once '../entity/Contact.php';
            require_once '../entity/City.php';
            require_once '../controller/ContactManager.php';

            //obtiene la lista de contactos
            try {
                $contacts = ContactManager::getContactList();
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            if (isset($contacts) && count($contacts) > 0) { //Si no hay contactos en la lista
                ?>
                <table style="width: 80%;" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Street</th>
                            <th>ZIP Code</th>
                            <th>City</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        foreach ($contacts as $id => $contact) {
                            echo "<tr>";
                            echo "	<td>" . $contact->getId() . "</td>";
                            echo "	<td>" . $contact->getFirstName() . "</td>";
                            echo "	<td>" . $contact->getLastName() . "</td>";
                            echo "	<td>" . $contact->getStreet() . "</td>";
                            echo "	<td>" . $contact->getZipCode() . "</td>";
                            echo "	<td>" . $contact->getCity()->getName() . "</td>";
                            echo "	<td><a href='../view/contact.php?action=edit&id=" . $id . "'>Edit</a></td>";
                            echo "	<td><a href='../controller/ContactManager.php?action=delete&id=" . $id . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                    </tfoot>	
                </table>
                <?php
            } else {
                echo "No hay contactos.";
            }
            ?>
        </div>
    </body>
</html>
