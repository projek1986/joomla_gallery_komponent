<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelCategory extends JModelLegacy
{


    public function getMyLabel() {
        $dodaj =$_POST['task']; //opis
        $dodaj2 =   $dodaj3= JRequest::getCmd('task'); // filtr

        if ( $dodaj != ''){

            // Get a db connection.
            $db = JFactory::getDbo();

// Create a new query object.
            $query = $db->getQuery(true);



// Insert columns.
            $columns = array( 'nazwa' , 'filtr');

// Insert values.
            $values = array( "'$dodaj'" , "'$dodaj2'");

// Prepare the insert query.
            $query
                ->insert($db->quoteName('#__kategorie_gallery'))
                ->columns($db->quoteName($columns))
                ->values(implode(',', $values));

// Set the query using our newly populated query object and execute it.
            $db->setQuery($query);
            $db->execute();


        }


    }

}