Flow: 
(at the top of the page)
1. session_start();
2. $_SESSION['myvar'] = 5;
3. if (isset($_SESSION['myvar']))
{ // }
4. unset($_SESSION['myvar']);
session_destroy();