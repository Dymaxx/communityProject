<?php
require_once "view/header.php";
?>

<body>
    <!-- Nav menu CMS START-->
    <nav class="flex items-center justify-between flex-wrap bg-indigo-800 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">G69</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
    </nav>
    <!-- Nav menu CMS END -->

    <div class="md:px-40 py-8 w-full">
        <a href="dashboard">
            <button class="bg-transparent hover:bg-indigo-800 text-blue-700 font-semibold hover:text-white py-3 px-5 border border-blue-500 hover:border-transparent rounded">
                Terug
            </button>
        </a>
        <div class="flex mb-4 mt-8">
            <div class="w-3/6">
                <h1 class="font-bold">Wedstrijden</h1>
            </div>
            <div class="w-3/6">
                <a href="nieuwe-wedstrijden">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded float-right">
                        Wedstrijd toevoegen
                    </button>
                </a>
            </div>
            <div class="w-1/6">
                <a href="gearchiveerde-wedstrijden">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">
                    Gearchiveerde Wedstrijden
                    </button>
                </a>
            </div>
        </div>
        <?php echo $overview; ?>


    <script>
        function hideAlert() {
            alert = document.getElementById("alert-box");
            alert.style.display = "none";
        }
    </script>
<?php
require_once "view/footer.php";
?>