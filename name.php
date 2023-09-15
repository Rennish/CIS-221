<?php
    echo "rennish" ;

    echo "<br/>" ;



    echo "<br/>" ;

     $username = "fredrick odhiambo" ;
     echo $username;

     echo "<br/>" ;

     $new_user = $username ;

     echo $username ;

     echo "<br/>" ;
     $user = 2 ;

     echo $user ;

     $team= array("maid", "teacher", "servant", "electrician"); //declaring and definining an array

     echo "<br/>" ;

     echo $team[3];

   // phpinfo(); 
   // getting info of the executig parser. check things like its versiona and other configurations

    /* this is how to a multiline comment in php. it works well when giving a summary of a php file. 
     */

     
     $teams = array(array("joy", "peace", "love"), 
                    array("twenty", "thirty", "fifty"), 
                    array("shoes", "legs","hands")
);

      echo "<br/>" ;  

      $big = $teams[2][2];



      echo $teams[2][2];  // in reading a multidiensional array, we first read the row then column, and they all start at zero. 

      echo "<br/>" ;

      echo "the item we have in the array at position $big is really a menignful item" ; 
      // the syntax on like 52 above is used to display a variable without breking ou of the quotation marks. however, this emthod does not work for multidimensional arrays

      echo "<br/>" ;

      echo "the item we have in the array at position $team[3] is really a menignful item" ;


      //multiline string echo statement 


      $author = "Joh Bosco" ;  


       $teacher = "rennish" ;

       echo <<<_begin
       a teacher is one who teaches. 

       - $teacher.

       _begin;

          echo <<<_END
  Debugging is twice as hard as writing the code in the first place.
  Therefore, if you write the code as cleverly as possible, you are,
  by definition, not smart enough to debug it.
  - $author.
_END;


        echo <<<_END
        a multiline statemetn will start from where we have the three less than sysmbols. 
        all these apprearing within these symbols are information 
        to be displayed by the same variable we've name author in this case. so here is the info about this author:
         John bosco is an authot of his own callibre. He has authored books in his capacity and are all available on online paid platforms. visit any of 
         these if intersted and get read yourself way. 
- $author.
_END;


echo <<<_pick
CDFDFDF
DFDSFSDFDF
DFDFDSFDSF
FDSFDSFDFDS
DFDFDDFSFDSF

- $author.

_pick ;



?>