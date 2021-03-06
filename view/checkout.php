<?php
require_once "view/header.php";
?>

<body class="bg-gray-800 font-sans leading-normal tracking-normal flex flex-col">
    <nav class="bg-gray-900">
        <div class="flex items-center justify-between flex-wrap fixed w-11/12 z-0 relative top-0 m-auto mb-10 py-5">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="home">
                    <img src="view/assets/img/g2-logo.png " alt="" class="h-16 inline">

                    <span class="text-2xl pl-2"><i class="em em-grinning"></i>G69</span>
                </a>
            </div>
            <!-- Nav burger menu  (hidden on bigger screens)-->
            <div class="block lg:hidden">
                <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <!-- Nav normal menu -->
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="Home">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline"
                            href="Merch">Merch</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="About-G69">About-G69</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="flex-1">
    <!-- article -->
        <div class="grid grid-cols-1 lg:grid-cols-3 w-11/12 m-auto mb-6 gap-3  ">
        <?php
            if(empty($product)) {
                echo "Geen producten op dit moment beschikbaar";
            } else {
                $end = count($product);
                for ($i=0; $i < $end; $i++) {
                    $html  = '<div class="max-w-xs bg-gray-800  rounded-lg overflow-hidden m-auto my-10">';
                    $html .= '<div class="px-2 py-2 bg-gray-900 bg-opacity-50">';
                    $html .= '<h1 class="text-white font-bold text-3xl uppercase">' . $product[$i]['name'] . '</h1>';
                    $html .= '<p class="text-gray-600 text-sm mt-1">' . $product[$i]['description'] . '</p>';
                    $html .= '</div>';
                    $html .= '<img src="' . $product[$i]['src'] . '" alt="" class="h-56 w-full object-contain mt-2">';
                    $html .= '<div class="flex items-center justify-between px-2 py-2 bg-gray-900 bg-opacity-50">';
                    $html .= '<h1 class="text-gray-200 font-bold text-xl">' . $product[$i]['value'] . '</h1>';
                    $html .= '</div>';
                    $html .= '</div>';

                    $html .= '<div class="max-w-xl bg-gray-800  rounded-lg overflow-hidden m-auto my-10">';
                    $html .= '<form method="POST" action="?op=checkedout" enctype="multipart/form-data" autocomplete="off">';
                    $html .= '<input type="hidden" name="product" value="'. $product[$i]['id'] . '">';
                    if(empty($message)) {
                        $html .= '<div class=" bg-gray-900 bg-opacity-50 p-3 rounded-lg">';
                        $html .= '<h1 class="text-white font-bold text-2xl uppercase">Shipment Information</h1><br>';
                        $html .= '<div class=" grid grid-cols-2 row-gap-2 ">';
                        $html .= '<div class="col-span-1"><label for="email" class="text-white  font-bold text-1x3 ">Email </label></div>';
                        $html .= '<div class="col-span-1 "><input type="text" name="email" class="w-11/12 " ></div>';
                        $html .= '<div class="col-span-1"><label for="firstname" class="text-white font-bold text-1x3 ">Firstname </label></div>';
                        $html .= '<div class="col-span-1"><input type="text" name="firstname" class="w-11/12 "></div>';
                        $html .= '<div class="col-span-1"><label for="lastname" class="text-white font-bold text-1x3 ">Lastname </label></div>';
                        $html .= '<div class="col-span-1"><input type="text" name="lastname" class="w-11/12 "></div>';
                        $html .= '<div class="col-span-1"><label for="city" class="text-white font-bold text-1x3 ">City </label></div>';
                        $html .= '<div class="col-span-1"><input type="text" name="city" class="w-11/12 "></div>';
                        $html .= '<div class="col-span-1"><label for="street" class="text-white font-bold text-1x3 ">Street </label></div>';
                        $html .= '<div class="col-span-1"><input type="text" name="street" class="w-11/12 "></div>';
                        $html .= '<div class="col-span-1"><label for="Postal" class="text-white font-bold text-1x3 ">Postal Code </label></div>';
                        $html .= '<div class="col-span-1"><input type="text" name="postal" class="w-11/12 "></div>';
                        $html .= '</div>';
                    } else {
                        $html .= '<div class=" bg-gray-900 bg-opacity-50 p-3 rounded-lg">';
                            $html .= '<h1 class="text-white font-bold text-2xl uppercase">Shipment Information</h1><br>';
                            $html .= '<div class=" grid grid-cols-2 row-gap-2 ">';
                            $html .= '<div class="col-span-1"><label for="email" class="text-white  font-bold text-1x3 ">Email </label></div>';
                            $html .= '<div class="col-span-1 "><input type="text" name="email" class="w-11/12 " ></div>';
                            $html .= '<div class="col-span-1"><label for="firstname" class="text-white font-bold text-1x3 ">Firstname </label></div>';
                            $html .= '<div class="col-span-1"><input type="text" name="firstname" class="w-11/12 "></div>';
                            $html .= '<div class="col-span-1"><label for="lastname" class="text-white font-bold text-1x3 ">Lastname </label></div>';
                            $html .= '<div class="col-span-1"><input type="text" name="lastname" class="w-11/12 "></div>';
                            $html .= '<div class="col-span-1"><label for="city" class="text-white font-bold text-1x3 ">City </label></div>';
                            $html .= '<div class="col-span-1"><input type="text" name="city" class="w-11/12 "></div>';
                            $html .= '<div class="col-span-1"><label for="street" class="text-white font-bold text-1x3 ">Street </label></div>';
                            $html .= '<div class="col-span-1"><input type="text" name="street" class="w-11/12 "></div>';
                            $html .= '<div class="col-span-1"><label for="Postal" class="text-white font-bold text-1x3 ">Postal Code </label></div>';
                            $html .= '<div class="col-span-1"><input type="text" name="postal" class="w-11/12 "></div>';
                            $html .= '</div>';
                    }
                    $html .= '</div>';
                    $html .= '</div>';

                    $html .= '<div class="max-w-xs bg-gray-800  rounded-lg m-auto my-10 pb-10">';
                    $html .= '<div class="px-2 pt-4 pb-4 bg-gray-900 bg-opacity-50 rounded-lg" >';
                    $html .= '<h1 class="text-white font-bold text-2xl uppercase">PAYMENT Information</h1>';
                    $html .= '<p class="text-gray-600 text-sm mt-1">Payment: on arrival <br>Costs:' . $product[$i]['value'] . '</p>';
                    $html .= '<button type="submit" class="bg-red-600 py-1 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Checkout</button>';
                    $html .= '</div>';
                    $html .= '</div>';
                    echo $html;
                }
            }

        ?>
    </div>
    <!-- Article end -->
</main>
    <!-- footer -->
    <footer class="footer bg-gray-900  pt-1 bottom-0 absolute w-full  ">
        <div class="container mx-auto px-6">
            <!-- Footer nav -->
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-around">
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mb-2"></span>
                        <span class="my-2"><a href="Home" class="text-blue-700  text-md hover:text-blue-500">Home</a></span>
                        <span class="my-2"><a href="Merch" class="text-white-700  text-md hover:text-blue-500 text-white">Merch</a></span>
                        <span class="my-2"><a href="About-G69" class="text-blue-700  text-md hover:text-blue-500">About-G69</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2"></span>
                        <span class="my-2"><a href="Privacy" class="text-blue-700 text-md hover:text-blue-500">Privacy</a></span>
                        <span class="my-2"><a href="Disclaimer" class="text-blue-700  text-md hover:text-blue-500">Disclaimer</a></span>
                        <span class="my-2"><a href="article" class="text-blue-700 text-md hover:text-blue-500">Nieuws</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer border / copyright -->
        <div class="container mx-auto px-6 ">
            <div class=" flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-2">
                    <p class="text-sm text-gray-100 font-bold mb-2">
                        © 2020 by Yeet inc
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        //Javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function () {
            document.getElementById("nav-content").classList.toggle("hidden");
        }

        $(function () {
            $(".comp-container").slice(0, 4).show(); // select the first ten
            $("#load").click(function (e) { // click event for load more
                e.preventDefault();
                $(".comp-container:hidden").slice(0, 2)
            .show(); // select next 10 hidden divs and show them
                if ($(".comp-container:hidden").length == 0) { // check if any hidden divs still exist
                    $("#load").css("background-color", "white");
                    $("#load").css("color", "black");
                    $('#load').css('cursor', 'default');
                }
            });
        });
    </script>

    <?php
require_once "view/footer.php";
?>
