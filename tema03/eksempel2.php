<?php     /* Eksempel 2 */
/*
/*    Programmet legger inn 2 navn i et array
/*    Programmet skriver ut de 2 navnene
*/
  $navn=array("Geir","Marius","Tove");  

  print("Det første navnet er $navn[0]<br/>");

  print("Alle navnene er <br/> ");

  for ($nr=0;$nr<count($navn);$nr++)
    {
      print("$navn[$nr] <br/>");   
    }
?>