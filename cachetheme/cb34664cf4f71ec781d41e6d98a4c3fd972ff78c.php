<?php
//$backdate = isset($argv[2]) ? strtotime($argv[2]) : strtotime('-1 month');
$backdate = BACK_DATE;
$schedule = SCHEDULE_DATE;
?>
<?php
$timestamp = date('Y-m-d\TH:i:s\Z', rand(strtotime($backdate), strtotime($schedule)));
$min = 4;
$max = 5;
?>
---
title: "<?php echo e(do_spintax('{{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare|Cook} |Recipe of |{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare} }')); ?><?php echo e(do_spintax('{Perfect|Ultimate|Favorite|Quick|Speedy|Homemade}')); ?> <?php echo e($title); ?> <?php echo e(do_spintax('{Tasty|Delicious}')); ?>"
slug: <?php echo e($slug); ?>

description: "<?php echo e($title); ?> Recipe - <?php echo e($description); ?> <?php echo e(do_spintax('{{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare|Cook} |Recipe of |{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare} }')); ?><?php echo e(do_spintax('{Perfect|Ultimate|Favorite|Award-winning|Quick|Speedy|Super Quick Homemade|Homemade|Any-night-of-the-week}')); ?> <?php echo e($title); ?> <?php echo e(do_spintax('{Tasty|Delicious}')); ?>"
date: <?php echo e($timestamp); ?>

image: <?php echo e($image); ?>

thumbnail: <?php echo e($image); ?>

cover: <?php echo e($image); ?>

author: <?php echo e($author = collect(['Tiara','Nadia','Pratiwi','Yulia','Agustina','Wulan','Utami','Ani','Suartini','Chelsea','Yuliarti','Keisha','Mardhiyah','Lili','Mandasari','Intan','Fujiati','Mala','Clara','Rika','Hastuti','Unjani','Puspasari'])->random()); ?>

ratingvalue: <?php echo e(rand($min*10,$max*10)/10); ?>

reviewcount: <?php echo e(rand(99,999)); ?>

recipeingredient:
<?php $__currentLoopData = $ingredient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
- "<?php echo e($bahan); ?>"
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
recipeinstructions:
<?php $__currentLoopData = $instruction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
- "<?php echo e($step); ?>"
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
categories:
<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
- "<?php echo e(preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat)); ?>"
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
- "Recipes"
tags: 
<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
- "<?php echo e(strtolower(preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat))); ?>"
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
katakunci: <?php echo e(strtolower(preg_replace('/[^a-zA-Z0-9 -]+/', '', $title))); ?>, <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(strtolower(preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat))); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>.
nutrition: <?php echo e($nutrition); ?>

recipecuisine: Western
preptime: "<?php echo e($preptime); ?>"
cooktime: "<?php echo e($cooktime); ?>"
totaltime: "<?php echo e($totaltime); ?>"
recipeyield: "<?php echo e($yield); ?>"
recipecategory: 
<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
- <?php echo e(preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat)); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
quotes: <?php echo e(do_spintax('{When you eat food with your family and friends, it always tastes better!|Take food as your medicine before you take medicine as your food.|Good food is the foundation of happiness.|Magic happens in the kitchen during lunch time and dinner time.|If you do not eat well, then you wont be able to think well, love well, and sleep well.|Who needs love when you can eat all the chocolate in the world.|Who needs inspirational quotes when you can just drink coffee?|If you combine good flavors, food turns into an orchestra.|There is no love more sincere than my love for food.|Food shared is happiness multiplied.}')); ?>

---
<!--ads/responsive.txt-->

<p class="py-2 md:text-lg">
<b><?php echo e($title); ?></b> - <?php echo e(do_spintax('{Hey everyone|Hello everybody}')); ?>, <?php echo e(do_spintax('{I hope|hope}')); ?> <?php echo e(do_spintax('{youre|you are}')); ?> having an <?php echo e(do_spintax('{amazing|incredible}')); ?> day today. <?php echo e(do_spintax('{Its|It is}')); ?> me again <?php echo e($author); ?> , welcome to <?php echo e(do_spintax('{my|our}')); ?> recipe <?php echo e(do_spintax('{website|site}')); ?>. Today, <?php echo e(do_spintax('{Im gonna show you how|we are going|I will show you a way}')); ?> to <?php echo e(do_spintax('{prepare|make}')); ?> a <?php echo e(do_spintax('{special|distinctive}')); ?> dish, <?php echo e($title); ?>. <?php echo e(do_spintax('{It is one|One}')); ?> of my favorites <?php echo e(do_spintax('{food recipes|recipes}')); ?>. <?php echo e(do_spintax('{For mine|This time}')); ?>, I<?php echo e(do_spintax('{ will|m gonna| am going to}')); ?> make it a little bit <?php echo e(do_spintax('{tasty|unique}')); ?>. This <?php echo e(do_spintax('{will be really|is gonna smell and look}')); ?> delicious.
</p>

<!--ads/article.txt-->

<p class="ml-2 p-4 text-justify italic md:text-xl text-gray-800 border-l-8 border-gray-400 bg-gray-200">
<?php echo e($title); ?> is <?php echo e($description); ?>

</p>

<!--ads/responsive.txt-->

<p class="py-2 md:text-lg"><?php echo e($title); ?> is one of the most <?php echo e(do_spintax('{popular|favored|well liked}')); ?> of <?php echo e(do_spintax('{current|recent}')); ?> trending <?php echo e(do_spintax('{meals|foods}')); ?> <?php echo e(do_spintax('{in the world|on earth}')); ?>. <?php echo e(do_spintax('{its|It is}')); ?> <?php echo e(do_spintax('{easy|simple}')); ?>, <?php echo e(do_spintax('{its|it is}')); ?> <?php echo e(do_spintax('{fast|quick}')); ?>, it tastes <?php echo e(do_spintax('{delicious|yummy}')); ?>. <?php echo e(do_spintax('{its|It is}')); ?> <?php echo e(do_spintax('{enjoyed|appreciated}')); ?> by millions <?php echo e(do_spintax('{every day|daily}')); ?>. <?php echo e(do_spintax('{its|It is}')); ?> <?php echo e(do_spintax('{easy|simple}')); ?>, <?php echo e(do_spintax('{its|it is}')); ?> <?php echo e(do_spintax('{fast|quick}')); ?>, it tastes <?php echo e(do_spintax('{delicious|yummy}')); ?>. <?php echo e($title); ?> is something <?php echo e(do_spintax('{that|which}')); ?> <?php echo e(do_spintax('{I ve|I have}')); ?> loved my <?php echo e(do_spintax('{entire|whole}')); ?> life. <?php echo e(do_spintax('{They re|They are}')); ?> <?php echo e(do_spintax('{nice|fine}')); ?> and they look <?php echo e(do_spintax('{wonderful|fantastic}')); ?>. <?php echo e(do_spintax('{They re|They are}')); ?> <?php echo e(do_spintax('{nice|fine}')); ?> and they look <?php echo e(do_spintax('{wonderful|fantastic}')); ?>. <?php echo e($title); ?> is something <?php echo e(do_spintax('{that|which}')); ?> <?php echo e(do_spintax('{I ve|I have}')); ?> loved my <?php echo e(do_spintax('{entire|whole}')); ?> life.</p>

<!--ads/article.txt-->

<div class="border-2 border-green-800 rounded-xl shadow-md my-2 overflow-hidden">
    <h2 class="text-green-800 text-center font-bold text-lg md:text-xl p-2">
    <?php echo e(do_spintax('{{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare|Cook} |Recipe of |{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare} }')); ?><?php echo e(do_spintax('{Perfect|Ultimate|Favorite|Award-winning|Quick|Speedy|Super Quick Homemade|Homemade|Any-night-of-the-week}')); ?> <?php echo e($title); ?> <?php echo e(do_spintax('{Tasty|Delicious}')); ?>

	</h2>
    <img src="<?php echo e($image); ?>" alt="Donat Killer Soft Bread" class="object-cover w-full border-t-2 border-green-800 lazyload">
</div>

<p class="ml-2 p-4 text-justify italic md:text-xl text-gray-800 border-l-8 border-gray-400 bg-gray-200">
To <?php echo e(do_spintax('{get started|begin}')); ?> with <?php echo e(do_spintax('{this|this particular}')); ?> recipe, we <?php echo e(do_spintax('{have to|must}')); ?> first prepare a few <?php echo e(do_spintax('{ingredients|components}')); ?>. You can <?php echo e(do_spintax('{cook|have}')); ?> <?php echo e($title); ?> using <?php echo e(count($ingredient)); ?> ingredients and <?php echo e(count($instruction)); ?> steps. Here is how you <?php echo e(do_spintax('{cook|can achieve}')); ?> <?php echo e(do_spintax('{that|it}')); ?>.
</p>

<!--ads/article.txt-->

<h2 class="text-green-800 font-bold text-lg md:text-xl py-4 pl-2 border-t-2 border-b-2 border-green-800 mt-6 mb-2">The ingredients needed to make <?php echo e($title); ?>:</h2>

<ul class="list-disc list-inside">
<?php $__currentLoopData = $ingredient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="pl-4 py-2 text-gray-800 bg-green-100 font-medium md:text-lg rounded-3xl mb-2">
<?php echo e(do_spintax('{Prepare|Take|Get|Make ready}')); ?> <?php echo e($bahan); ?>

</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<!--ads/responsive.txt-->

<h2 class="text-green-800 font-bold text-lg md:text-xl py-4 pl-2 border-t-2 border-b-2 border-green-800 mt-6 mb-2"><?php echo e(do_spintax('{Steps|Instructions|Step by Step}')); ?> to <?php echo e(do_spintax('{make|create|cook}')); ?> <?php echo e($title); ?>:</h2>

<ol class="list-inside">
<?php $__currentLoopData = $instruction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="pl-4 py-2 text-gray-800 bg-green-100 font-medium md:text-lg rounded-3xl mb-2">
<?php echo e($step); ?>

</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>

<!--ads/article.txt-->

<p class="py-2 md:text-lg">
So <?php echo e(do_spintax('{thats|that is}')); ?> going to wrap <?php echo e(do_spintax('{it|this}')); ?> up <?php echo e(do_spintax('{for|with}')); ?> this <?php echo e(do_spintax('{special|exceptional}')); ?> food <?php echo e($title); ?> recipe. <?php echo e(do_spintax('{Thanks so much|Thank you very much}')); ?> for <?php echo e(do_spintax('{your time|reading}')); ?>. <?php echo e(do_spintax('{Im|I am}')); ?> <?php echo e(do_spintax('{sure|confident}')); ?> <?php echo e(do_spintax('{you|that you}')); ?> <?php echo e(do_spintax('{can|will}')); ?> make this at home. <?php echo e(do_spintax('{There is|Theres}')); ?> gonna be <?php echo e(do_spintax('{more|another}')); ?> interesting food <?php echo e(do_spintax('{at|in}')); ?> home recipes coming up. <?php echo e(do_spintax('{Remember|Dont forget}')); ?> to <?php echo e(do_spintax('{save|bookmark}')); ?> this page <?php echo e(do_spintax('{on|in}')); ?> your browser, and share it to your <?php echo e(do_spintax('{family|loved ones}')); ?>, <?php echo e(do_spintax('{friends and colleague|colleague and friends}')); ?>. <?php echo e(do_spintax('{Thanks again|Thank you}')); ?> for reading. Go on get cooking!
</p>

<!--ads/responsive.txt-->

<?php if(!empty($review)): ?>
    <h2 class="text-green-800 font-bold text-lg md:text-xl py-4 pl-2 border-t-2 border-b-2 border-green-800 mt-6 mb-2">Reviews of <?php echo e($title); ?>:</h2>
    <ul class="list-disc list-inside">
    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="pl-4 py-2 text-gray-800 bg-green-100 font-medium md:text-lg rounded-3xl mb-2">
    <b><?php echo e($rev['name']); ?></b> - <?php echo e($rev['body']); ?>

    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\Users\Administrator\Desktop\PHPRecipes\views/theme/md/image.blade.php ENDPATH**/ ?>