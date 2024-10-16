<!-- পজিটিভ নেগেটিভ

EN
সমস্যার বিবরণ
এমন একটি প্রোগ্রাম লিখ যেখানে ইউজার একটি সংখ্যা লিখলে সেটি positive, negative নাকি 0 তা জানানো হবে।

ইনপুট
ইনপুটটি হবে একটি integer.

আউটপুট
আউটপুটে সংখ্যাটির টাইপ বলা হবে।

সীমাবদ্ধতা
-2 31 ≤ |S| ≤ 231 - 1
উদাহরণ-১:
Enter a number

ইনপুট:
5
আউটপুট:
5 is a positive number.
উদাহরণ-২:
Enter a number

ইনপুট:
-3
আউটপুট:
-3 is a negative number.
উদাহরণ-৩:
Enter a number

ইনপুট:
0 -->









<?php

fscanf(STDIN, '%d', $a);

if ($a <0) {
    echo  $a . ' is a negative number.';
}
elseif($a>0){
    echo $a . " is a positive number.";
}

else {
    echo 'The number is zero. ';
}
