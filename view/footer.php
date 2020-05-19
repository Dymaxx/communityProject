    <!-- footer -->
    <footer class="footer bg-gray-900 relative pt-1 ">
        <div class="container mx-auto px-6">
            <!-- Footer nav -->
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-around">
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mb-2">Footer header 1</span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2">Footer header 2</span>
                        <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link
                                1</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer border / copyright -->
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
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
    </script>

</body>

</html>