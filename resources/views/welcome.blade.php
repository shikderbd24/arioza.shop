<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arioza.Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
      integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <header>
      <div class="p-4 mt-4">
        <h1 class="text-5xl font-bold text-center playfair">Arioza.Shop</h1>
        <p class="text-center mt-2 text-md">A shop you can trust!</p>
      </div>

     <!-- Mobile Navigation -->
<div class="lg:hidden z-10 top-5 right-5 fixed">
  <i id="menu-bars" class="fas fa-bars text-3xl cursor-pointer hover:text-gray-600"></i>

  <ul id="mobile-menu"
    class="transition-all duration-300 ease-in-out transform origin-top scale-y-0
           bg-gray-300 text-gray-800 rounded-lg shadow-lg absolute mt-2 py-2 w-48 right-0 z-10">
    <li class="px-4 py-2 hover:bg-gray-600"><a href="#">Home</a></li>
    <li class="px-4 py-2 hover:bg-gray-600"><a href="#">Men Fashion</a></li>
    <li class="px-4 py-2 hover:bg-gray-600"><a href="#">Women Fashion</a></li>
    <li class="px-4 py-2 hover:bg-gray-600"><a href="#">Perfumes</a></li>
    <li class="px-4 py-2 hover:bg-gray-600"><a href="#">Jewellery</a></li>
    <li class="px-4 py-2 hover:bg-gray-600"><a href="#">Accessories</a></li>
  </ul>
</div>


    </header>
    <div class="hidden lg:block container mx-auto mt-5 px-4 dark:text-white">
  <nav
    class="relative bg-gray-300 py-2 px-4 rounded-xl shadow-md flex justify-between items-center"
  >
    <ul class="flex space-x-4 text-dark uppercase">
      <li>
        <a
          href="/"
          class="hover:bg-gray-600 p-4 hover:text-gray-300 font-bold"
        >
          <i class="fas fa-home"></i> Home
        </a>
      </li>

      <!-- Men Fashion Dropdown -->
      <li class="relative group">
        <a
          href="#"
          class="hover:bg-gray-600 p-4 hover:text-gray-300"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Men Fashion
        </a>
        <ul
          class="sub-menu bg-gray-500 text-white rounded-lg shadow-lg absolute mt-2 py-2 hidden group-hover:block w-[300px] left-1/2 transform -translate-x-1/2 z-10"
        >
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Shirts</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-600">T-Shirts</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Watches</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Shoes</a>
          </li>
        </ul>
      </li>

      <!-- Women Fashion Dropdown -->
      <li class="relative group">
        <a
          href="#"
          class="hover:bg-gray-600 p-4 hover:text-gray-300"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Women Fashion
        </a>
        <ul
          class="sub-menu bg-gray-500 text-white rounded-lg shadow-lg absolute mt-2 py-2 hidden group-hover:block w-[300px] left-1/2 transform -translate-x-1/2 z-10"
        >
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Three-Piece</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Saree</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Hand Bags</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="hover:bg-gray-600 p-4 hover:text-gray-300">
          Perfumes
        </a>
      </li>
      <li>
        <a href="#" class="hover:bg-gray-600 p-4 hover:text-gray-300">
          Electronics
        </a>
      </li>
      <li>
        <a href="#" class="hover:bg-gray-600 p-4 hover:text-gray-300">
          Kids Zone
        </a>
      </li>
    </ul>

    <!-- Search (disabled placeholder for now) -->
    
<!-- User Profile area-->
<ul class="login flex h-10 items-center space-x-4">
    <li class="relative group">
        <a href={{ route('register' )}} class="hover:bg-gray-600 p-4 hover:text-gray-300">
        <i class="fas fa-user"></i> SIGN UP
        </a>
    </li>
</ul>
  <!-- Dropdown Menu -->
  <ul
    class="user-menu hidden group-hover:block bg-gray-700 text-white rounded-lg shadow-lg absolute mt-2 py-2 w-48 right-0 z-10"
  >
    <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Profile</a></li>
    <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Settings</a></li>
    <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Logout</a></li>
  </ul>
</div>

    </div>
  </nav>

  
</div>


    <!-- scrolling carousel section-->
    <div class="bg-[#f3efe6] p-6 container mx-auto mt-6 rounded-xl shadow-lg">
    

      <div class="overflow-x-auto">
        <div class="flex space-x-4 pb-2 justify-center">
          <!-- Card 1 -->
          <div
            class="hover:bg-gray-300 hover:cursor-pointer   min-w-[150px] min-min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn1.iconfinder.com/data/icons/e-commerce-violet-vol-2/256/timed-deals-512.png" alt="Deals" class="w-16 h-16 mb-2">
            Deals
          </div>

          <!-- Card 2 -->
          <div
            class="hover:bg-gray-300 hover:cursor-pointer min-w-[150px] min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn0.iconfinder.com/data/icons/pointer-flat/512/__transfer-512.png" alt="Deals" class="w-16 h-16 mb-2">
            Top Picks
          </div>

          <!-- Card 3 -->
         <div
            class="hover:bg-gray-300 hover:cursor-pointer min-w-[150px] min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn0.iconfinder.com/data/icons/web-con-set-173-2/128/trendy_trending_latest_updated_popular_trendsetting_new_modish_understated_chic_high-fashion_video-512.png" alt="Deals" class="w-16 h-16 mb-2">
            Trending
          </div>

          <!-- Card 4 -->
          <div
            class="hover:bg-gray-300 hover:cursor-pointer min-w-[150px] min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn2.iconfinder.com/data/icons/new-year-resolutions/64/resolutions-02-512.png" alt="Foot Wear" class="w-16 h-16 mb-2">
            FootWear
          </div>
          <!-- Card 5 -->
         <div
            class="hover:bg-gray-300 hover:cursor-pointer min-w-[150px] min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn1.iconfinder.com/data/icons/diy-and-crafts-3/512/05_Polo_Shirt_Shirts_Clothing_Men_Fashion_Masculine-512.png" alt="Deals" class="w-16 h-16 mb-2">
            Men Wear
          </div>
          <!-- Card 6 -->
         <div
            class="hover:bg-gray-300 hover:cursor-pointer min-w-[150px] min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn3.iconfinder.com/data/icons/dreamhouse/64/dress-512.png" alt="Deals" class="w-16 h-16 mb-2">
            Women Wear
          </div>
          <!-- Card 7 -->
         <div
            class="hover:bg-gray-300 hover:cursor-pointer min-w-[150px] min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn1.iconfinder.com/data/icons/DarkGlass_Reworked/128x128/apps/package_toys.png" alt="Deals" class="w-16 h-16 mb-2">
            Kids Zone
          </div>

          <!-- Card 7 -->
         <div
            class="hover:bg-gray-300 hover:cursor-pointer min-w-[150px] min-h-[150px] bg-white rounded-full shadow-md p-4 flex flex-col items-center justify-center"
          >
          <img src="https://cdn0.iconfinder.com/data/icons/devices-42/1600/Watch_2-512.png" alt="Deals" class="w-16 h-16 mb-2">
            Watches
          </div>


          </div>
        </div>
      </div>
    </div>


    

    <!-- Product section -->
    <div class="container mx-auto mt-6">
      <div class="bg-gray-200 p-6 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-4">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          <!-- Product Card -->
          <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="images/dsht.jpg" alt="Product 1" class="w-full  object-cover mb-2 rounded">
            <div class="flex flex-row justify-between items-center mt-5">
              <div>
                <h3 class="text-md font-semibold">Drop Shoulder T-Shirt</h3>
                <p class="text-gray-600">BDT 449</p>
              </div>
              <div><button class="bg-gray-200 px-5 py-3 rounded-lg hover:bg-gray-400"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
            </div>
          </div>
          <!-- Product Card -->
          <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="https://scontent.fruh4-4.fna.fbcdn.net/v/t39.30808-6/525016839_723795927485194_636853091509378731_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_ohc=Ve-dIAlXfvgQ7kNvwGoUaLV&_nc_oc=Adm97pL2a4_rqUh0xIN3_dir0hpeX4h6fF1nCvH5nU5sahDgy9hng6fQlkJlLooyKgU&_nc_zt=23&_nc_ht=scontent.fruh4-4.fna&_nc_gid=9S8slyAA7Q4Eo0zxZt7yCQ&oh=00_AfRXcUzb2fQnAwHRMHiNv4xAQkXUg8Bw9_Wf6sHy0s8KlQ&oe=6892C157" alt="Product 2" class="w-full  object-cover mb-2 rounded">
            <div class="flex flex-row justify-between items-center mt-5">
              <div>
                <h3 class="text-md font-semibold">Free-size T-shirts</h3>
                <p class="text-gray-600">BDT 449</p>
              </div>
              <div><button class="bg-gray-200 px-5 py-3 rounded-lg hover:bg-gray-400"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
            </div>
          </div>
          <!-- Product Card -->
          <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="https://scontent.fruh4-3.fna.fbcdn.net/v/t39.30808-6/472745490_523356214195834_1500448643400789755_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_ohc=s0VPmoS_MU8Q7kNvwGn0ZPu&_nc_oc=Adn93-UKYzTLj8eBX5RI9SuxaNIs7lZMAhC93R0BNdXbLqXLdWtD246Ad9v-XorcQ9w&_nc_zt=23&_nc_ht=scontent.fruh4-3.fna&_nc_gid=Vi9YkTPsbhF6TvfuH4DEHQ&oh=00_AfS8FEAGSynx5fRbpSBh8rpFMLOL1kiGOKHw3a1tYoL3rQ&oe=6892BD74" alt="Product 3" class="w-full  object-cover mb-2 rounded">
            <div class="flex flex-row justify-between items-center mt-5">
              <div>
                <h3 class="text-md font-semibold">Custom Made T-shirts</h3>
                <p class="text-gray-600">BDT 449</p>
              </div>
              <div><button class="bg-gray-200 px-5 py-3 rounded-lg hover:bg-gray-400"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
            </div>
          </div>
          <!-- Product Card -->
          <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="https://scontent.fruh4-2.fna.fbcdn.net/v/t39.30808-6/472254188_519466807918108_6883644545540205932_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_ohc=4Ez_hl-U0bYQ7kNvwFvHS2W&_nc_oc=Adlb9R9dS8eEPPPIzsrTELxpVpsI5bFCLWHbv0KtvdmYyTGFcxQPjQeKnX9-UB5bEWk&_nc_zt=23&_nc_ht=scontent.fruh4-2.fna&_nc_gid=pXjLx2u8BgUw5Ny3-87G0A&oh=00_AfRrwy0znx9GV7A4TScnmgVkascKGTsFcRyhe0CF98N-Sg&oe=6892C37A" alt="Product 4" class="w-full object-cover mb-2 rounded">
            <div class="flex flex-row justify-between items-center mt-5">
              <div>
                <h3 class="text-md font-semibold">Commoon Dress</h3>
                <p class="text-gray-600">BDT 59.99</p>
              </div>
              <div><button class="bg-gray-200 px-5 py-3 rounded-lg hover:bg-gray-400"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
            </div>
          </div>
        </div>
      </div>

      <section class="bg-gradient-to-r from-gray-100 to-gray-200 py-12 px-6">
  <div class="max-w-3xl mx-auto text-center bg-white p-8 rounded-3xl shadow-lg">
    <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">
      Subscribe to Our Newsletter
    </h2>
    <p class="text-gray-600 mb-6">
      Be the first to know about new arrivals, sales, and exclusive offers. No spam, ever.
    </p>
    <form class="flex flex-col sm:flex-row justify-center items-center gap-4">
      <input
        type="email"
        placeholder="Enter your email"
        class="w-full sm:w-2/3 px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400"
        required
      />
      <button
        type="submit"
        class="bg-gray-800 text-white px-6 py-3 rounded-full hover:bg-gray-700 transition duration-300"
      >
        Subscribe
      </button>
    </form>
  </div>
</section>

    <!-- footer section -->
    <footer class="bg-gray-800 text-white py-4 w-full">
      <div class="container mx-auto text-center">
        <p>&copy; 2025 Arioza.Shop. All rights reserved.</p>
        <p>
          Follow us on
          <a href="https://www.facebook.com/Ariozafashionstore" class="text-blue-400 hover:underline">Facebook</a>,
          <a href="#" class="text-blue-400 hover:underline">Twitter</a>,
          <a href="#" class="text-blue-400 hover:underline">Instagram</a>
        </p>
        <p>
          Design & Developed by
          <a class="text-blue-400" href="https://shikderbd.org">SHIKDERBD</a>
        </p>
      </div>
    </footer>

    <script src="app.js"></script>
  </body>
</html>
