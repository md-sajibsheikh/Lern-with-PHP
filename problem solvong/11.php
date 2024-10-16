অদল বদলের খেলা

EN
সমস্যার বিবরণ
এমন একটি প্রোগ্রাম লিখ যেখানে দুইটা সংখ্যা দুইটা variable এর মধ্যে অদল বদল হবে।

ইনপুট
ইনপুট হবে দুইটি integer সংখ্যা।

আউটপুট
আউটপুট হবে দুইটি integer সংখ্যা।

সীমাবদ্ধতা
-2 31 ≤ |S| ≤ 231 - 1
উদাহরণ:
Enter two numbers

ইনপুট:
10 20
আউটপুট:
Before swapping: num1 = 10, num2 = 20
After swapping: num1 = 20, num2 = 10















<?php

fscanf(STDIN, '%d %d', $num1, $num2);

echo 'Before swapping: num1 = ' . $num1 . ', num2 = ' . $num2 . "\n";

// Swap করার জন্য তৃতীয় পরিবর্তক ব্যবহার করা
$temp = $num1; // $num1 এর মান তৃতীয় পরিবর্তকে রাখুন
$num1 = $num2; // $num2 এর মান $num1 এ দিন
$num2 = $temp; // $temp এর মান $num2 এ দিন

echo 'After swapping: num1 = ' . $num1 . ', num2 = ' . $num2 . "\n";
