<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('127.0.0.1', 6379); 
   echo "Connection to server sucessfully"; 
   //check whether server is running or not 
   $games = ['cricket', 'Football', 'Kabaddi'];
   $redis->set('Games', json_encode($games));
   $titles = ['CEO', 'CTO', 'Directors', 'VPs', 'Leaders', 'Engineers'];
   $redis->set('persons', json_encode($titles));

   // Get the name of games
   $gamesData = $redis->get('Games');
   print_r(json_decode($gamesData));

   // Get the ttles in the company

   $titleData = $redis->get('persons');

   print_r(json_decode($titleData));
 
   

?>
