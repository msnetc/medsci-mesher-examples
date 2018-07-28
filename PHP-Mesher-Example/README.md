# PHP-Mesher-Example
   

 1) Start the service center (download the service center from http://servicecomb.incubator.apache.org/release/)
 2) Load the mesher image mesher.tar
 
     cd ./mesher
     
     docker load -i mesher.tar
     
     cd ../
 3) update the servicecenter ip address in docker-compose.yml
 4) using dockercompose build the container image of php server and php client and start the the container along with mesher
  
     docker-compose up
 5) To verify the php client and php server communication
 
       curl request http://[ipaddress of the client]:80/client.php
      
