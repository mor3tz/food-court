<iv?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- ==========icons========= -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="css/styles.css">

   <!--===========Bootstrap =========-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

   <title>Food-Court- </title>
</head>

<body>
   <!--=============== HEADER ===============-->
   <header class="header" id="header">
      <div class="header__container">
         <a href="#" class="header__logo">
            <i class="ri-cloud-fill"></i>
            <span>Cloud</span>
         </a>

         <button class="header__toggle" id="header-toggle">
            <i class="ri-menu-line"></i>
         </button>
      </div>
   </header>

   <!--=============== SIDEBAR ===============-->
   <nav class="sidebar" id="sidebar">
      <div class="sidebar__container">
         <div class="sidebar__user">
            <div class="sidebar__img">
               <img src="assets/img/user1.png" alt="image">
            </div>

            <div class="sidebar__info">
               <h3>Rizka Alin</h3>
               <span>jenong48@email.com</span>
            </div>
         </div>

         <div class="sidebar__content">
            <div>
               <h3 class="sidebar__title">ADMIN</h3>

               <div class="sidebar__list">
                  <a href="index.php?p=home" class="sidebar__link ">
                     <i class="bi bi-house"></i>
                     <span>Home</span>
                  </a>
                  <a href="index.php?p=dashboard" class="sidebar__link">
                     <i class="ri-pie-chart-2-fill"></i>
                     <span>Dashboard</span>
                  </a>

            
                  <a href="index.php?p=response" class="sidebar__link">
                     <i class="bi bi-ui-checks"></i>
                     <span>Response</span>
                  </a>

                  <a href="index.php?p=" class="sidebar__link">
                     <i class="ri-calendar-fill"></i>
                     <span>Calendar</span>
                  </a>

                  <a href="index.php?p=" class="sidebar__link">
                     <i class="ri-arrow-up-down-line"></i>
                     <span>Recent Transactions</span>
                  </a>

                  <a href="index.php?p=" class="sidebar__link">
                     <i class="ri-bar-chart-box-fill"></i>
                     <span>Statistics</span>
                  </a>

                  <hr>

               </div>
            </div>
<!---===============Setting============ -->
            <div>
               <h3 class="sidebar__title">SETTINGS</h3>

               <div class="sidebar__list">
                  <a href="#" class="sidebar__link">
                     <i class="ri-settings-3-fill"></i>
                     <span>Settings</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-mail-unread-fill"></i>
                     <span>My Messages</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-notification-2-fill"></i>
                     <span>Notifications</span>
                  </a>
               </div>
            </div>
         </div>

         <div class="sidebar__actions">
            <button>
               <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                  <span>Theme</span>
               </i>
            </button>

            <button class="sidebar__link">
               <i class="ri-logout-box-r-fill"></i>
               <span>Log Out</span>
            </button>
         </div>
      </div>
   </nav>

   <!--=============== MAIN ===============-->
   <div class="main container" id="main">
      <div class="home">
         <h1>Home</h1>
      </div>
</div>

   <!--=============== MAIN JS ===============-->
   <script src="assets/js/main.js"></script>
</body>

</html>