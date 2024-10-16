জোড় নাকি বিজোড়?

সমস্যার বিবরণ
এমন একটি প্রোগ্রাম লিখ যা পরীক্ষা করবে ইউজারের ইনপুট দেয়া সংখ্যাটি জোড় নাকি বিজোড়।

ইনপুট
ইনপুটটি হবে একটি integer।

আউটপুট
আউটপুটে উল্লেখ থাকবে সংখ্যাটি জোড় নাকি বিজোড়।

সীমাবদ্ধতা
-2 31 ≤ |S| ≤ 231 - 1
উদাহরণ:
Enter a number

ইনপুট:
7
আউটপুট:
7 is an odd number.
উদাহরণ-২:
Enter a number

ইনপুট:
8
আউটপুট:
8 is an even number.







<?php
fscanf(STDIN, '%d', $a);

if ($a % 2 == 0) {
    echo $a . " is an even number.";
} else {
    echo $a . " is an odd number.";
}
