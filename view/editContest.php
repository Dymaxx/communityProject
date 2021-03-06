<?php
require_once 'view/header.php';
?>
    <nav class="flex items-center justify-between flex-wrap bg-indigo-800 p-6">
        <a class='text-white' href='overview-wedstrijden'>Terug</a>;
        <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="home">
                <span class="font-semibold text-xl tracking-tight">G69</span>
                </a>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
    </nav>
    <div class="flex justify-center items-center py-8">
        <?php if(!empty($check)){echo $check['message'];} ?>
    </div>
    <div class="flex justify-center items-center py-8">
        <?php echo $edit;?>
    </div>
<?php

require_once 'view/footer.php';
?>
