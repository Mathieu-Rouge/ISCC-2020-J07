<? php

$ date1 = new  DateTime ();
écho  '<p>' . $ date1 -> format ( 'Ymd H: i: s' ). '</p>' ;

$ date2 = new  DateTime ( '2020-06-22 9:00' );
écho  '<p>' . $ date2 -> format ( 'Ymd H: i: s' ). '</p>' ;

$ date2 = $ date1 -> diff ( nouveau  DateTime ( '2020-06-22' ));
écho  '<p>' . $ date2 -> d . «jours» . $ date2 -> h . «heures» . $ date2 -> i . «minutes depuis le début de la piscine </p>» ;

?>